<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Volcobserve\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class CreateNotificationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateNotificationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'effect_end_at' => 'string',
        'effect_start_at' => 'string',
        'name' => 'string',
        'notifications' => '\Volcengine\Volcobserve\Model\NotificationForCreateNotificationInput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'effect_end_at' => null,
        'effect_start_at' => null,
        'name' => null,
        'notifications' => null
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
        'effect_end_at' => 'EffectEndAt',
        'effect_start_at' => 'EffectStartAt',
        'name' => 'Name',
        'notifications' => 'Notifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effect_end_at' => 'setEffectEndAt',
        'effect_start_at' => 'setEffectStartAt',
        'name' => 'setName',
        'notifications' => 'setNotifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effect_end_at' => 'getEffectEndAt',
        'effect_start_at' => 'getEffectStartAt',
        'name' => 'getName',
        'notifications' => 'getNotifications'
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
        $this->container['effect_end_at'] = isset($data['effect_end_at']) ? $data['effect_end_at'] : null;
        $this->container['effect_start_at'] = isset($data['effect_start_at']) ? $data['effect_start_at'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['effect_end_at'] === null) {
            $invalidProperties[] = "'effect_end_at' can't be null";
        }
        if ($this->container['effect_start_at'] === null) {
            $invalidProperties[] = "'effect_start_at' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets effect_end_at
     *
     * @return string
     */
    public function getEffectEndAt()
    {
        return $this->container['effect_end_at'];
    }

    /**
     * Sets effect_end_at
     *
     * @param string $effect_end_at effect_end_at
     *
     * @return $this
     */
    public function setEffectEndAt($effect_end_at)
    {
        $this->container['effect_end_at'] = $effect_end_at;

        return $this;
    }

    /**
     * Gets effect_start_at
     *
     * @return string
     */
    public function getEffectStartAt()
    {
        return $this->container['effect_start_at'];
    }

    /**
     * Sets effect_start_at
     *
     * @param string $effect_start_at effect_start_at
     *
     * @return $this
     */
    public function setEffectStartAt($effect_start_at)
    {
        $this->container['effect_start_at'] = $effect_start_at;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \Volcengine\Volcobserve\Model\NotificationForCreateNotificationInput[]
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \Volcengine\Volcobserve\Model\NotificationForCreateNotificationInput[] $notifications notifications
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

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

