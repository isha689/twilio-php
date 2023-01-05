<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Messaging\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $domainSid
 * @property string $configSid
 * @property string[] $messagingServiceSids
 * @property string $fallbackUrl
 * @property string $callbackUrl
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 */
class DomainConfigInstance extends InstanceResource {
    /**
     * Initialize the DomainConfigInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $domainSid Unique string used to identify the domain that this config should be associated with.
     */
    public function __construct(Version $version, array $payload, string $domainSid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'domainSid' => Values::array_get($payload, 'domain_sid'),
            'configSid' => Values::array_get($payload, 'config_sid'),
            'messagingServiceSids' => Values::array_get($payload, 'messaging_service_sids'),
            'fallbackUrl' => Values::array_get($payload, 'fallback_url'),
            'callbackUrl' => Values::array_get($payload, 'callback_url'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['domainSid' => $domainSid ?: $this->properties['domainSid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return DomainConfigContext Context for this DomainConfigInstance
     */
    protected function proxy(): DomainConfigContext {
        if (!$this->context) {
            $this->context = new DomainConfigContext(
                $this->version,
                $this->solution['domainSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the DomainConfigInstance
     *
     * @return DomainConfigInstance Fetched DomainConfigInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): DomainConfigInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the DomainConfigInstance
     *
     * @param string[] $messagingServiceSids A list of messagingServiceSids (with prefix MG)
     * @param array|Options $options Optional Arguments
     * @return DomainConfigInstance Updated DomainConfigInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $messagingServiceSids, array $options = []): DomainConfigInstance {
        return $this->proxy()->update($messagingServiceSids, $options);
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
        return '[Twilio.Messaging.V1.DomainConfigInstance ' . \implode(' ', $context) . ']';
    }
}

