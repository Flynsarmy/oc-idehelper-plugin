# IDE Helpers

This plugin adds [barryvdh/ide-helpers](https://github.com/barryvdh/laravel-ide-helper) package to October for better IDE support.

## Installation

* `git clone` into */plugins/flynsarmy/idehelper*
* `composer install`
* `php artisan ide-helper:generate`

## Configuration

No configuration is necessary, but for use of `php artisan ide-helper:models` you may need to edit `/config/config.php` to include the model files you wish to be scanned.

## TODO

* Auto clear-compiled/generate/optimize after update
