# OpenAPI\Client\ProxiesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProxy()**](ProxiesApi.md#createProxy) | **POST** /api/v1/backupInfrastructure/proxies | Add Proxy |
| [**deleteProxy()**](ProxiesApi.md#deleteProxy) | **DELETE** /api/v1/backupInfrastructure/proxies/{id} | Remove Proxy |
| [**getAllProxies()**](ProxiesApi.md#getAllProxies) | **GET** /api/v1/backupInfrastructure/proxies | Get All Proxies |
| [**getProxy()**](ProxiesApi.md#getProxy) | **GET** /api/v1/backupInfrastructure/proxies/{id} | Get Proxy |
| [**updateProxy()**](ProxiesApi.md#updateProxy) | **PUT** /api/v1/backupInfrastructure/proxies/{id} | Edit Proxy |


## `createProxy()`

```php
createProxy($x_api_version, $proxy_spec): \OpenAPI\Client\Model\SessionModel
```

Add Proxy

The HTTP POST request to the `/api/v1/backupInfrastructure/proxies` path allows you to add a proxy to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProxiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$proxy_spec = new \OpenAPI\Client\Model\ProxySpec(); // \OpenAPI\Client\Model\ProxySpec

try {
    $result = $apiInstance->createProxy($x_api_version, $proxy_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxiesApi->createProxy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **proxy_spec** | [**\OpenAPI\Client\Model\ProxySpec**](../Model/ProxySpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProxy()`

```php
deleteProxy($x_api_version, $id): object
```

Remove Proxy

The HTTP DELETE request to the `/api/v1/backupInfrastructure/proxies/{id}` path allows you to remove a backup proxy that has the specified `id` from the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProxiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup proxy.

try {
    $result = $apiInstance->deleteProxy($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxiesApi->deleteProxy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup proxy. | |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProxies()`

```php
getAllProxies($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter, $host_id_filter): \OpenAPI\Client\Model\ProxiesResult
```

Get All Proxies

The HTTP GET request to the `/api/v1/backupInfrastructure/proxies` path allows you to get an array of all backup proxies that are added to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProxiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of proxies to skip.
$limit = 56; // int | Maximum number of proxies to return.
$order_column = new \OpenAPI\Client\Model\EProxiesFiltersOrderColumn(); // EProxiesFiltersOrderColumn | Sorts proxies by one of the proxy parameters.
$order_asc = True; // bool | Sorts proxies in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters proxies by the `nameFilter` pattern. The pattern can match any proxy parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\EProxyType(); // EProxyType | Filters proxies by proxy type.
$host_id_filter = 'host_id_filter_example'; // string | Filters proxies by ID of the backup server.

try {
    $result = $apiInstance->getAllProxies($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter, $host_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxiesApi->getAllProxies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of proxies to skip. | [optional] |
| **limit** | **int**| Maximum number of proxies to return. | [optional] |
| **order_column** | [**EProxiesFiltersOrderColumn**](../Model/.md)| Sorts proxies by one of the proxy parameters. | [optional] |
| **order_asc** | **bool**| Sorts proxies in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters proxies by the &#x60;nameFilter&#x60; pattern. The pattern can match any proxy parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**EProxyType**](../Model/.md)| Filters proxies by proxy type. | [optional] |
| **host_id_filter** | **string**| Filters proxies by ID of the backup server. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProxiesResult**](../Model/ProxiesResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProxy()`

```php
getProxy($x_api_version, $id): \OpenAPI\Client\Model\ProxyModel
```

Get Proxy

The HTTP GET request to the `/api/v1/backupInfrastructure/proxies/{id}` path allows you to get a backup proxy that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProxiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup proxy.

try {
    $result = $apiInstance->getProxy($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxiesApi->getProxy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup proxy. | |

### Return type

[**\OpenAPI\Client\Model\ProxyModel**](../Model/ProxyModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProxy()`

```php
updateProxy($x_api_version, $id, $proxy_model): \OpenAPI\Client\Model\SessionModel
```

Edit Proxy

The HTTP PUT request to the `/api/v1/backupInfrastructure/proxies/{id}` path allows you to edit a backup proxy that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProxiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup proxy.
$proxy_model = new \OpenAPI\Client\Model\ProxyModel(); // \OpenAPI\Client\Model\ProxyModel

try {
    $result = $apiInstance->updateProxy($x_api_version, $id, $proxy_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxiesApi->updateProxy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup proxy. | |
| **proxy_model** | [**\OpenAPI\Client\Model\ProxyModel**](../Model/ProxyModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
