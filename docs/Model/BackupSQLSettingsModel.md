# # BackupSQLSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**logs_processing** | [**\OpenAPI\Client\Model\ESQLLogsProcessing**](ESQLLogsProcessing.md) |  |
**backup_mins_count** | **int** | Frequency of transaction log backup, in minutes. | [optional]
**retain_log_backups** | [**\OpenAPI\Client\Model\ERetainLogBackupsType**](ERetainLogBackupsType.md) |  | [optional]
**keep_days_count** | **int** | Number of days to keep transaction logs in the backup repository. | [optional]
**log_shipping_servers** | [**\OpenAPI\Client\Model\BackupLogShippingServersModel**](BackupLogShippingServersModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
