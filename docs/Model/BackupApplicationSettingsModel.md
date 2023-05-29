# # BackupApplicationSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vm_object** | [**\OpenAPI\Client\Model\VmwareObjectModel**](VmwareObjectModel.md) |  |
**vss** | [**\OpenAPI\Client\Model\EApplicationSettingsVSS**](EApplicationSettingsVSS.md) |  |
**use_persistent_guest_agent** | **bool** | If *true*, persistent guest agent is used. | [optional]
**transaction_logs** | [**\OpenAPI\Client\Model\ETransactionLogsSettings**](ETransactionLogsSettings.md) |  | [optional]
**sql** | [**\OpenAPI\Client\Model\BackupSQLSettingsModel**](BackupSQLSettingsModel.md) |  | [optional]
**oracle** | [**\OpenAPI\Client\Model\BackupOracleSettingsModel**](BackupOracleSettingsModel.md) |  | [optional]
**exclusions** | [**\OpenAPI\Client\Model\BackupFSExclusionsModel**](BackupFSExclusionsModel.md) |  | [optional]
**scripts** | [**\OpenAPI\Client\Model\BackupScriptSettingsModel**](BackupScriptSettingsModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
