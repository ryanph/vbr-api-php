# # ManagedServerSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Full DNS name or IP address of the server. |
**description** | **string** | Description of the server. |
**type** | [**\OpenAPI\Client\Model\EManagedServerType**](EManagedServerType.md) |  |
**credentials_id** | **string** | ID of the credentials used to connect to the server. |
**network_settings** | [**\OpenAPI\Client\Model\WindowsHostPortsModel**](WindowsHostPortsModel.md) |  | [optional]
**port** | **int** | Port used to communicate with the server. | [optional]
**certificate_thumbprint** | **string** | [Optional] Certificate thumbprint used to verify the server identity. For details on how to get the thumbprint, see [Get TLS Certificate or SSH Fingerprint](#operation/GetConnectionCertificate). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
