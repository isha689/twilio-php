<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Proxy
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Proxy\V1\Service\Session;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;


class ParticipantList extends ListResource {
    /**
     * Construct the ParticipantList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the parent [Service](https://www.twilio.com/docs/proxy/api/service) resource.
     * @param string $sessionSid The SID of the parent [Session](https://www.twilio.com/docs/proxy/api/session) resource.
     */
    public function __construct(Version $version, string $serviceSid , string $sessionSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'sessionSid' => $sessionSid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Sessions/' . \rawurlencode($sessionSid) . '/Participants';
    }

    /**
     * Create the ParticipantInstance
     *
     * @param string $identifier The phone number of the Participant.
     * @param array|Options $options Optional Arguments
     * @return ParticipantInstance Created ParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $identifier, array $options = []): ParticipantInstance {
        $options = new Values($options);

        $data = Values::of([
            'Identifier' => $identifier,
            'FriendlyName' => $options['friendlyName'],
            'ProxyIdentifier' => $options['proxyIdentifier'],
            'ProxyIdentifierSid' => $options['proxyIdentifierSid'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new ParticipantInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['sessionSid']
        );
    }

    /**
     * Reads ParticipantInstance records from the API as a list.
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
     * @return ParticipantInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Streams ParticipantInstance records from the API as a generator stream.
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
     * Retrieve a single page of ParticipantInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return ParticipantPage Page of ParticipantInstance
     */
    public function page($pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): ParticipantPage {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new ParticipantPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of ParticipantInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return ParticipantPage Page of ParticipantInstance
     */
    public function getPage(string $targetUrl): ParticipantPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new ParticipantPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a ParticipantContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the Participant resource to delete.
     */
    public function getContext(string $sid): ParticipantContext {
        return new ParticipantContext($this->version, $this->solution['serviceSid'], $this->solution['sessionSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Proxy.V1.ParticipantList]';
    }
}
