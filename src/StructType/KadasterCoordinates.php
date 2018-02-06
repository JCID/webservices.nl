<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterCoordinates StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterCoordinates extends AbstractStructBase
{
    /**
     * The x
     * @var int
     */
    public $x;
    /**
     * The y
     * @var int
     */
    public $y;
    /**
     * The latitude
     * @var float
     */
    public $latitude;
    /**
     * The longitude
     * @var float
     */
    public $longitude;
    /**
     * The within_structure
     * @var bool
     */
    public $within_structure;
    /**
     * Constructor method for KadasterCoordinates
     * @uses KadasterCoordinates::setX()
     * @uses KadasterCoordinates::setY()
     * @uses KadasterCoordinates::setLatitude()
     * @uses KadasterCoordinates::setLongitude()
     * @uses KadasterCoordinates::setWithin_structure()
     * @param int $x
     * @param int $y
     * @param float $latitude
     * @param float $longitude
     * @param bool $within_structure
     */
    public function __construct($x = null, $y = null, $latitude = null, $longitude = null, $within_structure = null)
    {
        $this
            ->setX($x)
            ->setY($y)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setWithin_structure($within_structure);
    }
    /**
     * Get x value
     * @return int|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param int $x
     * @return \Webservices\StructType\KadasterCoordinates
     */
    public function setX($x = null)
    {
        // validation for constraint: int
        if (!is_null($x) && !is_numeric($x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($x)), __LINE__);
        }
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return int|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param int $y
     * @return \Webservices\StructType\KadasterCoordinates
     */
    public function setY($y = null)
    {
        // validation for constraint: int
        if (!is_null($y) && !is_numeric($y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($y)), __LINE__);
        }
        $this->y = $y;
        return $this;
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Webservices\StructType\KadasterCoordinates
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Webservices\StructType\KadasterCoordinates
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Get within_structure value
     * @return bool|null
     */
    public function getWithin_structure()
    {
        return $this->within_structure;
    }
    /**
     * Set within_structure value
     * @param bool $within_structure
     * @return \Webservices\StructType\KadasterCoordinates
     */
    public function setWithin_structure($within_structure = null)
    {
        // validation for constraint: boolean
        if (!is_null($within_structure) && !is_bool($within_structure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($within_structure)), __LINE__);
        }
        $this->within_structure = $within_structure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterCoordinates
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
