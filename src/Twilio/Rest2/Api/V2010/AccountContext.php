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


namespace Twilio\Rest2\Api\V2010;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest2\Api\V2010\Account\RecordingList;
use Twilio\Rest2\Api\V2010\Account\UsageList;
use Twilio\Rest2\Api\V2010\Account\MessageList;
use Twilio\Rest2\Api\V2010\Account\KeyList;
use Twilio\Rest2\Api\V2010\Account\NewKeyList;
use Twilio\Rest2\Api\V2010\Account\ApplicationList;
use Twilio\Rest2\Api\V2010\Account\IncomingPhoneNumberList;
use Twilio\Rest2\Api\V2010\Account\ConferenceList;
use Twilio\Rest2\Api\V2010\Account\CallList;
use Twilio\Rest2\Api\V2010\Account\OutgoingCallerIdList;
use Twilio\Rest2\Api\V2010\Account\ValidationRequestList;
use Twilio\Rest2\Api\V2010\Account\TranscriptionList;
use Twilio\Rest2\Api\V2010\Account\ConnectAppList;
use Twilio\Rest2\Api\V2010\Account\AuthorizedConnectAppList;
use Twilio\Rest2\Api\V2010\Account\TokenList;
use Twilio\Rest2\Api\V2010\Account\BalanceList;
use Twilio\Rest2\Api\V2010\Account\SipList;
use Twilio\Rest2\Api\V2010\Account\NotificationList;
use Twilio\Rest2\Api\V2010\Account\AvailablePhoneNumberCountryList;
use Twilio\Rest2\Api\V2010\Account\AddressList;
use Twilio\Rest2\Api\V2010\Account\QueueList;
use Twilio\Rest2\Api\V2010\Account\ShortCodeList;
use Twilio\Rest2\Api\V2010\Account\SigningKeyList;
use Twilio\Rest2\Api\V2010\Account\NewSigningKeyList;


/**
 * @property RecordingList $recordings
 * @property UsageList $usage
 * @property MessageList $messages
 * @property KeyList $keys
 * @property NewKeyList $newKeys
 * @property ApplicationList $applications
 * @property IncomingPhoneNumberList $incomingPhoneNumbers
 * @property ConferenceList $conferences
 * @property CallList $calls
 * @property OutgoingCallerIdList $outgoingCallerIds
 * @property ValidationRequestList $validationRequests
 * @property TranscriptionList $transcriptions
 * @property ConnectAppList $connectApps
 * @property AuthorizedConnectAppList $authorizedConnectApps
 * @property TokenList $tokens
 * @property BalanceList $balance
 * @property SipList $sip
 * @property NotificationList $notifications
 * @property AvailablePhoneNumberCountryList $availablePhoneNumbers
 * @property AddressList $addresses
 * @property QueueList $queues
 * @property ShortCodeList $shortCodes
 * @property SigningKeyList $signingKeys
 * @property NewSigningKeyList $newSigningKeys
 * @method \Twilio\Rest2\Api\V2010\Account\ApplicationContext applications(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\RecordingContext recordings(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\ConnectAppContext connectApps(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\CallContext calls(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\SigningKeyContext signingKeys(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\OutgoingCallerIdContext outgoingCallerIds(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\ShortCodeContext shortCodes(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\IncomingPhoneNumberContext incomingPhoneNumbers(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\QueueContext queues(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\AuthorizedConnectAppContext authorizedConnectApps(string $connectAppSid)
 * @method \Twilio\Rest2\Api\V2010\Account\AvailablePhoneNumberCountryContext availablePhoneNumbers(string $countryCode)
 * @method \Twilio\Rest2\Api\V2010\Account\AddressContext addresses(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\TranscriptionContext transcriptions(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\ConferenceContext conferences(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\KeyContext keys(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\NotificationContext notifications(string $sid)
 * @method \Twilio\Rest2\Api\V2010\Account\MessageContext messages(string $sid)
 */
class AccountContext extends InstanceContext {
    protected $_recordings;
    protected $_usage;
    protected $_messages;
    protected $_keys;
    protected $_newKeys;
    protected $_applications;
    protected $_incomingPhoneNumbers;
    protected $_conferences;
    protected $_calls;
    protected $_outgoingCallerIds;
    protected $_validationRequests;
    protected $_transcriptions;
    protected $_connectApps;
    protected $_authorizedConnectApps;
    protected $_tokens;
    protected $_balance;
    protected $_sip;
    protected $_notifications;
    protected $_availablePhoneNumbers;
    protected $_addresses;
    protected $_queues;
    protected $_shortCodes;
    protected $_signingKeys;
    protected $_newSigningKeys;

