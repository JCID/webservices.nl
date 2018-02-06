<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnbSearchReferenceResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DnbSearchReferenceResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DNBBusinessReferencePagedResult
     */
    public $out;
    /**
     * Constructor method for dnbSearchReferenceResponseType
     * @uses DnbSearchReferenceResponseType::setOut()
     * @param \Webservices\StructType\DNBBusinessReferencePagedResult $out
     */
    public function __construct(\Webservices\StructType\DNBBusinessReferencePagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DNBBusinessReferencePagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DNBBusinessReferencePagedResult $out
     * @return \Webservices\StructType\DnbSearchReferenceResponseType
     */
    public function setOut(\Webservices\StructType\DNBBusinessReferencePagedResult $out = null)
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
     * @return \Webservices\StructType\DnbSearchReferenceResponseType
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
