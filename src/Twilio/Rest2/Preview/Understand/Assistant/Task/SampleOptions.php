<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Preview\Understand\Assistant\Task;

use Twilio\Options;
use Twilio\Values;

abstract class SampleOptions {
    /**
     * @param string $sourceChannel The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null 
     * @return CreateSampleOptions Options builder
     */
    public static function create(string $sourceChannel = Values::NONE): CreateSampleOptions {
        return new CreateSampleOptions($sourceChannel);
    }



    /**
     * @param string $language An ISO language-country string of the sample. 
     * @return ReadSampleOptions Options builder
     */
    public static function read(string $language = Values::NONE): ReadSampleOptions {
        return new ReadSampleOptions($language);
    }

    /**
     * @param string $language An ISO language-country string of the sample. 
     * @param string $taggedText The text example of how end-users may express this task. The sample may contain Field tag blocks. 
     * @param string $sourceChannel The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null 
     * @return UpdateSampleOptions Options builder
     */
    public static function update(string $language = Values::NONE, string $taggedText = Values::NONE, string $sourceChannel = Values::NONE): UpdateSampleOptions {
        return new UpdateSampleOptions($language, $taggedText, $sourceChannel);
    }

}

class CreateSampleOptions extends Options {
    /**
     * @param string $sourceChannel The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
     */
    public function __construct(string $sourceChannel = Values::NONE) {
        $this->options['sourceChannel'] = $sourceChannel;
    }

    /**
     * The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
     *
     * @param string $sourceChannel The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
     * @return $this Fluent Builder
     */
    public function setSourceChannel(string $sourceChannel): self {
        $this->options['sourceChannel'] = $sourceChannel;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.Understand.CreateSampleOptions ' . $options . ']';
    }
}



class ReadSampleOptions extends Options {
    /**
     * @param string $language An ISO language-country string of the sample.
     */
    public function __construct(string $language = Values::NONE) {
        $this->options['language'] = $language;
    }

    /**
     * An ISO language-country string of the sample.
     *
     * @param string $language An ISO language-country string of the sample.
     * @return $this Fluent Builder
     */
    public function setLanguage(string $language): self {
        $this->options['language'] = $language;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.Understand.ReadSampleOptions ' . $options . ']';
    }
}

class UpdateSampleOptions extends Options {
    /**
     * @param string $language An ISO language-country string of the sample.
     * @param string $taggedText The text example of how end-users may express this task. The sample may contain Field tag blocks.
     * @param string $sourceChannel The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
     */
    public function __construct(string $language = Values::NONE, string $taggedText = Values::NONE, string $sourceChannel = Values::NONE) {
        $this->options['language'] = $language;
        $this->options['taggedText'] = $taggedText;
        $this->options['sourceChannel'] = $sourceChannel;
    }

    /**
     * An ISO language-country string of the sample.
     *
     * @param string $language An ISO language-country string of the sample.
     * @return $this Fluent Builder
     */
    public function setLanguage(string $language): self {
        $this->options['language'] = $language;
        return $this;
    }

    /**
     * The text example of how end-users may express this task. The sample may contain Field tag blocks.
     *
     * @param string $taggedText The text example of how end-users may express this task. The sample may contain Field tag blocks.
     * @return $this Fluent Builder
     */
    public function setTaggedText(string $taggedText): self {
        $this->options['taggedText'] = $taggedText;
        return $this;
    }

    /**
     * The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
     *
     * @param string $sourceChannel The communication channel the sample was captured. It can be: *voice*, *sms*, *chat*, *alexa*, *google-assistant*, or *slack*. If not included the value will be null
     * @return $this Fluent Builder
     */
    public function setSourceChannel(string $sourceChannel): self {
        $this->options['sourceChannel'] = $sourceChannel;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.Understand.UpdateSampleOptions ' . $options . ']';
    }
}

