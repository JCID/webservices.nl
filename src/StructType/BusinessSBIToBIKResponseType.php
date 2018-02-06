<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSBIToBIKResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSBIToBIKResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\ArrayType\BusinessBIKCodeArray
     */
    public $out;
    /**
     * Constructor method for businessSBIToBIKResponseType
     * @uses BusinessSBIToBIKResponseType::setOut()
     * @param \Webservices\ArrayType\BusinessBIKCodeArray $out
     */
    public function __construct(\Webservices\ArrayType\BusinessBIKCodeArray $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\ArrayType\BusinessBIKCodeArray|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\ArrayType\BusinessBIKCodeArray $out
     * @return \Webservices\StructType\BusinessSBIToBIKResponseType
     */
    public function setOut(\Webservices\ArrayType\BusinessBIKCodeArray $out = null)
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
     * @return \Webservices\StructType\BusinessSBIToBIKResponseType
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
