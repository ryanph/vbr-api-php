# # VCenterInventoryFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Number of objects to skip. | [optional]
**limit** | **int** | Maximum number of objects to return. | [optional]
**order_column** | [**\OpenAPI\Client\Model\EvCentersInventoryFiltersOrderColumn**](EvCentersInventoryFiltersOrderColumn.md) |  | [optional]
**order_asc** | **bool** | Sorts objects in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional]
**object_id_filter** | **string** | Filters objects by object ID. | [optional]
**hierarchy_type_filter** | [**\OpenAPI\Client\Model\EHierarchyType**](EHierarchyType.md) |  | [optional]
**name_filter** | **string** | Filters objects by the &#x60;nameFilter&#x60; pattern. The pattern can match any object parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional]
**type_filter** | [**\OpenAPI\Client\Model\EVmwareInventoryType**](EVmwareInventoryType.md) |  | [optional]
**parent_container_name_filter** | **string** | Filters objects by name of the parent container. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
