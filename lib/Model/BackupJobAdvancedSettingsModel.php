<?php
/**
 * BackupJobAdvancedSettingsModel
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
 * BackupJobAdvancedSettingsModel Class Doc Comment
 *
 * @category Class
 * @description Advanced settings of the backup job.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BackupJobAdvancedSettingsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BackupJobAdvancedSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'backup_mode_type' => '\OpenAPI\Client\Model\EBackupModeType',
        'synthentic_fulls' => '\OpenAPI\Client\Model\SyntheticFullSettingsModel',
        'active_fulls' => '\OpenAPI\Client\Model\ActiveFullSettingsModel',
        'backup_health' => '\OpenAPI\Client\Model\BackupHealthCheckSettingsModels',
        'full_backup_maintenance' => '\OpenAPI\Client\Model\FullBackupMaintenanceModel',
        'storage_data' => '\OpenAPI\Client\Model\BackupStorageSettingModel',
        'notifications' => '\OpenAPI\Client\Model\NotificationSettingsModel',
        'v_sphere' => '\OpenAPI\Client\Model\BackupJobAdvancedSettingsVSphereModel',
        'storage_integration' => '\OpenAPI\Client\Model\PrimaryStorageIntegrationSettingsModel',
        'scripts' => '\OpenAPI\Client\Model\JobScriptsSettingsModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'backup_mode_type' => null,
        'synthentic_fulls' => null,
        'active_fulls' => null,
        'backup_health' => null,
        'full_backup_maintenance' => null,
        'storage_data' => null,
        'notifications' => null,
        'v_sphere' => null,
        'storage_integration' => null,
        'scripts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'backup_mode_type' => false,
		'synthentic_fulls' => false,
		'active_fulls' => false,
		'backup_health' => false,
		'full_backup_maintenance' => false,
		'storage_data' => false,
		'notifications' => false,
		'v_sphere' => false,
		'storage_integration' => false,
		'scripts' => false
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
        'backup_mode_type' => 'backupModeType',
        'synthentic_fulls' => 'synthenticFulls',
        'active_fulls' => 'activeFulls',
        'backup_health' => 'backupHealth',
        'full_backup_maintenance' => 'fullBackupMaintenance',
        'storage_data' => 'storageData',
        'notifications' => 'notifications',
        'v_sphere' => 'vSphere',
        'storage_integration' => 'storageIntegration',
        'scripts' => 'scripts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backup_mode_type' => 'setBackupModeType',
        'synthentic_fulls' => 'setSynthenticFulls',
        'active_fulls' => 'setActiveFulls',
        'backup_health' => 'setBackupHealth',
        'full_backup_maintenance' => 'setFullBackupMaintenance',
        'storage_data' => 'setStorageData',
        'notifications' => 'setNotifications',
        'v_sphere' => 'setVSphere',
        'storage_integration' => 'setStorageIntegration',
        'scripts' => 'setScripts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backup_mode_type' => 'getBackupModeType',
        'synthentic_fulls' => 'getSynthenticFulls',
        'active_fulls' => 'getActiveFulls',
        'backup_health' => 'getBackupHealth',
        'full_backup_maintenance' => 'getFullBackupMaintenance',
        'storage_data' => 'getStorageData',
        'notifications' => 'getNotifications',
        'v_sphere' => 'getVSphere',
        'storage_integration' => 'getStorageIntegration',
        'scripts' => 'getScripts'
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
        $this->setIfExists('backup_mode_type', $data ?? [], null);
        $this->setIfExists('synthentic_fulls', $data ?? [], null);
        $this->setIfExists('active_fulls', $data ?? [], null);
        $this->setIfExists('backup_health', $data ?? [], null);
        $this->setIfExists('full_backup_maintenance', $data ?? [], null);
        $this->setIfExists('storage_data', $data ?? [], null);
        $this->setIfExists('notifications', $data ?? [], null);
        $this->setIfExists('v_sphere', $data ?? [], null);
        $this->setIfExists('storage_integration', $data ?? [], null);
        $this->setIfExists('scripts', $data ?? [], null);
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

        if ($this->container['backup_mode_type'] === null) {
            $invalidProperties[] = "'backup_mode_type' can't be null";
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
     * Gets backup_mode_type
     *
     * @return \OpenAPI\Client\Model\EBackupModeType
     */
    public function getBackupModeType()
    {
        return $this->container['backup_mode_type'];
    }

    /**
     * Sets backup_mode_type
     *
     * @param \OpenAPI\Client\Model\EBackupModeType $backup_mode_type backup_mode_type
     *
     * @return self
     */
    public function setBackupModeType($backup_mode_type)
    {
        if (is_null($backup_mode_type)) {
            throw new \InvalidArgumentException('non-nullable backup_mode_type cannot be null');
        }
        $this->container['backup_mode_type'] = $backup_mode_type;

        return $this;
    }

    /**
     * Gets synthentic_fulls
     *
     * @return \OpenAPI\Client\Model\SyntheticFullSettingsModel|null
     */
    public function getSynthenticFulls()
    {
        return $this->container['synthentic_fulls'];
    }

    /**
     * Sets synthentic_fulls
     *
     * @param \OpenAPI\Client\Model\SyntheticFullSettingsModel|null $synthentic_fulls synthentic_fulls
     *
     * @return self
     */
    public function setSynthenticFulls($synthentic_fulls)
    {
        if (is_null($synthentic_fulls)) {
            throw new \InvalidArgumentException('non-nullable synthentic_fulls cannot be null');
        }
        $this->container['synthentic_fulls'] = $synthentic_fulls;

        return $this;
    }

    /**
     * Gets active_fulls
     *
     * @return \OpenAPI\Client\Model\ActiveFullSettingsModel|null
     */
    public function getActiveFulls()
    {
        return $this->container['active_fulls'];
    }

    /**
     * Sets active_fulls
     *
     * @param \OpenAPI\Client\Model\ActiveFullSettingsModel|null $active_fulls active_fulls
     *
     * @return self
     */
    public function setActiveFulls($active_fulls)
    {
        if (is_null($active_fulls)) {
            throw new \InvalidArgumentException('non-nullable active_fulls cannot be null');
        }
        $this->container['active_fulls'] = $active_fulls;

        return $this;
    }

    /**
     * Gets backup_health
     *
     * @return \OpenAPI\Client\Model\BackupHealthCheckSettingsModels|null
     */
    public function getBackupHealth()
    {
        return $this->container['backup_health'];
    }

    /**
     * Sets backup_health
     *
     * @param \OpenAPI\Client\Model\BackupHealthCheckSettingsModels|null $backup_health backup_health
     *
     * @return self
     */
    public function setBackupHealth($backup_health)
    {
        if (is_null($backup_health)) {
            throw new \InvalidArgumentException('non-nullable backup_health cannot be null');
        }
        $this->container['backup_health'] = $backup_health;

        return $this;
    }

    /**
     * Gets full_backup_maintenance
     *
     * @return \OpenAPI\Client\Model\FullBackupMaintenanceModel|null
     */
    public function getFullBackupMaintenance()
    {
        return $this->container['full_backup_maintenance'];
    }

    /**
     * Sets full_backup_maintenance
     *
     * @param \OpenAPI\Client\Model\FullBackupMaintenanceModel|null $full_backup_maintenance full_backup_maintenance
     *
     * @return self
     */
    public function setFullBackupMaintenance($full_backup_maintenance)
    {
        if (is_null($full_backup_maintenance)) {
            throw new \InvalidArgumentException('non-nullable full_backup_maintenance cannot be null');
        }
        $this->container['full_backup_maintenance'] = $full_backup_maintenance;

        return $this;
    }

    /**
     * Gets storage_data
     *
     * @return \OpenAPI\Client\Model\BackupStorageSettingModel|null
     */
    public function getStorageData()
    {
        return $this->container['storage_data'];
    }

    /**
     * Sets storage_data
     *
     * @param \OpenAPI\Client\Model\BackupStorageSettingModel|null $storage_data storage_data
     *
     * @return self
     */
    public function setStorageData($storage_data)
    {
        if (is_null($storage_data)) {
            throw new \InvalidArgumentException('non-nullable storage_data cannot be null');
        }
        $this->container['storage_data'] = $storage_data;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \OpenAPI\Client\Model\NotificationSettingsModel|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \OpenAPI\Client\Model\NotificationSettingsModel|null $notifications notifications
     *
     * @return self
     */
    public function setNotifications($notifications)
    {
        if (is_null($notifications)) {
            throw new \InvalidArgumentException('non-nullable notifications cannot be null');
        }
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets v_sphere
     *
     * @return \OpenAPI\Client\Model\BackupJobAdvancedSettingsVSphereModel|null
     */
    public function getVSphere()
    {
        return $this->container['v_sphere'];
    }

    /**
     * Sets v_sphere
     *
     * @param \OpenAPI\Client\Model\BackupJobAdvancedSettingsVSphereModel|null $v_sphere v_sphere
     *
     * @return self
     */
    public function setVSphere($v_sphere)
    {
        if (is_null($v_sphere)) {
            throw new \InvalidArgumentException('non-nullable v_sphere cannot be null');
        }
        $this->container['v_sphere'] = $v_sphere;

        return $this;
    }

    /**
     * Gets storage_integration
     *
     * @return \OpenAPI\Client\Model\PrimaryStorageIntegrationSettingsModel|null
     */
    public function getStorageIntegration()
    {
        return $this->container['storage_integration'];
    }

    /**
     * Sets storage_integration
     *
     * @param \OpenAPI\Client\Model\PrimaryStorageIntegrationSettingsModel|null $storage_integration storage_integration
     *
     * @return self
     */
    public function setStorageIntegration($storage_integration)
    {
        if (is_null($storage_integration)) {
            throw new \InvalidArgumentException('non-nullable storage_integration cannot be null');
        }
        $this->container['storage_integration'] = $storage_integration;

        return $this;
    }

    /**
     * Gets scripts
     *
     * @return \OpenAPI\Client\Model\JobScriptsSettingsModel|null
     */
    public function getScripts()
    {
        return $this->container['scripts'];
    }

    /**
     * Sets scripts
     *
     * @param \OpenAPI\Client\Model\JobScriptsSettingsModel|null $scripts scripts
     *
     * @return self
     */
    public function setScripts($scripts)
    {
        if (is_null($scripts)) {
            throw new \InvalidArgumentException('non-nullable scripts cannot be null');
        }
        $this->container['scripts'] = $scripts;

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


