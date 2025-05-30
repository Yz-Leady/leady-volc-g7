<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Cdn\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class UpdateSharedConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateSharedConfigRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_ip_access_rule' => '\Volcengine\Cdn\Model\AllowIpAccessRuleForUpdateSharedConfigInput',
        'allow_referer_access_rule' => '\Volcengine\Cdn\Model\AllowRefererAccessRuleForUpdateSharedConfigInput',
        'common_match_list' => '\Volcengine\Cdn\Model\CommonMatchListForUpdateSharedConfigInput',
        'config_name' => 'string',
        'deny_ip_access_rule' => '\Volcengine\Cdn\Model\DenyIpAccessRuleForUpdateSharedConfigInput',
        'deny_referer_access_rule' => '\Volcengine\Cdn\Model\DenyRefererAccessRuleForUpdateSharedConfigInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_ip_access_rule' => null,
        'allow_referer_access_rule' => null,
        'common_match_list' => null,
        'config_name' => null,
        'deny_ip_access_rule' => null,
        'deny_referer_access_rule' => null
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
        'allow_ip_access_rule' => 'AllowIpAccessRule',
        'allow_referer_access_rule' => 'AllowRefererAccessRule',
        'common_match_list' => 'CommonMatchList',
        'config_name' => 'ConfigName',
        'deny_ip_access_rule' => 'DenyIpAccessRule',
        'deny_referer_access_rule' => 'DenyRefererAccessRule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_ip_access_rule' => 'setAllowIpAccessRule',
        'allow_referer_access_rule' => 'setAllowRefererAccessRule',
        'common_match_list' => 'setCommonMatchList',
        'config_name' => 'setConfigName',
        'deny_ip_access_rule' => 'setDenyIpAccessRule',
        'deny_referer_access_rule' => 'setDenyRefererAccessRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_ip_access_rule' => 'getAllowIpAccessRule',
        'allow_referer_access_rule' => 'getAllowRefererAccessRule',
        'common_match_list' => 'getCommonMatchList',
        'config_name' => 'getConfigName',
        'deny_ip_access_rule' => 'getDenyIpAccessRule',
        'deny_referer_access_rule' => 'getDenyRefererAccessRule'
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
        $this->container['allow_ip_access_rule'] = isset($data['allow_ip_access_rule']) ? $data['allow_ip_access_rule'] : null;
        $this->container['allow_referer_access_rule'] = isset($data['allow_referer_access_rule']) ? $data['allow_referer_access_rule'] : null;
        $this->container['common_match_list'] = isset($data['common_match_list']) ? $data['common_match_list'] : null;
        $this->container['config_name'] = isset($data['config_name']) ? $data['config_name'] : null;
        $this->container['deny_ip_access_rule'] = isset($data['deny_ip_access_rule']) ? $data['deny_ip_access_rule'] : null;
        $this->container['deny_referer_access_rule'] = isset($data['deny_referer_access_rule']) ? $data['deny_referer_access_rule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['config_name'] === null) {
            $invalidProperties[] = "'config_name' can't be null";
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
     * Gets allow_ip_access_rule
     *
     * @return \Volcengine\Cdn\Model\AllowIpAccessRuleForUpdateSharedConfigInput
     */
    public function getAllowIpAccessRule()
    {
        return $this->container['allow_ip_access_rule'];
    }

    /**
     * Sets allow_ip_access_rule
     *
     * @param \Volcengine\Cdn\Model\AllowIpAccessRuleForUpdateSharedConfigInput $allow_ip_access_rule allow_ip_access_rule
     *
     * @return $this
     */
    public function setAllowIpAccessRule($allow_ip_access_rule)
    {
        $this->container['allow_ip_access_rule'] = $allow_ip_access_rule;

        return $this;
    }

    /**
     * Gets allow_referer_access_rule
     *
     * @return \Volcengine\Cdn\Model\AllowRefererAccessRuleForUpdateSharedConfigInput
     */
    public function getAllowRefererAccessRule()
    {
        return $this->container['allow_referer_access_rule'];
    }

    /**
     * Sets allow_referer_access_rule
     *
     * @param \Volcengine\Cdn\Model\AllowRefererAccessRuleForUpdateSharedConfigInput $allow_referer_access_rule allow_referer_access_rule
     *
     * @return $this
     */
    public function setAllowRefererAccessRule($allow_referer_access_rule)
    {
        $this->container['allow_referer_access_rule'] = $allow_referer_access_rule;

        return $this;
    }

    /**
     * Gets common_match_list
     *
     * @return \Volcengine\Cdn\Model\CommonMatchListForUpdateSharedConfigInput
     */
    public function getCommonMatchList()
    {
        return $this->container['common_match_list'];
    }

    /**
     * Sets common_match_list
     *
     * @param \Volcengine\Cdn\Model\CommonMatchListForUpdateSharedConfigInput $common_match_list common_match_list
     *
     * @return $this
     */
    public function setCommonMatchList($common_match_list)
    {
        $this->container['common_match_list'] = $common_match_list;

        return $this;
    }

    /**
     * Gets config_name
     *
     * @return string
     */
    public function getConfigName()
    {
        return $this->container['config_name'];
    }

    /**
     * Sets config_name
     *
     * @param string $config_name config_name
     *
     * @return $this
     */
    public function setConfigName($config_name)
    {
        $this->container['config_name'] = $config_name;

        return $this;
    }

    /**
     * Gets deny_ip_access_rule
     *
     * @return \Volcengine\Cdn\Model\DenyIpAccessRuleForUpdateSharedConfigInput
     */
    public function getDenyIpAccessRule()
    {
        return $this->container['deny_ip_access_rule'];
    }

    /**
     * Sets deny_ip_access_rule
     *
     * @param \Volcengine\Cdn\Model\DenyIpAccessRuleForUpdateSharedConfigInput $deny_ip_access_rule deny_ip_access_rule
     *
     * @return $this
     */
    public function setDenyIpAccessRule($deny_ip_access_rule)
    {
        $this->container['deny_ip_access_rule'] = $deny_ip_access_rule;

        return $this;
    }

    /**
     * Gets deny_referer_access_rule
     *
     * @return \Volcengine\Cdn\Model\DenyRefererAccessRuleForUpdateSharedConfigInput
     */
    public function getDenyRefererAccessRule()
    {
        return $this->container['deny_referer_access_rule'];
    }

    /**
     * Sets deny_referer_access_rule
     *
     * @param \Volcengine\Cdn\Model\DenyRefererAccessRuleForUpdateSharedConfigInput $deny_referer_access_rule deny_referer_access_rule
     *
     * @return $this
     */
    public function setDenyRefererAccessRule($deny_referer_access_rule)
    {
        $this->container['deny_referer_access_rule'] = $deny_referer_access_rule;

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

