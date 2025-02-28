<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Preview\Understand\Assistant\FieldType;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $fieldTypeSid
 * @property string $language
 * @property string $assistantSid
 * @property string $sid
 * @property string $value
 * @property string $url
 * @property string $synonymOf
 */
class FieldValueInstance extends InstanceResource {
    /**
     * Initialize the FieldValueInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $assistantSid 
     * @param string $fieldTypeSid 
     * @param string $sid 
     */
    public function __construct(Version $version, array $payload, string $assistantSid, string $fieldTypeSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'fieldTypeSid' => Values::array_get($payload, 'field_type_sid'),
            'language' => Values::array_get($payload, 'language'),
            'assistantSid' => Values::array_get($payload, 'assistant_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'value' => Values::array_get($payload, 'value'),
            'url' => Values::array_get($payload, 'url'),
            'synonymOf' => Values::array_get($payload, 'synonym_of'),
        ];

        $this->solution = ['assistantSid' => $assistantSid, 'fieldTypeSid' => $fieldTypeSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return FieldValueContext Context for this FieldValueInstance
     */
    protected function proxy(): FieldValueContext {
        if (!$this->context) {
            $this->context = new FieldValueContext(
                $this->version,
                $this->solution['assistantSid'],
                $this->solution['fieldTypeSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the FieldValueInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the FieldValueInstance
     *
     * @return FieldValueInstance Fetched FieldValueInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FieldValueInstance {
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
        return '[Twilio.Preview.Understand.FieldValueInstance ' . \implode(' ', $context) . ']';
    }
}

