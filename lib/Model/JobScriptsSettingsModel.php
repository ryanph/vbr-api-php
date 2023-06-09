<?php
/**
 * JobScriptsSettingsModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Veeam Backup & Replication REST API
 *
 * This document lists paths (endpoints) of the Veeam Backup & Replication REST API and operations that you can perform by sending HTTP requests to the paths.<br> Requests can contain parameters in their path, query and header. POST and PUT requests can include a request body with resource payload. In response, you receive a conventional HTTP response code, HTTP response header and an optional response body schema that contains a result model.<br> Parameters, request bodies, and response bodies are defined inline or refer to schemas defined globally. Some schemas are polymorphic.
 *
 * The version of the OpenAPI document: 1.0-rev1
 * Contact: support@veeam.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * JobScriptsSettingsModel Class Doc Comment
 *
 * @category Class
 * @description Script settings.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobScriptsSettingsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobScriptsSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pre_command' => '\OpenAPI\Client\Model\ScriptCommand',
        'post_command' => '\OpenAPI\Client\Model\ScriptCommand',
        'periodicity_type' => '\OpenAPI\Client\Model\EScriptPeriodicityType',
        'run_script_every' => 'int',
        'day_of_week' => '\OpenAPI\Client\Model\EDayOfWeek[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pre_command' => null,
        'post_command' => null,
        'periodicity_type' => null,
        'run_script_every' => null,
        'day_of_week' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pre_command' => false,
		'post_command' => false,
		'periodicity_type' => false,
		'run_script_every' => false,
		'day_of_week' => false
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
        'pre_command' => 'preCommand',
        'post_command' => 'postCommand',
        'periodicity_type' => 'periodicityType',
        'run_script_every' => 'runScriptEvery',
        'day_of_week' => 'dayOfWeek'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pre_command' => 'setPreCommand',
        'post_command' => 'setPostCommand',
        'periodicity_type' => 'setPeriodicityType',
        'run_script_every' => 'setRunScriptEvery',
        'day_of_week' => 'setDayOfWeek'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pre_command' => 'getPreCommand',
        'post_command' => 'getPostCommand',
        'periodicity_type' => 'getPeriodicityType',
        'run_script_every' => 'getRunScriptEvery',
        'day_of_week' => 'getDayOfWeek'
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
        $this->setIfExists('pre_command', $data ?? [], null);
        $this->setIfExists('post_command', $data ?? [], null);
        $this->setIfExists('periodicity_type', $data ?? [], null);
        $this->setIfExists('run_script_every', $data ?? [], null);
        $this->setIfExists('day_of_week', $data ?? [], null);
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
     * Gets pre_command
     *
     * @return \OpenAPI\Client\Model\ScriptCommand|null
     */
    public function getPreCommand()
    {
        return $this->container['pre_command'];
    }

    /**
     * Sets pre_command
     *
     * @param \OpenAPI\Client\Model\ScriptCommand|null $pre_command pre_command
     *
     * @return self
     */
    public function setPreCommand($pre_command)
    {
        if (is_null($pre_command)) {
            throw new \InvalidArgumentException('non-nullable pre_command cannot be null');
        }
        $this->container['pre_command'] = $pre_command;

        return $this;
    }

    /**
     * Gets post_command
     *
     * @return \OpenAPI\Client\Model\ScriptCommand|null
     */
    public function getPostCommand()
    {
        return $this->container['post_command'];
    }

    /**
     * Sets post_command
     *
     * @param \OpenAPI\Client\Model\ScriptCommand|null $post_command post_command
     *
     * @return self
     */
    public function setPostCommand($post_command)
    {
        if (is_null($post_command)) {
            throw new \InvalidArgumentException('non-nullable post_command cannot be null');
        }
        $this->container['post_command'] = $post_command;

        return $this;
    }

    /**
     * Gets periodicity_type
     *
     * @return \OpenAPI\Client\Model\EScriptPeriodicityType|null
     */
    public function getPeriodicityType()
    {
        return $this->container['periodicity_type'];
    }

    /**
     * Sets periodicity_type
     *
     * @param \OpenAPI\Client\Model\EScriptPeriodicityType|null $periodicity_type periodicity_type
     *
     * @return self
     */
    public function setPeriodicityType($periodicity_type)
    {
        if (is_null($periodicity_type)) {
            throw new \InvalidArgumentException('non-nullable periodicity_type cannot be null');
        }
        $this->container['periodicity_type'] = $periodicity_type;

        return $this;
    }

    /**
     * Gets run_script_every
     *
     * @return int|null
     */
    public function getRunScriptEvery()
    {
        return $this->container['run_script_every'];
    }

    /**
     * Sets run_script_every
     *
     * @param int|null $run_script_every Number of the backup job session after which the scripts must be executed.
     *
     * @return self
     */
    public function setRunScriptEvery($run_script_every)
    {
        if (is_null($run_script_every)) {
            throw new \InvalidArgumentException('non-nullable run_script_every cannot be null');
        }
        $this->container['run_script_every'] = $run_script_every;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return \OpenAPI\Client\Model\EDayOfWeek[]|null
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param \OpenAPI\Client\Model\EDayOfWeek[]|null $day_of_week Days of the week when the scripts must be executed.
     *
     * @return self
     */
    public function setDayOfWeek($day_of_week)
    {
        if (is_null($day_of_week)) {
            throw new \InvalidArgumentException('non-nullable day_of_week cannot be null');
        }


        $this->container['day_of_week'] = $day_of_week;

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


