# # TokenModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | String that represents authorization issued to the client. It must be specified in all requests. An access token can be used multiple times, but its lifetime is 15 minutes. |
**token_type** | **string** | Type of the access token. |
**refresh_token** | **string** | String that is used to obtain a new access token if the current access token expires or becomes lost. A refresh token can be used only once, and its default lifetime is 14 days. |
**expires_in** | **int** | Lifetime of the access token, in seconds. |
**_issued** | **\DateTime** | Date and time the access token is issued. |
**_expires** | **\DateTime** | Date and time the access token expires. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
