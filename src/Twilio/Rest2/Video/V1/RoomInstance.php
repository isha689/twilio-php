<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Video
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Video\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest2\Video\V1\Room\RecordingRulesList;
use Twilio\Rest2\Video\V1\Room\ParticipantList;
use Twilio\Rest2\Video\V1\Room\RoomRecordingList;


/**
 * @property string $sid
 * @property string $status
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $accountSid
 * @property bool $enableTurn
 * @property string $uniqueName
 * @property string $statusCallback
 * @property string $statusCallbackMethod
 * @property \DateTime $endTime
 * @property int $duration
 * @property string $type
 * @property int $maxParticipants
 * @property int $maxParticipantDuration
 * @property int $maxConcurrentPublishedTracks
 * @property bool $recordParticipantsOnConnect
 * @property string[] $videoCodecs
 * @property string $mediaRegion
 * @property bool $audioOnly
 * @property int $emptyRoomTimeout
 * @property int $unusedRoomTimeout
 * @property bool $largeRoom
 * @property string $url
 * @property array $links
 */
class RoomInstance extends InstanceResource {
    protected $_recordingRules;
    protected $_participants;
    protected $_recordings;

    /**
     * Initialize the RoomInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Room resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'status' => Values::array_get($payload, 'status'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'enableTurn' => Values::array_get($payload, 'enable_turn'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'statusCallback' => Values::array_get($payload, 'status_callback'),
            'statusCallbackMethod' => Values::array_get($payload, 'status_callback_method'),
            'endTime' => Deserialize::dateTime(Values::array_get($payload, 'end_time')),
            'duration' => Values::array_get($payload, 'duration'),
            'type' => Values::array_get($payload, 'type'),
            'maxParticipants' => Values::array_get($payload, 'max_participants'),
            'maxParticipantDuration' => Values::array_get($payload, 'max_participant_duration'),
            'maxConcurrentPublishedTracks' => Values::array_get($payload, 'max_concurrent_published_tracks'),
            'recordParticipantsOnConnect' => Values::array_get($payload, 'record_participants_on_connect'),
            'videoCodecs' => Values::array_get($payload, 'video_codecs'),
            'mediaRegion' => Values::array_get($payload, 'media_region'),
            'audioOnly' => Values::array_get($payload, 'audio_only'),
            'emptyRoomTimeout' => Values::array_get($payload, 'empty_room_timeout'),
            'unusedRoomTimeout' => Values::array_get($payload, 'unused_room_timeout'),
            'largeRoom' => Values::array_get($payload, 'large_room'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return RoomContext Context for this RoomInstance
     */
    protected function proxy(): RoomContext {
        if (!$this->context) {
            $this->context = new RoomContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the RoomInstance
     *
     * @return RoomInstance Fetched RoomInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): RoomInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the RoomInstance
     *
     * @param string $status 
     * @return RoomInstance Updated RoomInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status): RoomInstance {
        return $this->proxy()->update($status);
    }

    /**
     * Access the recordingRules
     */
    protected function getRecordingRules(): RecordingRulesList {
        return $this->proxy()->recordingRules;
    }

    /**
     * Access the participants
     */
    protected function getParticipants(): ParticipantList {
        return $this->proxy()->participants;
    }

    /**
     * Access the recordings
     */
    protected function getRecordings(): RoomRecordingList {
        return $this->proxy()->recordings;
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
        return '[Twilio.Video.V1.RoomInstance ' . \implode(' ', $context) . ']';
    }
}

