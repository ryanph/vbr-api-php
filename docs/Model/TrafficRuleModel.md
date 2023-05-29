# # TrafficRuleModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the rule. | [optional]
**name** | **string** | Name of the rule. |
**source_ip_start** | **string** | Start IP address of the range for the backup infrastructure components on the source side. |
**source_ip_end** | **string** | End IP address of the range for the backup infrastructure components on the source side. |
**target_ip_start** | **string** | Start IP address of the range for the backup infrastructure components on the target side. |
**target_ip_end** | **string** | End IP address of the range for the backup infrastructure components on the target side. |
**encryption_enabled** | **bool** | If *true*, traffic encryption is enabled. | [optional]
**throttling_enabled** | **bool** | If *true*, traffic throttling is enabled. | [optional]
**throttling_unit** | [**\OpenAPI\Client\Model\ESpeedUnit**](ESpeedUnit.md) |  | [optional]
**throttling_value** | **int** | Maximum speed that must be used to transfer data from source to target. | [optional]
**throttling_window_enabled** | **bool** | If *true*, throttling window during which the speed must be limited is enabled. | [optional]
**throttling_window_options** | [**\OpenAPI\Client\Model\BackupWindowSettingModel**](BackupWindowSettingModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
