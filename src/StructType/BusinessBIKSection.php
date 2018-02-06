<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessBIKSection StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessBIKSection extends AbstractStructBase
{
    /**
     * The sectioncode
     * @var string
     */
    public $sectioncode;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for BusinessBIKSection
     * @uses BusinessBIKSection::setSectioncode()
     * @uses BusinessBIKSection::setDescription()
     * @param string $sectioncode
     * @param string $description
     */
    public function __construct($sectioncode = null, $description = null)
    {
        $this
            ->setSectioncode($sectioncode)
            ->setDescription($description);
    }
    /**
     * Get sectioncode value
     * @return string|null
     */
    public function getSectioncode()
    {
        return $this->sectioncode;
    }
    /**
     * Set sectioncode value
     * @param string $sectioncode
     * @return \Webservices\StructType\BusinessBIKSection
     */
    public function setSectioncode($sectioncode = null)
    {
        // validation for constraint: string
        if (!is_null($sectioncode) && !is_string($sectioncode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sectioncode)), __LINE__);
        }
        $this->sectioncode = $sectioncode;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\BusinessBIKSection
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessBIKSection
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
