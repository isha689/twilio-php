<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Serverless\V1\Service\Environment;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $environmentSid
 * @property string $key
 * @property string $value
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 */
class VariableInstance extends InstanceResource {
    /**
     * Initialize the VariableInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the Service to create the Variable resource under.
     * @param string $environmentSid The SID of the Environment in which the Variable resource exists.
     * @param string $sid The SID of the Variable resource to delete.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $environmentSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'environmentSid' => Values::array_get($payload, 'environment_sid'),
            'key' => Values::array_get($payload, 'key'),
            'value' => Values::array_get($payload, 'value'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'environmentSid' => $environmentSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return VariableContext Context for this VariableInstance
     */
    protected function proxy(): VariableContext {
        if (!$this->context) {
            $this->context = new VariableContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['environmentSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the VariableInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the VariableInstance
     *
     * @return VariableInstance Fetched VariableInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): VariableInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the VariableInstance
     *
     * @param array|Options $options Optional Arguments
     * @return VariableInstance Updated VariableInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): VariableInstance {
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
        return '[Twilio.Serverless.V1.VariableInstance ' . \implode(' ', $context) . ']';
    }
}

