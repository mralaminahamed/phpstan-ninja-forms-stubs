#!/usr/bin/env bash
#
# Generate Ninja Forms stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for Ninja Forms.\n * @see https://ninjaforms.com/\n * @see https://github.com/mralaminahamed/phpstan-ninja-forms-stubs\n */'

FILE="ninja-forms-stubs.php"
FILE_CONSTANTS="ninja-forms-constants-stubs.php"

set -e

test -f "$FILE" || touch "$FILE"
test -f "$FILE_CONSTANTS" || touch "$FILE_CONSTANTS"
test -d "source/ninja-forms"

# Exclude globals, constants.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Exclude functions, classes, interfaces, traits and globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --constants \
    --out="$FILE_CONSTANTS"
