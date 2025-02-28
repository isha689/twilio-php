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


namespace Twilio\Rest2\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class FeedbackContext extends InstanceContext {
    /**
     * Initialize the FeedbackContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique id of the [Account](https://www.twilio.com/docs/iam/api/account) responsible for this resource.
     * @param string $callSid The call sid that uniquely identifies the call
     */
    public function __construct(Version $version, $accountSid , $callSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'callSid' => $callSid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/Feedback.json';
    }

    /**
     * Fetch the FeedbackInstance
     *
     * @return FeedbackInstance Fetched FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FeedbackInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new FeedbackInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['callSid']
        );
    }

    /**
     * Update the FeedbackInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Updated FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): FeedbackInstance {
        $options = new Values($options);

        $data = Values::of([
            'QualityScore' => $options['qualityScore'],
            'Issue' => $options['issue'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new FeedbackInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['callSid']
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
        return '[Twilio.Api.V2010.FeedbackContext ' . \implode(' ', $context) . ']';
    }
}
