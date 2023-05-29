# # VSphereChangedBlockTrackingSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, CBT data is used. |
**enable_cb_tautomatically** | **bool** | If *true*, CBT is enabled for all processed VMs even if CBT is disabled in VM configuration. CBT is used for VMs with virtual hardware version 7 or later. These VMs must not have existing snapshots. | [optional]
**reset_cb_ton_active_full** | **bool** | If *true*, CBT is reset before creating active full backups. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
