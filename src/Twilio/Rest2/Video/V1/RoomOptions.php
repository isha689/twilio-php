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

use Twilio\Options;
use Twilio\Values;

abstract class RoomOptions {
    /**
     * @param bool $enableTurn Deprecated, now always considered to be true. 
     * @param string $type  
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as a `room_sid` in place of the resource's `sid` in the URL to address the resource, assuming it does not contain any [reserved characters](https://tools.ietf.org/html/rfc3986#section-2.2) that would need to be URL encoded. This value is unique for `in-progress` rooms. SDK clients can use this name to connect to the room. REST API clients can use this name in place of the Room SID to interact with the room as long as the room is `in-progress`. 
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every room event. See [Status Callbacks](https://www.twilio.com/docs/video/api/status-callbacks) for more info. 
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be `POST` or `GET`. 
     * @param int $maxParticipants The maximum number of concurrent Participants allowed in the room. Peer-to-peer rooms can have up to 10 Participants. Small Group rooms can have up to 4 Participants. Group rooms can have up to 50 Participants. 
     * @param bool $recordParticipantsOnConnect Whether to start recording when Participants connect. ***This feature is not available in `peer-to-peer` rooms.*** 
     * @param string $videoCodecs An array of the video codecs that are supported when publishing a track in the room.  Can be: `VP8` and `H264`.  ***This feature is not available in `peer-to-peer` rooms*** 
     * @param string $mediaRegion The region for the media server in Group Rooms.  Can be: one of the [available Media Regions](https://www.twilio.com/docs/video/ip-address-whitelisting#group-rooms-media-servers). ***This feature is not available in `peer-to-peer` rooms.*** 
     * @param array $recordingRules A collection of Recording Rules that describe how to include or exclude matching tracks for recording 
     * @param bool $audioOnly When set to true, indicates that the participants in the room will only publish audio. No video tracks will be allowed. Group rooms only. 
     * @param int $maxParticipantDuration The maximum number of seconds a Participant can be connected to the room. The maximum possible value is 86400 seconds (24 hours). The default is 14400 seconds (4 hours). 
     * @param int $emptyRoomTimeout Configures how long (in minutes) a room will remain active after last participant leaves. Valid values range from 1 to 60 minutes (no fractions). 
     * @param int $unusedRoomTimeout Configures how long (in minutes) a room will remain active if no one joins. Valid values range from 1 to 60 minutes (no fractions). 
     * @param bool $largeRoom When set to true, indicated that this is the large room. 
     * @return CreateRoomOptions Options builder
     */
    public static function create(bool $enableTurn = Values::NONE, string $type = Values::NONE, string $uniqueName = Values::NONE, string $statusCallback = Values::NONE, string $statusCallbackMethod = Values::NONE, int $maxParticipants = Values::NONE, bool $recordParticipantsOnConnect = Values::NONE, array $videoCodecs = Values::ARRAY_NONE, string $mediaRegion = Values::NONE, array $recordingRules = Values::ARRAY_NONE, bool $audioOnly = Values::NONE, int $maxParticipantDuration = Values::NONE, int $emptyRoomTimeout = Values::NONE, int $unusedRoomTimeout = Values::NONE, bool $largeRoom = Values::NONE): CreateRoomOptions {
        return new CreateRoomOptions($enableTurn, $type, $uniqueName, $statusCallback, $statusCallbackMethod, $maxParticipants, $recordParticipantsOnConnect, $videoCodecs, $mediaRegion, $recordingRules, $audioOnly, $maxParticipantDuration, $emptyRoomTimeout, $unusedRoomTimeout, $largeRoom);
    }


    /**
     * @param string $status Read only the rooms with this status. Can be: `in-progress` (default) or `completed` 
     * @param string $uniqueName Read only rooms with the this `unique_name`. 
     * @param \DateTime $dateCreatedAfter Read only rooms that started on or after this date, given as `YYYY-MM-DD`. 
     * @param \DateTime $dateCreatedBefore Read only rooms that started before this date, given as `YYYY-MM-DD`. 
     * @return ReadRoomOptions Options builder
     */
    public static function read(string $status = Values::NONE, string $uniqueName = Values::NONE, \DateTime $dateCreatedAfter = Values::NONE, \DateTime $dateCreatedBefore = Values::NONE): ReadRoomOptions {
        return new ReadRoomOptions($status, $uniqueName, $dateCreatedAfter, $dateCreatedBefore);
    }


}

