<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Conversations\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class BindingContext extends InstanceContext {
    /**
     * Initialize the BindingContext
     *
     * @param Version $version Version that contains the resource
     * @param string $chatServiceSid The SID of the [Conversation Service](https://www.twilio.com/docs/conversations/api/service-resource) to delete the Binding resource from.
     * @param string $sid The SID of the Binding resource to delete.
     */
    public function __construct(Version $version, $chatServiceSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['chatServiceSid' => $chatServiceSid,  'sid' => $sid,  ];

        $this->uri = '/Services/' . \rawurlencode($chatServiceSid) . '/Bindings/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the BindingInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the BindingInstance
     *
     * @return BindingInstance Fetched BindingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BindingInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new BindingInstance(
            $this->version,
            $payload
            , $this->solution['chatServiceSid']
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
        return '[Twilio.Conversations.V1.BindingContext ' . \implode(' ', $context) . ']';
    }
}
