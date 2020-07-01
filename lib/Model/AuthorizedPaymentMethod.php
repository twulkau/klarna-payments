<?php
/**
 * AuthorizedPaymentMethod
 *
 * PHP version 5
 *
 * @category Class
 * @package  Klarna
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * klarna-payments
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 20200630142900
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Klarna\Model;

use \ArrayAccess;
use \Klarna\ObjectSerializer;

/**
 * AuthorizedPaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  Klarna
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizedPaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'authorized_payment_method';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'days' => 'int',
        'number_of_installments' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'days' => 'int64',
        'number_of_installments' => 'int64',
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'days' => 'days',
        'number_of_installments' => 'number_of_installments',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'days' => 'setDays',
        'number_of_installments' => 'setNumberOfInstallments',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'days' => 'getDays',
        'number_of_installments' => 'getNumberOfInstallments',
        'type' => 'getType'
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
        return self::$swaggerModelName;
    }

    const TYPE_INVOICE__AKA_PAY_LATERFIXED_AMOUNT__AKA_FIXED_INSTALMENTSPIX__AKA_PAY_IN_X_MONTHSBASE_ACCOUNT__AKA_KLARNA_MONTHLY_INVOICEDEFERRED_INTEREST__AKA_DEFERRED_INTEREST__US_ONLYDIRECT_DEBIT__AKA_KLARNA_DIREKT_OR_DIRECT_DEBITDIRECT_BANK_TRANSFER__AKA_SOFORT_OR_DIRECT_BANK_TRANSFERB2B_INVOICE__AKA_B2_B_PAY_LATERCARD__AKA_CARDSLICE_IT_BY_CARD__AKA_SLICE_IT_BY_CARD__US__UK = 'invoice (a.k.a. pay later)  Fixed_amount (a.k.a. fixed instalments)  Pix (a.k.a. pay in x months)  Base_account (a.k.a. Klarna monthly invoice)  Deferred_interest (a.k.a. Deferred interest [US only])  Direct_debit (a.k.a. Klarna Direkt or Direct Debit)  Direct_bank_transfer (a.k.a. Sofort or Direct Bank Transfer)  B2b_invoice (a.k.a. B2B Pay Later)  Card (a.k.a. card)  Slice_it_by_card (a.k.a. Slice it by card [US & UK])';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INVOICE__AKA_PAY_LATERFIXED_AMOUNT__AKA_FIXED_INSTALMENTSPIX__AKA_PAY_IN_X_MONTHSBASE_ACCOUNT__AKA_KLARNA_MONTHLY_INVOICEDEFERRED_INTEREST__AKA_DEFERRED_INTEREST__US_ONLYDIRECT_DEBIT__AKA_KLARNA_DIREKT_OR_DIRECT_DEBITDIRECT_BANK_TRANSFER__AKA_SOFORT_OR_DIRECT_BANK_TRANSFERB2B_INVOICE__AKA_B2_B_PAY_LATERCARD__AKA_CARDSLICE_IT_BY_CARD__AKA_SLICE_IT_BY_CARD__US__UK,
        ];
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
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['number_of_installments'] = isset($data['number_of_installments']) ? $data['number_of_installments'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int $days days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets number_of_installments
     *
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->container['number_of_installments'];
    }

    /**
     * Sets number_of_installments
     *
     * @param int $number_of_installments number_of_installments
     *
     * @return $this
     */
    public function setNumberOfInstallments($number_of_installments)
    {
        $this->container['number_of_installments'] = $number_of_installments;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


