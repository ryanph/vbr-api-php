# # BackupStorageSettingModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_inline_data_dedup** | **bool** | If *true*, Veeam Backup &amp; Replication deduplicates VM data before storing it in the backup repository. | [optional]
**exclude_swap_file_blocks** | **bool** | If *true*, Veeam Backup &amp; Replication excludes swap file blocks from processing. | [optional]
**exclude_deleted_file_blocks** | **bool** | If *true*, Veeam Backup &amp; Replication does not copy deleted file blocks. | [optional]
**compression_level** | [**\OpenAPI\Client\Model\ECompressionLevel**](ECompressionLevel.md) |  | [optional]
**storage_optimization** | [**\OpenAPI\Client\Model\EStorageOptimization**](EStorageOptimization.md) |  | [optional]
**encryption** | [**\OpenAPI\Client\Model\BackupStorageSettingsEncryptionModel**](BackupStorageSettingsEncryptionModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
