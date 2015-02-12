# IDE Helpers

This plugin adds [barryvdh/ide-helpers](https://github.com/barryvdh/laravel-ide-helper) package to October for better IDE support.

## Installation

* `git clone` into */plugins/flynsarmy/idehelper*
* `composer install`
* Until [this PR](https://github.com/barryvdh/laravel-ide-helper/pull/167) is accepted, open */vendor/barryvdh/laravel-ide-helper/src/Generator.php* and change `ConfigRepository $config` to `/*ConfigRepository */$config` in the constructor.
* Until [this PR](https://github.com/barryvdh/laravel-ide-helper/pull/167) is accepted, do the same in */vendor/barryvdh/laravel-ide-helper/src/Console/GeneratorCommand.php*.
* `php artisan ide-helper:generate`

## TODO

* Auto clear-compiled/generate/optimize after update
