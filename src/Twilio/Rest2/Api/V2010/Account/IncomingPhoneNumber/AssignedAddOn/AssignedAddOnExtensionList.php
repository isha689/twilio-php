<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Api\V2010\Account\IncomingPhoneNumber\AssignedAddOn;

use Twilio\ListResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class AssignedAddOnExtensionList extends ListResource {
    /**
     * Construct the AssignedAddOnExtensionList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the resource to fetch.
     * @param string $resourceSid The SID of the Phone Number to which the Add-on is assigned.
     * @param string $assignedAddOnSid The SID that uniquely identifies the assigned Add-on installation.
     */
    public function __construct(Version $version, string $accountSid , string $resourceSid , string $assignedAddOnSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'resourceSid' => $resourceSid, 'assignedAddOnSid' => $assignedAddOnSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/IncomingPhoneNumbers/' . \rawurlencode($resourceSid) . '/AssignedAddOns/' . \rawurlencode($assignedAddOnSid) . '/Extensions.json';
    }

    /**
     * Reads AssignedAddOnExtensionInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return AssignedAddOnExtensionInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams AssignedAddOnExtensionInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of AssignedAddOnExtensionInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return AssignedAddOnExtensionPage Page of AssignedAddOnExtensionInstance
     */
    public function page($pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): AssignedAddOnExtensionPage {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new AssignedAddOnExtensionPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of AssignedAddOnExtensionInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return AssignedAddOnExtensionPage Page of AssignedAddOnExtensionInstance
     */
    public function getPage(string $targetUrl): AssignedAddOnExtensionPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new AssignedAddOnExtensionPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a AssignedAddOnExtensionContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the resource to fetch.
     */
    public function getContext(string $sid): AssignedAddOnExtensionContext {
        return new AssignedAddOnExtensionContext($this->version, $this->solution['accountSid'], $this->solution['resourceSid'], $this->solution['assignedAddOnSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api.V2010.AssignedAddOnExtensionList]';
    }
}
