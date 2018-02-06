<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessUBOStartInvestigationResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOStartInvestigationResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DutchBusinessUBOInvestigationToken
     */
    public $out;
    /**
     * Constructor method for dutchBusinessUBOStartInvestigationResponseType
     * @uses DutchBusinessUBOStartInvestigationResponseType::setOut()
     * @param \Webservices\StructType\DutchBusinessUBOInvestigationToken $out
     */
    public function __construct(\Webservices\StructType\DutchBusinessUBOInvestigationToken $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationToken|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DutchBusinessUBOInvestigationToken $out
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationResponseType
     */
    public function setOut(\Webservices\StructType\DutchBusinessUBOInvestigationToken $out = null)
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
     * @return \Webservices\StructType\DutchBusinessUBOStartInvestigationResponseType
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
