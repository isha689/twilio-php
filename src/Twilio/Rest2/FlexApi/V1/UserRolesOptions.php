<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\FlexApi\V1;

use Twilio\Options;
use Twilio\Values;

abstract class UserRolesOptions {
    /**
     * @param string $token The Token HTTP request header 
     * @return FetchUserRolesOptions Options builder
     */
    public static function fetch(string $token = Values::NONE): FetchUserRolesOptions {
        return new FetchUserRolesOptions($token);
    }

}

class FetchUserRolesOptions extends Options {
    /**
     * @param string $token The Token HTTP request header
     */
    public function __construct(string $token = Values::NONE) {
        $this->options['token'] = $token;
    }

    /**
     * The Token HTTP request header
     *
     * @param string $token The Token HTTP request header
     * @return $this Fluent Builder
     */
    public function setToken(string $token): self {
        $this->options['token'] = $token;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V1.FetchUserRolesOptions ' . $options . ']';
    }
}

