<?php namespace Flynsarmy\IdeHelper\Updates;

use Artisan;
use Exception;
use October\Rain\Database\Updates\Seeder;

class InitialGen extends Seeder
{
    public function run()
    {
        try {
            Artisan::call('ide-helper:generate');
        } catch (Exception $e) {}
    }
}
