# IDE Helpers

This plugin adds [barryvdh/ide-helpers](https://github.com/barryvdh/laravel-ide-helper) package to October for better IDE support.

## Installation

* `git clone` into */plugins/flynsarmy/idehelper*
* `composer update`
* Open */plugins/flynsarmy/idehelper/vendor/barryvdh/laravel-ide-helper/src/Generator.php* and around line 113 change `if (class_exists('Auth')) {` to `if (class_exists('Auth') && method_exists('Auth', 'driver')) {` (This is necessary until [PR#155](https://github.com/barryvdh/laravel-ide-helper/pull/155) is merged)
* `php artisan ide-helper:generate`

## TODO

* Auto clear-compiled/generate/optimize after update