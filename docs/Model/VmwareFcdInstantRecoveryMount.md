# # VmwareFcdInstantRecoveryMount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Mount ID. |
**session_id** | **string** | ID of the restore session. Use the ID to track the progress. For details, see [Get Session](#operation/GetSession). |
**state** | [**\OpenAPI\Client\Model\EInstantRecoveryMountState**](EInstantRecoveryMountState.md) |  |
**spec** | [**\OpenAPI\Client\Model\VmwareFcdInstantRecoverySpec**](VmwareFcdInstantRecoverySpec.md) |  |
**error_message** | **string** |  | [optional]
**mounted_disks** | [**\OpenAPI\Client\Model\VmwareFcdInstantRecoveryDiskInfo[]**](VmwareFcdInstantRecoveryDiskInfo.md) | Array of mounted disks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
