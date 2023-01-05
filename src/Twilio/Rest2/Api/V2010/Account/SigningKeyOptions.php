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

use Twilio\Options;
use Twilio\Values;

abstract class SigningKeyOptions {



    /**
     * @param string $friendlyName  
     * @return UpdateSigningKeyOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE): UpdateSigningKeyOptions {
        return new UpdateSigningKeyOptions($friendlyName);
    }

}




class UpdateSigningKeyOptions extends Options {
    /**
     * @param string $friendlyName 
     */
    public function __construct(string $friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * 
     *
     * @param string $friendlyName 
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.UpdateSigningKeyOptions ' . $options . ']';
    }
}

