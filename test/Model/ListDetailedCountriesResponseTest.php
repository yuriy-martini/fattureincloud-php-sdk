<?php
/**
 * ListDetailedCountriesResponseTest
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
 * The version of the OpenAPI document: 2.0.14
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
 * ListDetailedCountriesResponseTest Class Doc Comment
 *
 * @category    Class
 * @description ListDetailedCountriesResponse
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class ListDetailedCountriesResponseTest extends TestCase
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
            "data":[
                {
                    "name": "Italia",
                    "settings_name": "Italia",
                    "iso": "IT",
                    "fiscal_iso": "IT",
                    "uic": "086"
                },
                {
                    "name": "Albania",
                    "settings_name": "ALbania",
                    "iso": "AL",
                    "fiscal_iso": "AL",
                    "uic": "087"
                }
            ]
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\ListDetailedCountriesResponse');
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
     * Test "ListDetailedCountriesResponse"
     */
    public function testListDetailedCountriesResponse()
    {
        foreach ($this->array as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object);
        }
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
        foreach ($this->array['data'] as $key => $value) {
            Testcase::assertArrayHasKey($key, $this->object['data']);
        }
    }
}
