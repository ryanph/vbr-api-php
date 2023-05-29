# OpenAPI\Client\SessionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllSessions()**](SessionsApi.md#getAllSessions) | **GET** /api/v1/sessions | Get All Sessions |
| [**getSession()**](SessionsApi.md#getSession) | **GET** /api/v1/sessions/{id} | Get Session |
| [**getSessionLogs()**](SessionsApi.md#getSessionLogs) | **GET** /api/v1/sessions/{id}/logs | Get Session Logs |
| [**stopSession()**](SessionsApi.md#stopSession) | **POST** /api/v1/sessions/{id}/stop | Stop Session |


## `getAllSessions()`

```php
getAllSessions($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $created_after_filter, $created_before_filter, $ended_after_filter, $ended_before_filter, $type_filter, $state_filter, $result_filter, $job_id_filter): \OpenAPI\Client\Model\SessionsResult
```

Get All Sessions

The HTTP GET request to the `/api/v1/sessions` path allows you to get an array of sessions performed on the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of sessions to skip.
$limit = 56; // int | Maximum number of sessions to return.
$order_column = new \OpenAPI\Client\Model\ESessionsFiltersOrderColumn(); // ESessionsFiltersOrderColumn | Sorts sessions by one of the session parameters.
$order_asc = True; // bool | Sorts sessions in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters sessions by the `nameFilter` pattern. The pattern can match any session parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$created_after_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns sessions that are created after the specified date and time.
$created_before_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns sessions that are created before the specified date and time.
$ended_after_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns sessions that are finished after the specified date and time.
$ended_before_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns sessions that are finished before the specified date and time.
$type_filter = new \OpenAPI\Client\Model\ESessionType(); // ESessionType | Filters sessions by session type.
$state_filter = new \OpenAPI\Client\Model\ESessionState(); // ESessionState | Filters sessions by session state.
$result_filter = new \OpenAPI\Client\Model\ESessionResult(); // ESessionResult | Filters sessions by session result.
$job_id_filter = 'job_id_filter_example'; // string | Filters sessions by job ID.

try {
    $result = $apiInstance->getAllSessions($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $created_after_filter, $created_before_filter, $ended_after_filter, $ended_before_filter, $type_filter, $state_filter, $result_filter, $job_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getAllSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of sessions to skip. | [optional] |
| **limit** | **int**| Maximum number of sessions to return. | [optional] |
| **order_column** | [**ESessionsFiltersOrderColumn**](../Model/.md)| Sorts sessions by one of the session parameters. | [optional] |
| **order_asc** | **bool**| Sorts sessions in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters sessions by the &#x60;nameFilter&#x60; pattern. The pattern can match any session parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **created_after_filter** | **\DateTime**| Returns sessions that are created after the specified date and time. | [optional] |
| **created_before_filter** | **\DateTime**| Returns sessions that are created before the specified date and time. | [optional] |
| **ended_after_filter** | **\DateTime**| Returns sessions that are finished after the specified date and time. | [optional] |
| **ended_before_filter** | **\DateTime**| Returns sessions that are finished before the specified date and time. | [optional] |
| **type_filter** | [**ESessionType**](../Model/.md)| Filters sessions by session type. | [optional] |
| **state_filter** | [**ESessionState**](../Model/.md)| Filters sessions by session state. | [optional] |
| **result_filter** | [**ESessionResult**](../Model/.md)| Filters sessions by session result. | [optional] |
| **job_id_filter** | **string**| Filters sessions by job ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SessionsResult**](../Model/SessionsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSession()`

```php
getSession($id, $x_api_version): \OpenAPI\Client\Model\SessionModel
```

Get Session

The HTTP GET request to the `/api/v1/sessions/{id}` path allows you to get a session that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the session.
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getSession($id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the session. | |
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

## `getSessionLogs()`

```php
getSessionLogs($id, $x_api_version): \OpenAPI\Client\Model\SessionLogResult
```

Get Session Logs

The HTTP GET request to the `/api/v1/sessions/{id}/logs` path allows you to get an array of log records of a session that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the session.
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getSessionLogs($id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getSessionLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the session. | |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |

### Return type

[**\OpenAPI\Client\Model\SessionLogResult**](../Model/SessionLogResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopSession()`

```php
stopSession($id, $x_api_version): object
```

Stop Session

The HTTP POST request to the `/api/v1/sessions/{id}/stop` path allows you to stop a session that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the session.
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->stopSession($id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->stopSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the session. | |
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
