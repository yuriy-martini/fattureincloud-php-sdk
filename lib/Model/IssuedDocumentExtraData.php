<?php
/**
 * IssuedDocumentExtraData
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
 * IssuedDocumentExtraData Class Doc Comment
 *
 * @category Class
 * @description Extra data. TS fields follow the technical specifications provided by \&quot;Sistema Tessera Sanitaria\&quot;.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssuedDocumentExtraData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssuedDocument_extra_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'show_sofort_button' => 'bool',
        'multifatture_sent' => 'int',
        'ts_communication' => 'bool',
        'ts_flag_tipo_spesa' => 'float',
        'ts_pagamento_tracciato' => 'bool',
        'ts_tipo_spesa' => 'string',
        'ts_opposizione' => 'bool',
        'ts_status' => 'int',
        'ts_file_id' => 'string',
        'ts_sent_date' => '\DateTime',
        'ts_full_amount' => 'bool',
        'imported_by' => 'string',
        'ts_single_sending' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'show_sofort_button' => null,
        'multifatture_sent' => null,
        'ts_communication' => null,
        'ts_flag_tipo_spesa' => null,
        'ts_pagamento_tracciato' => null,
        'ts_tipo_spesa' => null,
        'ts_opposizione' => null,
        'ts_status' => null,
        'ts_file_id' => null,
        'ts_sent_date' => 'date',
        'ts_full_amount' => null,
        'imported_by' => null,
        'ts_single_sending' => null
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
        'show_sofort_button' => 'show_sofort_button',
        'multifatture_sent' => 'multifatture_sent',
        'ts_communication' => 'ts_communication',
        'ts_flag_tipo_spesa' => 'ts_flag_tipo_spesa',
        'ts_pagamento_tracciato' => 'ts_pagamento_tracciato',
        'ts_tipo_spesa' => 'ts_tipo_spesa',
        'ts_opposizione' => 'ts_opposizione',
        'ts_status' => 'ts_status',
        'ts_file_id' => 'ts_file_id',
        'ts_sent_date' => 'ts_sent_date',
        'ts_full_amount' => 'ts_full_amount',
        'imported_by' => 'imported_by',
        'ts_single_sending' => 'ts_single_sending'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_sofort_button' => 'setShowSofortButton',
        'multifatture_sent' => 'setMultifattureSent',
        'ts_communication' => 'setTsCommunication',
        'ts_flag_tipo_spesa' => 'setTsFlagTipoSpesa',
        'ts_pagamento_tracciato' => 'setTsPagamentoTracciato',
        'ts_tipo_spesa' => 'setTsTipoSpesa',
        'ts_opposizione' => 'setTsOpposizione',
        'ts_status' => 'setTsStatus',
        'ts_file_id' => 'setTsFileId',
        'ts_sent_date' => 'setTsSentDate',
        'ts_full_amount' => 'setTsFullAmount',
        'imported_by' => 'setImportedBy',
        'ts_single_sending' => 'setTsSingleSending'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_sofort_button' => 'getShowSofortButton',
        'multifatture_sent' => 'getMultifattureSent',
        'ts_communication' => 'getTsCommunication',
        'ts_flag_tipo_spesa' => 'getTsFlagTipoSpesa',
        'ts_pagamento_tracciato' => 'getTsPagamentoTracciato',
        'ts_tipo_spesa' => 'getTsTipoSpesa',
        'ts_opposizione' => 'getTsOpposizione',
        'ts_status' => 'getTsStatus',
        'ts_file_id' => 'getTsFileId',
        'ts_sent_date' => 'getTsSentDate',
        'ts_full_amount' => 'getTsFullAmount',
        'imported_by' => 'getImportedBy',
        'ts_single_sending' => 'getTsSingleSending'
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
        $this->container['show_sofort_button'] = $data['show_sofort_button'] ?? null;
        $this->container['multifatture_sent'] = $data['multifatture_sent'] ?? null;
        $this->container['ts_communication'] = $data['ts_communication'] ?? null;
        $this->container['ts_flag_tipo_spesa'] = $data['ts_flag_tipo_spesa'] ?? null;
        $this->container['ts_pagamento_tracciato'] = $data['ts_pagamento_tracciato'] ?? null;
        $this->container['ts_tipo_spesa'] = $data['ts_tipo_spesa'] ?? null;
        $this->container['ts_opposizione'] = $data['ts_opposizione'] ?? null;
        $this->container['ts_status'] = $data['ts_status'] ?? null;
        $this->container['ts_file_id'] = $data['ts_file_id'] ?? null;
        $this->container['ts_sent_date'] = $data['ts_sent_date'] ?? null;
        $this->container['ts_full_amount'] = $data['ts_full_amount'] ?? null;
        $this->container['imported_by'] = $data['imported_by'] ?? null;
        $this->container['ts_single_sending'] = $data['ts_single_sending'] ?? null;
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
     * Gets show_sofort_button
     *
     * @return bool|null
     */
    public function getShowSofortButton()
    {
        return $this->container['show_sofort_button'];
    }

    /**
     * Sets show_sofort_button
     *
     * @param bool|null $show_sofort_button show_sofort_button
     *
     * @return self
     */
    public function setShowSofortButton($show_sofort_button)
    {
        $this->container['show_sofort_button'] = $show_sofort_button;

        return $this;
    }

    /**
     * Gets multifatture_sent
     *
     * @return int|null
     */
    public function getMultifattureSent()
    {
        return $this->container['multifatture_sent'];
    }

    /**
     * Sets multifatture_sent
     *
     * @param int|null $multifatture_sent multifatture_sent
     *
     * @return self
     */
    public function setMultifattureSent($multifatture_sent)
    {
        $this->container['multifatture_sent'] = $multifatture_sent;

        return $this;
    }

    /**
     * Gets ts_communication
     *
     * @return bool|null
     */
    public function getTsCommunication()
    {
        return $this->container['ts_communication'];
    }

    /**
     * Sets ts_communication
     *
     * @param bool|null $ts_communication ts_communication
     *
     * @return self
     */
    public function setTsCommunication($ts_communication)
    {
        $this->container['ts_communication'] = $ts_communication;

        return $this;
    }

    /**
     * Gets ts_flag_tipo_spesa
     *
     * @return float|null
     */
    public function getTsFlagTipoSpesa()
    {
        return $this->container['ts_flag_tipo_spesa'];
    }

    /**
     * Sets ts_flag_tipo_spesa
     *
     * @param float|null $ts_flag_tipo_spesa 1 => TK (Ticket di pronto soccorso); 2 => SR (Visita in intramoenia)
     *
     * @return self
     */
    public function setTsFlagTipoSpesa($ts_flag_tipo_spesa)
    {
        $this->container['ts_flag_tipo_spesa'] = $ts_flag_tipo_spesa;

        return $this;
    }

    /**
     * Gets ts_pagamento_tracciato
     *
     * @return bool|null
     */
    public function getTsPagamentoTracciato()
    {
        return $this->container['ts_pagamento_tracciato'];
    }

    /**
     * Sets ts_pagamento_tracciato
     *
     * @param bool|null $ts_pagamento_tracciato ts_pagamento_tracciato
     *
     * @return self
     */
    public function setTsPagamentoTracciato($ts_pagamento_tracciato)
    {
        $this->container['ts_pagamento_tracciato'] = $ts_pagamento_tracciato;

        return $this;
    }

    /**
     * Gets ts_tipo_spesa
     *
     * @return string|null
     */
    public function getTsTipoSpesa()
    {
        return $this->container['ts_tipo_spesa'];
    }

    /**
     * Sets ts_tipo_spesa
     *
     * @param string|null $ts_tipo_spesa Can be [ 'TK', 'FC', 'FV', 'SV', 'SP', 'AD', 'AS', 'SR', 'CT', 'PI', 'IC', 'AA' ]. Refer to the technical specifications to learn more.
     *
     * @return self
     */
    public function setTsTipoSpesa($ts_tipo_spesa)
    {
        $this->container['ts_tipo_spesa'] = $ts_tipo_spesa;

        return $this;
    }

    /**
     * Gets ts_opposizione
     *
     * @return bool|null
     */
    public function getTsOpposizione()
    {
        return $this->container['ts_opposizione'];
    }

    /**
     * Sets ts_opposizione
     *
     * @param bool|null $ts_opposizione ts_opposizione
     *
     * @return self
     */
    public function setTsOpposizione($ts_opposizione)
    {
        $this->container['ts_opposizione'] = $ts_opposizione;

        return $this;
    }

    /**
     * Gets ts_status
     *
     * @return int|null
     */
    public function getTsStatus()
    {
        return $this->container['ts_status'];
    }

    /**
     * Sets ts_status
     *
     * @param int|null $ts_status ts_status
     *
     * @return self
     */
    public function setTsStatus($ts_status)
    {
        $this->container['ts_status'] = $ts_status;

        return $this;
    }

    /**
     * Gets ts_file_id
     *
     * @return string|null
     */
    public function getTsFileId()
    {
        return $this->container['ts_file_id'];
    }

    /**
     * Sets ts_file_id
     *
     * @param string|null $ts_file_id ts_file_id
     *
     * @return self
     */
    public function setTsFileId($ts_file_id)
    {
        $this->container['ts_file_id'] = $ts_file_id;

        return $this;
    }

    /**
     * Gets ts_sent_date
     *
     * @return \DateTime|null
     */
    public function getTsSentDate()
    {
        return $this->container['ts_sent_date'];
    }

    /**
     * Sets ts_sent_date
     *
     * @param \DateTime|null $ts_sent_date ts_sent_date
     *
     * @return self
     */
    public function setTsSentDate($ts_sent_date)
    {
        $this->container['ts_sent_date'] = $ts_sent_date;

        return $this;
    }

    /**
     * Gets ts_full_amount
     *
     * @return bool|null
     */
    public function getTsFullAmount()
    {
        return $this->container['ts_full_amount'];
    }

    /**
     * Sets ts_full_amount
     *
     * @param bool|null $ts_full_amount ts_full_amount
     *
     * @return self
     */
    public function setTsFullAmount($ts_full_amount)
    {
        $this->container['ts_full_amount'] = $ts_full_amount;

        return $this;
    }

    /**
     * Gets imported_by
     *
     * @return string|null
     */
    public function getImportedBy()
    {
        return $this->container['imported_by'];
    }

    /**
     * Sets imported_by
     *
     * @param string|null $imported_by imported_by
     *
     * @return self
     */
    public function setImportedBy($imported_by)
    {
        $this->container['imported_by'] = $imported_by;

        return $this;
    }

    /**
     * Gets ts_single_sending
     *
     * @return bool|null
     */
    public function getTsSingleSending()
    {
        return $this->container['ts_single_sending'];
    }

    /**
     * Sets ts_single_sending
     *
     * @param bool|null $ts_single_sending ts_single_sending
     *
     * @return self
     */
    public function setTsSingleSending($ts_single_sending)
    {
        $this->container['ts_single_sending'] = $ts_single_sending;

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


