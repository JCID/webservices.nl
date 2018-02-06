<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeBankruptcyEvent StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeBankruptcyEvent extends AbstractStructBase
{
    /**
     * The bankruptcy_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bankruptcy_type;
    /**
     * The company_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_name;
    /**
     * The street_of_registered_office
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street_of_registered_office;
    /**
     * The city_of_registered_office
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city_of_registered_office;
    /**
     * The postcode_of_registered_office
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode_of_registered_office;
    /**
     * The nace_bel_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nace_bel_code;
    /**
     * The nace_bel_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nace_bel_description;
    /**
     * The commercial_court
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $commercial_court;
    /**
     * The source_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $source_date;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $source;
    /**
     * The date_of_decreee_of_bankruptcy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_decreee_of_bankruptcy;
    /**
     * The closing_date_of_summons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $closing_date_of_summons;
    /**
     * The name_of_trustee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name_of_trustee;
    /**
     * The street_of_trustee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street_of_trustee;
    /**
     * The city_of_trustee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city_of_trustee;
    /**
     * The postcode_of_trustee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode_of_trustee;
    /**
     * Constructor method for CreditsafeBeBankruptcyEvent
     * @uses CreditsafeBeBankruptcyEvent::setBankruptcy_type()
     * @uses CreditsafeBeBankruptcyEvent::setCompany_name()
     * @uses CreditsafeBeBankruptcyEvent::setStreet_of_registered_office()
     * @uses CreditsafeBeBankruptcyEvent::setCity_of_registered_office()
     * @uses CreditsafeBeBankruptcyEvent::setPostcode_of_registered_office()
     * @uses CreditsafeBeBankruptcyEvent::setNace_bel_code()
     * @uses CreditsafeBeBankruptcyEvent::setNace_bel_description()
     * @uses CreditsafeBeBankruptcyEvent::setCommercial_court()
     * @uses CreditsafeBeBankruptcyEvent::setSource_date()
     * @uses CreditsafeBeBankruptcyEvent::setSource()
     * @uses CreditsafeBeBankruptcyEvent::setDate_of_decreee_of_bankruptcy()
     * @uses CreditsafeBeBankruptcyEvent::setClosing_date_of_summons()
     * @uses CreditsafeBeBankruptcyEvent::setName_of_trustee()
     * @uses CreditsafeBeBankruptcyEvent::setStreet_of_trustee()
     * @uses CreditsafeBeBankruptcyEvent::setCity_of_trustee()
     * @uses CreditsafeBeBankruptcyEvent::setPostcode_of_trustee()
     * @param string $bankruptcy_type
     * @param string $company_name
     * @param string $street_of_registered_office
     * @param string $city_of_registered_office
     * @param string $postcode_of_registered_office
     * @param string $nace_bel_code
     * @param string $nace_bel_description
     * @param string $commercial_court
     * @param string $source_date
     * @param string $source
     * @param string $date_of_decreee_of_bankruptcy
     * @param string $closing_date_of_summons
     * @param string $name_of_trustee
     * @param string $street_of_trustee
     * @param string $city_of_trustee
     * @param string $postcode_of_trustee
     */
    public function __construct($bankruptcy_type = null, $company_name = null, $street_of_registered_office = null, $city_of_registered_office = null, $postcode_of_registered_office = null, $nace_bel_code = null, $nace_bel_description = null, $commercial_court = null, $source_date = null, $source = null, $date_of_decreee_of_bankruptcy = null, $closing_date_of_summons = null, $name_of_trustee = null, $street_of_trustee = null, $city_of_trustee = null, $postcode_of_trustee = null)
    {
        $this
            ->setBankruptcy_type($bankruptcy_type)
            ->setCompany_name($company_name)
            ->setStreet_of_registered_office($street_of_registered_office)
            ->setCity_of_registered_office($city_of_registered_office)
            ->setPostcode_of_registered_office($postcode_of_registered_office)
            ->setNace_bel_code($nace_bel_code)
            ->setNace_bel_description($nace_bel_description)
            ->setCommercial_court($commercial_court)
            ->setSource_date($source_date)
            ->setSource($source)
            ->setDate_of_decreee_of_bankruptcy($date_of_decreee_of_bankruptcy)
            ->setClosing_date_of_summons($closing_date_of_summons)
            ->setName_of_trustee($name_of_trustee)
            ->setStreet_of_trustee($street_of_trustee)
            ->setCity_of_trustee($city_of_trustee)
            ->setPostcode_of_trustee($postcode_of_trustee);
    }
    /**
     * Get bankruptcy_type value
     * @return string|null
     */
    public function getBankruptcy_type()
    {
        return $this->bankruptcy_type;
    }
    /**
     * Set bankruptcy_type value
     * @param string $bankruptcy_type
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setBankruptcy_type($bankruptcy_type = null)
    {
        // validation for constraint: string
        if (!is_null($bankruptcy_type) && !is_string($bankruptcy_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankruptcy_type)), __LINE__);
        }
        $this->bankruptcy_type = $bankruptcy_type;
        return $this;
    }
    /**
     * Get company_name value
     * @return string|null
     */
    public function getCompany_name()
    {
        return $this->company_name;
    }
    /**
     * Set company_name value
     * @param string $company_name
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setCompany_name($company_name = null)
    {
        // validation for constraint: string
        if (!is_null($company_name) && !is_string($company_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_name)), __LINE__);
        }
        $this->company_name = $company_name;
        return $this;
    }
    /**
     * Get street_of_registered_office value
     * @return string|null
     */
    public function getStreet_of_registered_office()
    {
        return $this->street_of_registered_office;
    }
    /**
     * Set street_of_registered_office value
     * @param string $street_of_registered_office
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setStreet_of_registered_office($street_of_registered_office = null)
    {
        // validation for constraint: string
        if (!is_null($street_of_registered_office) && !is_string($street_of_registered_office)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street_of_registered_office)), __LINE__);
        }
        $this->street_of_registered_office = $street_of_registered_office;
        return $this;
    }
    /**
     * Get city_of_registered_office value
     * @return string|null
     */
    public function getCity_of_registered_office()
    {
        return $this->city_of_registered_office;
    }
    /**
     * Set city_of_registered_office value
     * @param string $city_of_registered_office
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setCity_of_registered_office($city_of_registered_office = null)
    {
        // validation for constraint: string
        if (!is_null($city_of_registered_office) && !is_string($city_of_registered_office)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city_of_registered_office)), __LINE__);
        }
        $this->city_of_registered_office = $city_of_registered_office;
        return $this;
    }
    /**
     * Get postcode_of_registered_office value
     * @return string|null
     */
    public function getPostcode_of_registered_office()
    {
        return $this->postcode_of_registered_office;
    }
    /**
     * Set postcode_of_registered_office value
     * @param string $postcode_of_registered_office
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setPostcode_of_registered_office($postcode_of_registered_office = null)
    {
        // validation for constraint: string
        if (!is_null($postcode_of_registered_office) && !is_string($postcode_of_registered_office)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode_of_registered_office)), __LINE__);
        }
        $this->postcode_of_registered_office = $postcode_of_registered_office;
        return $this;
    }
    /**
     * Get nace_bel_code value
     * @return string|null
     */
    public function getNace_bel_code()
    {
        return $this->nace_bel_code;
    }
    /**
     * Set nace_bel_code value
     * @param string $nace_bel_code
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setNace_bel_code($nace_bel_code = null)
    {
        // validation for constraint: string
        if (!is_null($nace_bel_code) && !is_string($nace_bel_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nace_bel_code)), __LINE__);
        }
        $this->nace_bel_code = $nace_bel_code;
        return $this;
    }
    /**
     * Get nace_bel_description value
     * @return string|null
     */
    public function getNace_bel_description()
    {
        return $this->nace_bel_description;
    }
    /**
     * Set nace_bel_description value
     * @param string $nace_bel_description
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setNace_bel_description($nace_bel_description = null)
    {
        // validation for constraint: string
        if (!is_null($nace_bel_description) && !is_string($nace_bel_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nace_bel_description)), __LINE__);
        }
        $this->nace_bel_description = $nace_bel_description;
        return $this;
    }
    /**
     * Get commercial_court value
     * @return string|null
     */
    public function getCommercial_court()
    {
        return $this->commercial_court;
    }
    /**
     * Set commercial_court value
     * @param string $commercial_court
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setCommercial_court($commercial_court = null)
    {
        // validation for constraint: string
        if (!is_null($commercial_court) && !is_string($commercial_court)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commercial_court)), __LINE__);
        }
        $this->commercial_court = $commercial_court;
        return $this;
    }
    /**
     * Get source_date value
     * @return string|null
     */
    public function getSource_date()
    {
        return $this->source_date;
    }
    /**
     * Set source_date value
     * @param string $source_date
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setSource_date($source_date = null)
    {
        // validation for constraint: string
        if (!is_null($source_date) && !is_string($source_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source_date)), __LINE__);
        }
        $this->source_date = $source_date;
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Get date_of_decreee_of_bankruptcy value
     * @return string|null
     */
    public function getDate_of_decreee_of_bankruptcy()
    {
        return $this->date_of_decreee_of_bankruptcy;
    }
    /**
     * Set date_of_decreee_of_bankruptcy value
     * @param string $date_of_decreee_of_bankruptcy
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setDate_of_decreee_of_bankruptcy($date_of_decreee_of_bankruptcy = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_decreee_of_bankruptcy) && !is_string($date_of_decreee_of_bankruptcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_decreee_of_bankruptcy)), __LINE__);
        }
        $this->date_of_decreee_of_bankruptcy = $date_of_decreee_of_bankruptcy;
        return $this;
    }
    /**
     * Get closing_date_of_summons value
     * @return string|null
     */
    public function getClosing_date_of_summons()
    {
        return $this->closing_date_of_summons;
    }
    /**
     * Set closing_date_of_summons value
     * @param string $closing_date_of_summons
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setClosing_date_of_summons($closing_date_of_summons = null)
    {
        // validation for constraint: string
        if (!is_null($closing_date_of_summons) && !is_string($closing_date_of_summons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closing_date_of_summons)), __LINE__);
        }
        $this->closing_date_of_summons = $closing_date_of_summons;
        return $this;
    }
    /**
     * Get name_of_trustee value
     * @return string|null
     */
    public function getName_of_trustee()
    {
        return $this->name_of_trustee;
    }
    /**
     * Set name_of_trustee value
     * @param string $name_of_trustee
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setName_of_trustee($name_of_trustee = null)
    {
        // validation for constraint: string
        if (!is_null($name_of_trustee) && !is_string($name_of_trustee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name_of_trustee)), __LINE__);
        }
        $this->name_of_trustee = $name_of_trustee;
        return $this;
    }
    /**
     * Get street_of_trustee value
     * @return string|null
     */
    public function getStreet_of_trustee()
    {
        return $this->street_of_trustee;
    }
    /**
     * Set street_of_trustee value
     * @param string $street_of_trustee
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setStreet_of_trustee($street_of_trustee = null)
    {
        // validation for constraint: string
        if (!is_null($street_of_trustee) && !is_string($street_of_trustee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street_of_trustee)), __LINE__);
        }
        $this->street_of_trustee = $street_of_trustee;
        return $this;
    }
    /**
     * Get city_of_trustee value
     * @return string|null
     */
    public function getCity_of_trustee()
    {
        return $this->city_of_trustee;
    }
    /**
     * Set city_of_trustee value
     * @param string $city_of_trustee
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setCity_of_trustee($city_of_trustee = null)
    {
        // validation for constraint: string
        if (!is_null($city_of_trustee) && !is_string($city_of_trustee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city_of_trustee)), __LINE__);
        }
        $this->city_of_trustee = $city_of_trustee;
        return $this;
    }
    /**
     * Get postcode_of_trustee value
     * @return string|null
     */
    public function getPostcode_of_trustee()
    {
        return $this->postcode_of_trustee;
    }
    /**
     * Set postcode_of_trustee value
     * @param string $postcode_of_trustee
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
     */
    public function setPostcode_of_trustee($postcode_of_trustee = null)
    {
        // validation for constraint: string
        if (!is_null($postcode_of_trustee) && !is_string($postcode_of_trustee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode_of_trustee)), __LINE__);
        }
        $this->postcode_of_trustee = $postcode_of_trustee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeBankruptcyEvent
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
