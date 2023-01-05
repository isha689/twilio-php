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


namespace Twilio\Rest2\Serverless\V1\Service\TwilioFunction;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest2\Serverless\V1\Service\TwilioFunction\FunctionVersion\FunctionVersionContentList;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $functionSid
 * @property string $path
 * @property string $visibility
 * @property \DateTime $dateCreated
 * @property string $url
 * @property array $links
 */
class FunctionVersionInstance extends InstanceResource {
    protected $_functionVersionContent;

    /**
     * Initialize the FunctionVersionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the Service to fetch the Function Version resource from.
     * @param string $functionSid The SID of the function that is the parent of the Function Version resource to fetch.
     * @param string $sid The SID of the Function Version resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $functionSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'functionSid' => Values::array_get($payload, 'function_sid'),
            'path' => Values::array_get($payload, 'path'),
            'visibility' => Values::array_get($payload, 'visibility'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'functionSid' => $functionSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return FunctionVersionContext Context for this FunctionVersionInstance
     */
    protected function proxy(): FunctionVersionContext {
        if (!$this->context) {
            $this->context = new FunctionVersionContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['functionSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the FunctionVersionInstance
     *
     * @return FunctionVersionInstance Fetched FunctionVersionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FunctionVersionInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Access the functionVersionContent
     */
    protected function getFunctionVersionContent(): FunctionVersionContentList {
        return $this->proxy()->functionVersionContent;
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
        return '[Twilio.Serverless.V1.FunctionVersionInstance ' . \implode(' ', $context) . ']';
    }
}

