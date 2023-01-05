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


namespace Twilio\Rest2\Api\V2010\Account\Sip\Domain;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $domainSid
 * @property string $friendlyName
 * @property string $sid
 * @property string $uri
 */
class CredentialListMappingInstance extends InstanceResource {
    /**
     * Initialize the CredentialListMappingInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The unique id of the [Account](https://www.twilio.com/docs/iam/api/account) responsible for this resource.
     * @param string $domainSid A 34 character string that uniquely identifies the SIP Domain for which the CredentialList resource will be mapped.
     * @param string $sid A 34 character string that uniquely identifies the resource to delete.
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $domainSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'domainSid' => Values::array_get($payload, 'domain_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'sid' => Values::array_get($payload, 'sid'),
            'uri' => Values::array_get($payload, 'uri'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'domainSid' => $domainSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return CredentialListMappingContext Context for this CredentialListMappingInstance
     */
    protected function proxy(): CredentialListMappingContext {
        if (!$this->context) {
            $this->context = new CredentialListMappingContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['domainSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the CredentialListMappingInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the CredentialListMappingInstance
     *
     * @return CredentialListMappingInstance Fetched CredentialListMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CredentialListMappingInstance {
        return $this->proxy()->fetch();
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
        return '[Twilio.Api.V2010.CredentialListMappingInstance ' . \implode(' ', $context) . ']';
    }
}

