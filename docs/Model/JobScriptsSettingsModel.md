# # JobScriptsSettingsModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pre_command** | [**\OpenAPI\Client\Model\ScriptCommand**](ScriptCommand.md) |  | [optional]
**post_command** | [**\OpenAPI\Client\Model\ScriptCommand**](ScriptCommand.md) |  | [optional]
**periodicity_type** | [**\OpenAPI\Client\Model\EScriptPeriodicityType**](EScriptPeriodicityType.md) |  | [optional]
**run_script_every** | **int** | Number of the backup job session after which the scripts must be executed. | [optional]
**day_of_week** | [**\OpenAPI\Client\Model\EDayOfWeek[]**](EDayOfWeek.md) | Days of the week when the scripts must be executed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
