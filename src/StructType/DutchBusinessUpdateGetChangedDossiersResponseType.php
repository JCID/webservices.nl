<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessUpdateGetChangedDossiersResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUpdateGetChangedDossiersResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DutchBusinessUpdateReferencePagedResult
     */
    public $out;
    /**
     * Constructor method for dutchBusinessUpdateGetChangedDossiersResponseType
     * @uses DutchBusinessUpdateGetChangedDossiersResponseType::setOut()
     * @param \Webservices\StructType\DutchBusinessUpdateReferencePagedResult $out
     */
    public function __construct(\Webservices\StructType\DutchBusinessUpdateReferencePagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DutchBusinessUpdateReferencePagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DutchBusinessUpdateReferencePagedResult $out
     * @return \Webservices\StructType\DutchBusinessUpdateGetChangedDossiersResponseType
     */
    public function setOut(\Webservices\StructType\DutchBusinessUpdateReferencePagedResult $out = null)
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
     * @return \Webservices\StructType\DutchBusinessUpdateGetChangedDossiersResponseType
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
