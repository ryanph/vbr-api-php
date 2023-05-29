# # SessionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the session. |
**name** | **string** | Name of the session. |
**activity_id** | **string** | ID of the activity. |
**session_type** | [**\OpenAPI\Client\Model\ESessionType**](ESessionType.md) |  |
**creation_time** | **\DateTime** | Date and time the session was created. |
**end_time** | **\DateTime** | Date and time the session was ended. | [optional]
**state** | [**\OpenAPI\Client\Model\ESessionState**](ESessionState.md) |  |
**progress_percent** | **int** | Progress percentage of the session. | [optional]
**result** | [**\OpenAPI\Client\Model\SessionResultModel**](SessionResultModel.md) |  | [optional]
**resource_id** | **string** | ID of the resource. | [optional]
**resource_reference** | **string** | URI of the resource. | [optional]
**parent_session_id** | **string** | ID of the parent session. | [optional]
**usn** | **int** | Update sequence number. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
