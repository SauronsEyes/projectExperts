# Visitor-Analytics.io integration plugin

This plugin integrates OctoberCMS with Visitor-Analytics.io statistics tracker.

## Configuration

To configure the plugin, proceed to system settings and find Visitor Analytics category, then click Dashboard (`/backend/visa/visitoranalytics/settings/dashboard`). 
You will be directed to register form which allows you to register at Visitor Analytics right from the admin page. When you are registered (or if you already have an account) check your mail to confirm registration and then proceed to Login page (`/backend/visa/visitoranalytics/settings/login`) to Log In.

After the first login your site will be registered automatically, your free trial will be activated and tracker script will be loaded from Visitor Analytics. Statistics will be available on the Dashboard page.

## Tracker component

To add Tracker code to your site's pages use Visitor Analytics Tracker component. It has no properties to configure since it is all loaded from Visitor Analytics API. 
Just add the component to pages (or partials, or layouts) you want the tracker on, and the tracker's script will be put to scripts section.