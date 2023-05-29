# # JobImportSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the job. |
**description** | **string** | Description of the job. |
**is_high_priority** | **bool** | If *true*, the job has a high priority in getting backup infrastructure resources. |
**type** | [**\OpenAPI\Client\Model\EJobType**](EJobType.md) |  |
**virtual_machines** | [**\OpenAPI\Client\Model\BackupJobVirtualMachinesSpec**](BackupJobVirtualMachinesSpec.md) |  |
**storage** | [**\OpenAPI\Client\Model\BackupJobStorageImportModel**](BackupJobStorageImportModel.md) |  |
**guest_processing** | [**\OpenAPI\Client\Model\BackupJobGuestProcessingImportModel**](BackupJobGuestProcessingImportModel.md) |  |
**schedule** | [**\OpenAPI\Client\Model\BackupScheduleModel**](BackupScheduleModel.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
