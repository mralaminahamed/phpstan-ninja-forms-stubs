#!/usr/bin/env bash
#
# Generate Ninja Forms stubs from all the latest versions.
#

set -e

# Watch current release on WordPress.org.
WC_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/ninja-forms.json")"

# Define the list of major.minor versions to check.
VERSIONS=(2.9 3.0 3.1 3.2 3.3 3.4 3.5 3.6 3.7 3.8)

for V in "${VERSIONS[@]}"; do
    # Find the latest version
    printf -v JQ_FILTER '."versions" | keys[] | select(test("^%s\\\\.%s\\\\.\\\\d+$"))' "${V%.*}" "${V#*.}"
    LATEST="$(jq -r "$JQ_FILTER" <<<"$WC_JSON" | sort -t "." -k 3 -g | tail -n 1)"

    if [ -z "$LATEST" ]; then
        echo "No version found for ${V}!"
        continue
    fi

    echo "Releasing version ${LATEST} ..."

    # Check if the tag already exists.
    if git rev-parse "refs/tags/v${LATEST}" >/dev/null 2>&1; then
        echo "Tag v${LATEST} already exists!"
        continue
    fi

    # Clean up source/ directory.
    git status --ignored --short -- source/ | sed -n -e 's#^!! ##p' | xargs --no-run-if-empty rm -rf

    # Update composer.json with the new version.
    printf -v SED_EXP 's#\\("ninja-forms/ninja-forms"\\): "[0-9]\\+\\.[0-9]\\+\\.[0-9]\\+"#\\1: "%s"#' "${LATEST}"
    sed -i -e "$SED_EXP" source/composer.json

    # Download and unzip the new version.
    wget -q -P source/ "https://downloads.wordpress.org/plugin/ninja-forms.${LATEST}.zip"
    unzip -q -d source/ source/ninja-forms.${LATEST}.zip
    rm source/ninja-forms.${LATEST}.zip  # Clean up the downloaded zip file

    # Generate stubs.
    echo "Generating stubs ..."
    ./generate.sh

    # Check if there are changes to commit.
    if [ -n "$(git status --porcelain)" ]; then
        git add .
        git commit -m "Generate stubs for Ninja Forms ${LATEST}"
        git tag "v${LATEST}"
    else
        echo "No changes to commit for version ${LATEST}"
    fi
done

echo "All versions processed."
