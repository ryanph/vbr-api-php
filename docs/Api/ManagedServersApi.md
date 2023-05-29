# OpenAPI\Client\ManagedServersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createManagedServer()**](ManagedServersApi.md#createManagedServer) | **POST** /api/v1/backupInfrastructure/managedServers | Add Server |
| [**deleteManagedServer()**](ManagedServersApi.md#deleteManagedServer) | **DELETE** /api/v1/backupInfrastructure/managedServers/{id} | Remove Server |
| [**getAllManagedServers()**](ManagedServersApi.md#getAllManagedServers) | **GET** /api/v1/backupInfrastructure/managedServers | Get All Servers |
| [**getManagedServer()**](ManagedServersApi.md#getManagedServer) | **GET** /api/v1/backupInfrastructure/managedServers/{id} | Get Server |
| [**updateManagedServer()**](ManagedServersApi.md#updateManagedServer) | **PUT** /api/v1/backupInfrastructure/managedServers/{id} | Edit Server |


## `createManagedServer()`

```php
createManagedServer($x_api_version, $managed_server_spec): \OpenAPI\Client\Model\SessionModel
```

Add Server

The HTTP POST request to the `/api/v1/backupInfrastructure/managedServers` path allows you to add a server to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagedServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$managed_server_spec = new \OpenAPI\Client\Model\ManagedServerSpec(); // \OpenAPI\Client\Model\ManagedServerSpec

try {
    $result = $apiInstance->createManagedServer($x_api_version, $managed_server_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedServersApi->createManagedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **managed_server_spec** | [**\OpenAPI\Client\Model\ManagedServerSpec**](../Model/ManagedServerSpec.md)|  | |

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

## `deleteManagedServer()`

```php
deleteManagedServer($x_api_version, $id): \OpenAPI\Client\Model\SessionModel
```

Remove Server

The HTTP DELETE request to the `/api/v1/backupInfrastructure/managedServers/{id}` path allows you to remove a managed server that has the specified `id` from the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagedServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the managed server.

try {
    $result = $apiInstance->deleteManagedServer($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedServersApi->deleteManagedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the managed server. | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllManagedServers()`

```php
getAllManagedServers($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter, $vi_type_filter): \OpenAPI\Client\Model\ManagedServersResult
```

Get All Servers

The HTTP GET request to the `/api/v1/backupInfrastructure/managedServers` path allows you to get an array of all servers that are added to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagedServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of servers to skip.
$limit = 56; // int | Maximum number of servers to return.
$order_column = new \OpenAPI\Client\Model\EManagedServersFiltersOrderColumn(); // EManagedServersFiltersOrderColumn | Sorts servers by one of the server parameters.
$order_asc = True; // bool | Sorts servers in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters servers by the `nameFilter` pattern. The pattern can match any server parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\EManagedServerType(); // EManagedServerType | Filters servers by server type.
$vi_type_filter = new \OpenAPI\Client\Model\EViHostType(); // EViHostType | Filters servers by the type of VMware vSphere server.

try {
    $result = $apiInstance->getAllManagedServers($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter, $vi_type_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedServersApi->getAllManagedServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of servers to skip. | [optional] |
| **limit** | **int**| Maximum number of servers to return. | [optional] |
| **order_column** | [**EManagedServersFiltersOrderColumn**](../Model/.md)| Sorts servers by one of the server parameters. | [optional] |
| **order_asc** | **bool**| Sorts servers in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters servers by the &#x60;nameFilter&#x60; pattern. The pattern can match any server parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**EManagedServerType**](../Model/.md)| Filters servers by server type. | [optional] |
| **vi_type_filter** | [**EViHostType**](../Model/.md)| Filters servers by the type of VMware vSphere server. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagedServersResult**](../Model/ManagedServersResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManagedServer()`

```php
getManagedServer($x_api_version, $id): \OpenAPI\Client\Model\ManagedServerModel
```

Get Server

The HTTP GET request to the `/api/v1/backupInfrastructure/managedServers/{id}` path allows you to get a managed server that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagedServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the managed server.

try {
    $result = $apiInstance->getManagedServer($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedServersApi->getManagedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the managed server. | |

### Return type

[**\OpenAPI\Client\Model\ManagedServerModel**](../Model/ManagedServerModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManagedServer()`

```php
updateManagedServer($x_api_version, $id, $managed_server_model): \OpenAPI\Client\Model\SessionModel
```

Edit Server

The HTTP PUT request to the `/api/v1/backupInfrastructure/managedServers/{id}` path allows you to edit a managed server that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagedServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the managed server.
$managed_server_model = new \OpenAPI\Client\Model\ManagedServerModel(); // \OpenAPI\Client\Model\ManagedServerModel

try {
    $result = $apiInstance->updateManagedServer($x_api_version, $id, $managed_server_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagedServersApi->updateManagedServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the managed server. | |
| **managed_server_model** | [**\OpenAPI\Client\Model\ManagedServerModel**](../Model/ManagedServerModel.md)|  | |

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
