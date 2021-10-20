<?php
/**
 * ReceivedDocumentTest
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
 * The version of the OpenAPI document: 2.0.0
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * ReceivedDocumentTest Class Doc Comment
 *
 * @category    Class
 * @description ReceivedDocument
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ReceivedDocumentTest extends TestCase
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
            "id": 12345,
            "type": "expense",
            "description": "Soggiorno di lavoro",
            "category": "cat",
            "amortization": 1,
            "rc_center": "rcc",
            "invoice_number": "inv12345",
            "is_marked": false,
            "is_detailed": false,
            "e_invoice": false,
            "date": "2021-08-15",
            "next_due_date": "2021-08-15",
            "amount_net": 592,
            "amount_vat": 0,
            "amount_gross": 592,
            "amount_withholding_tax": 0,
            "amount_other_withholding_tax": 0,
            "tax_deductibility": 50,
            "vat_deductibility": 100,
            "attachment_url": "spesa_ger5i783t45hu6ti.pdf",
            "attachment_preview_url": "/preview.pdf",
            "entity": {
                "id": 111,
                "name": "Hotel Rubino Palace"
            },
            "currency": {
                "id": "EUR",
                "exchange_rate": "1.00000",
                "symbol": "€"
            },
            "payments_list": [
                {
                  "amount": 592,
                  "due_date": "2021-08-15",
                  "paid_date": "2021-08-15",
                  "id": 777,
                  "payment_terms": {
                    "days": 0,
                    "type": "standard"
                  },
                  "status": "paid",
                  "payment_account": {
                    "id": 222,
                    "name": "Contanti",
                    "virtual": false
                  }
                }
            ],
            "items_list": [
                {
                "id": 12345,
                "product_id": 54321,
                "code": "pdr01",
                "measure": "very big",
                "name": "prod uan",
                "net_price": 100,
                "category": "other",
                "qty": 1,
                "stock": 99,
                "vat": {
                    "id": 1020,
                    "value": 0,
                    "description": "PA Non imp art. 2",
                    "is_disabled": false
                }
            }],
            "attachment_token": "sjfbisfb43t5y454y65uhete"
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ReceivedDocument');
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
     * Test "ReceivedDocument"
     */
    public function testReceivedDocument()
    {
        foreach ($this->array as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        TestCase::assertEquals($this->object['id'], $this->array['id']);
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        TestCase::assertEquals($this->object['type'], $this->array['type']);
    }

    /**
     * Test attribute "entity"
     */
    public function testPropertyEntity()
    {
        foreach ($this->array['entity'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['entity']);
        }
    }

    /**
     * Test attribute "date"
     */
    public function testPropertyDate()
    {
        $date = new \DateTime($this->array['date']);
        TestCase::assertEquals($this->object['date'], $date);
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
        TestCase::assertEquals($this->object['category'], $this->array['category']);
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        TestCase::assertEquals($this->object['description'], $this->array['description']);
    }

    /**
     * Test attribute "amount_net"
     */
    public function testPropertyAmountNet()
    {
        TestCase::assertEquals($this->object['amount_net'], $this->array['amount_net']);
    }

    /**
     * Test attribute "amount_vat"
     */
    public function testPropertyAmountVat()
    {
        TestCase::assertEquals($this->object['amount_vat'], $this->array['amount_vat']);
    }

    /**
     * Test attribute "amount_withholding_tax"
     */
    public function testPropertyAmountWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_withholding_tax'], $this->array['amount_withholding_tax']);
    }

    /**
     * Test attribute "amount_other_withholding_tax"
     */
    public function testPropertyAmountOtherWithholdingTax()
    {
        TestCase::assertEquals($this->object['amount_other_withholding_tax'], $this->array['amount_other_withholding_tax']);
    }

    /**
     * Test attribute "amount_gross"
     */
    public function testPropertyAmountGross()
    {
        TestCase::assertEquals($this->object['amount_gross'], $this->array['amount_gross']);
    }

    /**
     * Test attribute "amortization"
     */
    public function testPropertyAmortization()
    {
        TestCase::assertEquals($this->object['amortization'], $this->array['amortization']);
    }

    /**
     * Test attribute "rc_center"
     */
    public function testPropertyRcCenter()
    {
        TestCase::assertEquals($this->object['rc_center'], $this->array['rc_center']);
    }

    /**
     * Test attribute "invoice_number"
     */
    public function testPropertyInvoiceNumber()
    {
        TestCase::assertEquals($this->object['invoice_number'], $this->array['invoice_number']);
    }

    /**
     * Test attribute "is_marked"
     */
    public function testPropertyIsMarked()
    {
        TestCase::assertEquals($this->object['is_marked'], $this->array['is_marked']);
    }

    /**
     * Test attribute "is_detailed"
     */
    public function testPropertyIsDetailed()
    {
        TestCase::assertEquals($this->object['is_detailed'], $this->array['is_detailed']);
    }

    /**
     * Test attribute "e_invoice"
     */
    public function testPropertyEInvoice()
    {
        TestCase::assertEquals($this->object['e_invoice'], $this->array['e_invoice']);
    }

    /**
     * Test attribute "next_due_date"
     */
    public function testPropertyNextDueDate()
    {
        $date = new \DateTime($this->array['next_due_date']);
        TestCase::assertEquals($this->object['next_due_date'], $date);
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
        foreach ($this->array['currency'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['currency']);
        }
    }

    /**
     * Test attribute "tax_deductibility"
     */
    public function testPropertyTaxDeductibility()
    {
        TestCase::assertEquals($this->object['tax_deductibility'], $this->array['tax_deductibility']);
    }

    /**
     * Test attribute "vat_deductibility"
     */
    public function testPropertyVatDeductibility()
    {
        TestCase::assertEquals($this->object['vat_deductibility'], $this->array['vat_deductibility']);
    }

    /**
     * Test attribute "items_list"
     */
    public function testPropertyItemsList()
    {
        foreach ($this->array['items_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['items_list']);
        }
    }

    /**
     * Test attribute "payments_list"
     */
    public function testPropertyPaymentsList()
    {
        foreach ($this->array['payments_list'] as $key => $value) 
        {
           Testcase::assertArrayHasKey($key, $this->object['payments_list']);
        }
    }

    /**
     * Test attribute "attachment_url"
     */
    public function testPropertyAttachmentUrl()
    {
        TestCase::assertEquals($this->object['attachment_url'], $this->array['attachment_url']);
    }

    /**
     * Test attribute "attachment_preview_url"
     */
    public function testPropertyAttachmentPreviewUrl()
    {
        TestCase::assertEquals($this->object['attachment_preview_url'], $this->array['attachment_preview_url']);
    }

    /**
     * Test attribute "attachment_token"
     */
    public function testPropertyAttachmentToken()
    {
        TestCase::assertEquals($this->object['attachment_token'], $this->array['attachment_token']);
    }
}