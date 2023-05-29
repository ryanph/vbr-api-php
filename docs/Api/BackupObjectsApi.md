# OpenAPI\Client\BackupObjectsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllBackupObjects()**](BackupObjectsApi.md#getAllBackupObjects) | **GET** /api/v1/backupObjects | Get All Backup Objects |
| [**getBackupObject()**](BackupObjectsApi.md#getBackupObject) | **GET** /api/v1/backupObjects/{id} | Get Backup Object |
| [**getBackupObjectRestorePoints()**](BackupObjectsApi.md#getBackupObjectRestorePoints) | **GET** /api/v1/backupObjects/{id}/restorePoints | Get Restore Points |


## `getAllBackupObjects()`

```php
getAllBackupObjects($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $platform_name_filter, $platform_id_filter, $type_filter, $vi_type_filter): \OpenAPI\Client\Model\BackupObjectsResult
```

Get All Backup Objects

The HTTP GET request to the `/api/v1/backupObjects` path allows you to get an array of virtual infrastructure objects (VMs and VM containers) that are inсluded in backups created by the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BackupObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of backup objects to skip.
$limit = 56; // int | Maximum number of backup objects to return.
$order_column = new \OpenAPI\Client\Model\EBackupObjectsFiltersOrderColumn(); // EBackupObjectsFiltersOrderColumn | Sorts backup objects by one of the backup object parameters.
$order_asc = True; // bool | Sorts backup objects in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters backup objects by the `nameFilter` pattern. The pattern can match any backup object parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$platform_name_filter = new \OpenAPI\Client\Model\EPlatformType(); // EPlatformType | Filters backup objects by platform ID.
$platform_id_filter = 'platform_id_filter_example'; // string | Filters backup objects by platform ID.
$type_filter = 'type_filter_example'; // string | Filters backup objects by object type.
$vi_type_filter = 'vi_type_filter_example'; // string | Filters backup objects by the type of VMware vSphere server.

try {
    $result = $apiInstance->getAllBackupObjects($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $platform_name_filter, $platform_id_filter, $type_filter, $vi_type_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupObjectsApi->getAllBackupObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of backup objects to skip. | [optional] |
| **limit** | **int**| Maximum number of backup objects to return. | [optional] |
| **order_column** | [**EBackupObjectsFiltersOrderColumn**](../Model/.md)| Sorts backup objects by one of the backup object parameters. | [optional] |
| **order_asc** | **bool**| Sorts backup objects in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters backup objects by the &#x60;nameFilter&#x60; pattern. The pattern can match any backup object parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **platform_name_filter** | [**EPlatformType**](../Model/.md)| Filters backup objects by platform ID. | [optional] |
| **platform_id_filter** | **string**| Filters backup objects by platform ID. | [optional] |
| **type_filter** | **string**| Filters backup objects by object type. | [optional] |
| **vi_type_filter** | **string**| Filters backup objects by the type of VMware vSphere server. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupObjectsResult**](../Model/BackupObjectsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupObject()`

```php
getBackupObject($x_api_version, $id): \OpenAPI\Client\Model\BackupObjectModel
```

Get Backup Object

The HTTP GET request to the `/api/v1/backupObjects/{id}` path allows you to get a backup object that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BackupObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup object.

try {
    $result = $apiInstance->getBackupObject($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupObjectsApi->getBackupObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup object. | |

### Return type

[**\OpenAPI\Client\Model\BackupObjectModel**](../Model/BackupObjectModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupObjectRestorePoints()`

```php
getBackupObjectRestorePoints($x_api_version, $id): \OpenAPI\Client\Model\ObjectRestorePointsResult
```

Get Restore Points

The HTTP GET request to the `/api/v1/backupObjects/{id}/restorePoints` path allows you to get an array of restore points of a backup object that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BackupObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup object.

try {
    $result = $apiInstance->getBackupObjectRestorePoints($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupObjectsApi->getBackupObjectRestorePoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup object. | |

### Return type

[**\OpenAPI\Client\Model\ObjectRestorePointsResult**](../Model/ObjectRestorePointsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
