<?php
/**
 * PermissionsTest
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
 * ## Request informations In every request description you will be able to find some additional informations about context, permissions and supported functionality:  | Parameter | Description | |-----------|-------------| | 👥 Context | Indicate the subject of the request. Can be `company`, `user` or `accountant`.  | | 🔒 Required scope | If present, indicates the required scope to fulfill the request. | | 🔍 Filtering | If present, indicates which fields support the filtering feature. | | ↕️ Sorting | If present, indicates which fields support the sorting feature. | | 📄 Paginated results | If present, indicate that the results are paginated. | | 🎩 Customized responses supported | If present, indicate that you can use `field` or `fieldset` to customize the response body. |  For example the request `GET /entities/{entityRole}` have tis informations: \\ 👥 Company context \\ 🔒 Required scope: `entity.clients:r` or `entity.suppliers:r` (depending on `entityRole`) \\ 🔍 Filtering: `id`, `name` \\ ↕️ Sorting: `id`, `name` \\ 📄 Paginated results \\ 🎩 Customized responses supported  Keep in mind that if you are making **company realted requests**, you will need to specify the company id in the requests: ``` GET /c/{company_id}/issued_documents ```
 *
 * The version of the OpenAPI document: 2.0.6
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FattureInCloud\Test\Model;

use PHPUnit\Framework\TestCase;
use \FattureInCloud\ObjectSerializer;

/**
 * PermissionsTest Class Doc Comment
 *
 * @category    Class
 * @description Set of permissions.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class PermissionsTest extends TestCase
{
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $json = '{
            "fic_situation": "write",
            "fic_clients": "write",
            "fic_suppliers": "write",
            "fic_products": "write",
            "fic_issued_documents": "write",
            "fic_received_documents": "write",
            "fic_receipts": "write",
            "fic_calendar": "write",
            "fic_archive": "write",
            "fic_taxes": "write",
            "fic_stock": "write",
            "fic_cashbook": "write",
            "fic_settings": "write",
            "fic_emails": "write",
            "dic_employees": "write",
            "dic_timesheet": "write",
            "dic_settings": "write",
            "fic_export": "write",
            "fic_import_bankstatements": "write",
            "fic_import_clients_suppliers": "write",
            "fic_import_issued_documents": "write",
            "fic_import_products": "write",
            "fic_recurring": "write",
            "fic_riba": "write",
            "fic_issued_documents_detailed": {
                "quotes": "write",
                "proformas": "write",
                "invoices": "write",
                "receipts": "write",
                "delivery_notes": "write",
                "credit_notes": "write",
                "orders": "write",
                "work_reports": "write",
                "supplier_orders": "write",
                "self_invoices": "write"
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\Permissions');
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "Permissions"
     */
    public function testPermissions()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "fic_situation"
     */
    public function testPropertyFicSituation()
    {
        TestCase::assertEquals($this->object['fic_situation'], $this->array['fic_situation']);
    }

    /**
     * Test attribute "fic_clients"
     */
    public function testPropertyFicClients()
    {
        TestCase::assertEquals($this->object['fic_clients'], $this->array['fic_clients']);
    }

    /**
     * Test attribute "fic_suppliers"
     */
    public function testPropertyFicSuppliers()
    {
        TestCase::assertEquals($this->object['fic_suppliers'], $this->array['fic_suppliers']);
    }

    /**
     * Test attribute "fic_products"
     */
    public function testPropertyFicProducts()
    {
        TestCase::assertEquals($this->object['fic_products'], $this->array['fic_products']);
    }

    /**
     * Test attribute "fic_issued_documents"
     */
    public function testPropertyFicIssuedDocuments()
    {
        TestCase::assertEquals($this->object['fic_issued_documents'], $this->array['fic_issued_documents']);
    }

    /**
     * Test attribute "fic_received_documents"
     */
    public function testPropertyFicReceivedDocuments()
    {
        TestCase::assertEquals($this->object['fic_received_documents'], $this->array['fic_received_documents']);
    }

    /**
     * Test attribute "fic_receipts"
     */
    public function testPropertyFicReceipts()
    {
        TestCase::assertEquals($this->object['fic_receipts'], $this->array['fic_receipts']);
    }

    /**
     * Test attribute "fic_calendar"
     */
    public function testPropertyFicCalendar()
    {
        TestCase::assertEquals($this->object['fic_calendar'], $this->array['fic_calendar']);
    }

    /**
     * Test attribute "fic_archive"
     */
    public function testPropertyFicArchive()
    {
        TestCase::assertEquals($this->object['fic_archive'], $this->array['fic_archive']);
    }

    /**
     * Test attribute "fic_taxes"
     */
    public function testPropertyFicTaxes()
    {
        TestCase::assertEquals($this->object['fic_taxes'], $this->array['fic_taxes']);
    }

    /**
     * Test attribute "fic_stock"
     */
    public function testPropertyFicStock()
    {
        TestCase::assertEquals($this->object['fic_stock'], $this->array['fic_stock']);
    }

    /**
     * Test attribute "fic_cashbook"
     */
    public function testPropertyFicCashbook()
    {
        TestCase::assertEquals($this->object['fic_cashbook'], $this->array['fic_cashbook']);
    }

    /**
     * Test attribute "fic_settings"
     */
    public function testPropertyFicSettings()
    {
        TestCase::assertEquals($this->object['fic_settings'], $this->array['fic_settings']);
    }

    /**
     * Test attribute "fic_emails"
     */
    public function testPropertyFicEmails()
    {
        TestCase::assertEquals($this->object['fic_emails'], $this->array['fic_emails']);
    }

    /**
     * Test attribute "fic_export"
     */
    public function testPropertyFicExport()
    {
        TestCase::assertEquals($this->object['fic_export'], $this->array['fic_export']);
    }

    /**
     * Test attribute "fic_import_bankstatements"
     */
    public function testPropertyFicImportBankstatements()
    {
        TestCase::assertEquals($this->object['fic_import_bankstatements'], $this->array['fic_import_bankstatements']);
    }

    /**
     * Test attribute "fic_import_clients_suppliers"
     */
    public function testPropertyFicImportClientsSuppliers()
    {
        TestCase::assertEquals($this->object['fic_import_clients_suppliers'], $this->array['fic_import_clients_suppliers']);
    }

    /**
     * Test attribute "fic_import_issued_documents"
     */
    public function testPropertyFicImportIssuedDocuments()
    {
        TestCase::assertEquals($this->object['fic_import_issued_documents'], $this->array['fic_import_issued_documents']);
    }

    /**
     * Test attribute "fic_import_products"
     */
    public function testPropertyFicImportProducts()
    {
        TestCase::assertEquals($this->object['fic_import_products'], $this->array['fic_import_products']);
    }

    /**
     * Test attribute "fic_recurring"
     */
    public function testPropertyFicRecurring()
    {
        TestCase::assertEquals($this->object['fic_recurring'], $this->array['fic_recurring']);
    }

    /**
     * Test attribute "fic_riba"
     */
    public function testPropertyFicRiba()
    {
        TestCase::assertEquals($this->object['fic_riba'], $this->array['fic_riba']);
    }

    /**
     * Test attribute "dic_employees"
     */
    public function testPropertyDicEmployees()
    {
        TestCase::assertEquals($this->object['dic_employees'], $this->array['dic_employees']);
    }

    /**
     * Test attribute "dic_settings"
     */
    public function testPropertyDicSettings()
    {
        TestCase::assertEquals($this->object['dic_settings'], $this->array['dic_settings']);
    }

    /**
     * Test attribute "dic_timesheet"
     */
    public function testPropertyDicTimesheet()
    {
        TestCase::assertEquals($this->object['dic_timesheet'], $this->array['dic_timesheet']);
    }

    /**
     * Test attribute "fic_issued_documents_detailed"
     */
    public function testPropertyFicIssuedDocumentsDetailed()
    {
        foreach ($this->array['fic_issued_documents_detailed'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['fic_issued_documents_detailed']);
        }
    }
}
