# # ScheduleMonthlyModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, monthly schedule is enabled. | [default to false]
**local_time** | **string** | Local time when the job must start. | [optional]
**day_of_week** | [**\OpenAPI\Client\Model\EDayOfWeek**](EDayOfWeek.md) |  | [optional]
**day_number_in_month** | [**\OpenAPI\Client\Model\EDayNumberInMonth**](EDayNumberInMonth.md) |  | [optional]
**day_of_month** | **int** | Day of the month when the job must start. | [optional]
**months** | [**\OpenAPI\Client\Model\EMonth[]**](EMonth.md) | Months when the job must start. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