class CreateRoomOptions extends Options {
    /**
     * @param bool $enableTurn Deprecated, now always considered to be true.
     * @param string $type 
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as a `room_sid` in place of the resource's `sid` in the URL to address the resource, assuming it does not contain any [reserved characters](https://tools.ietf.org/html/rfc3986#section-2.2) that would need to be URL encoded. This value is unique for `in-progress` rooms. SDK clients can use this name to connect to the room. REST API clients can use this name in place of the Room SID to interact with the room as long as the room is `in-progress`.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every room event. See [Status Callbacks](https://www.twilio.com/docs/video/api/status-callbacks) for more info.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be `POST` or `GET`.
     * @param int $maxParticipants The maximum number of concurrent Participants allowed in the room. Peer-to-peer rooms can have up to 10 Participants. Small Group rooms can have up to 4 Participants. Group rooms can have up to 50 Participants.
     * @param bool $recordParticipantsOnConnect Whether to start recording when Participants connect. ***This feature is not available in `peer-to-peer` rooms.***
     * @param string $videoCodecs An array of the video codecs that are supported when publishing a track in the room.  Can be: `VP8` and `H264`.  ***This feature is not available in `peer-to-peer` rooms***
     * @param string $mediaRegion The region for the media server in Group Rooms.  Can be: one of the [available Media Regions](https://www.twilio.com/docs/video/ip-address-whitelisting#group-rooms-media-servers). ***This feature is not available in `peer-to-peer` rooms.***
     * @param array $recordingRules A collection of Recording Rules that describe how to include or exclude matching tracks for recording
     * @param bool $audioOnly When set to true, indicates that the participants in the room will only publish audio. No video tracks will be allowed. Group rooms only.
     * @param int $maxParticipantDuration The maximum number of seconds a Participant can be connected to the room. The maximum possible value is 86400 seconds (24 hours). The default is 14400 seconds (4 hours).
     * @param int $emptyRoomTimeout Configures how long (in minutes) a room will remain active after last participant leaves. Valid values range from 1 to 60 minutes (no fractions).
     * @param int $unusedRoomTimeout Configures how long (in minutes) a room will remain active if no one joins. Valid values range from 1 to 60 minutes (no fractions).
     * @param bool $largeRoom When set to true, indicated that this is the large room.
     */
    public function __construct(bool $enableTurn = Values::NONE, string $type = Values::NONE, string $uniqueName = Values::NONE, string $statusCallback = Values::NONE, string $statusCallbackMethod = Values::NONE, int $maxParticipants = Values::NONE, bool $recordParticipantsOnConnect = Values::NONE, array $videoCodecs = Values::ARRAY_NONE, string $mediaRegion = Values::NONE, array $recordingRules = Values::ARRAY_NONE, bool $audioOnly = Values::NONE, int $maxParticipantDuration = Values::NONE, int $emptyRoomTimeout = Values::NONE, int $unusedRoomTimeout = Values::NONE, bool $largeRoom = Values::NONE) {
        $this->options['enableTurn'] = $enableTurn;
        $this->options['type'] = $type;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['maxParticipants'] = $maxParticipants;
        $this->options['recordParticipantsOnConnect'] = $recordParticipantsOnConnect;
        $this->options['videoCodecs'] = $videoCodecs;
        $this->options['mediaRegion'] = $mediaRegion;
        $this->options['recordingRules'] = $recordingRules;
        $this->options['audioOnly'] = $audioOnly;
        $this->options['maxParticipantDuration'] = $maxParticipantDuration;
        $this->options['emptyRoomTimeout'] = $emptyRoomTimeout;
        $this->options['unusedRoomTimeout'] = $unusedRoomTimeout;
        $this->options['largeRoom'] = $largeRoom;
    }

