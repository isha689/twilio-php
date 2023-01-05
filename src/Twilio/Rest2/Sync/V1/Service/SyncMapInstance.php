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


namespace Twilio\Rest2\Sync\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest2\Sync\V1\Service\SyncMap\SyncMapItemList;
use Twilio\Rest2\Sync\V1\Service\SyncMap\SyncMapPermissionList;


/**
 * @property string $sid
 * @property string $uniqueName
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $url
 * @property array $links
 * @property string $revision
 * @property \DateTime $dateExpires
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $createdBy
 */
class SyncMapInstance extends InstanceResource {
    protected $_syncMapItems;
    protected $_syncMapPermissions;

    /**
     * Initialize the SyncMapInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Sync Service](https://www.twilio.com/docs/sync/api/service) to create the Sync Map in.
     * @param string $sid The SID of the Sync Map resource to delete. Can be the Sync Map's `sid` or its `unique_name`.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
            'revision' => Values::array_get($payload, 'revision'),
            'dateExpires' => Deserialize::dateTime(Values::array_get($payload, 'date_expires')),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'createdBy' => Values::array_get($payload, 'created_by'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SyncMapContext Context for this SyncMapInstance
     */
    protected function proxy(): SyncMapContext {
        if (!$this->context) {
            $this->context = new SyncMapContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the SyncMapInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the SyncMapInstance
     *
     * @return SyncMapInstance Fetched SyncMapInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncMapInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the SyncMapInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SyncMapInstance Updated SyncMapInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): SyncMapInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the syncMapItems
     */
    protected function getSyncMapItems(): SyncMapItemList {
        return $this->proxy()->syncMapItems;
    }

    /**
     * Access the syncMapPermissions
     */
    protected function getSyncMapPermissions(): SyncMapPermissionList {
        return $this->proxy()->syncMapPermissions;
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
        return '[Twilio.Sync.V1.SyncMapInstance ' . \implode(' ', $context) . ']';
    }
}

