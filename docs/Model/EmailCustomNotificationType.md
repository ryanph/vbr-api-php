# # EmailCustomNotificationType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | Notification subject. Use the following variables in the subject: *%Time%* (completion time), *%JobName%*, *%JobResult%*, *%ObjectCount%* (number of VMs in the job) and *%Issues%* (number of VMs in the job that have finished with the Warning or Failed status). | [optional]
**notify_on_success** | **bool** | If *true*, email notifications are sent when the job completes successfully. | [optional]
**notify_on_warning** | **bool** | If *true*, email notifications are sent when the job completes with a warning. | [optional]
**notify_on_error** | **bool** | If *true*, email notifications are sent when the job fails. | [optional]
**suppress_notification_until_last_retry** | **bool** | If *true*, email notifications are sent about the final job status only (not per every job retry). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
