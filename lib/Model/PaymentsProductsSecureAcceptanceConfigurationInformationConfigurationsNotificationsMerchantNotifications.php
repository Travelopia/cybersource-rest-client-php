<?php
/**
 * PaymentsProductsSecureAcceptanceConfigurationInformationConfigurationsNotificationsMerchantNotifications
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
 * PaymentsProductsSecureAcceptanceConfigurationInformationConfigurationsNotificationsMerchantNotifications Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentsProductsSecureAcceptanceConfigurationInformationConfigurationsNotificationsMerchantNotifications implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentsProducts_secureAcceptance_configurationInformation_configurations_notifications_merchantNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'backofficePostEnabled' => 'bool',
        'backofficeEmailAddress' => 'string',
        'backofficeEmailEnabled' => 'bool',
        'backofficePostUrl' => 'string',
        'cardNumberFormat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'backofficePostEnabled' => null,
        'backofficeEmailAddress' => null,
        'backofficeEmailEnabled' => null,
        'backofficePostUrl' => null,
        'cardNumberFormat' => null
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
        'backofficePostEnabled' => 'backofficePostEnabled',
        'backofficeEmailAddress' => 'backofficeEmailAddress',
        'backofficeEmailEnabled' => 'backofficeEmailEnabled',
        'backofficePostUrl' => 'backofficePostUrl',
        'cardNumberFormat' => 'cardNumberFormat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'backofficePostEnabled' => 'setBackofficePostEnabled',
        'backofficeEmailAddress' => 'setBackofficeEmailAddress',
        'backofficeEmailEnabled' => 'setBackofficeEmailEnabled',
        'backofficePostUrl' => 'setBackofficePostUrl',
        'cardNumberFormat' => 'setCardNumberFormat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'backofficePostEnabled' => 'getBackofficePostEnabled',
        'backofficeEmailAddress' => 'getBackofficeEmailAddress',
        'backofficeEmailEnabled' => 'getBackofficeEmailEnabled',
        'backofficePostUrl' => 'getBackofficePostUrl',
        'cardNumberFormat' => 'getCardNumberFormat'
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
        $this->container['backofficePostEnabled'] = isset($data['backofficePostEnabled']) ? $data['backofficePostEnabled'] : null;
        $this->container['backofficeEmailAddress'] = isset($data['backofficeEmailAddress']) ? $data['backofficeEmailAddress'] : null;
        $this->container['backofficeEmailEnabled'] = isset($data['backofficeEmailEnabled']) ? $data['backofficeEmailEnabled'] : null;
        $this->container['backofficePostUrl'] = isset($data['backofficePostUrl']) ? $data['backofficePostUrl'] : null;
        $this->container['cardNumberFormat'] = isset($data['cardNumberFormat']) ? $data['cardNumberFormat'] : null;
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
     * Gets backofficePostEnabled
     * @return bool
     */
    public function getBackofficePostEnabled()
    {
        return $this->container['backofficePostEnabled'];
    }

    /**
     * Sets backofficePostEnabled
     * @param bool $backofficePostEnabled Enables Webhook transaction confirmation messages sent to URL defined in backofficePostUrl. Usually enabled by web developers integrating to Secure Acceptance.
     * @return $this
     */
    public function setBackofficePostEnabled($backofficePostEnabled)
    {
        $this->container['backofficePostEnabled'] = $backofficePostEnabled;

        return $this;
    }

    /**
     * Gets backofficeEmailAddress
     * @return string
     */
    public function getBackofficeEmailAddress()
    {
        return $this->container['backofficeEmailAddress'];
    }

    /**
     * Sets backofficeEmailAddress
     * @param string $backofficeEmailAddress Email address to receive transaction confirmation messages.
     * @return $this
     */
    public function setBackofficeEmailAddress($backofficeEmailAddress)
    {
        $this->container['backofficeEmailAddress'] = $backofficeEmailAddress;

        return $this;
    }

    /**
     * Gets backofficeEmailEnabled
     * @return bool
     */
    public function getBackofficeEmailEnabled()
    {
        return $this->container['backofficeEmailEnabled'];
    }

    /**
     * Sets backofficeEmailEnabled
     * @param bool $backofficeEmailEnabled Enables email transaction confirmation messages, sent to the address specified in backofficeEmailAddress.
     * @return $this
     */
    public function setBackofficeEmailEnabled($backofficeEmailEnabled)
    {
        $this->container['backofficeEmailEnabled'] = $backofficeEmailEnabled;

        return $this;
    }

    /**
     * Gets backofficePostUrl
     * @return string
     */
    public function getBackofficePostUrl()
    {
        return $this->container['backofficePostUrl'];
    }

    /**
     * Sets backofficePostUrl
     * @param string $backofficePostUrl Webhook URL to which transaction confirmation is sent. Usually completed by the web developers integrating to Secure Acceptance.
     * @return $this
     */
    public function setBackofficePostUrl($backofficePostUrl)
    {
        $this->container['backofficePostUrl'] = $backofficePostUrl;

        return $this;
    }

    /**
     * Gets cardNumberFormat
     * @return string
     */
    public function getCardNumberFormat()
    {
        return $this->container['cardNumberFormat'];
    }

    /**
     * Sets cardNumberFormat
     * @param string $cardNumberFormat Format in which the card number should be masked in the notifications.   Valid values: `1` - Display first 6 digits only (e.g. \"444433**********\")  `2` - Display last four digits only (e.g. \"************1111\")  `3` - Display First six and last four digits (e.g. \"444433******1111\")
     * @return $this
     */
    public function setCardNumberFormat($cardNumberFormat)
    {
        $this->container['cardNumberFormat'] = $cardNumberFormat;

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


