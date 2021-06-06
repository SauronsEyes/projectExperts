<?php namespace Visa\VisitorAnalytics\Controllers;

use Backend\Facades\Backend;
use Backend\Facades\BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Config;
use October\Rain\Support\Facades\Flash;
use System\Classes\SettingsManager;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsAddSiteFailureException;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsAlreadyUsedFreeTrialException;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsAuthExpiredException;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsExistingUserException;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsRequest;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsSiteNotFoundException;
use Visa\VisitorAnalytics\Classes\VisitorAnalyticsUserNotFoundException;
use Visa\VisitorAnalytics\Models\ConfigData;

/**
 * Settings Back-end Controller
 */
class Settings extends Controller
{

    /**
     *
     * Renders dashboard or redirects to register/login
     *
     * @return mixed
     */
    public function dashboard() {
        $this->pageTitle = 'Visitor Analytics';
        $visitor_analytics_data = ConfigData::instance();

        if ($visitor_analytics_data->token) {
            try {
                $request = new VisitorAnalyticsRequest($visitor_analytics_data->token);

                // refresh token if needed
                if ((time() - $visitor_analytics_data->token_created) > VisitorAnalyticsRequest::TOKEN_LIFETIME) {
                    $response_data = \GuzzleHttp\json_decode($request->refreshToken($visitor_analytics_data->refreshToken)
                        ->getBody());
                    $visitor_analytics_data->token = $response_data->token;
                    $visitor_analytics_data->refreshToken = $response_data->refreshToken;
                    $visitor_analytics_data->userId = $response_data->userId;
                    $visitor_analytics_data->save();
                    $visitor_analytics_data = $visitor_analytics_data->fresh();
                    $request->setToken($visitor_analytics_data->token);
                }

                // get (or add) website
                try {
                    $website_data = \GuzzleHttp\json_decode($request->getWebsite(url('/'))->getBody());
                } catch (VisitorAnalyticsSiteNotFoundException $e) {
                    // try to add the site
                    $website_data = \GuzzleHttp\json_decode($request->addWebsite(
                        url('/'),
                        Config::get('app.timezone', ''))->getBody());
                    try {
                        $request->freeTrialStart($website_data->id);
                    } catch (VisitorAnalyticsAlreadyUsedFreeTrialException $e) {
                        // nothing to do, it's just already started
                    }
                }
                $visitor_analytics_data->website_id = $website_data->id;
                $visitor_analytics_data->save();
                $visitor_analytics_data = $visitor_analytics_data->fresh();

                if (isset($visitor_analytics_data->website_id) && !isset($visitor_analytics_data->trackingCode)) {
                    // try to get tracking code
                    $tracker_data = \GuzzleHttp\json_decode($request->getTrackerCode($visitor_analytics_data->website_id)
                        ->getBody());
                    $visitor_analytics_data->trackingCode = $tracker_data->trackingCode;
                    $visitor_analytics_data->save();
                    $visitor_analytics_data = $visitor_analytics_data->fresh();
                    Flash::success(Lang::get('visa.visitoranalytics::lang.errors.tracking_success'));
                }
            } catch (VisitorAnalyticsAuthExpiredException $e) {
                Flash::error(Lang::get($e->getMessage()));
                return Redirect::to(Backend::url('visa/visitoranalytics/settings/login'));
            } catch (VisitorAnalyticsSiteNotFoundException $e) {
                Flash::error(Lang::get($e->getMessage()));
                return Redirect::to(Backend::url('visa/visitoranalytics/settings/login'));
            } catch (VisitorAnalyticsAddSiteFailureException $e) {
                Flash::error(Lang::get($e->getMessage()));
                return Redirect::to(Backend::url('visa/visitoranalytics/settings/login'));
            } catch (VisitorAnalyticsUserNotFoundException $e) {
                Flash::error(Lang::get($e->getMessage()));
                return Redirect::to(Backend::url('visa/visitoranalytics/settings/register'));
            }

            // if there is enough data, render the iframe
            if ($visitor_analytics_data->token && $visitor_analytics_data->website_id && $visitor_analytics_data->userId) {
                return $this->makePartial('dashboard', [
                    'token' => $visitor_analytics_data->token,
                    'website_id' => $visitor_analytics_data->website_id,
                    'userId' => $visitor_analytics_data->userId,
                ]);
            }

            return 'Something went wrong';
        }

        // check if there's email set
        if ($visitor_analytics_data->email) {
            return Redirect::to(Backend::url('visa/visitoranalytics/settings/login'));
        }

        return Redirect::to(Backend::url('visa/visitoranalytics/settings/register'));
    }

