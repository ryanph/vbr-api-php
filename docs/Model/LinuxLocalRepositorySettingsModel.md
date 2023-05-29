# # LinuxLocalRepositorySettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | Path to the folder where backup files are stored. | [optional]
**max_task_count** | **int** | Maximum number of concurrent tasks. | [optional]
**read_write_rate** | **int** | Maximum rate that restricts the total speed of reading and writing data to the backup repository disk. | [optional]
**use_fast_cloning_on_xfs_volumes** | **bool** | [For Linux repository] If *true*, fast cloning on XFS volumes is used. | [optional]
**use_immutable_backups** | **bool** | If *true*, the Object Lock feature is used to protect recent backups. | [optional]
**make_recent_backups_immutable_days** | **int** | Number of days to keep immutable backups. | [optional]
**advanced_settings** | [**\OpenAPI\Client\Model\RepositoryAdvancedSettingsModel**](RepositoryAdvancedSettingsModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