    /**
     * Deprecated, now always considered to be true.
     *
     * @param bool $enableTurn Deprecated, now always considered to be true.
     * @return $this Fluent Builder
     */
    public function setEnableTurn(bool $enableTurn): self {
        $this->options['enableTurn'] = $enableTurn;
        return $this;
    }

    /**
     * @param string $type 
     * @return $this Fluent Builder
     */
    public function setType(string $type): self {
        $this->options['type'] = $type;
        return $this;
    }

    /**
     * An application-defined string that uniquely identifies the resource. It can be used as a `room_sid` in place of the resource's `sid` in the URL to address the resource, assuming it does not contain any [reserved characters](https://tools.ietf.org/html/rfc3986#section-2.2) that would need to be URL encoded. This value is unique for `in-progress` rooms. SDK clients can use this name to connect to the room. REST API clients can use this name in place of the Room SID to interact with the room as long as the room is `in-progress`.
     *
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as a `room_sid` in place of the resource's `sid` in the URL to address the resource, assuming it does not contain any [reserved characters](https://tools.ietf.org/html/rfc3986#section-2.2) that would need to be URL encoded. This value is unique for `in-progress` rooms. SDK clients can use this name to connect to the room. REST API clients can use this name in place of the Room SID to interact with the room as long as the room is `in-progress`.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The URL we should call using the `status_callback_method` to send status information to your application on every room event. See [Status Callbacks](https://www.twilio.com/docs/video/api/status-callbacks) for more info.
     *
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information to your application on every room event. See [Status Callbacks](https://www.twilio.com/docs/video/api/status-callbacks) for more info.
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback): self {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be `POST` or `GET`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be `POST` or `GET`.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod(string $statusCallbackMethod): self {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The maximum number of concurrent Participants allowed in the room. Peer-to-peer rooms can have up to 10 Participants. Small Group rooms can have up to 4 Participants. Group rooms can have up to 50 Participants.
     *
     * @param int $maxParticipants The maximum number of concurrent Participants allowed in the room. Peer-to-peer rooms can have up to 10 Participants. Small Group rooms can have up to 4 Participants. Group rooms can have up to 50 Participants.
     * @return $this Fluent Builder
     */
    public function setMaxParticipants(int $maxParticipants): self {
        $this->options['maxParticipants'] = $maxParticipants;
        return $this;
    }

    /**
     * Whether to start recording when Participants connect. ***This feature is not available in `peer-to-peer` rooms.***
     *
     * @param bool $recordParticipantsOnConnect Whether to start recording when Participants connect. ***This feature is not available in `peer-to-peer` rooms.***
     * @return $this Fluent Builder
     */
    public function setRecordParticipantsOnConnect(bool $recordParticipantsOnConnect): self {
        $this->options['recordParticipantsOnConnect'] = $recordParticipantsOnConnect;
        return $this;
    }

    /**
     * An array of the video codecs that are supported when publishing a track in the room.  Can be: `VP8` and `H264`.  ***This feature is not available in `peer-to-peer` rooms***
     *
     * @param string $videoCodecs An array of the video codecs that are supported when publishing a track in the room.  Can be: `VP8` and `H264`.  ***This feature is not available in `peer-to-peer` rooms***
     * @return $this Fluent Builder
     */
    public function setVideoCodecs(array $videoCodecs): self {
        $this->options['videoCodecs'] = $videoCodecs;
        return $this;
    }

    /**
     * The region for the media server in Group Rooms.  Can be: one of the [available Media Regions](https://www.twilio.com/docs/video/ip-address-whitelisting#group-rooms-media-servers). ***This feature is not available in `peer-to-peer` rooms.***
     *
     * @param string $mediaRegion The region for the media server in Group Rooms.  Can be: one of the [available Media Regions](https://www.twilio.com/docs/video/ip-address-whitelisting#group-rooms-media-servers). ***This feature is not available in `peer-to-peer` rooms.***
     * @return $this Fluent Builder
     */
    public function setMediaRegion(string $mediaRegion): self {
        $this->options['mediaRegion'] = $mediaRegion;
        return $this;
    }

    /**
     * A collection of Recording Rules that describe how to include or exclude matching tracks for recording
     *
     * @param array $recordingRules A collection of Recording Rules that describe how to include or exclude matching tracks for recording
     * @return $this Fluent Builder
     */
    public function setRecordingRules(array $recordingRules): self {
        $this->options['recordingRules'] = $recordingRules;
        return $this;
    }

