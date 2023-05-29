# # GlobalNetworkTrafficRulesModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_multiple_streams_per_job** | **bool** | If *true*, Veeam Backup &amp; Replication uses multiple TCP/IP transfer connection for every job session. |
**upload_streams_count** | **int** | Number of TCP/IP connections per job. | [optional]
**traffic_rules** | [**\OpenAPI\Client\Model\TrafficRuleModel[]**](TrafficRuleModel.md) | Array of traffic rules. | [optional]
**preferred_networks** | [**\OpenAPI\Client\Model\PreferredNetworksModel**](PreferredNetworksModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
