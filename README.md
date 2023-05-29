# vbr-api-php

This document lists paths (endpoints) of the Veeam Backup & Replication REST API and operations that you can perform by sending HTTP requests to the paths.<br>
Requests can contain parameters in their path, query and header. POST and PUT requests can include a request body with resource payload. In response, you receive a conventional HTTP response code, HTTP response header and an optional response body schema that contains a result model.<br>
Parameters, request bodies, and response bodies are defined inline or refer to schemas defined globally. Some schemas are polymorphic.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ryanph/vbr-api/1.0-rev1.git"
    }
  ],
  "require": {
    "ryanph/vbr-api/1.0-rev1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vbr-api-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_version = '1.0-rev1'; // string | Version and revision of the client REST API. Must be in the following format: *\\<version\\>-\\<revision\\>*.
$credentials_export_spec = new \OpenAPI\Client\Model\CredentialsExportSpec(); // \OpenAPI\Client\Model\CredentialsExportSpec

try {
    $result = $apiInstance->exportCredentials($x_api_version, $credentials_export_spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationApi->exportCredentials: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutomationApi* | [**exportCredentials**](docs/Api/AutomationApi.md#exportcredentials) | **POST** /api/v1/automation/credentials/export | Export Credentials
*AutomationApi* | [**exportEncryptionPasswords**](docs/Api/AutomationApi.md#exportencryptionpasswords) | **POST** /api/v1/automation/encryptionPasswords/export | Export Encryption Passwords
*AutomationApi* | [**exportJobs**](docs/Api/AutomationApi.md#exportjobs) | **POST** /api/v1/automation/jobs/export | Export Jobs
*AutomationApi* | [**exportManagedServers**](docs/Api/AutomationApi.md#exportmanagedservers) | **POST** /api/v1/automation/managedServers/export | Export Servers
*AutomationApi* | [**exportProxies**](docs/Api/AutomationApi.md#exportproxies) | **POST** /api/v1/automation/proxies/export | Export Proxies
*AutomationApi* | [**exportRepositories**](docs/Api/AutomationApi.md#exportrepositories) | **POST** /api/v1/automation/repositories/export | Export Repositories
*AutomationApi* | [**getAllAutomationSessions**](docs/Api/AutomationApi.md#getallautomationsessions) | **GET** /api/v1/automation/sessions | Get All Automation Sessions
*AutomationApi* | [**getAutomationSession**](docs/Api/AutomationApi.md#getautomationsession) | **GET** /api/v1/automation/sessions/{id} | Get Automation Session
*AutomationApi* | [**getAutomationSessionLogs**](docs/Api/AutomationApi.md#getautomationsessionlogs) | **GET** /api/v1/automation/sessions/{id}/logs | Get Automation Session Logs
*AutomationApi* | [**importCredentials**](docs/Api/AutomationApi.md#importcredentials) | **POST** /api/v1/automation/credentials/import | Import Credentials
*AutomationApi* | [**importEncryptionPasswords**](docs/Api/AutomationApi.md#importencryptionpasswords) | **POST** /api/v1/automation/encryptionPasswords/import | Import Encryption Passwords
*AutomationApi* | [**importJobs**](docs/Api/AutomationApi.md#importjobs) | **POST** /api/v1/automation/jobs/import | Import Jobs
*AutomationApi* | [**importManagedServers**](docs/Api/AutomationApi.md#importmanagedservers) | **POST** /api/v1/automation/managedServers/import | Import Servers
*AutomationApi* | [**importProxies**](docs/Api/AutomationApi.md#importproxies) | **POST** /api/v1/automation/proxies/import | Import Proxies
*AutomationApi* | [**importRepositories**](docs/Api/AutomationApi.md#importrepositories) | **POST** /api/v1/automation/repositories/import | Import Repositories
*AutomationApi* | [**stopAutomationSession**](docs/Api/AutomationApi.md#stopautomationsession) | **POST** /api/v1/automation/sessions/{id}/stop | Stop Automation Session
*BackupObjectsApi* | [**getAllBackupObjects**](docs/Api/BackupObjectsApi.md#getallbackupobjects) | **GET** /api/v1/backupObjects | Get All Backup Objects
*BackupObjectsApi* | [**getBackupObject**](docs/Api/BackupObjectsApi.md#getbackupobject) | **GET** /api/v1/backupObjects/{id} | Get Backup Object
*BackupObjectsApi* | [**getBackupObjectRestorePoints**](docs/Api/BackupObjectsApi.md#getbackupobjectrestorepoints) | **GET** /api/v1/backupObjects/{id}/restorePoints | Get Restore Points
*BackupsApi* | [**getAllBackups**](docs/Api/BackupsApi.md#getallbackups) | **GET** /api/v1/backups | Get All Backups
*BackupsApi* | [**getBackup**](docs/Api/BackupsApi.md#getbackup) | **GET** /api/v1/backups/{id} | Get Backup
*BackupsApi* | [**getBackupObjects**](docs/Api/BackupsApi.md#getbackupobjects) | **GET** /api/v1/backups/{id}/objects | Get Backup Objects
*ConfigurationBackupApi* | [**getConfigBackupOptions**](docs/Api/ConfigurationBackupApi.md#getconfigbackupoptions) | **GET** /api/v1/configBackup | Get Configuration Backup
*ConfigurationBackupApi* | [**startConfigBackup**](docs/Api/ConfigurationBackupApi.md#startconfigbackup) | **POST** /api/v1/configBackup/backup | Start Configuration Backup
*ConfigurationBackupApi* | [**updateConfigBackupOptions**](docs/Api/ConfigurationBackupApi.md#updateconfigbackupoptions) | **PUT** /api/v1/configBackup | Edit Configuration Backup
*ConnectionApi* | [**getConnectionCertificate**](docs/Api/ConnectionApi.md#getconnectioncertificate) | **POST** /api/v1/connectionCertificate | Request TLS Certificate or SSH Fingerprint
*CredentialsApi* | [**changePasswordForCreds**](docs/Api/CredentialsApi.md#changepasswordforcreds) | **POST** /api/v1/credentials/{id}/changepassword | Change Password
*CredentialsApi* | [**changePrivateKeyForCreds**](docs/Api/CredentialsApi.md#changeprivatekeyforcreds) | **POST** /api/v1/credentials/{id}/changeprivatekey | Change Linux Private Key
*CredentialsApi* | [**changeRootPasswordForCreds**](docs/Api/CredentialsApi.md#changerootpasswordforcreds) | **POST** /api/v1/credentials/{id}/changerootpassword | Change Linux Root Password
*CredentialsApi* | [**createCreds**](docs/Api/CredentialsApi.md#createcreds) | **POST** /api/v1/credentials | Add Credentials Record
*CredentialsApi* | [**deleteCreds**](docs/Api/CredentialsApi.md#deletecreds) | **DELETE** /api/v1/credentials/{id} | Remove Credentials Record
*CredentialsApi* | [**getAllCreds**](docs/Api/CredentialsApi.md#getallcreds) | **GET** /api/v1/credentials | Get All Credentials
*CredentialsApi* | [**getCreds**](docs/Api/CredentialsApi.md#getcreds) | **GET** /api/v1/credentials/{id} | Get Credentials Record
*CredentialsApi* | [**updateCreds**](docs/Api/CredentialsApi.md#updatecreds) | **PUT** /api/v1/credentials/{id} | Edit Credentials Record
*EncryptionApi* | [**createEncryptionPassword**](docs/Api/EncryptionApi.md#createencryptionpassword) | **POST** /api/v1/encryptionPasswords | Add Encryption Password
*EncryptionApi* | [**deleteEncryptionPassword**](docs/Api/EncryptionApi.md#deleteencryptionpassword) | **DELETE** /api/v1/encryptionPasswords/{id} | Remove Encryption Password
*EncryptionApi* | [**getAllEncryptionPasswords**](docs/Api/EncryptionApi.md#getallencryptionpasswords) | **GET** /api/v1/encryptionPasswords | Get All Encryption Passwords
*EncryptionApi* | [**getEncryptionPassword**](docs/Api/EncryptionApi.md#getencryptionpassword) | **GET** /api/v1/encryptionPasswords/{id} | Get Encryption Password
*EncryptionApi* | [**updateEncryptionPassword**](docs/Api/EncryptionApi.md#updateencryptionpassword) | **PUT** /api/v1/encryptionPasswords/{id} | Edit Encryption Password
*GeneralOptionsApi* | [**getGeneralOptions**](docs/Api/GeneralOptionsApi.md#getgeneraloptions) | **GET** /api/v1/generalOptions | Get General Options
*GeneralOptionsApi* | [**updateGeneralOptions**](docs/Api/GeneralOptionsApi.md#updategeneraloptions) | **PUT** /api/v1/generalOptions | Edit General Options
*InventoryBrowserApi* | [**getAllInventoryVmwareHosts**](docs/Api/InventoryBrowserApi.md#getallinventoryvmwarehosts) | **GET** /api/v1/inventory/vmware/hosts | Get All VMware vSphere Servers
*InventoryBrowserApi* | [**getVmwareHostObject**](docs/Api/InventoryBrowserApi.md#getvmwarehostobject) | **GET** /api/v1/inventory/vmware/hosts/{name} | Get VMware vSphere Server Objects
*JobsApi* | [**createJob**](docs/Api/JobsApi.md#createjob) | **POST** /api/v1/jobs | Create Job
*JobsApi* | [**deleteJob**](docs/Api/JobsApi.md#deletejob) | **DELETE** /api/v1/jobs/{id} | Delete Job
*JobsApi* | [**disableJob**](docs/Api/JobsApi.md#disablejob) | **POST** /api/v1/jobs/{id}/disable | Disable Job
*JobsApi* | [**enableJob**](docs/Api/JobsApi.md#enablejob) | **POST** /api/v1/jobs/{id}/enable | Enable Job
*JobsApi* | [**getAllJobs**](docs/Api/JobsApi.md#getalljobs) | **GET** /api/v1/jobs | Get All Jobs
*JobsApi* | [**getAllJobsStates**](docs/Api/JobsApi.md#getalljobsstates) | **GET** /api/v1/jobs/states | Get All Job States
*JobsApi* | [**getJob**](docs/Api/JobsApi.md#getjob) | **GET** /api/v1/jobs/{id} | Get Job
*JobsApi* | [**startJob**](docs/Api/JobsApi.md#startjob) | **POST** /api/v1/jobs/{id}/start | Start Job
*JobsApi* | [**stopJob**](docs/Api/JobsApi.md#stopjob) | **POST** /api/v1/jobs/{id}/stop | Stop Job
*JobsApi* | [**updateJob**](docs/Api/JobsApi.md#updatejob) | **PUT** /api/v1/jobs/{id} | Edit Job
*LoginApi* | [**createAuthorizationCode**](docs/Api/LoginApi.md#createauthorizationcode) | **POST** /api/oauth2/authorization_code | Get Authorization Code
*LoginApi* | [**createToken**](docs/Api/LoginApi.md#createtoken) | **POST** /api/oauth2/token | Get Access Token
*LoginApi* | [**logout**](docs/Api/LoginApi.md#logout) | **POST** /api/oauth2/logout | Log Out
*ManagedServersApi* | [**createManagedServer**](docs/Api/ManagedServersApi.md#createmanagedserver) | **POST** /api/v1/backupInfrastructure/managedServers | Add Server
*ManagedServersApi* | [**deleteManagedServer**](docs/Api/ManagedServersApi.md#deletemanagedserver) | **DELETE** /api/v1/backupInfrastructure/managedServers/{id} | Remove Server
*ManagedServersApi* | [**getAllManagedServers**](docs/Api/ManagedServersApi.md#getallmanagedservers) | **GET** /api/v1/backupInfrastructure/managedServers | Get All Servers
*ManagedServersApi* | [**getManagedServer**](docs/Api/ManagedServersApi.md#getmanagedserver) | **GET** /api/v1/backupInfrastructure/managedServers/{id} | Get Server
*ManagedServersApi* | [**updateManagedServer**](docs/Api/ManagedServersApi.md#updatemanagedserver) | **PUT** /api/v1/backupInfrastructure/managedServers/{id} | Edit Server
*ObjectRestorePointsApi* | [**getAllObjectRestorePoints**](docs/Api/ObjectRestorePointsApi.md#getallobjectrestorepoints) | **GET** /api/v1/objectRestorePoints | Get All Restore Points
*ObjectRestorePointsApi* | [**getObjectRestorePoint**](docs/Api/ObjectRestorePointsApi.md#getobjectrestorepoint) | **GET** /api/v1/objectRestorePoints/{id} | Get Restore Point
*ObjectRestorePointsApi* | [**getObjectRestorePointDisks**](docs/Api/ObjectRestorePointsApi.md#getobjectrestorepointdisks) | **GET** /api/v1/objectRestorePoints/{id}/disks | Get Restore Point Disks
*ProxiesApi* | [**createProxy**](docs/Api/ProxiesApi.md#createproxy) | **POST** /api/v1/backupInfrastructure/proxies | Add Proxy
*ProxiesApi* | [**deleteProxy**](docs/Api/ProxiesApi.md#deleteproxy) | **DELETE** /api/v1/backupInfrastructure/proxies/{id} | Remove Proxy
*ProxiesApi* | [**getAllProxies**](docs/Api/ProxiesApi.md#getallproxies) | **GET** /api/v1/backupInfrastructure/proxies | Get All Proxies
*ProxiesApi* | [**getProxy**](docs/Api/ProxiesApi.md#getproxy) | **GET** /api/v1/backupInfrastructure/proxies/{id} | Get Proxy
*ProxiesApi* | [**updateProxy**](docs/Api/ProxiesApi.md#updateproxy) | **PUT** /api/v1/backupInfrastructure/proxies/{id} | Edit Proxy
*RepositoriesApi* | [**createRepository**](docs/Api/RepositoriesApi.md#createrepository) | **POST** /api/v1/backupInfrastructure/repositories | Add Repository
*RepositoriesApi* | [**deleteRepository**](docs/Api/RepositoriesApi.md#deleterepository) | **DELETE** /api/v1/backupInfrastructure/repositories/{id} | Remove Repository
*RepositoriesApi* | [**disableScaleOutExtentMaintenanceMode**](docs/Api/RepositoriesApi.md#disablescaleoutextentmaintenancemode) | **POST** /api/v1/backupInfrastructure/scaleOutRepositories/{id}/disableMaintenanceMode | Disable Maintenance Mode
*RepositoriesApi* | [**enableScaleOutExtentMaintenanceMode**](docs/Api/RepositoriesApi.md#enablescaleoutextentmaintenancemode) | **POST** /api/v1/backupInfrastructure/scaleOutRepositories/{id}/enableMaintenanceMode | Enable Maintenance Mode
*RepositoriesApi* | [**getAllRepositories**](docs/Api/RepositoriesApi.md#getallrepositories) | **GET** /api/v1/backupInfrastructure/repositories | Get All Repositories
*RepositoriesApi* | [**getAllRepositoriesStates**](docs/Api/RepositoriesApi.md#getallrepositoriesstates) | **GET** /api/v1/backupInfrastructure/repositories/states | Get All Repository States
*RepositoriesApi* | [**getAllScaleOutRepositories**](docs/Api/RepositoriesApi.md#getallscaleoutrepositories) | **GET** /api/v1/backupInfrastructure/scaleOutRepositories | Get All Scale-Out Backup Repositories
*RepositoriesApi* | [**getRepository**](docs/Api/RepositoriesApi.md#getrepository) | **GET** /api/v1/backupInfrastructure/repositories/{id} | Get Repository
*RepositoriesApi* | [**getScaleOutRepository**](docs/Api/RepositoriesApi.md#getscaleoutrepository) | **GET** /api/v1/backupInfrastructure/scaleOutRepositories/{id} | Get Scale-Out Backup Repository
*RepositoriesApi* | [**updateRepository**](docs/Api/RepositoriesApi.md#updaterepository) | **PUT** /api/v1/backupInfrastructure/repositories/{id} | Edit Repository
*RestoreApi* | [**getVmwareFcdInstantRecoveryMountModel**](docs/Api/RestoreApi.md#getvmwarefcdinstantrecoverymountmodel) | **GET** /api/v1/restore/instantRecovery/vmware/fcd/{mountId} | Get Mount Information
*RestoreApi* | [**instantRecoveryVmwareFcdDismount**](docs/Api/RestoreApi.md#instantrecoveryvmwarefcddismount) | **POST** /api/v1/restore/instantRecovery/vmware/fcd/{mountId}/dismount | Stop FCD Publishing
*RestoreApi* | [**instantRecoveryVmwareFcdMigrate**](docs/Api/RestoreApi.md#instantrecoveryvmwarefcdmigrate) | **POST** /api/v1/restore/instantRecovery/vmware/fcd/{mountId}/migrate | Start FCD Migration
*RestoreApi* | [**instantRecoveryVmwareFcdMount**](docs/Api/RestoreApi.md#instantrecoveryvmwarefcdmount) | **POST** /api/v1/restore/instantRecovery/vmware/fcd/ | Start Instant FCD Recovery
*ServiceApi* | [**getServerCertificate**](docs/Api/ServiceApi.md#getservercertificate) | **GET** /api/v1/serverCertificate | Get Server Certificate
*ServiceApi* | [**getServerTime**](docs/Api/ServiceApi.md#getservertime) | **GET** /api/v1/serverTime | Get Server Time
*ServicesApi* | [**getAllServices**](docs/Api/ServicesApi.md#getallservices) | **GET** /api/v1/services | Get Associated Services
*SessionsApi* | [**getAllSessions**](docs/Api/SessionsApi.md#getallsessions) | **GET** /api/v1/sessions | Get All Sessions
*SessionsApi* | [**getSession**](docs/Api/SessionsApi.md#getsession) | **GET** /api/v1/sessions/{id} | Get Session
*SessionsApi* | [**getSessionLogs**](docs/Api/SessionsApi.md#getsessionlogs) | **GET** /api/v1/sessions/{id}/logs | Get Session Logs
*SessionsApi* | [**stopSession**](docs/Api/SessionsApi.md#stopsession) | **POST** /api/v1/sessions/{id}/stop | Stop Session
*TrafficRulesApi* | [**getAllTrafficRules**](docs/Api/TrafficRulesApi.md#getalltrafficrules) | **GET** /api/v1/trafficRules | Get Traffic Rules
*TrafficRulesApi* | [**updateTrafficRules**](docs/Api/TrafficRulesApi.md#updatetrafficrules) | **PUT** /api/v1/trafficRules | Edit Traffic Rules

## Models

- [ActiveFullSettingsModel](docs/Model/ActiveFullSettingsModel.md)
- [AdvancedSmtpOptionsModel](docs/Model/AdvancedSmtpOptionsModel.md)
- [AdvancedStorageScheduleMonthlyModel](docs/Model/AdvancedStorageScheduleMonthlyModel.md)
- [AdvancedStorageScheduleWeeklyModel](docs/Model/AdvancedStorageScheduleWeeklyModel.md)
- [ArchiveTierAdvancedSettingsModel](docs/Model/ArchiveTierAdvancedSettingsModel.md)
- [ArchiveTierModel](docs/Model/ArchiveTierModel.md)
- [AuthorizationCodeModel](docs/Model/AuthorizationCodeModel.md)
- [BackupApplicationAwareProcessingImportModel](docs/Model/BackupApplicationAwareProcessingImportModel.md)
- [BackupApplicationAwareProcessingModel](docs/Model/BackupApplicationAwareProcessingModel.md)
- [BackupApplicationSettingsImportModel](docs/Model/BackupApplicationSettingsImportModel.md)
- [BackupApplicationSettingsModel](docs/Model/BackupApplicationSettingsModel.md)
- [BackupFSExclusionsModel](docs/Model/BackupFSExclusionsModel.md)
- [BackupHealthCheckSettingsModels](docs/Model/BackupHealthCheckSettingsModels.md)
- [BackupIndexingSettingsModel](docs/Model/BackupIndexingSettingsModel.md)
- [BackupJobAdvancedSettingsModel](docs/Model/BackupJobAdvancedSettingsModel.md)
- [BackupJobAdvancedSettingsVSphereModel](docs/Model/BackupJobAdvancedSettingsVSphereModel.md)
- [BackupJobExclusions](docs/Model/BackupJobExclusions.md)
- [BackupJobExclusionsSpec](docs/Model/BackupJobExclusionsSpec.md)
- [BackupJobExclusionsTemplates](docs/Model/BackupJobExclusionsTemplates.md)
- [BackupJobGuestProcessingImportModel](docs/Model/BackupJobGuestProcessingImportModel.md)
- [BackupJobGuestProcessingModel](docs/Model/BackupJobGuestProcessingModel.md)
- [BackupJobImportProxiesModel](docs/Model/BackupJobImportProxiesModel.md)
- [BackupJobModel](docs/Model/BackupJobModel.md)
- [BackupJobModelAllOf](docs/Model/BackupJobModelAllOf.md)
- [BackupJobRetentionPolicySettingsModel](docs/Model/BackupJobRetentionPolicySettingsModel.md)
- [BackupJobSpec](docs/Model/BackupJobSpec.md)
- [BackupJobSpecAllOf](docs/Model/BackupJobSpecAllOf.md)
- [BackupJobStorageImportModel](docs/Model/BackupJobStorageImportModel.md)
- [BackupJobStorageModel](docs/Model/BackupJobStorageModel.md)
- [BackupJobVirtualMachinesModel](docs/Model/BackupJobVirtualMachinesModel.md)
- [BackupJobVirtualMachinesSpec](docs/Model/BackupJobVirtualMachinesSpec.md)
- [BackupLinuxScriptModel](docs/Model/BackupLinuxScriptModel.md)
- [BackupLogShippingServersImportModel](docs/Model/BackupLogShippingServersImportModel.md)
- [BackupLogShippingServersModel](docs/Model/BackupLogShippingServersModel.md)
- [BackupModel](docs/Model/BackupModel.md)
- [BackupObjectIndexingModel](docs/Model/BackupObjectIndexingModel.md)
- [BackupObjectModel](docs/Model/BackupObjectModel.md)
- [BackupObjectsFilters](docs/Model/BackupObjectsFilters.md)
- [BackupObjectsResult](docs/Model/BackupObjectsResult.md)
- [BackupOracleSettingsImportModel](docs/Model/BackupOracleSettingsImportModel.md)
- [BackupOracleSettingsModel](docs/Model/BackupOracleSettingsModel.md)
- [BackupPlacementSettingsModel](docs/Model/BackupPlacementSettingsModel.md)
- [BackupProxiesSettingsModel](docs/Model/BackupProxiesSettingsModel.md)
- [BackupProxyImportModel](docs/Model/BackupProxyImportModel.md)
- [BackupRepositoryImportModel](docs/Model/BackupRepositoryImportModel.md)
- [BackupSQLSettingsImportModel](docs/Model/BackupSQLSettingsImportModel.md)
- [BackupSQLSettingsModel](docs/Model/BackupSQLSettingsModel.md)
- [BackupScheduleModel](docs/Model/BackupScheduleModel.md)
- [BackupScriptSettingsModel](docs/Model/BackupScriptSettingsModel.md)
- [BackupStorageSettingModel](docs/Model/BackupStorageSettingModel.md)
- [BackupStorageSettingsEncryptionModel](docs/Model/BackupStorageSettingsEncryptionModel.md)
- [BackupWindowDayHoursModel](docs/Model/BackupWindowDayHoursModel.md)
- [BackupWindowSettingModel](docs/Model/BackupWindowSettingModel.md)
- [BackupWindowsScriptModel](docs/Model/BackupWindowsScriptModel.md)
- [BackupsFilters](docs/Model/BackupsFilters.md)
- [BackupsResult](docs/Model/BackupsResult.md)
- [CapacityTierModel](docs/Model/CapacityTierModel.md)
- [CapacityTierOverridePolicyModel](docs/Model/CapacityTierOverridePolicyModel.md)
- [CertificateModel](docs/Model/CertificateModel.md)
- [ConfigBackupEncryptionModel](docs/Model/ConfigBackupEncryptionModel.md)
- [ConfigBackupLastSuccessfulModel](docs/Model/ConfigBackupLastSuccessfulModel.md)
- [ConfigBackupModel](docs/Model/ConfigBackupModel.md)
- [ConfigBackupNotificationsModel](docs/Model/ConfigBackupNotificationsModel.md)
- [ConfigBackupSMTPSettigsModel](docs/Model/ConfigBackupSMTPSettigsModel.md)
- [ConfigBackupScheduleModel](docs/Model/ConfigBackupScheduleModel.md)
- [ConnectionCertificateModel](docs/Model/ConnectionCertificateModel.md)
- [CredentialsExportSpec](docs/Model/CredentialsExportSpec.md)
- [CredentialsFilters](docs/Model/CredentialsFilters.md)
- [CredentialsImportModel](docs/Model/CredentialsImportModel.md)
- [CredentialsImportSpec](docs/Model/CredentialsImportSpec.md)
- [CredentialsImportSpecCollection](docs/Model/CredentialsImportSpecCollection.md)
- [CredentialsLinuxSettingsImportModel](docs/Model/CredentialsLinuxSettingsImportModel.md)
- [CredentialsModel](docs/Model/CredentialsModel.md)
- [CredentialsPasswordChangeSpec](docs/Model/CredentialsPasswordChangeSpec.md)
- [CredentialsResult](docs/Model/CredentialsResult.md)
- [CredentialsSpec](docs/Model/CredentialsSpec.md)
- [DeleteRepositoryFilters](docs/Model/DeleteRepositoryFilters.md)
- [EAllowedBackupsType](docs/Model/EAllowedBackupsType.md)
- [EApplicationSettingsVSS](docs/Model/EApplicationSettingsVSS.md)
- [EBackupExclusionPolicy](docs/Model/EBackupExclusionPolicy.md)
- [EBackupModeType](docs/Model/EBackupModeType.md)
- [EBackupObjectsFiltersOrderColumn](docs/Model/EBackupObjectsFiltersOrderColumn.md)
- [EBackupOracleLogsSettings](docs/Model/EBackupOracleLogsSettings.md)
- [EBackupProxyImportType](docs/Model/EBackupProxyImportType.md)
- [EBackupProxyTransportMode](docs/Model/EBackupProxyTransportMode.md)
- [EBackupScriptProcessingMode](docs/Model/EBackupScriptProcessingMode.md)
- [EBackupsFiltersOrderColumn](docs/Model/EBackupsFiltersOrderColumn.md)
- [ECompressionLevel](docs/Model/ECompressionLevel.md)
- [EConfigBackupSMTPSettingsType](docs/Model/EConfigBackupSMTPSettingsType.md)
- [ECredentialsFiltersOrderColumn](docs/Model/ECredentialsFiltersOrderColumn.md)
- [ECredentialsType](docs/Model/ECredentialsType.md)
- [EDailyKinds](docs/Model/EDailyKinds.md)
- [EDayNumberInMonth](docs/Model/EDayNumberInMonth.md)
- [EDayOfWeek](docs/Model/EDayOfWeek.md)
- [EDiskInfoProcessState](docs/Model/EDiskInfoProcessState.md)
- [EDiskInfoType](docs/Model/EDiskInfoType.md)
- [EEmailNotificationType](docs/Model/EEmailNotificationType.md)
- [EEncryptionPasswordsFiltersOrderColumn](docs/Model/EEncryptionPasswordsFiltersOrderColumn.md)
- [EGuestFSIndexingMode](docs/Model/EGuestFSIndexingMode.md)
- [EGuestOSType](docs/Model/EGuestOSType.md)
- [EHierarchyType](docs/Model/EHierarchyType.md)
- [EInstantRecoveryMountState](docs/Model/EInstantRecoveryMountState.md)
- [EJobFiltersOrderColumn](docs/Model/EJobFiltersOrderColumn.md)
- [EJobStatesFiltersOrderColumn](docs/Model/EJobStatesFiltersOrderColumn.md)
- [EJobStatus](docs/Model/EJobStatus.md)
- [EJobType](docs/Model/EJobType.md)
- [EJobWorkload](docs/Model/EJobWorkload.md)
- [EManagedServerType](docs/Model/EManagedServerType.md)
- [EManagedServersFiltersOrderColumn](docs/Model/EManagedServersFiltersOrderColumn.md)
- [EMonth](docs/Model/EMonth.md)
- [EObjectRestorePointOperation](docs/Model/EObjectRestorePointOperation.md)
- [EObjectRestorePointsFiltersOrderColumn](docs/Model/EObjectRestorePointsFiltersOrderColumn.md)
- [EPeriodicallyKinds](docs/Model/EPeriodicallyKinds.md)
- [EPlacementPolicyType](docs/Model/EPlacementPolicyType.md)
- [EPlatform](docs/Model/EPlatform.md)
- [EPlatformType](docs/Model/EPlatformType.md)
- [EProxiesFiltersOrderColumn](docs/Model/EProxiesFiltersOrderColumn.md)
- [EProxyType](docs/Model/EProxyType.md)
- [ERepositoryExtentStatusType](docs/Model/ERepositoryExtentStatusType.md)
- [ERepositoryFiltersOrderColumn](docs/Model/ERepositoryFiltersOrderColumn.md)
- [ERepositoryStatesFiltersOrderColumn](docs/Model/ERepositoryStatesFiltersOrderColumn.md)
- [ERepositoryType](docs/Model/ERepositoryType.md)
- [ERetainLogBackupsType](docs/Model/ERetainLogBackupsType.md)
- [ERetentionPolicyType](docs/Model/ERetentionPolicyType.md)
- [ESQLLogsProcessing](docs/Model/ESQLLogsProcessing.md)
- [EScaleOutRepositoryFiltersOrderColumn](docs/Model/EScaleOutRepositoryFiltersOrderColumn.md)
- [EScriptPeriodicityType](docs/Model/EScriptPeriodicityType.md)
- [ESennightOfMonth](docs/Model/ESennightOfMonth.md)
- [EServicesFiltersOrderColumn](docs/Model/EServicesFiltersOrderColumn.md)
- [ESessionResult](docs/Model/ESessionResult.md)
- [ESessionState](docs/Model/ESessionState.md)
- [ESessionType](docs/Model/ESessionType.md)
- [ESessionsFiltersOrderColumn](docs/Model/ESessionsFiltersOrderColumn.md)
- [ESpeedUnit](docs/Model/ESpeedUnit.md)
- [EStorageOptimization](docs/Model/EStorageOptimization.md)
- [ETaskLogRecordStatus](docs/Model/ETaskLogRecordStatus.md)
- [ETransactionLogsSettings](docs/Model/ETransactionLogsSettings.md)
- [EViHostType](docs/Model/EViHostType.md)
- [EViRootFiltersOrderColumn](docs/Model/EViRootFiltersOrderColumn.md)
- [EVmwareDisksTypeToProcess](docs/Model/EVmwareDisksTypeToProcess.md)
- [EVmwareInventoryType](docs/Model/EVmwareInventoryType.md)
- [EWindowsHostComponentType](docs/Model/EWindowsHostComponentType.md)
- [EmailCustomNotificationType](docs/Model/EmailCustomNotificationType.md)
- [EmailNotificationSettingsModel](docs/Model/EmailNotificationSettingsModel.md)
- [EncryptionPasswordExportSpec](docs/Model/EncryptionPasswordExportSpec.md)
- [EncryptionPasswordImportSpec](docs/Model/EncryptionPasswordImportSpec.md)
- [EncryptionPasswordImportSpecCollection](docs/Model/EncryptionPasswordImportSpecCollection.md)
- [EncryptionPasswordModel](docs/Model/EncryptionPasswordModel.md)
- [EncryptionPasswordSpec](docs/Model/EncryptionPasswordSpec.md)
- [EncryptionPasswordsFilters](docs/Model/EncryptionPasswordsFilters.md)
- [EncryptionPasswordsResult](docs/Model/EncryptionPasswordsResult.md)
- [Error](docs/Model/Error.md)
- [EvCentersInventoryFiltersOrderColumn](docs/Model/EvCentersInventoryFiltersOrderColumn.md)
- [FullBackupMaintenanceDefragmentAndCompactModel](docs/Model/FullBackupMaintenanceDefragmentAndCompactModel.md)
- [FullBackupMaintenanceModel](docs/Model/FullBackupMaintenanceModel.md)
- [FullBackupMaintenanceRemoveDataModel](docs/Model/FullBackupMaintenanceRemoveDataModel.md)
- [GFSPolicySettingsModel](docs/Model/GFSPolicySettingsModel.md)
- [GFSPolicySettingsMonthlyModel](docs/Model/GFSPolicySettingsMonthlyModel.md)
- [GFSPolicySettingsWeeklyModel](docs/Model/GFSPolicySettingsWeeklyModel.md)
- [GFSPolicySettingsYearlyModel](docs/Model/GFSPolicySettingsYearlyModel.md)
- [GeneralOptionsEmailNotificationsModel](docs/Model/GeneralOptionsEmailNotificationsModel.md)
- [GeneralOptionsModel](docs/Model/GeneralOptionsModel.md)
- [GeneralOptionsNotificationsModel](docs/Model/GeneralOptionsNotificationsModel.md)
- [GlobalNetworkTrafficRulesModel](docs/Model/GlobalNetworkTrafficRulesModel.md)
- [GuestFileSystemIndexingModel](docs/Model/GuestFileSystemIndexingModel.md)
- [GuestInteractionProxiesSettingsImportModel](docs/Model/GuestInteractionProxiesSettingsImportModel.md)
- [GuestInteractionProxiesSettingsModel](docs/Model/GuestInteractionProxiesSettingsModel.md)
- [GuestOsCredentialsImportModel](docs/Model/GuestOsCredentialsImportModel.md)
- [GuestOsCredentialsModel](docs/Model/GuestOsCredentialsModel.md)
- [GuestOsCredentialsPerMachineImportModel](docs/Model/GuestOsCredentialsPerMachineImportModel.md)
- [GuestOsCredentialsPerMachineModel](docs/Model/GuestOsCredentialsPerMachineModel.md)
- [HostConnectionSpec](docs/Model/HostConnectionSpec.md)
- [JobExportSpec](docs/Model/JobExportSpec.md)
- [JobImportSpec](docs/Model/JobImportSpec.md)
- [JobImportSpecCollection](docs/Model/JobImportSpecCollection.md)
- [JobModel](docs/Model/JobModel.md)
- [JobScriptsSettingsModel](docs/Model/JobScriptsSettingsModel.md)
- [JobSpec](docs/Model/JobSpec.md)
- [JobStartSpec](docs/Model/JobStartSpec.md)
- [JobStateModel](docs/Model/JobStateModel.md)
- [JobStatesFilters](docs/Model/JobStatesFilters.md)
- [JobStatesResult](docs/Model/JobStatesResult.md)
- [JobStopSpec](docs/Model/JobStopSpec.md)
- [JobsFilters](docs/Model/JobsFilters.md)
- [JobsResult](docs/Model/JobsResult.md)
- [LinuxCredentialsModel](docs/Model/LinuxCredentialsModel.md)
- [LinuxCredentialsModelAllOf](docs/Model/LinuxCredentialsModelAllOf.md)
- [LinuxCredentialsSpec](docs/Model/LinuxCredentialsSpec.md)
- [LinuxCredentialsSpecAllOf](docs/Model/LinuxCredentialsSpecAllOf.md)
- [LinuxHostImportSpec](docs/Model/LinuxHostImportSpec.md)
- [LinuxHostModel](docs/Model/LinuxHostModel.md)
- [LinuxHostModelAllOf](docs/Model/LinuxHostModelAllOf.md)
- [LinuxHostSSHSettingsModel](docs/Model/LinuxHostSSHSettingsModel.md)
- [LinuxHostSpec](docs/Model/LinuxHostSpec.md)
- [LinuxLocalRepositorySettingsModel](docs/Model/LinuxLocalRepositorySettingsModel.md)
- [LinuxLocalStorageImportSpec](docs/Model/LinuxLocalStorageImportSpec.md)
- [LinuxLocalStorageModel](docs/Model/LinuxLocalStorageModel.md)
- [LinuxLocalStorageSpec](docs/Model/LinuxLocalStorageSpec.md)
- [LinuxLocalStorageSpecAllOf](docs/Model/LinuxLocalStorageSpecAllOf.md)
- [ManageServerExportSpec](docs/Model/ManageServerExportSpec.md)
- [ManageServerImportSpecCollection](docs/Model/ManageServerImportSpecCollection.md)
- [ManagedServerModel](docs/Model/ManagedServerModel.md)
- [ManagedServerSpec](docs/Model/ManagedServerSpec.md)
- [ManagedServersFilters](docs/Model/ManagedServersFilters.md)
- [ManagedServersResult](docs/Model/ManagedServersResult.md)
- [MountServerSettingsImportSpec](docs/Model/MountServerSettingsImportSpec.md)
- [MountServerSettingsModel](docs/Model/MountServerSettingsModel.md)
- [NetworkRepositorySettingsModel](docs/Model/NetworkRepositorySettingsModel.md)
- [NfsRepositoryShareSettingsModel](docs/Model/NfsRepositoryShareSettingsModel.md)
- [NfsRepositoryShareSettingsSpec](docs/Model/NfsRepositoryShareSettingsSpec.md)
- [NfsStorageImportSpec](docs/Model/NfsStorageImportSpec.md)
- [NfsStorageModel](docs/Model/NfsStorageModel.md)
- [NfsStorageSpec](docs/Model/NfsStorageSpec.md)
- [NfsStorageSpecAllOf](docs/Model/NfsStorageSpecAllOf.md)
- [NotificationSettingsModel](docs/Model/NotificationSettingsModel.md)
- [NotificationVmAttributeSettingsModel](docs/Model/NotificationVmAttributeSettingsModel.md)
- [ObjectRestorePointDiskModel](docs/Model/ObjectRestorePointDiskModel.md)
- [ObjectRestorePointDisksResult](docs/Model/ObjectRestorePointDisksResult.md)
- [ObjectRestorePointModel](docs/Model/ObjectRestorePointModel.md)
- [ObjectRestorePointsFilters](docs/Model/ObjectRestorePointsFilters.md)
- [ObjectRestorePointsResult](docs/Model/ObjectRestorePointsResult.md)
- [PaginationResult](docs/Model/PaginationResult.md)
- [PerformanceExtentModel](docs/Model/PerformanceExtentModel.md)
- [PerformanceTierAdvancedSettingsModel](docs/Model/PerformanceTierAdvancedSettingsModel.md)
- [PerformanceTierModel](docs/Model/PerformanceTierModel.md)
- [PlacementPolicyModel](docs/Model/PlacementPolicyModel.md)
- [PreferredNetworkModel](docs/Model/PreferredNetworkModel.md)
- [PreferredNetworksModel](docs/Model/PreferredNetworksModel.md)
- [PrimaryStorageIntegrationSettingsModel](docs/Model/PrimaryStorageIntegrationSettingsModel.md)
- [PrivateKeyChangeSpec](docs/Model/PrivateKeyChangeSpec.md)
- [ProxiesFilters](docs/Model/ProxiesFilters.md)
- [ProxiesResult](docs/Model/ProxiesResult.md)
- [ProxyDatastoreModel](docs/Model/ProxyDatastoreModel.md)
- [ProxyDatastoreSettingsModel](docs/Model/ProxyDatastoreSettingsModel.md)
- [ProxyExportSpec](docs/Model/ProxyExportSpec.md)
- [ProxyImportSpec](docs/Model/ProxyImportSpec.md)
- [ProxyImportSpecCollection](docs/Model/ProxyImportSpecCollection.md)
- [ProxyModel](docs/Model/ProxyModel.md)
- [ProxyServerSettingsImportSpec](docs/Model/ProxyServerSettingsImportSpec.md)
- [ProxyServerSettingsModel](docs/Model/ProxyServerSettingsModel.md)
- [ProxySpec](docs/Model/ProxySpec.md)
- [RepositoriesFilters](docs/Model/RepositoriesFilters.md)
- [RepositoriesResult](docs/Model/RepositoriesResult.md)
- [RepositoryAdvancedSettingsModel](docs/Model/RepositoryAdvancedSettingsModel.md)
- [RepositoryExportSpec](docs/Model/RepositoryExportSpec.md)
- [RepositoryImportSpecCollection](docs/Model/RepositoryImportSpecCollection.md)
- [RepositoryModel](docs/Model/RepositoryModel.md)
- [RepositoryShareGatewayImportSpec](docs/Model/RepositoryShareGatewayImportSpec.md)
- [RepositoryShareGatewayModel](docs/Model/RepositoryShareGatewayModel.md)
- [RepositorySpec](docs/Model/RepositorySpec.md)
- [RepositoryStateModel](docs/Model/RepositoryStateModel.md)
- [RepositoryStatesFilters](docs/Model/RepositoryStatesFilters.md)
- [RepositoryStatesResult](docs/Model/RepositoryStatesResult.md)
- [ScaleOutExtentMaintenanceSpec](docs/Model/ScaleOutExtentMaintenanceSpec.md)
- [ScaleOutRepositoriesFilters](docs/Model/ScaleOutRepositoriesFilters.md)
- [ScaleOutRepositoriesResult](docs/Model/ScaleOutRepositoriesResult.md)
- [ScaleOutRepositoryModel](docs/Model/ScaleOutRepositoryModel.md)
- [ScheduleAfterThisJobModel](docs/Model/ScheduleAfterThisJobModel.md)
- [ScheduleBackupWindowModel](docs/Model/ScheduleBackupWindowModel.md)
- [ScheduleDailyModel](docs/Model/ScheduleDailyModel.md)
- [ScheduleMonthlyModel](docs/Model/ScheduleMonthlyModel.md)
- [SchedulePeriodicallyModel](docs/Model/SchedulePeriodicallyModel.md)
- [ScheduleRetryModel](docs/Model/ScheduleRetryModel.md)
- [ScriptCommand](docs/Model/ScriptCommand.md)
- [ServerTimeModel](docs/Model/ServerTimeModel.md)
- [ServicesFilters](docs/Model/ServicesFilters.md)
- [ServicesModel](docs/Model/ServicesModel.md)
- [ServicesResult](docs/Model/ServicesResult.md)
- [SessionLogRecordModel](docs/Model/SessionLogRecordModel.md)
- [SessionLogResult](docs/Model/SessionLogResult.md)
- [SessionModel](docs/Model/SessionModel.md)
- [SessionResultModel](docs/Model/SessionResultModel.md)
- [SessionsFilters](docs/Model/SessionsFilters.md)
- [SessionsResult](docs/Model/SessionsResult.md)
- [SmbRepositoryShareSettingsModel](docs/Model/SmbRepositoryShareSettingsModel.md)
- [SmbRepositoryShareSettingsSpec](docs/Model/SmbRepositoryShareSettingsSpec.md)
- [SmbStorageImportSpec](docs/Model/SmbStorageImportSpec.md)
- [SmbStorageModel](docs/Model/SmbStorageModel.md)
- [SmbStorageSpec](docs/Model/SmbStorageSpec.md)
- [SmbStorageSpecAllOf](docs/Model/SmbStorageSpecAllOf.md)
- [StandardCredentialsModel](docs/Model/StandardCredentialsModel.md)
- [StandardCredentialsSpec](docs/Model/StandardCredentialsSpec.md)
- [StandardCredentialsSpecAllOf](docs/Model/StandardCredentialsSpecAllOf.md)
- [SyntheticFullSettingsModel](docs/Model/SyntheticFullSettingsModel.md)
- [TokenModel](docs/Model/TokenModel.md)
- [TrafficRuleModel](docs/Model/TrafficRuleModel.md)
- [VCenterInventoryFilters](docs/Model/VCenterInventoryFilters.md)
- [VCenterInventoryResult](docs/Model/VCenterInventoryResult.md)
- [VPowerNFSPortSettingsModel](docs/Model/VPowerNFSPortSettingsModel.md)
- [VSphereChangedBlockTrackingSettingsModel](docs/Model/VSphereChangedBlockTrackingSettingsModel.md)
- [ViBackupObjectModel](docs/Model/ViBackupObjectModel.md)
- [ViBackupObjectModelAllOf](docs/Model/ViBackupObjectModelAllOf.md)
- [ViHostImportSpec](docs/Model/ViHostImportSpec.md)
- [ViHostModel](docs/Model/ViHostModel.md)
- [ViHostModelAllOf](docs/Model/ViHostModelAllOf.md)
- [ViHostSpec](docs/Model/ViHostSpec.md)
- [ViHostSpecAllOf](docs/Model/ViHostSpecAllOf.md)
- [ViProxyModel](docs/Model/ViProxyModel.md)
- [ViProxySpec](docs/Model/ViProxySpec.md)
- [ViProxySpecAllOf](docs/Model/ViProxySpecAllOf.md)
- [ViRootFilters](docs/Model/ViRootFilters.md)
- [ViRootsResult](docs/Model/ViRootsResult.md)
- [VmbApiFilterModel](docs/Model/VmbApiFilterModel.md)
- [VmwareFcdInstantRecoveryDiskInfo](docs/Model/VmwareFcdInstantRecoveryDiskInfo.md)
- [VmwareFcdInstantRecoveryDiskSpec](docs/Model/VmwareFcdInstantRecoveryDiskSpec.md)
- [VmwareFcdInstantRecoveryMount](docs/Model/VmwareFcdInstantRecoveryMount.md)
- [VmwareFcdInstantRecoverySpec](docs/Model/VmwareFcdInstantRecoverySpec.md)
- [VmwareFcdQuickMigrationSpec](docs/Model/VmwareFcdQuickMigrationSpec.md)
- [VmwareFcdWriteCacheSpec](docs/Model/VmwareFcdWriteCacheSpec.md)
- [VmwareObjectDiskModel](docs/Model/VmwareObjectDiskModel.md)
- [VmwareObjectModel](docs/Model/VmwareObjectModel.md)
- [VmwareObjectSizeModel](docs/Model/VmwareObjectSizeModel.md)
- [WindowsHostComponentPortModel](docs/Model/WindowsHostComponentPortModel.md)
- [WindowsHostImportSpec](docs/Model/WindowsHostImportSpec.md)
- [WindowsHostModel](docs/Model/WindowsHostModel.md)
- [WindowsHostPortsModel](docs/Model/WindowsHostPortsModel.md)
- [WindowsHostSpec](docs/Model/WindowsHostSpec.md)
- [WindowsHostSpecAllOf](docs/Model/WindowsHostSpecAllOf.md)
- [WindowsLocalRepositorySettingsModel](docs/Model/WindowsLocalRepositorySettingsModel.md)
- [WindowsLocalStorageImportSpec](docs/Model/WindowsLocalStorageImportSpec.md)
- [WindowsLocalStorageModel](docs/Model/WindowsLocalStorageModel.md)
- [WindowsLocalStorageSpec](docs/Model/WindowsLocalStorageSpec.md)
- [WindowsLocalStorageSpecAllOf](docs/Model/WindowsLocalStorageSpecAllOf.md)

## Authorization

Authentication schemes defined for the API:
### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@veeam.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0-rev1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
