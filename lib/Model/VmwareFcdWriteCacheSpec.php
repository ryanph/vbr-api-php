<?php
/**
 * VmwareFcdWriteCacheSpec
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
 * VmwareFcdWriteCacheSpec Class Doc Comment
 *
 * @category Class
 * @description Write cache for recovered disks.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmwareFcdWriteCacheSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VmwareFcdWriteCacheSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redirect_is_enabled' => 'bool',
        'cache_datastore' => '\OpenAPI\Client\Model\VmwareObjectModel',
        'storage_policy' => '\OpenAPI\Client\Model\VmwareObjectModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redirect_is_enabled' => null,
        'cache_datastore' => null,
        'storage_policy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redirect_is_enabled' => false,
		'cache_datastore' => false,
		'storage_policy' => false
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
        'redirect_is_enabled' => 'redirectIsEnabled',
        'cache_datastore' => 'cacheDatastore',
        'storage_policy' => 'storagePolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redirect_is_enabled' => 'setRedirectIsEnabled',
        'cache_datastore' => 'setCacheDatastore',
        'storage_policy' => 'setStoragePolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redirect_is_enabled' => 'getRedirectIsEnabled',
        'cache_datastore' => 'getCacheDatastore',
        'storage_policy' => 'getStoragePolicy'
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
        $this->setIfExists('redirect_is_enabled', $data ?? [], null);
        $this->setIfExists('cache_datastore', $data ?? [], null);
        $this->setIfExists('storage_policy', $data ?? [], null);
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

        if ($this->container['redirect_is_enabled'] === null) {
            $invalidProperties[] = "'redirect_is_enabled' can't be null";
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
     * Gets redirect_is_enabled
     *
     * @return bool
     */
    public function getRedirectIsEnabled()
    {
        return $this->container['redirect_is_enabled'];
    }

    /**
     * Sets redirect_is_enabled
     *
     * @param bool $redirect_is_enabled If *true*, cache redirection is enabled. In this case, all changes made to the recovered disks while the Instant FCD Recovery is active are redirected to the specified `cacheDatastore` associated with the `storagePolicy`.
     *
     * @return self
     */
    public function setRedirectIsEnabled($redirect_is_enabled)
    {
        if (is_null($redirect_is_enabled)) {
            throw new \InvalidArgumentException('non-nullable redirect_is_enabled cannot be null');
        }
        $this->container['redirect_is_enabled'] = $redirect_is_enabled;

        return $this;
    }

    /**
     * Gets cache_datastore
     *
     * @return \OpenAPI\Client\Model\VmwareObjectModel|null
     */
    public function getCacheDatastore()
    {
        return $this->container['cache_datastore'];
    }

    /**
     * Sets cache_datastore
     *
     * @param \OpenAPI\Client\Model\VmwareObjectModel|null $cache_datastore cache_datastore
     *
     * @return self
     */
    public function setCacheDatastore($cache_datastore)
    {
        if (is_null($cache_datastore)) {
            throw new \InvalidArgumentException('non-nullable cache_datastore cannot be null');
        }
        $this->container['cache_datastore'] = $cache_datastore;

        return $this;
    }

    /**
     * Gets storage_policy
     *
     * @return \OpenAPI\Client\Model\VmwareObjectModel|null
     */
    public function getStoragePolicy()
    {
        return $this->container['storage_policy'];
    }

    /**
     * Sets storage_policy
     *
     * @param \OpenAPI\Client\Model\VmwareObjectModel|null $storage_policy storage_policy
     *
     * @return self
     */
    public function setStoragePolicy($storage_policy)
    {
        if (is_null($storage_policy)) {
            throw new \InvalidArgumentException('non-nullable storage_policy cannot be null');
        }
        $this->container['storage_policy'] = $storage_policy;

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


