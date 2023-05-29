# OpenAPI\Client\ServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getServerCertificate()**](ServiceApi.md#getServerCertificate) | **GET** /api/v1/serverCertificate | Get Server Certificate |
| [**getServerTime()**](ServiceApi.md#getServerTime) | **GET** /api/v1/serverTime | Get Server Time |


## `getServerCertificate()`

```php
getServerCertificate($x_api_version): \OpenAPI\Client\Model\CertificateModel
```

Get Server Certificate

The HTTP GET request to the `/api/v1/serverCertificate` path allows you to get a certificate of the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getServerCertificate($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServerCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\CertificateModel**](../Model/CertificateModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerTime()`

```php
getServerTime($x_api_version): \OpenAPI\Client\Model\ServerTimeModel
```

Get Server Time

The HTTP GET request to the `/api/v1/serverTime` path allows you to get current date and time on the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getServerTime($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServerTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\ServerTimeModel**](../Model/ServerTimeModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
