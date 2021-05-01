<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serviceNumber' => 'string',
'serviceid' => 'string',
'merchant' => 'string',
'payItemId' => 'string',
'payItemDescr' => 'string',
'amountType' => 'string',
'name' => 'string',
'localCur' => 'string',
'amountLocalCur' => 'float',
'customerNumber' => 'string',
'genDate' => '\DateTime',
'dueDate' => '\DateTime',
'optStrg' => 'string',
'optNmb' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serviceNumber' => null,
'serviceid' => null,
'merchant' => null,
'payItemId' => null,
'payItemDescr' => null,
'amountType' => null,
'name' => null,
'localCur' => null,
'amountLocalCur' => 'float',
'customerNumber' => null,
'genDate' => 'date',
'dueDate' => 'date',
'optStrg' => null,
'optNmb' => null    ];

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
        'serviceNumber' => 'serviceNumber',
'serviceid' => 'serviceid',
'merchant' => 'merchant',
'payItemId' => 'payItemId',
'payItemDescr' => 'payItemDescr',
'amountType' => 'amountType',
'name' => 'name',
'localCur' => 'localCur',
'amountLocalCur' => 'amountLocalCur',
'customerNumber' => 'customerNumber',
'genDate' => 'genDate',
'dueDate' => 'dueDate',
'optStrg' => 'optStrg',
'optNmb' => 'optNmb'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceNumber' => 'setServiceNumber',
'serviceid' => 'setServiceid',
'merchant' => 'setMerchant',
'payItemId' => 'setPayItemId',
'payItemDescr' => 'setPayItemDescr',
'amountType' => 'setAmountType',
'name' => 'setName',
'localCur' => 'setLocalCur',
'amountLocalCur' => 'setAmountLocalCur',
'customerNumber' => 'setCustomerNumber',
'genDate' => 'setGenDate',
'dueDate' => 'setDueDate',
'optStrg' => 'setOptStrg',
'optNmb' => 'setOptNmb'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceNumber' => 'getServiceNumber',
'serviceid' => 'getServiceid',
'merchant' => 'getMerchant',
'payItemId' => 'getPayItemId',
'payItemDescr' => 'getPayItemDescr',
'amountType' => 'getAmountType',
'name' => 'getName',
'localCur' => 'getLocalCur',
'amountLocalCur' => 'getAmountLocalCur',
'customerNumber' => 'getCustomerNumber',
'genDate' => 'getGenDate',
'dueDate' => 'getDueDate',
'optStrg' => 'getOptStrg',
'optNmb' => 'getOptNmb'    ];

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

    const AMOUNT_TYPE_FIXED = 'FIXED';
    const AMOUNT_TYPE_CUSTOM = 'CUSTOM';
    const AMOUNT_TYPE_PARTIAL = 'PARTIAL';
    const AMOUNT_TYPE_OVERPAY = 'OVERPAY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAmountTypeAllowableValues()
    {
        return [
            self::AMOUNT_TYPE_FIXED,
self::AMOUNT_TYPE_CUSTOM,
self::AMOUNT_TYPE_PARTIAL,
self::AMOUNT_TYPE_OVERPAY,        ];
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
        $this->container['serviceNumber'] = isset($data['serviceNumber']) ? $data['serviceNumber'] : null;
        $this->container['serviceid'] = isset($data['serviceid']) ? $data['serviceid'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['payItemId'] = isset($data['payItemId']) ? $data['payItemId'] : null;
        $this->container['payItemDescr'] = isset($data['payItemDescr']) ? $data['payItemDescr'] : null;
        $this->container['amountType'] = isset($data['amountType']) ? $data['amountType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['localCur'] = isset($data['localCur']) ? $data['localCur'] : null;
        $this->container['amountLocalCur'] = isset($data['amountLocalCur']) ? $data['amountLocalCur'] : null;
        $this->container['customerNumber'] = isset($data['customerNumber']) ? $data['customerNumber'] : null;
        $this->container['genDate'] = isset($data['genDate']) ? $data['genDate'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['optStrg'] = isset($data['optStrg']) ? $data['optStrg'] : null;
        $this->container['optNmb'] = isset($data['optNmb']) ? $data['optNmb'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serviceNumber'] === null) {
            $invalidProperties[] = "'serviceNumber' can't be null";
        }
        if ($this->container['serviceid'] === null) {
            $invalidProperties[] = "'serviceid' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ($this->container['payItemId'] === null) {
            $invalidProperties[] = "'payItemId' can't be null";
        }
        if ($this->container['amountType'] === null) {
            $invalidProperties[] = "'amountType' can't be null";
        }
        $allowedValues = $this->getAmountTypeAllowableValues();
        if (!is_null($this->container['amountType']) && !in_array($this->container['amountType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'amountType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['localCur'] === null) {
            $invalidProperties[] = "'localCur' can't be null";
        }
        if ($this->container['amountLocalCur'] === null) {
            $invalidProperties[] = "'amountLocalCur' can't be null";
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
     * @param string $serviceNumber service number with merchant (e.g. policy number with an insurance company or tax number for a governmental institution)
     *
     * @return $this
     */
    public function setServiceNumber($serviceNumber)
    {
        $this->container['serviceNumber'] = $serviceNumber;

        return $this;
    }

    /**
     * Gets serviceid
     *
     * @return string
     */
    public function getServiceid()
    {
        return $this->container['serviceid'];
    }

    /**
     * Sets serviceid
     *
     * @param string $serviceid Unique Service Identifier
     *
     * @return $this
     */
    public function setServiceid($serviceid)
    {
        $this->container['serviceid'] = $serviceid;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string $merchant Unique merchant code
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets payItemId
     *
     * @return string
     */
    public function getPayItemId()
    {
        return $this->container['payItemId'];
    }

    /**
     * Sets payItemId
     *
     * @param string $payItemId Unique qlipay Payment Item ID identifying the topup package to be purchased
     *
     * @return $this
     */
    public function setPayItemId($payItemId)
    {
        $this->container['payItemId'] = $payItemId;

        return $this;
    }

    /**
     * Gets payItemDescr
     *
     * @return string
     */
    public function getPayItemDescr()
    {
        return $this->container['payItemDescr'];
    }

    /**
     * Sets payItemDescr
     *
     * @param string $payItemDescr Contains optional description about payment details (e.g. merchant provided bill types)
     *
     * @return $this
     */
    public function setPayItemDescr($payItemDescr)
    {
        $this->container['payItemDescr'] = $payItemDescr;

        return $this;
    }

    /**
     * Gets amountType
     *
     * @return string
     */
    public function getAmountType()
    {
        return $this->container['amountType'];
    }

    /**
     * Sets amountType
     *
     * @param string $amountType 'Supported amount type for the payment of this subscription:' '\"FIXED\" -> subscription needs to be paid in full, (Payment amount = subscription amount provided in \"amount\")' '\"PARTIAL\" -> Partial subscription amount can be paid. (Payment amount < subscription amount provided in \"amount\"))' '\"OVERPAY\" -> More than the actual subscription amount owed can be paid. (Payment amount > subscription amount provided in \"amount\"). Overpayments are subject to country specific regulations and may be limited to a certain threshold. ' '\"CUSTOM\" -> Amount can be freely entered, independent of subscription amount provided in \"amount\"'
     *
     * @return $this
     */
    public function setAmountType($amountType)
    {
        $allowedValues = $this->getAmountTypeAllowableValues();
        if (!in_array($amountType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'amountType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['amountType'] = $amountType;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Subscription name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets localCur
     *
     * @return string
     */
    public function getLocalCur()
    {
        return $this->container['localCur'];
    }

    /**
     * Sets localCur
     *
     * @param string $localCur Local currency of service. (Format: ISO 4217)
     *
     * @return $this
     */
    public function setLocalCur($localCur)
    {
        $this->container['localCur'] = $localCur;

        return $this;
    }

    /**
     * Gets amountLocalCur
     *
     * @return float
     */
    public function getAmountLocalCur()
    {
        return $this->container['amountLocalCur'];
    }

    /**
     * Sets amountLocalCur
     *
     * @param float $amountLocalCur Payable amount in local currency
     *
     * @return $this
     */
    public function setAmountLocalCur($amountLocalCur)
    {
        $this->container['amountLocalCur'] = $amountLocalCur;

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
     * @param string $customerNumber Customer number with merchant
     *
     * @return $this
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->container['customerNumber'] = $customerNumber;

        return $this;
    }

    /**
     * Gets genDate
     *
     * @return \DateTime
     */
    public function getGenDate()
    {
        return $this->container['genDate'];
    }

    /**
     * Sets genDate
     *
     * @param \DateTime $genDate Exact date of subscription generation (Format: ISO 8601)
     *
     * @return $this
     */
    public function setGenDate($genDate)
    {
        $this->container['genDate'] = $genDate;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \DateTime $dueDate Subscription due date (Format: ISO 8601)
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets optStrg
     *
     * @return string
     */
    public function getOptStrg()
    {
        return $this->container['optStrg'];
    }

    /**
     * Sets optStrg
     *
     * @param string $optStrg Optional string field
     *
     * @return $this
     */
    public function setOptStrg($optStrg)
    {
        $this->container['optStrg'] = $optStrg;

        return $this;
    }

    /**
     * Gets optNmb
     *
     * @return float
     */
    public function getOptNmb()
    {
        return $this->container['optNmb'];
    }

    /**
     * Sets optNmb
     *
     * @param float $optNmb Optional number field
     *
     * @return $this
     */
    public function setOptNmb($optNmb)
    {
        $this->container['optNmb'] = $optNmb;

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
