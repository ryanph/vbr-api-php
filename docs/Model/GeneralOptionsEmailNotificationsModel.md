# # GeneralOptionsEmailNotificationsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, global email notification settings are enabled. |
**smtp_server_name** | **string** | Full DNS name or IP address of the SMTP server. |
**advanced_smtp_options** | [**\OpenAPI\Client\Model\AdvancedSmtpOptionsModel**](AdvancedSmtpOptionsModel.md) |  |
**from** | **string** | Email address from which email notifications must be sent. |
**to** | **string** | Recipient email addresses. Use a semicolon to separate multiple addresses. |
**subject** | **string** | Notification subject. Use the following variables in the subject:&lt;br&gt; &lt;ol&gt;   &lt;li&gt;%Time% — completion time&lt;/li&gt;   &lt;li&gt;%JobName%&lt;/li&gt;   &lt;li&gt;%JobResult%&lt;/li&gt;   &lt;li&gt;%ObjectCount% — number of VMs in the job&lt;/li&gt;   &lt;li&gt;%Issues% — number of VMs in the job that have been processed with the Warning or Failed status&lt;/li&gt; &lt;/ol&gt; |
**send_daily_reports_at** | **\DateTime** | Time when Veeam Backup &amp; Replication sends daily email reports. |
**notify_on_success** | **bool** | If *true*, email notifications are sent when the job completes successfully. |
**notify_on_warning** | **bool** | If *true*, email notifications are sent when the job completes with a warning. |
**notify_on_failure** | **bool** | If *true*, email notifications are sent when the job fails. |
**notify_on_last_retry** | **bool** | If *true*, email notifications are sent about the final job status only (not per every job retry). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
