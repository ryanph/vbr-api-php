<?php
/**
 * ERepositoryStatesFiltersOrderColumn
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Veeam Backup & Replication REST API
 *
 * This document lists paths (endpoints) of the Veeam Backup & Replication REST API and operations that you can perform by sending HTTP requests to the paths.<br> Requests can contain parameters in their path, query and header. POST and PUT requests can include a request body with resource payload. In response, you receive a conventional HTTP response code, HTTP response header and an optional response body schema that contains a result model.<br> Parameters, request bodies, and response bodies are defined inline or refer to schemas defined globally. Some schemas are polymorphic.
 *
 * The version of the OpenAPI document: 1.0-rev1
 * Contact: support@veeam.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ERepositoryStatesFiltersOrderColumn Class Doc Comment
 *
 * @category Class
 * @description Orders repositories by the specified column.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ERepositoryStatesFiltersOrderColumn
{
    /**
     * Possible values of this enum
     */
    public const NAME = 'Name';

    public const TYPE = 'Type';

    public const HOST = 'Host';

    public const PATH = 'Path';

    public const CAPACITY_GB = 'CapacityGB';

    public const FREE_GB = 'FreeGB';

    public const USED_SPACE_GB = 'UsedSpaceGB';

    public const DESCRIPTION = 'Description';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NAME,
            self::TYPE,
            self::HOST,
            self::PATH,
            self::CAPACITY_GB,
            self::FREE_GB,
            self::USED_SPACE_GB,
            self::DESCRIPTION
        ];
    }
}


