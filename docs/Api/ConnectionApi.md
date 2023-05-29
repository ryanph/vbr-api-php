# OpenAPI\Client\ConnectionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConnectionCertificate()**](ConnectionApi.md#getConnectionCertificate) | **POST** /api/v1/connectionCertificate | Request TLS Certificate or SSH Fingerprint |


## `getConnectionCertificate()`

```php
getConnectionCertificate($x_api_version, $host_connection_spec): \OpenAPI\Client\Model\ConnectionCertificateModel
```

Request TLS Certificate or SSH Fingerprint

The HTTP POST request to the `/api/v1/connectionCertificate` path allows you to get a TLS certificate or SSH fingerprint of the specified host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$host_connection_spec = new \OpenAPI\Client\Model\HostConnectionSpec(); // \OpenAPI\Client\Model\HostConnectionSpec

try {
    $result = $apiInstance->getConnectionCertificate($x_api_version, $host_connection_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getConnectionCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **host_connection_spec** | [**\OpenAPI\Client\Model\HostConnectionSpec**](../Model/HostConnectionSpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectionCertificateModel**](../Model/ConnectionCertificateModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
