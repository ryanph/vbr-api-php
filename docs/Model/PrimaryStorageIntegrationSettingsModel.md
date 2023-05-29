# # PrimaryStorageIntegrationSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, the primary storage integration is enabled. In this case, storage snapshots (instead of VM snapshots) are used for VM data processing. |
**limit_processed_vm** | **bool** | If *true*, the number of processed VMs per storage snapshot is limited. | [optional]
**limit_processed_vm_count** | **int** | Number of processed VMs per storage snapshot. | [optional]
**failover_to_standard_backup** | **bool** | If *true*, failover to the regular VM processing mode is enabled. In this case, if backup from storage snapshot fails, VM snapshots are used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
