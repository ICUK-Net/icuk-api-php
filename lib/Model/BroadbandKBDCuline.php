<?php
/**
 * BroadbandKBDCuline
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
 * BroadbandKBDCuline Class Doc Comment
 *
 * @category Class
 * @description Represents the KBD Copper Line subtest
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BroadbandKBDCuline implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BroadbandKBDCuline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dtr' => 'string',
        'dtr_text' => 'string',
        'mfl' => 'string',
        'appointment_required' => 'string',
        'fault_report_advised' => 'string',
        'service_level' => 'string',
        'anfp' => 'string',
        'line_stability' => 'string',
        'dp_length_estimate' => 'string',
        'dp_unit' => 'string',
        'dn_length_estimate' => 'string',
        'dn_unit' => 'string',
        'db_loss' => 'string',
        'db_unit' => 'string',
        'capacitance_a' => 'string',
        'capacitance_a_unit' => 'string',
        'capacitance_b' => 'string',
        'capacitance_b_unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dtr' => null,
        'dtr_text' => null,
        'mfl' => null,
        'appointment_required' => null,
        'fault_report_advised' => null,
        'service_level' => null,
        'anfp' => null,
        'line_stability' => null,
        'dp_length_estimate' => null,
        'dp_unit' => null,
        'dn_length_estimate' => null,
        'dn_unit' => null,
        'db_loss' => null,
        'db_unit' => null,
        'capacitance_a' => null,
        'capacitance_a_unit' => null,
        'capacitance_b' => null,
        'capacitance_b_unit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dtr' => true,
		'dtr_text' => true,
		'mfl' => true,
		'appointment_required' => true,
		'fault_report_advised' => true,
		'service_level' => true,
		'anfp' => true,
		'line_stability' => true,
		'dp_length_estimate' => true,
		'dp_unit' => true,
		'dn_length_estimate' => true,
		'dn_unit' => true,
		'db_loss' => true,
		'db_unit' => true,
		'capacitance_a' => true,
		'capacitance_a_unit' => true,
		'capacitance_b' => true,
		'capacitance_b_unit' => true
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
        'dtr' => 'dtr',
        'dtr_text' => 'dtr_text',
        'mfl' => 'mfl',
        'appointment_required' => 'appointment_required',
        'fault_report_advised' => 'fault_report_advised',
        'service_level' => 'service_level',
        'anfp' => 'anfp',
        'line_stability' => 'line_stability',
        'dp_length_estimate' => 'dp_length_estimate',
        'dp_unit' => 'dp_unit',
        'dn_length_estimate' => 'dn_length_estimate',
        'dn_unit' => 'dn_unit',
        'db_loss' => 'db_loss',
        'db_unit' => 'db_unit',
        'capacitance_a' => 'capacitance_a',
        'capacitance_a_unit' => 'capacitance_a_unit',
        'capacitance_b' => 'capacitance_b',
        'capacitance_b_unit' => 'capacitance_b_unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dtr' => 'setDtr',
        'dtr_text' => 'setDtrText',
        'mfl' => 'setMfl',
        'appointment_required' => 'setAppointmentRequired',
        'fault_report_advised' => 'setFaultReportAdvised',
        'service_level' => 'setServiceLevel',
        'anfp' => 'setAnfp',
        'line_stability' => 'setLineStability',
        'dp_length_estimate' => 'setDpLengthEstimate',
        'dp_unit' => 'setDpUnit',
        'dn_length_estimate' => 'setDnLengthEstimate',
        'dn_unit' => 'setDnUnit',
        'db_loss' => 'setDbLoss',
        'db_unit' => 'setDbUnit',
        'capacitance_a' => 'setCapacitanceA',
        'capacitance_a_unit' => 'setCapacitanceAUnit',
        'capacitance_b' => 'setCapacitanceB',
        'capacitance_b_unit' => 'setCapacitanceBUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dtr' => 'getDtr',
        'dtr_text' => 'getDtrText',
        'mfl' => 'getMfl',
        'appointment_required' => 'getAppointmentRequired',
        'fault_report_advised' => 'getFaultReportAdvised',
        'service_level' => 'getServiceLevel',
        'anfp' => 'getAnfp',
        'line_stability' => 'getLineStability',
        'dp_length_estimate' => 'getDpLengthEstimate',
        'dp_unit' => 'getDpUnit',
        'dn_length_estimate' => 'getDnLengthEstimate',
        'dn_unit' => 'getDnUnit',
        'db_loss' => 'getDbLoss',
        'db_unit' => 'getDbUnit',
        'capacitance_a' => 'getCapacitanceA',
        'capacitance_a_unit' => 'getCapacitanceAUnit',
        'capacitance_b' => 'getCapacitanceB',
        'capacitance_b_unit' => 'getCapacitanceBUnit'
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
        $this->setIfExists('dtr', $data ?? [], null);
        $this->setIfExists('dtr_text', $data ?? [], null);
        $this->setIfExists('mfl', $data ?? [], null);
        $this->setIfExists('appointment_required', $data ?? [], null);
        $this->setIfExists('fault_report_advised', $data ?? [], null);
        $this->setIfExists('service_level', $data ?? [], null);
        $this->setIfExists('anfp', $data ?? [], null);
        $this->setIfExists('line_stability', $data ?? [], null);
        $this->setIfExists('dp_length_estimate', $data ?? [], null);
        $this->setIfExists('dp_unit', $data ?? [], null);
        $this->setIfExists('dn_length_estimate', $data ?? [], null);
        $this->setIfExists('dn_unit', $data ?? [], null);
        $this->setIfExists('db_loss', $data ?? [], null);
        $this->setIfExists('db_unit', $data ?? [], null);
        $this->setIfExists('capacitance_a', $data ?? [], null);
        $this->setIfExists('capacitance_a_unit', $data ?? [], null);
        $this->setIfExists('capacitance_b', $data ?? [], null);
        $this->setIfExists('capacitance_b_unit', $data ?? [], null);
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
     * Gets dtr
     *
     * @return string|null
     */
    public function getDtr()
    {
        return $this->container['dtr'];
    }

    /**
     * Sets dtr
     *
     * @param string|null $dtr DTR.
     *
     * @return self
     */
    public function setDtr($dtr)
    {
        if (is_null($dtr)) {
            array_push($this->openAPINullablesSetToNull, 'dtr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dtr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dtr'] = $dtr;

        return $this;
    }

    /**
     * Gets dtr_text
     *
     * @return string|null
     */
    public function getDtrText()
    {
        return $this->container['dtr_text'];
    }

    /**
     * Sets dtr_text
     *
     * @param string|null $dtr_text DTR Text.
     *
     * @return self
     */
    public function setDtrText($dtr_text)
    {
        if (is_null($dtr_text)) {
            array_push($this->openAPINullablesSetToNull, 'dtr_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dtr_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dtr_text'] = $dtr_text;

        return $this;
    }

    /**
     * Gets mfl
     *
     * @return string|null
     */
    public function getMfl()
    {
        return $this->container['mfl'];
    }

    /**
     * Sets mfl
     *
     * @param string|null $mfl MFL.
     *
     * @return self
     */
    public function setMfl($mfl)
    {
        if (is_null($mfl)) {
            array_push($this->openAPINullablesSetToNull, 'mfl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mfl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mfl'] = $mfl;

        return $this;
    }

    /**
     * Gets appointment_required
     *
     * @return string|null
     */
    public function getAppointmentRequired()
    {
        return $this->container['appointment_required'];
    }

    /**
     * Sets appointment_required
     *
     * @param string|null $appointment_required Appointment Required.
     *
     * @return self
     */
    public function setAppointmentRequired($appointment_required)
    {
        if (is_null($appointment_required)) {
            array_push($this->openAPINullablesSetToNull, 'appointment_required');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('appointment_required', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['appointment_required'] = $appointment_required;

        return $this;
    }

    /**
     * Gets fault_report_advised
     *
     * @return string|null
     */
    public function getFaultReportAdvised()
    {
        return $this->container['fault_report_advised'];
    }

    /**
     * Sets fault_report_advised
     *
     * @param string|null $fault_report_advised Fault Report Advised.
     *
     * @return self
     */
    public function setFaultReportAdvised($fault_report_advised)
    {
        if (is_null($fault_report_advised)) {
            array_push($this->openAPINullablesSetToNull, 'fault_report_advised');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fault_report_advised', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fault_report_advised'] = $fault_report_advised;

        return $this;
    }

    /**
     * Gets service_level
     *
     * @return string|null
     */
    public function getServiceLevel()
    {
        return $this->container['service_level'];
    }

    /**
     * Sets service_level
     *
     * @param string|null $service_level Service Level.
     *
     * @return self
     */
    public function setServiceLevel($service_level)
    {
        if (is_null($service_level)) {
            array_push($this->openAPINullablesSetToNull, 'service_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('service_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['service_level'] = $service_level;

        return $this;
    }

    /**
     * Gets anfp
     *
     * @return string|null
     */
    public function getAnfp()
    {
        return $this->container['anfp'];
    }

    /**
     * Sets anfp
     *
     * @param string|null $anfp ANFP.
     *
     * @return self
     */
    public function setAnfp($anfp)
    {
        if (is_null($anfp)) {
            array_push($this->openAPINullablesSetToNull, 'anfp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('anfp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['anfp'] = $anfp;

        return $this;
    }

    /**
     * Gets line_stability
     *
     * @return string|null
     */
    public function getLineStability()
    {
        return $this->container['line_stability'];
    }

    /**
     * Sets line_stability
     *
     * @param string|null $line_stability Line Stability.
     *
     * @return self
     */
    public function setLineStability($line_stability)
    {
        if (is_null($line_stability)) {
            array_push($this->openAPINullablesSetToNull, 'line_stability');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line_stability', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['line_stability'] = $line_stability;

        return $this;
    }

    /**
     * Gets dp_length_estimate
     *
     * @return string|null
     */
    public function getDpLengthEstimate()
    {
        return $this->container['dp_length_estimate'];
    }

    /**
     * Sets dp_length_estimate
     *
     * @param string|null $dp_length_estimate DP Line Length Estimate.
     *
     * @return self
     */
    public function setDpLengthEstimate($dp_length_estimate)
    {
        if (is_null($dp_length_estimate)) {
            array_push($this->openAPINullablesSetToNull, 'dp_length_estimate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dp_length_estimate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dp_length_estimate'] = $dp_length_estimate;

        return $this;
    }

    /**
     * Gets dp_unit
     *
     * @return string|null
     */
    public function getDpUnit()
    {
        return $this->container['dp_unit'];
    }

    /**
     * Sets dp_unit
     *
     * @param string|null $dp_unit DP Line Length Estimate Unit.
     *
     * @return self
     */
    public function setDpUnit($dp_unit)
    {
        if (is_null($dp_unit)) {
            array_push($this->openAPINullablesSetToNull, 'dp_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dp_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dp_unit'] = $dp_unit;

        return $this;
    }

    /**
     * Gets dn_length_estimate
     *
     * @return string|null
     */
    public function getDnLengthEstimate()
    {
        return $this->container['dn_length_estimate'];
    }

    /**
     * Sets dn_length_estimate
     *
     * @param string|null $dn_length_estimate DN Line Length Estimate.
     *
     * @return self
     */
    public function setDnLengthEstimate($dn_length_estimate)
    {
        if (is_null($dn_length_estimate)) {
            array_push($this->openAPINullablesSetToNull, 'dn_length_estimate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dn_length_estimate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dn_length_estimate'] = $dn_length_estimate;

        return $this;
    }

    /**
     * Gets dn_unit
     *
     * @return string|null
     */
    public function getDnUnit()
    {
        return $this->container['dn_unit'];
    }

    /**
     * Sets dn_unit
     *
     * @param string|null $dn_unit DN Line Length Estimate Unit.
     *
     * @return self
     */
    public function setDnUnit($dn_unit)
    {
        if (is_null($dn_unit)) {
            array_push($this->openAPINullablesSetToNull, 'dn_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dn_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dn_unit'] = $dn_unit;

        return $this;
    }

    /**
     * Gets db_loss
     *
     * @return string|null
     */
    public function getDbLoss()
    {
        return $this->container['db_loss'];
    }

    /**
     * Sets db_loss
     *
     * @param string|null $db_loss Celerity Loss.
     *
     * @return self
     */
    public function setDbLoss($db_loss)
    {
        if (is_null($db_loss)) {
            array_push($this->openAPINullablesSetToNull, 'db_loss');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('db_loss', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['db_loss'] = $db_loss;

        return $this;
    }

    /**
     * Gets db_unit
     *
     * @return string|null
     */
    public function getDbUnit()
    {
        return $this->container['db_unit'];
    }

    /**
     * Sets db_unit
     *
     * @param string|null $db_unit Celerity Loss unit.
     *
     * @return self
     */
    public function setDbUnit($db_unit)
    {
        if (is_null($db_unit)) {
            array_push($this->openAPINullablesSetToNull, 'db_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('db_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['db_unit'] = $db_unit;

        return $this;
    }

    /**
     * Gets capacitance_a
     *
     * @return string|null
     */
    public function getCapacitanceA()
    {
        return $this->container['capacitance_a'];
    }

    /**
     * Sets capacitance_a
     *
     * @param string|null $capacitance_a Capacitance A to Earth.
     *
     * @return self
     */
    public function setCapacitanceA($capacitance_a)
    {
        if (is_null($capacitance_a)) {
            array_push($this->openAPINullablesSetToNull, 'capacitance_a');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capacitance_a', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capacitance_a'] = $capacitance_a;

        return $this;
    }

    /**
     * Gets capacitance_a_unit
     *
     * @return string|null
     */
    public function getCapacitanceAUnit()
    {
        return $this->container['capacitance_a_unit'];
    }

    /**
     * Sets capacitance_a_unit
     *
     * @param string|null $capacitance_a_unit Capacitance A to Earth Unit.
     *
     * @return self
     */
    public function setCapacitanceAUnit($capacitance_a_unit)
    {
        if (is_null($capacitance_a_unit)) {
            array_push($this->openAPINullablesSetToNull, 'capacitance_a_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capacitance_a_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capacitance_a_unit'] = $capacitance_a_unit;

        return $this;
    }

    /**
     * Gets capacitance_b
     *
     * @return string|null
     */
    public function getCapacitanceB()
    {
        return $this->container['capacitance_b'];
    }

    /**
     * Sets capacitance_b
     *
     * @param string|null $capacitance_b Capacitance B to Earth.
     *
     * @return self
     */
    public function setCapacitanceB($capacitance_b)
    {
        if (is_null($capacitance_b)) {
            array_push($this->openAPINullablesSetToNull, 'capacitance_b');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capacitance_b', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capacitance_b'] = $capacitance_b;

        return $this;
    }

    /**
     * Gets capacitance_b_unit
     *
     * @return string|null
     */
    public function getCapacitanceBUnit()
    {
        return $this->container['capacitance_b_unit'];
    }

    /**
     * Sets capacitance_b_unit
     *
     * @param string|null $capacitance_b_unit Capacitance B to Earth Unit.
     *
     * @return self
     */
    public function setCapacitanceBUnit($capacitance_b_unit)
    {
        if (is_null($capacitance_b_unit)) {
            array_push($this->openAPINullablesSetToNull, 'capacitance_b_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capacitance_b_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capacitance_b_unit'] = $capacitance_b_unit;

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

