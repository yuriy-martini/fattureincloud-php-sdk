<?php
/**
 * IssuedDocumentPreCreateInfo
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

use \ArrayAccess;
use \FattureInCloud\ObjectSerializer;

/**
 * IssuedDocumentPreCreateInfo Class Doc Comment
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssuedDocumentPreCreateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocumentPreCreateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numerations' => 'object',
        'dn_numerations' => 'object',
        'default_values' => '\FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues',
        'extra_data_default_values' => '\FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues',
        'items_default_values' => '\FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues',
        'countries_list' => 'string[]',
        'currencies_list' => '\FattureInCloud\Model\Currency[]',
        'templates_list' => '\FattureInCloud\Model\DocumentTemplate[]',
        'dn_templates_list' => '\FattureInCloud\Model\DocumentTemplate[]',
        'ai_templates_list' => '\FattureInCloud\Model\DocumentTemplate[]',
        'payment_methods_list' => '\FattureInCloud\Model\PaymentMethod[]',
        'payment_accounts_list' => '\FattureInCloud\Model\PaymentAccount[]',
        'vat_types_list' => '\FattureInCloud\Model\VatType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'numerations' => null,
        'dn_numerations' => null,
        'default_values' => null,
        'extra_data_default_values' => null,
        'items_default_values' => null,
        'countries_list' => null,
        'currencies_list' => null,
        'templates_list' => null,
        'dn_templates_list' => null,
        'ai_templates_list' => null,
        'payment_methods_list' => null,
        'payment_accounts_list' => null,
        'vat_types_list' => null
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
        'numerations' => 'numerations',
        'dn_numerations' => 'dn_numerations',
        'default_values' => 'default_values',
        'extra_data_default_values' => 'extra_data_default_values',
        'items_default_values' => 'items_default_values',
        'countries_list' => 'countries_list',
        'currencies_list' => 'currencies_list',
        'templates_list' => 'templates_list',
        'dn_templates_list' => 'dn_templates_list',
        'ai_templates_list' => 'ai_templates_list',
        'payment_methods_list' => 'payment_methods_list',
        'payment_accounts_list' => 'payment_accounts_list',
        'vat_types_list' => 'vat_types_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numerations' => 'setNumerations',
        'dn_numerations' => 'setDnNumerations',
        'default_values' => 'setDefaultValues',
        'extra_data_default_values' => 'setExtraDataDefaultValues',
        'items_default_values' => 'setItemsDefaultValues',
        'countries_list' => 'setCountriesList',
        'currencies_list' => 'setCurrenciesList',
        'templates_list' => 'setTemplatesList',
        'dn_templates_list' => 'setDnTemplatesList',
        'ai_templates_list' => 'setAiTemplatesList',
        'payment_methods_list' => 'setPaymentMethodsList',
        'payment_accounts_list' => 'setPaymentAccountsList',
        'vat_types_list' => 'setVatTypesList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numerations' => 'getNumerations',
        'dn_numerations' => 'getDnNumerations',
        'default_values' => 'getDefaultValues',
        'extra_data_default_values' => 'getExtraDataDefaultValues',
        'items_default_values' => 'getItemsDefaultValues',
        'countries_list' => 'getCountriesList',
        'currencies_list' => 'getCurrenciesList',
        'templates_list' => 'getTemplatesList',
        'dn_templates_list' => 'getDnTemplatesList',
        'ai_templates_list' => 'getAiTemplatesList',
        'payment_methods_list' => 'getPaymentMethodsList',
        'payment_accounts_list' => 'getPaymentAccountsList',
        'vat_types_list' => 'getVatTypesList'
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
        $this->container['numerations'] = $data['numerations'] ?? null;
        $this->container['dn_numerations'] = $data['dn_numerations'] ?? null;
        $this->container['default_values'] = $data['default_values'] ?? null;
        $this->container['extra_data_default_values'] = $data['extra_data_default_values'] ?? null;
        $this->container['items_default_values'] = $data['items_default_values'] ?? null;
        $this->container['countries_list'] = $data['countries_list'] ?? null;
        $this->container['currencies_list'] = $data['currencies_list'] ?? null;
        $this->container['templates_list'] = $data['templates_list'] ?? null;
        $this->container['dn_templates_list'] = $data['dn_templates_list'] ?? null;
        $this->container['ai_templates_list'] = $data['ai_templates_list'] ?? null;
        $this->container['payment_methods_list'] = $data['payment_methods_list'] ?? null;
        $this->container['payment_accounts_list'] = $data['payment_accounts_list'] ?? null;
        $this->container['vat_types_list'] = $data['vat_types_list'] ?? null;
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
     * Gets numerations
     *
     * @return object|null
     */
    public function getNumerations()
    {
        return $this->container['numerations'];
    }

    /**
     * Sets numerations
     *
     * @param object|null $numerations Next numbers by year and numeration name (for the given document type).
     *
     * @return self
     */
    public function setNumerations($numerations)
    {
        $this->container['numerations'] = $numerations;

        return $this;
    }

    /**
     * Gets dn_numerations
     *
     * @return object|null
     */
    public function getDnNumerations()
    {
        return $this->container['dn_numerations'];
    }

    /**
     * Sets dn_numerations
     *
     * @param object|null $dn_numerations Next numbers by year and numeration name (for delivery_notes).
     *
     * @return self
     */
    public function setDnNumerations($dn_numerations)
    {
        $this->container['dn_numerations'] = $dn_numerations;

        return $this;
    }

    /**
     * Gets default_values
     *
     * @return \FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues|null
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param \FattureInCloud\Model\IssuedDocumentPreCreateInfoDefaultValues|null $default_values default_values
     *
     * @return self
     */
    public function setDefaultValues($default_values)
    {
        $this->container['default_values'] = $default_values;

        return $this;
    }

    /**
     * Gets extra_data_default_values
     *
     * @return \FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues|null
     */
    public function getExtraDataDefaultValues()
    {
        return $this->container['extra_data_default_values'];
    }

    /**
     * Sets extra_data_default_values
     *
     * @param \FattureInCloud\Model\IssuedDocumentPreCreateInfoExtraDataDefaultValues|null $extra_data_default_values extra_data_default_values
     *
     * @return self
     */
    public function setExtraDataDefaultValues($extra_data_default_values)
    {
        $this->container['extra_data_default_values'] = $extra_data_default_values;

        return $this;
    }

    /**
     * Gets items_default_values
     *
     * @return \FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues|null
     */
    public function getItemsDefaultValues()
    {
        return $this->container['items_default_values'];
    }

    /**
     * Sets items_default_values
     *
     * @param \FattureInCloud\Model\IssuedDocumentPreCreateInfoItemsDefaultValues|null $items_default_values items_default_values
     *
     * @return self
     */
    public function setItemsDefaultValues($items_default_values)
    {
        $this->container['items_default_values'] = $items_default_values;

        return $this;
    }

    /**
     * Gets countries_list
     *
     * @return string[]|null
     */
    public function getCountriesList()
    {
        return $this->container['countries_list'];
    }

    /**
     * Sets countries_list
     *
     * @param string[]|null $countries_list Countries list.
     *
     * @return self
     */
    public function setCountriesList($countries_list)
    {
        $this->container['countries_list'] = $countries_list;

        return $this;
    }

    /**
     * Gets currencies_list
     *
     * @return \FattureInCloud\Model\Currency[]|null
     */
    public function getCurrenciesList()
    {
        return $this->container['currencies_list'];
    }

    /**
     * Sets currencies_list
     *
     * @param \FattureInCloud\Model\Currency[]|null $currencies_list Currencies list.
     *
     * @return self
     */
    public function setCurrenciesList($currencies_list)
    {
        $this->container['currencies_list'] = $currencies_list;

        return $this;
    }

    /**
     * Gets templates_list
     *
     * @return \FattureInCloud\Model\DocumentTemplate[]|null
     */
    public function getTemplatesList()
    {
        return $this->container['templates_list'];
    }

    /**
     * Sets templates_list
     *
     * @param \FattureInCloud\Model\DocumentTemplate[]|null $templates_list Document templates list.
     *
     * @return self
     */
    public function setTemplatesList($templates_list)
    {
        $this->container['templates_list'] = $templates_list;

        return $this;
    }

    /**
     * Gets dn_templates_list
     *
     * @return \FattureInCloud\Model\DocumentTemplate[]|null
     */
    public function getDnTemplatesList()
    {
        return $this->container['dn_templates_list'];
    }

    /**
     * Sets dn_templates_list
     *
     * @param \FattureInCloud\Model\DocumentTemplate[]|null $dn_templates_list Delivery note templates list.
     *
     * @return self
     */
    public function setDnTemplatesList($dn_templates_list)
    {
        $this->container['dn_templates_list'] = $dn_templates_list;

        return $this;
    }

    /**
     * Gets ai_templates_list
     *
     * @return \FattureInCloud\Model\DocumentTemplate[]|null
     */
    public function getAiTemplatesList()
    {
        return $this->container['ai_templates_list'];
    }

    /**
     * Sets ai_templates_list
     *
     * @param \FattureInCloud\Model\DocumentTemplate[]|null $ai_templates_list Accompanying invoice templates list.
     *
     * @return self
     */
    public function setAiTemplatesList($ai_templates_list)
    {
        $this->container['ai_templates_list'] = $ai_templates_list;

        return $this;
    }

    /**
     * Gets payment_methods_list
     *
     * @return \FattureInCloud\Model\PaymentMethod[]|null
     */
    public function getPaymentMethodsList()
    {
        return $this->container['payment_methods_list'];
    }

    /**
     * Sets payment_methods_list
     *
     * @param \FattureInCloud\Model\PaymentMethod[]|null $payment_methods_list Payment methods list.
     *
     * @return self
     */
    public function setPaymentMethodsList($payment_methods_list)
    {
        $this->container['payment_methods_list'] = $payment_methods_list;

        return $this;
    }

    /**
     * Gets payment_accounts_list
     *
     * @return \FattureInCloud\Model\PaymentAccount[]|null
     */
    public function getPaymentAccountsList()
    {
        return $this->container['payment_accounts_list'];
    }

    /**
     * Sets payment_accounts_list
     *
     * @param \FattureInCloud\Model\PaymentAccount[]|null $payment_accounts_list Payment accounts list.
     *
     * @return self
     */
    public function setPaymentAccountsList($payment_accounts_list)
    {
        $this->container['payment_accounts_list'] = $payment_accounts_list;

        return $this;
    }

    /**
     * Gets vat_types_list
     *
     * @return \FattureInCloud\Model\VatType[]|null
     */
    public function getVatTypesList()
    {
        return $this->container['vat_types_list'];
    }

    /**
     * Sets vat_types_list
     *
     * @param \FattureInCloud\Model\VatType[]|null $vat_types_list Vat types list.
     *
     * @return self
     */
    public function setVatTypesList($vat_types_list)
    {
        $this->container['vat_types_list'] = $vat_types_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

