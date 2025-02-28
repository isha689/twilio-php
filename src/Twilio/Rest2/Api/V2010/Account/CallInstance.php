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
use Twilio\Rest2\Api\V2010\Account\Call\RecordingList;
use Twilio\Rest2\Api\V2010\Account\Call\UserDefinedMessageSubscriptionList;
use Twilio\Rest2\Api\V2010\Account\Call\EventList;
use Twilio\Rest2\Api\V2010\Account\Call\NotificationList;
use Twilio\Rest2\Api\V2010\Account\Call\UserDefinedMessageList;
use Twilio\Rest2\Api\V2010\Account\Call\SiprecList;
use Twilio\Rest2\Api\V2010\Account\Call\StreamList;
use Twilio\Rest2\Api\V2010\Account\Call\PaymentList;
use Twilio\Rest2\Api\V2010\Account\Call\FeedbackList;


/**
 * @property string $sid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $parentCallSid
 * @property string $accountSid
 * @property string $to
 * @property string $toFormatted
 * @property string $from
 * @property string $fromFormatted
 * @property string $phoneNumberSid
 * @property string $status
 * @property \DateTime $startTime
 * @property \DateTime $endTime
 * @property string $duration
 * @property string $price
 * @property string $priceUnit
 * @property string $direction
 * @property string $answeredBy
 * @property string $apiVersion
 * @property string $forwardedFrom
 * @property string $groupSid
 * @property string $callerName
 * @property string $queueTime
 * @property string $trunkSid
 * @property string $uri
 * @property array $subresourceUris
 */
class CallInstance extends InstanceResource {
    protected $_recordings;
    protected $_userDefinedMessageSubscriptions;
    protected $_events;
    protected $_notifications;
    protected $_userDefinedMessages;
    protected $_siprec;
    protected $_streams;
    protected $_payments;
    protected $_feedback;

    /**
     * Initialize the CallInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $sid The Twilio-provided Call SID that uniquely identifies the Call resource to delete
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'parentCallSid' => Values::array_get($payload, 'parent_call_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'to' => Values::array_get($payload, 'to'),
            'toFormatted' => Values::array_get($payload, 'to_formatted'),
            'from' => Values::array_get($payload, 'from'),
            'fromFormatted' => Values::array_get($payload, 'from_formatted'),
            'phoneNumberSid' => Values::array_get($payload, 'phone_number_sid'),
            'status' => Values::array_get($payload, 'status'),
            'startTime' => Deserialize::dateTime(Values::array_get($payload, 'start_time')),
            'endTime' => Deserialize::dateTime(Values::array_get($payload, 'end_time')),
            'duration' => Values::array_get($payload, 'duration'),
            'price' => Values::array_get($payload, 'price'),
            'priceUnit' => Values::array_get($payload, 'price_unit'),
            'direction' => Values::array_get($payload, 'direction'),
            'answeredBy' => Values::array_get($payload, 'answered_by'),
            'apiVersion' => Values::array_get($payload, 'api_version'),
            'forwardedFrom' => Values::array_get($payload, 'forwarded_from'),
            'groupSid' => Values::array_get($payload, 'group_sid'),
            'callerName' => Values::array_get($payload, 'caller_name'),
            'queueTime' => Values::array_get($payload, 'queue_time'),
            'trunkSid' => Values::array_get($payload, 'trunk_sid'),
            'uri' => Values::array_get($payload, 'uri'),
            'subresourceUris' => Values::array_get($payload, 'subresource_uris'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return CallContext Context for this CallInstance
     */
    protected function proxy(): CallContext {
        if (!$this->context) {
            $this->context = new CallContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the CallInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the CallInstance
     *
     * @return CallInstance Fetched CallInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CallInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the CallInstance
     *
     * @param array|Options $options Optional Arguments
     * @return CallInstance Updated CallInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): CallInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the recordings
     */
    protected function getRecordings(): RecordingList {
        return $this->proxy()->recordings;
    }

    /**
     * Access the userDefinedMessageSubscriptions
     */
    protected function getUserDefinedMessageSubscriptions(): UserDefinedMessageSubscriptionList {
        return $this->proxy()->userDefinedMessageSubscriptions;
    }

    /**
     * Access the events
     */
    protected function getEvents(): EventList {
        return $this->proxy()->events;
    }

    /**
     * Access the notifications
     */
    protected function getNotifications(): NotificationList {
        return $this->proxy()->notifications;
    }

    /**
     * Access the userDefinedMessages
     */
    protected function getUserDefinedMessages(): UserDefinedMessageList {
        return $this->proxy()->userDefinedMessages;
    }

    /**
     * Access the siprec
     */
    protected function getSiprec(): SiprecList {
        return $this->proxy()->siprec;
    }

    /**
     * Access the streams
     */
    protected function getStreams(): StreamList {
        return $this->proxy()->streams;
    }

    /**
     * Access the payments
     */
    protected function getPayments(): PaymentList {
        return $this->proxy()->payments;
    }

    /**
     * Access the feedback
     */
    protected function getFeedback(): FeedbackList {
        return $this->proxy()->feedback;
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
        return '[Twilio.Api.V2010.CallInstance ' . \implode(' ', $context) . ']';
    }
}

