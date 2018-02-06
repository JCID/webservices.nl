<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessSearchSelectionV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSearchSelectionV2ResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\BusinessReferencePagedResult
     */
    public $out;
    /**
     * Constructor method for businessSearchSelectionV2ResponseType
     * @uses BusinessSearchSelectionV2ResponseType::setOut()
     * @param \Webservices\StructType\BusinessReferencePagedResult $out
     */
    public function __construct(\Webservices\StructType\BusinessReferencePagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\BusinessReferencePagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\BusinessReferencePagedResult $out
     * @return \Webservices\StructType\BusinessSearchSelectionV2ResponseType
     */
    public function setOut(\Webservices\StructType\BusinessReferencePagedResult $out = null)
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
     * @return \Webservices\StructType\BusinessSearchSelectionV2ResponseType
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
