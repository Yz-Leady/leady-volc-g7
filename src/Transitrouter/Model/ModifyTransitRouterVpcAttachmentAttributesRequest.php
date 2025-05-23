<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Transitrouter\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ModifyTransitRouterVpcAttachmentAttributesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModifyTransitRouterVpcAttachmentAttributesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attach_points' => '\Volcengine\Transitrouter\Model\AttachPointForModifyTransitRouterVpcAttachmentAttributesInput[]',
        'auto_publish_route_enabled' => 'bool',
        'description' => 'string',
        'ipv6_enabled' => 'bool',
        'transit_router_attachment_id' => 'string',
        'transit_router_attachment_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attach_points' => null,
        'auto_publish_route_enabled' => null,
        'description' => null,
        'ipv6_enabled' => null,
        'transit_router_attachment_id' => null,
        'transit_router_attachment_name' => null
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
        'attach_points' => 'AttachPoints',
        'auto_publish_route_enabled' => 'AutoPublishRouteEnabled',
        'description' => 'Description',
        'ipv6_enabled' => 'Ipv6Enabled',
        'transit_router_attachment_id' => 'TransitRouterAttachmentId',
        'transit_router_attachment_name' => 'TransitRouterAttachmentName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attach_points' => 'setAttachPoints',
        'auto_publish_route_enabled' => 'setAutoPublishRouteEnabled',
        'description' => 'setDescription',
        'ipv6_enabled' => 'setIpv6Enabled',
        'transit_router_attachment_id' => 'setTransitRouterAttachmentId',
        'transit_router_attachment_name' => 'setTransitRouterAttachmentName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attach_points' => 'getAttachPoints',
        'auto_publish_route_enabled' => 'getAutoPublishRouteEnabled',
        'description' => 'getDescription',
        'ipv6_enabled' => 'getIpv6Enabled',
        'transit_router_attachment_id' => 'getTransitRouterAttachmentId',
        'transit_router_attachment_name' => 'getTransitRouterAttachmentName'
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
        $this->container['attach_points'] = isset($data['attach_points']) ? $data['attach_points'] : null;
        $this->container['auto_publish_route_enabled'] = isset($data['auto_publish_route_enabled']) ? $data['auto_publish_route_enabled'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ipv6_enabled'] = isset($data['ipv6_enabled']) ? $data['ipv6_enabled'] : null;
        $this->container['transit_router_attachment_id'] = isset($data['transit_router_attachment_id']) ? $data['transit_router_attachment_id'] : null;
        $this->container['transit_router_attachment_name'] = isset($data['transit_router_attachment_name']) ? $data['transit_router_attachment_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transit_router_attachment_id'] === null) {
            $invalidProperties[] = "'transit_router_attachment_id' can't be null";
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
     * Gets attach_points
     *
     * @return \Volcengine\Transitrouter\Model\AttachPointForModifyTransitRouterVpcAttachmentAttributesInput[]
     */
    public function getAttachPoints()
    {
        return $this->container['attach_points'];
    }

    /**
     * Sets attach_points
     *
     * @param \Volcengine\Transitrouter\Model\AttachPointForModifyTransitRouterVpcAttachmentAttributesInput[] $attach_points attach_points
     *
     * @return $this
     */
    public function setAttachPoints($attach_points)
    {
        $this->container['attach_points'] = $attach_points;

        return $this;
    }

    /**
     * Gets auto_publish_route_enabled
     *
     * @return bool
     */
    public function getAutoPublishRouteEnabled()
    {
        return $this->container['auto_publish_route_enabled'];
    }

    /**
     * Sets auto_publish_route_enabled
     *
     * @param bool $auto_publish_route_enabled auto_publish_route_enabled
     *
     * @return $this
     */
    public function setAutoPublishRouteEnabled($auto_publish_route_enabled)
    {
        $this->container['auto_publish_route_enabled'] = $auto_publish_route_enabled;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ipv6_enabled
     *
     * @return bool
     */
    public function getIpv6Enabled()
    {
        return $this->container['ipv6_enabled'];
    }

    /**
     * Sets ipv6_enabled
     *
     * @param bool $ipv6_enabled ipv6_enabled
     *
     * @return $this
     */
    public function setIpv6Enabled($ipv6_enabled)
    {
        $this->container['ipv6_enabled'] = $ipv6_enabled;

        return $this;
    }

    /**
     * Gets transit_router_attachment_id
     *
     * @return string
     */
    public function getTransitRouterAttachmentId()
    {
        return $this->container['transit_router_attachment_id'];
    }

    /**
     * Sets transit_router_attachment_id
     *
     * @param string $transit_router_attachment_id transit_router_attachment_id
     *
     * @return $this
     */
    public function setTransitRouterAttachmentId($transit_router_attachment_id)
    {
        $this->container['transit_router_attachment_id'] = $transit_router_attachment_id;

        return $this;
    }

    /**
     * Gets transit_router_attachment_name
     *
     * @return string
     */
    public function getTransitRouterAttachmentName()
    {
        return $this->container['transit_router_attachment_name'];
    }

    /**
     * Sets transit_router_attachment_name
     *
     * @param string $transit_router_attachment_name transit_router_attachment_name
     *
     * @return $this
     */
    public function setTransitRouterAttachmentName($transit_router_attachment_name)
    {
        $this->container['transit_router_attachment_name'] = $transit_router_attachment_name;

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

