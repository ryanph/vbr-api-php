# OpenAPI\Client\RepositoriesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRepository()**](RepositoriesApi.md#createRepository) | **POST** /api/v1/backupInfrastructure/repositories | Add Repository |
| [**deleteRepository()**](RepositoriesApi.md#deleteRepository) | **DELETE** /api/v1/backupInfrastructure/repositories/{id} | Remove Repository |
| [**disableScaleOutExtentMaintenanceMode()**](RepositoriesApi.md#disableScaleOutExtentMaintenanceMode) | **POST** /api/v1/backupInfrastructure/scaleOutRepositories/{id}/disableMaintenanceMode | Disable Maintenance Mode |
| [**enableScaleOutExtentMaintenanceMode()**](RepositoriesApi.md#enableScaleOutExtentMaintenanceMode) | **POST** /api/v1/backupInfrastructure/scaleOutRepositories/{id}/enableMaintenanceMode | Enable Maintenance Mode |
| [**getAllRepositories()**](RepositoriesApi.md#getAllRepositories) | **GET** /api/v1/backupInfrastructure/repositories | Get All Repositories |
| [**getAllRepositoriesStates()**](RepositoriesApi.md#getAllRepositoriesStates) | **GET** /api/v1/backupInfrastructure/repositories/states | Get All Repository States |
| [**getAllScaleOutRepositories()**](RepositoriesApi.md#getAllScaleOutRepositories) | **GET** /api/v1/backupInfrastructure/scaleOutRepositories | Get All Scale-Out Backup Repositories |
| [**getRepository()**](RepositoriesApi.md#getRepository) | **GET** /api/v1/backupInfrastructure/repositories/{id} | Get Repository |
| [**getScaleOutRepository()**](RepositoriesApi.md#getScaleOutRepository) | **GET** /api/v1/backupInfrastructure/scaleOutRepositories/{id} | Get Scale-Out Backup Repository |
| [**updateRepository()**](RepositoriesApi.md#updateRepository) | **PUT** /api/v1/backupInfrastructure/repositories/{id} | Edit Repository |


## `createRepository()`

```php
createRepository($x_api_version, $repository_spec): \OpenAPI\Client\Model\SessionModel
```

Add Repository

The HTTP POST request to the `/api/v1/backupInfrastructure/repositories` path allows you to add a repository to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$repository_spec = new \OpenAPI\Client\Model\RepositorySpec(); // \OpenAPI\Client\Model\RepositorySpec

try {
    $result = $apiInstance->createRepository($x_api_version, $repository_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->createRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **repository_spec** | [**\OpenAPI\Client\Model\RepositorySpec**](../Model/RepositorySpec.md)|  | |

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

## `deleteRepository()`

```php
deleteRepository($x_api_version, $id, $delete_backups): object
```

Remove Repository

The HTTP DELETE request to the `/api/v1/backupInfrastructure/repositories/{id}` path allows you to remove a backup repository that has the specified `id` from the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup repository.
$delete_backups = True; // bool | If *true*, Veeam Backup & Replication will remove backup files.

try {
    $result = $apiInstance->deleteRepository($x_api_version, $id, $delete_backups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->deleteRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup repository. | |
| **delete_backups** | **bool**| If *true*, Veeam Backup &amp; Replication will remove backup files. | [optional] |

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

## `disableScaleOutExtentMaintenanceMode()`

```php
disableScaleOutExtentMaintenanceMode($x_api_version, $id, $scale_out_extent_maintenance_spec): \OpenAPI\Client\Model\SessionModel
```

Disable Maintenance Mode

The HTTP POST request to the `/api/v1/backupInfrastructure/scaleOutRepositories/{id}/disableMaintenanceMode` path allows you to disable maintenance mode for a scale-out backup repository extent that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the scale-out backup repository extent.
$scale_out_extent_maintenance_spec = new \OpenAPI\Client\Model\ScaleOutExtentMaintenanceSpec(); // \OpenAPI\Client\Model\ScaleOutExtentMaintenanceSpec

try {
    $result = $apiInstance->disableScaleOutExtentMaintenanceMode($x_api_version, $id, $scale_out_extent_maintenance_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->disableScaleOutExtentMaintenanceMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the scale-out backup repository extent. | |
| **scale_out_extent_maintenance_spec** | [**\OpenAPI\Client\Model\ScaleOutExtentMaintenanceSpec**](../Model/ScaleOutExtentMaintenanceSpec.md)|  | |

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

## `enableScaleOutExtentMaintenanceMode()`

```php
enableScaleOutExtentMaintenanceMode($x_api_version, $id, $scale_out_extent_maintenance_spec): \OpenAPI\Client\Model\SessionModel
```

Enable Maintenance Mode

The HTTP POST request to the `/api/v1/backupInfrastructure/scaleOutRepositories/{id}/enableMaintenanceMode` path allows you to enable maintenance mode for a scale-out backup repository extent that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the scale-out backup repository extent.
$scale_out_extent_maintenance_spec = new \OpenAPI\Client\Model\ScaleOutExtentMaintenanceSpec(); // \OpenAPI\Client\Model\ScaleOutExtentMaintenanceSpec

try {
    $result = $apiInstance->enableScaleOutExtentMaintenanceMode($x_api_version, $id, $scale_out_extent_maintenance_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->enableScaleOutExtentMaintenanceMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the scale-out backup repository extent. | |
| **scale_out_extent_maintenance_spec** | [**\OpenAPI\Client\Model\ScaleOutExtentMaintenanceSpec**](../Model/ScaleOutExtentMaintenanceSpec.md)|  | |

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

## `getAllRepositories()`

```php
getAllRepositories($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter, $host_id_filter, $path_filter, $vmb_api_filter): \OpenAPI\Client\Model\RepositoriesResult
```

Get All Repositories

The HTTP GET request to the `/api/v1/backupInfrastructure/repositories` path allows you to get an array of all backup repositories that are added to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of repositories to skip.
$limit = 56; // int | Maximum number of repositories to return.
$order_column = new \OpenAPI\Client\Model\ERepositoryFiltersOrderColumn(); // ERepositoryFiltersOrderColumn | Sorts repositories by one of the repository parameters.
$order_asc = True; // bool | Sorts repositories in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters repositories by the `nameFilter` pattern. The pattern can match any repository parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\ERepositoryType(); // ERepositoryType | Filters repositories by repository type.
$host_id_filter = 'host_id_filter_example'; // string | Filters repositories by ID of the backup server.
$path_filter = 'path_filter_example'; // string | Filters repositories by path to the folder where backup files are stored.
$vmb_api_filter = 'vmb_api_filter_example'; // string | Filters repositories by VM Backup API parameters converted to the base64 string.<br> To compose the base64 string:<br> <ol>   <li>Prepare VM Backup API parameters in the JSON format.</li>   <code>{<br>   \"protocolVersion\":\"string\",<br>   \"assemblyVersion\":\"string\",<br>   \"productId\":\"string\",<br>   \"versionFlags\":\"string\"<br>   }<br></code>   <li>Convert the JSON object into a string.</li>   <li>Encode the string with base64 encoding.</li> </ol>

try {
    $result = $apiInstance->getAllRepositories($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter, $host_id_filter, $path_filter, $vmb_api_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getAllRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of repositories to skip. | [optional] |
| **limit** | **int**| Maximum number of repositories to return. | [optional] |
| **order_column** | [**ERepositoryFiltersOrderColumn**](../Model/.md)| Sorts repositories by one of the repository parameters. | [optional] |
| **order_asc** | **bool**| Sorts repositories in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters repositories by the &#x60;nameFilter&#x60; pattern. The pattern can match any repository parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**ERepositoryType**](../Model/.md)| Filters repositories by repository type. | [optional] |
| **host_id_filter** | **string**| Filters repositories by ID of the backup server. | [optional] |
| **path_filter** | **string**| Filters repositories by path to the folder where backup files are stored. | [optional] |
| **vmb_api_filter** | **string**| Filters repositories by VM Backup API parameters converted to the base64 string.&lt;br&gt; To compose the base64 string:&lt;br&gt; &lt;ol&gt;   &lt;li&gt;Prepare VM Backup API parameters in the JSON format.&lt;/li&gt;   &lt;code&gt;{&lt;br&gt;   \&quot;protocolVersion\&quot;:\&quot;string\&quot;,&lt;br&gt;   \&quot;assemblyVersion\&quot;:\&quot;string\&quot;,&lt;br&gt;   \&quot;productId\&quot;:\&quot;string\&quot;,&lt;br&gt;   \&quot;versionFlags\&quot;:\&quot;string\&quot;&lt;br&gt;   }&lt;br&gt;&lt;/code&gt;   &lt;li&gt;Convert the JSON object into a string.&lt;/li&gt;   &lt;li&gt;Encode the string with base64 encoding.&lt;/li&gt; &lt;/ol&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\RepositoriesResult**](../Model/RepositoriesResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllRepositoriesStates()`

```php
getAllRepositoriesStates($x_api_version, $skip, $limit, $order_column, $order_asc, $id_filter, $name_filter, $type_filter, $capacity_filter, $free_space_filter, $used_space_filter): \OpenAPI\Client\Model\RepositoryStatesResult
```

Get All Repository States

The HTTP GET request to the `/api/v1/backupInfrastructure/repositories/states` path allows you to get an array of all repository states. The states include repository location and brief statistics, such as repository capacity, free and used space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of repository states to skip.
$limit = 56; // int | Maximum number of repository states to return.
$order_column = new \OpenAPI\Client\Model\ERepositoryStatesFiltersOrderColumn(); // ERepositoryStatesFiltersOrderColumn | Sorts repository states by one of the state parameters.
$order_asc = True; // bool | Sorts repository states in the ascending order by the `orderColumn` parameter.
$id_filter = 'id_filter_example'; // string | Filters repository states by repository ID.
$name_filter = 'name_filter_example'; // string | Filters repository states by the `nameFilter` pattern. The pattern can match any repository state parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\ERepositoryType(); // ERepositoryType | Filters repository states by repository type.
$capacity_filter = 3.4; // float | Filters repository states by repository capacity.
$free_space_filter = 3.4; // float | Filters repository states by repository free space.
$used_space_filter = 3.4; // float | Filters repository states by repository used space.

try {
    $result = $apiInstance->getAllRepositoriesStates($x_api_version, $skip, $limit, $order_column, $order_asc, $id_filter, $name_filter, $type_filter, $capacity_filter, $free_space_filter, $used_space_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getAllRepositoriesStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of repository states to skip. | [optional] |
| **limit** | **int**| Maximum number of repository states to return. | [optional] |
| **order_column** | [**ERepositoryStatesFiltersOrderColumn**](../Model/.md)| Sorts repository states by one of the state parameters. | [optional] |
| **order_asc** | **bool**| Sorts repository states in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **id_filter** | **string**| Filters repository states by repository ID. | [optional] |
| **name_filter** | **string**| Filters repository states by the &#x60;nameFilter&#x60; pattern. The pattern can match any repository state parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**ERepositoryType**](../Model/.md)| Filters repository states by repository type. | [optional] |
| **capacity_filter** | **float**| Filters repository states by repository capacity. | [optional] |
| **free_space_filter** | **float**| Filters repository states by repository free space. | [optional] |
| **used_space_filter** | **float**| Filters repository states by repository used space. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RepositoryStatesResult**](../Model/RepositoryStatesResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllScaleOutRepositories()`

```php
getAllScaleOutRepositories($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter): \OpenAPI\Client\Model\ScaleOutRepositoriesResult
```

Get All Scale-Out Backup Repositories

The HTTP GET request to the `/api/v1/backupInfrastructure/scaleOutRepositories` path allows you to get an array of all scale-out backup repositories that are added to the backup infrastructure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of repositories to skip.
$limit = 56; // int | Maximum number of repositories to return.
$order_column = new \OpenAPI\Client\Model\EScaleOutRepositoryFiltersOrderColumn(); // EScaleOutRepositoryFiltersOrderColumn | Sorts repositories by one of the repository parameters.
$order_asc = True; // bool | Sorts repositories in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters repositories by the `nameFilter` substring. The substring can be part of any repository parameter.

try {
    $result = $apiInstance->getAllScaleOutRepositories($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getAllScaleOutRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of repositories to skip. | [optional] |
| **limit** | **int**| Maximum number of repositories to return. | [optional] |
| **order_column** | [**EScaleOutRepositoryFiltersOrderColumn**](../Model/.md)| Sorts repositories by one of the repository parameters. | [optional] |
| **order_asc** | **bool**| Sorts repositories in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters repositories by the &#x60;nameFilter&#x60; substring. The substring can be part of any repository parameter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScaleOutRepositoriesResult**](../Model/ScaleOutRepositoriesResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRepository()`

```php
getRepository($x_api_version, $id): \OpenAPI\Client\Model\RepositoryModel
```

Get Repository

The HTTP GET request to the `/api/v1/backupInfrastructure/repositories/{id}` path allows you to get a backup repository that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup repository.

try {
    $result = $apiInstance->getRepository($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup repository. | |

### Return type

[**\OpenAPI\Client\Model\RepositoryModel**](../Model/RepositoryModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScaleOutRepository()`

```php
getScaleOutRepository($x_api_version, $id): \OpenAPI\Client\Model\ScaleOutRepositoryModel
```

Get Scale-Out Backup Repository

The HTTP GET request to the `/api/v1/backupInfrastructure/scaleOutRepositories/{id}` path allows you to get a scale-out backup repository that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the scale-out backup repository.

try {
    $result = $apiInstance->getScaleOutRepository($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->getScaleOutRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the scale-out backup repository. | |

### Return type

[**\OpenAPI\Client\Model\ScaleOutRepositoryModel**](../Model/ScaleOutRepositoryModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRepository()`

```php
updateRepository($x_api_version, $id, $repository_model): \OpenAPI\Client\Model\SessionModel
```

Edit Repository

The HTTP PUT request to the `/api/v1/backupInfrastructure/repositories/{id}` path allows you to edit a backup repository that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup repository.
$repository_model = new \OpenAPI\Client\Model\RepositoryModel(); // \OpenAPI\Client\Model\RepositoryModel

try {
    $result = $apiInstance->updateRepository($x_api_version, $id, $repository_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->updateRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup repository. | |
| **repository_model** | [**\OpenAPI\Client\Model\RepositoryModel**](../Model/RepositoryModel.md)|  | |

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
