<?php
/**
 * MeetingRoomReservation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * corp-api
 *
 * Corp API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: kletser@maximalabs.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.9
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MeetingRoomReservation Class Doc Comment
 *
 * @category Class
 * @description New reservation details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingRoomReservation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MeetingRoomReservation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'date' => '\DateTime',
'time_from' => 'string',
'time_to' => 'string',
'room_id' => 'int',
'description' => 'string',
'initiator' => '\Swagger\Client\Model\Worker',
'responsible' => '\Swagger\Client\Model\Worker[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'date' => 'date',
'time_from' => null,
'time_to' => null,
'room_id' => null,
'description' => null,
'initiator' => null,
'responsible' => null    ];

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
        'id' => 'id',
'date' => 'date',
'time_from' => 'timeFrom',
'time_to' => 'timeTo',
'room_id' => 'roomId',
'description' => 'description',
'initiator' => 'initiator',
'responsible' => 'responsible'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'date' => 'setDate',
'time_from' => 'setTimeFrom',
'time_to' => 'setTimeTo',
'room_id' => 'setRoomId',
'description' => 'setDescription',
'initiator' => 'setInitiator',
'responsible' => 'setResponsible'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'date' => 'getDate',
'time_from' => 'getTimeFrom',
'time_to' => 'getTimeTo',
'room_id' => 'getRoomId',
'description' => 'getDescription',
'initiator' => 'getInitiator',
'responsible' => 'getResponsible'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['time_from'] = isset($data['time_from']) ? $data['time_from'] : null;
        $this->container['time_to'] = isset($data['time_to']) ? $data['time_to'] : null;
        $this->container['room_id'] = isset($data['room_id']) ? $data['room_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['responsible'] = isset($data['responsible']) ? $data['responsible'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['time_from'] === null) {
            $invalidProperties[] = "'time_from' can't be null";
        }
        if ($this->container['time_to'] === null) {
            $invalidProperties[] = "'time_to' can't be null";
        }
        if ($this->container['room_id'] === null) {
            $invalidProperties[] = "'room_id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['initiator'] === null) {
            $invalidProperties[] = "'initiator' can't be null";
        }
        if ($this->container['responsible'] === null) {
            $invalidProperties[] = "'responsible' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Reservation id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Reservation date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets time_from
     *
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->container['time_from'];
    }

    /**
     * Sets time_from
     *
     * @param string $time_from Reservation time slot in format \"hh:mm\"
     *
     * @return $this
     */
    public function setTimeFrom($time_from)
    {
        $this->container['time_from'] = $time_from;

        return $this;
    }

    /**
     * Gets time_to
     *
     * @return string
     */
    public function getTimeTo()
    {
        return $this->container['time_to'];
    }

    /**
     * Sets time_to
     *
     * @param string $time_to Reservation time slot in format \"hh:mm\"
     *
     * @return $this
     */
    public function setTimeTo($time_to)
    {
        $this->container['time_to'] = $time_to;

        return $this;
    }

    /**
     * Gets room_id
     *
     * @return int
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param int $room_id Reservation room id
     *
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

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
     * @param string $description Reservation description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return \Swagger\Client\Model\Worker
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \Swagger\Client\Model\Worker $initiator initiator
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets responsible
     *
     * @return \Swagger\Client\Model\Worker[]
     */
    public function getResponsible()
    {
        return $this->container['responsible'];
    }

    /**
     * Sets responsible
     *
     * @param \Swagger\Client\Model\Worker[] $responsible Meeting room responsibles
     *
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->container['responsible'] = $responsible;

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
