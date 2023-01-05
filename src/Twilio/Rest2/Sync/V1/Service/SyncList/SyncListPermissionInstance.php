<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Sync\V1\Service\SyncList;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $listSid
 * @property string $identity
 * @property bool $read
 * @property bool $write
 * @property bool $manage
 * @property string $url
 */
class SyncListPermissionInstance extends InstanceResource {
    /**
     * Initialize the SyncListPermissionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Sync Service](https://www.twilio.com/docs/sync/api/service) with the Sync List Permission resource to delete.
     * @param string $listSid The SID of the Sync List with the Sync List Permission resource to delete. Can be the Sync List resource's `sid` or its `unique_name`.
     * @param string $identity The application-defined string that uniquely identifies the User's Sync List Permission resource to delete.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $listSid, string $identity = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'listSid' => Values::array_get($payload, 'list_sid'),
            'identity' => Values::array_get($payload, 'identity'),
            'read' => Values::array_get($payload, 'read'),
            'write' => Values::array_get($payload, 'write'),
            'manage' => Values::array_get($payload, 'manage'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'listSid' => $listSid, 'identity' => $identity ?: $this->properties['identity'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SyncListPermissionContext Context for this SyncListPermissionInstance
     */
    protected function proxy(): SyncListPermissionContext {
        if (!$this->context) {
            $this->context = new SyncListPermissionContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['listSid'],
                $this->solution['identity']
            );
        }

        return $this->context;
    }

    /**
     * Delete the SyncListPermissionInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the SyncListPermissionInstance
     *
     * @return SyncListPermissionInstance Fetched SyncListPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncListPermissionInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the SyncListPermissionInstance
     *
     * @param bool $read Whether the identity can read the Sync List and its Items. Default value is `false`.
     * @param bool $write Whether the identity can create, update, and delete Items in the Sync List. Default value is `false`.
     * @param bool $manage Whether the identity can delete the Sync List. Default value is `false`.
     * @return SyncListPermissionInstance Updated SyncListPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(bool $read, bool $write, bool $manage): SyncListPermissionInstance {
        return $this->proxy()->update($read, $write, $manage);
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
        return '[Twilio.Sync.V1.SyncListPermissionInstance ' . \implode(' ', $context) . ']';
    }
}

