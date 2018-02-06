<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCountry StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCountry extends AbstractStructBase
{
    /**
     * The country_code
     * @var int
     */
    public $country_code;
    /**
     * The country_text
     * @var string
     */
    public $country_text;
    /**
     * Constructor method for GCRCountry
     * @uses GCRCountry::setCountry_code()
     * @uses GCRCountry::setCountry_text()
     * @param int $country_code
     * @param string $country_text
     */
    public function __construct($country_code = null, $country_text = null)
    {
        $this
            ->setCountry_code($country_code)
            ->setCountry_text($country_text);
    }
    /**
     * Get country_code value
     * @return int|null
     */
    public function getCountry_code()
    {
        return $this->country_code;
    }
    /**
     * Set country_code value
     * @param int $country_code
     * @return \Webservices\StructType\GCRCountry
     */
    public function setCountry_code($country_code = null)
    {
        // validation for constraint: int
        if (!is_null($country_code) && !is_numeric($country_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($country_code)), __LINE__);
        }
        $this->country_code = $country_code;
        return $this;
    }
    /**
     * Get country_text value
     * @return string|null
     */
    public function getCountry_text()
    {
        return $this->country_text;
    }
    /**
     * Set country_text value
     * @param string $country_text
     * @return \Webservices\StructType\GCRCountry
     */
    public function setCountry_text($country_text = null)
    {
        // validation for constraint: string
        if (!is_null($country_text) && !is_string($country_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_text)), __LINE__);
        }
        $this->country_text = $country_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCountry
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
