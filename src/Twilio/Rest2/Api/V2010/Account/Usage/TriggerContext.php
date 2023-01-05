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


namespace Twilio\Rest2\Api\V2010\Account\Usage;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class TriggerContext extends InstanceContext {
    /**
     * Initialize the TriggerContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the UsageTrigger resource to delete.
     */
    public function __construct(Version $version, $accountSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'sid' => $sid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Usage/Triggers/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Delete the TriggerInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the TriggerInstance
     *
     * @return TriggerInstance Fetched TriggerInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TriggerInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new TriggerInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the TriggerInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TriggerInstance Updated TriggerInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): TriggerInstance {
        $options = new Values($options);

        $data = Values::of([
            'CallbackMethod' => $options['callbackMethod'],
            'CallbackUrl' => $options['callbackUrl'],
            'FriendlyName' => $options['friendlyName'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new TriggerInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
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
        return '[Twilio.Api.V2010.TriggerContext ' . \implode(' ', $context) . ']';
    }
}
