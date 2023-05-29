# # BackupScheduleModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**run_automatically** | **bool** | If *true*, job scheduling is enabled. | [default to false]
**daily** | [**\OpenAPI\Client\Model\ScheduleDailyModel**](ScheduleDailyModel.md) |  | [optional]
**monthly** | [**\OpenAPI\Client\Model\ScheduleMonthlyModel**](ScheduleMonthlyModel.md) |  | [optional]
**periodically** | [**\OpenAPI\Client\Model\SchedulePeriodicallyModel**](SchedulePeriodicallyModel.md) |  | [optional]
**continuously** | [**\OpenAPI\Client\Model\ScheduleBackupWindowModel**](ScheduleBackupWindowModel.md) |  | [optional]
**after_this_job** | [**\OpenAPI\Client\Model\ScheduleAfterThisJobModel**](ScheduleAfterThisJobModel.md) |  | [optional]
**retry** | [**\OpenAPI\Client\Model\ScheduleRetryModel**](ScheduleRetryModel.md) |  | [optional]
**backup_window** | [**\OpenAPI\Client\Model\ScheduleBackupWindowModel**](ScheduleBackupWindowModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
