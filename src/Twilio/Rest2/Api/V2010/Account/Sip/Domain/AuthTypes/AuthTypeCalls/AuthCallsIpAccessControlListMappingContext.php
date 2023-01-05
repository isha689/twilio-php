<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeCalls;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class AuthCallsIpAccessControlListMappingContext extends InstanceContext {
    /**
     * Initialize the AuthCallsIpAccessControlListMappingContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $domainSid The SID of the SIP domain that will contain the new resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the IpAccessControlListMapping resource to delete.
     */
    public function __construct(Version $version, $accountSid , $domainSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'domainSid' => $domainSid,  'sid' => $sid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/Domains/' . \rawurlencode($domainSid) . '/Auth/Calls/IpAccessControlListMappings/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Delete the AuthCallsIpAccessControlListMappingInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the AuthCallsIpAccessControlListMappingInstance
     *
     * @return AuthCallsIpAccessControlListMappingInstance Fetched AuthCallsIpAccessControlListMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AuthCallsIpAccessControlListMappingInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new AuthCallsIpAccessControlListMappingInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['domainSid']
            , $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.AuthCallsIpAccessControlListMappingContext ' . \implode(' ', $context) . ']';
    }
}
