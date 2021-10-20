<?php
/**
 * IssuedDocumentType
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
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 400.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.  For more information, please visit https://www.fattureincloud.it.
 *
 * The version of the OpenAPI document: 2.0.1
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;
use \FattureInCloud\ObjectSerializer;

/**
 * IssuedDocumentType Class Doc Comment
 *
 * @category Class
 * @description Issued document type.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentType
{
    /**
     * Possible values of this enum
     */
    const INVOICE = 'invoice';
    const QUOTE = 'quote';
    const PROFORMA = 'proforma';
    const RECEIPT = 'receipt';
    const DELIVERY_NOTE = 'delivery_note';
    const CREDIT_NOTE = 'credit_note';
    const ORDER = 'order';
    const WORK_REPORT = 'work_report';
    const SUPPLIER_ORDER = 'supplier_order';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVOICE,
            self::QUOTE,
            self::PROFORMA,
            self::RECEIPT,
            self::DELIVERY_NOTE,
            self::CREDIT_NOTE,
            self::ORDER,
            self::WORK_REPORT,
            self::SUPPLIER_ORDER,
        ];
    }
}

