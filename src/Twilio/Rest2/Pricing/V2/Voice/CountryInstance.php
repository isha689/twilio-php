<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Pricing
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Pricing\V2\Voice;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $country
 * @property string $isoCountry
 * @property string[] $outboundPrefixPrices
 * @property string[] $inboundCallPrices
 * @property string $priceUnit
 * @property string $url
 */
class CountryInstance extends InstanceResource {
    /**
     * Initialize the CountryInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $isoCountry The [ISO country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) of the origin-based voice pricing information to fetch.
     */
    public function __construct(Version $version, array $payload, string $isoCountry = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'country' => Values::array_get($payload, 'country'),
            'isoCountry' => Values::array_get($payload, 'iso_country'),
            'outboundPrefixPrices' => Values::array_get($payload, 'outbound_prefix_prices'),
            'inboundCallPrices' => Values::array_get($payload, 'inbound_call_prices'),
            'priceUnit' => Values::array_get($payload, 'price_unit'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['isoCountry' => $isoCountry ?: $this->properties['isoCountry'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return CountryContext Context for this CountryInstance
     */
    protected function proxy(): CountryContext {
        if (!$this->context) {
            $this->context = new CountryContext(
                $this->version,
                $this->solution['isoCountry']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the CountryInstance
     *
     * @return CountryInstance Fetched CountryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CountryInstance {
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
        return '[Twilio.Pricing.V2.CountryInstance ' . \implode(' ', $context) . ']';
    }
}

