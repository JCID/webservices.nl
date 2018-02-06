<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graydonCreditSearchIdentificationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditSearchIdentificationRequestType extends AbstractStructBase
{
    /**
     * The company_id
     * @var string
     */
    public $company_id;
    /**
     * The company_id_type
     * @var string
     */
    public $company_id_type;
    /**
     * The country_iso2
     * @var string
     */
    public $country_iso2;
    /**
     * Constructor method for graydonCreditSearchIdentificationRequestType
     * @uses GraydonCreditSearchIdentificationRequestType::setCompany_id()
     * @uses GraydonCreditSearchIdentificationRequestType::setCompany_id_type()
     * @uses GraydonCreditSearchIdentificationRequestType::setCountry_iso2()
     * @param string $company_id
     * @param string $company_id_type
     * @param string $country_iso2
     */
    public function __construct($company_id = null, $company_id_type = null, $country_iso2 = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setCompany_id_type($company_id_type)
            ->setCountry_iso2($country_iso2);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->company_id;
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \Webservices\StructType\GraydonCreditSearchIdentificationRequestType
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $company_id;
        return $this;
    }
    /**
     * Get company_id_type value
     * @return string|null
     */
    public function getCompany_id_type()
    {
        return $this->company_id_type;
    }
    /**
     * Set company_id_type value
     * @param string $company_id_type
     * @return \Webservices\StructType\GraydonCreditSearchIdentificationRequestType
     */
    public function setCompany_id_type($company_id_type = null)
    {
        // validation for constraint: string
        if (!is_null($company_id_type) && !is_string($company_id_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id_type)), __LINE__);
        }
        $this->company_id_type = $company_id_type;
        return $this;
    }
    /**
     * Get country_iso2 value
     * @return string|null
     */
    public function getCountry_iso2()
    {
        return $this->country_iso2;
    }
    /**
     * Set country_iso2 value
     * @param string $country_iso2
     * @return \Webservices\StructType\GraydonCreditSearchIdentificationRequestType
     */
    public function setCountry_iso2($country_iso2 = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso2) && !is_string($country_iso2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso2)), __LINE__);
        }
        $this->country_iso2 = $country_iso2;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditSearchIdentificationRequestType
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
