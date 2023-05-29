# # LinuxHostSSHSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssh_time_out_ms** | **int** | SSH timeout, in ms. If a task targeted at the server is inactive after the timeout, the task is terminated. | [optional]
**port_range_start** | **int** | Start port used for data transfer. | [optional]
**port_range_end** | **int** | End port used for data transfer. | [optional]
**server_this_side** | **bool** | If *true*, the server is run on this side. | [optional]
**management_port** | **int** | Port used as a control channel from the Veeam Backup &amp; Replication console to the Linux server. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
