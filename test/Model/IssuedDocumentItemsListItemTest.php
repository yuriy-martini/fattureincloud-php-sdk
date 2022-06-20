<?php
/**
 * IssuedDocumentItemsListItemTest
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
 * The version of the OpenAPI document: 2.0.10
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * IssuedDocumentItemsListItemTest Class Doc Comment
 *
 * @category    Class
 * @description IssuedDocumentItemsListItem
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentItemsListItemTest extends TestCase
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
            "product_id": 12345,
            "code": "cod3",
            "name": "prod 1",
            "category": "cat5",
            "description": "product number uan",
            "qty": 44,
            "measure": "very big",
            "net_price": 10,
            "gross_price": 12.2,
            "not_taxable": false,
            "apply_withholding_taxes": true,
            "discount": 0,
            "discount_highlight": true,
            "in_ddt": false,
            "stock": 89,
            "vat": {
                "id": 21
            },
            "ei_raw": {
                "prop": true
            }
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\IssuedDocumentItemsListItem');
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
     * Test "IssuedDocumentItemsListItem"
     */
    public function testIssuedDocumentItemsListItem()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
      * Test attribute "product_id"
      */
    public function testPropertyProductId()
    {
        TestCase::assertEquals($this->object['product_id'], $this->array['product_id']);
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
        TestCase::assertEquals($this->object['code'], $this->array['code']);
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        TestCase::assertEquals($this->object['name'], $this->array['name']);
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
     * Test attribute "qty"
     */
    public function testPropertyQty()
    {
        TestCase::assertEquals($this->object['qty'], $this->array['qty']);
    }

    /**
     * Test attribute "measure"
     */
    public function testPropertyMeasure()
    {
        TestCase::assertEquals($this->object['measure'], $this->array['measure']);
    }

    /**
     * Test attribute "net_price"
     */
    public function testPropertyNetPrice()
    {
        TestCase::assertEquals($this->object['net_price'], $this->array['net_price']);
    }

    /**
     * Test attribute "gross_price"
     */
    public function testPropertyGrossPrice()
    {
        TestCase::assertEquals($this->object['gross_price'], $this->array['gross_price']);
    }

    /**
     * Test attribute "vat"
     */
    public function testPropertyVat()
    {
        foreach ($this->array['vat'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['vat']);
        }
    }

    /**
     * Test attribute "not_taxable"
     */
    public function testPropertyNotTaxable()
    {
        TestCase::assertEquals($this->object['not_taxable'], $this->array['not_taxable']);
    }

    /**
     * Test attribute "apply_withholding_taxes"
     */
    public function testPropertyApplyWithholdingTaxes()
    {
        TestCase::assertEquals($this->object['apply_withholding_taxes'], $this->array['apply_withholding_taxes']);
    }

    /**
     * Test attribute "discount"
     */
    public function testPropertyDiscount()
    {
        TestCase::assertEquals($this->object['discount'], $this->array['discount']);
    }

    /**
     * Test attribute "discount_highlight"
     */
    public function testPropertyDiscountHighlight()
    {
        TestCase::assertEquals($this->object['discount_highlight'], $this->array['discount_highlight']);
    }

    /**
     * Test attribute "in_ddt"
     */
    public function testPropertyInDdt()
    {
        TestCase::assertEquals($this->object['in_ddt'], $this->array['in_ddt']);
    }

    /**
     * Test attribute "stock"
     */
    public function testPropertyStock()
    {
        TestCase::assertEquals($this->object['stock'], $this->array['stock']);
    }

    /**
     * Test attribute "ei_raw"
     */
    public function testPropertyEiRaw()
    {
        foreach ($this->array['ei_raw'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['ei_raw']);
        }
    }
}
