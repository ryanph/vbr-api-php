<?php
/**
 * PrimaryStorageIntegrationSettingsModel
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
 * PrimaryStorageIntegrationSettingsModel Class Doc Comment
 *
 * @category Class
 * @description Primary storage integration settings for the backup job.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrimaryStorageIntegrationSettingsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrimaryStorageIntegrationSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_enabled' => 'bool',
        'limit_processed_vm' => 'bool',
        'limit_processed_vm_count' => 'int',
        'failover_to_standard_backup' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_enabled' => null,
        'limit_processed_vm' => null,
        'limit_processed_vm_count' => null,
        'failover_to_standard_backup' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_enabled' => false,
		'limit_processed_vm' => false,
		'limit_processed_vm_count' => false,
		'failover_to_standard_backup' => false
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
        'is_enabled' => 'isEnabled',
        'limit_processed_vm' => 'limitProcessedVm',
        'limit_processed_vm_count' => 'limitProcessedVmCount',
        'failover_to_standard_backup' => 'failoverToStandardBackup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_enabled' => 'setIsEnabled',
        'limit_processed_vm' => 'setLimitProcessedVm',
        'limit_processed_vm_count' => 'setLimitProcessedVmCount',
        'failover_to_standard_backup' => 'setFailoverToStandardBackup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_enabled' => 'getIsEnabled',
        'limit_processed_vm' => 'getLimitProcessedVm',
        'limit_processed_vm_count' => 'getLimitProcessedVmCount',
        'failover_to_standard_backup' => 'getFailoverToStandardBackup'
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
        $this->setIfExists('is_enabled', $data ?? [], null);
        $this->setIfExists('limit_processed_vm', $data ?? [], null);
        $this->setIfExists('limit_processed_vm_count', $data ?? [], null);
        $this->setIfExists('failover_to_standard_backup', $data ?? [], null);
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

        if ($this->container['is_enabled'] === null) {
            $invalidProperties[] = "'is_enabled' can't be null";
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
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled If *true*, the primary storage integration is enabled. In this case, storage snapshots (instead of VM snapshots) are used for VM data processing.
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {
        if (is_null($is_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_enabled cannot be null');
        }
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets limit_processed_vm
     *
     * @return bool|null
     */
    public function getLimitProcessedVm()
    {
        return $this->container['limit_processed_vm'];
    }

    /**
     * Sets limit_processed_vm
     *
     * @param bool|null $limit_processed_vm If *true*, the number of processed VMs per storage snapshot is limited.
     *
     * @return self
     */
    public function setLimitProcessedVm($limit_processed_vm)
    {
        if (is_null($limit_processed_vm)) {
            throw new \InvalidArgumentException('non-nullable limit_processed_vm cannot be null');
        }
        $this->container['limit_processed_vm'] = $limit_processed_vm;

        return $this;
    }

    /**
     * Gets limit_processed_vm_count
     *
     * @return int|null
     */
    public function getLimitProcessedVmCount()
    {
        return $this->container['limit_processed_vm_count'];
    }

    /**
     * Sets limit_processed_vm_count
     *
     * @param int|null $limit_processed_vm_count Number of processed VMs per storage snapshot.
     *
     * @return self
     */
    public function setLimitProcessedVmCount($limit_processed_vm_count)
    {
        if (is_null($limit_processed_vm_count)) {
            throw new \InvalidArgumentException('non-nullable limit_processed_vm_count cannot be null');
        }
        $this->container['limit_processed_vm_count'] = $limit_processed_vm_count;

        return $this;
    }

    /**
     * Gets failover_to_standard_backup
     *
     * @return bool|null
     */
    public function getFailoverToStandardBackup()
    {
        return $this->container['failover_to_standard_backup'];
    }

    /**
     * Sets failover_to_standard_backup
     *
     * @param bool|null $failover_to_standard_backup If *true*, failover to the regular VM processing mode is enabled. In this case, if backup from storage snapshot fails, VM snapshots are used.
     *
     * @return self
     */
    public function setFailoverToStandardBackup($failover_to_standard_backup)
    {
        if (is_null($failover_to_standard_backup)) {
            throw new \InvalidArgumentException('non-nullable failover_to_standard_backup cannot be null');
        }
        $this->container['failover_to_standard_backup'] = $failover_to_standard_backup;

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


