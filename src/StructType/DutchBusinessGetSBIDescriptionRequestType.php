<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessGetSBIDescriptionRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessGetSBIDescriptionRequestType extends AbstractStructBase
{
    /**
     * The sbi_code
     * @var string
     */
    public $sbi_code;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for dutchBusinessGetSBIDescriptionRequestType
     * @uses DutchBusinessGetSBIDescriptionRequestType::setSbi_code()
     * @uses DutchBusinessGetSBIDescriptionRequestType::setLanguage()
     * @param string $sbi_code
     * @param string $language
     */
    public function __construct($sbi_code = null, $language = null)
    {
        $this
            ->setSbi_code($sbi_code)
            ->setLanguage($language);
    }
    /**
     * Get sbi_code value
     * @return string|null
     */
    public function getSbi_code()
    {
        return $this->sbi_code;
    }
    /**
     * Set sbi_code value
     * @param string $sbi_code
     * @return \Webservices\StructType\DutchBusinessGetSBIDescriptionRequestType
     */
    public function setSbi_code($sbi_code = null)
    {
        // validation for constraint: string
        if (!is_null($sbi_code) && !is_string($sbi_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sbi_code)), __LINE__);
        }
        $this->sbi_code = $sbi_code;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Webservices\StructType\DutchBusinessGetSBIDescriptionRequestType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessGetSBIDescriptionRequestType
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
