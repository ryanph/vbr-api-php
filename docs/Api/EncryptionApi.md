# OpenAPI\Client\EncryptionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEncryptionPassword()**](EncryptionApi.md#createEncryptionPassword) | **POST** /api/v1/encryptionPasswords | Add Encryption Password |
| [**deleteEncryptionPassword()**](EncryptionApi.md#deleteEncryptionPassword) | **DELETE** /api/v1/encryptionPasswords/{id} | Remove Encryption Password |
| [**getAllEncryptionPasswords()**](EncryptionApi.md#getAllEncryptionPasswords) | **GET** /api/v1/encryptionPasswords | Get All Encryption Passwords |
| [**getEncryptionPassword()**](EncryptionApi.md#getEncryptionPassword) | **GET** /api/v1/encryptionPasswords/{id} | Get Encryption Password |
| [**updateEncryptionPassword()**](EncryptionApi.md#updateEncryptionPassword) | **PUT** /api/v1/encryptionPasswords/{id} | Edit Encryption Password |


## `createEncryptionPassword()`

```php
createEncryptionPassword($x_api_version, $encryption_password_spec): \OpenAPI\Client\Model\EncryptionPasswordModel
```

Add Encryption Password

The HTTP POST request to the `/api/v1/encryptionPasswords` path allows you to add an encryption password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EncryptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$encryption_password_spec = new \OpenAPI\Client\Model\EncryptionPasswordSpec(); // \OpenAPI\Client\Model\EncryptionPasswordSpec

try {
    $result = $apiInstance->createEncryptionPassword($x_api_version, $encryption_password_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EncryptionApi->createEncryptionPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **encryption_password_spec** | [**\OpenAPI\Client\Model\EncryptionPasswordSpec**](../Model/EncryptionPasswordSpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EncryptionPasswordModel**](../Model/EncryptionPasswordModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEncryptionPassword()`

```php
deleteEncryptionPassword($x_api_version, $id): object
```

Remove Encryption Password

The HTTP DELETE request to the `/api/v1/encryptionPasswords/{id}` path allows you to remove an encryption password that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EncryptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the encryption password.

try {
    $result = $apiInstance->deleteEncryptionPassword($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EncryptionApi->deleteEncryptionPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the encryption password. | |

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

## `getAllEncryptionPasswords()`

```php
getAllEncryptionPasswords($x_api_version, $skip, $limit, $order_column, $order_asc): \OpenAPI\Client\Model\EncryptionPasswordsResult
```

Get All Encryption Passwords

The HTTP GET request to the `/api/v1/encryptionPasswords` path allows you to get an array of all passwords that are used for data encryption.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EncryptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of passwords to skip.
$limit = 56; // int | Maximum number of passwords to return.
$order_column = new \OpenAPI\Client\Model\EEncryptionPasswordsFiltersOrderColumn(); // EEncryptionPasswordsFiltersOrderColumn | Sorts passwords by one of the password parameters.
$order_asc = True; // bool | Sorts passwords in the ascending order by the `orderColumn` parameter.

try {
    $result = $apiInstance->getAllEncryptionPasswords($x_api_version, $skip, $limit, $order_column, $order_asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EncryptionApi->getAllEncryptionPasswords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of passwords to skip. | [optional] |
| **limit** | **int**| Maximum number of passwords to return. | [optional] |
| **order_column** | [**EEncryptionPasswordsFiltersOrderColumn**](../Model/.md)| Sorts passwords by one of the password parameters. | [optional] |
| **order_asc** | **bool**| Sorts passwords in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EncryptionPasswordsResult**](../Model/EncryptionPasswordsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEncryptionPassword()`

```php
getEncryptionPassword($x_api_version, $id): \OpenAPI\Client\Model\EncryptionPasswordModel
```

Get Encryption Password

The HTTP GET request to the `/api/v1/encryptionPasswords/{id}` path allows you to get an encryption password that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EncryptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the encryption password.

try {
    $result = $apiInstance->getEncryptionPassword($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EncryptionApi->getEncryptionPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the encryption password. | |

### Return type

[**\OpenAPI\Client\Model\EncryptionPasswordModel**](../Model/EncryptionPasswordModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEncryptionPassword()`

```php
updateEncryptionPassword($x_api_version, $id, $encryption_password_model): \OpenAPI\Client\Model\EncryptionPasswordModel
```

Edit Encryption Password

The HTTP PUT request to the `/api/v1/encryptionPasswords/{id}` path allows you to edit an encryption password that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EncryptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the encryption password.
$encryption_password_model = new \OpenAPI\Client\Model\EncryptionPasswordModel(); // \OpenAPI\Client\Model\EncryptionPasswordModel

try {
    $result = $apiInstance->updateEncryptionPassword($x_api_version, $id, $encryption_password_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EncryptionApi->updateEncryptionPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the encryption password. | |
| **encryption_password_model** | [**\OpenAPI\Client\Model\EncryptionPasswordModel**](../Model/EncryptionPasswordModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EncryptionPasswordModel**](../Model/EncryptionPasswordModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
