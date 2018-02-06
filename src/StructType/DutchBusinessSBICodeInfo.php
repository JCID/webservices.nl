<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessSBICodeInfo StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSBICodeInfo extends AbstractStructBase
{
    /**
     * The section
     * @var \Webservices\StructType\DutchBusinessSBISection
     */
    public $section;
    /**
     * The sbi_codes
     * @var \Webservices\ArrayType\DutchBusinessSBICodeArray
     */
    public $sbi_codes;
    /**
     * Constructor method for DutchBusinessSBICodeInfo
     * @uses DutchBusinessSBICodeInfo::setSection()
     * @uses DutchBusinessSBICodeInfo::setSbi_codes()
     * @param \Webservices\StructType\DutchBusinessSBISection $section
     * @param \Webservices\ArrayType\DutchBusinessSBICodeArray $sbi_codes
     */
    public function __construct(\Webservices\StructType\DutchBusinessSBISection $section = null, \Webservices\ArrayType\DutchBusinessSBICodeArray $sbi_codes = null)
    {
        $this
            ->setSection($section)
            ->setSbi_codes($sbi_codes);
    }
    /**
     * Get section value
     * @return \Webservices\StructType\DutchBusinessSBISection|null
     */
    public function getSection()
    {
        return $this->section;
    }
    /**
     * Set section value
     * @param \Webservices\StructType\DutchBusinessSBISection $section
     * @return \Webservices\StructType\DutchBusinessSBICodeInfo
     */
    public function setSection(\Webservices\StructType\DutchBusinessSBISection $section = null)
    {
        $this->section = $section;
        return $this;
    }
    /**
     * Get sbi_codes value
     * @return \Webservices\ArrayType\DutchBusinessSBICodeArray|null
     */
    public function getSbi_codes()
    {
        return $this->sbi_codes;
    }
    /**
     * Set sbi_codes value
     * @param \Webservices\ArrayType\DutchBusinessSBICodeArray $sbi_codes
     * @return \Webservices\StructType\DutchBusinessSBICodeInfo
     */
    public function setSbi_codes(\Webservices\ArrayType\DutchBusinessSBICodeArray $sbi_codes = null)
    {
        $this->sbi_codes = $sbi_codes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessSBICodeInfo
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
