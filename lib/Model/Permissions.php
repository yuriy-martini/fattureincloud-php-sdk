<?php
/**
 * Permissions
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 2.0.18
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;

use \ArrayAccess;
use \FattureInCloud\ObjectSerializer;

/**
 * Permissions Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Permissions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Permissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fic_situation' => '\FattureInCloud\Model\PermissionLevel',
        'fic_clients' => '\FattureInCloud\Model\PermissionLevel',
        'fic_suppliers' => '\FattureInCloud\Model\PermissionLevel',
        'fic_products' => '\FattureInCloud\Model\PermissionLevel',
        'fic_issued_documents' => '\FattureInCloud\Model\PermissionLevel',
        'fic_received_documents' => '\FattureInCloud\Model\PermissionLevel',
        'fic_receipts' => '\FattureInCloud\Model\PermissionLevel',
        'fic_calendar' => '\FattureInCloud\Model\PermissionLevel',
        'fic_archive' => '\FattureInCloud\Model\PermissionLevel',
        'fic_taxes' => '\FattureInCloud\Model\PermissionLevel',
        'fic_stock' => '\FattureInCloud\Model\PermissionLevel',
        'fic_cashbook' => '\FattureInCloud\Model\PermissionLevel',
        'fic_settings' => '\FattureInCloud\Model\PermissionLevel',
        'fic_emails' => '\FattureInCloud\Model\PermissionLevel',
        'fic_export' => '\FattureInCloud\Model\PermissionLevel',
        'fic_import_bankstatements' => '\FattureInCloud\Model\PermissionLevel',
        'fic_import_clients_suppliers' => '\FattureInCloud\Model\PermissionLevel',
        'fic_import_issued_documents' => '\FattureInCloud\Model\PermissionLevel',
        'fic_import_products' => '\FattureInCloud\Model\PermissionLevel',
        'fic_recurring' => '\FattureInCloud\Model\PermissionLevel',
        'fic_riba' => '\FattureInCloud\Model\PermissionLevel',
        'dic_employees' => '\FattureInCloud\Model\PermissionLevel',
        'dic_settings' => '\FattureInCloud\Model\PermissionLevel',
        'dic_timesheet' => '\FattureInCloud\Model\PermissionLevel',
        'fic_issued_documents_detailed' => '\FattureInCloud\Model\PermissionsFicIssuedDocumentsDetailed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fic_situation' => null,
        'fic_clients' => null,
        'fic_suppliers' => null,
        'fic_products' => null,
        'fic_issued_documents' => null,
        'fic_received_documents' => null,
        'fic_receipts' => null,
        'fic_calendar' => null,
        'fic_archive' => null,
        'fic_taxes' => null,
        'fic_stock' => null,
        'fic_cashbook' => null,
        'fic_settings' => null,
        'fic_emails' => null,
        'fic_export' => null,
        'fic_import_bankstatements' => null,
        'fic_import_clients_suppliers' => null,
        'fic_import_issued_documents' => null,
        'fic_import_products' => null,
        'fic_recurring' => null,
        'fic_riba' => null,
        'dic_employees' => null,
        'dic_settings' => null,
        'dic_timesheet' => null,
        'fic_issued_documents_detailed' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fic_situation' => 'fic_situation',
        'fic_clients' => 'fic_clients',
        'fic_suppliers' => 'fic_suppliers',
        'fic_products' => 'fic_products',
        'fic_issued_documents' => 'fic_issued_documents',
        'fic_received_documents' => 'fic_received_documents',
        'fic_receipts' => 'fic_receipts',
        'fic_calendar' => 'fic_calendar',
        'fic_archive' => 'fic_archive',
        'fic_taxes' => 'fic_taxes',
        'fic_stock' => 'fic_stock',
        'fic_cashbook' => 'fic_cashbook',
        'fic_settings' => 'fic_settings',
        'fic_emails' => 'fic_emails',
        'fic_export' => 'fic_export',
        'fic_import_bankstatements' => 'fic_import_bankstatements',
        'fic_import_clients_suppliers' => 'fic_import_clients_suppliers',
        'fic_import_issued_documents' => 'fic_import_issued_documents',
        'fic_import_products' => 'fic_import_products',
        'fic_recurring' => 'fic_recurring',
        'fic_riba' => 'fic_riba',
        'dic_employees' => 'dic_employees',
        'dic_settings' => 'dic_settings',
        'dic_timesheet' => 'dic_timesheet',
        'fic_issued_documents_detailed' => 'fic_issued_documents_detailed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fic_situation' => 'setFicSituation',
        'fic_clients' => 'setFicClients',
        'fic_suppliers' => 'setFicSuppliers',
        'fic_products' => 'setFicProducts',
        'fic_issued_documents' => 'setFicIssuedDocuments',
        'fic_received_documents' => 'setFicReceivedDocuments',
        'fic_receipts' => 'setFicReceipts',
        'fic_calendar' => 'setFicCalendar',
        'fic_archive' => 'setFicArchive',
        'fic_taxes' => 'setFicTaxes',
        'fic_stock' => 'setFicStock',
        'fic_cashbook' => 'setFicCashbook',
        'fic_settings' => 'setFicSettings',
        'fic_emails' => 'setFicEmails',
        'fic_export' => 'setFicExport',
        'fic_import_bankstatements' => 'setFicImportBankstatements',
        'fic_import_clients_suppliers' => 'setFicImportClientsSuppliers',
        'fic_import_issued_documents' => 'setFicImportIssuedDocuments',
        'fic_import_products' => 'setFicImportProducts',
        'fic_recurring' => 'setFicRecurring',
        'fic_riba' => 'setFicRiba',
        'dic_employees' => 'setDicEmployees',
        'dic_settings' => 'setDicSettings',
        'dic_timesheet' => 'setDicTimesheet',
        'fic_issued_documents_detailed' => 'setFicIssuedDocumentsDetailed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fic_situation' => 'getFicSituation',
        'fic_clients' => 'getFicClients',
        'fic_suppliers' => 'getFicSuppliers',
        'fic_products' => 'getFicProducts',
        'fic_issued_documents' => 'getFicIssuedDocuments',
        'fic_received_documents' => 'getFicReceivedDocuments',
        'fic_receipts' => 'getFicReceipts',
        'fic_calendar' => 'getFicCalendar',
        'fic_archive' => 'getFicArchive',
        'fic_taxes' => 'getFicTaxes',
        'fic_stock' => 'getFicStock',
        'fic_cashbook' => 'getFicCashbook',
        'fic_settings' => 'getFicSettings',
        'fic_emails' => 'getFicEmails',
        'fic_export' => 'getFicExport',
        'fic_import_bankstatements' => 'getFicImportBankstatements',
        'fic_import_clients_suppliers' => 'getFicImportClientsSuppliers',
        'fic_import_issued_documents' => 'getFicImportIssuedDocuments',
        'fic_import_products' => 'getFicImportProducts',
        'fic_recurring' => 'getFicRecurring',
        'fic_riba' => 'getFicRiba',
        'dic_employees' => 'getDicEmployees',
        'dic_settings' => 'getDicSettings',
        'dic_timesheet' => 'getDicTimesheet',
        'fic_issued_documents_detailed' => 'getFicIssuedDocumentsDetailed'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fic_situation'] = $data['fic_situation'] ?? null;
        $this->container['fic_clients'] = $data['fic_clients'] ?? null;
        $this->container['fic_suppliers'] = $data['fic_suppliers'] ?? null;
        $this->container['fic_products'] = $data['fic_products'] ?? null;
        $this->container['fic_issued_documents'] = $data['fic_issued_documents'] ?? null;
        $this->container['fic_received_documents'] = $data['fic_received_documents'] ?? null;
        $this->container['fic_receipts'] = $data['fic_receipts'] ?? null;
        $this->container['fic_calendar'] = $data['fic_calendar'] ?? null;
        $this->container['fic_archive'] = $data['fic_archive'] ?? null;
        $this->container['fic_taxes'] = $data['fic_taxes'] ?? null;
        $this->container['fic_stock'] = $data['fic_stock'] ?? null;
        $this->container['fic_cashbook'] = $data['fic_cashbook'] ?? null;
        $this->container['fic_settings'] = $data['fic_settings'] ?? null;
        $this->container['fic_emails'] = $data['fic_emails'] ?? null;
        $this->container['fic_export'] = $data['fic_export'] ?? null;
        $this->container['fic_import_bankstatements'] = $data['fic_import_bankstatements'] ?? null;
        $this->container['fic_import_clients_suppliers'] = $data['fic_import_clients_suppliers'] ?? null;
        $this->container['fic_import_issued_documents'] = $data['fic_import_issued_documents'] ?? null;
        $this->container['fic_import_products'] = $data['fic_import_products'] ?? null;
        $this->container['fic_recurring'] = $data['fic_recurring'] ?? null;
        $this->container['fic_riba'] = $data['fic_riba'] ?? null;
        $this->container['dic_employees'] = $data['dic_employees'] ?? null;
        $this->container['dic_settings'] = $data['dic_settings'] ?? null;
        $this->container['dic_timesheet'] = $data['dic_timesheet'] ?? null;
        $this->container['fic_issued_documents_detailed'] = $data['fic_issued_documents_detailed'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets fic_situation
     *
     * @return string|null
     */
    public function getFicSituation()
    {
        return $this->container['fic_situation'];
    }

    /**
     * Sets fic_situation, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_situation fic_situation
     *
     * @return self
     */
    public function setFicSituation($fic_situation)
    {
        $this->container['fic_situation'] = $fic_situation;

        return $this;
    }

    /**
     * Gets fic_clients
     *
     * @return string|null
     */
    public function getFicClients()
    {
        return $this->container['fic_clients'];
    }

    /**
     * Sets fic_clients, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_clients fic_clients
     *
     * @return self
     */
    public function setFicClients($fic_clients)
    {
        $this->container['fic_clients'] = $fic_clients;

        return $this;
    }

    /**
     * Gets fic_suppliers
     *
     * @return string|null
     */
    public function getFicSuppliers()
    {
        return $this->container['fic_suppliers'];
    }

    /**
     * Sets fic_suppliers, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_suppliers fic_suppliers
     *
     * @return self
     */
    public function setFicSuppliers($fic_suppliers)
    {
        $this->container['fic_suppliers'] = $fic_suppliers;

        return $this;
    }

    /**
     * Gets fic_products
     *
     * @return string|null
     */
    public function getFicProducts()
    {
        return $this->container['fic_products'];
    }

    /**
     * Sets fic_products, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_products fic_products
     *
     * @return self
     */
    public function setFicProducts($fic_products)
    {
        $this->container['fic_products'] = $fic_products;

        return $this;
    }

    /**
     * Gets fic_issued_documents
     *
     * @return string|null
     */
    public function getFicIssuedDocuments()
    {
        return $this->container['fic_issued_documents'];
    }

    /**
     * Sets fic_issued_documents, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_issued_documents fic_issued_documents
     *
     * @return self
     */
    public function setFicIssuedDocuments($fic_issued_documents)
    {
        $this->container['fic_issued_documents'] = $fic_issued_documents;

        return $this;
    }

    /**
     * Gets fic_received_documents
     *
     * @return string|null
     */
    public function getFicReceivedDocuments()
    {
        return $this->container['fic_received_documents'];
    }

    /**
     * Sets fic_received_documents, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_received_documents fic_received_documents
     *
     * @return self
     */
    public function setFicReceivedDocuments($fic_received_documents)
    {
        $this->container['fic_received_documents'] = $fic_received_documents;

        return $this;
    }

    /**
     * Gets fic_receipts
     *
     * @return string|null
     */
    public function getFicReceipts()
    {
        return $this->container['fic_receipts'];
    }

    /**
     * Sets fic_receipts, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_receipts fic_receipts
     *
     * @return self
     */
    public function setFicReceipts($fic_receipts)
    {
        $this->container['fic_receipts'] = $fic_receipts;

        return $this;
    }

    /**
     * Gets fic_calendar
     *
     * @return string|null
     */
    public function getFicCalendar()
    {
        return $this->container['fic_calendar'];
    }

    /**
     * Sets fic_calendar, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_calendar fic_calendar
     *
     * @return self
     */
    public function setFicCalendar($fic_calendar)
    {
        $this->container['fic_calendar'] = $fic_calendar;

        return $this;
    }

    /**
     * Gets fic_archive
     *
     * @return string|null
     */
    public function getFicArchive()
    {
        return $this->container['fic_archive'];
    }

    /**
     * Sets fic_archive, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_archive fic_archive
     *
     * @return self
     */
    public function setFicArchive($fic_archive)
    {
        $this->container['fic_archive'] = $fic_archive;

        return $this;
    }

    /**
     * Gets fic_taxes
     *
     * @return string|null
     */
    public function getFicTaxes()
    {
        return $this->container['fic_taxes'];
    }

    /**
     * Sets fic_taxes, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_taxes fic_taxes
     *
     * @return self
     */
    public function setFicTaxes($fic_taxes)
    {
        $this->container['fic_taxes'] = $fic_taxes;

        return $this;
    }

    /**
     * Gets fic_stock
     *
     * @return string|null
     */
    public function getFicStock()
    {
        return $this->container['fic_stock'];
    }

    /**
     * Sets fic_stock, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_stock fic_stock
     *
     * @return self
     */
    public function setFicStock($fic_stock)
    {
        $this->container['fic_stock'] = $fic_stock;

        return $this;
    }

    /**
     * Gets fic_cashbook
     *
     * @return string|null
     */
    public function getFicCashbook()
    {
        return $this->container['fic_cashbook'];
    }

    /**
     * Sets fic_cashbook, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_cashbook fic_cashbook
     *
     * @return self
     */
    public function setFicCashbook($fic_cashbook)
    {
        $this->container['fic_cashbook'] = $fic_cashbook;

        return $this;
    }

    /**
     * Gets fic_settings
     *
     * @return string|null
     */
    public function getFicSettings()
    {
        return $this->container['fic_settings'];
    }

    /**
     * Sets fic_settings, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_settings fic_settings
     *
     * @return self
     */
    public function setFicSettings($fic_settings)
    {
        $this->container['fic_settings'] = $fic_settings;

        return $this;
    }

    /**
     * Gets fic_emails
     *
     * @return string|null
     */
    public function getFicEmails()
    {
        return $this->container['fic_emails'];
    }

    /**
     * Sets fic_emails, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_emails fic_emails
     *
     * @return self
     */
    public function setFicEmails($fic_emails)
    {
        $this->container['fic_emails'] = $fic_emails;

        return $this;
    }

    /**
     * Gets fic_export
     *
     * @return string|null
     */
    public function getFicExport()
    {
        return $this->container['fic_export'];
    }

    /**
     * Sets fic_export, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_export fic_export
     *
     * @return self
     */
    public function setFicExport($fic_export)
    {
        $this->container['fic_export'] = $fic_export;

        return $this;
    }

    /**
     * Gets fic_import_bankstatements
     *
     * @return string|null
     */
    public function getFicImportBankstatements()
    {
        return $this->container['fic_import_bankstatements'];
    }

    /**
     * Sets fic_import_bankstatements, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_import_bankstatements fic_import_bankstatements
     *
     * @return self
     */
    public function setFicImportBankstatements($fic_import_bankstatements)
    {
        $this->container['fic_import_bankstatements'] = $fic_import_bankstatements;

        return $this;
    }

    /**
     * Gets fic_import_clients_suppliers
     *
     * @return string|null
     */
    public function getFicImportClientsSuppliers()
    {
        return $this->container['fic_import_clients_suppliers'];
    }

    /**
     * Sets fic_import_clients_suppliers, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_import_clients_suppliers fic_import_clients_suppliers
     *
     * @return self
     */
    public function setFicImportClientsSuppliers($fic_import_clients_suppliers)
    {
        $this->container['fic_import_clients_suppliers'] = $fic_import_clients_suppliers;

        return $this;
    }

    /**
     * Gets fic_import_issued_documents
     *
     * @return string|null
     */
    public function getFicImportIssuedDocuments()
    {
        return $this->container['fic_import_issued_documents'];
    }

    /**
     * Sets fic_import_issued_documents, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_import_issued_documents fic_import_issued_documents
     *
     * @return self
     */
    public function setFicImportIssuedDocuments($fic_import_issued_documents)
    {
        $this->container['fic_import_issued_documents'] = $fic_import_issued_documents;

        return $this;
    }

    /**
     * Gets fic_import_products
     *
     * @return string|null
     */
    public function getFicImportProducts()
    {
        return $this->container['fic_import_products'];
    }

    /**
     * Sets fic_import_products, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_import_products fic_import_products
     *
     * @return self
     */
    public function setFicImportProducts($fic_import_products)
    {
        $this->container['fic_import_products'] = $fic_import_products;

        return $this;
    }

    /**
     * Gets fic_recurring
     *
     * @return string|null
     */
    public function getFicRecurring()
    {
        return $this->container['fic_recurring'];
    }

    /**
     * Sets fic_recurring, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_recurring fic_recurring
     *
     * @return self
     */
    public function setFicRecurring($fic_recurring)
    {
        $this->container['fic_recurring'] = $fic_recurring;

        return $this;
    }

    /**
     * Gets fic_riba
     *
     * @return string|null
     */
    public function getFicRiba()
    {
        return $this->container['fic_riba'];
    }

    /**
     * Sets fic_riba, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $fic_riba fic_riba
     *
     * @return self
     */
    public function setFicRiba($fic_riba)
    {
        $this->container['fic_riba'] = $fic_riba;

        return $this;
    }

    /**
     * Gets dic_employees
     *
     * @return string|null
     */
    public function getDicEmployees()
    {
        return $this->container['dic_employees'];
    }

    /**
     * Sets dic_employees, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $dic_employees dic_employees
     *
     * @return self
     */
    public function setDicEmployees($dic_employees)
    {
        $this->container['dic_employees'] = $dic_employees;

        return $this;
    }

    /**
     * Gets dic_settings
     *
     * @return string|null
     */
    public function getDicSettings()
    {
        return $this->container['dic_settings'];
    }

    /**
     * Sets dic_settings, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $dic_settings dic_settings
     *
     * @return self
     */
    public function setDicSettings($dic_settings)
    {
        $this->container['dic_settings'] = $dic_settings;

        return $this;
    }

    /**
     * Gets dic_timesheet
     *
     * @return string|null
     */
    public function getDicTimesheet()
    {
        return $this->container['dic_timesheet'];
    }

    /**
     * Sets dic_timesheet, the accepted values are available in \FattureInCloud\Model\PermissionLevel
     *
     * @param string|null $dic_timesheet dic_timesheet
     *
     * @return self
     */
    public function setDicTimesheet($dic_timesheet)
    {
        $this->container['dic_timesheet'] = $dic_timesheet;

        return $this;
    }

    /**
     * Gets fic_issued_documents_detailed
     *
     * @return \FattureInCloud\Model\PermissionsFicIssuedDocumentsDetailed|null
     */
    public function getFicIssuedDocumentsDetailed()
    {
        return $this->container['fic_issued_documents_detailed'];
    }

    /**
     * Sets fic_issued_documents_detailed
     *
     * @param \FattureInCloud\Model\PermissionsFicIssuedDocumentsDetailed|null $fic_issued_documents_detailed fic_issued_documents_detailed
     *
     * @return self
     */
    public function setFicIssuedDocumentsDetailed($fic_issued_documents_detailed)
    {
        $this->container['fic_issued_documents_detailed'] = $fic_issued_documents_detailed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link     https://fattureincloud.it
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


