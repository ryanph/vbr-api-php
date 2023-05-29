# OpenAPI\Client\LoginApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAuthorizationCode()**](LoginApi.md#createAuthorizationCode) | **POST** /api/oauth2/authorization_code | Get Authorization Code |
| [**createToken()**](LoginApi.md#createToken) | **POST** /api/oauth2/token | Get Access Token |
| [**logout()**](LoginApi.md#logout) | **POST** /api/oauth2/logout | Log Out |


## `createAuthorizationCode()`

```php
createAuthorizationCode($x_api_version): \OpenAPI\Client\Model\AuthorizationCodeModel
```

Get Authorization Code

The HTTP POST request to the `/api/oauth2/authorization_code` path allows you to get an authorization code that is used to obtain an access token. For more information on authorization process, see [Requesting Authorization](https://helpcenter.veeam.com/docs/backup/vbr_rest/requesting_authorization.html?ver=110).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->createAuthorizationCode($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->createAuthorizationCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\AuthorizationCodeModel**](../Model/AuthorizationCodeModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createToken()`

```php
createToken($x_api_version, $grant_type, $username, $password, $refresh_token, $code, $use_short_term_refresh): \OpenAPI\Client\Model\TokenModel
```

Get Access Token

The HTTP POST request to the `/api/oauth2/token` path allows you to get an access token and a refresh token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$grant_type = new \OpenAPI\Client\Model\ELoginGrantType(); // \OpenAPI\Client\Model\ELoginGrantType
$username = 'username_example'; // string | User name. Required if the `grant_type` value is `password`.
$password = 'password_example'; // string | Password. Required if the `grant_type` value is `password`.
$refresh_token = 'refresh_token_example'; // string | Refresh token. Required if the `grant_type` value is `refresh_token`.
$code = 'code_example'; // string | Authorization code. Required if the `grant_type` value is `authorization_code`.
$use_short_term_refresh = True; // bool | If *true*, a short-term refresh token is used. Lifetime of the short-term refresh token is the access token lifetime plus 15 minutes.

try {
    $result = $apiInstance->createToken($x_api_version, $grant_type, $username, $password, $refresh_token, $code, $use_short_term_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **grant_type** | [**\OpenAPI\Client\Model\ELoginGrantType**](../Model/ELoginGrantType.md)|  | |
| **username** | **string**| User name. Required if the &#x60;grant_type&#x60; value is &#x60;password&#x60;. | [optional] |
| **password** | **string**| Password. Required if the &#x60;grant_type&#x60; value is &#x60;password&#x60;. | [optional] |
| **refresh_token** | **string**| Refresh token. Required if the &#x60;grant_type&#x60; value is &#x60;refresh_token&#x60;. | [optional] |
| **code** | **string**| Authorization code. Required if the &#x60;grant_type&#x60; value is &#x60;authorization_code&#x60;. | [optional] |
| **use_short_term_refresh** | **bool**| If *true*, a short-term refresh token is used. Lifetime of the short-term refresh token is the access token lifetime plus 15 minutes. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TokenModel**](../Model/TokenModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout($x_api_version): object
```

Log Out

The HTTP POST request to the `/api/oauth2/logout` path allows you to perform the logout operation. After you log out, access and refresh tokens are expired.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->logout($x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->logout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

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
