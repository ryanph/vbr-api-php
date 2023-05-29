# # ConfigBackupModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, configuration backup is enabled. |
**backup_repository_id** | **string** | ID of the backup repository on which the configuration backup is stored. |
**restore_points_to_keep** | **int** | Number of restore points to keep in the backup repository. |
**notifications** | [**\OpenAPI\Client\Model\ConfigBackupNotificationsModel**](ConfigBackupNotificationsModel.md) |  |
**schedule** | [**\OpenAPI\Client\Model\ConfigBackupScheduleModel**](ConfigBackupScheduleModel.md) |  |
**last_successful_backup** | [**\OpenAPI\Client\Model\ConfigBackupLastSuccessfulModel**](ConfigBackupLastSuccessfulModel.md) |  |
**encryption** | [**\OpenAPI\Client\Model\ConfigBackupEncryptionModel**](ConfigBackupEncryptionModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
