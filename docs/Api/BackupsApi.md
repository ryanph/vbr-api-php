# OpenAPI\Client\BackupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllBackups()**](BackupsApi.md#getAllBackups) | **GET** /api/v1/backups | Get All Backups |
| [**getBackup()**](BackupsApi.md#getBackup) | **GET** /api/v1/backups/{id} | Get Backup |
| [**getBackupObjects()**](BackupsApi.md#getBackupObjects) | **GET** /api/v1/backups/{id}/objects | Get Backup Objects |


## `getAllBackups()`

```php
getAllBackups($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $created_after_filter, $created_before_filter, $platform_id_filter, $job_id_filter, $policy_tag_filter): \OpenAPI\Client\Model\BackupsResult
```

Get All Backups

The HTTP GET request to the `/api/v1/backups` path allows you to get an array of all backups that are created on or imported to the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of backups to skip.
$limit = 56; // int | Maximum number of backups to return.
$order_column = new \OpenAPI\Client\Model\EBackupsFiltersOrderColumn(); // EBackupsFiltersOrderColumn | Sorts backups by one of the backup parameters.
$order_asc = True; // bool | Sorts backups in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters backups by the `nameFilter` pattern. The pattern can match any backup parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$created_after_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns backups that are created after the specified date and time.
$created_before_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns backups that are created before the specified date and time.
$platform_id_filter = 'platform_id_filter_example'; // string | Filters backups by ID of the backup object platform.
$job_id_filter = 'job_id_filter_example'; // string | Filters backups by ID of the parent job.
$policy_tag_filter = 'policy_tag_filter_example'; // string | Filters backups by retention policy tag.

try {
    $result = $apiInstance->getAllBackups($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $created_after_filter, $created_before_filter, $platform_id_filter, $job_id_filter, $policy_tag_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getAllBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of backups to skip. | [optional] |
| **limit** | **int**| Maximum number of backups to return. | [optional] |
| **order_column** | [**EBackupsFiltersOrderColumn**](../Model/.md)| Sorts backups by one of the backup parameters. | [optional] |
| **order_asc** | **bool**| Sorts backups in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters backups by the &#x60;nameFilter&#x60; pattern. The pattern can match any backup parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **created_after_filter** | **\DateTime**| Returns backups that are created after the specified date and time. | [optional] |
| **created_before_filter** | **\DateTime**| Returns backups that are created before the specified date and time. | [optional] |
| **platform_id_filter** | **string**| Filters backups by ID of the backup object platform. | [optional] |
| **job_id_filter** | **string**| Filters backups by ID of the parent job. | [optional] |
| **policy_tag_filter** | **string**| Filters backups by retention policy tag. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackupsResult**](../Model/BackupsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackup()`

```php
getBackup($x_api_version, $id): \OpenAPI\Client\Model\BackupModel
```

Get Backup

The HTTP GET request to the `/api/v1/backups/{id}` path allows you to get a backup that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup.

try {
    $result = $apiInstance->getBackup($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup. | |

### Return type

[**\OpenAPI\Client\Model\BackupModel**](../Model/BackupModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupObjects()`

```php
getBackupObjects($x_api_version, $id): \OpenAPI\Client\Model\BackupObjectsResult
```

Get Backup Objects

The HTTP GET request to the `/api/v1/backups/{id}/objects` path allows you to get an array of virtual infrastructure objects (VMs and VM containers) that are inсluded in a backup that has the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the backup.

try {
    $result = $apiInstance->getBackupObjects($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackupObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the backup. | |

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
