<?php
/**
 * TrafficRuleModel
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
 * TrafficRuleModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TrafficRuleModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrafficRuleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'source_ip_start' => 'string',
        'source_ip_end' => 'string',
        'target_ip_start' => 'string',
        'target_ip_end' => 'string',
        'encryption_enabled' => 'bool',
        'throttling_enabled' => 'bool',
        'throttling_unit' => '\OpenAPI\Client\Model\ESpeedUnit',
        'throttling_value' => 'int',
        'throttling_window_enabled' => 'bool',
        'throttling_window_options' => '\OpenAPI\Client\Model\BackupWindowSettingModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'source_ip_start' => null,
        'source_ip_end' => null,
        'target_ip_start' => null,
        'target_ip_end' => null,
        'encryption_enabled' => null,
        'throttling_enabled' => null,
        'throttling_unit' => null,
        'throttling_value' => 'int32',
        'throttling_window_enabled' => null,
        'throttling_window_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'source_ip_start' => false,
		'source_ip_end' => false,
		'target_ip_start' => false,
		'target_ip_end' => false,
		'encryption_enabled' => false,
		'throttling_enabled' => false,
		'throttling_unit' => false,
		'throttling_value' => false,
		'throttling_window_enabled' => false,
		'throttling_window_options' => false
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
        'id' => 'id',
        'name' => 'name',
        'source_ip_start' => 'sourceIPStart',
        'source_ip_end' => 'sourceIPEnd',
        'target_ip_start' => 'targetIPStart',
        'target_ip_end' => 'targetIPEnd',
        'encryption_enabled' => 'encryptionEnabled',
        'throttling_enabled' => 'throttlingEnabled',
        'throttling_unit' => 'throttlingUnit',
        'throttling_value' => 'throttlingValue',
        'throttling_window_enabled' => 'throttlingWindowEnabled',
        'throttling_window_options' => 'throttlingWindowOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'source_ip_start' => 'setSourceIpStart',
        'source_ip_end' => 'setSourceIpEnd',
        'target_ip_start' => 'setTargetIpStart',
        'target_ip_end' => 'setTargetIpEnd',
        'encryption_enabled' => 'setEncryptionEnabled',
        'throttling_enabled' => 'setThrottlingEnabled',
        'throttling_unit' => 'setThrottlingUnit',
        'throttling_value' => 'setThrottlingValue',
        'throttling_window_enabled' => 'setThrottlingWindowEnabled',
        'throttling_window_options' => 'setThrottlingWindowOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'source_ip_start' => 'getSourceIpStart',
        'source_ip_end' => 'getSourceIpEnd',
        'target_ip_start' => 'getTargetIpStart',
        'target_ip_end' => 'getTargetIpEnd',
        'encryption_enabled' => 'getEncryptionEnabled',
        'throttling_enabled' => 'getThrottlingEnabled',
        'throttling_unit' => 'getThrottlingUnit',
        'throttling_value' => 'getThrottlingValue',
        'throttling_window_enabled' => 'getThrottlingWindowEnabled',
        'throttling_window_options' => 'getThrottlingWindowOptions'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('source_ip_start', $data ?? [], null);
        $this->setIfExists('source_ip_end', $data ?? [], null);
        $this->setIfExists('target_ip_start', $data ?? [], null);
        $this->setIfExists('target_ip_end', $data ?? [], null);
        $this->setIfExists('encryption_enabled', $data ?? [], null);
        $this->setIfExists('throttling_enabled', $data ?? [], null);
        $this->setIfExists('throttling_unit', $data ?? [], null);
        $this->setIfExists('throttling_value', $data ?? [], null);
        $this->setIfExists('throttling_window_enabled', $data ?? [], null);
        $this->setIfExists('throttling_window_options', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['source_ip_start'] === null) {
            $invalidProperties[] = "'source_ip_start' can't be null";
        }
        if ($this->container['source_ip_end'] === null) {
            $invalidProperties[] = "'source_ip_end' can't be null";
        }
        if ($this->container['target_ip_start'] === null) {
            $invalidProperties[] = "'target_ip_start' can't be null";
        }
        if ($this->container['target_ip_end'] === null) {
            $invalidProperties[] = "'target_ip_end' can't be null";
        }
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of the rule.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the rule.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets source_ip_start
     *
     * @return string
     */
    public function getSourceIpStart()
    {
        return $this->container['source_ip_start'];
    }

    /**
     * Sets source_ip_start
     *
     * @param string $source_ip_start Start IP address of the range for the backup infrastructure components on the source side.
     *
     * @return self
     */
    public function setSourceIpStart($source_ip_start)
    {
        if (is_null($source_ip_start)) {
            throw new \InvalidArgumentException('non-nullable source_ip_start cannot be null');
        }
        $this->container['source_ip_start'] = $source_ip_start;

        return $this;
    }

    /**
     * Gets source_ip_end
     *
     * @return string
     */
    public function getSourceIpEnd()
    {
        return $this->container['source_ip_end'];
    }

    /**
     * Sets source_ip_end
     *
     * @param string $source_ip_end End IP address of the range for the backup infrastructure components on the source side.
     *
     * @return self
     */
    public function setSourceIpEnd($source_ip_end)
    {
        if (is_null($source_ip_end)) {
            throw new \InvalidArgumentException('non-nullable source_ip_end cannot be null');
        }
        $this->container['source_ip_end'] = $source_ip_end;

        return $this;
    }

    /**
     * Gets target_ip_start
     *
     * @return string
     */
    public function getTargetIpStart()
    {
        return $this->container['target_ip_start'];
    }

    /**
     * Sets target_ip_start
     *
     * @param string $target_ip_start Start IP address of the range for the backup infrastructure components on the target side.
     *
     * @return self
     */
    public function setTargetIpStart($target_ip_start)
    {
        if (is_null($target_ip_start)) {
            throw new \InvalidArgumentException('non-nullable target_ip_start cannot be null');
        }
        $this->container['target_ip_start'] = $target_ip_start;

        return $this;
    }

    /**
     * Gets target_ip_end
     *
     * @return string
     */
    public function getTargetIpEnd()
    {
        return $this->container['target_ip_end'];
    }

    /**
     * Sets target_ip_end
     *
     * @param string $target_ip_end End IP address of the range for the backup infrastructure components on the target side.
     *
     * @return self
     */
    public function setTargetIpEnd($target_ip_end)
    {
        if (is_null($target_ip_end)) {
            throw new \InvalidArgumentException('non-nullable target_ip_end cannot be null');
        }
        $this->container['target_ip_end'] = $target_ip_end;

        return $this;
    }

    /**
     * Gets encryption_enabled
     *
     * @return bool|null
     */
    public function getEncryptionEnabled()
    {
        return $this->container['encryption_enabled'];
    }

    /**
     * Sets encryption_enabled
     *
     * @param bool|null $encryption_enabled If *true*, traffic encryption is enabled.
     *
     * @return self
     */
    public function setEncryptionEnabled($encryption_enabled)
    {
        if (is_null($encryption_enabled)) {
            throw new \InvalidArgumentException('non-nullable encryption_enabled cannot be null');
        }
        $this->container['encryption_enabled'] = $encryption_enabled;

        return $this;
    }

    /**
     * Gets throttling_enabled
     *
     * @return bool|null
     */
    public function getThrottlingEnabled()
    {
        return $this->container['throttling_enabled'];
    }

    /**
     * Sets throttling_enabled
     *
     * @param bool|null $throttling_enabled If *true*, traffic throttling is enabled.
     *
     * @return self
     */
    public function setThrottlingEnabled($throttling_enabled)
    {
        if (is_null($throttling_enabled)) {
            throw new \InvalidArgumentException('non-nullable throttling_enabled cannot be null');
        }
        $this->container['throttling_enabled'] = $throttling_enabled;

        return $this;
    }

    /**
     * Gets throttling_unit
     *
     * @return \OpenAPI\Client\Model\ESpeedUnit|null
     */
    public function getThrottlingUnit()
    {
        return $this->container['throttling_unit'];
    }

    /**
     * Sets throttling_unit
     *
     * @param \OpenAPI\Client\Model\ESpeedUnit|null $throttling_unit throttling_unit
     *
     * @return self
     */
    public function setThrottlingUnit($throttling_unit)
    {
        if (is_null($throttling_unit)) {
            throw new \InvalidArgumentException('non-nullable throttling_unit cannot be null');
        }
        $this->container['throttling_unit'] = $throttling_unit;

        return $this;
    }

    /**
     * Gets throttling_value
     *
     * @return int|null
     */
    public function getThrottlingValue()
    {
        return $this->container['throttling_value'];
    }

    /**
     * Sets throttling_value
     *
     * @param int|null $throttling_value Maximum speed that must be used to transfer data from source to target.
     *
     * @return self
     */
    public function setThrottlingValue($throttling_value)
    {
        if (is_null($throttling_value)) {
            throw new \InvalidArgumentException('non-nullable throttling_value cannot be null');
        }
        $this->container['throttling_value'] = $throttling_value;

        return $this;
    }

    /**
     * Gets throttling_window_enabled
     *
     * @return bool|null
     */
    public function getThrottlingWindowEnabled()
    {
        return $this->container['throttling_window_enabled'];
    }

    /**
     * Sets throttling_window_enabled
     *
     * @param bool|null $throttling_window_enabled If *true*, throttling window during which the speed must be limited is enabled.
     *
     * @return self
     */
    public function setThrottlingWindowEnabled($throttling_window_enabled)
    {
        if (is_null($throttling_window_enabled)) {
            throw new \InvalidArgumentException('non-nullable throttling_window_enabled cannot be null');
        }
        $this->container['throttling_window_enabled'] = $throttling_window_enabled;

        return $this;
    }

    /**
     * Gets throttling_window_options
     *
     * @return \OpenAPI\Client\Model\BackupWindowSettingModel|null
     */
    public function getThrottlingWindowOptions()
    {
        return $this->container['throttling_window_options'];
    }

    /**
     * Sets throttling_window_options
     *
     * @param \OpenAPI\Client\Model\BackupWindowSettingModel|null $throttling_window_options throttling_window_options
     *
     * @return self
     */
    public function setThrottlingWindowOptions($throttling_window_options)
    {
        if (is_null($throttling_window_options)) {
            throw new \InvalidArgumentException('non-nullable throttling_window_options cannot be null');
        }
        $this->container['throttling_window_options'] = $throttling_window_options;

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


