<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for areaCodePostcodeLookupResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AreaCodePostcodeLookupResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\ArrayType\AreaCodeArray
     */
    public $out;
    /**
     * Constructor method for areaCodePostcodeLookupResponseType
     * @uses AreaCodePostcodeLookupResponseType::setOut()
     * @param \Webservices\ArrayType\AreaCodeArray $out
     */
    public function __construct(\Webservices\ArrayType\AreaCodeArray $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\ArrayType\AreaCodeArray|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\ArrayType\AreaCodeArray $out
     * @return \Webservices\StructType\AreaCodePostcodeLookupResponseType
     */
    public function setOut(\Webservices\ArrayType\AreaCodeArray $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AreaCodePostcodeLookupResponseType
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
