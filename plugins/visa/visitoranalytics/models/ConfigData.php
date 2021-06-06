<?php namespace Visa\VisitorAnalytics\Models;

use Model;

/**
 * ConfigData Model
 */
class ConfigData extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'visitor_analytics_settings';

    public $settingsFields = '';

}
