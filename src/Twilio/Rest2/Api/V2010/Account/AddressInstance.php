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
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest2\Api\V2010\Account\Address\DependentPhoneNumberList;


/**
 * @property string $accountSid
 * @property string $city
 * @property string $customerName
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $friendlyName
 * @property string $isoCountry
 * @property string $postalCode
 * @property string $region
 * @property string $sid
 * @property string $street
 * @property string $uri
 * @property bool $emergencyEnabled
 * @property bool $validated
 * @property bool $verified
 * @property string $streetSecondary
 */
class AddressInstance extends InstanceResource {
    protected $_dependentPhoneNumbers;

    /**
     * Initialize the AddressInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will be responsible for the new Address resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the Address resource to delete.
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'city' => Values::array_get($payload, 'city'),
            'customerName' => Values::array_get($payload, 'customer_name'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'isoCountry' => Values::array_get($payload, 'iso_country'),
            'postalCode' => Values::array_get($payload, 'postal_code'),
            'region' => Values::array_get($payload, 'region'),
            'sid' => Values::array_get($payload, 'sid'),
            'street' => Values::array_get($payload, 'street'),
            'uri' => Values::array_get($payload, 'uri'),
            'emergencyEnabled' => Values::array_get($payload, 'emergency_enabled'),
            'validated' => Values::array_get($payload, 'validated'),
            'verified' => Values::array_get($payload, 'verified'),
            'streetSecondary' => Values::array_get($payload, 'street_secondary'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return AddressContext Context for this AddressInstance
     */
    protected function proxy(): AddressContext {
        if (!$this->context) {
            $this->context = new AddressContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the AddressInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the AddressInstance
     *
     * @return AddressInstance Fetched AddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AddressInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AddressInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AddressInstance Updated AddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): AddressInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the dependentPhoneNumbers
     */
    protected function getDependentPhoneNumbers(): DependentPhoneNumberList {
        return $this->proxy()->dependentPhoneNumbers;
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
        return '[Twilio.Api.V2010.AddressInstance ' . \implode(' ', $context) . ']';
    }
}

