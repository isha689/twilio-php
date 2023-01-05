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


namespace Twilio\Rest2\Api\V2010\Account\Queue;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class MemberContext extends InstanceContext {
    /**
     * Initialize the MemberContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the Member resource(s) to fetch.
     * @param string $queueSid The SID of the Queue in which to find the members to fetch.
     * @param string $callSid The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID of the resource(s) to fetch.
     */
    public function __construct(Version $version, $accountSid , $queueSid , $callSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'queueSid' => $queueSid,  'callSid' => $callSid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Queues/' . \rawurlencode($queueSid) . '/Members/' . \rawurlencode($callSid) . '.json';
    }

    /**
     * Fetch the MemberInstance
     *
     * @return MemberInstance Fetched MemberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): MemberInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new MemberInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['queueSid']
            , $this->solution['callSid']
        );
    }

    /**
     * Update the MemberInstance
     *
     * @param string $url The absolute URL of the Queue resource.
     * @param array|Options $options Optional Arguments
     * @return MemberInstance Updated MemberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $url, array $options = []): MemberInstance {
        $options = new Values($options);

        $data = Values::of([
            'Url' => $url,
            'Method' => $options['method'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new MemberInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['queueSid']
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
        return '[Twilio.Api.V2010.MemberContext ' . \implode(' ', $context) . ']';
    }
}
