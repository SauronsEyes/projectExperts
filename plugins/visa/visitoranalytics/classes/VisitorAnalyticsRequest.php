<?php

namespace Visa\VisitorAnalytics\Classes;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class VisitorAnalyticsAuthExpiredException extends \Exception {};
class VisitorAnalyticsExistingUserException extends \Exception {};
class VisitorAnalyticsUserPendingException extends \Exception {};
class VisitorAnalyticsUserNotFoundException extends \Exception {};
class VisitorAnalyticsBadCredentialsException extends \Exception {};
class VisitorAnalyticsAuthErrorException extends \Exception {};
class VisitorAnalyticsSiteNotFoundException extends \Exception {};
class VisitorAnalyticsAddSiteFailureException extends \Exception {};
class VisitorAnalyticsAlreadyUsedFreeTrialException extends \Exception {};
class VisitorAnalyticsTrackingCodeErrorException extends \Exception {};

class VisitorAnalyticsRequest {

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string Auth token, used for some ops
     */
    protected $token = '';

    const ENDPOINT = 'https://sa-api.visitor-analytics.io';
    const TOKEN_LIFETIME = 3600;


    /**
     *
     * Request to register a new user
     *
     * @param array $data
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function registerUser($data) {
        try {
            $response = $this->request('/api/users', 'POST', $data);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->checkForUserExists($response);
            throw($e);
        }
        return $response;
    }

    /**
     *
     * Request to login a user
     *
     * @param array $data
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsAuthErrorException
     */
    public function loginUser($data) {
        try {
            $response = $this->request('/api/octb/token', 'POST', $data);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->checkForUserPending($response);
            $this->checkForUserNotFound($response);
            $this->checkForBadCredentials($response);
            // in case of other errors
            throw(new VisitorAnalyticsAuthErrorException('visa.visitoranalytics::lang.errors.auth_error'));
        }
        return $response;
    }


    /**
     *
     * Request to refresh auth token
     *
     * @param string $refreshToken
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function refreshToken($refreshToken) {
        // no need to catch specific errors here (only errors checked in request() are possible)
        $response = $this->request('/api/octb/token-refresh', 'POST', ['refreshToken' => $refreshToken]);
        return $response;
    }


    /**
     *
     * Request to load website id
     *
     * @param string $url
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getWebsite($url) {
        try {
            $response = $this->request('/api/websites', 'GET', ['url' => $url]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->checkForSiteNotFound($response);
            throw($e);
        }

        return $response;
    }


    /**
     *
     * Request to add new website to Visitor Analytics
     *
     * @param string $url
     * @param string $timezone
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsAddSiteFailureException
     */
    public function addWebsite($url, $timezone) {
        try {
            $response = $this->request('/api/websites', 'POST', [
                'url' => $url,
                'timezone' => $timezone,
                'platform' => 'OCTOBER',
            ]);
        } catch (ClientException $e) {
            throw new VisitorAnalyticsAddSiteFailureException('visa.visitoranalytics::lang.errors.registration_failed');
        }

        return $response;
    }


    /**
     *
     * Request to start free trial for website given
     *
     * @param string $site_id
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsAlreadyUsedFreeTrialException
     */
    public function freeTrialStart($site_id) {
        try {
            $response = $this->request('/api/websites/' . $site_id . '/subscriptions/free-trial', 'POST');
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->checkForSiteNotFound($response);
            // already used
            $data = \GuzzleHttp\json_decode($response->getBody());
            if ($data->error == 'ALREADY_USED_FREE_TRIAL') {
                throw new VisitorAnalyticsAlreadyUsedFreeTrialException('visa.visitoranalytics::lang.errors.free_trial_used');
            }
        }

        return $response;
    }


    /**
     *
     * Request a tracker code
     *
     * @param string $site_id
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsTrackingCodeErrorException
     */
    public function getTrackerCode($site_id) {
        try {
            $response = $this->request('/api/websites/' . $site_id . '/tracking-code', 'GET');
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->checkForSiteNotFound($response);
            $data = \GuzzleHttp\json_decode($response->getBody());
            throw new VisitorAnalyticsTrackingCodeErrorException('visa.visitoranalytics::lang.errors.tracker_loading_error');
        }

        return $response;
    }


