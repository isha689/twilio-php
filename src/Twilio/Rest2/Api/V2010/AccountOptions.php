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

namespace Twilio\Rest2\Api\V2010;

use Twilio\Options;
use Twilio\Values;

abstract class AccountOptions {
    /**
     * @param string $friendlyName A human readable description of the account to create, defaults to `SubAccount Created at {YYYY-MM-DD HH:MM meridian}` 
     * @return CreateAccountOptions Options builder
     */
    public static function create(string $friendlyName = Values::NONE): CreateAccountOptions {
        return new CreateAccountOptions($friendlyName);
    }


    /**
     * @param string $friendlyName Only return the Account resources with friendly names that exactly match this name. 
     * @param string $status Only return Account resources with the given status. Can be `closed`, `suspended` or `active`. 
     * @return ReadAccountOptions Options builder
     */
    public static function read(string $friendlyName = Values::NONE, string $status = Values::NONE): ReadAccountOptions {
        return new ReadAccountOptions($friendlyName, $status);
    }

    /**
     * @param string $friendlyName Update the human-readable description of this Account 
     * @param string $status  
     * @return UpdateAccountOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $status = Values::NONE): UpdateAccountOptions {
        return new UpdateAccountOptions($friendlyName, $status);
    }

}

class CreateAccountOptions extends Options {
    /**
     * @param string $friendlyName A human readable description of the account to create, defaults to `SubAccount Created at {YYYY-MM-DD HH:MM meridian}`
     */
    public function __construct(string $friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * A human readable description of the account to create, defaults to `SubAccount Created at {YYYY-MM-DD HH:MM meridian}`
     *
     * @param string $friendlyName A human readable description of the account to create, defaults to `SubAccount Created at {YYYY-MM-DD HH:MM meridian}`
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
        return '[Twilio.Api.V2010.CreateAccountOptions ' . $options . ']';
    }
}


class ReadAccountOptions extends Options {
    /**
     * @param string $friendlyName Only return the Account resources with friendly names that exactly match this name.
     * @param string $status Only return Account resources with the given status. Can be `closed`, `suspended` or `active`.
     */
    public function __construct(string $friendlyName = Values::NONE, string $status = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['status'] = $status;
    }

    /**
     * Only return the Account resources with friendly names that exactly match this name.
     *
     * @param string $friendlyName Only return the Account resources with friendly names that exactly match this name.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Only return Account resources with the given status. Can be `closed`, `suspended` or `active`.
     *
     * @param string $status Only return Account resources with the given status. Can be `closed`, `suspended` or `active`.
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.ReadAccountOptions ' . $options . ']';
    }
}

class UpdateAccountOptions extends Options {
    /**
     * @param string $friendlyName Update the human-readable description of this Account
     * @param string $status 
     */
    public function __construct(string $friendlyName = Values::NONE, string $status = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['status'] = $status;
    }

    /**
     * Update the human-readable description of this Account
     *
     * @param string $friendlyName Update the human-readable description of this Account
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * @param string $status 
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.UpdateAccountOptions ' . $options . ']';
    }
}

