<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Verify\V2\Service\RateLimit;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $rateLimitSid
 * @property string $serviceSid
 * @property string $accountSid
 * @property int $max
 * @property int $interval
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 */
class BucketInstance extends InstanceResource {
    /**
     * Initialize the BucketInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/verify/api/service) the resource is associated with.
     * @param string $rateLimitSid The Twilio-provided string that uniquely identifies the Rate Limit resource.
     * @param string $sid A 34 character string that uniquely identifies this Bucket.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $rateLimitSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'rateLimitSid' => Values::array_get($payload, 'rate_limit_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'max' => Values::array_get($payload, 'max'),
            'interval' => Values::array_get($payload, 'interval'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'rateLimitSid' => $rateLimitSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return BucketContext Context for this BucketInstance
     */
    protected function proxy(): BucketContext {
        if (!$this->context) {
            $this->context = new BucketContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['rateLimitSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the BucketInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the BucketInstance
     *
     * @return BucketInstance Fetched BucketInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): BucketInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the BucketInstance
     *
     * @param array|Options $options Optional Arguments
     * @return BucketInstance Updated BucketInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): BucketInstance {
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
        return '[Twilio.Verify.V2.BucketInstance ' . \implode(' ', $context) . ']';
    }
}

