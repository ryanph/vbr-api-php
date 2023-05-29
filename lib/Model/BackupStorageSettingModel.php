<?php
/**
 * BackupStorageSettingModel
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
 * BackupStorageSettingModel Class Doc Comment
 *
 * @category Class
 * @description Storage settings.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BackupStorageSettingModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BackupStorageSettingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_inline_data_dedup' => 'bool',
        'exclude_swap_file_blocks' => 'bool',
        'exclude_deleted_file_blocks' => 'bool',
        'compression_level' => '\OpenAPI\Client\Model\ECompressionLevel',
        'storage_optimization' => '\OpenAPI\Client\Model\EStorageOptimization',
        'encryption' => '\OpenAPI\Client\Model\BackupStorageSettingsEncryptionModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_inline_data_dedup' => null,
        'exclude_swap_file_blocks' => null,
        'exclude_deleted_file_blocks' => null,
        'compression_level' => null,
        'storage_optimization' => null,
        'encryption' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_inline_data_dedup' => false,
		'exclude_swap_file_blocks' => false,
		'exclude_deleted_file_blocks' => false,
		'compression_level' => false,
		'storage_optimization' => false,
		'encryption' => false
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
        'enable_inline_data_dedup' => 'enableInlineDataDedup',
        'exclude_swap_file_blocks' => 'excludeSwapFileBlocks',
        'exclude_deleted_file_blocks' => 'excludeDeletedFileBlocks',
        'compression_level' => 'compressionLevel',
        'storage_optimization' => 'storageOptimization',
        'encryption' => 'encryption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_inline_data_dedup' => 'setEnableInlineDataDedup',
        'exclude_swap_file_blocks' => 'setExcludeSwapFileBlocks',
        'exclude_deleted_file_blocks' => 'setExcludeDeletedFileBlocks',
        'compression_level' => 'setCompressionLevel',
        'storage_optimization' => 'setStorageOptimization',
        'encryption' => 'setEncryption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_inline_data_dedup' => 'getEnableInlineDataDedup',
        'exclude_swap_file_blocks' => 'getExcludeSwapFileBlocks',
        'exclude_deleted_file_blocks' => 'getExcludeDeletedFileBlocks',
        'compression_level' => 'getCompressionLevel',
        'storage_optimization' => 'getStorageOptimization',
        'encryption' => 'getEncryption'
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
        $this->setIfExists('enable_inline_data_dedup', $data ?? [], null);
        $this->setIfExists('exclude_swap_file_blocks', $data ?? [], null);
        $this->setIfExists('exclude_deleted_file_blocks', $data ?? [], null);
        $this->setIfExists('compression_level', $data ?? [], null);
        $this->setIfExists('storage_optimization', $data ?? [], null);
        $this->setIfExists('encryption', $data ?? [], null);
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
     * Gets enable_inline_data_dedup
     *
     * @return bool|null
     */
    public function getEnableInlineDataDedup()
    {
        return $this->container['enable_inline_data_dedup'];
    }

    /**
     * Sets enable_inline_data_dedup
     *
     * @param bool|null $enable_inline_data_dedup If *true*, Veeam Backup & Replication deduplicates VM data before storing it in the backup repository.
     *
     * @return self
     */
    public function setEnableInlineDataDedup($enable_inline_data_dedup)
    {
        if (is_null($enable_inline_data_dedup)) {
            throw new \InvalidArgumentException('non-nullable enable_inline_data_dedup cannot be null');
        }
        $this->container['enable_inline_data_dedup'] = $enable_inline_data_dedup;

        return $this;
    }

    /**
     * Gets exclude_swap_file_blocks
     *
     * @return bool|null
     */
    public function getExcludeSwapFileBlocks()
    {
        return $this->container['exclude_swap_file_blocks'];
    }

    /**
     * Sets exclude_swap_file_blocks
     *
     * @param bool|null $exclude_swap_file_blocks If *true*, Veeam Backup & Replication excludes swap file blocks from processing.
     *
     * @return self
     */
    public function setExcludeSwapFileBlocks($exclude_swap_file_blocks)
    {
        if (is_null($exclude_swap_file_blocks)) {
            throw new \InvalidArgumentException('non-nullable exclude_swap_file_blocks cannot be null');
        }
        $this->container['exclude_swap_file_blocks'] = $exclude_swap_file_blocks;

        return $this;
    }

    /**
     * Gets exclude_deleted_file_blocks
     *
     * @return bool|null
     */
    public function getExcludeDeletedFileBlocks()
    {
        return $this->container['exclude_deleted_file_blocks'];
    }

    /**
     * Sets exclude_deleted_file_blocks
     *
     * @param bool|null $exclude_deleted_file_blocks If *true*, Veeam Backup & Replication does not copy deleted file blocks.
     *
     * @return self
     */
    public function setExcludeDeletedFileBlocks($exclude_deleted_file_blocks)
    {
        if (is_null($exclude_deleted_file_blocks)) {
            throw new \InvalidArgumentException('non-nullable exclude_deleted_file_blocks cannot be null');
        }
        $this->container['exclude_deleted_file_blocks'] = $exclude_deleted_file_blocks;

        return $this;
    }

    /**
     * Gets compression_level
     *
     * @return \OpenAPI\Client\Model\ECompressionLevel|null
     */
    public function getCompressionLevel()
    {
        return $this->container['compression_level'];
    }

    /**
     * Sets compression_level
     *
     * @param \OpenAPI\Client\Model\ECompressionLevel|null $compression_level compression_level
     *
     * @return self
     */
    public function setCompressionLevel($compression_level)
    {
        if (is_null($compression_level)) {
            throw new \InvalidArgumentException('non-nullable compression_level cannot be null');
        }
        $this->container['compression_level'] = $compression_level;

        return $this;
    }

    /**
     * Gets storage_optimization
     *
     * @return \OpenAPI\Client\Model\EStorageOptimization|null
     */
    public function getStorageOptimization()
    {
        return $this->container['storage_optimization'];
    }

    /**
     * Sets storage_optimization
     *
     * @param \OpenAPI\Client\Model\EStorageOptimization|null $storage_optimization storage_optimization
     *
     * @return self
     */
    public function setStorageOptimization($storage_optimization)
    {
        if (is_null($storage_optimization)) {
            throw new \InvalidArgumentException('non-nullable storage_optimization cannot be null');
        }
        $this->container['storage_optimization'] = $storage_optimization;

        return $this;
    }

    /**
     * Gets encryption
     *
     * @return \OpenAPI\Client\Model\BackupStorageSettingsEncryptionModel|null
     */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
     * Sets encryption
     *
     * @param \OpenAPI\Client\Model\BackupStorageSettingsEncryptionModel|null $encryption encryption
     *
     * @return self
     */
    public function setEncryption($encryption)
    {
        if (is_null($encryption)) {
            throw new \InvalidArgumentException('non-nullable encryption cannot be null');
        }
        $this->container['encryption'] = $encryption;

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


