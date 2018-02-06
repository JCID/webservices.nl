<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessBIKToSBIResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessBIKToSBIResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\ArrayType\BusinessSBICodeArray
     */
    public $out;
    /**
     * Constructor method for businessBIKToSBIResponseType
     * @uses BusinessBIKToSBIResponseType::setOut()
     * @param \Webservices\ArrayType\BusinessSBICodeArray $out
     */
    public function __construct(\Webservices\ArrayType\BusinessSBICodeArray $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\ArrayType\BusinessSBICodeArray|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\ArrayType\BusinessSBICodeArray $out
     * @return \Webservices\StructType\BusinessBIKToSBIResponseType
     */
    public function setOut(\Webservices\ArrayType\BusinessSBICodeArray $out = null)
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
     * @return \Webservices\StructType\BusinessBIKToSBIResponseType
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
