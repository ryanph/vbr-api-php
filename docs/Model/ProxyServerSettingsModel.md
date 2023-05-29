# # ProxyServerSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_id** | **string** | ID of the server. |
**transport_mode** | [**\OpenAPI\Client\Model\EBackupProxyTransportMode**](EBackupProxyTransportMode.md) |  | [optional]
**failover_to_network** | **bool** | [For the Direct storage access and Virtual appliance transport modes] If *true*, Veeam Backup &amp; Replication failovers to the network transport mode in case the primary mode fails or is unavailable. | [optional]
**host_to_proxy_encryption** | **bool** | [For the Network mode] If *true*, VM data is transferred over an encrypted TLS connection. | [optional]
**connected_datastores** | [**\OpenAPI\Client\Model\ProxyDatastoreSettingsModel**](ProxyDatastoreSettingsModel.md) |  | [optional]
**max_task_count** | **int** | Maximum number of concurrent tasks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
