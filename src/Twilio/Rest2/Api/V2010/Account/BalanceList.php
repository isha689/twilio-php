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

namespace Twilio\Rest2\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Version;


class BalanceList extends ListResource {
    /**
     * Construct the BalanceList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique SID identifier of the Account.
     */
    public function __construct(Version $version, string $accountSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Balance.json';
    }

    /**
     * Fetch the BalanceInstance
     *
     * @return BalanceInstance Fetched BalanceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BalanceInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new BalanceInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api.V2010.BalanceList]';
    }
}
