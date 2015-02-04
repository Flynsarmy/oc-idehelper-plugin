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
            'description' => 'No description provided yet...',
            'author'      => 'Flynsarmy',
            'icon'        => 'icon-cubes'
        ];
    }

    public function boot()
    {
        App::register('\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
    }
}
