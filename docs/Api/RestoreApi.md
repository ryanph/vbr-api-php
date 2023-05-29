# OpenAPI\Client\RestoreApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVmwareFcdInstantRecoveryMountModel()**](RestoreApi.md#getVmwareFcdInstantRecoveryMountModel) | **GET** /api/v1/restore/instantRecovery/vmware/fcd/{mountId} | Get Mount Information |
| [**instantRecoveryVmwareFcdDismount()**](RestoreApi.md#instantRecoveryVmwareFcdDismount) | **POST** /api/v1/restore/instantRecovery/vmware/fcd/{mountId}/dismount | Stop FCD Publishing |
| [**instantRecoveryVmwareFcdMigrate()**](RestoreApi.md#instantRecoveryVmwareFcdMigrate) | **POST** /api/v1/restore/instantRecovery/vmware/fcd/{mountId}/migrate | Start FCD Migration |
| [**instantRecoveryVmwareFcdMount()**](RestoreApi.md#instantRecoveryVmwareFcdMount) | **POST** /api/v1/restore/instantRecovery/vmware/fcd/ | Start Instant FCD Recovery |


## `getVmwareFcdInstantRecoveryMountModel()`

```php
getVmwareFcdInstantRecoveryMountModel($x_api_version, $mount_id): \OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount
```

Get Mount Information

The HTTP GET request to the `/api/v1/restore/instantRecovery/vmware/fcd/{mountId}` path allows you to get information about the mounted vPower NFS datastore, such as restore session ID, mount state, instant recovery settings and disks that will be recovered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$mount_id = 'mount_id_example'; // string | Mount ID.

try {
    $result = $apiInstance->getVmwareFcdInstantRecoveryMountModel($x_api_version, $mount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->getVmwareFcdInstantRecoveryMountModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **mount_id** | **string**| Mount ID. | |

### Return type

[**\OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount**](../Model/VmwareFcdInstantRecoveryMount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instantRecoveryVmwareFcdDismount()`

```php
instantRecoveryVmwareFcdDismount($x_api_version, $mount_id): \OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount
```

Stop FCD Publishing

The HTTP POST request to the `/api/v1/restore/instantRecovery/vmware/fcd/{mountId}/dismount` path allows you to stop publishing the recovered FCDs and remove the disks from the datastore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$mount_id = 'mount_id_example'; // string | Mount ID.

try {
    $result = $apiInstance->instantRecoveryVmwareFcdDismount($x_api_version, $mount_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->instantRecoveryVmwareFcdDismount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **mount_id** | **string**| Mount ID. | |

### Return type

[**\OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount**](../Model/VmwareFcdInstantRecoveryMount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instantRecoveryVmwareFcdMigrate()`

```php
instantRecoveryVmwareFcdMigrate($x_api_version, $mount_id, $vmware_fcd_quick_migration_spec): \OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount
```

Start FCD Migration

The HTTP POST request to the `/api/v1/restore/instantRecovery/vmware/fcd/{mountId}/migrate` path allows you to start migration of FCDs from the specified mount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$mount_id = 'mount_id_example'; // string | Mount ID.
$vmware_fcd_quick_migration_spec = new \OpenAPI\Client\Model\VmwareFcdQuickMigrationSpec(); // \OpenAPI\Client\Model\VmwareFcdQuickMigrationSpec

try {
    $result = $apiInstance->instantRecoveryVmwareFcdMigrate($x_api_version, $mount_id, $vmware_fcd_quick_migration_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->instantRecoveryVmwareFcdMigrate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **mount_id** | **string**| Mount ID. | |
| **vmware_fcd_quick_migration_spec** | [**\OpenAPI\Client\Model\VmwareFcdQuickMigrationSpec**](../Model/VmwareFcdQuickMigrationSpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount**](../Model/VmwareFcdInstantRecoveryMount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instantRecoveryVmwareFcdMount()`

```php
instantRecoveryVmwareFcdMount($x_api_version, $vmware_fcd_instant_recovery_spec): \OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount
```

Start Instant FCD Recovery

The HTTP POST request to the `/api/v1/restore/instantRecovery/vmware/fcd/` path allows you to start Instant FCD Recovery from the specified restore point to the specified cluster. For details on how to get a cluster model, see [Get VMware vSphere Server Objects](#operation/GetVmwareHostObject).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$vmware_fcd_instant_recovery_spec = new \OpenAPI\Client\Model\VmwareFcdInstantRecoverySpec(); // \OpenAPI\Client\Model\VmwareFcdInstantRecoverySpec

try {
    $result = $apiInstance->instantRecoveryVmwareFcdMount($x_api_version, $vmware_fcd_instant_recovery_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->instantRecoveryVmwareFcdMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **vmware_fcd_instant_recovery_spec** | [**\OpenAPI\Client\Model\VmwareFcdInstantRecoverySpec**](../Model/VmwareFcdInstantRecoverySpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmwareFcdInstantRecoveryMount**](../Model/VmwareFcdInstantRecoveryMount.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
