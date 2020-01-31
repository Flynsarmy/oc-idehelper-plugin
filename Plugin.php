<?php

namespace Flynsarmy\IdeHelper;

use App;
use Config;
use System\Classes\PluginBase;

/**
 * IdeHelper Plugin Information File.
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
            'icon'        => 'icon-code',
            'homepage'    => 'https://github.com/Flynsarmy/oc-idehelper-plugin',
        ];
    }

    public function boot()
    {
        Config::set('ide-helper', Config::get('flynsarmy.idehelper::config'));
        App::register('\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
    }
}
