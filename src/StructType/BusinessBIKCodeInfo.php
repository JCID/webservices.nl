<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessBIKCodeInfo StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessBIKCodeInfo extends AbstractStructBase
{
    /**
     * The sections
     * @var \Webservices\ArrayType\BusinessBIKSectionArray
     */
    public $sections;
    /**
     * The bikcodes
     * @var \Webservices\ArrayType\BusinessBIKCodeArray
     */
    public $bikcodes;
    /**
     * Constructor method for BusinessBIKCodeInfo
     * @uses BusinessBIKCodeInfo::setSections()
     * @uses BusinessBIKCodeInfo::setBikcodes()
     * @param \Webservices\ArrayType\BusinessBIKSectionArray $sections
     * @param \Webservices\ArrayType\BusinessBIKCodeArray $bikcodes
     */
    public function __construct(\Webservices\ArrayType\BusinessBIKSectionArray $sections = null, \Webservices\ArrayType\BusinessBIKCodeArray $bikcodes = null)
    {
        $this
            ->setSections($sections)
            ->setBikcodes($bikcodes);
    }
    /**
     * Get sections value
     * @return \Webservices\ArrayType\BusinessBIKSectionArray|null
     */
    public function getSections()
    {
        return $this->sections;
    }
    /**
     * Set sections value
     * @param \Webservices\ArrayType\BusinessBIKSectionArray $sections
     * @return \Webservices\StructType\BusinessBIKCodeInfo
     */
    public function setSections(\Webservices\ArrayType\BusinessBIKSectionArray $sections = null)
    {
        $this->sections = $sections;
        return $this;
    }
    /**
     * Get bikcodes value
     * @return \Webservices\ArrayType\BusinessBIKCodeArray|null
     */
    public function getBikcodes()
    {
        return $this->bikcodes;
    }
    /**
     * Set bikcodes value
     * @param \Webservices\ArrayType\BusinessBIKCodeArray $bikcodes
     * @return \Webservices\StructType\BusinessBIKCodeInfo
     */
    public function setBikcodes(\Webservices\ArrayType\BusinessBIKCodeArray $bikcodes = null)
    {
        $this->bikcodes = $bikcodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessBIKCodeInfo
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
