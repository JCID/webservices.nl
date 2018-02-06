<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessSBISection StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSBISection extends AbstractStructBase
{
    /**
     * The section_code
     * @var string
     */
    public $section_code;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchBusinessSBISection
     * @uses DutchBusinessSBISection::setSection_code()
     * @uses DutchBusinessSBISection::setDescription()
     * @param string $section_code
     * @param string $description
     */
    public function __construct($section_code = null, $description = null)
    {
        $this
            ->setSection_code($section_code)
            ->setDescription($description);
    }
    /**
     * Get section_code value
     * @return string|null
     */
    public function getSection_code()
    {
        return $this->section_code;
    }
    /**
     * Set section_code value
     * @param string $section_code
     * @return \Webservices\StructType\DutchBusinessSBISection
     */
    public function setSection_code($section_code = null)
    {
        // validation for constraint: string
        if (!is_null($section_code) && !is_string($section_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($section_code)), __LINE__);
        }
        $this->section_code = $section_code;
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
     * @return \Webservices\StructType\DutchBusinessSBISection
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
     * @return \Webservices\StructType\DutchBusinessSBISection
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
