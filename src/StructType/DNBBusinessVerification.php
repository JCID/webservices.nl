<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBBusinessVerification StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBBusinessVerification extends AbstractStructBase
{
    /**
     * The duns
     * @var string
     */
    public $duns;
    /**
     * The dnb_key
     * @var string
     */
    public $dnb_key;
    /**
     * The enquiry_duns
     * @var string
     */
    public $enquiry_duns;
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
     * @var string
     */
    public $business_number_type;
    /**
     * The business_number_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_number_description;
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The address
     * @var \Webservices\ArrayType\StringArray
     */
    public $address;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $region;
    /**
     * The subregion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $subregion;
    /**
     * The country_calling_code
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
     * The country
     * @var string
     */
    public $country;
    /**
     * The main_branch_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $main_branch_indication;
    /**
     * The out_of_business
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $out_of_business;
    /**
     * The incorporation_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $incorporation_year;
    /**
     * The start_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $start_year;
    /**
     * The sic_activity_code
     * @var string
     */
    public $sic_activity_code;
    /**
     * The sic_activity_description
     * @var string
     */
    public $sic_activity_description;
    /**
     * The sic_version
     * @var string
     */
    public $sic_version;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * Constructor method for DNBBusinessVerification
     * @uses DNBBusinessVerification::setDuns()
     * @uses DNBBusinessVerification::setDnb_key()
     * @uses DNBBusinessVerification::setEnquiry_duns()
     * @uses DNBBusinessVerification::setBusiness_number()
     * @uses DNBBusinessVerification::setBusiness_number_type()
     * @uses DNBBusinessVerification::setBusiness_number_description()
     * @uses DNBBusinessVerification::setTrade_name()
     * @uses DNBBusinessVerification::setAddress()
     * @uses DNBBusinessVerification::setPostcode()
     * @uses DNBBusinessVerification::setCity()
     * @uses DNBBusinessVerification::setRegion()
     * @uses DNBBusinessVerification::setSubregion()
     * @uses DNBBusinessVerification::setCountry_calling_code()
     * @uses DNBBusinessVerification::setPhone_number()
     * @uses DNBBusinessVerification::setFax_number()
     * @uses DNBBusinessVerification::setCountry()
     * @uses DNBBusinessVerification::setMain_branch_indication()
     * @uses DNBBusinessVerification::setOut_of_business()
     * @uses DNBBusinessVerification::setIncorporation_year()
     * @uses DNBBusinessVerification::setStart_year()
     * @uses DNBBusinessVerification::setSic_activity_code()
     * @uses DNBBusinessVerification::setSic_activity_description()
     * @uses DNBBusinessVerification::setSic_version()
     * @uses DNBBusinessVerification::setTrade_names()
     * @param string $duns
     * @param string $dnb_key
     * @param string $enquiry_duns
     * @param string $business_number
     * @param string $business_number_type
     * @param string $business_number_description
     * @param string $trade_name
     * @param \Webservices\ArrayType\StringArray $address
     * @param string $postcode
     * @param string $city
     * @param string $region
     * @param string $subregion
     * @param string $country_calling_code
     * @param string $phone_number
     * @param string $fax_number
     * @param string $country
     * @param bool $main_branch_indication
     * @param bool $out_of_business
     * @param int $incorporation_year
     * @param int $start_year
     * @param string $sic_activity_code
     * @param string $sic_activity_description
     * @param string $sic_version
     * @param \Webservices\ArrayType\StringArray $trade_names
     */
    public function __construct($duns = null, $dnb_key = null, $enquiry_duns = null, $business_number = null, $business_number_type = null, $business_number_description = null, $trade_name = null, \Webservices\ArrayType\StringArray $address = null, $postcode = null, $city = null, $region = null, $subregion = null, $country_calling_code = null, $phone_number = null, $fax_number = null, $country = null, $main_branch_indication = null, $out_of_business = null, $incorporation_year = null, $start_year = null, $sic_activity_code = null, $sic_activity_description = null, $sic_version = null, \Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this
            ->setDuns($duns)
            ->setDnb_key($dnb_key)
            ->setEnquiry_duns($enquiry_duns)
            ->setBusiness_number($business_number)
            ->setBusiness_number_type($business_number_type)
            ->setBusiness_number_description($business_number_description)
            ->setTrade_name($trade_name)
            ->setAddress($address)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setRegion($region)
            ->setSubregion($subregion)
            ->setCountry_calling_code($country_calling_code)
            ->setPhone_number($phone_number)
            ->setFax_number($fax_number)
            ->setCountry($country)
            ->setMain_branch_indication($main_branch_indication)
            ->setOut_of_business($out_of_business)
            ->setIncorporation_year($incorporation_year)
            ->setStart_year($start_year)
            ->setSic_activity_code($sic_activity_code)
            ->setSic_activity_description($sic_activity_description)
            ->setSic_version($sic_version)
            ->setTrade_names($trade_names);
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
     * @return \Webservices\StructType\DNBBusinessVerification
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
     * Get dnb_key value
     * @return string|null
     */
    public function getDnb_key()
    {
        return $this->dnb_key;
    }
    /**
     * Set dnb_key value
     * @param string $dnb_key
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setDnb_key($dnb_key = null)
    {
        // validation for constraint: string
        if (!is_null($dnb_key) && !is_string($dnb_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dnb_key)), __LINE__);
        }
        $this->dnb_key = $dnb_key;
        return $this;
    }
    /**
     * Get enquiry_duns value
     * @return string|null
     */
    public function getEnquiry_duns()
    {
        return $this->enquiry_duns;
    }
    /**
     * Set enquiry_duns value
     * @param string $enquiry_duns
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setEnquiry_duns($enquiry_duns = null)
    {
        // validation for constraint: string
        if (!is_null($enquiry_duns) && !is_string($enquiry_duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enquiry_duns)), __LINE__);
        }
        $this->enquiry_duns = $enquiry_duns;
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
     * @return \Webservices\StructType\DNBBusinessVerification
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
     * @return string|null
     */
    public function getBusiness_number_type()
    {
        return $this->business_number_type;
    }
    /**
     * Set business_number_type value
     * @param string $business_number_type
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setBusiness_number_type($business_number_type = null)
    {
        // validation for constraint: string
        if (!is_null($business_number_type) && !is_string($business_number_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number_type)), __LINE__);
        }
        $this->business_number_type = $business_number_type;
        return $this;
    }
    /**
     * Get business_number_description value
     * @return string|null
     */
    public function getBusiness_number_description()
    {
        return $this->business_number_description;
    }
    /**
     * Set business_number_description value
     * @param string $business_number_description
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setBusiness_number_description($business_number_description = null)
    {
        // validation for constraint: string
        if (!is_null($business_number_description) && !is_string($business_number_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number_description)), __LINE__);
        }
        $this->business_number_description = $business_number_description;
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
     * @return \Webservices\StructType\DNBBusinessVerification
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
     * Get address value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\ArrayType\StringArray $address
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setAddress(\Webservices\ArrayType\StringArray $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $region
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->region = $region;
        return $this;
    }
    /**
     * Get subregion value
     * @return string|null
     */
    public function getSubregion()
    {
        return $this->subregion;
    }
    /**
     * Set subregion value
     * @param string $subregion
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setSubregion($subregion = null)
    {
        // validation for constraint: string
        if (!is_null($subregion) && !is_string($subregion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subregion)), __LINE__);
        }
        $this->subregion = $subregion;
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
     * @return \Webservices\StructType\DNBBusinessVerification
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
     * @return \Webservices\StructType\DNBBusinessVerification
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
     * @return \Webservices\StructType\DNBBusinessVerification
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
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get main_branch_indication value
     * @return bool|null
     */
    public function getMain_branch_indication()
    {
        return $this->main_branch_indication;
    }
    /**
     * Set main_branch_indication value
     * @param bool $main_branch_indication
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setMain_branch_indication($main_branch_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($main_branch_indication) && !is_bool($main_branch_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($main_branch_indication)), __LINE__);
        }
        $this->main_branch_indication = $main_branch_indication;
        return $this;
    }
    /**
     * Get out_of_business value
     * @return bool|null
     */
    public function getOut_of_business()
    {
        return $this->out_of_business;
    }
    /**
     * Set out_of_business value
     * @param bool $out_of_business
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setOut_of_business($out_of_business = null)
    {
        // validation for constraint: boolean
        if (!is_null($out_of_business) && !is_bool($out_of_business)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($out_of_business)), __LINE__);
        }
        $this->out_of_business = $out_of_business;
        return $this;
    }
    /**
     * Get incorporation_year value
     * @return int|null
     */
    public function getIncorporation_year()
    {
        return $this->incorporation_year;
    }
    /**
     * Set incorporation_year value
     * @param int $incorporation_year
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setIncorporation_year($incorporation_year = null)
    {
        // validation for constraint: int
        if (!is_null($incorporation_year) && !is_numeric($incorporation_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($incorporation_year)), __LINE__);
        }
        $this->incorporation_year = $incorporation_year;
        return $this;
    }
    /**
     * Get start_year value
     * @return int|null
     */
    public function getStart_year()
    {
        return $this->start_year;
    }
    /**
     * Set start_year value
     * @param int $start_year
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setStart_year($start_year = null)
    {
        // validation for constraint: int
        if (!is_null($start_year) && !is_numeric($start_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($start_year)), __LINE__);
        }
        $this->start_year = $start_year;
        return $this;
    }
    /**
     * Get sic_activity_code value
     * @return string|null
     */
    public function getSic_activity_code()
    {
        return $this->sic_activity_code;
    }
    /**
     * Set sic_activity_code value
     * @param string $sic_activity_code
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setSic_activity_code($sic_activity_code = null)
    {
        // validation for constraint: string
        if (!is_null($sic_activity_code) && !is_string($sic_activity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sic_activity_code)), __LINE__);
        }
        $this->sic_activity_code = $sic_activity_code;
        return $this;
    }
    /**
     * Get sic_activity_description value
     * @return string|null
     */
    public function getSic_activity_description()
    {
        return $this->sic_activity_description;
    }
    /**
     * Set sic_activity_description value
     * @param string $sic_activity_description
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setSic_activity_description($sic_activity_description = null)
    {
        // validation for constraint: string
        if (!is_null($sic_activity_description) && !is_string($sic_activity_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sic_activity_description)), __LINE__);
        }
        $this->sic_activity_description = $sic_activity_description;
        return $this;
    }
    /**
     * Get sic_version value
     * @return string|null
     */
    public function getSic_version()
    {
        return $this->sic_version;
    }
    /**
     * Set sic_version value
     * @param string $sic_version
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setSic_version($sic_version = null)
    {
        // validation for constraint: string
        if (!is_null($sic_version) && !is_string($sic_version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sic_version)), __LINE__);
        }
        $this->sic_version = $sic_version;
        return $this;
    }
    /**
     * Get trade_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTrade_names()
    {
        return $this->trade_names;
    }
    /**
     * Set trade_names value
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @return \Webservices\StructType\DNBBusinessVerification
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBBusinessVerification
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
