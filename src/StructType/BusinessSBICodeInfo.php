<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessSBICodeInfo StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSBICodeInfo extends AbstractStructBase
{
    /**
     * The section
     * @var \Webservices\StructType\BusinessSBISection
     */
    public $section;
    /**
     * The sbicodes
     * @var \Webservices\ArrayType\BusinessSBICodeArray
     */
    public $sbicodes;
    /**
     * Constructor method for BusinessSBICodeInfo
     * @uses BusinessSBICodeInfo::setSection()
     * @uses BusinessSBICodeInfo::setSbicodes()
     * @param \Webservices\StructType\BusinessSBISection $section
     * @param \Webservices\ArrayType\BusinessSBICodeArray $sbicodes
     */
    public function __construct(\Webservices\StructType\BusinessSBISection $section = null, \Webservices\ArrayType\BusinessSBICodeArray $sbicodes = null)
    {
        $this
            ->setSection($section)
            ->setSbicodes($sbicodes);
    }
    /**
     * Get section value
     * @return \Webservices\StructType\BusinessSBISection|null
     */
    public function getSection()
    {
        return $this->section;
    }
    /**
     * Set section value
     * @param \Webservices\StructType\BusinessSBISection $section
     * @return \Webservices\StructType\BusinessSBICodeInfo
     */
    public function setSection(\Webservices\StructType\BusinessSBISection $section = null)
    {
        $this->section = $section;
        return $this;
    }
    /**
     * Get sbicodes value
     * @return \Webservices\ArrayType\BusinessSBICodeArray|null
     */
    public function getSbicodes()
    {
        return $this->sbicodes;
    }
    /**
     * Set sbicodes value
     * @param \Webservices\ArrayType\BusinessSBICodeArray $sbicodes
     * @return \Webservices\StructType\BusinessSBICodeInfo
     */
    public function setSbicodes(\Webservices\ArrayType\BusinessSBICodeArray $sbicodes = null)
    {
        $this->sbicodes = $sbicodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessSBICodeInfo
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
