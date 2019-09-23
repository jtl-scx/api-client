<?php
/**
 * AuthToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  JTL\SCX\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SCX Authentication API
 *
 * # Abstract  SCX Seller and Channel API are protected using a oAuth based mechanism. This API documentation describe API Endpoints to retrive a Session Token for athtentication again Seller and Channel API.  # Error Codes  * **VAL100** - Request Parameter violation * **ATH000** - Unknown Error * **ATH100** - SCX Account not found * **ATH101** - PIN not found  # Changelog  ## 2019-08  * **add** `POST /auth` * **add** `POST /auth/create/seller-token`
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Client\Model;

use ArrayAccess;
use JTL\SCX\Client\Serializer\ObjectSerializer;

/**
 * AuthToken Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scope' => 'string',
        'authToken' => 'string',
        'tokenExpireAt' => '\DateTime',
        'expiresIn' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'scope' => null,
        'authToken' => null,
        'tokenExpireAt' => 'date-time',
        'expiresIn' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'scope' => 'scope',
        'authToken' => 'authToken',
        'tokenExpireAt' => 'tokenExpireAt',
        'expiresIn' => 'expiresIn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scope' => 'setScope',
        'authToken' => 'setAuthToken',
        'tokenExpireAt' => 'setTokenExpireAt',
        'expiresIn' => 'setExpiresIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scope' => 'getScope',
        'authToken' => 'getAuthToken',
        'tokenExpireAt' => 'getTokenExpireAt',
        'expiresIn' => 'getExpiresIn'
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
        return self::$openAPIModelName;
    }

    const SCOPE_SELLER = 'SELLER';
    const SCOPE_CHAN = 'CHAN';
    const SCOPE_ADM = 'ADM';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_SELLER,
            self::SCOPE_CHAN,
            self::SCOPE_ADM,
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
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['authToken'] = isset($data['authToken']) ? $data['authToken'] : null;
        $this->container['tokenExpireAt'] = isset($data['tokenExpireAt']) ? $data['tokenExpireAt'] : null;
        $this->container['expiresIn'] = isset($data['expiresIn']) ? $data['expiresIn'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
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
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($scope) && !in_array($scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets authToken
     *
     * @return string|null
     */
    public function getAuthToken()
    {
        return $this->container['authToken'];
    }

    /**
     * Sets authToken
     *
     * @param string|null $authToken authToken
     *
     * @return $this
     */
    public function setAuthToken($authToken)
    {
        $this->container['authToken'] = $authToken;

        return $this;
    }

    /**
     * Gets tokenExpireAt
     *
     * @return \DateTime|null
     */
    public function getTokenExpireAt()
    {
        return $this->container['tokenExpireAt'];
    }

    /**
     * Sets tokenExpireAt
     *
     * @param \DateTime|null $tokenExpireAt tokenExpireAt
     *
     * @return $this
     */
    public function setTokenExpireAt($tokenExpireAt)
    {
        $this->container['tokenExpireAt'] = $tokenExpireAt;

        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int|null $expiresIn expiresIn
     *
     * @return $this
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


