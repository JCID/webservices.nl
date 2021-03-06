<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RDCoordinatesMatch StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RDCoordinatesMatch extends AbstractStructBase
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
     * The citymatch
     * @var string
     */
    public $citymatch;
    /**
     * The streetmatch
     * @var string
     */
    public $streetmatch;
    /**
     * Constructor method for RDCoordinatesMatch
     * @uses RDCoordinatesMatch::setX()
     * @uses RDCoordinatesMatch::setY()
     * @uses RDCoordinatesMatch::setCitymatch()
     * @uses RDCoordinatesMatch::setStreetmatch()
     * @param int $x
     * @param int $y
     * @param string $citymatch
     * @param string $streetmatch
     */
    public function __construct($x = null, $y = null, $citymatch = null, $streetmatch = null)
    {
        $this
            ->setX($x)
            ->setY($y)
            ->setCitymatch($citymatch)
            ->setStreetmatch($streetmatch);
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
     * @return \Webservices\StructType\RDCoordinatesMatch
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
     * @return \Webservices\StructType\RDCoordinatesMatch
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
     * Get citymatch value
     * @return string|null
     */
    public function getCitymatch()
    {
        return $this->citymatch;
    }
    /**
     * Set citymatch value
     * @param string $citymatch
     * @return \Webservices\StructType\RDCoordinatesMatch
     */
    public function setCitymatch($citymatch = null)
    {
        // validation for constraint: string
        if (!is_null($citymatch) && !is_string($citymatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($citymatch)), __LINE__);
        }
        $this->citymatch = $citymatch;
        return $this;
    }
    /**
     * Get streetmatch value
     * @return string|null
     */
    public function getStreetmatch()
    {
        return $this->streetmatch;
    }
    /**
     * Set streetmatch value
     * @param string $streetmatch
     * @return \Webservices\StructType\RDCoordinatesMatch
     */
    public function setStreetmatch($streetmatch = null)
    {
        // validation for constraint: string
        if (!is_null($streetmatch) && !is_string($streetmatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetmatch)), __LINE__);
        }
        $this->streetmatch = $streetmatch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RDCoordinatesMatch
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
