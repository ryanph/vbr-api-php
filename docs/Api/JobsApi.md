# OpenAPI\Client\JobsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createJob()**](JobsApi.md#createJob) | **POST** /api/v1/jobs | Create Job |
| [**deleteJob()**](JobsApi.md#deleteJob) | **DELETE** /api/v1/jobs/{id} | Delete Job |
| [**disableJob()**](JobsApi.md#disableJob) | **POST** /api/v1/jobs/{id}/disable | Disable Job |
| [**enableJob()**](JobsApi.md#enableJob) | **POST** /api/v1/jobs/{id}/enable | Enable Job |
| [**getAllJobs()**](JobsApi.md#getAllJobs) | **GET** /api/v1/jobs | Get All Jobs |
| [**getAllJobsStates()**](JobsApi.md#getAllJobsStates) | **GET** /api/v1/jobs/states | Get All Job States |
| [**getJob()**](JobsApi.md#getJob) | **GET** /api/v1/jobs/{id} | Get Job |
| [**startJob()**](JobsApi.md#startJob) | **POST** /api/v1/jobs/{id}/start | Start Job |
| [**stopJob()**](JobsApi.md#stopJob) | **POST** /api/v1/jobs/{id}/stop | Stop Job |
| [**updateJob()**](JobsApi.md#updateJob) | **PUT** /api/v1/jobs/{id} | Edit Job |


## `createJob()`

```php
createJob($x_api_version, $job_spec): \OpenAPI\Client\Model\JobModel
```

Create Job

The HTTP POST request to the `/api/v1/jobs` path allows you to create a new job that has the specified parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$job_spec = new \OpenAPI\Client\Model\JobSpec(); // \OpenAPI\Client\Model\JobSpec

try {
    $result = $apiInstance->createJob($x_api_version, $job_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->createJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **job_spec** | [**\OpenAPI\Client\Model\JobSpec**](../Model/JobSpec.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JobModel**](../Model/JobModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteJob()`

```php
deleteJob($x_api_version, $id): object
```

Delete Job

The HTTP DELETE request to the `/api/v1/jobs/{id}` path allows you to delete a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteJob($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->deleteJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |

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

## `disableJob()`

```php
disableJob($x_api_version, $id): object
```

Disable Job

The HTTP POST request to the `/api/v1/jobs/{id}/disable` path allows you to disable a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string

try {
    $result = $apiInstance->disableJob($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->disableJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |

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

## `enableJob()`

```php
enableJob($x_api_version, $id): object
```

Enable Job

The HTTP POST request to the `/api/v1/jobs/{id}/enable` path allows you to enable a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string

try {
    $result = $apiInstance->enableJob($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->enableJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |

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

## `getAllJobs()`

```php
getAllJobs($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter): \OpenAPI\Client\Model\JobsResult
```

Get All Jobs

The HTTP GET request to the `/api/v1/jobs` path allows you to get an array of all jobs coordinated by the backup server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of jobs to skip.
$limit = 56; // int | Maximum number of jobs to return.
$order_column = new \OpenAPI\Client\Model\EJobFiltersOrderColumn(); // EJobFiltersOrderColumn | Sorts jobs by one of the job parameters.
$order_asc = True; // bool | Sorts jobs in the ascending order by the `orderColumn` parameter.
$name_filter = 'name_filter_example'; // string | Filters jobs by the `nameFilter` pattern. The pattern can match any job parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\EJobType(); // EJobType | Filters jobs by job type.

try {
    $result = $apiInstance->getAllJobs($x_api_version, $skip, $limit, $order_column, $order_asc, $name_filter, $type_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getAllJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of jobs to skip. | [optional] |
| **limit** | **int**| Maximum number of jobs to return. | [optional] |
| **order_column** | [**EJobFiltersOrderColumn**](../Model/.md)| Sorts jobs by one of the job parameters. | [optional] |
| **order_asc** | **bool**| Sorts jobs in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **name_filter** | **string**| Filters jobs by the &#x60;nameFilter&#x60; pattern. The pattern can match any job parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**EJobType**](../Model/.md)| Filters jobs by job type. | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobsResult**](../Model/JobsResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllJobsStates()`

```php
getAllJobsStates($x_api_version, $skip, $limit, $order_column, $order_asc, $id_filter, $name_filter, $type_filter, $last_result_filter, $status_filter, $workload_filter, $last_run_after_filter, $last_run_before_filter, $is_high_priority_job_filter, $repository_id_filter, $objects_count_filter): \OpenAPI\Client\Model\JobStatesResult
```

Get All Job States

The HTTP GET request to the `/api/v1/jobs/states` path allows you to get an array of all job states. The states include brief job information that you can also find under the **Jobs** node in the Veeam Backup & Replication console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$skip = 56; // int | Number of job states to skip.
$limit = 56; // int | Maximum number of job states to return.
$order_column = new \OpenAPI\Client\Model\EJobStatesFiltersOrderColumn(); // EJobStatesFiltersOrderColumn | Sorts job states by one of the state parameters.
$order_asc = True; // bool | Sorts job states in the ascending order by the `orderColumn` parameter.
$id_filter = 'id_filter_example'; // string | Filters job states by job ID.
$name_filter = 'name_filter_example'; // string | Filters job states by the `nameFilter` pattern. The pattern can match any state parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end.
$type_filter = new \OpenAPI\Client\Model\EJobType(); // EJobType | Filters job states by job type.
$last_result_filter = new \OpenAPI\Client\Model\ESessionResult(); // ESessionResult | Filters job states by status with which jobs must finish.
$status_filter = new \OpenAPI\Client\Model\EJobStatus(); // EJobStatus | Filters job states by current status of the job.
$workload_filter = new \OpenAPI\Client\Model\EJobWorkload(); // EJobWorkload | Filters job states by workloads that jobs must process.
$last_run_after_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns job states for jobs that have run after the specified date and time.
$last_run_before_filter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns job states for jobs that have not run after the specified date and time.
$is_high_priority_job_filter = True; // bool | If *true*, Returns job states for jobs with high priority.
$repository_id_filter = 'repository_id_filter_example'; // string | Filters job states by repository ID.
$objects_count_filter = 56; // int | Filters job states by number of objects processed by the job.

try {
    $result = $apiInstance->getAllJobsStates($x_api_version, $skip, $limit, $order_column, $order_asc, $id_filter, $name_filter, $type_filter, $last_result_filter, $status_filter, $workload_filter, $last_run_after_filter, $last_run_before_filter, $is_high_priority_job_filter, $repository_id_filter, $objects_count_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getAllJobsStates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **skip** | **int**| Number of job states to skip. | [optional] |
| **limit** | **int**| Maximum number of job states to return. | [optional] |
| **order_column** | [**EJobStatesFiltersOrderColumn**](../Model/.md)| Sorts job states by one of the state parameters. | [optional] |
| **order_asc** | **bool**| Sorts job states in the ascending order by the &#x60;orderColumn&#x60; parameter. | [optional] |
| **id_filter** | **string**| Filters job states by job ID. | [optional] |
| **name_filter** | **string**| Filters job states by the &#x60;nameFilter&#x60; pattern. The pattern can match any state parameter. To substitute one or more characters, use the asterisk (*) character at the beginning and/or at the end. | [optional] |
| **type_filter** | [**EJobType**](../Model/.md)| Filters job states by job type. | [optional] |
| **last_result_filter** | [**ESessionResult**](../Model/.md)| Filters job states by status with which jobs must finish. | [optional] |
| **status_filter** | [**EJobStatus**](../Model/.md)| Filters job states by current status of the job. | [optional] |
| **workload_filter** | [**EJobWorkload**](../Model/.md)| Filters job states by workloads that jobs must process. | [optional] |
| **last_run_after_filter** | **\DateTime**| Returns job states for jobs that have run after the specified date and time. | [optional] |
| **last_run_before_filter** | **\DateTime**| Returns job states for jobs that have not run after the specified date and time. | [optional] |
| **is_high_priority_job_filter** | **bool**| If *true*, Returns job states for jobs with high priority. | [optional] |
| **repository_id_filter** | **string**| Filters job states by repository ID. | [optional] |
| **objects_count_filter** | **int**| Filters job states by number of objects processed by the job. | [optional] |

### Return type

[**\OpenAPI\Client\Model\JobStatesResult**](../Model/JobStatesResult.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJob()`

```php
getJob($x_api_version, $id): \OpenAPI\Client\Model\JobModel
```

Get Job

The HTTP GET request to the `/api/v1/jobs/{id}` path allows you to get a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string

try {
    $result = $apiInstance->getJob($x_api_version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->getJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\JobModel**](../Model/JobModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startJob()`

```php
startJob($x_api_version, $id, $job_start_spec): \OpenAPI\Client\Model\SessionModel
```

Start Job

The HTTP POST request to the `/api/v1/jobs/{id}/start` path allows you to start a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string
$job_start_spec = new \OpenAPI\Client\Model\JobStartSpec(); // \OpenAPI\Client\Model\JobStartSpec

try {
    $result = $apiInstance->startJob($x_api_version, $id, $job_start_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->startJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |
| **job_start_spec** | [**\OpenAPI\Client\Model\JobStartSpec**](../Model/JobStartSpec.md)|  | [optional] |

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

## `stopJob()`

```php
stopJob($x_api_version, $id, $job_stop_spec): \OpenAPI\Client\Model\SessionModel
```

Stop Job

The HTTP POST request to the `/api/v1/jobs/{id}/stop` path allows you to stop a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string
$job_stop_spec = new \OpenAPI\Client\Model\JobStopSpec(); // \OpenAPI\Client\Model\JobStopSpec

try {
    $result = $apiInstance->stopJob($x_api_version, $id, $job_stop_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->stopJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |
| **job_stop_spec** | [**\OpenAPI\Client\Model\JobStopSpec**](../Model/JobStopSpec.md)|  | [optional] |

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

## `updateJob()`

```php
updateJob($x_api_version, $id, $job_model): \OpenAPI\Client\Model\JobModel
```

Edit Job

The HTTP PUT request to the `/api/v1/jobs/{id}` path allows you to edit a job that has the specified `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$id = 'id_example'; // string
$job_model = new \OpenAPI\Client\Model\JobModel(); // \OpenAPI\Client\Model\JobModel

try {
    $result = $apiInstance->updateJob($x_api_version, $id, $job_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->updateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_version** | **string**| Version and revision of the client REST API. Must be in the following format: *\\&lt;version\\&gt;-\\&lt;revision\\&gt;*. | [default to &#39;1.0-rev1&#39;] |
| **id** | **string**|  | |
| **job_model** | [**\OpenAPI\Client\Model\JobModel**](../Model/JobModel.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JobModel**](../Model/JobModel.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
