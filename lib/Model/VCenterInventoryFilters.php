<?php
/**
 * VCenterInventoryFilters
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
 * VCenterInventoryFilters Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VCenterInventoryFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VCenterInventoryFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'skip' => 'int',
        'limit' => 'int',
        'order_column' => '\OpenAPI\Client\Model\EvCentersInventoryFiltersOrderColumn',
        'order_asc' => 'bool',
        'object_id_filter' => 'string',
        'hierarchy_type_filter' => '\OpenAPI\Client\Model\EHierarchyType',
        'name_filter' => 'string',
        'type_filter' => '\OpenAPI\Client\Model\EVmwareInventoryType',
        'parent_container_name_filter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'skip' => 'int32',
        'limit' => 'int32',
        'order_column' => null,
        'order_asc' => null,
        'object_id_filter' => null,
        'hierarchy_type_filter' => null,
        'name_filter' => null,
        'type_filter' => null,
        'parent_container_name_filter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'skip' => false,
		'limit' => false,
		'order_column' => false,
		'order_asc' => false,
		'object_id_filter' => false,
		'hierarchy_type_filter' => false,
		'name_filter' => false,
		'type_filter' => false,
		'parent_container_name_filter' => false
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
        'skip' => 'skip',
        'limit' => 'limit',
        'order_column' => 'orderColumn',
        'order_asc' => 'orderAsc',
        'object_id_filter' => 'objectIdFilter',
        'hierarchy_type_filter' => 'hierarchyTypeFilter',
        'name_filter' => 'nameFilter',
        'type_filter' => 'typeFilter',
        'parent_container_name_filter' => 'parentContainerNameFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'skip' => 'setSkip',
        'limit' => 'setLimit',
        'order_column' => 'setOrderColumn',
        'order_asc' => 'setOrderAsc',
        'object_id_filter' => 'setObjectIdFilter',
        'hierarchy_type_filter' => 'setHierarchyTypeFilter',
        'name_filter' => 'setNameFilter',
        'type_filter' => 'setTypeFilter',
        'parent_container_name_filter' => 'setParentContainerNameFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'skip' => 'getSkip',
        'limit' => 'getLimit',
        'order_column' => 'getOrderColumn',
        'order_asc' => 'getOrderAsc',
        'object_id_filter' => 'getObjectIdFilter',
        'hierarchy_type_filter' => 'getHierarchyTypeFilter',
        'name_filter' => 'getNameFilter',
        'type_filter' => 'getTypeFilter',
        'parent_container_name_filter' => 'getParentContainerNameFilter'
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
        $this->setIfExists('skip', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('order_column', $data ?? [], null);
        $this->setIfExists('order_asc', $data ?? [], null);
        $this->setIfExists('object_id_filter', $data ?? [], null);
        $this->setIfExists('hierarchy_type_filter', $data ?? [], null);
        $this->setIfExists('name_filter', $data ?? [], null);
        $this->setIfExists('type_filter', $data ?? [], null);
        $this->setIfExists('parent_container_name_filter', $data ?? [], null);
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
     * Gets skip
     *
     * @return int|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int|null $skip Number of objects to skip.
     *
     * @return self
     */
    public function setSkip($skip)
    {
        if (is_null($skip)) {
            throw new \InvalidArgumentException('non-nullable skip cannot be null');
        }
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Maximum number of objects to return.
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets order_column
     *
     * @return \OpenAPI\Client\Model\EvCentersInventoryFiltersOrderColumn|null
     */
    public function getOrderColumn()
    {
        return $this->container['order_column'];
    }

    /**
     * Sets order_column
     *
     * @param \OpenAPI\Client\Model\EvCentersInventoryFiltersOrderColumn|null $order_column order_column
     *
     * @return self
     */
    public function setOrderColumn($order_column)
    {
        if (is_null($order_column)) {
            throw new \InvalidArgumentException('non-nullable order_column cannot be null');
        }
        $this->container['order_column'] = $order_column;

        return $this;
    }

    /**
     * Gets order_asc
     *
     * @return bool|null
     */
    public function getOrderAsc()
    {
        return $this->container['order_asc'];
    }

    /**
     * Sets order_asc
     *
     * @param bool|null $order_asc Sorts objects in the ascending order by the `orderColumn` parameter.
     *
     * @return self
     */
    public function setOrderAsc($order_asc)
    {
        if (is_null($order_asc)) {
            throw new \InvalidArgumentException('non-nullable order_asc cannot be null');
        }
        $this->container['order_asc'] = $order_asc;

        return $this;
    }

    /**
     * Gets object_id_filter
     *
     * @return string|null
     */
    public function getObjectIdFilter()
    {
        return $this->container['object_id_filter'];
    }

    /**
     * Sets object_id_filter
     *
     * @param string|null $object_id_filter Filters objects by object ID.
     *
     * @return self
     */
    public function setObjectIdFilter($object_id_filter)
    {
        if (is_null($object_id_filter)) {
            throw new \InvalidArgumentException('non-nullable object_id_filter cannot be null');
        }
        $this->container['object_id_filter'] = $object_id_filter;

        return $this;
    }

    /**
     * Gets hierarchy_type_filter
     *
     * @return \OpenAPI\Client\Model\EHierarchyType|null
     */
    public function getHierarchyTypeFilter()
    {
        return $this->container['hierarchy_type_filter'];
    }

    /**
     * Sets hierarchy_type_filter
     *
     * @param \OpenAPI\Client\Model\EHierarchyType|null $hierarchy_type_filter hierarchy_type_filter
     *
     * @return self
     */
    public function setHierarchyTypeFilter($hierarchy_type_filter)
    {
        if (is_null($hierarchy_type_filter)) {
            throw new \InvalidArgumentException('non-nullable hierarchy_type_filter cannot be null');
        }
        $this->container['hierarchy_type_filter'] = $hierarchy_type_filter;

        return $this;
    }

    /**
     * Gets name_filter
     *
     * @return string|null
     */
    public function getNameFilter()
    {
        return $this->container['name_filter'];
    }

    /**
     * Sets name_filter
     *
     * @param string|null $name_filter Filters objects by the `nameFilter` pattern. The pattern can match any object parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
     *
     * @return self
     */
    public function setNameFilter($name_filter)
    {
        if (is_null($name_filter)) {
            throw new \InvalidArgumentException('non-nullable name_filter cannot be null');
        }
        $this->container['name_filter'] = $name_filter;

        return $this;
    }

    /**
     * Gets type_filter
     *
     * @return \OpenAPI\Client\Model\EVmwareInventoryType|null
     */
    public function getTypeFilter()
    {
        return $this->container['type_filter'];
    }

    /**
     * Sets type_filter
     *
     * @param \OpenAPI\Client\Model\EVmwareInventoryType|null $type_filter type_filter
     *
     * @return self
     */
    public function setTypeFilter($type_filter)
    {
        if (is_null($type_filter)) {
            throw new \InvalidArgumentException('non-nullable type_filter cannot be null');
        }
        $this->container['type_filter'] = $type_filter;

        return $this;
    }

    /**
     * Gets parent_container_name_filter
     *
     * @return string|null
     */
    public function getParentContainerNameFilter()
    {
        return $this->container['parent_container_name_filter'];
    }

    /**
     * Sets parent_container_name_filter
     *
     * @param string|null $parent_container_name_filter Filters objects by name of the parent container.
     *
     * @return self
     */
    public function setParentContainerNameFilter($parent_container_name_filter)
    {
        if (is_null($parent_container_name_filter)) {
            throw new \InvalidArgumentException('non-nullable parent_container_name_filter cannot be null');
        }
        $this->container['parent_container_name_filter'] = $parent_container_name_filter;

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


