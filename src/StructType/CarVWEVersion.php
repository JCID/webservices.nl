<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEVersion StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEVersion extends AbstractStructBase
{
    /**
     * The atl_code
     * @var int
     */
    public $atl_code;
    /**
     * The version_name
     * @var string
     */
    public $version_name;
    /**
     * The fuel_type_id
     * @var int
     */
    public $fuel_type_id;
    /**
     * The fuel_type
     * @var string
     */
    public $fuel_type;
    /**
     * The body_style_id
     * @var int
     */
    public $body_style_id;
    /**
     * The body_style
     * @var string
     */
    public $body_style;
    /**
     * The doors
     * @var int
     */
    public $doors;
    /**
     * The power
     * @var int
     */
    public $power;
    /**
     * The gear_id
     * @var int
     */
    public $gear_id;
    /**
     * The gear
     * @var string
     */
    public $gear;
    /**
     * The valid_from
     * @var string
     */
    public $valid_from;
    /**
     * The valid_until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $valid_until;
    /**
     * Constructor method for CarVWEVersion
     * @uses CarVWEVersion::setAtl_code()
     * @uses CarVWEVersion::setVersion_name()
     * @uses CarVWEVersion::setFuel_type_id()
     * @uses CarVWEVersion::setFuel_type()
     * @uses CarVWEVersion::setBody_style_id()
     * @uses CarVWEVersion::setBody_style()
     * @uses CarVWEVersion::setDoors()
     * @uses CarVWEVersion::setPower()
     * @uses CarVWEVersion::setGear_id()
     * @uses CarVWEVersion::setGear()
     * @uses CarVWEVersion::setValid_from()
     * @uses CarVWEVersion::setValid_until()
     * @param int $atl_code
     * @param string $version_name
     * @param int $fuel_type_id
     * @param string $fuel_type
     * @param int $body_style_id
     * @param string $body_style
     * @param int $doors
     * @param int $power
     * @param int $gear_id
     * @param string $gear
     * @param string $valid_from
     * @param string $valid_until
     */
    public function __construct($atl_code = null, $version_name = null, $fuel_type_id = null, $fuel_type = null, $body_style_id = null, $body_style = null, $doors = null, $power = null, $gear_id = null, $gear = null, $valid_from = null, $valid_until = null)
    {
        $this
            ->setAtl_code($atl_code)
            ->setVersion_name($version_name)
            ->setFuel_type_id($fuel_type_id)
            ->setFuel_type($fuel_type)
            ->setBody_style_id($body_style_id)
            ->setBody_style($body_style)
            ->setDoors($doors)
            ->setPower($power)
            ->setGear_id($gear_id)
            ->setGear($gear)
            ->setValid_from($valid_from)
            ->setValid_until($valid_until);
    }
    /**
     * Get atl_code value
     * @return int|null
     */
    public function getAtl_code()
    {
        return $this->atl_code;
    }
    /**
     * Set atl_code value
     * @param int $atl_code
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setAtl_code($atl_code = null)
    {
        // validation for constraint: int
        if (!is_null($atl_code) && !is_numeric($atl_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($atl_code)), __LINE__);
        }
        $this->atl_code = $atl_code;
        return $this;
    }
    /**
     * Get version_name value
     * @return string|null
     */
    public function getVersion_name()
    {
        return $this->version_name;
    }
    /**
     * Set version_name value
     * @param string $version_name
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setVersion_name($version_name = null)
    {
        // validation for constraint: string
        if (!is_null($version_name) && !is_string($version_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version_name)), __LINE__);
        }
        $this->version_name = $version_name;
        return $this;
    }
    /**
     * Get fuel_type_id value
     * @return int|null
     */
    public function getFuel_type_id()
    {
        return $this->fuel_type_id;
    }
    /**
     * Set fuel_type_id value
     * @param int $fuel_type_id
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setFuel_type_id($fuel_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($fuel_type_id) && !is_numeric($fuel_type_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fuel_type_id)), __LINE__);
        }
        $this->fuel_type_id = $fuel_type_id;
        return $this;
    }
    /**
     * Get fuel_type value
     * @return string|null
     */
    public function getFuel_type()
    {
        return $this->fuel_type;
    }
    /**
     * Set fuel_type value
     * @param string $fuel_type
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setFuel_type($fuel_type = null)
    {
        // validation for constraint: string
        if (!is_null($fuel_type) && !is_string($fuel_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuel_type)), __LINE__);
        }
        $this->fuel_type = $fuel_type;
        return $this;
    }
    /**
     * Get body_style_id value
     * @return int|null
     */
    public function getBody_style_id()
    {
        return $this->body_style_id;
    }
    /**
     * Set body_style_id value
     * @param int $body_style_id
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setBody_style_id($body_style_id = null)
    {
        // validation for constraint: int
        if (!is_null($body_style_id) && !is_numeric($body_style_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($body_style_id)), __LINE__);
        }
        $this->body_style_id = $body_style_id;
        return $this;
    }
    /**
     * Get body_style value
     * @return string|null
     */
    public function getBody_style()
    {
        return $this->body_style;
    }
    /**
     * Set body_style value
     * @param string $body_style
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setBody_style($body_style = null)
    {
        // validation for constraint: string
        if (!is_null($body_style) && !is_string($body_style)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body_style)), __LINE__);
        }
        $this->body_style = $body_style;
        return $this;
    }
    /**
     * Get doors value
     * @return int|null
     */
    public function getDoors()
    {
        return $this->doors;
    }
    /**
     * Set doors value
     * @param int $doors
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setDoors($doors = null)
    {
        // validation for constraint: int
        if (!is_null($doors) && !is_numeric($doors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($doors)), __LINE__);
        }
        $this->doors = $doors;
        return $this;
    }
    /**
     * Get power value
     * @return int|null
     */
    public function getPower()
    {
        return $this->power;
    }
    /**
     * Set power value
     * @param int $power
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setPower($power = null)
    {
        // validation for constraint: int
        if (!is_null($power) && !is_numeric($power)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($power)), __LINE__);
        }
        $this->power = $power;
        return $this;
    }
    /**
     * Get gear_id value
     * @return int|null
     */
    public function getGear_id()
    {
        return $this->gear_id;
    }
    /**
     * Set gear_id value
     * @param int $gear_id
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setGear_id($gear_id = null)
    {
        // validation for constraint: int
        if (!is_null($gear_id) && !is_numeric($gear_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gear_id)), __LINE__);
        }
        $this->gear_id = $gear_id;
        return $this;
    }
    /**
     * Get gear value
     * @return string|null
     */
    public function getGear()
    {
        return $this->gear;
    }
    /**
     * Set gear value
     * @param string $gear
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setGear($gear = null)
    {
        // validation for constraint: string
        if (!is_null($gear) && !is_string($gear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gear)), __LINE__);
        }
        $this->gear = $gear;
        return $this;
    }
    /**
     * Get valid_from value
     * @return string|null
     */
    public function getValid_from()
    {
        return $this->valid_from;
    }
    /**
     * Set valid_from value
     * @param string $valid_from
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setValid_from($valid_from = null)
    {
        // validation for constraint: string
        if (!is_null($valid_from) && !is_string($valid_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valid_from)), __LINE__);
        }
        $this->valid_from = $valid_from;
        return $this;
    }
    /**
     * Get valid_until value
     * @return string|null
     */
    public function getValid_until()
    {
        return $this->valid_until;
    }
    /**
     * Set valid_until value
     * @param string $valid_until
     * @return \Webservices\StructType\CarVWEVersion
     */
    public function setValid_until($valid_until = null)
    {
        // validation for constraint: string
        if (!is_null($valid_until) && !is_string($valid_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valid_until)), __LINE__);
        }
        $this->valid_until = $valid_until;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEVersion
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
