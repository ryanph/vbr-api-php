<?php
/**
 * VmwareFcdInstantRecoverySpec
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
 * VmwareFcdInstantRecoverySpec Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmwareFcdInstantRecoverySpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VmwareFcdInstantRecoverySpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object_restore_point_id' => 'string',
        'destination_cluster' => '\OpenAPI\Client\Model\VmwareObjectModel',
        'disks_mapping' => '\OpenAPI\Client\Model\VmwareFcdInstantRecoveryDiskSpec[]',
        'write_cache' => '\OpenAPI\Client\Model\VmwareFcdWriteCacheSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object_restore_point_id' => 'uuid',
        'destination_cluster' => null,
        'disks_mapping' => null,
        'write_cache' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object_restore_point_id' => false,
		'destination_cluster' => false,
		'disks_mapping' => false,
		'write_cache' => false
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
        'object_restore_point_id' => 'objectRestorePointId',
        'destination_cluster' => 'destinationCluster',
        'disks_mapping' => 'disksMapping',
        'write_cache' => 'writeCache'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_restore_point_id' => 'setObjectRestorePointId',
        'destination_cluster' => 'setDestinationCluster',
        'disks_mapping' => 'setDisksMapping',
        'write_cache' => 'setWriteCache'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_restore_point_id' => 'getObjectRestorePointId',
        'destination_cluster' => 'getDestinationCluster',
        'disks_mapping' => 'getDisksMapping',
        'write_cache' => 'getWriteCache'
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
        $this->setIfExists('object_restore_point_id', $data ?? [], null);
        $this->setIfExists('destination_cluster', $data ?? [], null);
        $this->setIfExists('disks_mapping', $data ?? [], null);
        $this->setIfExists('write_cache', $data ?? [], null);
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

        if ($this->container['object_restore_point_id'] === null) {
            $invalidProperties[] = "'object_restore_point_id' can't be null";
        }
        if ($this->container['destination_cluster'] === null) {
            $invalidProperties[] = "'destination_cluster' can't be null";
        }
        if ($this->container['disks_mapping'] === null) {
            $invalidProperties[] = "'disks_mapping' can't be null";
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
     * Gets object_restore_point_id
     *
     * @return string
     */
    public function getObjectRestorePointId()
    {
        return $this->container['object_restore_point_id'];
    }

    /**
     * Sets object_restore_point_id
     *
     * @param string $object_restore_point_id ID of the restore point.
     *
     * @return self
     */
    public function setObjectRestorePointId($object_restore_point_id)
    {
        if (is_null($object_restore_point_id)) {
            throw new \InvalidArgumentException('non-nullable object_restore_point_id cannot be null');
        }
        $this->container['object_restore_point_id'] = $object_restore_point_id;

        return $this;
    }

    /**
     * Gets destination_cluster
     *
     * @return \OpenAPI\Client\Model\VmwareObjectModel
     */
    public function getDestinationCluster()
    {
        return $this->container['destination_cluster'];
    }

    /**
     * Sets destination_cluster
     *
     * @param \OpenAPI\Client\Model\VmwareObjectModel $destination_cluster destination_cluster
     *
     * @return self
     */
    public function setDestinationCluster($destination_cluster)
    {
        if (is_null($destination_cluster)) {
            throw new \InvalidArgumentException('non-nullable destination_cluster cannot be null');
        }
        $this->container['destination_cluster'] = $destination_cluster;

        return $this;
    }

    /**
     * Gets disks_mapping
     *
     * @return \OpenAPI\Client\Model\VmwareFcdInstantRecoveryDiskSpec[]
     */
    public function getDisksMapping()
    {
        return $this->container['disks_mapping'];
    }

    /**
     * Sets disks_mapping
     *
     * @param \OpenAPI\Client\Model\VmwareFcdInstantRecoveryDiskSpec[] $disks_mapping Array of disks that will be restored.
     *
     * @return self
     */
    public function setDisksMapping($disks_mapping)
    {
        if (is_null($disks_mapping)) {
            throw new \InvalidArgumentException('non-nullable disks_mapping cannot be null');
        }
        $this->container['disks_mapping'] = $disks_mapping;

        return $this;
    }

    /**
     * Gets write_cache
     *
     * @return \OpenAPI\Client\Model\VmwareFcdWriteCacheSpec|null
     */
    public function getWriteCache()
    {
        return $this->container['write_cache'];
    }

    /**
     * Sets write_cache
     *
     * @param \OpenAPI\Client\Model\VmwareFcdWriteCacheSpec|null $write_cache write_cache
     *
     * @return self
     */
    public function setWriteCache($write_cache)
    {
        if (is_null($write_cache)) {
            throw new \InvalidArgumentException('non-nullable write_cache cannot be null');
        }
        $this->container['write_cache'] = $write_cache;

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


