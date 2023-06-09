<?php
/**
 * RepositoryAdvancedSettingsModel
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
 * RepositoryAdvancedSettingsModel Class Doc Comment
 *
 * @category Class
 * @description Advanced settings for the backup repository.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RepositoryAdvancedSettingsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RepositoryAdvancedSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'align_data_blocks' => 'bool',
        'decompress_before_storing' => 'bool',
        'rotated_drives' => 'bool',
        'per_vm_backup' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'align_data_blocks' => null,
        'decompress_before_storing' => null,
        'rotated_drives' => null,
        'per_vm_backup' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'align_data_blocks' => false,
		'decompress_before_storing' => false,
		'rotated_drives' => false,
		'per_vm_backup' => false
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
        'align_data_blocks' => 'alignDataBlocks',
        'decompress_before_storing' => 'decompressBeforeStoring',
        'rotated_drives' => 'rotatedDrives',
        'per_vm_backup' => 'perVmBackup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'align_data_blocks' => 'setAlignDataBlocks',
        'decompress_before_storing' => 'setDecompressBeforeStoring',
        'rotated_drives' => 'setRotatedDrives',
        'per_vm_backup' => 'setPerVmBackup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'align_data_blocks' => 'getAlignDataBlocks',
        'decompress_before_storing' => 'getDecompressBeforeStoring',
        'rotated_drives' => 'getRotatedDrives',
        'per_vm_backup' => 'getPerVmBackup'
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
        $this->setIfExists('align_data_blocks', $data ?? [], null);
        $this->setIfExists('decompress_before_storing', $data ?? [], null);
        $this->setIfExists('rotated_drives', $data ?? [], null);
        $this->setIfExists('per_vm_backup', $data ?? [], null);
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
     * Gets align_data_blocks
     *
     * @return bool|null
     */
    public function getAlignDataBlocks()
    {
        return $this->container['align_data_blocks'];
    }

    /**
     * Sets align_data_blocks
     *
     * @param bool|null $align_data_blocks If *true*, Veeam Backup & Replication aligns VM data saved to a backup file at a 4 KB block boundary.
     *
     * @return self
     */
    public function setAlignDataBlocks($align_data_blocks)
    {
        if (is_null($align_data_blocks)) {
            throw new \InvalidArgumentException('non-nullable align_data_blocks cannot be null');
        }
        $this->container['align_data_blocks'] = $align_data_blocks;

        return $this;
    }

    /**
     * Gets decompress_before_storing
     *
     * @return bool|null
     */
    public function getDecompressBeforeStoring()
    {
        return $this->container['decompress_before_storing'];
    }

    /**
     * Sets decompress_before_storing
     *
     * @param bool|null $decompress_before_storing If *true*, Veeam Backup & Replication decompresses backup data blocks before storing to improve deduplication ratios.
     *
     * @return self
     */
    public function setDecompressBeforeStoring($decompress_before_storing)
    {
        if (is_null($decompress_before_storing)) {
            throw new \InvalidArgumentException('non-nullable decompress_before_storing cannot be null');
        }
        $this->container['decompress_before_storing'] = $decompress_before_storing;

        return $this;
    }

    /**
     * Gets rotated_drives
     *
     * @return bool|null
     */
    public function getRotatedDrives()
    {
        return $this->container['rotated_drives'];
    }

    /**
     * Sets rotated_drives
     *
     * @param bool|null $rotated_drives If *true*, the repository drive is rotated.
     *
     * @return self
     */
    public function setRotatedDrives($rotated_drives)
    {
        if (is_null($rotated_drives)) {
            throw new \InvalidArgumentException('non-nullable rotated_drives cannot be null');
        }
        $this->container['rotated_drives'] = $rotated_drives;

        return $this;
    }

    /**
     * Gets per_vm_backup
     *
     * @return bool|null
     */
    public function getPerVmBackup()
    {
        return $this->container['per_vm_backup'];
    }

    /**
     * Sets per_vm_backup
     *
     * @param bool|null $per_vm_backup If *true*, Veeam Backup & Replication creates a separate backup file for every VM in the job.
     *
     * @return self
     */
    public function setPerVmBackup($per_vm_backup)
    {
        if (is_null($per_vm_backup)) {
            throw new \InvalidArgumentException('non-nullable per_vm_backup cannot be null');
        }
        $this->container['per_vm_backup'] = $per_vm_backup;

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


