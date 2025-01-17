<?php
/**
 * EmailData
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
 * EmailData Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 * @implements \ArrayAccess<string, mixed>
 */
class EmailData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipient_email' => 'string',
        'default_sender_email' => '\FattureInCloud\Model\EmailDataDefaultSenderEmail',
        'sender_emails_list' => '\FattureInCloud\Model\SenderEmail[]',
        'cc_email' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'document_exists' => 'bool',
        'delivery_note_exists' => 'bool',
        'attachment_exists' => 'bool',
        'accompanying_invoice_exists' => 'bool',
        'default_attach_pdf' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipient_email' => null,
        'default_sender_email' => null,
        'sender_emails_list' => null,
        'cc_email' => null,
        'subject' => null,
        'body' => null,
        'document_exists' => null,
        'delivery_note_exists' => null,
        'attachment_exists' => null,
        'accompanying_invoice_exists' => null,
        'default_attach_pdf' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static $openAPINullables = [
        'recipient_email' => true,
            'default_sender_email' => true,
            'sender_emails_list' => true,
            'cc_email' => true,
            'subject' => true,
            'body' => true,
            'document_exists' => true,
            'delivery_note_exists' => true,
            'attachment_exists' => true,
            'accompanying_invoice_exists' => true,
            'default_attach_pdf' => true
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
        'recipient_email' => 'recipient_email',
        'default_sender_email' => 'default_sender_email',
        'sender_emails_list' => 'sender_emails_list',
        'cc_email' => 'cc_email',
        'subject' => 'subject',
        'body' => 'body',
        'document_exists' => 'document_exists',
        'delivery_note_exists' => 'delivery_note_exists',
        'attachment_exists' => 'attachment_exists',
        'accompanying_invoice_exists' => 'accompanying_invoice_exists',
        'default_attach_pdf' => 'default_attach_pdf'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient_email' => 'setRecipientEmail',
        'default_sender_email' => 'setDefaultSenderEmail',
        'sender_emails_list' => 'setSenderEmailsList',
        'cc_email' => 'setCcEmail',
        'subject' => 'setSubject',
        'body' => 'setBody',
        'document_exists' => 'setDocumentExists',
        'delivery_note_exists' => 'setDeliveryNoteExists',
        'attachment_exists' => 'setAttachmentExists',
        'accompanying_invoice_exists' => 'setAccompanyingInvoiceExists',
        'default_attach_pdf' => 'setDefaultAttachPdf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient_email' => 'getRecipientEmail',
        'default_sender_email' => 'getDefaultSenderEmail',
        'sender_emails_list' => 'getSenderEmailsList',
        'cc_email' => 'getCcEmail',
        'subject' => 'getSubject',
        'body' => 'getBody',
        'document_exists' => 'getDocumentExists',
        'delivery_note_exists' => 'getDeliveryNoteExists',
        'attachment_exists' => 'getAttachmentExists',
        'accompanying_invoice_exists' => 'getAccompanyingInvoiceExists',
        'default_attach_pdf' => 'getDefaultAttachPdf'
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
        $this->setIfExists('recipient_email', $data ?? [], null);
        $this->setIfExists('default_sender_email', $data ?? [], null);
        $this->setIfExists('sender_emails_list', $data ?? [], null);
        $this->setIfExists('cc_email', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('document_exists', $data ?? [], null);
        $this->setIfExists('delivery_note_exists', $data ?? [], null);
        $this->setIfExists('attachment_exists', $data ?? [], null);
        $this->setIfExists('accompanying_invoice_exists', $data ?? [], null);
        $this->setIfExists('default_attach_pdf', $data ?? [], null);
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
     * Gets recipient_email
     *
     * @return string|null
     */
    public function getRecipientEmail()
    {
        return $this->container['recipient_email'];
    }

    /**
     * Sets recipient_email
     *
     * @param string|null $recipient_email Recipient's email
     *
     * @return self
     */
    public function setRecipientEmail($recipient_email)
    {

        if (is_null($recipient_email)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_email', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['recipient_email'] = $recipient_email;

        return $this;
    }

    /**
     * Gets default_sender_email
     *
     * @return \FattureInCloud\Model\EmailDataDefaultSenderEmail|null
     */
    public function getDefaultSenderEmail()
    {
        return $this->container['default_sender_email'];
    }

    /**
     * Sets default_sender_email
     *
     * @param \FattureInCloud\Model\EmailDataDefaultSenderEmail|null $default_sender_email default_sender_email
     *
     * @return self
     */
    public function setDefaultSenderEmail($default_sender_email)
    {

        if (is_null($default_sender_email)) {
            array_push($this->openAPINullablesSetToNull, 'default_sender_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_sender_email', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['default_sender_email'] = $default_sender_email;

        return $this;
    }

    /**
     * Gets sender_emails_list
     *
     * @return \FattureInCloud\Model\SenderEmail[]|null
     */
    public function getSenderEmailsList()
    {
        return $this->container['sender_emails_list'];
    }

    /**
     * Sets sender_emails_list
     *
     * @param \FattureInCloud\Model\SenderEmail[]|null $sender_emails_list List of all emails from which the document can be sent
     *
     * @return self
     */
    public function setSenderEmailsList($sender_emails_list)
    {

        if (is_null($sender_emails_list)) {
            array_push($this->openAPINullablesSetToNull, 'sender_emails_list');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_emails_list', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sender_emails_list'] = $sender_emails_list;

        return $this;
    }

    /**
     * Gets cc_email
     *
     * @return string|null
     */
    public function getCcEmail()
    {
        return $this->container['cc_email'];
    }

    /**
     * Sets cc_email
     *
     * @param string|null $cc_email By default is the logged company email. This is the email address to which a copy will be sent.
     *
     * @return self
     */
    public function setCcEmail($cc_email)
    {

        if (is_null($cc_email)) {
            array_push($this->openAPINullablesSetToNull, 'cc_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cc_email', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['cc_email'] = $cc_email;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject Email subject
     *
     * @return self
     */
    public function setSubject($subject)
    {

        if (is_null($subject)) {
            array_push($this->openAPINullablesSetToNull, 'subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subject', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body Email body
     *
     * @return self
     */
    public function setBody($body)
    {

        if (is_null($body)) {
            array_push($this->openAPINullablesSetToNull, 'body');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('body', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets document_exists
     *
     * @return bool|null
     */
    public function getDocumentExists()
    {
        return $this->container['document_exists'];
    }

    /**
     * Sets document_exists
     *
     * @param bool|null $document_exists If the document is not a delivery note, this flag will be set to true
     *
     * @return self
     */
    public function setDocumentExists($document_exists)
    {

        if (is_null($document_exists)) {
            array_push($this->openAPINullablesSetToNull, 'document_exists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document_exists', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['document_exists'] = $document_exists;

        return $this;
    }

    /**
     * Gets delivery_note_exists
     *
     * @return bool|null
     */
    public function getDeliveryNoteExists()
    {
        return $this->container['delivery_note_exists'];
    }

    /**
     * Sets delivery_note_exists
     *
     * @param bool|null $delivery_note_exists If the document is a delivery note, this flag will be set to true
     *
     * @return self
     */
    public function setDeliveryNoteExists($delivery_note_exists)
    {

        if (is_null($delivery_note_exists)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_note_exists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_note_exists', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['delivery_note_exists'] = $delivery_note_exists;

        return $this;
    }

    /**
     * Gets attachment_exists
     *
     * @return bool|null
     */
    public function getAttachmentExists()
    {
        return $this->container['attachment_exists'];
    }

    /**
     * Sets attachment_exists
     *
     * @param bool|null $attachment_exists If the document has one or more attachments, this flag will be set to true
     *
     * @return self
     */
    public function setAttachmentExists($attachment_exists)
    {

        if (is_null($attachment_exists)) {
            array_push($this->openAPINullablesSetToNull, 'attachment_exists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachment_exists', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['attachment_exists'] = $attachment_exists;

        return $this;
    }

    /**
     * Gets accompanying_invoice_exists
     *
     * @return bool|null
     */
    public function getAccompanyingInvoiceExists()
    {
        return $this->container['accompanying_invoice_exists'];
    }

    /**
     * Sets accompanying_invoice_exists
     *
     * @param bool|null $accompanying_invoice_exists If an accompanying invoice exists, this flag will be set to true
     *
     * @return self
     */
    public function setAccompanyingInvoiceExists($accompanying_invoice_exists)
    {

        if (is_null($accompanying_invoice_exists)) {
            array_push($this->openAPINullablesSetToNull, 'accompanying_invoice_exists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accompanying_invoice_exists', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['accompanying_invoice_exists'] = $accompanying_invoice_exists;

        return $this;
    }

    /**
     * Gets default_attach_pdf
     *
     * @return bool|null
     */
    public function getDefaultAttachPdf()
    {
        return $this->container['default_attach_pdf'];
    }

    /**
     * Sets default_attach_pdf
     *
     * @param bool|null $default_attach_pdf If a pdf is attached, this flag will be set to true
     *
     * @return self
     */
    public function setDefaultAttachPdf($default_attach_pdf)
    {

        if (is_null($default_attach_pdf)) {
            array_push($this->openAPINullablesSetToNull, 'default_attach_pdf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_attach_pdf', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['default_attach_pdf'] = $default_attach_pdf;

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


