<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerRDInformationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerRDInformationRequestType extends AbstractStructBase
{
    /**
     * The xfrom
     * @var int
     */
    public $xfrom;
    /**
     * The yfrom
     * @var int
     */
    public $yfrom;
    /**
     * The xto
     * @var int
     */
    public $xto;
    /**
     * The yto
     * @var int
     */
    public $yto;
    /**
     * The routetype
     * @var string
     */
    public $routetype;
    /**
     * Constructor method for routePlannerRDInformationRequestType
     * @uses RoutePlannerRDInformationRequestType::setXfrom()
     * @uses RoutePlannerRDInformationRequestType::setYfrom()
     * @uses RoutePlannerRDInformationRequestType::setXto()
     * @uses RoutePlannerRDInformationRequestType::setYto()
     * @uses RoutePlannerRDInformationRequestType::setRoutetype()
     * @param int $xfrom
     * @param int $yfrom
     * @param int $xto
     * @param int $yto
     * @param string $routetype
     */
    public function __construct($xfrom = null, $yfrom = null, $xto = null, $yto = null, $routetype = null)
    {
        $this
            ->setXfrom($xfrom)
            ->setYfrom($yfrom)
            ->setXto($xto)
            ->setYto($yto)
            ->setRoutetype($routetype);
    }
    /**
     * Get xfrom value
     * @return int|null
     */
    public function getXfrom()
    {
        return $this->xfrom;
    }
    /**
     * Set xfrom value
     * @param int $xfrom
     * @return \Webservices\StructType\RoutePlannerRDInformationRequestType
     */
    public function setXfrom($xfrom = null)
    {
        // validation for constraint: int
        if (!is_null($xfrom) && !is_numeric($xfrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xfrom)), __LINE__);
        }
        $this->xfrom = $xfrom;
        return $this;
    }
    /**
     * Get yfrom value
     * @return int|null
     */
    public function getYfrom()
    {
        return $this->yfrom;
    }
    /**
     * Set yfrom value
     * @param int $yfrom
     * @return \Webservices\StructType\RoutePlannerRDInformationRequestType
     */
    public function setYfrom($yfrom = null)
    {
        // validation for constraint: int
        if (!is_null($yfrom) && !is_numeric($yfrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($yfrom)), __LINE__);
        }
        $this->yfrom = $yfrom;
        return $this;
    }
    /**
     * Get xto value
     * @return int|null
     */
    public function getXto()
    {
        return $this->xto;
    }
    /**
     * Set xto value
     * @param int $xto
     * @return \Webservices\StructType\RoutePlannerRDInformationRequestType
     */
    public function setXto($xto = null)
    {
        // validation for constraint: int
        if (!is_null($xto) && !is_numeric($xto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xto)), __LINE__);
        }
        $this->xto = $xto;
        return $this;
    }
    /**
     * Get yto value
     * @return int|null
     */
    public function getYto()
    {
        return $this->yto;
    }
    /**
     * Set yto value
     * @param int $yto
     * @return \Webservices\StructType\RoutePlannerRDInformationRequestType
     */
    public function setYto($yto = null)
    {
        // validation for constraint: int
        if (!is_null($yto) && !is_numeric($yto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($yto)), __LINE__);
        }
        $this->yto = $yto;
        return $this;
    }
    /**
     * Get routetype value
     * @return string|null
     */
    public function getRoutetype()
    {
        return $this->routetype;
    }
    /**
     * Set routetype value
     * @param string $routetype
     * @return \Webservices\StructType\RoutePlannerRDInformationRequestType
     */
    public function setRoutetype($routetype = null)
    {
        // validation for constraint: string
        if (!is_null($routetype) && !is_string($routetype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routetype)), __LINE__);
        }
        $this->routetype = $routetype;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerRDInformationRequestType
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
