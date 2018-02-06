<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessBIKToSBIRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessBIKToSBIRequestType extends AbstractStructBase
{
    /**
     * The bikcode
     * @var string
     */
    public $bikcode;
    /**
     * Constructor method for businessBIKToSBIRequestType
     * @uses BusinessBIKToSBIRequestType::setBikcode()
     * @param string $bikcode
     */
    public function __construct($bikcode = null)
    {
        $this
            ->setBikcode($bikcode);
    }
    /**
     * Get bikcode value
     * @return string|null
     */
    public function getBikcode()
    {
        return $this->bikcode;
    }
    /**
     * Set bikcode value
     * @param string $bikcode
     * @return \Webservices\StructType\BusinessBIKToSBIRequestType
     */
    public function setBikcode($bikcode = null)
    {
        // validation for constraint: string
        if (!is_null($bikcode) && !is_string($bikcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bikcode)), __LINE__);
        }
        $this->bikcode = $bikcode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessBIKToSBIRequestType
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
