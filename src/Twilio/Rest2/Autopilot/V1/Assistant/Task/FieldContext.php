<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Autopilot
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest2\Autopilot\V1\Assistant\Task;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class FieldContext extends InstanceContext {
    /**
     * Initialize the FieldContext
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The SID of the [Assistant](https://www.twilio.com/docs/autopilot/api/assistant) that is the parent of the Task associated with the new resource.
     * @param string $taskSid The SID of the [Task](https://www.twilio.com/docs/autopilot/api/task) resource associated with the new Field resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the Field resource to delete.
     */
    public function __construct(Version $version, $assistantSid , $taskSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid,  'taskSid' => $taskSid,  'sid' => $sid,  ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Tasks/' . \rawurlencode($taskSid) . '/Fields/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the FieldInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the FieldInstance
     *
     * @return FieldInstance Fetched FieldInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FieldInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new FieldInstance(
            $this->version,
            $payload
            , $this->solution['assistantSid']
            , $this->solution['taskSid']
            , $this->solution['sid']
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
        return '[Twilio.Autopilot.V1.FieldContext ' . \implode(' ', $context) . ']';
    }
}
