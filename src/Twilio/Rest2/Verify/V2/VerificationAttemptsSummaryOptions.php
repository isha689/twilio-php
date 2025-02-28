<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Verify\V2;

use Twilio\Options;
use Twilio\Values;

abstract class VerificationAttemptsSummaryOptions {
    /**
     * @param string $verifyServiceSid Filter used to consider only Verification Attempts of the given verify service on the summary aggregation. 
     * @param \DateTime $dateCreatedAfter Datetime filter used to consider only Verification Attempts created after this datetime on the summary aggregation. Given as GMT in RFC 2822 format. 
     * @param \DateTime $dateCreatedBefore Datetime filter used to consider only Verification Attempts created before this datetime on the summary aggregation. Given as GMT in RFC 2822 format. 
     * @param string $country Filter used to consider only Verification Attempts sent to the specified destination country on the summary aggregation. 
     * @param string $channel Filter Verification Attempts considered on the summary aggregation by communication channel. Valid values are `SMS` and `CALL` 
     * @param string $destinationPrefix Filter the Verification Attempts considered on the summary aggregation by Destination prefix. It is the prefix of a phone number in E.164 format. 
     * @return FetchVerificationAttemptsSummaryOptions Options builder
     */
    public static function fetch(string $verifyServiceSid = Values::NONE, \DateTime $dateCreatedAfter = Values::NONE, \DateTime $dateCreatedBefore = Values::NONE, string $country = Values::NONE, string $channel = Values::NONE, string $destinationPrefix = Values::NONE): FetchVerificationAttemptsSummaryOptions {
        return new FetchVerificationAttemptsSummaryOptions($verifyServiceSid, $dateCreatedAfter, $dateCreatedBefore, $country, $channel, $destinationPrefix);
    }

}

class FetchVerificationAttemptsSummaryOptions extends Options {
    /**
     * @param string $verifyServiceSid Filter used to consider only Verification Attempts of the given verify service on the summary aggregation.
     * @param \DateTime $dateCreatedAfter Datetime filter used to consider only Verification Attempts created after this datetime on the summary aggregation. Given as GMT in RFC 2822 format.
     * @param \DateTime $dateCreatedBefore Datetime filter used to consider only Verification Attempts created before this datetime on the summary aggregation. Given as GMT in RFC 2822 format.
     * @param string $country Filter used to consider only Verification Attempts sent to the specified destination country on the summary aggregation.
     * @param string $channel Filter Verification Attempts considered on the summary aggregation by communication channel. Valid values are `SMS` and `CALL`
     * @param string $destinationPrefix Filter the Verification Attempts considered on the summary aggregation by Destination prefix. It is the prefix of a phone number in E.164 format.
     */
    public function __construct(string $verifyServiceSid = Values::NONE, \DateTime $dateCreatedAfter = Values::NONE, \DateTime $dateCreatedBefore = Values::NONE, string $country = Values::NONE, string $channel = Values::NONE, string $destinationPrefix = Values::NONE) {
        $this->options['verifyServiceSid'] = $verifyServiceSid;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['country'] = $country;
        $this->options['channel'] = $channel;
        $this->options['destinationPrefix'] = $destinationPrefix;
    }

    /**
     * Filter used to consider only Verification Attempts of the given verify service on the summary aggregation.
     *
     * @param string $verifyServiceSid Filter used to consider only Verification Attempts of the given verify service on the summary aggregation.
     * @return $this Fluent Builder
     */
    public function setVerifyServiceSid(string $verifyServiceSid): self {
        $this->options['verifyServiceSid'] = $verifyServiceSid;
        return $this;
    }

    /**
     * Datetime filter used to consider only Verification Attempts created after this datetime on the summary aggregation. Given as GMT in RFC 2822 format.
     *
     * @param \DateTime $dateCreatedAfter Datetime filter used to consider only Verification Attempts created after this datetime on the summary aggregation. Given as GMT in RFC 2822 format.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter(\DateTime $dateCreatedAfter): self {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Datetime filter used to consider only Verification Attempts created before this datetime on the summary aggregation. Given as GMT in RFC 2822 format.
     *
     * @param \DateTime $dateCreatedBefore Datetime filter used to consider only Verification Attempts created before this datetime on the summary aggregation. Given as GMT in RFC 2822 format.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore(\DateTime $dateCreatedBefore): self {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Filter used to consider only Verification Attempts sent to the specified destination country on the summary aggregation.
     *
     * @param string $country Filter used to consider only Verification Attempts sent to the specified destination country on the summary aggregation.
     * @return $this Fluent Builder
     */
    public function setCountry(string $country): self {
        $this->options['country'] = $country;
        return $this;
    }

    /**
     * Filter Verification Attempts considered on the summary aggregation by communication channel. Valid values are `SMS` and `CALL`
     *
     * @param string $channel Filter Verification Attempts considered on the summary aggregation by communication channel. Valid values are `SMS` and `CALL`
     * @return $this Fluent Builder
     */
    public function setChannel(string $channel): self {
        $this->options['channel'] = $channel;
        return $this;
    }

    /**
     * Filter the Verification Attempts considered on the summary aggregation by Destination prefix. It is the prefix of a phone number in E.164 format.
     *
     * @param string $destinationPrefix Filter the Verification Attempts considered on the summary aggregation by Destination prefix. It is the prefix of a phone number in E.164 format.
     * @return $this Fluent Builder
     */
    public function setDestinationPrefix(string $destinationPrefix): self {
        $this->options['destinationPrefix'] = $destinationPrefix;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.FetchVerificationAttemptsSummaryOptions ' . $options . ']';
    }
}

