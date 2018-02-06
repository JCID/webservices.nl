<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRBirthInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRBirthInformation extends AbstractStructBase
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The residence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $residence;
    /**
     * The country_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $country_code;
    /**
     * The country_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country_text;
    /**
     * Constructor method for GCRBirthInformation
     * @uses GCRBirthInformation::setDate()
     * @uses GCRBirthInformation::setResidence()
     * @uses GCRBirthInformation::setCountry_code()
     * @uses GCRBirthInformation::setCountry_text()
     * @param string $date
     * @param string $residence
     * @param int $country_code
     * @param string $country_text
     */
    public function __construct($date = null, $residence = null, $country_code = null, $country_text = null)
    {
        $this
            ->setDate($date)
            ->setResidence($residence)
            ->setCountry_code($country_code)
            ->setCountry_text($country_text);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Webservices\StructType\GCRBirthInformation
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get residence value
     * @return string|null
     */
    public function getResidence()
    {
        return $this->residence;
    }
    /**
     * Set residence value
     * @param string $residence
     * @return \Webservices\StructType\GCRBirthInformation
     */
    public function setResidence($residence = null)
    {
        // validation for constraint: string
        if (!is_null($residence) && !is_string($residence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residence)), __LINE__);
        }
        $this->residence = $residence;
        return $this;
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
     * @return \Webservices\StructType\GCRBirthInformation
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
     * @return \Webservices\StructType\GCRBirthInformation
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
     * @return \Webservices\StructType\GCRBirthInformation
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
