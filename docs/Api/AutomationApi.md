# OpenAPI\Client\AutomationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportCredentials()**](AutomationApi.md#exportCredentials) | **POST** /api/v1/automation/credentials/export | Export Credentials |
| [**exportEncryptionPasswords()**](AutomationApi.md#exportEncryptionPasswords) | **POST** /api/v1/automation/encryptionPasswords/export | Export Encryption Passwords |
| [**exportJobs()**](AutomationApi.md#exportJobs) | **POST** /api/v1/automation/jobs/export | Export Jobs |
| [**exportManagedServers()**](AutomationApi.md#exportManagedServers) | **POST** /api/v1/automation/managedServers/export | Export Servers |
| [**exportProxies()**](AutomationApi.md#exportProxies) | **POST** /api/v1/automation/proxies/export | Export Proxies |
| [**exportRepositories()**](AutomationApi.md#exportRepositories) | **POST** /api/v1/automation/repositories/export | Export Repositories |
| [**getAllAutomationSessions()**](AutomationApi.md#getAllAutomationSessions) | **GET** /api/v1/automation/sessions | Get All Automation Sessions |
| [**getAutomationSession()**](AutomationApi.md#getAutomationSession) | **GET** /api/v1/automation/sessions/{id} | Get Automation Session |
| [**getAutomationSessionLogs()**](AutomationApi.md#getAutomationSessionLogs) | **GET** /api/v1/automation/sessions/{id}/logs | Get Automation Session Logs |
| [**importCredentials()**](AutomationApi.md#importCredentials) | **POST** /api/v1/automation/credentials/import | Import Credentials |
| [**importEncryptionPasswords()**](AutomationApi.md#importEncryptionPasswords) | **POST** /api/v1/automation/encryptionPasswords/import | Import Encryption Passwords |
| [**importJobs()**](AutomationApi.md#importJobs) | **POST** /api/v1/automation/jobs/import | Import Jobs |
| [**importManagedServers()**](AutomationApi.md#importManagedServers) | **POST** /api/v1/automation/managedServers/import | Import Servers |
| [**importProxies()**](AutomationApi.md#importProxies) | **POST** /api/v1/automation/proxies/import | Import Proxies |
| [**importRepositories()**](AutomationApi.md#importRepositories) | **POST** /api/v1/automation/repositories/import | Import Repositories |
| [**stopAutomationSession()**](AutomationApi.md#stopAutomationSession) | **POST** /api/v1/automation/sessions/{id}/stop | Stop Automation Session |


## `exportCredentials()`

```php
exportCredentials($x_api_version, $credentials_export_spec): \OpenAPI\Client\Model\CredentialsImportSpecCollection
```

Export Credentials

The HTTP POST request to the `/api/v1/automation/credentials/export` path allows you to export credentials from Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$credentials_export_spec = new \OpenAPI\Client\Model\CredentialsExportSpec(); // \OpenAPI\Client\Model\CredentialsExportSpec

try {
    $result = $apiInstance->exportCredentials($x_api_version, $credentials_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **credentials_export_spec** | [**\OpenAPI\Client\Model\CredentialsExportSpec**](../Model/CredentialsExportSpec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CredentialsImportSpecCollection**](../Model/CredentialsImportSpecCollection.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportEncryptionPasswords()`

```php
exportEncryptionPasswords($x_api_version, $encryption_password_export_spec): \OpenAPI\Client\Model\EncryptionPasswordImportSpecCollection
```

Export Encryption Passwords

The HTTP POST request to the `/api/v1/automation/encryptionPasswords/export` path allows you to export encryption passwords from Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$encryption_password_export_spec = new \OpenAPI\Client\Model\EncryptionPasswordExportSpec(); // \OpenAPI\Client\Model\EncryptionPasswordExportSpec

try {
    $result = $apiInstance->exportEncryptionPasswords($x_api_version, $encryption_password_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportEncryptionPasswords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **encryption_password_export_spec** | [**\OpenAPI\Client\Model\EncryptionPasswordExportSpec**](../Model/EncryptionPasswordExportSpec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EncryptionPasswordImportSpecCollection**](../Model/EncryptionPasswordImportSpecCollection.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportJobs()`

```php
exportJobs($x_api_version, $job_export_spec): \OpenAPI\Client\Model\JobImportSpecCollection
```

Export Jobs

The HTTP POST request to the `/api/v1/automation/jobs/export` path allows you to export jobs from Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$job_export_spec = new \OpenAPI\Client\Model\JobExportSpec(); // \OpenAPI\Client\Model\JobExportSpec

try {
    $result = $apiInstance->exportJobs($x_api_version, $job_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **job_export_spec** | [**\OpenAPI\Client\Model\JobExportSpec**](../Model/JobExportSpec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobImportSpecCollection**](../Model/JobImportSpecCollection.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportManagedServers()`

```php
exportManagedServers($x_api_version, $manage_server_export_spec): \OpenAPI\Client\Model\ManageServerImportSpecCollection
```

Export Servers

The HTTP POST request to the `/api/v1/automation/managedServers/export` path allows you to export managed servers from Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$manage_server_export_spec = new \OpenAPI\Client\Model\ManageServerExportSpec(); // \OpenAPI\Client\Model\ManageServerExportSpec

try {
    $result = $apiInstance->exportManagedServers($x_api_version, $manage_server_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportManagedServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **manage_server_export_spec** | [**\OpenAPI\Client\Model\ManageServerExportSpec**](../Model/ManageServerExportSpec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManageServerImportSpecCollection**](../Model/ManageServerImportSpecCollection.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportProxies()`

```php
exportProxies($x_api_version, $proxy_export_spec): \OpenAPI\Client\Model\ProxyImportSpecCollection
```

Export Proxies

The HTTP POST request to the `/api/v1/automation/proxies/export` path allows you to export backup proxies from Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$proxy_export_spec = new \OpenAPI\Client\Model\ProxyExportSpec(); // \OpenAPI\Client\Model\ProxyExportSpec

try {
    $result = $apiInstance->exportProxies($x_api_version, $proxy_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportProxies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **proxy_export_spec** | [**\OpenAPI\Client\Model\ProxyExportSpec**](../Model/ProxyExportSpec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProxyImportSpecCollection**](../Model/ProxyImportSpecCollection.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportRepositories()`

```php
exportRepositories($x_api_version, $repository_export_spec): \OpenAPI\Client\Model\RepositoryImportSpecCollection
```

Export Repositories

The HTTP POST request to the `/api/v1/automation/repositories/export` path allows you to export backup repositories from Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$repository_export_spec = new \OpenAPI\Client\Model\RepositoryExportSpec(); // \OpenAPI\Client\Model\RepositoryExportSpec

try {
    $result = $apiInstance->exportRepositories($x_api_version, $repository_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **repository_export_spec** | [**\OpenAPI\Client\Model\RepositoryExportSpec**](../Model/RepositoryExportSpec.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RepositoryImportSpecCollection**](../Model/RepositoryImportSpecCollection.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAutomationSessions()`

```php
getAllAutomationSessions($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $created_after_filter, $created_before_filter, $ended_after_filter, $ended_before_filter, $type_filter, $state_filter, $result_filter, $job_id_filter): \OpenAPI\Client\Model\SessionsResult
```

Get All Automation Sessions

The HTTP GET request to the `/api/v1/automation/sessions` path allows you to get an array of all automation sessions performed on the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
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
    $result = $apiInstance->getAllAutomationSessions($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $created_after_filter, $created_before_filter, $ended_after_filter, $ended_before_filter, $type_filter, $state_filter, $result_filter, $job_id_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAllAutomationSessions: ', $e->getMessage(), PHP_EOL;
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

## `getAutomationSession()`

```php
getAutomationSession($id, $x_api_version): \OpenAPI\Client\Model\SessionModel
```

Get Automation Session

The HTTP GET request to the `/api/v1/automation/sessions/{id}` path allows you to get an automation session that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the session.
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getAutomationSession($id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationSession: ', $e->getMessage(), PHP_EOL;
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

## `getAutomationSessionLogs()`

```php
getAutomationSessionLogs($id, $x_api_version): \OpenAPI\Client\Model\SessionLogResult
```

Get Automation Session Logs

The HTTP GET request to the `/api/v1/automation/sessions/{id}/logs` path allows you to get an array of log records of an automation session that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID of the session.
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.

try {
    $result = $apiInstance->getAutomationSessionLogs($id, $x_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->getAutomationSessionLogs: ', $e->getMessage(), PHP_EOL;
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

## `importCredentials()`

```php
importCredentials($x_api_version, $credentials_import_spec_collection): \OpenAPI\Client\Model\SessionModel
```

Import Credentials

The HTTP POST request to the `/api/v1/automation/credentials/import` path allows you to import credentials to Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$credentials_import_spec_collection = new \OpenAPI\Client\Model\CredentialsImportSpecCollection(); // \OpenAPI\Client\Model\CredentialsImportSpecCollection

try {
    $result = $apiInstance->importCredentials($x_api_version, $credentials_import_spec_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->importCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **credentials_import_spec_collection** | [**\OpenAPI\Client\Model\CredentialsImportSpecCollection**](../Model/CredentialsImportSpecCollection.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importEncryptionPasswords()`

```php
importEncryptionPasswords($x_api_version, $encryption_password_import_spec_collection): \OpenAPI\Client\Model\SessionModel
```

Import Encryption Passwords

The HTTP POST request to the `/api/v1/automation/encryptionPasswords/import` path allows you to import encryption passwords to Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$encryption_password_import_spec_collection = new \OpenAPI\Client\Model\EncryptionPasswordImportSpecCollection(); // \OpenAPI\Client\Model\EncryptionPasswordImportSpecCollection

try {
    $result = $apiInstance->importEncryptionPasswords($x_api_version, $encryption_password_import_spec_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->importEncryptionPasswords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **encryption_password_import_spec_collection** | [**\OpenAPI\Client\Model\EncryptionPasswordImportSpecCollection**](../Model/EncryptionPasswordImportSpecCollection.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importJobs()`

```php
importJobs($x_api_version, $job_import_spec_collection): \OpenAPI\Client\Model\SessionModel
```

Import Jobs

The HTTP POST request to the `/api/v1/automation/jobs/import` path allows you to import jobs to Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$job_import_spec_collection = new \OpenAPI\Client\Model\JobImportSpecCollection(); // \OpenAPI\Client\Model\JobImportSpecCollection

try {
    $result = $apiInstance->importJobs($x_api_version, $job_import_spec_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->importJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **job_import_spec_collection** | [**\OpenAPI\Client\Model\JobImportSpecCollection**](../Model/JobImportSpecCollection.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importManagedServers()`

```php
importManagedServers($x_api_version, $manage_server_import_spec_collection): \OpenAPI\Client\Model\SessionModel
```

Import Servers

The HTTP POST request to the `/api/v1/automation/managedServers/import` path allows you to import managed servers to Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$manage_server_import_spec_collection = new \OpenAPI\Client\Model\ManageServerImportSpecCollection(); // \OpenAPI\Client\Model\ManageServerImportSpecCollection

try {
    $result = $apiInstance->importManagedServers($x_api_version, $manage_server_import_spec_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->importManagedServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **manage_server_import_spec_collection** | [**\OpenAPI\Client\Model\ManageServerImportSpecCollection**](../Model/ManageServerImportSpecCollection.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importProxies()`

```php
importProxies($x_api_version, $proxy_import_spec_collection): \OpenAPI\Client\Model\SessionModel
```

Import Proxies

The HTTP POST request to the `/api/v1/automation/proxies/import` path allows you to import backup proxies to Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$proxy_import_spec_collection = new \OpenAPI\Client\Model\ProxyImportSpecCollection(); // \OpenAPI\Client\Model\ProxyImportSpecCollection

try {
    $result = $apiInstance->importProxies($x_api_version, $proxy_import_spec_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->importProxies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **proxy_import_spec_collection** | [**\OpenAPI\Client\Model\ProxyImportSpecCollection**](../Model/ProxyImportSpecCollection.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importRepositories()`

```php
importRepositories($x_api_version, $repository_import_spec_collection): \OpenAPI\Client\Model\SessionModel
```

Import Repositories

The HTTP POST request to the `/api/v1/automation/repositories/import` path allows you to import backup repositories to Veeam Backup & Replication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$repository_import_spec_collection = new \OpenAPI\Client\Model\RepositoryImportSpecCollection(); // \OpenAPI\Client\Model\RepositoryImportSpecCollection

try {
    $result = $apiInstance->importRepositories($x_api_version, $repository_import_spec_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->importRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **repository_import_spec_collection** | [**\OpenAPI\Client\Model\RepositoryImportSpecCollection**](../Model/RepositoryImportSpecCollection.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SessionModel**](../Model/SessionModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAutomationSession()`

```php
stopAutomationSession($x_api_version, $id): object
```

Stop Automation Session

The HTTP POST request to the `/api/v1/automation/sessions/{id}/stop` path allows you to stop an automation session that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string | ID of the session.

try {
    $result = $apiInstance->stopAutomationSession($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->stopAutomationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**| ID of the session. | |

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
