# # RepositoryStateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the backup repository. |
**name** | **string** | Name of the backup repository. |
**type** | [**\OpenAPI\Client\Model\ERepositoryType**](ERepositoryType.md) |  |
**description** | **string** |  |
**host_id** | **string** | ID of the server that is used as a backup repository. | [optional]
**host_name** | **string** | Name of the server that is used as a backup repository. | [optional]
**path** | **string** | Path to the folder where backup files are stored. | [optional]
**capacity_gb** | **float** | Repository capacity in GB. |
**free_gb** | **float** | Repository free space in GB. |
**used_space_gb** | **float** | Repository used space in GB. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
