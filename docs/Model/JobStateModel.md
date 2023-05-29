# # JobStateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the job. |
**name** | **string** | Name of the job. |
**type** | [**\OpenAPI\Client\Model\EJobType**](EJobType.md) |  |
**description** | **string** | Description of the job. |
**status** | [**\OpenAPI\Client\Model\EJobStatus**](EJobStatus.md) |  |
**last_run** | **\DateTime** | Last run of the job. | [optional]
**last_result** | [**\OpenAPI\Client\Model\ESessionResult**](ESessionResult.md) |  |
**next_run** | **\DateTime** | Next run of the job. | [optional]
**workload** | [**\OpenAPI\Client\Model\EJobWorkload**](EJobWorkload.md) |  |
**repository_id** | **string** | ID of the backup repository. | [optional]
**repository_name** | **string** | Name of the backup repository. | [optional]
**objects_count** | **int** | Number of objects processed by the job. |
**session_id** | **string** | ID of the last job session. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
