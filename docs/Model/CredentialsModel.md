# # CredentialsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the credentials record. |
**username** | **string** | User name. |
**description** | **string** | Description of the credentials record. |
**type** | [**\OpenAPI\Client\Model\ECredentialsType**](ECredentialsType.md) |  |
**creation_time** | **\DateTime** | Date and time when the credentials were created. |
**tag** | **string** | Tag used to identify the credentials record. | [optional]
**ssh_port** | **int** | SSH port used to connect to a Linux server. | [optional]
**auto_elevated** | **bool** | If *true*, the permissions of the account are automatically elevated to the root user. | [optional]
**add_to_sudoers** | **bool** | If *true*, the account is automatically added to the sudoers file. | [optional]
**use_su** | **bool** | If *true*, the &#x60;su&#x60; command is used for Linux distributions where the &#x60;sudo&#x60; command is not available. | [optional]
**private_key** | **string** | Private key. | [optional]
**passphrase** | **string** | Passphrase that protects the private key. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
