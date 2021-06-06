<?php namespace Visa\VisitorAnalytics\Components;

use Cms\Classes\ComponentBase;
use Visa\VisitorAnalytics\Models\ConfigData;

class Tracker extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'visa.visitoranalytics::lang.component.name',
            'description' => 'visa.visitoranalytics::lang.component.description'
        ];
    }


    /**
     *
     * Define properties (should there'll be a need for any)
     *
     * @return array
     */
    public function defineProperties()
    {
        // Since we get everything from Visitor-Analytics API no props needed
        return [];
    }


    /**
     *
     * Returns tracker code for the component
     *
     * @return string
     */
    public function tracker() {
        $visitor_analytics_data = ConfigData::instance();

        return $visitor_analytics_data->trackingCode ? $visitor_analytics_data->trackingCode : '';
    }
}
