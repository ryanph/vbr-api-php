# OpenAPI\Client\InventoryBrowserApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllInventoryVmwareHosts()**](InventoryBrowserApi.md#getAllInventoryVmwareHosts) | **GET** /api/v1/inventory/vmware/hosts | Get All VMware vSphere Servers |
| [**getVmwareHostObject()**](InventoryBrowserApi.md#getVmwareHostObject) | **GET** /api/v1/inventory/vmware/hosts/{name} | Get VMware vSphere Server Objects |


## `getAllInventoryVmwareHosts()`

```php
getAllInventoryVmwareHosts($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter): \OpenAPI\Client\Model\ViRootsResult
```

Get All VMware vSphere Servers

The HTTP GET request to the `/api/v1/inventory/vmware/hosts` path allows you to get an array of all VMware vSphere servers added to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InventoryBrowserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of VMware vSphere servers to skip.
$limit = 56; // int | Maximum number of VMware vSphere servers to return.
$order_column = new \OpenAPI\Client\Model\EViRootFiltersOrderColumn(); // EViRootFiltersOrderColumn | Sorts VMware vSphere servers by one of the VMware vSphere server parameters.
$order_asc = True; // bool | Sorts VMware vSphere servers in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters VMware vSphere servers by the `nameFilter` pattern. The pattern can match any VMware vSphere server parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.

try {
    $result = $apiInstance->getAllInventoryVmwareHosts($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBrowserApi->getAllInventoryVmwareHosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of VMware vSphere servers to skip. | [optional] |
| **limit** | **int**| Maximum number of VMware vSphere servers to return. | [optional] |
| **order_column** | [**EViRootFiltersOrderColumn**](../Model/.md)| Sorts VMware vSphere servers by one of the VMware vSphere server parameters. | [optional] |
| **order_asc** | **bool**| Sorts VMware vSphere servers in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters VMware vSphere servers by the &#x60;nameFilter&#x60; pattern. The pattern can match any VMware vSphere server parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ViRootsResult**](../Model/ViRootsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVmwareHostObject()`

```php
getVmwareHostObject($x_api_version, $name, $skip, $limit, $order_column, $order_asc, $object_id_filter, $hierarchy_type_filter, $name_filter, $type_filter, $parent_container_name_filter): \OpenAPI\Client\Model\VCenterInventoryResult
```

Get VMware vSphere Server Objects

The HTTP GET request to the `/api/v1/inventory/vmware/hosts/{name}` path allows you to get an array of virtual infrastructure objects of the VMware vSphere server that has the specified `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InventoryBrowserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$name = 'name_example'; // string | Name of the VMware vSphere server.
$skip = 56; // int | Number of objects to skip.
$limit = 56; // int | Maximum number of objects to return.
$order_column = new \OpenAPI\Client\Model\EvCentersInventoryFiltersOrderColumn(); // EvCentersInventoryFiltersOrderColumn | Sorts objects by one of the object parameters.
$order_asc = True; // bool | Sorts objects in the ascending order by the `orderColumn` parameter.
$object_id_filter = 'object_id_filter_example'; // string | Filters objects by object ID.
$hierarchy_type_filter = new \OpenAPI\Client\Model\EHierarchyType(); // EHierarchyType | Filters objects by hierarchy type.
$name_filter = 'name_filter_example'; // string | Filters objects by the `nameFilter` pattern. The pattern can match any object parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\EVmwareInventoryType(); // EVmwareInventoryType | Filters objects by virtual infrastructure type.
$parent_container_name_filter = 'parent_container_name_filter_example'; // string | Filters objects by name of the parent container.

try {
    $result = $apiInstance->getVmwareHostObject($x_api_version, $name, $skip, $limit, $order_column, $order_asc, $object_id_filter, $hierarchy_type_filter, $name_filter, $type_filter, $parent_container_name_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryBrowserApi->getVmwareHostObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **name** | **string**| Name of the VMware vSphere server. | |
| **skip** | **int**| Number of objects to skip. | [optional] |
| **limit** | **int**| Maximum number of objects to return. | [optional] |
| **order_column** | [**EvCentersInventoryFiltersOrderColumn**](../Model/.md)| Sorts objects by one of the object parameters. | [optional] |
| **order_asc** | **bool**| Sorts objects in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **object_id_filter** | **string**| Filters objects by object ID. | [optional] |
| **hierarchy_type_filter** | [**EHierarchyType**](../Model/.md)| Filters objects by hierarchy type. | [optional] |
| **name_filter** | **string**| Filters objects by the &#x60;nameFilter&#x60; pattern. The pattern can match any object parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**EVmwareInventoryType**](../Model/.md)| Filters objects by virtual infrastructure type. | [optional] |
| **parent_container_name_filter** | **string**| Filters objects by name of the parent container. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VCenterInventoryResult**](../Model/VCenterInventoryResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
