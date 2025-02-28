<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Numbers
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Numbers\V2\RegulatoryCompliance;

use Twilio\Options;
use Twilio\Values;

abstract class RegulationOptions {

    /**
     * @param string $endUserType The type of End User the regulation requires - can be `individual` or `business`. 
     * @param string $isoCountry The ISO country code of the phone number's country. 
     * @param string $numberType The type of phone number that the regulatory requiremnt is restricting. 
     * @return ReadRegulationOptions Options builder
     */
    public static function read(string $endUserType = Values::NONE, string $isoCountry = Values::NONE, string $numberType = Values::NONE): ReadRegulationOptions {
        return new ReadRegulationOptions($endUserType, $isoCountry, $numberType);
    }

}


class ReadRegulationOptions extends Options {
    /**
     * @param string $endUserType The type of End User the regulation requires - can be `individual` or `business`.
     * @param string $isoCountry The ISO country code of the phone number's country.
     * @param string $numberType The type of phone number that the regulatory requiremnt is restricting.
     */
    public function __construct(string $endUserType = Values::NONE, string $isoCountry = Values::NONE, string $numberType = Values::NONE) {
        $this->options['endUserType'] = $endUserType;
        $this->options['isoCountry'] = $isoCountry;
        $this->options['numberType'] = $numberType;
    }

    /**
     * The type of End User the regulation requires - can be `individual` or `business`.
     *
     * @param string $endUserType The type of End User the regulation requires - can be `individual` or `business`.
     * @return $this Fluent Builder
     */
    public function setEndUserType(string $endUserType): self {
        $this->options['endUserType'] = $endUserType;
        return $this;
    }

    /**
     * The ISO country code of the phone number's country.
     *
     * @param string $isoCountry The ISO country code of the phone number's country.
     * @return $this Fluent Builder
     */
    public function setIsoCountry(string $isoCountry): self {
        $this->options['isoCountry'] = $isoCountry;
        return $this;
    }

    /**
     * The type of phone number that the regulatory requiremnt is restricting.
     *
     * @param string $numberType The type of phone number that the regulatory requiremnt is restricting.
     * @return $this Fluent Builder
     */
    public function setNumberType(string $numberType): self {
        $this->options['numberType'] = $numberType;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Numbers.V2.ReadRegulationOptions ' . $options . ']';
    }
}

