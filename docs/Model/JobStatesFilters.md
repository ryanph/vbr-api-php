# # JobStatesFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Skips the specified number of jobs. | [optional]
**limit** | **int** | Returns the specified number of jobs. | [optional]
**order_column** | [**\OpenAPI\Client\Model\EJobStatesFiltersOrderColumn**](EJobStatesFiltersOrderColumn.md) |  | [optional]
**order_asc** | **bool** | Sorts jobs in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional]
**id_filter** | **string** |  | [optional]
**name_filter** | **string** | Filters jobs by the &#x60;nameFilter&#x60; pattern. The pattern can match any job state parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional]
**type_filter** | [**\OpenAPI\Client\Model\EJobType**](EJobType.md) |  | [optional]
**last_result_filter** | [**\OpenAPI\Client\Model\ESessionResult**](ESessionResult.md) |  | [optional]
**status_filter** | [**\OpenAPI\Client\Model\EJobStatus**](EJobStatus.md) |  | [optional]
**workload_filter** | [**\OpenAPI\Client\Model\EJobWorkload**](EJobWorkload.md) |  | [optional]
**last_run_after_filter** | **\DateTime** |  | [optional]
**last_run_before_filter** | **\DateTime** |  | [optional]
**is_high_priority_job_filter** | **bool** |  | [optional]
**repository_id_filter** | **string** |  | [optional]
**objects_count_filter** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
