<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessUBOCheckInvestigationResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOCheckInvestigationResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DutchBusinessUBOInvestigationStatus
     */
    public $out;
    /**
     * Constructor method for dutchBusinessUBOCheckInvestigationResponseType
     * @uses DutchBusinessUBOCheckInvestigationResponseType::setOut()
     * @param \Webservices\StructType\DutchBusinessUBOInvestigationStatus $out
     */
    public function __construct(\Webservices\StructType\DutchBusinessUBOInvestigationStatus $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationStatus|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DutchBusinessUBOInvestigationStatus $out
     * @return \Webservices\StructType\DutchBusinessUBOCheckInvestigationResponseType
     */
    public function setOut(\Webservices\StructType\DutchBusinessUBOInvestigationStatus $out = null)
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
     * @return \Webservices\StructType\DutchBusinessUBOCheckInvestigationResponseType
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
