<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Events
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Events\V1;

use Twilio\Options;
use Twilio\Values;

abstract class SubscriptionOptions {



    /**
     * @param string $sinkSid The SID of the sink that the list of Subscriptions should be filtered by. 
     * @return ReadSubscriptionOptions Options builder
     */
    public static function read(string $sinkSid = Values::NONE): ReadSubscriptionOptions {
        return new ReadSubscriptionOptions($sinkSid);
    }

    /**
     * @param string $description A human readable description for the Subscription. 
     * @param string $sinkSid The SID of the sink that events selected by this subscription should be sent to. Sink must be active for the subscription to be created. 
     * @return UpdateSubscriptionOptions Options builder
     */
    public static function update(string $description = Values::NONE, string $sinkSid = Values::NONE): UpdateSubscriptionOptions {
        return new UpdateSubscriptionOptions($description, $sinkSid);
    }

}




class ReadSubscriptionOptions extends Options {
    /**
     * @param string $sinkSid The SID of the sink that the list of Subscriptions should be filtered by.
     */
    public function __construct(string $sinkSid = Values::NONE) {
        $this->options['sinkSid'] = $sinkSid;
    }

    /**
     * The SID of the sink that the list of Subscriptions should be filtered by.
     *
     * @param string $sinkSid The SID of the sink that the list of Subscriptions should be filtered by.
     * @return $this Fluent Builder
     */
    public function setSinkSid(string $sinkSid): self {
        $this->options['sinkSid'] = $sinkSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Events.V1.ReadSubscriptionOptions ' . $options . ']';
    }
}

class UpdateSubscriptionOptions extends Options {
    /**
     * @param string $description A human readable description for the Subscription.
     * @param string $sinkSid The SID of the sink that events selected by this subscription should be sent to. Sink must be active for the subscription to be created.
     */
    public function __construct(string $description = Values::NONE, string $sinkSid = Values::NONE) {
        $this->options['description'] = $description;
        $this->options['sinkSid'] = $sinkSid;
    }

    /**
     * A human readable description for the Subscription.
     *
     * @param string $description A human readable description for the Subscription.
     * @return $this Fluent Builder
     */
    public function setDescription(string $description): self {
        $this->options['description'] = $description;
        return $this;
    }

    /**
     * The SID of the sink that events selected by this subscription should be sent to. Sink must be active for the subscription to be created.
     *
     * @param string $sinkSid The SID of the sink that events selected by this subscription should be sent to. Sink must be active for the subscription to be created.
     * @return $this Fluent Builder
     */
    public function setSinkSid(string $sinkSid): self {
        $this->options['sinkSid'] = $sinkSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Events.V1.UpdateSubscriptionOptions ' . $options . ']';
    }
}

