# # JobsFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Skips the specified number of jobs. | [optional]
**limit** | **int** | Returns the specified number of jobs. | [optional]
**order_column** | [**\OpenAPI\Client\Model\EJobFiltersOrderColumn**](EJobFiltersOrderColumn.md) |  | [optional]
**order_asc** | **bool** | Sorts jobs in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional]
**name_filter** | **string** | Filters jobs by the &#x60;nameFilter&#x60; pattern. The pattern can match any job parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional]
**type_filter** | [**\OpenAPI\Client\Model\EJobType**](EJobType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
