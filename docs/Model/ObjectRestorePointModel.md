# # ObjectRestorePointModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**platform_name** | [**\OpenAPI\Client\Model\EPlatformType**](EPlatformType.md) |  | [optional]
**platform_id** | **string** | ID of a platform on which the object was created. |
**creation_time** | **\DateTime** | Date and time when the restore point was created. |
**backup_id** | **string** | ID of a backup that contains the restore point. |
**allowed_operations** | [**\OpenAPI\Client\Model\EObjectRestorePointOperation[]**](EObjectRestorePointOperation.md) | Array of operations allowed for the restore point. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
