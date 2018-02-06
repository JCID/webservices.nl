<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeMisc StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeMisc extends AbstractStructBase
{
    /**
     * The fax_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fax_number;
    /**
     * Constructor method for CreditsafeBeMisc
     * @uses CreditsafeBeMisc::setFax_number()
     * @param string $fax_number
     */
    public function __construct($fax_number = null)
    {
        $this
            ->setFax_number($fax_number);
    }
    /**
     * Get fax_number value
     * @return string|null
     */
    public function getFax_number()
    {
        return $this->fax_number;
    }
    /**
     * Set fax_number value
     * @param string $fax_number
     * @return \Webservices\StructType\CreditsafeBeMisc
     */
    public function setFax_number($fax_number = null)
    {
        // validation for constraint: string
        if (!is_null($fax_number) && !is_string($fax_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax_number)), __LINE__);
        }
        $this->fax_number = $fax_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeMisc
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
