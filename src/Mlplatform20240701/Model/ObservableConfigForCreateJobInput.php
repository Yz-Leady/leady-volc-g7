<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Mlplatform20240701\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ObservableConfigForCreateJobInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ObservableConfigForCreateJobInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_metric_service' => '\Volcengine\Mlplatform20240701\Model\CustomMetricServiceForCreateJobInput',
        'dashboard_private_url' => 'string',
        'dashboard_public_url' => 'string',
        'tensorboard_storage' => '\Volcengine\Mlplatform20240701\Model\TensorboardStorageForCreateJobInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_metric_service' => null,
        'dashboard_private_url' => null,
        'dashboard_public_url' => null,
        'tensorboard_storage' => null
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
        'custom_metric_service' => 'CustomMetricService',
        'dashboard_private_url' => 'DashboardPrivateUrl',
        'dashboard_public_url' => 'DashboardPublicUrl',
        'tensorboard_storage' => 'TensorboardStorage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_metric_service' => 'setCustomMetricService',
        'dashboard_private_url' => 'setDashboardPrivateUrl',
        'dashboard_public_url' => 'setDashboardPublicUrl',
        'tensorboard_storage' => 'setTensorboardStorage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_metric_service' => 'getCustomMetricService',
        'dashboard_private_url' => 'getDashboardPrivateUrl',
        'dashboard_public_url' => 'getDashboardPublicUrl',
        'tensorboard_storage' => 'getTensorboardStorage'
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
        $this->container['custom_metric_service'] = isset($data['custom_metric_service']) ? $data['custom_metric_service'] : null;
        $this->container['dashboard_private_url'] = isset($data['dashboard_private_url']) ? $data['dashboard_private_url'] : null;
        $this->container['dashboard_public_url'] = isset($data['dashboard_public_url']) ? $data['dashboard_public_url'] : null;
        $this->container['tensorboard_storage'] = isset($data['tensorboard_storage']) ? $data['tensorboard_storage'] : null;
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
     * Gets custom_metric_service
     *
     * @return \Volcengine\Mlplatform20240701\Model\CustomMetricServiceForCreateJobInput
     */
    public function getCustomMetricService()
    {
        return $this->container['custom_metric_service'];
    }

    /**
     * Sets custom_metric_service
     *
     * @param \Volcengine\Mlplatform20240701\Model\CustomMetricServiceForCreateJobInput $custom_metric_service custom_metric_service
     *
     * @return $this
     */
    public function setCustomMetricService($custom_metric_service)
    {
        $this->container['custom_metric_service'] = $custom_metric_service;

        return $this;
    }

    /**
     * Gets dashboard_private_url
     *
     * @return string
     */
    public function getDashboardPrivateUrl()
    {
        return $this->container['dashboard_private_url'];
    }

    /**
     * Sets dashboard_private_url
     *
     * @param string $dashboard_private_url dashboard_private_url
     *
     * @return $this
     */
    public function setDashboardPrivateUrl($dashboard_private_url)
    {
        $this->container['dashboard_private_url'] = $dashboard_private_url;

        return $this;
    }

    /**
     * Gets dashboard_public_url
     *
     * @return string
     */
    public function getDashboardPublicUrl()
    {
        return $this->container['dashboard_public_url'];
    }

    /**
     * Sets dashboard_public_url
     *
     * @param string $dashboard_public_url dashboard_public_url
     *
     * @return $this
     */
    public function setDashboardPublicUrl($dashboard_public_url)
    {
        $this->container['dashboard_public_url'] = $dashboard_public_url;

        return $this;
    }

    /**
     * Gets tensorboard_storage
     *
     * @return \Volcengine\Mlplatform20240701\Model\TensorboardStorageForCreateJobInput
     */
    public function getTensorboardStorage()
    {
        return $this->container['tensorboard_storage'];
    }

    /**
     * Sets tensorboard_storage
     *
     * @param \Volcengine\Mlplatform20240701\Model\TensorboardStorageForCreateJobInput $tensorboard_storage tensorboard_storage
     *
     * @return $this
     */
    public function setTensorboardStorage($tensorboard_storage)
    {
        $this->container['tensorboard_storage'] = $tensorboard_storage;

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

