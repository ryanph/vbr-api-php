# OpenAPI\Client\GeneralOptionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGeneralOptions()**](GeneralOptionsApi.md#getGeneralOptions) | **GET** /api/v1/generalOptions | Get General Options |
| [**updateGeneralOptions()**](GeneralOptionsApi.md#updateGeneralOptions) | **PUT** /api/v1/generalOptions | Edit General Options |


## `getGeneralOptions()`

```php
getGeneralOptions($x_api_version): \OpenAPI\Client\Model\GeneralOptionsModel
```

Get General Options

The HTTP GET request to the `/api/v1/generalOptions` path allows you to get general options of Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeneralOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getGeneralOptions($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralOptionsApi->getGeneralOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\GeneralOptionsModel**](../Model/GeneralOptionsModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGeneralOptions()`

```php
updateGeneralOptions($x_api_version, $general_options_model): \OpenAPI\Client\Model\GeneralOptionsModel
```

Edit General Options

The HTTP PUT request to the `/api/v1/generalOptions` path allows you to edit general options of Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeneralOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$general_options_model = new \OpenAPI\Client\Model\GeneralOptionsModel(); // \OpenAPI\Client\Model\GeneralOptionsModel

try {
    $result = $apiInstance->updateGeneralOptions($x_api_version, $general_options_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralOptionsApi->updateGeneralOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **general_options_model** | [**\OpenAPI\Client\Model\GeneralOptionsModel**](../Model/GeneralOptionsModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GeneralOptionsModel**](../Model/GeneralOptionsModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
