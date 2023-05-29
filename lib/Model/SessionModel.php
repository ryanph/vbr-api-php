<?php
/**
 * SessionModel
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
 * SessionModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SessionModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SessionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'activity_id' => 'string',
        'session_type' => '\OpenAPI\Client\Model\ESessionType',
        'creation_time' => '\DateTime',
        'end_time' => '\DateTime',
        'state' => '\OpenAPI\Client\Model\ESessionState',
        'progress_percent' => 'int',
        'result' => '\OpenAPI\Client\Model\SessionResultModel',
        'resource_id' => 'string',
        'resource_reference' => 'string',
        'parent_session_id' => 'string',
        'usn' => 'int'
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
        'activity_id' => 'uuid',
        'session_type' => null,
        'creation_time' => 'date-time',
        'end_time' => 'date-time',
        'state' => null,
        'progress_percent' => null,
        'result' => null,
        'resource_id' => 'uuid',
        'resource_reference' => null,
        'parent_session_id' => 'uuid',
        'usn' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'activity_id' => false,
		'session_type' => false,
		'creation_time' => false,
		'end_time' => false,
		'state' => false,
		'progress_percent' => false,
		'result' => false,
		'resource_id' => false,
		'resource_reference' => false,
		'parent_session_id' => false,
		'usn' => false
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
        'activity_id' => 'activityId',
        'session_type' => 'sessionType',
        'creation_time' => 'creationTime',
        'end_time' => 'endTime',
        'state' => 'state',
        'progress_percent' => 'progressPercent',
        'result' => 'result',
        'resource_id' => 'resourceId',
        'resource_reference' => 'resourceReference',
        'parent_session_id' => 'parentSessionId',
        'usn' => 'usn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'activity_id' => 'setActivityId',
        'session_type' => 'setSessionType',
        'creation_time' => 'setCreationTime',
        'end_time' => 'setEndTime',
        'state' => 'setState',
        'progress_percent' => 'setProgressPercent',
        'result' => 'setResult',
        'resource_id' => 'setResourceId',
        'resource_reference' => 'setResourceReference',
        'parent_session_id' => 'setParentSessionId',
        'usn' => 'setUsn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'activity_id' => 'getActivityId',
        'session_type' => 'getSessionType',
        'creation_time' => 'getCreationTime',
        'end_time' => 'getEndTime',
        'state' => 'getState',
        'progress_percent' => 'getProgressPercent',
        'result' => 'getResult',
        'resource_id' => 'getResourceId',
        'resource_reference' => 'getResourceReference',
        'parent_session_id' => 'getParentSessionId',
        'usn' => 'getUsn'
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
        $this->setIfExists('activity_id', $data ?? [], null);
        $this->setIfExists('session_type', $data ?? [], null);
        $this->setIfExists('creation_time', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('progress_percent', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('resource_id', $data ?? [], null);
        $this->setIfExists('resource_reference', $data ?? [], null);
        $this->setIfExists('parent_session_id', $data ?? [], null);
        $this->setIfExists('usn', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['activity_id'] === null) {
            $invalidProperties[] = "'activity_id' can't be null";
        }
        if ($this->container['session_type'] === null) {
            $invalidProperties[] = "'session_type' can't be null";
        }
        if ($this->container['creation_time'] === null) {
            $invalidProperties[] = "'creation_time' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['usn'] === null) {
            $invalidProperties[] = "'usn' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID of the session.
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
     * @param string $name Name of the session.
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
     * Gets activity_id
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param string $activity_id ID of the activity.
     *
     * @return self
     */
    public function setActivityId($activity_id)
    {
        if (is_null($activity_id)) {
            throw new \InvalidArgumentException('non-nullable activity_id cannot be null');
        }
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets session_type
     *
     * @return \OpenAPI\Client\Model\ESessionType
     */
    public function getSessionType()
    {
        return $this->container['session_type'];
    }

    /**
     * Sets session_type
     *
     * @param \OpenAPI\Client\Model\ESessionType $session_type session_type
     *
     * @return self
     */
    public function setSessionType($session_type)
    {
        if (is_null($session_type)) {
            throw new \InvalidArgumentException('non-nullable session_type cannot be null');
        }
        $this->container['session_type'] = $session_type;

        return $this;
    }

    /**
     * Gets creation_time
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param \DateTime $creation_time Date and time the session was created.
     *
     * @return self
     */
    public function setCreationTime($creation_time)
    {
        if (is_null($creation_time)) {
            throw new \InvalidArgumentException('non-nullable creation_time cannot be null');
        }
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time Date and time the session was ended.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        if (is_null($end_time)) {
            throw new \InvalidArgumentException('non-nullable end_time cannot be null');
        }
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\ESessionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\ESessionState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets progress_percent
     *
     * @return int|null
     */
    public function getProgressPercent()
    {
        return $this->container['progress_percent'];
    }

    /**
     * Sets progress_percent
     *
     * @param int|null $progress_percent Progress percentage of the session.
     *
     * @return self
     */
    public function setProgressPercent($progress_percent)
    {
        if (is_null($progress_percent)) {
            throw new \InvalidArgumentException('non-nullable progress_percent cannot be null');
        }
        $this->container['progress_percent'] = $progress_percent;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \OpenAPI\Client\Model\SessionResultModel|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \OpenAPI\Client\Model\SessionResultModel|null $result result
     *
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string|null $resource_id ID of the resource.
     *
     * @return self
     */
    public function setResourceId($resource_id)
    {
        if (is_null($resource_id)) {
            throw new \InvalidArgumentException('non-nullable resource_id cannot be null');
        }
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets resource_reference
     *
     * @return string|null
     */
    public function getResourceReference()
    {
        return $this->container['resource_reference'];
    }

    /**
     * Sets resource_reference
     *
     * @param string|null $resource_reference URI of the resource.
     *
     * @return self
     */
    public function setResourceReference($resource_reference)
    {
        if (is_null($resource_reference)) {
            throw new \InvalidArgumentException('non-nullable resource_reference cannot be null');
        }
        $this->container['resource_reference'] = $resource_reference;

        return $this;
    }

    /**
     * Gets parent_session_id
     *
     * @return string|null
     */
    public function getParentSessionId()
    {
        return $this->container['parent_session_id'];
    }

    /**
     * Sets parent_session_id
     *
     * @param string|null $parent_session_id ID of the parent session.
     *
     * @return self
     */
    public function setParentSessionId($parent_session_id)
    {
        if (is_null($parent_session_id)) {
            throw new \InvalidArgumentException('non-nullable parent_session_id cannot be null');
        }
        $this->container['parent_session_id'] = $parent_session_id;

        return $this;
    }

    /**
     * Gets usn
     *
     * @return int
     */
    public function getUsn()
    {
        return $this->container['usn'];
    }

    /**
     * Sets usn
     *
     * @param int $usn Update sequence number.
     *
     * @return self
     */
    public function setUsn($usn)
    {
        if (is_null($usn)) {
            throw new \InvalidArgumentException('non-nullable usn cannot be null');
        }
        $this->container['usn'] = $usn;

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

