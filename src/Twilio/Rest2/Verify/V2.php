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

namespace Twilio\Rest2\Verify;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest2\Verify\V2\FormList;
use Twilio\Rest2\Verify\V2\SafelistList;
use Twilio\Rest2\Verify\V2\ServiceList;
use Twilio\Rest2\Verify\V2\TemplateList;
use Twilio\Rest2\Verify\V2\VerificationAttemptList;
use Twilio\Rest2\Verify\V2\VerificationAttemptsSummaryList;
use Twilio\Version;

/**
 * @property FormList $forms
 * @property SafelistList $safelist
 * @property ServiceList $services
 * @property TemplateList $templates
 * @property VerificationAttemptList $verificationAttempts
 * @property VerificationAttemptsSummaryList $verificationAttemptsSummary
 * @method \Twilio\Rest2\Verify\V2\FormContext forms(string $formType)
 * @method \Twilio\Rest2\Verify\V2\SafelistContext safelist(string $phoneNumber)
 * @method \Twilio\Rest2\Verify\V2\ServiceContext services(string $sid)
 * @method \Twilio\Rest2\Verify\V2\VerificationAttemptContext verificationAttempts(string $sid)
 */
class V2 extends Version {
    protected $_forms;
    protected $_safelist;
    protected $_services;
    protected $_templates;
    protected $_verificationAttempts;
    protected $_verificationAttemptsSummary;

    /**
     * Construct the V2 version of Verify
     *
     * @param Domain $domain Domain that contains the version
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v2';
    }

    protected function getForms(): FormList {
        if (!$this->_forms) {
            $this->_forms = new FormList($this);
        }
        return $this->_forms;
    }

    protected function getSafelist(): SafelistList {
        if (!$this->_safelist) {
            $this->_safelist = new SafelistList($this);
        }
        return $this->_safelist;
    }

    protected function getServices(): ServiceList {
        if (!$this->_services) {
            $this->_services = new ServiceList($this);
        }
        return $this->_services;
    }

    protected function getTemplates(): TemplateList {
        if (!$this->_templates) {
            $this->_templates = new TemplateList($this);
        }
        return $this->_templates;
    }

    protected function getVerificationAttempts(): VerificationAttemptList {
        if (!$this->_verificationAttempts) {
            $this->_verificationAttempts = new VerificationAttemptList($this);
        }
        return $this->_verificationAttempts;
    }

    protected function getVerificationAttemptsSummary(): VerificationAttemptsSummaryList {
        if (!$this->_verificationAttemptsSummary) {
            $this->_verificationAttemptsSummary = new VerificationAttemptsSummaryList($this);
        }
        return $this->_verificationAttemptsSummary;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Verify.V2]';
    }
}