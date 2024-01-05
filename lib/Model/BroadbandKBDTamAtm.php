<?php
/**
 * BroadbandKBDTamAtm
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
 * BroadbandKBDTamAtm Class Doc Comment
 *
 * @category Class
 * @description Represents the KBD ATM INP subtest
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BroadbandKBDTamAtm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BroadbandKBDTamAtm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'outcome' => 'string',
        'vpi' => 'string',
        'transmitted' => 'string',
        'received' => 'string',
        'near_end_hec_violations' => 'string',
        'far_end_hec_violations' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'outcome' => null,
        'vpi' => null,
        'transmitted' => null,
        'received' => null,
        'near_end_hec_violations' => null,
        'far_end_hec_violations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'outcome' => true,
		'vpi' => true,
		'transmitted' => true,
		'received' => true,
		'near_end_hec_violations' => true,
		'far_end_hec_violations' => true
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
        'outcome' => 'outcome',
        'vpi' => 'vpi',
        'transmitted' => 'transmitted',
        'received' => 'received',
        'near_end_hec_violations' => 'near_end_hec_violations',
        'far_end_hec_violations' => 'far_end_hec_violations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'outcome' => 'setOutcome',
        'vpi' => 'setVpi',
        'transmitted' => 'setTransmitted',
        'received' => 'setReceived',
        'near_end_hec_violations' => 'setNearEndHecViolations',
        'far_end_hec_violations' => 'setFarEndHecViolations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'outcome' => 'getOutcome',
        'vpi' => 'getVpi',
        'transmitted' => 'getTransmitted',
        'received' => 'getReceived',
        'near_end_hec_violations' => 'getNearEndHecViolations',
        'far_end_hec_violations' => 'getFarEndHecViolations'
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
        $this->setIfExists('outcome', $data ?? [], null);
        $this->setIfExists('vpi', $data ?? [], null);
        $this->setIfExists('transmitted', $data ?? [], null);
        $this->setIfExists('received', $data ?? [], null);
        $this->setIfExists('near_end_hec_violations', $data ?? [], null);
        $this->setIfExists('far_end_hec_violations', $data ?? [], null);
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
     * Gets outcome
     *
     * @return string|null
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     *
     * @param string|null $outcome The test outcome.
     *
     * @return self
     */
    public function setOutcome($outcome)
    {
        if (is_null($outcome)) {
            array_push($this->openAPINullablesSetToNull, 'outcome');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('outcome', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets vpi
     *
     * @return string|null
     */
    public function getVpi()
    {
        return $this->container['vpi'];
    }

    /**
     * Sets vpi
     *
     * @param string|null $vpi VPI/VCI tested.
     *
     * @return self
     */
    public function setVpi($vpi)
    {
        if (is_null($vpi)) {
            array_push($this->openAPINullablesSetToNull, 'vpi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vpi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vpi'] = $vpi;

        return $this;
    }

    /**
     * Gets transmitted
     *
     * @return string|null
     */
    public function getTransmitted()
    {
        return $this->container['transmitted'];
    }

    /**
     * Sets transmitted
     *
     * @param string|null $transmitted Number of cells transmitted.
     *
     * @return self
     */
    public function setTransmitted($transmitted)
    {
        if (is_null($transmitted)) {
            array_push($this->openAPINullablesSetToNull, 'transmitted');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transmitted', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transmitted'] = $transmitted;

        return $this;
    }

    /**
     * Gets received
     *
     * @return string|null
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param string|null $received Number of cells received.
     *
     * @return self
     */
    public function setReceived($received)
    {
        if (is_null($received)) {
            array_push($this->openAPINullablesSetToNull, 'received');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('received', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['received'] = $received;

        return $this;
    }

    /**
     * Gets near_end_hec_violations
     *
     * @return string|null
     */
    public function getNearEndHecViolations()
    {
        return $this->container['near_end_hec_violations'];
    }

    /**
     * Sets near_end_hec_violations
     *
     * @param string|null $near_end_hec_violations Number of Near end HEC errors.
     *
     * @return self
     */
    public function setNearEndHecViolations($near_end_hec_violations)
    {
        if (is_null($near_end_hec_violations)) {
            array_push($this->openAPINullablesSetToNull, 'near_end_hec_violations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('near_end_hec_violations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['near_end_hec_violations'] = $near_end_hec_violations;

        return $this;
    }

    /**
     * Gets far_end_hec_violations
     *
     * @return string|null
     */
    public function getFarEndHecViolations()
    {
        return $this->container['far_end_hec_violations'];
    }

    /**
     * Sets far_end_hec_violations
     *
     * @param string|null $far_end_hec_violations Number of Far end HEC errors.
     *
     * @return self
     */
    public function setFarEndHecViolations($far_end_hec_violations)
    {
        if (is_null($far_end_hec_violations)) {
            array_push($this->openAPINullablesSetToNull, 'far_end_hec_violations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('far_end_hec_violations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['far_end_hec_violations'] = $far_end_hec_violations;

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

