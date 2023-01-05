<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Studio
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Studio\V1\Flow\Engagement;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest2\Studio\V1\Flow\Engagement\Step\StepContextList;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $flowSid
 * @property string $engagementSid
 * @property string $name
 * @property array $context
 * @property string $transitionedFrom
 * @property string $transitionedTo
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 * @property array $links
 */
class StepInstance extends InstanceResource {
    protected $_stepContext;

    /**
     * Initialize the StepInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $flowSid The SID of the Flow with the Step to fetch.
     * @param string $engagementSid The SID of the Engagement with the Step to fetch.
     * @param string $sid The SID of the Step resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $flowSid, string $engagementSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'flowSid' => Values::array_get($payload, 'flow_sid'),
            'engagementSid' => Values::array_get($payload, 'engagement_sid'),
            'name' => Values::array_get($payload, 'name'),
            'context' => Values::array_get($payload, 'context'),
            'transitionedFrom' => Values::array_get($payload, 'transitioned_from'),
            'transitionedTo' => Values::array_get($payload, 'transitioned_to'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['flowSid' => $flowSid, 'engagementSid' => $engagementSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return StepContext Context for this StepInstance
     */
    protected function proxy(): StepContext {
        if (!$this->context) {
            $this->context = new StepContext(
                $this->version,
                $this->solution['flowSid'],
                $this->solution['engagementSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the StepInstance
     *
     * @return StepInstance Fetched StepInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): StepInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Access the stepContext
     */
    protected function getStepContext(): StepContextList {
        return $this->proxy()->stepContext;
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
        return '[Twilio.Studio.V1.StepInstance ' . \implode(' ', $context) . ']';
    }
}

