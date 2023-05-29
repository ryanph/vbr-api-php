# # ProxyServerSettingsImportSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_name** | **string** | Name of the server. |
**host_tag** | **string** | Tag assigned to the server. | [optional]
**transport_mode** | [**\OpenAPI\Client\Model\EBackupProxyTransportMode**](EBackupProxyTransportMode.md) |  | [optional]
**failover_to_network** | **bool** |  | [optional]
**host_to_proxy_encryption** | **bool** | [For the Network mode] If *true*, VM data is transferred over an encrypted TLS connection. | [optional]
**connected_datastores** | [**\OpenAPI\Client\Model\ProxyDatastoreSettingsModel**](ProxyDatastoreSettingsModel.md) |  | [optional]
**max_task_count** | **int** | Maximum number of concurrent tasks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
