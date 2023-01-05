<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Chat\V3;

use Twilio\ListResource;
use Twilio\Version;


class ChannelList extends ListResource {
    /**
     * Construct the ChannelList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [];
    }

    /**
     * Constructs a ChannelContext
     *
     * @param string $serviceSid The unique SID identifier of the Service.
     *
     * @param string $sid A 34 character string that uniquely identifies this Channel.
     */
    public function getContext(string $serviceSid, string $sid): ChannelContext {
        return new ChannelContext($this->version, $serviceSid, $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Chat.V3.ChannelList]';
    }
}
