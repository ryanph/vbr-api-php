# # ArchiveTierModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | If *true*, the archive tier is enabled. |
**extent_id** | **string** | ID of an object storage repository added as an archive extent. | [optional]
**archive_period_days** | **int** | Number of days after which backup chains on the capacity extent are moved to the archive extent. Specify *0* to offload inactive backup chains on the same day they are created. | [optional]
**advanced_settings** | [**\OpenAPI\Client\Model\ArchiveTierAdvancedSettingsModel**](ArchiveTierAdvancedSettingsModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
