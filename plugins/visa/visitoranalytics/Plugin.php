<?php namespace Visa\VisitorAnalytics;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

/**
 * VisitorAnalytics Plugin Information File
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
            'name'        => 'Visitor Analytics',
            'description' => 'visa.visitoranalytics::lang.plugin.description',
            'author'      => 'Visitor Analytics',
            'icon'        => 'icon-area-chart'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Visa\VisitorAnalytics\Components\Tracker' => 'visitorAnalyticsTracker',
        ];
    }


    /**
     *
     * Register settings items
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'dashboard' => [
                'label'       => 'visa.visitoranalytics::lang.plugin.dashboard_label',
                'description' => 'visa.visitoranalytics::lang.plugin.dashboard_description',
                'category'    => 'Visitor analytics',
                'icon'        => 'icon-area-chart',
                'url'         => Backend::url('visa/visitoranalytics/settings/dashboard'),
                'order'       => 500,
                'keywords'    => 'visitor analytics statistics',
            ],
            'register' => [
                'label'       => 'visa.visitoranalytics::lang.plugin.register_label',
                'description' => 'visa.visitoranalytics::lang.plugin.register_description',
                'category'    => 'Visitor analytics',
                'icon'        => 'icon-user-plus',
                'url'         => Backend::url('visa/visitoranalytics/settings/register'),
                'order'       => 501,
                'keywords'    => 'visitor analytics statistics',
            ],
            'login' => [
                'label'       => 'visa.visitoranalytics::lang.plugin.login_label',
                'description' => 'visa.visitoranalytics::lang.plugin.login_description',
                'category'    => 'Visitor analytics',
                'icon'        => 'icon-user',
                'url'         => Backend::url('visa/visitoranalytics/settings/login'),
                'order'       => 502,
                'keywords'    => 'visitor analytics statistics',
            ],
        ];
    }
}
