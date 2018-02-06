<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessGetSBIDescriptionRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessGetSBIDescriptionRequestType extends AbstractStructBase
{
    /**
     * The sbicode
     * @var string
     */
    public $sbicode;
    /**
     * Constructor method for businessGetSBIDescriptionRequestType
     * @uses BusinessGetSBIDescriptionRequestType::setSbicode()
     * @param string $sbicode
     */
    public function __construct($sbicode = null)
    {
        $this
            ->setSbicode($sbicode);
    }
    /**
     * Get sbicode value
     * @return string|null
     */
    public function getSbicode()
    {
        return $this->sbicode;
    }
    /**
     * Set sbicode value
     * @param string $sbicode
     * @return \Webservices\StructType\BusinessGetSBIDescriptionRequestType
     */
    public function setSbicode($sbicode = null)
    {
        // validation for constraint: string
        if (!is_null($sbicode) && !is_string($sbicode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sbicode)), __LINE__);
        }
        $this->sbicode = $sbicode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessGetSBIDescriptionRequestType
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
