# OpenAPI\Client\ObjectRestorePointsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllObjectRestorePoints()**](ObjectRestorePointsApi.md#getAllObjectRestorePoints) | **GET** /api/v1/objectRestorePoints | Get All Restore Points |
| [**getObjectRestorePoint()**](ObjectRestorePointsApi.md#getObjectRestorePoint) | **GET** /api/v1/objectRestorePoints/{id} | Get Restore Point |
| [**getObjectRestorePointDisks()**](ObjectRestorePointsApi.md#getObjectRestorePointDisks) | **GET** /api/v1/objectRestorePoints/{id}/disks | Get Restore Point Disks |


## `getAllObjectRestorePoints()`

```php
getAllObjectRestorePoints($x_api_version, $skip, $limit, $order_column, $order_asc, $created_after_filter, $created_before_filter, $name_filter, $platform_name_filter, $platform_id_filter, $backup_id_filter, $backup_object_id_filter): \OpenAPI\Client\Model\ObjectRestorePointsResult
```

Get All Restore Points

The HTTP GET request to the `/api/v1/objectRestorePoints` path allows you to get an array of all restore points created on the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectRestorePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of restore points to skip.
$limit = 56; // int | Maximum number of restore points to return.
$order_column = new \OpenAPI\Client\Model\EObjectRestorePointsFiltersOrderColumn(); // EObjectRestorePointsFiltersOrderColumn | Sorts restore points by one of the restore point parameters.
$order_asc = True; // bool | Sorts restore points in the ascending order by the `orderColumn` parameter.
$created_after_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns restore points that are created after the specified date and time.
$created_before_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns restore points that are created before the specified date and time.
$name_filter = 'name_filter_example'; // string | Filters restore points by the `nameFilter` pattern. The pattern can match any restore point parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$platform_name_filter = new \OpenAPI\Client\Model\EPlatformType(); // EPlatformType | Filters restore points by name of the backup object platform.
$platform_id_filter = 'platform_id_filter_example'; // string | Filters restore points by ID of the backup object platform.
$backup_id_filter = 'backup_id_filter_example'; // string | Filters restore points by backup ID.
$backup_object_id_filter = 'backup_object_id_filter_example'; // string | Filters restore points by backup object ID.

try {
    $result = $apiInstance->getAllObjectRestorePoints($x_api_version, $skip, $limit, $order_column, $order_asc, $created_after_filter, $created_before_filter, $name_filter, $platform_name_filter, $platform_id_filter, $backup_id_filter, $backup_object_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRestorePointsApi->getAllObjectRestorePoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of restore points to skip. | [optional] |
| **limit** | **int**| Maximum number of restore points to return. | [optional] |
| **order_column** | [**EObjectRestorePointsFiltersOrderColumn**](../Model/.md)| Sorts restore points by one of the restore point parameters. | [optional] |
| **order_asc** | **bool**| Sorts restore points in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **created_after_filter** | **\DateTime**| Returns restore points that are created after the specified date and time. | [optional] |
| **created_before_filter** | **\DateTime**| Returns restore points that are created before the specified date and time. | [optional] |
| **name_filter** | **string**| Filters restore points by the &#x60;nameFilter&#x60; pattern. The pattern can match any restore point parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **platform_name_filter** | [**EPlatformType**](../Model/.md)| Filters restore points by name of the backup object platform. | [optional] |
| **platform_id_filter** | **string**| Filters restore points by ID of the backup object platform. | [optional] |
| **backup_id_filter** | **string**| Filters restore points by backup ID. | [optional] |
| **backup_object_id_filter** | **string**| Filters restore points by backup object ID. | [optional] |

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

## `getObjectRestorePoint()`

```php
getObjectRestorePoint($x_api_version, $id): \OpenAPI\Client\Model\ObjectRestorePointModel
```

Get Restore Point

The HTTP GET request to the `/api/v1/objectRestorePoints/{id}` path allows you to get a restore point that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectRestorePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the restore point.

try {
    $result = $apiInstance->getObjectRestorePoint($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRestorePointsApi->getObjectRestorePoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the restore point. | |

### Return type

[**\OpenAPI\Client\Model\ObjectRestorePointModel**](../Model/ObjectRestorePointModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectRestorePointDisks()`

```php
getObjectRestorePointDisks($x_api_version, $id): \OpenAPI\Client\Model\ObjectRestorePointDisksResult
```

Get Restore Point Disks

The HTTP GET request to the `/api/v1/objectRestorePoints/{id}/disks` path allows you to get an array of disks from a restore point that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ObjectRestorePointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the restore point.

try {
    $result = $apiInstance->getObjectRestorePointDisks($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectRestorePointsApi->getObjectRestorePointDisks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the restore point. | |

### Return type

[**\OpenAPI\Client\Model\ObjectRestorePointDisksResult**](../Model/ObjectRestorePointDisksResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