    /**
     * Initialize the AccountContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The Account Sid that uniquely identifies the account to fetch
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Fetch the AccountInstance
     *
     * @return AccountInstance Fetched AccountInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AccountInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new AccountInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Update the AccountInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AccountInstance Updated AccountInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): AccountInstance {
        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' => $options['friendlyName'],
            'Status' => $options['status'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new AccountInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the recordings
     */
    protected function getRecordings(): RecordingList {
        if (!$this->_recordings) {
            $this->_recordings = new RecordingList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_recordings;
    }

    /**
     * Access the usage
     */
    protected function getUsage(): UsageList {
        if (!$this->_usage) {
            $this->_usage = new UsageList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_usage;
    }

    /**
     * Access the messages
     */
    protected function getMessages(): MessageList {
        if (!$this->_messages) {
            $this->_messages = new MessageList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_messages;
    }

    /**
     * Access the keys
     */
    protected function getKeys(): KeyList {
        if (!$this->_keys) {
            $this->_keys = new KeyList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_keys;
    }

    /**
     * Access the newKeys
     */
    protected function getNewKeys(): NewKeyList {
        if (!$this->_newKeys) {
            $this->_newKeys = new NewKeyList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_newKeys;
    }

    /**
     * Access the applications
     */
    protected function getApplications(): ApplicationList {
        if (!$this->_applications) {
            $this->_applications = new ApplicationList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_applications;
    }

    /**
     * Access the incomingPhoneNumbers
     */
    protected function getIncomingPhoneNumbers(): IncomingPhoneNumberList {
        if (!$this->_incomingPhoneNumbers) {
            $this->_incomingPhoneNumbers = new IncomingPhoneNumberList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_incomingPhoneNumbers;
    }

    /**
     * Access the conferences
     */
    protected function getConferences(): ConferenceList {
        if (!$this->_conferences) {
            $this->_conferences = new ConferenceList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_conferences;
    }

    /**
     * Access the calls
     */
    protected function getCalls(): CallList {
        if (!$this->_calls) {
            $this->_calls = new CallList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_calls;
    }

    /**
     * Access the outgoingCallerIds
     */
    protected function getOutgoingCallerIds(): OutgoingCallerIdList {
        if (!$this->_outgoingCallerIds) {
            $this->_outgoingCallerIds = new OutgoingCallerIdList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_outgoingCallerIds;
    }

    /**
     * Access the validationRequests
     */
    protected function getValidationRequests(): ValidationRequestList {
        if (!$this->_validationRequests) {
            $this->_validationRequests = new ValidationRequestList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_validationRequests;
    }

    /**
     * Access the transcriptions
     */
    protected function getTranscriptions(): TranscriptionList {
        if (!$this->_transcriptions) {
            $this->_transcriptions = new TranscriptionList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_transcriptions;
    }

    /**
     * Access the connectApps
     */
    protected function getConnectApps(): ConnectAppList {
        if (!$this->_connectApps) {
            $this->_connectApps = new ConnectAppList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_connectApps;
    }

    /**
     * Access the authorizedConnectApps
     */
    protected function getAuthorizedConnectApps(): AuthorizedConnectAppList {
        if (!$this->_authorizedConnectApps) {
            $this->_authorizedConnectApps = new AuthorizedConnectAppList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_authorizedConnectApps;
    }

    /**
     * Access the tokens
     */
    protected function getTokens(): TokenList {
        if (!$this->_tokens) {
            $this->_tokens = new TokenList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_tokens;
    }

    /**
     * Access the balance
     */
    protected function getBalance(): BalanceList {
        if (!$this->_balance) {
            $this->_balance = new BalanceList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_balance;
    }

    /**
     * Access the sip
     */
    protected function getSip(): SipList {
        if (!$this->_sip) {
            $this->_sip = new SipList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_sip;
    }

    /**
     * Access the notifications
     */
    protected function getNotifications(): NotificationList {
        if (!$this->_notifications) {
            $this->_notifications = new NotificationList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_notifications;
    }

    /**
     * Access the availablePhoneNumbers
     */
    protected function getAvailablePhoneNumbers(): AvailablePhoneNumberCountryList {
        if (!$this->_availablePhoneNumbers) {
            $this->_availablePhoneNumbers = new AvailablePhoneNumberCountryList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_availablePhoneNumbers;
    }

    /**
     * Access the addresses
     */
    protected function getAddresses(): AddressList {
        if (!$this->_addresses) {
            $this->_addresses = new AddressList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_addresses;
    }

    /**
     * Access the queues
     */
    protected function getQueues(): QueueList {
        if (!$this->_queues) {
            $this->_queues = new QueueList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_queues;
    }

    /**
     * Access the shortCodes
     */
    protected function getShortCodes(): ShortCodeList {
        if (!$this->_shortCodes) {
            $this->_shortCodes = new ShortCodeList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_shortCodes;
    }

    /**
     * Access the signingKeys
     */
    protected function getSigningKeys(): SigningKeyList {
        if (!$this->_signingKeys) {
            $this->_signingKeys = new SigningKeyList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_signingKeys;
    }

    /**
     * Access the newSigningKeys
     */
    protected function getNewSigningKeys(): NewSigningKeyList {
        if (!$this->_newSigningKeys) {
            $this->_newSigningKeys = new NewSigningKeyList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_newSigningKeys;
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
        return '[Twilio.Api.V2010.AccountContext ' . \implode(' ', $context) . ']';
    }
}
