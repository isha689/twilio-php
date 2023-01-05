<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Taskrouter\V1\Workspace;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest2\Taskrouter\V1\Workspace\Workflow\WorkflowStatisticsList;
use Twilio\Rest2\Taskrouter\V1\Workspace\Workflow\WorkflowCumulativeStatisticsList;
use Twilio\Rest2\Taskrouter\V1\Workspace\Workflow\WorkflowRealTimeStatisticsList;


/**
 * @property WorkflowStatisticsList $statistics
 * @property WorkflowCumulativeStatisticsList $cumulativeStatistics
 * @property WorkflowRealTimeStatisticsList $realTimeStatistics
 * @method \Twilio\Rest2\Taskrouter\V1\Workspace\Workflow\WorkflowStatisticsContext statistics()
 * @method \Twilio\Rest2\Taskrouter\V1\Workspace\Workflow\WorkflowCumulativeStatisticsContext cumulativeStatistics()
 * @method \Twilio\Rest2\Taskrouter\V1\Workspace\Workflow\WorkflowRealTimeStatisticsContext realTimeStatistics()
 */
class WorkflowContext extends InstanceContext {
    protected $_statistics;
    protected $_cumulativeStatistics;
    protected $_realTimeStatistics;

    /**
     * Initialize the WorkflowContext
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace that the new Workflow to create belongs to.
     * @param string $sid The SID of the Workflow resource to delete.
     */
    public function __construct(Version $version, $workspaceSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['workspaceSid' => $workspaceSid,  'sid' => $sid,  ];

        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid) . '/Workflows/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the WorkflowInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the WorkflowInstance
     *
     * @return WorkflowInstance Fetched WorkflowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): WorkflowInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new WorkflowInstance(
            $this->version,
            $payload
            , $this->solution['workspaceSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the WorkflowInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkflowInstance Updated WorkflowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): WorkflowInstance {
        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' => $options['friendlyName'],
            'AssignmentCallbackUrl' => $options['assignmentCallbackUrl'],
            'FallbackAssignmentCallbackUrl' => $options['fallbackAssignmentCallbackUrl'],
            'Configuration' => $options['configuration'],
            'TaskReservationTimeout' => $options['taskReservationTimeout'],
            'ReEvaluateTasks' => $options['reEvaluateTasks'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new WorkflowInstance(
            $this->version,
            $payload
            , $this->solution['workspaceSid']
            , $this->solution['sid']
        );
    }

    /**
     * Access the statistics
     */
    protected function getStatistics(): WorkflowStatisticsList {
        if (!$this->_statistics) {
            $this->_statistics = new WorkflowStatisticsList(
                $this->version
                , $this->solution['workspaceSid']
                , $this->solution['sid']
            );
        }

        return $this->_statistics;
    }

    /**
     * Access the cumulativeStatistics
     */
    protected function getCumulativeStatistics(): WorkflowCumulativeStatisticsList {
        if (!$this->_cumulativeStatistics) {
            $this->_cumulativeStatistics = new WorkflowCumulativeStatisticsList(
                $this->version
                , $this->solution['workspaceSid']
                , $this->solution['sid']
            );
        }

        return $this->_cumulativeStatistics;
    }

    /**
     * Access the realTimeStatistics
     */
    protected function getRealTimeStatistics(): WorkflowRealTimeStatisticsList {
        if (!$this->_realTimeStatistics) {
            $this->_realTimeStatistics = new WorkflowRealTimeStatisticsList(
                $this->version
                , $this->solution['workspaceSid']
                , $this->solution['sid']
            );
        }

        return $this->_realTimeStatistics;
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
        return '[Twilio.Taskrouter.V1.WorkflowContext ' . \implode(' ', $context) . ']';
    }
}
