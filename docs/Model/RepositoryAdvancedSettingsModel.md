# # RepositoryAdvancedSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**align_data_blocks** | **bool** | If *true*, Veeam Backup &amp; Replication aligns VM data saved to a backup file at a 4 KB block boundary. | [optional]
**decompress_before_storing** | **bool** | If *true*, Veeam Backup &amp; Replication decompresses backup data blocks before storing to improve deduplication ratios. | [optional]
**rotated_drives** | **bool** | If *true*, the repository drive is rotated. | [optional]
**per_vm_backup** | **bool** | If *true*, Veeam Backup &amp; Replication creates a separate backup file for every VM in the job. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