    /**
     *
     * Makes a request to Visitor Analytics API
     *
     * @param string $route
     * @param string $method
     * @param array $data
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    protected function request($route, $method, $data = []) {
        $options = [];

        if (!empty($data)) {
            if ($method == 'GET') {
                $options['query'] = $data;
            } else {
                $options['json'] = $data;
            }
        }

        if ($this->token) {
            $options['headers'] = [
                'Authorization' => 'Bearer ' . $this->token,
            ];
        }

        try {
            $response = $this->client->request($method, self::ENDPOINT . $route, $options);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $this->checkForExpiredErrors($response);
            $this->checkForUserNotFound($response);
            throw $e;
        }

        return $response;
    }


    /**
     * VisitorAnalyticsRequest constructor.
     * @param string $token
     */
    public function __construct($token = '') {
        $this->client = new Client();
        $this->token = $token;
    }


    /**
     *
     * Token setter
     *
     * @param string $token
     */
    public function setToken($token) {
        $this->token = $token;
    }


    /**
     *
     * Check if there are errors that should lead to re-login
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsAuthExpiredException
     */
    protected function checkForExpiredErrors($response) {
        if (in_array($response->getStatusCode(), [200, 201])) return;

        $data = \GuzzleHttp\json_decode($response->getBody());

        if (!in_array($data->error, [
            'AUTHENTICATION_EXPIRED_JWT_TOKEN',
            'AUTHENTICATION_JWT_TOKEN_ENCODE',
            'AUTHENTICATION_INVALID_JWT_TOKEN'
        ])) {
            return;
        }

        // user should re-login
        throw new VisitorAnalyticsAuthExpiredException("visa.visitoranalytics::lang.errors.auth_expired");
    }

    /**
     *
     * Check if there is User already exists error
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsExistingUserException
     */
    protected function checkForUserExists($response) {
        if (in_array($response->getStatusCode(), [200, 201])) return;

        $data = \GuzzleHttp\json_decode($response->getBody());

        if ($data->error != 'ALREADY_EXISTING_USER') {
            return;
        }

        throw new VisitorAnalyticsExistingUserException("visa.visitoranalytics::lang.errors.user_exists");
    }


    /**
     *
     * Check if user account is pending approval
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsUserPendingException
     */
    protected function checkForUserPending($response) {
        if (in_array($response->getStatusCode(), [200, 201])) return;

        $data = \GuzzleHttp\json_decode($response->getBody());

        if ($data->error != 'AUTHENTICATION_USER_PENDING') {
            return;
        }
        throw new VisitorAnalyticsUserPendingException('visa.visitoranalytics::lang.errors.confirmation_needed');
    }


    /**
     *
     * Check if user account is not found
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsUserNotFoundException
     */
    protected function checkForUserNotFound($response) {
        if (in_array($response->getStatusCode(), [200, 201])) return;

        $data = \GuzzleHttp\json_decode($response->getBody());

        if ($data->error != 'AUTHENTICATION_USER_NOT_FOUND') {
            return;
        }
        throw new VisitorAnalyticsUserNotFoundException('visa.visitoranalytics::lang.errors.user_not_found');
    }


    /**
     *
     * Check if user provided bad credentials
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsBadCredentialsException
     */
    protected function checkForBadCredentials($response) {
        if (in_array($response->getStatusCode(), [200, 201])) return;

        $data = \GuzzleHttp\json_decode($response->getBody());

        if ($data->error != 'AUTHENTICATION_BAD_CREDENTIALS') {
            return;
        }

        // user should re-login
        throw new VisitorAnalyticsBadCredentialsException('visa.visitoranalytics::lang.errors.auth_incorrect');
    }


    /**
     *
     * Check if site wasn't found
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @throws \Visa\VisitorAnalytics\Classes\VisitorAnalyticsSiteNotFoundException
     */
    protected function checkForSiteNotFound($response) {
        if (in_array($response->getStatusCode(), [200, 201])) return;

        $data = \GuzzleHttp\json_decode($response->getBody());

        if ($data->error != 'NOT_FOUND_WEBSITE') {
            return;
        }

        throw new VisitorAnalyticsSiteNotFoundException('visa.visitoranalytics::lang.errors.site_not_found');
    }

}