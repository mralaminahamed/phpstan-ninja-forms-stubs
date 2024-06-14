# Ninja Forms Stubs

[![Packagist stats](https://img.shields.io/packagist/dt/mralaminahamed/ninja-forms-stubs.svg)](https://packagist.org/packages/mralaminahamed/ninja-forms-stubs/stats)
[![Packagist](https://img.shields.io/packagist/v/mralaminahamed/ninja-forms-stubs.svg?color=4CC61E&style=popout)](https://packagist.org/packages/mralaminahamed/ninja-forms-stubs)
[![Tweet](https://img.shields.io/badge/Tweet-share-d5d5d5?style=social&logo=twitter)](https://twitter.com/intent/tweet?text=https%3A%2F%2Fgithub.com%2Fmralaminahamed%2Fphpstan-ninja-forms-stubs&url=I%20use%20mralaminahamed%2Fphpstan-ninja-forms-stubs%20for%20IDE%20completion%20and%20static%20analysis)

This package provides stub declarations for the [Ninja Forms plugin](https://wordpress.org/plugins/ninja-forms/)
functions, classes and interfaces.
These stubs can help plugin and theme developers leverage IDE completion
and static analysis tools like [PHPStan](https://github.com/phpstan/phpstan).

The stubs are generated directly from the [source](https://wordpress.org/plugins/ninja-forms/)
using [php-stubs/generator](https://github.com/php-stubs/generator).

## Requirements

- PHP >=7.1

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev mralaminahamed/ninja-forms-stubs
```

Alternatively you may download `ninja-forms-stubs.php` directly.

## Usage in PHPStan

Include stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        - vendor/mralaminahamed/ninja-forms-stubs/ninja-forms-constants-stubs.php
        - vendor/mralaminahamed/ninja-forms-stubs/ninja-forms-stubs.php
```
