# # BackupOracleSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_guest_credentials** | **bool** | If *true*, Veeam Backup &amp; Replication uses credentials specified in the guest processing settings. |
**credentials_id** | **string** | ID of the credentials record that is used if &#x60;useGuestCredentials&#x60; is *false*. | [optional]
**archive_logs** | [**\OpenAPI\Client\Model\EBackupOracleLogsSettings**](EBackupOracleLogsSettings.md) |  |
**delete_hours_count** | **int** | Time period in hours to keep archived logs. This parameter should be specified if the &#x60;EBackupOracleLogsSettings&#x60; value is *deleteExpiredHours*. | [optional]
**delete_gbs_count** | **int** | Maximum size for archived logs in GB. This parameter should be specified if the &#x60;EBackupOracleLogsSettings&#x60; value is *deleteExpiredGBs*. | [optional]
**backup_logs** | **bool** | If *true*, archived logs are backed up. | [optional]
**backup_mins_count** | **int** | Frequency of archived log backup, in minutes. | [optional]
**retain_log_backups** | [**\OpenAPI\Client\Model\ERetainLogBackupsType**](ERetainLogBackupsType.md) |  | [optional]
**keep_days_count** | **int** | Number of days to keep archived logs. | [optional]
**log_shipping_servers** | [**\OpenAPI\Client\Model\BackupLogShippingServersModel**](BackupLogShippingServersModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
