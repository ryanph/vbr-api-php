# # CapacityTierModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | If *true*, the capacity tier is enabled. | [optional]
**extent_id** | **string** | ID of an object storage repository added as a capacity extent. | [optional]
**offload_window** | [**\OpenAPI\Client\Model\BackupWindowSettingModel**](BackupWindowSettingModel.md) |  | [optional]
**copy_policy_enabled** | **bool** | If *true*, Veeam Backup &amp; Replication copies backups from the performance extents to the capacity extent as soon as the backups are created. | [optional]
**move_policy_enabled** | **bool** | If *true*, Veeam Backup &amp; Replication moves backup files that belong to inactive backup chains from the performance extents to the capacity extent. | [optional]
**operational_restore_period_days** | **int** | Number of days after which inactive backup chains on the performance extents are moved to the capacity extent. Specify *0* to offload inactive backup chains on the same day they are created. | [optional]
**override_policy** | [**\OpenAPI\Client\Model\CapacityTierOverridePolicyModel**](CapacityTierOverridePolicyModel.md) |  | [optional]
**encryption** | [**\OpenAPI\Client\Model\BackupStorageSettingsEncryptionModel**](BackupStorageSettingsEncryptionModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
