<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  Klarna
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attention' => 'string',
        'city' => 'string',
        'country' => 'string',
        'email' => 'string',
        'family_name' => 'string',
        'given_name' => 'string',
        'organization_name' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'region' => 'string',
        'street_address' => 'string',
        'street_address2' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attention' => null,
        'city' => null,
        'country' => null,
        'email' => null,
        'family_name' => null,
        'given_name' => null,
        'organization_name' => null,
        'phone' => null,
        'postal_code' => null,
        'region' => null,
        'street_address' => null,
        'street_address2' => null,
        'title' => null
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
        'attention' => 'attention',
        'city' => 'city',
        'country' => 'country',
        'email' => 'email',
        'family_name' => 'family_name',
        'given_name' => 'given_name',
        'organization_name' => 'organization_name',
        'phone' => 'phone',
        'postal_code' => 'postal_code',
        'region' => 'region',
        'street_address' => 'street_address',
        'street_address2' => 'street_address2',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attention' => 'setAttention',
        'city' => 'setCity',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'family_name' => 'setFamilyName',
        'given_name' => 'setGivenName',
        'organization_name' => 'setOrganizationName',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion',
        'street_address' => 'setStreetAddress',
        'street_address2' => 'setStreetAddress2',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attention' => 'getAttention',
        'city' => 'getCity',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'family_name' => 'getFamilyName',
        'given_name' => 'getGivenName',
        'organization_name' => 'getOrganizationName',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion',
        'street_address' => 'getStreetAddress',
        'street_address2' => 'getStreetAddress2',
        'title' => 'getTitle'
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
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['organization_name'] = isset($data['organization_name']) ? $data['organization_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['street_address2'] = isset($data['street_address2']) ? $data['street_address2'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['attention']) && (mb_strlen($this->container['attention']) > 99)) {
            $invalidProperties[] = "invalid value for 'attention', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['attention']) && (mb_strlen($this->container['attention']) < 0)) {
            $invalidProperties[] = "invalid value for 'attention', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 99)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['country']) && !preg_match("/^[A-Za-z]{2,2}$/", $this->container['country'])) {
            $invalidProperties[] = "invalid value for 'country', must be conform to the pattern /^[A-Za-z]{2,2}$/.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 99)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) > 99)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['family_name']) && (mb_strlen($this->container['family_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'family_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) > 99)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['given_name']) && (mb_strlen($this->container['given_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'given_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) > 99)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['organization_name']) && (mb_strlen($this->container['organization_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'organization_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 99)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 5)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 99)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_address']) && (mb_strlen($this->container['street_address']) > 99)) {
            $invalidProperties[] = "invalid value for 'street_address', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['street_address']) && (mb_strlen($this->container['street_address']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_address', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_address2']) && (mb_strlen($this->container['street_address2']) > 99)) {
            $invalidProperties[] = "invalid value for 'street_address2', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['street_address2']) && (mb_strlen($this->container['street_address2']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_address2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 20)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
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
     * Gets attention
     *
     * @return string
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param string $attention ‘Attn.’ - optional parameter.
     *
     * @return $this
     */
    public function setAttention($attention)
    {
        if (!is_null($attention) && (mb_strlen($attention) > 99)) {
            throw new \InvalidArgumentException('invalid length for $attention when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($attention) && (mb_strlen($attention) < 0)) {
            throw new \InvalidArgumentException('invalid length for $attention when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Customer’s city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 99)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($city) && (mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Customer’s country. This value overrides the purchase country if they are different. Should follow the standard of ISO 3166 alpha-2. E.g. GB, US, DE, SE.
     *
     * @return $this
     */
    public function setCountry($country)
    {

        if (!is_null($country) && (!preg_match("/^[A-Za-z]{2,2}$/", $country))) {
            throw new \InvalidArgumentException("invalid value for $country when calling Address., must conform to the pattern /^[A-Za-z]{2,2}$/.");
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Customer’s email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 99)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($email) && (mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name Customer’s family name.
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        if (!is_null($family_name) && (mb_strlen($family_name) > 99)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($family_name) && (mb_strlen($family_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $family_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name Customer’s first name.
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        if (!is_null($given_name) && (mb_strlen($given_name) > 99)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($given_name) && (mb_strlen($given_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $given_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string $organization_name Organization name (if applicable). Only applicable for B2B customers.
     *
     * @return $this
     */
    public function setOrganizationName($organization_name)
    {
        if (!is_null($organization_name) && (mb_strlen($organization_name) > 99)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($organization_name) && (mb_strlen($organization_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $organization_name when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number. Preferrably a mobile phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 99)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 5)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be bigger than or equal to 5.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Customer’s postal code. Validation according to Universal Postal Union addressing systems. E.g. 12345, W1G OPW.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 10.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region Customer’s region or state - Mandatory for US and AU market. Validations according to ISO 3166-2 format, e.g. OH, NJ, etc.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (mb_strlen($region) > 99)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($region) && (mb_strlen($region) < 0)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string $street_address Customer’s street address. Regional formatting is required, as follows: UK/US/FR: 33 Cavendish Square Rest of EU: De Ruijterkade 7
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        if (!is_null($street_address) && (mb_strlen($street_address) > 99)) {
            throw new \InvalidArgumentException('invalid length for $street_address when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($street_address) && (mb_strlen($street_address) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_address when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets street_address2
     *
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->container['street_address2'];
    }

    /**
     * Sets street_address2
     *
     * @param string $street_address2 Customer’s street address. Second Line.
     *
     * @return $this
     */
    public function setStreetAddress2($street_address2)
    {
        if (!is_null($street_address2) && (mb_strlen($street_address2) > 99)) {
            throw new \InvalidArgumentException('invalid length for $street_address2 when calling Address., must be smaller than or equal to 99.');
        }
        if (!is_null($street_address2) && (mb_strlen($street_address2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_address2 when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['street_address2'] = $street_address2;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Customer’s Title. Allowed values per country: UK - \"Mr\", \"Ms\" DE - \"Herr\", \"Frau\" AT: \"Herr, \"Frau\" CH: de-CH: \"Herr, \"Frau\" it-CH: \"Sig.\", \"Sig.ra\" fr-CH: \"M\", \"Mme\"  BE: \"Dhr.\", \"Mevr.\" NL: \"Dhr.\", \"Mevr.\"
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (mb_strlen($title) > 20)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Address., must be smaller than or equal to 20.');
        }
        if (!is_null($title) && (mb_strlen($title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Address., must be bigger than or equal to 0.');
        }

        $this->container['title'] = $title;

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


