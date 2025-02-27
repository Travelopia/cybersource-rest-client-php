<?php
/**
 * Kmsv2keyssymverifiKeyInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Kmsv2keyssymverifiKeyInformation Class Doc Comment
 *
 * @category    Class
 * @description key information
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Kmsv2keyssymverifiKeyInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'kmsv2keyssymverifi_keyInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'referenceNumber' => 'string',
        'digestAlgorithm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'referenceNumber' => null,
        'digestAlgorithm' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'organizationId' => 'organizationId',
        'referenceNumber' => 'referenceNumber',
        'digestAlgorithm' => 'digestAlgorithm'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'referenceNumber' => 'setReferenceNumber',
        'digestAlgorithm' => 'setDigestAlgorithm'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'referenceNumber' => 'getReferenceNumber',
        'digestAlgorithm' => 'getDigestAlgorithm'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const DIGEST_ALGORITHM_HMACSHA1 = 'HMACSHA1';
    const DIGEST_ALGORITHM_HMACSHA2 = 'HMACSHA2';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDigestAlgorithmAllowableValues()
    {
        return [
            self::DIGEST_ALGORITHM_HMACSHA1,
            self::DIGEST_ALGORITHM_HMACSHA2,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['digestAlgorithm'] = isset($data['digestAlgorithm']) ? $data['digestAlgorithm'] : 'HMACSHA2';
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['organizationId'] === null) {
            $invalid_properties[] = "'organizationId' can't be null";
        }
        $allowed_values = $this->getDigestAlgorithmAllowableValues();
        if (!in_array($this->container['digestAlgorithm'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'digestAlgorithm', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['organizationId'] === null) {
            return false;
        }
        $allowed_values = $this->getDigestAlgorithmAllowableValues();
        if (!in_array($this->container['digestAlgorithm'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Merchant Id
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets referenceNumber
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     * @param string $referenceNumber Reference number is a unique identifier provided by the client along with the organization Id. This is an optional field provided solely for the client's convenience. If client specifies value for this field in the request, it is expected to be available in the response.
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets digestAlgorithm
     * @return string
     */
    public function getDigestAlgorithm()
    {
        return $this->container['digestAlgorithm'];
    }

    /**
     * Sets digestAlgorithm
     * @param string $digestAlgorithm Algorithm for message signature authentication
     * @return $this
     */
    public function setDigestAlgorithm($digestAlgorithm)
    {
        $allowed_values = $this->getDigestAlgorithmAllowableValues();
        if (!is_null($digestAlgorithm) && !in_array($digestAlgorithm, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'digestAlgorithm', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['digestAlgorithm'] = $digestAlgorithm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


