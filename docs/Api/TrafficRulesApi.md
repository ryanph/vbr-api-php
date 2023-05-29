# OpenAPI\Client\TrafficRulesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllTrafficRules()**](TrafficRulesApi.md#getAllTrafficRules) | **GET** /api/v1/trafficRules | Get Traffic Rules |
| [**updateTrafficRules()**](TrafficRulesApi.md#updateTrafficRules) | **PUT** /api/v1/trafficRules | Edit Traffic Rules |


## `getAllTrafficRules()`

```php
getAllTrafficRules($x_api_version): \OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel
```

Get Traffic Rules

The HTTP GET request to the `/api/v1/trafficRules` path allows you to get network traffic rules that control traffic transferred between backup infrastructure components.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TrafficRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getAllTrafficRules($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficRulesApi->getAllTrafficRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel**](../Model/GlobalNetworkTrafficRulesModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTrafficRules()`

```php
updateTrafficRules($x_api_version, $global_network_traffic_rules_model): \OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel
```

Edit Traffic Rules

The HTTP PUT request to the `/api/v1/trafficRules` path allows you to edit network traffic rules that are configured on the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TrafficRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$global_network_traffic_rules_model = new \OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel(); // \OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel

try {
    $result = $apiInstance->updateTrafficRules($x_api_version, $global_network_traffic_rules_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficRulesApi->updateTrafficRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **global_network_traffic_rules_model** | [**\OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel**](../Model/GlobalNetworkTrafficRulesModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GlobalNetworkTrafficRulesModel**](../Model/GlobalNetworkTrafficRulesModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
