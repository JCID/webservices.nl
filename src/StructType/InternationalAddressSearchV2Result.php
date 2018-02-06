<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalAddressSearchV2Result StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InternationalAddressSearchV2Result extends AbstractStructBase
{
    /**
     * The validation_status
     * @var string
     */
    public $validation_status;
    /**
     * The result
     * @var \Webservices\ArrayType\InternationalV2Array
     */
    public $result;
    /**
     * The country_iso3
     * @var string
     */
    public $country_iso3;
    /**
     * Constructor method for InternationalAddressSearchV2Result
     * @uses InternationalAddressSearchV2Result::setValidation_status()
     * @uses InternationalAddressSearchV2Result::setResult()
     * @uses InternationalAddressSearchV2Result::setCountry_iso3()
     * @param string $validation_status
     * @param \Webservices\ArrayType\InternationalV2Array $result
     * @param string $country_iso3
     */
    public function __construct($validation_status = null, \Webservices\ArrayType\InternationalV2Array $result = null, $country_iso3 = null)
    {
        $this
            ->setValidation_status($validation_status)
            ->setResult($result)
            ->setCountry_iso3($country_iso3);
    }
    /**
     * Get validation_status value
     * @return string|null
     */
    public function getValidation_status()
    {
        return $this->validation_status;
    }
    /**
     * Set validation_status value
     * @param string $validation_status
     * @return \Webservices\StructType\InternationalAddressSearchV2Result
     */
    public function setValidation_status($validation_status = null)
    {
        // validation for constraint: string
        if (!is_null($validation_status) && !is_string($validation_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validation_status)), __LINE__);
        }
        $this->validation_status = $validation_status;
        return $this;
    }
    /**
     * Get result value
     * @return \Webservices\ArrayType\InternationalV2Array|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \Webservices\ArrayType\InternationalV2Array $result
     * @return \Webservices\StructType\InternationalAddressSearchV2Result
     */
    public function setResult(\Webservices\ArrayType\InternationalV2Array $result = null)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * Get country_iso3 value
     * @return string|null
     */
    public function getCountry_iso3()
    {
        return $this->country_iso3;
    }
    /**
     * Set country_iso3 value
     * @param string $country_iso3
     * @return \Webservices\StructType\InternationalAddressSearchV2Result
     */
    public function setCountry_iso3($country_iso3 = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso3) && !is_string($country_iso3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso3)), __LINE__);
        }
        $this->country_iso3 = $country_iso3;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InternationalAddressSearchV2Result
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
