<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Messaging\V1;

use Twilio\Options;
use Twilio\Values;

abstract class DomainConfigOptions {

    /**
     * @param string $fallbackUrl Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping. 
     * @param string $callbackUrl URL to receive click events to your webhook whenever the recipients click on the shortened links 
     * @param string $messagingServiceSidsAction An action type for messaging_service_sids operation (ADD, DELETE, REPLACE) 
     * @return UpdateDomainConfigOptions Options builder
     */
    public static function update(string $fallbackUrl = Values::NONE, string $callbackUrl = Values::NONE, string $messagingServiceSidsAction = Values::NONE): UpdateDomainConfigOptions {
        return new UpdateDomainConfigOptions($fallbackUrl, $callbackUrl, $messagingServiceSidsAction);
    }

}


class UpdateDomainConfigOptions extends Options {
    /**
     * @param string $fallbackUrl Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     * @param string $callbackUrl URL to receive click events to your webhook whenever the recipients click on the shortened links
     * @param string $messagingServiceSidsAction An action type for messaging_service_sids operation (ADD, DELETE, REPLACE)
     */
    public function __construct(string $fallbackUrl = Values::NONE, string $callbackUrl = Values::NONE, string $messagingServiceSidsAction = Values::NONE) {
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['messagingServiceSidsAction'] = $messagingServiceSidsAction;
    }

    /**
     * Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     *
     * @param string $fallbackUrl Any requests we receive to this domain that do not match an existing shortened message will be redirected to the fallback url. These will likely be either expired messages, random misdirected traffic, or intentional scraping.
     * @return $this Fluent Builder
     */
    public function setFallbackUrl(string $fallbackUrl): self {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }

    /**
     * URL to receive click events to your webhook whenever the recipients click on the shortened links
     *
     * @param string $callbackUrl URL to receive click events to your webhook whenever the recipients click on the shortened links
     * @return $this Fluent Builder
     */
    public function setCallbackUrl(string $callbackUrl): self {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
     * An action type for messaging_service_sids operation (ADD, DELETE, REPLACE)
     *
     * @param string $messagingServiceSidsAction An action type for messaging_service_sids operation (ADD, DELETE, REPLACE)
     * @return $this Fluent Builder
     */
    public function setMessagingServiceSidsAction(string $messagingServiceSidsAction): self {
        $this->options['messagingServiceSidsAction'] = $messagingServiceSidsAction;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Messaging.V1.UpdateDomainConfigOptions ' . $options . ']';
    }
}

