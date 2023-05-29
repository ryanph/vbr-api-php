# # CredentialsLinuxSettingsImportModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssh_port** | **int** | SSH port used to connect to a Linux server. | [optional]
**auto_elevated** | **bool** | If *true*, the permissions of the account are automatically elevated to the root user. | [optional]
**add_to_sudoers** | **bool** | If *true*, the account is automatically added to the sudoers file. | [optional]
**use_su** | **bool** | If *true*, the &#x60;su&#x60; command is used for Linux distributions where the &#x60;sudo&#x60; command is not available. | [optional]
**private_key** | **string** | Private key. | [optional]
**passphrase** | **string** | Passphrase that protects the private key. | [optional]
**root_password** | **string** | Password for the root account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
