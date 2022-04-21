<?php
/**
 * CashbookEntryKind
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.15
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;
use \FattureInCloud\ObjectSerializer;

/**
 * CashbookEntryKind Class Doc Comment
 *
 * @category Class
 * @description Cashbook kind.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class CashbookEntryKind
{
    /**
     * Possible values of this enum
     */
    const CASHBOOK = 'cashbook';

    const ISSUED_DOCUMENT = 'issued_document';

    const RECEIVED_DOCUMENT = 'received_document';

    const TAX = 'tax';

    const RECEIPT = 'receipt';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CASHBOOK,
            self::ISSUED_DOCUMENT,
            self::RECEIVED_DOCUMENT,
            self::TAX,
            self::RECEIPT
        ];
    }
}


