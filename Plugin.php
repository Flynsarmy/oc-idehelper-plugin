<?php namespace Flynsarmy\IdeHelper;

use App;
use System\Classes\PluginBase;

/**
 * IdeHelper Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'IdeHelper',
            'description' => 'Make development easier with IDE helpers!',
            'author'      => 'Flynsarmy',
            'icon'        => 'icon-code'
        ];
    }

    public function boot()
    {
        App::register('\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
    }
}
