# # RepositoryStatesFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Skips the specified number of repositories. | [optional]
**limit** | **int** | Returns the specified number of repositories. | [optional]
**order_column** | [**\OpenAPI\Client\Model\ERepositoryStatesFiltersOrderColumn**](ERepositoryStatesFiltersOrderColumn.md) |  | [optional]
**order_asc** | **bool** | Sorts repositories in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional]
**id_filter** | **string** |  | [optional]
**name_filter** | **string** | Filters repositories by the &#x60;nameFilter&#x60; pattern. The pattern can match any repository parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional]
**type_filter** | [**\OpenAPI\Client\Model\ERepositoryType**](ERepositoryType.md) |  | [optional]
**capacity_filter** | **float** | Filters repositories by repository capacity. | [optional]
**free_space_filter** | **float** | Filters repositories by repository free space. | [optional]
**used_space_filter** | **float** | Filters repositories by repository used space. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
