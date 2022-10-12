<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

class ConnectAppContext extends InstanceContext {
    /**
     * Initialize the ConnectAppContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $accountSid The account_sid
     * @param string $sid Fetch by unique connect-app Sid
     * @return \Twilio\Rest\Api\V2010\Account\ConnectAppContext 
     */
    public function __construct(Version $version, $accountSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid, 'sid' => $sid, );

        $this->uri = '/Accounts/' . rawurlencode($accountSid) . '/ConnectApps/' . rawurlencode($sid) . '.json';
    }

    /**
     * Fetch a ConnectAppInstance
     * 
     * @return ConnectAppInstance Fetched ConnectAppInstance
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ConnectAppInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the ConnectAppInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return ConnectAppInstance Updated ConnectAppInstance
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'AuthorizeRedirectUrl' => $options['authorizeRedirectUrl'],
            'CompanyName' => $options['companyName'],
            'DeauthorizeCallbackMethod' => $options['deauthorizeCallbackMethod'],
            'DeauthorizeCallbackUrl' => $options['deauthorizeCallbackUrl'],
            'Description' => $options['description'],
            'FriendlyName' => $options['friendlyName'],
            'HomepageUrl' => $options['homepageUrl'],
            'Permissions' => Serialize::map($options['permissions'], function($e) { return $e; }),
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ConnectAppInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.ConnectAppContext ' . implode(' ', $context) . ']';
    }
}