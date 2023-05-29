# OpenAPI\Client\CredentialsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changePasswordForCreds()**](CredentialsApi.md#changePasswordForCreds) | **POST** /api/v1/credentials/{id}/changepassword | Change Password |
| [**changePrivateKeyForCreds()**](CredentialsApi.md#changePrivateKeyForCreds) | **POST** /api/v1/credentials/{id}/changeprivatekey | Change Linux Private Key |
| [**changeRootPasswordForCreds()**](CredentialsApi.md#changeRootPasswordForCreds) | **POST** /api/v1/credentials/{id}/changerootpassword | Change Linux Root Password |
| [**createCreds()**](CredentialsApi.md#createCreds) | **POST** /api/v1/credentials | Add Credentials Record |
| [**deleteCreds()**](CredentialsApi.md#deleteCreds) | **DELETE** /api/v1/credentials/{id} | Remove Credentials Record |
| [**getAllCreds()**](CredentialsApi.md#getAllCreds) | **GET** /api/v1/credentials | Get All Credentials |
| [**getCreds()**](CredentialsApi.md#getCreds) | **GET** /api/v1/credentials/{id} | Get Credentials Record |
| [**updateCreds()**](CredentialsApi.md#updateCreds) | **PUT** /api/v1/credentials/{id} | Edit Credentials Record |


## `changePasswordForCreds()`

```php
changePasswordForCreds($x_api_version, $id, $credentials_password_change_spec): object
```

Change Password

The HTTP POST request to the `/api/v1/credentials/{id}/changepassword` path allows you to change a password of the credentials record that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the credentials record.
$credentials_password_change_spec = new \OpenAPI\Client\Model\CredentialsPasswordChangeSpec(); // \OpenAPI\Client\Model\CredentialsPasswordChangeSpec

try {
    $result = $apiInstance->changePasswordForCreds($x_api_version, $id, $credentials_password_change_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->changePasswordForCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the credentials record. | |
| **credentials_password_change_spec** | [**\OpenAPI\Client\Model\CredentialsPasswordChangeSpec**](../Model/CredentialsPasswordChangeSpec.md)|  | |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changePrivateKeyForCreds()`

```php
changePrivateKeyForCreds($x_api_version, $id, $private_key_change_spec): object
```

Change Linux Private Key

The HTTP POST request to the `/api/v1/credentials/{id}/changeprivatekey` path allows you to change a Linux private key of the credentials record that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the credentials record.
$private_key_change_spec = new \OpenAPI\Client\Model\PrivateKeyChangeSpec(); // \OpenAPI\Client\Model\PrivateKeyChangeSpec

try {
    $result = $apiInstance->changePrivateKeyForCreds($x_api_version, $id, $private_key_change_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->changePrivateKeyForCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the credentials record. | |
| **private_key_change_spec** | [**\OpenAPI\Client\Model\PrivateKeyChangeSpec**](../Model/PrivateKeyChangeSpec.md)|  | |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeRootPasswordForCreds()`

```php
changeRootPasswordForCreds($x_api_version, $id, $credentials_password_change_spec): object
```

Change Linux Root Password

The HTTP POST request to the `/api/v1/credentials/{id}/changerootpassword` path allows you to change a Linux root password of the credentials record that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the credentials record.
$credentials_password_change_spec = new \OpenAPI\Client\Model\CredentialsPasswordChangeSpec(); // \OpenAPI\Client\Model\CredentialsPasswordChangeSpec

try {
    $result = $apiInstance->changeRootPasswordForCreds($x_api_version, $id, $credentials_password_change_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->changeRootPasswordForCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the credentials record. | |
| **credentials_password_change_spec** | [**\OpenAPI\Client\Model\CredentialsPasswordChangeSpec**](../Model/CredentialsPasswordChangeSpec.md)|  | |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCreds()`

```php
createCreds($x_api_version, $credentials_spec): \OpenAPI\Client\Model\CredentialsModel
```

Add Credentials Record

The HTTP POST request to the `/api/v1/credentials` path allows you to add a credentials record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$credentials_spec = new \OpenAPI\Client\Model\CredentialsSpec(); // \OpenAPI\Client\Model\CredentialsSpec

try {
    $result = $apiInstance->createCreds($x_api_version, $credentials_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->createCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **credentials_spec** | [**\OpenAPI\Client\Model\CredentialsSpec**](../Model/CredentialsSpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CredentialsModel**](../Model/CredentialsModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCreds()`

```php
deleteCreds($x_api_version, $id): object
```

Remove Credentials Record

The HTTP DELETE request to the `/api/v1/credentials/{id}` path allows you to remove a credentials record that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the credentials record.

try {
    $result = $apiInstance->deleteCreds($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->deleteCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the credentials record. | |

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

## `getAllCreds()`

```php
getAllCreds($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter): \OpenAPI\Client\Model\CredentialsResult
```

Get All Credentials

The HTTP GET request to the `/api/v1/credentials` path allows you to get an array of credentials records that are added to the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of credentials records to skip.
$limit = 56; // int | Maximum number of credentials records to return.
$order_column = new \OpenAPI\Client\Model\ECredentialsFiltersOrderColumn(); // ECredentialsFiltersOrderColumn | Sorts credentials by one of the credentials parameters.
$order_asc = True; // bool | Sorts credentials in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters credentials by the `nameFilter` pattern. The pattern can match any credentials parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.

try {
    $result = $apiInstance->getAllCreds($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->getAllCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of credentials records to skip. | [optional] |
| **limit** | **int**| Maximum number of credentials records to return. | [optional] |
| **order_column** | [**ECredentialsFiltersOrderColumn**](../Model/.md)| Sorts credentials by one of the credentials parameters. | [optional] |
| **order_asc** | **bool**| Sorts credentials in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters credentials by the &#x60;nameFilter&#x60; pattern. The pattern can match any credentials parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CredentialsResult**](../Model/CredentialsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreds()`

```php
getCreds($x_api_version, $id): \OpenAPI\Client\Model\CredentialsModel
```

Get Credentials Record

The HTTP GET request to the `/api/v1/credentials/{id}` path allows you to get a credentials record that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the credentials record.

try {
    $result = $apiInstance->getCreds($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->getCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the credentials record. | |

### Return type

[**\OpenAPI\Client\Model\CredentialsModel**](../Model/CredentialsModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreds()`

```php
updateCreds($x_api_version, $id, $credentials_model): \OpenAPI\Client\Model\CredentialsModel
```

Edit Credentials Record

The HTTP PUT request to the `/api/v1/credentials/{id}` path allows you to edit a credentials record that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CredentialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the credentials record.
$credentials_model = new \OpenAPI\Client\Model\CredentialsModel(); // \OpenAPI\Client\Model\CredentialsModel

try {
    $result = $apiInstance->updateCreds($x_api_version, $id, $credentials_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsApi->updateCreds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the credentials record. | |
| **credentials_model** | [**\OpenAPI\Client\Model\CredentialsModel**](../Model/CredentialsModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CredentialsModel**](../Model/CredentialsModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
