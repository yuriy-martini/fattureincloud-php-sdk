<?php
/**
 * IssuedDocumentItemsListItem
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
 * The version of the OpenAPI document: 2.0.20
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
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
 * IssuedDocumentItemsListItem Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedDocumentItemsListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentItemsListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'product_id' => 'int',
        'code' => 'string',
        'name' => 'string',
        'category' => 'string',
        'description' => 'string',
        'qty' => 'float',
        'measure' => 'string',
        'net_price' => 'float',
        'gross_price' => 'float',
        'vat' => '\FattureInCloud\Model\VatType',
        'not_taxable' => 'bool',
        'apply_withholding_taxes' => 'bool',
        'discount' => 'float',
        'discount_highlight' => 'bool',
        'in_ddt' => 'bool',
        'stock' => 'bool',
        'ei_raw' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'product_id' => null,
        'code' => null,
        'name' => null,
        'category' => null,
        'description' => null,
        'qty' => null,
        'measure' => null,
        'net_price' => null,
        'gross_price' => null,
        'vat' => null,
        'not_taxable' => null,
        'apply_withholding_taxes' => null,
        'discount' => null,
        'discount_highlight' => null,
        'in_ddt' => null,
        'stock' => null,
        'ei_raw' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static $openAPINullables = [
        'id' => true,
            'product_id' => true,
            'code' => true,
            'name' => true,
            'category' => true,
            'description' => true,
            'qty' => true,
            'measure' => true,
            'net_price' => true,
            'gross_price' => true,
            'vat' => true,
            'not_taxable' => true,
            'apply_withholding_taxes' => true,
            'discount' => true,
            'discount_highlight' => true,
            'in_ddt' => true,
            'stock' => true,
            'ei_raw' => true
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var boolean[]
     */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Sets openAPINullablesSetToNull
     *
     * @param boolean[] $openAPINullablesSetToNull Array of nullable field names deliberately set to null
     *
     * @return self
     */
    private function setOpenAPINullablesSetToNull($openAPINullablesSetToNull)
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'product_id' => 'product_id',
        'code' => 'code',
        'name' => 'name',
        'category' => 'category',
        'description' => 'description',
        'qty' => 'qty',
        'measure' => 'measure',
        'net_price' => 'net_price',
        'gross_price' => 'gross_price',
        'vat' => 'vat',
        'not_taxable' => 'not_taxable',
        'apply_withholding_taxes' => 'apply_withholding_taxes',
        'discount' => 'discount',
        'discount_highlight' => 'discount_highlight',
        'in_ddt' => 'in_ddt',
        'stock' => 'stock',
        'ei_raw' => 'ei_raw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_id' => 'setProductId',
        'code' => 'setCode',
        'name' => 'setName',
        'category' => 'setCategory',
        'description' => 'setDescription',
        'qty' => 'setQty',
        'measure' => 'setMeasure',
        'net_price' => 'setNetPrice',
        'gross_price' => 'setGrossPrice',
        'vat' => 'setVat',
        'not_taxable' => 'setNotTaxable',
        'apply_withholding_taxes' => 'setApplyWithholdingTaxes',
        'discount' => 'setDiscount',
        'discount_highlight' => 'setDiscountHighlight',
        'in_ddt' => 'setInDdt',
        'stock' => 'setStock',
        'ei_raw' => 'setEiRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_id' => 'getProductId',
        'code' => 'getCode',
        'name' => 'getName',
        'category' => 'getCategory',
        'description' => 'getDescription',
        'qty' => 'getQty',
        'measure' => 'getMeasure',
        'net_price' => 'getNetPrice',
        'gross_price' => 'getGrossPrice',
        'vat' => 'getVat',
        'not_taxable' => 'getNotTaxable',
        'apply_withholding_taxes' => 'getApplyWithholdingTaxes',
        'discount' => 'getDiscount',
        'discount_highlight' => 'getDiscountHighlight',
        'in_ddt' => 'getInDdt',
        'stock' => 'getStock',
        'ei_raw' => 'getEiRaw'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('qty', $data ?? [], null);
        $this->setIfExists('measure', $data ?? [], null);
        $this->setIfExists('net_price', $data ?? [], null);
        $this->setIfExists('gross_price', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('not_taxable', $data ?? [], null);
        $this->setIfExists('apply_withholding_taxes', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('discount_highlight', $data ?? [], null);
        $this->setIfExists('in_ddt', $data ?? [], null);
        $this->setIfExists('stock', $data ?? [], null);
        $this->setIfExists('ei_raw', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string $variableName
     * @param array  $fields
     * @param mixed  $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique identifier.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int|null $product_id Unique identifier of the product.
     *
     * @return self
     */
    public function setProductId($product_id)
    {

        if (is_null($product_id)) {
            array_push($this->openAPINullablesSetToNull, 'product_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Product code.
     *
     * @return self
     */
    public function setCode($code)
    {

        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Product name.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Product category
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Product description.
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return float|null
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param float|null $qty Items quantity,
     *
     * @return self
     */
    public function setQty($qty)
    {

        if (is_null($qty)) {
            array_push($this->openAPINullablesSetToNull, 'qty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qty', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets measure
     *
     * @return string|null
     */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
     * Sets measure
     *
     * @param string|null $measure Item measure.
     *
     * @return self
     */
    public function setMeasure($measure)
    {

        if (is_null($measure)) {
            array_push($this->openAPINullablesSetToNull, 'measure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('measure', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['measure'] = $measure;

        return $this;
    }

    /**
     * Gets net_price
     *
     * @return float|null
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param float|null $net_price Net price.
     *
     * @return self
     */
    public function setNetPrice($net_price)
    {

        if (is_null($net_price)) {
            array_push($this->openAPINullablesSetToNull, 'net_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('net_price', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets gross_price
     *
     * @return float|null
     */
    public function getGrossPrice()
    {
        return $this->container['gross_price'];
    }

    /**
     * Sets gross_price
     *
     * @param float|null $gross_price Gross price.
     *
     * @return self
     */
    public function setGrossPrice($gross_price)
    {

        if (is_null($gross_price)) {
            array_push($this->openAPINullablesSetToNull, 'gross_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gross_price', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['gross_price'] = $gross_price;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \FattureInCloud\Model\VatType|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \FattureInCloud\Model\VatType|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {

        if (is_null($vat)) {
            array_push($this->openAPINullablesSetToNull, 'vat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets not_taxable
     *
     * @return bool|null
     */
    public function getNotTaxable()
    {
        return $this->container['not_taxable'];
    }

    /**
     * Sets not_taxable
     *
     * @param bool|null $not_taxable not_taxable
     *
     * @return self
     */
    public function setNotTaxable($not_taxable)
    {

        if (is_null($not_taxable)) {
            array_push($this->openAPINullablesSetToNull, 'not_taxable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('not_taxable', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['not_taxable'] = $not_taxable;

        return $this;
    }

    /**
     * Gets apply_withholding_taxes
     *
     * @return bool|null
     */
    public function getApplyWithholdingTaxes()
    {
        return $this->container['apply_withholding_taxes'];
    }

    /**
     * Sets apply_withholding_taxes
     *
     * @param bool|null $apply_withholding_taxes Apply withholding taxes, rivalsa and cassa.
     *
     * @return self
     */
    public function setApplyWithholdingTaxes($apply_withholding_taxes)
    {

        if (is_null($apply_withholding_taxes)) {
            array_push($this->openAPINullablesSetToNull, 'apply_withholding_taxes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('apply_withholding_taxes', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['apply_withholding_taxes'] = $apply_withholding_taxes;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount Discount percentual value.
     *
     * @return self
     */
    public function setDiscount($discount)
    {

        if (is_null($discount)) {
            array_push($this->openAPINullablesSetToNull, 'discount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discount_highlight
     *
     * @return bool|null
     */
    public function getDiscountHighlight()
    {
        return $this->container['discount_highlight'];
    }

    /**
     * Sets discount_highlight
     *
     * @param bool|null $discount_highlight discount_highlight
     *
     * @return self
     */
    public function setDiscountHighlight($discount_highlight)
    {

        if (is_null($discount_highlight)) {
            array_push($this->openAPINullablesSetToNull, 'discount_highlight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_highlight', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['discount_highlight'] = $discount_highlight;

        return $this;
    }

    /**
     * Gets in_ddt
     *
     * @return bool|null
     */
    public function getInDdt()
    {
        return $this->container['in_ddt'];
    }

    /**
     * Sets in_ddt
     *
     * @param bool|null $in_ddt in_ddt
     *
     * @return self
     */
    public function setInDdt($in_ddt)
    {

        if (is_null($in_ddt)) {
            array_push($this->openAPINullablesSetToNull, 'in_ddt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_ddt', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['in_ddt'] = $in_ddt;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return bool|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param bool|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {

        if (is_null($stock)) {
            array_push($this->openAPINullablesSetToNull, 'stock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stock', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets ei_raw
     *
     * @return object|null
     */
    public function getEiRaw()
    {
        return $this->container['ei_raw'];
    }

    /**
     * Sets ei_raw
     *
     * @param object|null $ei_raw Advanced raw attributes for e-invoices.
     *
     * @return self
     */
    public function setEiRaw($ei_raw)
    {

        if (is_null($ei_raw)) {
            array_push($this->openAPINullablesSetToNull, 'ei_raw');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ei_raw', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ei_raw'] = $ei_raw;

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


