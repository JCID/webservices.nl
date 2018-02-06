<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocatieBinnenlandLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class LocatieBinnenlandLijst extends AbstractStructBase
{
    /**
     * The locaties_binnenland
     * @var \Webservices\ArrayType\LocatieBinnenlandArray
     */
    public $locaties_binnenland;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for LocatieBinnenlandLijst
     * @uses LocatieBinnenlandLijst::setLocaties_binnenland()
     * @uses LocatieBinnenlandLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\LocatieBinnenlandArray $locaties_binnenland
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\LocatieBinnenlandArray $locaties_binnenland = null, $indicatie_compleet = null)
    {
        $this
            ->setLocaties_binnenland($locaties_binnenland)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get locaties_binnenland value
     * @return \Webservices\ArrayType\LocatieBinnenlandArray|null
     */
    public function getLocaties_binnenland()
    {
        return $this->locaties_binnenland;
    }
    /**
     * Set locaties_binnenland value
     * @param \Webservices\ArrayType\LocatieBinnenlandArray $locaties_binnenland
     * @return \Webservices\StructType\LocatieBinnenlandLijst
     */
    public function setLocaties_binnenland(\Webservices\ArrayType\LocatieBinnenlandArray $locaties_binnenland = null)
    {
        $this->locaties_binnenland = $locaties_binnenland;
        return $this;
    }
    /**
     * Get indicatie_compleet value
     * @return bool|null
     */
    public function getIndicatie_compleet()
    {
        return $this->indicatie_compleet;
    }
    /**
     * Set indicatie_compleet value
     * @param bool $indicatie_compleet
     * @return \Webservices\StructType\LocatieBinnenlandLijst
     */
    public function setIndicatie_compleet($indicatie_compleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_compleet) && !is_bool($indicatie_compleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_compleet)), __LINE__);
        }
        $this->indicatie_compleet = $indicatie_compleet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\LocatieBinnenlandLijst
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
