<?php
/**
 * PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonCurrencies1
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
 * PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonCurrencies1 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentsProductsCardProcessingConfigurationInformationConfigurationsCommonCurrencies1 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentsProducts_cardProcessing_configurationInformation_configurations_common_currencies_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'enabledCardPresent' => 'bool',
        'enabledCardNotPresent' => 'bool',
        'terminalIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'enabledCardPresent' => null,
        'enabledCardNotPresent' => null,
        'terminalIds' => null
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
        'enabled' => 'enabled',
        'enabledCardPresent' => 'enabledCardPresent',
        'enabledCardNotPresent' => 'enabledCardNotPresent',
        'terminalIds' => 'terminalIds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'enabledCardPresent' => 'setEnabledCardPresent',
        'enabledCardNotPresent' => 'setEnabledCardNotPresent',
        'terminalIds' => 'setTerminalIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'enabledCardPresent' => 'getEnabledCardPresent',
        'enabledCardNotPresent' => 'getEnabledCardNotPresent',
        'terminalIds' => 'getTerminalIds'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['enabledCardPresent'] = isset($data['enabledCardPresent']) ? $data['enabledCardPresent'] : null;
        $this->container['enabledCardNotPresent'] = isset($data['enabledCardNotPresent']) ? $data['enabledCardNotPresent'] : null;
        $this->container['terminalIds'] = isset($data['terminalIds']) ? $data['terminalIds'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets enabledCardPresent
     * @return bool
     */
    public function getEnabledCardPresent()
    {
        return $this->container['enabledCardPresent'];
    }

    /**
     * Sets enabledCardPresent
     * @param bool $enabledCardPresent Indicates whether the card-present transaction is activated for the selected currency. If both enabledCardPresent and enabledCardNotPresent are set to null, then enabledCardPresent will have the value of enabled.
     * @return $this
     */
    public function setEnabledCardPresent($enabledCardPresent)
    {
        $this->container['enabledCardPresent'] = $enabledCardPresent;

        return $this;
    }

    /**
     * Gets enabledCardNotPresent
     * @return bool
     */
    public function getEnabledCardNotPresent()
    {
        return $this->container['enabledCardNotPresent'];
    }

    /**
     * Sets enabledCardNotPresent
     * @param bool $enabledCardNotPresent Indicates whether the card-present transaction is activated for the selected currency. If both enabledCardPresent and enabledCardNotPresent are set to null, then enabledCardNotPresent will have the value of enabled.
     * @return $this
     */
    public function setEnabledCardNotPresent($enabledCardNotPresent)
    {
        $this->container['enabledCardNotPresent'] = $enabledCardNotPresent;

        return $this;
    }

    /**
     * Gets terminalIds
     * @return string[]
     */
    public function getTerminalIds()
    {
        return $this->container['terminalIds'];
    }

    /**
     * Sets terminalIds
     * @param string[] $terminalIds Applicable for Prisma (prisma) processor.
     * @return $this
     */
    public function setTerminalIds($terminalIds)
    {
        $this->container['terminalIds'] = $terminalIds;

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


