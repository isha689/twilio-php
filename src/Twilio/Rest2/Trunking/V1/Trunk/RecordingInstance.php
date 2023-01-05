<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trunking
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Trunking\V1\Trunk;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $mode
 * @property string $trim
 */
class RecordingInstance extends InstanceResource {
    /**
     * Initialize the RecordingInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $trunkSid The SID of the Trunk from which to fetch the recording settings.
     */
    public function __construct(Version $version, array $payload, string $trunkSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'mode' => Values::array_get($payload, 'mode'),
            'trim' => Values::array_get($payload, 'trim'),
        ];

        $this->solution = ['trunkSid' => $trunkSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return RecordingContext Context for this RecordingInstance
     */
    protected function proxy(): RecordingContext {
        if (!$this->context) {
            $this->context = new RecordingContext(
                $this->version,
                $this->solution['trunkSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the RecordingInstance
     *
     * @return RecordingInstance Fetched RecordingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): RecordingInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the RecordingInstance
     *
     * @param array|Options $options Optional Arguments
     * @return RecordingInstance Updated RecordingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): RecordingInstance {
        return $this->proxy()->update($options);
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
        return '[Twilio.Trunking.V1.RecordingInstance ' . \implode(' ', $context) . ']';
    }
}