    /**
     *
     * Renders register form
     *
     * @return mixed
     */
    public function register() {
        $this->pageTitle = 'Register at Visitor Analytics';
        SettingsManager::setContext('Visa.VisitorAnalytics', 'register');

        // check if already has data
        $data = ConfigData::instance();
        $message = '';
        if (isset($data->email)) {
            $message = Lang::get('visa.visitoranalytics::lang.forms.already_has_account');
        }

        return $this->makePartial('register', ['message' => $message]);
    }


    /**
     *
     * Processes user registration
     *
     * @return mixed
     */
    public function onRegisterUser() {
        $input = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'companyName' => 'nullable',
            'terms' => 'required',
            'newsletterSubscribed' => 'nullable',
        ]);

        $input['privacyTermsAccepted'] = $input['terms'];
        $input['dpaAccepted'] = $input['terms'];
        $input['businessConditionAccepted'] = $input['terms'];
        $input['source'] = 'OCTOBER';
        unset($input['terms']);

        $request = new VisitorAnalyticsRequest();

        try {
            $request->registerUser($input);
        } catch (VisitorAnalyticsExistingUserException $e) {
            Flash::error(Lang::get($e->getMessage()));
            return Redirect::to(Backend::url('visa/visitoranalytics/settings/login'));
        } catch (\Exception $e) {
            Flash::error(Lang::get($e->getMessage()));
            return NULL;
        }

        // reset data
        $data = ConfigData::instance();
        $data->resetDefault();

        // store email
        $newData = ConfigData::instance();
        $newData->email = $input['email'];
        $newData->save();

        Flash::success(Lang::get('visa.visitoranalytics::lang.errors.reg_success'));
        return Redirect::to(Backend::url('visa/visitoranalytics/settings/login'));
    }


    /**
     *
     * Renders login form
     *
     * @return mixed
     */
    public function login() {
        $this->pageTitle = 'Log in Visitor Analytics';
        SettingsManager::setContext('Visa.VisitorAnalytics', 'login');

        $data = ConfigData::instance();

        return $this->makePartial('login', [
            'email' => $data->email,
        ]);
    }


    /**
     *
     * Processes user login
     *
     * @return mixed
     */
    public function onUserLogin() {
        $input = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $request = new VisitorAnalyticsRequest();
        try {
            $response_data = \GuzzleHttp\json_decode($request->loginUser($input)->getBody());
        } catch (\Exception $e) {
            Flash::error(Lang::get($e->getMessage()));
            return NULL;
        }

        // save successful login data
        $visitor_analytics_data = ConfigData::instance();
        $visitor_analytics_data->token = $response_data->token;
        $visitor_analytics_data->refreshToken = $response_data->refreshToken;
        $visitor_analytics_data->userId = $response_data->userId;
        $visitor_analytics_data->token_created = time();
        $visitor_analytics_data->email = $input['email'];
        $visitor_analytics_data->save();

        return Redirect::to(Backend::url('visa/visitoranalytics/settings/dashboard'));
    }


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Visa.VisitorAnalytics', 'dashboard');

        $this->addCss('/plugins/visa/visitoranalytics/assets/css/visitor-analytics.css');
    }
}
