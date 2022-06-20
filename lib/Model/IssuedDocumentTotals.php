<?php
/**
 * IssuedDocumentTotals
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
 * IssuedDocumentTotals Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssuedDocumentTotals implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentTotals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_net' => 'float',
        'amount_rivalsa' => 'float',
        'amount_net_with_rivalsa' => 'float',
        'amount_cassa' => 'float',
        'taxable_amount' => 'float',
        'not_taxable_amount' => 'float',
        'amount_vat' => 'float',
        'amount_gross' => 'float',
        'taxable_amount_withholding_tax' => 'float',
        'amount_withholding_tax' => 'float',
        'taxable_amount_other_withholding_tax' => 'float',
        'amount_other_withholding_tax' => 'float',
        'stamp_duty' => 'float',
        'amount_due' => 'float',
        'is_enasarco_maximal_exceeded' => 'bool',
        'payments_sum' => 'float',
        'vat_list' => 'array<string,\FattureInCloud\Model\VatItem>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount_net' => null,
        'amount_rivalsa' => null,
        'amount_net_with_rivalsa' => null,
        'amount_cassa' => null,
        'taxable_amount' => null,
        'not_taxable_amount' => null,
        'amount_vat' => null,
        'amount_gross' => null,
        'taxable_amount_withholding_tax' => null,
        'amount_withholding_tax' => null,
        'taxable_amount_other_withholding_tax' => null,
        'amount_other_withholding_tax' => null,
        'stamp_duty' => null,
        'amount_due' => null,
        'is_enasarco_maximal_exceeded' => null,
        'payments_sum' => null,
        'vat_list' => null
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
        'amount_net' => 'amount_net',
        'amount_rivalsa' => 'amount_rivalsa',
        'amount_net_with_rivalsa' => 'amount_net_with_rivalsa',
        'amount_cassa' => 'amount_cassa',
        'taxable_amount' => 'taxable_amount',
        'not_taxable_amount' => 'not_taxable_amount',
        'amount_vat' => 'amount_vat',
        'amount_gross' => 'amount_gross',
        'taxable_amount_withholding_tax' => 'taxable_amount_withholding_tax',
        'amount_withholding_tax' => 'amount_withholding_tax',
        'taxable_amount_other_withholding_tax' => 'taxable_amount_other_withholding_tax',
        'amount_other_withholding_tax' => 'amount_other_withholding_tax',
        'stamp_duty' => 'stamp_duty',
        'amount_due' => 'amount_due',
        'is_enasarco_maximal_exceeded' => 'is_enasarco_maximal_exceeded',
        'payments_sum' => 'payments_sum',
        'vat_list' => 'vat_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_net' => 'setAmountNet',
        'amount_rivalsa' => 'setAmountRivalsa',
        'amount_net_with_rivalsa' => 'setAmountNetWithRivalsa',
        'amount_cassa' => 'setAmountCassa',
        'taxable_amount' => 'setTaxableAmount',
        'not_taxable_amount' => 'setNotTaxableAmount',
        'amount_vat' => 'setAmountVat',
        'amount_gross' => 'setAmountGross',
        'taxable_amount_withholding_tax' => 'setTaxableAmountWithholdingTax',
        'amount_withholding_tax' => 'setAmountWithholdingTax',
        'taxable_amount_other_withholding_tax' => 'setTaxableAmountOtherWithholdingTax',
        'amount_other_withholding_tax' => 'setAmountOtherWithholdingTax',
        'stamp_duty' => 'setStampDuty',
        'amount_due' => 'setAmountDue',
        'is_enasarco_maximal_exceeded' => 'setIsEnasarcoMaximalExceeded',
        'payments_sum' => 'setPaymentsSum',
        'vat_list' => 'setVatList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_net' => 'getAmountNet',
        'amount_rivalsa' => 'getAmountRivalsa',
        'amount_net_with_rivalsa' => 'getAmountNetWithRivalsa',
        'amount_cassa' => 'getAmountCassa',
        'taxable_amount' => 'getTaxableAmount',
        'not_taxable_amount' => 'getNotTaxableAmount',
        'amount_vat' => 'getAmountVat',
        'amount_gross' => 'getAmountGross',
        'taxable_amount_withholding_tax' => 'getTaxableAmountWithholdingTax',
        'amount_withholding_tax' => 'getAmountWithholdingTax',
        'taxable_amount_other_withholding_tax' => 'getTaxableAmountOtherWithholdingTax',
        'amount_other_withholding_tax' => 'getAmountOtherWithholdingTax',
        'stamp_duty' => 'getStampDuty',
        'amount_due' => 'getAmountDue',
        'is_enasarco_maximal_exceeded' => 'getIsEnasarcoMaximalExceeded',
        'payments_sum' => 'getPaymentsSum',
        'vat_list' => 'getVatList'
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
        $this->container['amount_net'] = $data['amount_net'] ?? null;
        $this->container['amount_rivalsa'] = $data['amount_rivalsa'] ?? null;
        $this->container['amount_net_with_rivalsa'] = $data['amount_net_with_rivalsa'] ?? null;
        $this->container['amount_cassa'] = $data['amount_cassa'] ?? null;
        $this->container['taxable_amount'] = $data['taxable_amount'] ?? null;
        $this->container['not_taxable_amount'] = $data['not_taxable_amount'] ?? null;
        $this->container['amount_vat'] = $data['amount_vat'] ?? null;
        $this->container['amount_gross'] = $data['amount_gross'] ?? null;
        $this->container['taxable_amount_withholding_tax'] = $data['taxable_amount_withholding_tax'] ?? null;
        $this->container['amount_withholding_tax'] = $data['amount_withholding_tax'] ?? null;
        $this->container['taxable_amount_other_withholding_tax'] = $data['taxable_amount_other_withholding_tax'] ?? null;
        $this->container['amount_other_withholding_tax'] = $data['amount_other_withholding_tax'] ?? null;
        $this->container['stamp_duty'] = $data['stamp_duty'] ?? null;
        $this->container['amount_due'] = $data['amount_due'] ?? null;
        $this->container['is_enasarco_maximal_exceeded'] = $data['is_enasarco_maximal_exceeded'] ?? null;
        $this->container['payments_sum'] = $data['payments_sum'] ?? null;
        $this->container['vat_list'] = $data['vat_list'] ?? null;
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
     * Gets amount_net
     *
     * @return float|null
     */
    public function getAmountNet()
    {
        return $this->container['amount_net'];
    }

    /**
     * Sets amount_net
     *
     * @param float|null $amount_net Total net amount.
     *
     * @return self
     */
    public function setAmountNet($amount_net)
    {
        $this->container['amount_net'] = $amount_net;

        return $this;
    }

    /**
     * Gets amount_rivalsa
     *
     * @return float|null
     */
    public function getAmountRivalsa()
    {
        return $this->container['amount_rivalsa'];
    }

    /**
     * Sets amount_rivalsa
     *
     * @param float|null $amount_rivalsa Rivalsa amount.
     *
     * @return self
     */
    public function setAmountRivalsa($amount_rivalsa)
    {
        $this->container['amount_rivalsa'] = $amount_rivalsa;

        return $this;
    }

    /**
     * Gets amount_net_with_rivalsa
     *
     * @return float|null
     */
    public function getAmountNetWithRivalsa()
    {
        return $this->container['amount_net_with_rivalsa'];
    }

    /**
     * Sets amount_net_with_rivalsa
     *
     * @param float|null $amount_net_with_rivalsa Net amount with rivalsa.
     *
     * @return self
     */
    public function setAmountNetWithRivalsa($amount_net_with_rivalsa)
    {
        $this->container['amount_net_with_rivalsa'] = $amount_net_with_rivalsa;

        return $this;
    }

    /**
     * Gets amount_cassa
     *
     * @return float|null
     */
    public function getAmountCassa()
    {
        return $this->container['amount_cassa'];
    }

    /**
     * Sets amount_cassa
     *
     * @param float|null $amount_cassa Cassa amount.
     *
     * @return self
     */
    public function setAmountCassa($amount_cassa)
    {
        $this->container['amount_cassa'] = $amount_cassa;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return float|null
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param float|null $taxable_amount Taxable amount.
     *
     * @return self
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets not_taxable_amount
     *
     * @return float|null
     */
    public function getNotTaxableAmount()
    {
        return $this->container['not_taxable_amount'];
    }

    /**
     * Sets not_taxable_amount
     *
     * @param float|null $not_taxable_amount Not taxable amount.
     *
     * @return self
     */
    public function setNotTaxableAmount($not_taxable_amount)
    {
        $this->container['not_taxable_amount'] = $not_taxable_amount;

        return $this;
    }

    /**
     * Gets amount_vat
     *
     * @return float|null
     */
    public function getAmountVat()
    {
        return $this->container['amount_vat'];
    }

    /**
     * Sets amount_vat
     *
     * @param float|null $amount_vat Total vat amount.
     *
     * @return self
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

        return $this;
    }

    /**
     * Gets amount_gross
     *
     * @return float|null
     */
    public function getAmountGross()
    {
        return $this->container['amount_gross'];
    }

    /**
     * Sets amount_gross
     *
     * @param float|null $amount_gross Total grosas amount.
     *
     * @return self
     */
    public function setAmountGross($amount_gross)
    {
        $this->container['amount_gross'] = $amount_gross;

        return $this;
    }

    /**
     * Gets taxable_amount_withholding_tax
     *
     * @return float|null
     */
    public function getTaxableAmountWithholdingTax()
    {
        return $this->container['taxable_amount_withholding_tax'];
    }

    /**
     * Sets taxable_amount_withholding_tax
     *
     * @param float|null $taxable_amount_withholding_tax Taxable withholding tax amount.
     *
     * @return self
     */
    public function setTaxableAmountWithholdingTax($taxable_amount_withholding_tax)
    {
        $this->container['taxable_amount_withholding_tax'] = $taxable_amount_withholding_tax;

        return $this;
    }

    /**
     * Gets amount_withholding_tax
     *
     * @return float|null
     */
    public function getAmountWithholdingTax()
    {
        return $this->container['amount_withholding_tax'];
    }

    /**
     * Sets amount_withholding_tax
     *
     * @param float|null $amount_withholding_tax Withholding tax amount.
     *
     * @return self
     */
    public function setAmountWithholdingTax($amount_withholding_tax)
    {
        $this->container['amount_withholding_tax'] = $amount_withholding_tax;

        return $this;
    }

    /**
     * Gets taxable_amount_other_withholding_tax
     *
     * @return float|null
     */
    public function getTaxableAmountOtherWithholdingTax()
    {
        return $this->container['taxable_amount_other_withholding_tax'];
    }

    /**
     * Sets taxable_amount_other_withholding_tax
     *
     * @param float|null $taxable_amount_other_withholding_tax Other withholding tax taxable amount.
     *
     * @return self
     */
    public function setTaxableAmountOtherWithholdingTax($taxable_amount_other_withholding_tax)
    {
        $this->container['taxable_amount_other_withholding_tax'] = $taxable_amount_other_withholding_tax;

        return $this;
    }

    /**
     * Gets amount_other_withholding_tax
     *
     * @return float|null
     */
    public function getAmountOtherWithholdingTax()
    {
        return $this->container['amount_other_withholding_tax'];
    }

    /**
     * Sets amount_other_withholding_tax
     *
     * @param float|null $amount_other_withholding_tax Other withholding tax amount.
     *
     * @return self
     */
    public function setAmountOtherWithholdingTax($amount_other_withholding_tax)
    {
        $this->container['amount_other_withholding_tax'] = $amount_other_withholding_tax;

        return $this;
    }

    /**
     * Gets stamp_duty
     *
     * @return float|null
     */
    public function getStampDuty()
    {
        return $this->container['stamp_duty'];
    }

    /**
     * Sets stamp_duty
     *
     * @param float|null $stamp_duty Stamp duty value [0 if not present].
     *
     * @return self
     */
    public function setStampDuty($stamp_duty)
    {
        $this->container['stamp_duty'] = $stamp_duty;

        return $this;
    }

    /**
     * Gets amount_due
     *
     * @return float|null
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param float|null $amount_due Total amount due.
     *
     * @return self
     */
    public function setAmountDue($amount_due)
    {
        $this->container['amount_due'] = $amount_due;

        return $this;
    }

    /**
     * Gets is_enasarco_maximal_exceeded
     *
     * @return bool|null
     */
    public function getIsEnasarcoMaximalExceeded()
    {
        return $this->container['is_enasarco_maximal_exceeded'];
    }

    /**
     * Sets is_enasarco_maximal_exceeded
     *
     * @param bool|null $is_enasarco_maximal_exceeded is_enasarco_maximal_exceeded
     *
     * @return self
     */
    public function setIsEnasarcoMaximalExceeded($is_enasarco_maximal_exceeded)
    {
        $this->container['is_enasarco_maximal_exceeded'] = $is_enasarco_maximal_exceeded;

        return $this;
    }

    /**
     * Gets payments_sum
     *
     * @return float|null
     */
    public function getPaymentsSum()
    {
        return $this->container['payments_sum'];
    }

    /**
     * Sets payments_sum
     *
     * @param float|null $payments_sum Payments sum.
     *
     * @return self
     */
    public function setPaymentsSum($payments_sum)
    {
        $this->container['payments_sum'] = $payments_sum;

        return $this;
    }

    /**
     * Gets vat_list
     *
     * @return array<string,\FattureInCloud\Model\VatItem>|null
     */
    public function getVatList()
    {
        return $this->container['vat_list'];
    }

    /**
     * Sets vat_list
     *
     * @param array<string,\FattureInCloud\Model\VatItem>|null $vat_list vat_list
     *
     * @return self
     */
    public function setVatList($vat_list)
    {
        $this->container['vat_list'] = $vat_list;

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


