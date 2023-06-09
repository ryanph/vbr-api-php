<?php
/**
 * JobImportSpec
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
 * JobImportSpec Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobImportSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobImportSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'is_high_priority' => 'bool',
        'type' => '\OpenAPI\Client\Model\EJobType',
        'virtual_machines' => '\OpenAPI\Client\Model\BackupJobVirtualMachinesSpec',
        'storage' => '\OpenAPI\Client\Model\BackupJobStorageImportModel',
        'guest_processing' => '\OpenAPI\Client\Model\BackupJobGuestProcessingImportModel',
        'schedule' => '\OpenAPI\Client\Model\BackupScheduleModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'is_high_priority' => null,
        'type' => null,
        'virtual_machines' => null,
        'storage' => null,
        'guest_processing' => null,
        'schedule' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'description' => false,
		'is_high_priority' => false,
		'type' => false,
		'virtual_machines' => false,
		'storage' => false,
		'guest_processing' => false,
		'schedule' => false
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
        'name' => 'name',
        'description' => 'description',
        'is_high_priority' => 'isHighPriority',
        'type' => 'type',
        'virtual_machines' => 'virtualMachines',
        'storage' => 'storage',
        'guest_processing' => 'guestProcessing',
        'schedule' => 'schedule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'is_high_priority' => 'setIsHighPriority',
        'type' => 'setType',
        'virtual_machines' => 'setVirtualMachines',
        'storage' => 'setStorage',
        'guest_processing' => 'setGuestProcessing',
        'schedule' => 'setSchedule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'is_high_priority' => 'getIsHighPriority',
        'type' => 'getType',
        'virtual_machines' => 'getVirtualMachines',
        'storage' => 'getStorage',
        'guest_processing' => 'getGuestProcessing',
        'schedule' => 'getSchedule'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('is_high_priority', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('virtual_machines', $data ?? [], null);
        $this->setIfExists('storage', $data ?? [], null);
        $this->setIfExists('guest_processing', $data ?? [], null);
        $this->setIfExists('schedule', $data ?? [], null);
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['is_high_priority'] === null) {
            $invalidProperties[] = "'is_high_priority' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['virtual_machines'] === null) {
            $invalidProperties[] = "'virtual_machines' can't be null";
        }
        if ($this->container['storage'] === null) {
            $invalidProperties[] = "'storage' can't be null";
        }
        if ($this->container['guest_processing'] === null) {
            $invalidProperties[] = "'guest_processing' can't be null";
        }
        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
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
     * @param string $name Name of the job.
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the job.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_high_priority
     *
     * @return bool
     */
    public function getIsHighPriority()
    {
        return $this->container['is_high_priority'];
    }

    /**
     * Sets is_high_priority
     *
     * @param bool $is_high_priority If *true*, the job has a high priority in getting backup infrastructure resources.
     *
     * @return self
     */
    public function setIsHighPriority($is_high_priority)
    {
        if (is_null($is_high_priority)) {
            throw new \InvalidArgumentException('non-nullable is_high_priority cannot be null');
        }
        $this->container['is_high_priority'] = $is_high_priority;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\EJobType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\EJobType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets virtual_machines
     *
     * @return \OpenAPI\Client\Model\BackupJobVirtualMachinesSpec
     */
    public function getVirtualMachines()
    {
        return $this->container['virtual_machines'];
    }

    /**
     * Sets virtual_machines
     *
     * @param \OpenAPI\Client\Model\BackupJobVirtualMachinesSpec $virtual_machines virtual_machines
     *
     * @return self
     */
    public function setVirtualMachines($virtual_machines)
    {
        if (is_null($virtual_machines)) {
            throw new \InvalidArgumentException('non-nullable virtual_machines cannot be null');
        }
        $this->container['virtual_machines'] = $virtual_machines;

        return $this;
    }

    /**
     * Gets storage
     *
     * @return \OpenAPI\Client\Model\BackupJobStorageImportModel
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param \OpenAPI\Client\Model\BackupJobStorageImportModel $storage storage
     *
     * @return self
     */
    public function setStorage($storage)
    {
        if (is_null($storage)) {
            throw new \InvalidArgumentException('non-nullable storage cannot be null');
        }
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets guest_processing
     *
     * @return \OpenAPI\Client\Model\BackupJobGuestProcessingImportModel
     */
    public function getGuestProcessing()
    {
        return $this->container['guest_processing'];
    }

    /**
     * Sets guest_processing
     *
     * @param \OpenAPI\Client\Model\BackupJobGuestProcessingImportModel $guest_processing guest_processing
     *
     * @return self
     */
    public function setGuestProcessing($guest_processing)
    {
        if (is_null($guest_processing)) {
            throw new \InvalidArgumentException('non-nullable guest_processing cannot be null');
        }
        $this->container['guest_processing'] = $guest_processing;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \OpenAPI\Client\Model\BackupScheduleModel
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \OpenAPI\Client\Model\BackupScheduleModel $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        if (is_null($schedule)) {
            throw new \InvalidArgumentException('non-nullable schedule cannot be null');
        }
        $this->container['schedule'] = $schedule;

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


