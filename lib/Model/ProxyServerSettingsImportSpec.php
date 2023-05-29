<?php
/**
 * ProxyServerSettingsImportSpec
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
 * ProxyServerSettingsImportSpec Class Doc Comment
 *
 * @category Class
 * @description Settings of the server that is used as a backup proxy.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProxyServerSettingsImportSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProxyServerSettingsImportSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'host_name' => 'string',
        'host_tag' => 'string',
        'transport_mode' => '\OpenAPI\Client\Model\EBackupProxyTransportMode',
        'failover_to_network' => 'bool',
        'host_to_proxy_encryption' => 'bool',
        'connected_datastores' => '\OpenAPI\Client\Model\ProxyDatastoreSettingsModel',
        'max_task_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'host_name' => null,
        'host_tag' => null,
        'transport_mode' => null,
        'failover_to_network' => null,
        'host_to_proxy_encryption' => null,
        'connected_datastores' => null,
        'max_task_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'host_name' => false,
		'host_tag' => false,
		'transport_mode' => false,
		'failover_to_network' => false,
		'host_to_proxy_encryption' => false,
		'connected_datastores' => false,
		'max_task_count' => false
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
        'host_name' => 'hostName',
        'host_tag' => 'hostTag',
        'transport_mode' => 'transportMode',
        'failover_to_network' => 'failoverToNetwork',
        'host_to_proxy_encryption' => 'hostToProxyEncryption',
        'connected_datastores' => 'connectedDatastores',
        'max_task_count' => 'maxTaskCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host_name' => 'setHostName',
        'host_tag' => 'setHostTag',
        'transport_mode' => 'setTransportMode',
        'failover_to_network' => 'setFailoverToNetwork',
        'host_to_proxy_encryption' => 'setHostToProxyEncryption',
        'connected_datastores' => 'setConnectedDatastores',
        'max_task_count' => 'setMaxTaskCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host_name' => 'getHostName',
        'host_tag' => 'getHostTag',
        'transport_mode' => 'getTransportMode',
        'failover_to_network' => 'getFailoverToNetwork',
        'host_to_proxy_encryption' => 'getHostToProxyEncryption',
        'connected_datastores' => 'getConnectedDatastores',
        'max_task_count' => 'getMaxTaskCount'
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
        $this->setIfExists('host_name', $data ?? [], null);
        $this->setIfExists('host_tag', $data ?? [], null);
        $this->setIfExists('transport_mode', $data ?? [], null);
        $this->setIfExists('failover_to_network', $data ?? [], null);
        $this->setIfExists('host_to_proxy_encryption', $data ?? [], null);
        $this->setIfExists('connected_datastores', $data ?? [], null);
        $this->setIfExists('max_task_count', $data ?? [], null);
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

        if ($this->container['host_name'] === null) {
            $invalidProperties[] = "'host_name' can't be null";
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
     * Gets host_name
     *
     * @return string
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     *
     * @param string $host_name Name of the server.
     *
     * @return self
     */
    public function setHostName($host_name)
    {
        if (is_null($host_name)) {
            throw new \InvalidArgumentException('non-nullable host_name cannot be null');
        }
        $this->container['host_name'] = $host_name;

        return $this;
    }

    /**
     * Gets host_tag
     *
     * @return string|null
     */
    public function getHostTag()
    {
        return $this->container['host_tag'];
    }

    /**
     * Sets host_tag
     *
     * @param string|null $host_tag Tag assigned to the server.
     *
     * @return self
     */
    public function setHostTag($host_tag)
    {
        if (is_null($host_tag)) {
            throw new \InvalidArgumentException('non-nullable host_tag cannot be null');
        }
        $this->container['host_tag'] = $host_tag;

        return $this;
    }

    /**
     * Gets transport_mode
     *
     * @return \OpenAPI\Client\Model\EBackupProxyTransportMode|null
     */
    public function getTransportMode()
    {
        return $this->container['transport_mode'];
    }

    /**
     * Sets transport_mode
     *
     * @param \OpenAPI\Client\Model\EBackupProxyTransportMode|null $transport_mode transport_mode
     *
     * @return self
     */
    public function setTransportMode($transport_mode)
    {
        if (is_null($transport_mode)) {
            throw new \InvalidArgumentException('non-nullable transport_mode cannot be null');
        }
        $this->container['transport_mode'] = $transport_mode;

        return $this;
    }

    /**
     * Gets failover_to_network
     *
     * @return bool|null
     */
    public function getFailoverToNetwork()
    {
        return $this->container['failover_to_network'];
    }

    /**
     * Sets failover_to_network
     *
     * @param bool|null $failover_to_network failover_to_network
     *
     * @return self
     */
    public function setFailoverToNetwork($failover_to_network)
    {
        if (is_null($failover_to_network)) {
            throw new \InvalidArgumentException('non-nullable failover_to_network cannot be null');
        }
        $this->container['failover_to_network'] = $failover_to_network;

        return $this;
    }

    /**
     * Gets host_to_proxy_encryption
     *
     * @return bool|null
     */
    public function getHostToProxyEncryption()
    {
        return $this->container['host_to_proxy_encryption'];
    }

    /**
     * Sets host_to_proxy_encryption
     *
     * @param bool|null $host_to_proxy_encryption [For the Network mode] If *true*, VM data is transferred over an encrypted TLS connection.
     *
     * @return self
     */
    public function setHostToProxyEncryption($host_to_proxy_encryption)
    {
        if (is_null($host_to_proxy_encryption)) {
            throw new \InvalidArgumentException('non-nullable host_to_proxy_encryption cannot be null');
        }
        $this->container['host_to_proxy_encryption'] = $host_to_proxy_encryption;

        return $this;
    }

    /**
     * Gets connected_datastores
     *
     * @return \OpenAPI\Client\Model\ProxyDatastoreSettingsModel|null
     */
    public function getConnectedDatastores()
    {
        return $this->container['connected_datastores'];
    }

    /**
     * Sets connected_datastores
     *
     * @param \OpenAPI\Client\Model\ProxyDatastoreSettingsModel|null $connected_datastores connected_datastores
     *
     * @return self
     */
    public function setConnectedDatastores($connected_datastores)
    {
        if (is_null($connected_datastores)) {
            throw new \InvalidArgumentException('non-nullable connected_datastores cannot be null');
        }
        $this->container['connected_datastores'] = $connected_datastores;

        return $this;
    }

    /**
     * Gets max_task_count
     *
     * @return int|null
     */
    public function getMaxTaskCount()
    {
        return $this->container['max_task_count'];
    }

    /**
     * Sets max_task_count
     *
     * @param int|null $max_task_count Maximum number of concurrent tasks.
     *
     * @return self
     */
    public function setMaxTaskCount($max_task_count)
    {
        if (is_null($max_task_count)) {
            throw new \InvalidArgumentException('non-nullable max_task_count cannot be null');
        }
        $this->container['max_task_count'] = $max_task_count;

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

