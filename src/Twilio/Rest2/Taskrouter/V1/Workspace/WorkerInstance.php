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
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest2\Taskrouter\V1\Workspace\Worker\WorkerChannelList;
use Twilio\Rest2\Taskrouter\V1\Workspace\Worker\ReservationList;
use Twilio\Rest2\Taskrouter\V1\Workspace\Worker\WorkersRealTimeStatisticsList;
use Twilio\Rest2\Taskrouter\V1\Workspace\Worker\WorkerStatisticsList;
use Twilio\Rest2\Taskrouter\V1\Workspace\Worker\WorkersCumulativeStatisticsList;


/**
 * @property string $accountSid
 * @property string $activityName
 * @property string $activitySid
 * @property string $attributes
 * @property bool $available
 * @property \DateTime $dateCreated
 * @property \DateTime $dateStatusChanged
 * @property \DateTime $dateUpdated
 * @property string $friendlyName
 * @property string $sid
 * @property string $workspaceSid
 * @property string $url
 * @property array $links
 */
class WorkerInstance extends InstanceResource {
    protected $_workerChannels;
    protected $_reservations;
    protected $_realTimeStatistics;
    protected $_statistics;
    protected $_cumulativeStatistics;

    /**
     * Initialize the WorkerInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The SID of the Workspace that the new Worker belongs to.
     * @param string $sid The SID of the Worker resource to delete.
     */
    public function __construct(Version $version, array $payload, string $workspaceSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'activityName' => Values::array_get($payload, 'activity_name'),
            'activitySid' => Values::array_get($payload, 'activity_sid'),
            'attributes' => Values::array_get($payload, 'attributes'),
            'available' => Values::array_get($payload, 'available'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateStatusChanged' => Deserialize::dateTime(Values::array_get($payload, 'date_status_changed')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'sid' => Values::array_get($payload, 'sid'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['workspaceSid' => $workspaceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WorkerContext Context for this WorkerInstance
     */
    protected function proxy(): WorkerContext {
        if (!$this->context) {
            $this->context = new WorkerContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the WorkerInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool {
        return $this->proxy()->delete($options);
    }

    /**
     * Fetch the WorkerInstance
     *
     * @return WorkerInstance Fetched WorkerInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): WorkerInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the WorkerInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkerInstance Updated WorkerInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): WorkerInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the workerChannels
     */
    protected function getWorkerChannels(): WorkerChannelList {
        return $this->proxy()->workerChannels;
    }

    /**
     * Access the reservations
     */
    protected function getReservations(): ReservationList {
        return $this->proxy()->reservations;
    }

    /**
     * Access the realTimeStatistics
     */
    protected function getRealTimeStatistics(): WorkersRealTimeStatisticsList {
        return $this->proxy()->realTimeStatistics;
    }

    /**
     * Access the statistics
     */
    protected function getStatistics(): WorkerStatisticsList {
        return $this->proxy()->statistics;
    }

    /**
     * Access the cumulativeStatistics
     */
    protected function getCumulativeStatistics(): WorkersCumulativeStatisticsList {
        return $this->proxy()->cumulativeStatistics;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Taskrouter.V1.WorkerInstance ' . \implode(' ', $context) . ']';
    }
}

