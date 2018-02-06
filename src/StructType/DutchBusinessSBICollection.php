<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessSBICollection StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSBICollection extends AbstractStructBase
{
    /**
     * The original
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\DutchBusinessSBICodeArray
     */
    public $original;
    /**
     * The company_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessSBICodeArray
     */
    public $company_info;
    /**
     * Constructor method for DutchBusinessSBICollection
     * @uses DutchBusinessSBICollection::setOriginal()
     * @uses DutchBusinessSBICollection::setCompany_info()
     * @param \Webservices\ArrayType\DutchBusinessSBICodeArray $original
     * @param \Webservices\ArrayType\DutchBusinessSBICodeArray $company_info
     */
    public function __construct(\Webservices\ArrayType\DutchBusinessSBICodeArray $original = null, \Webservices\ArrayType\DutchBusinessSBICodeArray $company_info = null)
    {
        $this
            ->setOriginal($original)
            ->setCompany_info($company_info);
    }
    /**
     * Get original value
     * @return \Webservices\ArrayType\DutchBusinessSBICodeArray
     */
    public function getOriginal()
    {
        return $this->original;
    }
    /**
     * Set original value
     * @param \Webservices\ArrayType\DutchBusinessSBICodeArray $original
     * @return \Webservices\StructType\DutchBusinessSBICollection
     */
    public function setOriginal(\Webservices\ArrayType\DutchBusinessSBICodeArray $original = null)
    {
        $this->original = $original;
        return $this;
    }
    /**
     * Get company_info value
     * @return \Webservices\ArrayType\DutchBusinessSBICodeArray|null
     */
    public function getCompany_info()
    {
        return $this->company_info;
    }
    /**
     * Set company_info value
     * @param \Webservices\ArrayType\DutchBusinessSBICodeArray $company_info
     * @return \Webservices\StructType\DutchBusinessSBICollection
     */
    public function setCompany_info(\Webservices\ArrayType\DutchBusinessSBICodeArray $company_info = null)
    {
        $this->company_info = $company_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessSBICollection
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
