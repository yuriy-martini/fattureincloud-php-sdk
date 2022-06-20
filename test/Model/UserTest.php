<?php
/**
 * UserTest
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
 * UserTest Class Doc Comment
 *
 * @category    Class
 * @description User infos.
 * @package     FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class UserTest extends TestCase
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
            "name": "Mario Rossi",
            "first_name": "Mario",
            "last_name": "Rossi",
            "email": "mario.rossi@example.com",
            "hash": "5add29e1234532a1bf2ed7b612043029",
            "picture": "picture.jpg"
        }';

        $this->array = json_decode($json, true);

        $this->object = ObjectSerializer::deserialize($json, '\FattureInCloud\Model\User');
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
     * Test "User"
     */
    public function testUser()
    {
        foreach ($this->array as $key => $value) {
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
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        TestCase::assertEquals($this->object['name'], $this->array['name']);
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
        TestCase::assertEquals($this->object['first_name'], $this->array['first_name']);
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
        TestCase::assertEquals($this->object['last_name'], $this->array['last_name']);
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
        TestCase::assertEquals($this->object['email'], $this->array['email']);
    }

    /**
     * Test attribute "hash"
     */
    public function testPropertyHash()
    {
        TestCase::assertEquals($this->object['hash'], $this->array['hash']);
    }

    /**
     * Test attribute "picture"
     */
    public function testPropertyPicture()
    {
        TestCase::assertEquals($this->object['picture'], $this->array['picture']);
    }
}
