<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for metaGetServicesResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaGetServicesResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\ArrayType\MetaServiceReferenceArray
     */
    public $out;
    /**
     * Constructor method for metaGetServicesResponseType
     * @uses MetaGetServicesResponseType::setOut()
     * @param \Webservices\ArrayType\MetaServiceReferenceArray $out
     */
    public function __construct(\Webservices\ArrayType\MetaServiceReferenceArray $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\ArrayType\MetaServiceReferenceArray|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\ArrayType\MetaServiceReferenceArray $out
     * @return \Webservices\StructType\MetaGetServicesResponseType
     */
    public function setOut(\Webservices\ArrayType\MetaServiceReferenceArray $out = null)
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
     * @return \Webservices\StructType\MetaGetServicesResponseType
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
