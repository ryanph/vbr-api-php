# OpenAPI\Client\ServicesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllServices()**](ServicesApi.md#getAllServices) | **GET** /api/v1/services | Get Associated Services |


## `getAllServices()`

```php
getAllServices($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter): \OpenAPI\Client\Model\ServicesResult
```

Get Associated Services

The HTTP GET request to the `/api/v1/services` path allows you to get associated services for integration with Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of services to skip.
$limit = 56; // int | Maximum number of services to return.
$order_column = new \OpenAPI\Client\Model\EServicesFiltersOrderColumn(); // EServicesFiltersOrderColumn | Sorts services by one of the service parameters.
$order_asc = True; // bool | Sorts services in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters services by the `nameFilter` pattern. The pattern can match any service parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.

try {
    $result = $apiInstance->getAllServices($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getAllServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of services to skip. | [optional] |
| **limit** | **int**| Maximum number of services to return. | [optional] |
| **order_column** | [**EServicesFiltersOrderColumn**](../Model/.md)| Sorts services by one of the service parameters. | [optional] |
| **order_asc** | **bool**| Sorts services in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters services by the &#x60;nameFilter&#x60; pattern. The pattern can match any service parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServicesResult**](../Model/ServicesResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