    /**
     * When set to true, indicates that the participants in the room will only publish audio. No video tracks will be allowed. Group rooms only.
     *
     * @param bool $audioOnly When set to true, indicates that the participants in the room will only publish audio. No video tracks will be allowed. Group rooms only.
     * @return $this Fluent Builder
     */
    public function setAudioOnly(bool $audioOnly): self {
        $this->options['audioOnly'] = $audioOnly;
        return $this;
    }

    /**
     * The maximum number of seconds a Participant can be connected to the room. The maximum possible value is 86400 seconds (24 hours). The default is 14400 seconds (4 hours).
     *
     * @param int $maxParticipantDuration The maximum number of seconds a Participant can be connected to the room. The maximum possible value is 86400 seconds (24 hours). The default is 14400 seconds (4 hours).
     * @return $this Fluent Builder
     */
    public function setMaxParticipantDuration(int $maxParticipantDuration): self {
        $this->options['maxParticipantDuration'] = $maxParticipantDuration;
        return $this;
    }

    /**
     * Configures how long (in minutes) a room will remain active after last participant leaves. Valid values range from 1 to 60 minutes (no fractions).
     *
     * @param int $emptyRoomTimeout Configures how long (in minutes) a room will remain active after last participant leaves. Valid values range from 1 to 60 minutes (no fractions).
     * @return $this Fluent Builder
     */
    public function setEmptyRoomTimeout(int $emptyRoomTimeout): self {
        $this->options['emptyRoomTimeout'] = $emptyRoomTimeout;
        return $this;
    }

    /**
     * Configures how long (in minutes) a room will remain active if no one joins. Valid values range from 1 to 60 minutes (no fractions).
     *
     * @param int $unusedRoomTimeout Configures how long (in minutes) a room will remain active if no one joins. Valid values range from 1 to 60 minutes (no fractions).
     * @return $this Fluent Builder
     */
    public function setUnusedRoomTimeout(int $unusedRoomTimeout): self {
        $this->options['unusedRoomTimeout'] = $unusedRoomTimeout;
        return $this;
    }

    /**
     * When set to true, indicated that this is the large room.
     *
     * @param bool $largeRoom When set to true, indicated that this is the large room.
     * @return $this Fluent Builder
     */
    public function setLargeRoom(bool $largeRoom): self {
        $this->options['largeRoom'] = $largeRoom;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Video.V1.CreateRoomOptions ' . $options . ']';
    }
}


class ReadRoomOptions extends Options {
    /**
     * @param string $status Read only the rooms with this status. Can be: `in-progress` (default) or `completed`
     * @param string $uniqueName Read only rooms with the this `unique_name`.
     * @param \DateTime $dateCreatedAfter Read only rooms that started on or after this date, given as `YYYY-MM-DD`.
     * @param \DateTime $dateCreatedBefore Read only rooms that started before this date, given as `YYYY-MM-DD`.
     */
    public function __construct(string $status = Values::NONE, string $uniqueName = Values::NONE, \DateTime $dateCreatedAfter = Values::NONE, \DateTime $dateCreatedBefore = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
    }

    /**
     * Read only the rooms with this status. Can be: `in-progress` (default) or `completed`
     *
     * @param string $status Read only the rooms with this status. Can be: `in-progress` (default) or `completed`
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Read only rooms with the this `unique_name`.
     *
     * @param string $uniqueName Read only rooms with the this `unique_name`.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * Read only rooms that started on or after this date, given as `YYYY-MM-DD`.
     *
     * @param \DateTime $dateCreatedAfter Read only rooms that started on or after this date, given as `YYYY-MM-DD`.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter(\DateTime $dateCreatedAfter): self {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Read only rooms that started before this date, given as `YYYY-MM-DD`.
     *
     * @param \DateTime $dateCreatedBefore Read only rooms that started before this date, given as `YYYY-MM-DD`.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore(\DateTime $dateCreatedBefore): self {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Video.V1.ReadRoomOptions ' . $options . ']';
    }
}


