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


namespace Twilio\Rest2\Taskrouter\V1\Workspace\TaskQueue;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class TaskQueueRealTimeStatisticsContext extends InstanceContext {
    /**
     * Initialize the TaskQueueRealTimeStatisticsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace with the TaskQueue to fetch.
     * @param string $taskQueueSid The SID of the TaskQueue for which to fetch statistics.
     */
    public function __construct(Version $version, $workspaceSid , $taskQueueSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['workspaceSid' => $workspaceSid,  'taskQueueSid' => $taskQueueSid,  ];

        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid) . '/TaskQueues/' . \rawurlencode($taskQueueSid) . '/RealTimeStatistics';
    }

    /**
     * Fetch the TaskQueueRealTimeStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TaskQueueRealTimeStatisticsInstance Fetched TaskQueueRealTimeStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): TaskQueueRealTimeStatisticsInstance {
        $options = new Values($options);

        $params = Values::of([
            'TaskChannel' => $options['taskChannel'],
        ]);

        $payload = $this->version->fetch('GET', $this->uri, $params);

        return new TaskQueueRealTimeStatisticsInstance(
            $this->version,
            $payload
            , $this->solution['workspaceSid']
            , $this->solution['taskQueueSid']
        );
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
        return '[Twilio.Taskrouter.V1.TaskQueueRealTimeStatisticsContext ' . \implode(' ', $context) . ']';
    }
}
