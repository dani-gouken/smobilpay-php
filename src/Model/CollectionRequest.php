<?php
/**
 * CollectionRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smobilpay S3P API
 *
 * Smobilpay Third Party API FOR PAYMENT COLLECTIONS
 *
 * OpenAPI spec version: 3.0.1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maviance\S3PApiClient\Model;

use \ArrayAccess;
use \Maviance\S3PApiClient\ObjectSerializer;

/**
 * CollectionRequest Class Doc Comment
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CollectionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CollectionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quoteId' => 'string',
'customerPhonenumber' => 'int',
'customerEmailaddress' => 'string',
'customerName' => 'string',
'customerAddress' => 'string',
'customerNumber' => 'string',
'serviceNumber' => 'string',
'trid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quoteId' => null,
'customerPhonenumber' => null,
'customerEmailaddress' => null,
'customerName' => null,
'customerAddress' => null,
'customerNumber' => null,
'serviceNumber' => null,
'trid' => null    ];

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
        'quoteId' => 'quoteId',
'customerPhonenumber' => 'customerPhonenumber',
'customerEmailaddress' => 'customerEmailaddress',
'customerName' => 'customerName',
'customerAddress' => 'customerAddress',
'customerNumber' => 'customerNumber',
'serviceNumber' => 'serviceNumber',
'trid' => 'trid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quoteId' => 'setQuoteId',
'customerPhonenumber' => 'setCustomerPhonenumber',
'customerEmailaddress' => 'setCustomerEmailaddress',
'customerName' => 'setCustomerName',
'customerAddress' => 'setCustomerAddress',
'customerNumber' => 'setCustomerNumber',
'serviceNumber' => 'setServiceNumber',
'trid' => 'setTrid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quoteId' => 'getQuoteId',
'customerPhonenumber' => 'getCustomerPhonenumber',
'customerEmailaddress' => 'getCustomerEmailaddress',
'customerName' => 'getCustomerName',
'customerAddress' => 'getCustomerAddress',
'customerNumber' => 'getCustomerNumber',
'serviceNumber' => 'getServiceNumber',
'trid' => 'getTrid'    ];

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
        $this->container['quoteId'] = isset($data['quoteId']) ? $data['quoteId'] : null;
        $this->container['customerPhonenumber'] = isset($data['customerPhonenumber']) ? $data['customerPhonenumber'] : null;
        $this->container['customerEmailaddress'] = isset($data['customerEmailaddress']) ? $data['customerEmailaddress'] : null;
        $this->container['customerName'] = isset($data['customerName']) ? $data['customerName'] : null;
        $this->container['customerAddress'] = isset($data['customerAddress']) ? $data['customerAddress'] : null;
        $this->container['customerNumber'] = isset($data['customerNumber']) ? $data['customerNumber'] : null;
        $this->container['serviceNumber'] = isset($data['serviceNumber']) ? $data['serviceNumber'] : null;
        $this->container['trid'] = isset($data['trid']) ? $data['trid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quoteId'] === null) {
            $invalidProperties[] = "'quoteId' can't be null";
        }
        if ($this->container['customerPhonenumber'] === null) {
            $invalidProperties[] = "'customerPhonenumber' can't be null";
        }
        if ($this->container['customerEmailaddress'] === null) {
            $invalidProperties[] = "'customerEmailaddress' can't be null";
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
     * Gets quoteId
     *
     * @return string
     */
    public function getQuoteId()
    {
        return $this->container['quoteId'];
    }

    /**
     * Sets quoteId
     *
     * @param string $quoteId Quote Number of the related quote that was previously requested.
     *
     * @return $this
     */
    public function setQuoteId($quoteId)
    {
        $this->container['quoteId'] = $quoteId;

        return $this;
    }

    /**
     * Gets customerPhonenumber
     *
     * @return int
     */
    public function getCustomerPhonenumber()
    {
        return $this->container['customerPhonenumber'];
    }

    /**
     * Sets customerPhonenumber
     *
     * @param int $customerPhonenumber Customer Phonenumber for regulatory compliance – international format with leading country code. E.g. “237699999999” for a fictional phone number 699999999 in Cameroon (237).
     *
     * @return $this
     */
    public function setCustomerPhonenumber($customerPhonenumber)
    {
        $this->container['customerPhonenumber'] = $customerPhonenumber;

        return $this;
    }

    /**
     * Gets customerEmailaddress
     *
     * @return string
     */
    public function getCustomerEmailaddress()
    {
        return $this->container['customerEmailaddress'];
    }

    /**
     * Sets customerEmailaddress
     *
     * @param string $customerEmailaddress Customer Email address for regulatory compliance.
     *
     * @return $this
     */
    public function setCustomerEmailaddress($customerEmailaddress)
    {
        $this->container['customerEmailaddress'] = $customerEmailaddress;

        return $this;
    }

    /**
     * Gets customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
     * Sets customerName
     *
     * @param string $customerName Customer Name for regulatory compliance - only mandatory if <<service.isReqCustomerName = 1>>
     *
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->container['customerName'] = $customerName;

        return $this;
    }

    /**
     * Gets customerAddress
     *
     * @return string
     */
    public function getCustomerAddress()
    {
        return $this->container['customerAddress'];
    }

    /**
     * Sets customerAddress
     *
     * @param string $customerAddress Customer Address for regulatory compliance - only mandatory if <<service.isReqCustomerAddress = 1>>
     *
     * @return $this
     */
    public function setCustomerAddress($customerAddress)
    {
        $this->container['customerAddress'] = $customerAddress;

        return $this;
    }

    /**
     * Gets customerNumber
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customerNumber'];
    }

    /**
     * Sets customerNumber
     *
     * @param string $customerNumber Customer number - only mandatory if <<service.isReqCustomerNumber = 1>>
     *
     * @return $this
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->container['customerNumber'] = $customerNumber;

        return $this;
    }

    /**
     * Gets serviceNumber
     *
     * @return string
     */
    public function getServiceNumber()
    {
        return $this->container['serviceNumber'];
    }

    /**
     * Sets serviceNumber
     *
     * @param string $serviceNumber Service number – only mandatory if <<service.isReqServiceNumber = 1>>. Usually contains the target of a payment collection.
     *
     * @return $this
     */
    public function setServiceNumber($serviceNumber)
    {
        $this->container['serviceNumber'] = $serviceNumber;

        return $this;
    }

    /**
     * Gets trid
     *
     * @return string
     */
    public function getTrid()
    {
        return $this->container['trid'];
    }

    /**
     * Sets trid
     *
     * @param string $trid custom external transaction reference - custom field to be freely used for internal payment collection referencing. Should be unique. **NOTE:** The API does not manage transaction references (e.g. run unique validation) – this value needs to be managed by the client’s system.
     *
     * @return $this
     */
    public function setTrid($trid)
    {
        $this->container['trid'] = $trid;

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
