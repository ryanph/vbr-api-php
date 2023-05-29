# # ConfigBackupSMTPSettigsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, email notifications are enabled for this job. |
**recipients** | **string[]** | Array of recipients&#39; email addresses. |
**settings_type** | [**\OpenAPI\Client\Model\EConfigBackupSMTPSettingsType**](EConfigBackupSMTPSettingsType.md) |  |
**subject** | **string** | Notification subject. Use the following variables in the subject: *%JobResult%*, *%JobName%*, *%Time%* (completion time). |
**notify_on_success** | **bool** | If *true*, email notifications are sent when the job completes successfully. |
**notify_on_warning** | **bool** | If *true*, email notifications are sent when the job completes with a warning. |
**notify_on_error** | **bool** | If *true*, email notifications are sent when the job fails. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
