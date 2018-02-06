<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Province StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Province extends AbstractStructBase
{
    /**
     * The provinciecode
     * @var string
     */
    public $provinciecode;
    /**
     * The provincienaam
     * @var string
     */
    public $provincienaam;
    /**
     * Constructor method for Province
     * @uses Province::setProvinciecode()
     * @uses Province::setProvincienaam()
     * @param string $provinciecode
     * @param string $provincienaam
     */
    public function __construct($provinciecode = null, $provincienaam = null)
    {
        $this
            ->setProvinciecode($provinciecode)
            ->setProvincienaam($provincienaam);
    }
    /**
     * Get provinciecode value
     * @return string|null
     */
    public function getProvinciecode()
    {
        return $this->provinciecode;
    }
    /**
     * Set provinciecode value
     * @param string $provinciecode
     * @return \Webservices\StructType\Province
     */
    public function setProvinciecode($provinciecode = null)
    {
        // validation for constraint: string
        if (!is_null($provinciecode) && !is_string($provinciecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provinciecode)), __LINE__);
        }
        $this->provinciecode = $provinciecode;
        return $this;
    }
    /**
     * Get provincienaam value
     * @return string|null
     */
    public function getProvincienaam()
    {
        return $this->provincienaam;
    }
    /**
     * Set provincienaam value
     * @param string $provincienaam
     * @return \Webservices\StructType\Province
     */
    public function setProvincienaam($provincienaam = null)
    {
        // validation for constraint: string
        if (!is_null($provincienaam) && !is_string($provincienaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provincienaam)), __LINE__);
        }
        $this->provincienaam = $provincienaam;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Province
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
