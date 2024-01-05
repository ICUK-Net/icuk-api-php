<?php
/**
 * BroadbandKBDRadius
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Documentation
 *
 * The ICUK API provides an interface to the reseller control panel which can be used to control the provisioning and configuration of facilities remotely
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BroadbandKBDRadius Class Doc Comment
 *
 * @category Class
 * @description Represents the KBD radius subtest
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BroadbandKBDRadius implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BroadbandKBDRadius';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nas_ip' => 'string',
        'nas_port' => 'string',
        'nas_slot' => 'string',
        'nas_svlan' => 'string',
        'nas_cvlan' => 'string',
        'nas_fault_time' => 'string',
        'log_summary' => '\OpenAPI\Client\Model\BroadbandKBDRadiusLog',
        'earliest_log' => 'string',
        'latest_log' => 'string',
        'log_message' => '\OpenAPI\Client\Model\BroadbandKBDRadiusMessage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'nas_ip' => null,
        'nas_port' => null,
        'nas_slot' => null,
        'nas_svlan' => null,
        'nas_cvlan' => null,
        'nas_fault_time' => null,
        'log_summary' => null,
        'earliest_log' => null,
        'latest_log' => null,
        'log_message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nas_ip' => true,
		'nas_port' => true,
		'nas_slot' => true,
		'nas_svlan' => true,
		'nas_cvlan' => true,
		'nas_fault_time' => true,
		'log_summary' => false,
		'earliest_log' => true,
		'latest_log' => true,
		'log_message' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'nas_ip' => 'nas_ip',
        'nas_port' => 'nas_port',
        'nas_slot' => 'nas_slot',
        'nas_svlan' => 'nas_svlan',
        'nas_cvlan' => 'nas_cvlan',
        'nas_fault_time' => 'nas_fault_time',
        'log_summary' => 'log_summary',
        'earliest_log' => 'earliest_log',
        'latest_log' => 'latest_log',
        'log_message' => 'log_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nas_ip' => 'setNasIp',
        'nas_port' => 'setNasPort',
        'nas_slot' => 'setNasSlot',
        'nas_svlan' => 'setNasSvlan',
        'nas_cvlan' => 'setNasCvlan',
        'nas_fault_time' => 'setNasFaultTime',
        'log_summary' => 'setLogSummary',
        'earliest_log' => 'setEarliestLog',
        'latest_log' => 'setLatestLog',
        'log_message' => 'setLogMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nas_ip' => 'getNasIp',
        'nas_port' => 'getNasPort',
        'nas_slot' => 'getNasSlot',
        'nas_svlan' => 'getNasSvlan',
        'nas_cvlan' => 'getNasCvlan',
        'nas_fault_time' => 'getNasFaultTime',
        'log_summary' => 'getLogSummary',
        'earliest_log' => 'getEarliestLog',
        'latest_log' => 'getLatestLog',
        'log_message' => 'getLogMessage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('nas_ip', $data ?? [], null);
        $this->setIfExists('nas_port', $data ?? [], null);
        $this->setIfExists('nas_slot', $data ?? [], null);
        $this->setIfExists('nas_svlan', $data ?? [], null);
        $this->setIfExists('nas_cvlan', $data ?? [], null);
        $this->setIfExists('nas_fault_time', $data ?? [], null);
        $this->setIfExists('log_summary', $data ?? [], null);
        $this->setIfExists('earliest_log', $data ?? [], null);
        $this->setIfExists('latest_log', $data ?? [], null);
        $this->setIfExists('log_message', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets nas_ip
     *
     * @return string|null
     */
    public function getNasIp()
    {
        return $this->container['nas_ip'];
    }

    /**
     * Sets nas_ip
     *
     * @param string|null $nas_ip NAS IP.
     *
     * @return self
     */
    public function setNasIp($nas_ip)
    {
        if (is_null($nas_ip)) {
            array_push($this->openAPINullablesSetToNull, 'nas_ip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nas_ip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nas_ip'] = $nas_ip;

        return $this;
    }

    /**
     * Gets nas_port
     *
     * @return string|null
     */
    public function getNasPort()
    {
        return $this->container['nas_port'];
    }

    /**
     * Sets nas_port
     *
     * @param string|null $nas_port NAS Port.
     *
     * @return self
     */
    public function setNasPort($nas_port)
    {
        if (is_null($nas_port)) {
            array_push($this->openAPINullablesSetToNull, 'nas_port');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nas_port', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nas_port'] = $nas_port;

        return $this;
    }

    /**
     * Gets nas_slot
     *
     * @return string|null
     */
    public function getNasSlot()
    {
        return $this->container['nas_slot'];
    }

    /**
     * Sets nas_slot
     *
     * @param string|null $nas_slot NAS Slot Port
     *
     * @return self
     */
    public function setNasSlot($nas_slot)
    {
        if (is_null($nas_slot)) {
            array_push($this->openAPINullablesSetToNull, 'nas_slot');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nas_slot', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nas_slot'] = $nas_slot;

        return $this;
    }

    /**
     * Gets nas_svlan
     *
     * @return string|null
     */
    public function getNasSvlan()
    {
        return $this->container['nas_svlan'];
    }

    /**
     * Sets nas_svlan
     *
     * @param string|null $nas_svlan SVLAN.
     *
     * @return self
     */
    public function setNasSvlan($nas_svlan)
    {
        if (is_null($nas_svlan)) {
            array_push($this->openAPINullablesSetToNull, 'nas_svlan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nas_svlan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nas_svlan'] = $nas_svlan;

        return $this;
    }

    /**
     * Gets nas_cvlan
     *
     * @return string|null
     */
    public function getNasCvlan()
    {
        return $this->container['nas_cvlan'];
    }

    /**
     * Sets nas_cvlan
     *
     * @param string|null $nas_cvlan CVLAN.
     *
     * @return self
     */
    public function setNasCvlan($nas_cvlan)
    {
        if (is_null($nas_cvlan)) {
            array_push($this->openAPINullablesSetToNull, 'nas_cvlan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nas_cvlan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nas_cvlan'] = $nas_cvlan;

        return $this;
    }

    /**
     * Gets nas_fault_time
     *
     * @return string|null
     */
    public function getNasFaultTime()
    {
        return $this->container['nas_fault_time'];
    }

    /**
     * Sets nas_fault_time
     *
     * @param string|null $nas_fault_time Fault Time.
     *
     * @return self
     */
    public function setNasFaultTime($nas_fault_time)
    {
        if (is_null($nas_fault_time)) {
            array_push($this->openAPINullablesSetToNull, 'nas_fault_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nas_fault_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nas_fault_time'] = $nas_fault_time;

        return $this;
    }

    /**
     * Gets log_summary
     *
     * @return \OpenAPI\Client\Model\BroadbandKBDRadiusLog|null
     */
    public function getLogSummary()
    {
        return $this->container['log_summary'];
    }

    /**
     * Sets log_summary
     *
     * @param \OpenAPI\Client\Model\BroadbandKBDRadiusLog|null $log_summary log_summary
     *
     * @return self
     */
    public function setLogSummary($log_summary)
    {
        if (is_null($log_summary)) {
            throw new \InvalidArgumentException('non-nullable log_summary cannot be null');
        }
        $this->container['log_summary'] = $log_summary;

        return $this;
    }

    /**
     * Gets earliest_log
     *
     * @return string|null
     */
    public function getEarliestLog()
    {
        return $this->container['earliest_log'];
    }

    /**
     * Sets earliest_log
     *
     * @param string|null $earliest_log The Earliest Log.
     *
     * @return self
     */
    public function setEarliestLog($earliest_log)
    {
        if (is_null($earliest_log)) {
            array_push($this->openAPINullablesSetToNull, 'earliest_log');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('earliest_log', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['earliest_log'] = $earliest_log;

        return $this;
    }

    /**
     * Gets latest_log
     *
     * @return string|null
     */
    public function getLatestLog()
    {
        return $this->container['latest_log'];
    }

    /**
     * Sets latest_log
     *
     * @param string|null $latest_log The Latest Log.
     *
     * @return self
     */
    public function setLatestLog($latest_log)
    {
        if (is_null($latest_log)) {
            array_push($this->openAPINullablesSetToNull, 'latest_log');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('latest_log', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['latest_log'] = $latest_log;

        return $this;
    }

    /**
     * Gets log_message
     *
     * @return \OpenAPI\Client\Model\BroadbandKBDRadiusMessage|null
     */
    public function getLogMessage()
    {
        return $this->container['log_message'];
    }

    /**
     * Sets log_message
     *
     * @param \OpenAPI\Client\Model\BroadbandKBDRadiusMessage|null $log_message log_message
     *
     * @return self
     */
    public function setLogMessage($log_message)
    {
        if (is_null($log_message)) {
            throw new \InvalidArgumentException('non-nullable log_message cannot be null');
        }
        $this->container['log_message'] = $log_message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

