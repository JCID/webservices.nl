<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBMarketing StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBMarketing extends AbstractStructBase
{
    /**
     * The duns
     * @var string
     */
    public $duns;
    /**
     * The business_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_number;
    /**
     * The business_number_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $business_number_type;
    /**
     * The primary_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $primary_name;
    /**
     * The trade_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trade_name;
    /**
     * The former_duns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $former_duns;
    /**
     * The former_primary_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $former_primary_name;
    /**
     * The establishment_address
     * @var \Webservices\StructType\DNBAddress
     */
    public $establishment_address;
    /**
     * The country_calling_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country_calling_code;
    /**
     * The phone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phone_number;
    /**
     * The fax_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fax_number;
    /**
     * The marketability_indication
     * @var bool
     */
    public $marketability_indication;
    /**
     * Constructor method for DNBMarketing
     * @uses DNBMarketing::setDuns()
     * @uses DNBMarketing::setBusiness_number()
     * @uses DNBMarketing::setBusiness_number_type()
     * @uses DNBMarketing::setPrimary_name()
     * @uses DNBMarketing::setTrade_name()
     * @uses DNBMarketing::setFormer_duns()
     * @uses DNBMarketing::setFormer_primary_name()
     * @uses DNBMarketing::setEstablishment_address()
     * @uses DNBMarketing::setCountry_calling_code()
     * @uses DNBMarketing::setPhone_number()
     * @uses DNBMarketing::setFax_number()
     * @uses DNBMarketing::setMarketability_indication()
     * @param string $duns
     * @param string $business_number
     * @param int $business_number_type
     * @param string $primary_name
     * @param string $trade_name
     * @param string $former_duns
     * @param string $former_primary_name
     * @param \Webservices\StructType\DNBAddress $establishment_address
     * @param string $country_calling_code
     * @param string $phone_number
     * @param string $fax_number
     * @param bool $marketability_indication
     */
    public function __construct($duns = null, $business_number = null, $business_number_type = null, $primary_name = null, $trade_name = null, $former_duns = null, $former_primary_name = null, \Webservices\StructType\DNBAddress $establishment_address = null, $country_calling_code = null, $phone_number = null, $fax_number = null, $marketability_indication = null)
    {
        $this
            ->setDuns($duns)
            ->setBusiness_number($business_number)
            ->setBusiness_number_type($business_number_type)
            ->setPrimary_name($primary_name)
            ->setTrade_name($trade_name)
            ->setFormer_duns($former_duns)
            ->setFormer_primary_name($former_primary_name)
            ->setEstablishment_address($establishment_address)
            ->setCountry_calling_code($country_calling_code)
            ->setPhone_number($phone_number)
            ->setFax_number($fax_number)
            ->setMarketability_indication($marketability_indication);
    }
    /**
     * Get duns value
     * @return string|null
     */
    public function getDuns()
    {
        return $this->duns;
    }
    /**
     * Set duns value
     * @param string $duns
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setDuns($duns = null)
    {
        // validation for constraint: string
        if (!is_null($duns) && !is_string($duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duns)), __LINE__);
        }
        $this->duns = $duns;
        return $this;
    }
    /**
     * Get business_number value
     * @return string|null
     */
    public function getBusiness_number()
    {
        return $this->business_number;
    }
    /**
     * Set business_number value
     * @param string $business_number
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setBusiness_number($business_number = null)
    {
        // validation for constraint: string
        if (!is_null($business_number) && !is_string($business_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number)), __LINE__);
        }
        $this->business_number = $business_number;
        return $this;
    }
    /**
     * Get business_number_type value
     * @return int|null
     */
    public function getBusiness_number_type()
    {
        return $this->business_number_type;
    }
    /**
     * Set business_number_type value
     * @param int $business_number_type
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setBusiness_number_type($business_number_type = null)
    {
        // validation for constraint: int
        if (!is_null($business_number_type) && !is_numeric($business_number_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($business_number_type)), __LINE__);
        }
        $this->business_number_type = $business_number_type;
        return $this;
    }
    /**
     * Get primary_name value
     * @return string|null
     */
    public function getPrimary_name()
    {
        return $this->primary_name;
    }
    /**
     * Set primary_name value
     * @param string $primary_name
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setPrimary_name($primary_name = null)
    {
        // validation for constraint: string
        if (!is_null($primary_name) && !is_string($primary_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primary_name)), __LINE__);
        }
        $this->primary_name = $primary_name;
        return $this;
    }
    /**
     * Get trade_name value
     * @return string|null
     */
    public function getTrade_name()
    {
        return $this->trade_name;
    }
    /**
     * Set trade_name value
     * @param string $trade_name
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setTrade_name($trade_name = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name) && !is_string($trade_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name)), __LINE__);
        }
        $this->trade_name = $trade_name;
        return $this;
    }
    /**
     * Get former_duns value
     * @return string|null
     */
    public function getFormer_duns()
    {
        return $this->former_duns;
    }
    /**
     * Set former_duns value
     * @param string $former_duns
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setFormer_duns($former_duns = null)
    {
        // validation for constraint: string
        if (!is_null($former_duns) && !is_string($former_duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($former_duns)), __LINE__);
        }
        $this->former_duns = $former_duns;
        return $this;
    }
    /**
     * Get former_primary_name value
     * @return string|null
     */
    public function getFormer_primary_name()
    {
        return $this->former_primary_name;
    }
    /**
     * Set former_primary_name value
     * @param string $former_primary_name
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setFormer_primary_name($former_primary_name = null)
    {
        // validation for constraint: string
        if (!is_null($former_primary_name) && !is_string($former_primary_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($former_primary_name)), __LINE__);
        }
        $this->former_primary_name = $former_primary_name;
        return $this;
    }
    /**
     * Get establishment_address value
     * @return \Webservices\StructType\DNBAddress|null
     */
    public function getEstablishment_address()
    {
        return $this->establishment_address;
    }
    /**
     * Set establishment_address value
     * @param \Webservices\StructType\DNBAddress $establishment_address
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setEstablishment_address(\Webservices\StructType\DNBAddress $establishment_address = null)
    {
        $this->establishment_address = $establishment_address;
        return $this;
    }
    /**
     * Get country_calling_code value
     * @return string|null
     */
    public function getCountry_calling_code()
    {
        return $this->country_calling_code;
    }
    /**
     * Set country_calling_code value
     * @param string $country_calling_code
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setCountry_calling_code($country_calling_code = null)
    {
        // validation for constraint: string
        if (!is_null($country_calling_code) && !is_string($country_calling_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_calling_code)), __LINE__);
        }
        $this->country_calling_code = $country_calling_code;
        return $this;
    }
    /**
     * Get phone_number value
     * @return string|null
     */
    public function getPhone_number()
    {
        return $this->phone_number;
    }
    /**
     * Set phone_number value
     * @param string $phone_number
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setPhone_number($phone_number = null)
    {
        // validation for constraint: string
        if (!is_null($phone_number) && !is_string($phone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone_number)), __LINE__);
        }
        $this->phone_number = $phone_number;
        return $this;
    }
    /**
     * Get fax_number value
     * @return string|null
     */
    public function getFax_number()
    {
        return $this->fax_number;
    }
    /**
     * Set fax_number value
     * @param string $fax_number
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setFax_number($fax_number = null)
    {
        // validation for constraint: string
        if (!is_null($fax_number) && !is_string($fax_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax_number)), __LINE__);
        }
        $this->fax_number = $fax_number;
        return $this;
    }
    /**
     * Get marketability_indication value
     * @return bool|null
     */
    public function getMarketability_indication()
    {
        return $this->marketability_indication;
    }
    /**
     * Set marketability_indication value
     * @param bool $marketability_indication
     * @return \Webservices\StructType\DNBMarketing
     */
    public function setMarketability_indication($marketability_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($marketability_indication) && !is_bool($marketability_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($marketability_indication)), __LINE__);
        }
        $this->marketability_indication = $marketability_indication;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBMarketing
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
