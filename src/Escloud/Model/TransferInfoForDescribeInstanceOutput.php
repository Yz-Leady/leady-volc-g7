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

class TransferInfoForDescribeInstanceOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferInfoForDescribeInstanceOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'forbid_stop' => 'bool',
        'reduce_spec_config' => '\Volcengine\Escloud\Model\ReduceSpecConfigForDescribeInstanceOutput',
        'transfer_progress' => 'double',
        'transfer_status' => 'string',
        'transfer_task_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'forbid_stop' => null,
        'reduce_spec_config' => null,
        'transfer_progress' => 'double',
        'transfer_status' => null,
        'transfer_task_id' => null
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
        'forbid_stop' => 'ForbidStop',
        'reduce_spec_config' => 'ReduceSpecConfig',
        'transfer_progress' => 'TransferProgress',
        'transfer_status' => 'TransferStatus',
        'transfer_task_id' => 'TransferTaskId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forbid_stop' => 'setForbidStop',
        'reduce_spec_config' => 'setReduceSpecConfig',
        'transfer_progress' => 'setTransferProgress',
        'transfer_status' => 'setTransferStatus',
        'transfer_task_id' => 'setTransferTaskId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forbid_stop' => 'getForbidStop',
        'reduce_spec_config' => 'getReduceSpecConfig',
        'transfer_progress' => 'getTransferProgress',
        'transfer_status' => 'getTransferStatus',
        'transfer_task_id' => 'getTransferTaskId'
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

    const TRANSFER_STATUS_CREATED = 'CREATED';
    const TRANSFER_STATUS_RUNNING = 'RUNNING';
    const TRANSFER_STATUS_FINISH = 'FINISH';
    const TRANSFER_STATUS_CANCELING = 'CANCELING';
    const TRANSFER_STATUS_CANCEL = 'CANCEL';
    const TRANSFER_STATUS_CANCEL_FAILED = 'CANCEL_FAILED';
    const TRANSFER_STATUS_TIMEOUT = 'TIMEOUT';
    const TRANSFER_STATUS_SHRINK_COMPLETE = 'SHRINK_COMPLETE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransferStatusAllowableValues()
    {
        return [
            self::TRANSFER_STATUS_CREATED,
            self::TRANSFER_STATUS_RUNNING,
            self::TRANSFER_STATUS_FINISH,
            self::TRANSFER_STATUS_CANCELING,
            self::TRANSFER_STATUS_CANCEL,
            self::TRANSFER_STATUS_CANCEL_FAILED,
            self::TRANSFER_STATUS_TIMEOUT,
            self::TRANSFER_STATUS_SHRINK_COMPLETE,
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
        $this->container['forbid_stop'] = isset($data['forbid_stop']) ? $data['forbid_stop'] : null;
        $this->container['reduce_spec_config'] = isset($data['reduce_spec_config']) ? $data['reduce_spec_config'] : null;
        $this->container['transfer_progress'] = isset($data['transfer_progress']) ? $data['transfer_progress'] : null;
        $this->container['transfer_status'] = isset($data['transfer_status']) ? $data['transfer_status'] : null;
        $this->container['transfer_task_id'] = isset($data['transfer_task_id']) ? $data['transfer_task_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransferStatusAllowableValues();
        if (!is_null($this->container['transfer_status']) && !in_array($this->container['transfer_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transfer_status', must be one of '%s'",
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
     * Gets forbid_stop
     *
     * @return bool
     */
    public function getForbidStop()
    {
        return $this->container['forbid_stop'];
    }

    /**
     * Sets forbid_stop
     *
     * @param bool $forbid_stop forbid_stop
     *
     * @return $this
     */
    public function setForbidStop($forbid_stop)
    {
        $this->container['forbid_stop'] = $forbid_stop;

        return $this;
    }

    /**
     * Gets reduce_spec_config
     *
     * @return \Volcengine\Escloud\Model\ReduceSpecConfigForDescribeInstanceOutput
     */
    public function getReduceSpecConfig()
    {
        return $this->container['reduce_spec_config'];
    }

    /**
     * Sets reduce_spec_config
     *
     * @param \Volcengine\Escloud\Model\ReduceSpecConfigForDescribeInstanceOutput $reduce_spec_config reduce_spec_config
     *
     * @return $this
     */
    public function setReduceSpecConfig($reduce_spec_config)
    {
        $this->container['reduce_spec_config'] = $reduce_spec_config;

        return $this;
    }

    /**
     * Gets transfer_progress
     *
     * @return double
     */
    public function getTransferProgress()
    {
        return $this->container['transfer_progress'];
    }

    /**
     * Sets transfer_progress
     *
     * @param double $transfer_progress transfer_progress
     *
     * @return $this
     */
    public function setTransferProgress($transfer_progress)
    {
        $this->container['transfer_progress'] = $transfer_progress;

        return $this;
    }

    /**
     * Gets transfer_status
     *
     * @return string
     */
    public function getTransferStatus()
    {
        return $this->container['transfer_status'];
    }

    /**
     * Sets transfer_status
     *
     * @param string $transfer_status transfer_status
     *
     * @return $this
     */
    public function setTransferStatus($transfer_status)
    {
        $allowedValues = $this->getTransferStatusAllowableValues();
        if (!is_null($transfer_status) && !in_array($transfer_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transfer_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transfer_status'] = $transfer_status;

        return $this;
    }

    /**
     * Gets transfer_task_id
     *
     * @return string
     */
    public function getTransferTaskId()
    {
        return $this->container['transfer_task_id'];
    }

    /**
     * Sets transfer_task_id
     *
     * @param string $transfer_task_id transfer_task_id
     *
     * @return $this
     */
    public function setTransferTaskId($transfer_task_id)
    {
        $this->container['transfer_task_id'] = $transfer_task_id;

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

