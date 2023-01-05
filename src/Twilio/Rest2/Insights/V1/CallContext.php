<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Insights
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Insights\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest2\Insights\V1\Call\MetricList;
use Twilio\Rest2\Insights\V1\Call\EventList;
use Twilio\Rest2\Insights\V1\Call\CallSummaryList;
use Twilio\Rest2\Insights\V1\Call\AnnotationList;


/**
 * @property MetricList $metrics
 * @property EventList $events
 * @property CallSummaryList $summary
 * @property AnnotationList $annotation
 * @method \Twilio\Rest2\Insights\V1\Call\CallSummaryContext summary()
 * @method \Twilio\Rest2\Insights\V1\Call\AnnotationContext annotation()
 */
class CallContext extends InstanceContext {
    protected $_metrics;
    protected $_events;
    protected $_summary;
    protected $_annotation;

    /**
     * Initialize the CallContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid 
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/Voice/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the CallInstance
     *
     * @return CallInstance Fetched CallInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CallInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new CallInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the metrics
     */
    protected function getMetrics(): MetricList {
        if (!$this->_metrics) {
            $this->_metrics = new MetricList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_metrics;
    }

    /**
     * Access the events
     */
    protected function getEvents(): EventList {
        if (!$this->_events) {
            $this->_events = new EventList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_events;
    }

    /**
     * Access the summary
     */
    protected function getSummary(): CallSummaryList {
        if (!$this->_summary) {
            $this->_summary = new CallSummaryList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_summary;
    }

    /**
     * Access the annotation
     */
    protected function getAnnotation(): AnnotationList {
        if (!$this->_annotation) {
            $this->_annotation = new AnnotationList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_annotation;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
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
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Insights.V1.CallContext ' . \implode(' ', $context) . ']';
    }
}
