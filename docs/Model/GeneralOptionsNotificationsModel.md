# # GeneralOptionsNotificationsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storage_space_threshold_enabled** | **bool** | If *true*, notifications about critical amount of free space in backup storage are enabled. |
**storage_space_threshold** | **int** | Space threshold of backup storage, in percent. |
**datastore_space_threshold_enabled** | **bool** | If *true*, notifications about critical amount of free space in production datastore are enabled. |
**datastore_space_threshold** | **int** | Space threshold of production datastore, in percent. |
**skip_vm_space_threshold_enabled** | **bool** | If *true* and the &#x60;skipVMSpaceThreshold&#x60; threshold is reached, Veeam Backup &amp; Replication terminates backup and replication jobs working with production datastores before VM snapshots are taken. |
**skip_vm_space_threshold** | **int** | Space threshold of production datastore, in percent. |
**notify_on_support_expiration** | **bool** | If *true*, notifications about support contract expiration are enabled. |
**notify_on_updates** | **bool** | If *true*, notifications about updates are enabled. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
