<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Supersim
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest2\Supersim;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest2\Supersim\V1\EsimProfileList;
use Twilio\Rest2\Supersim\V1\FleetList;
use Twilio\Rest2\Supersim\V1\IpCommandList;
use Twilio\Rest2\Supersim\V1\NetworkList;
use Twilio\Rest2\Supersim\V1\NetworkAccessProfileList;
use Twilio\Rest2\Supersim\V1\SettingsUpdateList;
use Twilio\Rest2\Supersim\V1\SimList;
use Twilio\Rest2\Supersim\V1\SmsCommandList;
use Twilio\Rest2\Supersim\V1\UsageRecordList;
use Twilio\Version;

/**
 * @property EsimProfileList $esimProfiles
 * @property FleetList $fleets
 * @property IpCommandList $ipCommands
 * @property NetworkList $networks
 * @property NetworkAccessProfileList $networkAccessProfiles
 * @property SettingsUpdateList $settingsUpdates
 * @property SimList $sims
 * @property SmsCommandList $smsCommands
 * @property UsageRecordList $usageRecords
 * @method \Twilio\Rest2\Supersim\V1\EsimProfileContext esimProfiles(string $sid)
 * @method \Twilio\Rest2\Supersim\V1\FleetContext fleets(string $sid)
 * @method \Twilio\Rest2\Supersim\V1\IpCommandContext ipCommands(string $sid)
 * @method \Twilio\Rest2\Supersim\V1\NetworkContext networks(string $sid)
 * @method \Twilio\Rest2\Supersim\V1\NetworkAccessProfileContext networkAccessProfiles(string $sid)
 * @method \Twilio\Rest2\Supersim\V1\SimContext sims(string $sid)
 * @method \Twilio\Rest2\Supersim\V1\SmsCommandContext smsCommands(string $sid)
 */
class V1 extends Version {
    protected $_esimProfiles;
    protected $_fleets;
    protected $_ipCommands;
    protected $_networks;
    protected $_networkAccessProfiles;
    protected $_settingsUpdates;
    protected $_sims;
    protected $_smsCommands;
    protected $_usageRecords;

    /**
     * Construct the V1 version of Supersim
     *
     * @param Domain $domain Domain that contains the version
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    protected function getEsimProfiles(): EsimProfileList {
        if (!$this->_esimProfiles) {
            $this->_esimProfiles = new EsimProfileList($this);
        }
        return $this->_esimProfiles;
    }

    protected function getFleets(): FleetList {
        if (!$this->_fleets) {
            $this->_fleets = new FleetList($this);
        }
        return $this->_fleets;
    }

    protected function getIpCommands(): IpCommandList {
        if (!$this->_ipCommands) {
            $this->_ipCommands = new IpCommandList($this);
        }
        return $this->_ipCommands;
    }

    protected function getNetworks(): NetworkList {
        if (!$this->_networks) {
            $this->_networks = new NetworkList($this);
        }
        return $this->_networks;
    }

    protected function getNetworkAccessProfiles(): NetworkAccessProfileList {
        if (!$this->_networkAccessProfiles) {
            $this->_networkAccessProfiles = new NetworkAccessProfileList($this);
        }
        return $this->_networkAccessProfiles;
    }

    protected function getSettingsUpdates(): SettingsUpdateList {
        if (!$this->_settingsUpdates) {
            $this->_settingsUpdates = new SettingsUpdateList($this);
        }
        return $this->_settingsUpdates;
    }

    protected function getSims(): SimList {
        if (!$this->_sims) {
            $this->_sims = new SimList($this);
        }
        return $this->_sims;
    }

    protected function getSmsCommands(): SmsCommandList {
        if (!$this->_smsCommands) {
            $this->_smsCommands = new SmsCommandList($this);
        }
        return $this->_smsCommands;
    }

    protected function getUsageRecords(): UsageRecordList {
        if (!$this->_usageRecords) {
            $this->_usageRecords = new UsageRecordList($this);
        }
        return $this->_usageRecords;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
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
        return '[Twilio.Supersim.V1]';
    }
}