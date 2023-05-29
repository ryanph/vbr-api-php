# OpenAPI\Client\ConfigurationBackupApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConfigBackupOptions()**](ConfigurationBackupApi.md#getConfigBackupOptions) | **GET** /api/v1/configBackup | Get Configuration Backup |
| [**startConfigBackup()**](ConfigurationBackupApi.md#startConfigBackup) | **POST** /api/v1/configBackup/backup | Start Configuration Backup |
| [**updateConfigBackupOptions()**](ConfigurationBackupApi.md#updateConfigBackupOptions) | **PUT** /api/v1/configBackup | Edit Configuration Backup |


## `getConfigBackupOptions()`

```php
getConfigBackupOptions($x_api_version): \OpenAPI\Client\Model\ConfigBackupModel
```

Get Configuration Backup

The HTTP GET request to the `/api/v1/configBackup` path allows you to get configuration backup of the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getConfigBackupOptions($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationBackupApi->getConfigBackupOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\ConfigBackupModel**](../Model/ConfigBackupModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startConfigBackup()`

```php
startConfigBackup($x_api_version): \OpenAPI\Client\Model\SessionModel
```

Start Configuration Backup

The HTTP POST request to the `/api/v1/configBackup` path allows you to start configuration backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->startConfigBackup($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationBackupApi->startConfigBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

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

## `updateConfigBackupOptions()`

```php
updateConfigBackupOptions($x_api_version, $config_backup_model): \OpenAPI\Client\Model\ConfigBackupModel
```

Edit Configuration Backup

The HTTP PUT request to the `/api/v1/configBackup` path allows you to edit configuration backup of the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$config_backup_model = new \OpenAPI\Client\Model\ConfigBackupModel(); // \OpenAPI\Client\Model\ConfigBackupModel

try {
    $result = $apiInstance->updateConfigBackupOptions($x_api_version, $config_backup_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationBackupApi->updateConfigBackupOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **config_backup_model** | [**\OpenAPI\Client\Model\ConfigBackupModel**](../Model/ConfigBackupModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigBackupModel**](../Model/ConfigBackupModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
