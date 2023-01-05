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
use Twilio\InstanceResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $callSid
 * @property string $name
 * @property string $status
 * @property \DateTime $dateUpdated
 * @property string $uri
 */
class StreamInstance extends InstanceResource {
    /**
     * Initialize the StreamInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created this Stream resource.
     * @param string $callSid The SID of the [Call](https://www.twilio.com/docs/voice/api/call-resource) the Stream resource is associated with.
     * @param string $sid The SID of the Stream resource, or the `name` used when creating the resource
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $callSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'callSid' => Values::array_get($payload, 'call_sid'),
            'name' => Values::array_get($payload, 'name'),
            'status' => Values::array_get($payload, 'status'),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'uri' => Values::array_get($payload, 'uri'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return StreamContext Context for this StreamInstance
     */
    protected function proxy(): StreamContext {
        if (!$this->context) {
            $this->context = new StreamContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['callSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Update the StreamInstance
     *
     * @param string $status 
     * @return StreamInstance Updated StreamInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status): StreamInstance {
        return $this->proxy()->update($status);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Api.V2010.StreamInstance ' . \implode(' ', $context) . ']';
    }
}

