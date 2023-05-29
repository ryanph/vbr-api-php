# # ManagedServerModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the server. |
**name** | **string** | Full DNS name or IP address of the server. |
**description** | **string** | Description of the server. |
**type** | [**\OpenAPI\Client\Model\EManagedServerType**](EManagedServerType.md) |  |
**credentials_id** | **string** | ID of a credentials record used to connect to the server. |
**network_settings** | [**\OpenAPI\Client\Model\WindowsHostPortsModel**](WindowsHostPortsModel.md) |  | [optional]
**vi_host_type** | [**\OpenAPI\Client\Model\EViHostType**](EViHostType.md) |  | [optional]
**port** | **int** | Port used to communicate with the server. |
**ssh_settings** | [**\OpenAPI\Client\Model\LinuxHostSSHSettingsModel**](LinuxHostSSHSettingsModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
