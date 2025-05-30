<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Escloud\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class SubInstanceForDescribeInstanceOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubInstanceForDescribeInstanceOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sub_instance_id' => 'string',
        'sub_instance_status' => 'string',
        'sub_instance_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sub_instance_id' => null,
        'sub_instance_status' => null,
        'sub_instance_type' => null
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
        'sub_instance_id' => 'SubInstanceId',
        'sub_instance_status' => 'SubInstanceStatus',
        'sub_instance_type' => 'SubInstanceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sub_instance_id' => 'setSubInstanceId',
        'sub_instance_status' => 'setSubInstanceStatus',
        'sub_instance_type' => 'setSubInstanceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sub_instance_id' => 'getSubInstanceId',
        'sub_instance_status' => 'getSubInstanceStatus',
        'sub_instance_type' => 'getSubInstanceType'
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

    const SUB_INSTANCE_STATUS_AVAILABLE = 'AVAILABLE';
    const SUB_INSTANCE_STATUS_RELEASED = 'RELEASED';
    const SUB_INSTANCE_TYPE_SQL = 'Sql';
    const SUB_INSTANCE_TYPE_KRYPTON = 'Krypton';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubInstanceStatusAllowableValues()
    {
        return [
            self::SUB_INSTANCE_STATUS_AVAILABLE,
            self::SUB_INSTANCE_STATUS_RELEASED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubInstanceTypeAllowableValues()
    {
        return [
            self::SUB_INSTANCE_TYPE_SQL,
            self::SUB_INSTANCE_TYPE_KRYPTON,
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
        $this->container['sub_instance_id'] = isset($data['sub_instance_id']) ? $data['sub_instance_id'] : null;
        $this->container['sub_instance_status'] = isset($data['sub_instance_status']) ? $data['sub_instance_status'] : null;
        $this->container['sub_instance_type'] = isset($data['sub_instance_type']) ? $data['sub_instance_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubInstanceStatusAllowableValues();
        if (!is_null($this->container['sub_instance_status']) && !in_array($this->container['sub_instance_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sub_instance_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubInstanceTypeAllowableValues();
        if (!is_null($this->container['sub_instance_type']) && !in_array($this->container['sub_instance_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sub_instance_type', must be one of '%s'",
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
     * Gets sub_instance_id
     *
     * @return string
     */
    public function getSubInstanceId()
    {
        return $this->container['sub_instance_id'];
    }

    /**
     * Sets sub_instance_id
     *
     * @param string $sub_instance_id sub_instance_id
     *
     * @return $this
     */
    public function setSubInstanceId($sub_instance_id)
    {
        $this->container['sub_instance_id'] = $sub_instance_id;

        return $this;
    }

    /**
     * Gets sub_instance_status
     *
     * @return string
     */
    public function getSubInstanceStatus()
    {
        return $this->container['sub_instance_status'];
    }

    /**
     * Sets sub_instance_status
     *
     * @param string $sub_instance_status sub_instance_status
     *
     * @return $this
     */
    public function setSubInstanceStatus($sub_instance_status)
    {
        $allowedValues = $this->getSubInstanceStatusAllowableValues();
        if (!is_null($sub_instance_status) && !in_array($sub_instance_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sub_instance_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sub_instance_status'] = $sub_instance_status;

        return $this;
    }

    /**
     * Gets sub_instance_type
     *
     * @return string
     */
    public function getSubInstanceType()
    {
        return $this->container['sub_instance_type'];
    }

    /**
     * Sets sub_instance_type
     *
     * @param string $sub_instance_type sub_instance_type
     *
     * @return $this
     */
    public function setSubInstanceType($sub_instance_type)
    {
        $allowedValues = $this->getSubInstanceTypeAllowableValues();
        if (!is_null($sub_instance_type) && !in_array($sub_instance_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sub_instance_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sub_instance_type'] = $sub_instance_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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

