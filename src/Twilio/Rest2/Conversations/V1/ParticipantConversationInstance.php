<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Conversations\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property string $chatServiceSid
 * @property string $participantSid
 * @property string $participantUserSid
 * @property string $participantIdentity
 * @property array $participantMessagingBinding
 * @property string $conversationSid
 * @property string $conversationUniqueName
 * @property string $conversationFriendlyName
 * @property string $conversationAttributes
 * @property \DateTime $conversationDateCreated
 * @property \DateTime $conversationDateUpdated
 * @property string $conversationCreatedBy
 * @property string $conversationState
 * @property array $conversationTimers
 * @property array $links
 */
class ParticipantConversationInstance extends InstanceResource {
    /**
     * Initialize the ParticipantConversationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     */
    public function __construct(Version $version, array $payload) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'chatServiceSid' => Values::array_get($payload, 'chat_service_sid'),
            'participantSid' => Values::array_get($payload, 'participant_sid'),
            'participantUserSid' => Values::array_get($payload, 'participant_user_sid'),
            'participantIdentity' => Values::array_get($payload, 'participant_identity'),
            'participantMessagingBinding' => Values::array_get($payload, 'participant_messaging_binding'),
            'conversationSid' => Values::array_get($payload, 'conversation_sid'),
            'conversationUniqueName' => Values::array_get($payload, 'conversation_unique_name'),
            'conversationFriendlyName' => Values::array_get($payload, 'conversation_friendly_name'),
            'conversationAttributes' => Values::array_get($payload, 'conversation_attributes'),
            'conversationDateCreated' => Deserialize::dateTime(Values::array_get($payload, 'conversation_date_created')),
            'conversationDateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'conversation_date_updated')),
            'conversationCreatedBy' => Values::array_get($payload, 'conversation_created_by'),
            'conversationState' => Values::array_get($payload, 'conversation_state'),
            'conversationTimers' => Values::array_get($payload, 'conversation_timers'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = [];
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
        return '[Twilio.Conversations.V1.ParticipantConversationInstance]';
    }
}

