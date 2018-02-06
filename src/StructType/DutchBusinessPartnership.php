<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPartnership StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPartnership extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
    /**
     * The rsin_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rsin_number;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registration;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * The founding_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $founding_date;
    /**
     * The dissolution_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $dissolution_date;
    /**
     * The function_start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $function_start_date;
    /**
     * The duration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $duration;
    /**
     * The limited_partnership_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $limited_partnership_capital;
    /**
     * The limited_partnership_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $limited_partnership_capital_currency;
    /**
     * The establishment_postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_postcode;
    /**
     * The establishment_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_city;
    /**
     * The establishment_street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_street;
    /**
     * The establishment_house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $establishment_house_number;
    /**
     * The establishment_house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_house_number_addition;
    /**
     * The establishment_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_country;
    /**
     * The silent_partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $silent_partners;
    /**
     * Constructor method for DutchBusinessPartnership
     * @uses DutchBusinessPartnership::setDossier_number()
     * @uses DutchBusinessPartnership::setRsin_number()
     * @uses DutchBusinessPartnership::setName()
     * @uses DutchBusinessPartnership::setRegistration()
     * @uses DutchBusinessPartnership::setStatus()
     * @uses DutchBusinessPartnership::setLegal_form_text()
     * @uses DutchBusinessPartnership::setFounding_date()
     * @uses DutchBusinessPartnership::setDissolution_date()
     * @uses DutchBusinessPartnership::setFunction_start_date()
     * @uses DutchBusinessPartnership::setDuration()
     * @uses DutchBusinessPartnership::setLimited_partnership_capital()
     * @uses DutchBusinessPartnership::setLimited_partnership_capital_currency()
     * @uses DutchBusinessPartnership::setEstablishment_postcode()
     * @uses DutchBusinessPartnership::setEstablishment_city()
     * @uses DutchBusinessPartnership::setEstablishment_street()
     * @uses DutchBusinessPartnership::setEstablishment_house_number()
     * @uses DutchBusinessPartnership::setEstablishment_house_number_addition()
     * @uses DutchBusinessPartnership::setEstablishment_country()
     * @uses DutchBusinessPartnership::setSilent_partners()
     * @param string $dossier_number
     * @param string $rsin_number
     * @param string $name
     * @param string $registration
     * @param string $status
     * @param string $legal_form_text
     * @param \Webservices\StructType\DutchBusinessDate $founding_date
     * @param \Webservices\StructType\DutchBusinessDate $dissolution_date
     * @param \Webservices\StructType\DutchBusinessDate $function_start_date
     * @param string $duration
     * @param int $limited_partnership_capital
     * @param string $limited_partnership_capital_currency
     * @param string $establishment_postcode
     * @param string $establishment_city
     * @param string $establishment_street
     * @param int $establishment_house_number
     * @param string $establishment_house_number_addition
     * @param string $establishment_country
     * @param int $silent_partners
     */
    public function __construct($dossier_number = null, $rsin_number = null, $name = null, $registration = null, $status = null, $legal_form_text = null, \Webservices\StructType\DutchBusinessDate $founding_date = null, \Webservices\StructType\DutchBusinessDate $dissolution_date = null, \Webservices\StructType\DutchBusinessDate $function_start_date = null, $duration = null, $limited_partnership_capital = null, $limited_partnership_capital_currency = null, $establishment_postcode = null, $establishment_city = null, $establishment_street = null, $establishment_house_number = null, $establishment_house_number_addition = null, $establishment_country = null, $silent_partners = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setRsin_number($rsin_number)
            ->setName($name)
            ->setRegistration($registration)
            ->setStatus($status)
            ->setLegal_form_text($legal_form_text)
            ->setFounding_date($founding_date)
            ->setDissolution_date($dissolution_date)
            ->setFunction_start_date($function_start_date)
            ->setDuration($duration)
            ->setLimited_partnership_capital($limited_partnership_capital)
            ->setLimited_partnership_capital_currency($limited_partnership_capital_currency)
            ->setEstablishment_postcode($establishment_postcode)
            ->setEstablishment_city($establishment_city)
            ->setEstablishment_street($establishment_street)
            ->setEstablishment_house_number($establishment_house_number)
            ->setEstablishment_house_number_addition($establishment_house_number_addition)
            ->setEstablishment_country($establishment_country)
            ->setSilent_partners($silent_partners);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get rsin_number value
     * @return string|null
     */
    public function getRsin_number()
    {
        return $this->rsin_number;
    }
    /**
     * Set rsin_number value
     * @param string $rsin_number
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setRsin_number($rsin_number = null)
    {
        // validation for constraint: string
        if (!is_null($rsin_number) && !is_string($rsin_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rsin_number)), __LINE__);
        }
        $this->rsin_number = $rsin_number;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get registration value
     * @return string|null
     */
    public function getRegistration()
    {
        return $this->registration;
    }
    /**
     * Set registration value
     * @param string $registration
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setRegistration($registration = null)
    {
        // validation for constraint: string
        if (!is_null($registration) && !is_string($registration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration)), __LINE__);
        }
        $this->registration = $registration;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get legal_form_text value
     * @return string|null
     */
    public function getLegal_form_text()
    {
        return $this->legal_form_text;
    }
    /**
     * Set legal_form_text value
     * @param string $legal_form_text
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setLegal_form_text($legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_text) && !is_string($legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_text)), __LINE__);
        }
        $this->legal_form_text = $legal_form_text;
        return $this;
    }
    /**
     * Get founding_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFounding_date()
    {
        return $this->founding_date;
    }
    /**
     * Set founding_date value
     * @param \Webservices\StructType\DutchBusinessDate $founding_date
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setFounding_date(\Webservices\StructType\DutchBusinessDate $founding_date = null)
    {
        $this->founding_date = $founding_date;
        return $this;
    }
    /**
     * Get dissolution_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDissolution_date()
    {
        return $this->dissolution_date;
    }
    /**
     * Set dissolution_date value
     * @param \Webservices\StructType\DutchBusinessDate $dissolution_date
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setDissolution_date(\Webservices\StructType\DutchBusinessDate $dissolution_date = null)
    {
        $this->dissolution_date = $dissolution_date;
        return $this;
    }
    /**
     * Get function_start_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFunction_start_date()
    {
        return $this->function_start_date;
    }
    /**
     * Set function_start_date value
     * @param \Webservices\StructType\DutchBusinessDate $function_start_date
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setFunction_start_date(\Webservices\StructType\DutchBusinessDate $function_start_date = null)
    {
        $this->function_start_date = $function_start_date;
        return $this;
    }
    /**
     * Get duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param string $duration
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        return $this;
    }
    /**
     * Get limited_partnership_capital value
     * @return int|null
     */
    public function getLimited_partnership_capital()
    {
        return $this->limited_partnership_capital;
    }
    /**
     * Set limited_partnership_capital value
     * @param int $limited_partnership_capital
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setLimited_partnership_capital($limited_partnership_capital = null)
    {
        // validation for constraint: int
        if (!is_null($limited_partnership_capital) && !is_numeric($limited_partnership_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($limited_partnership_capital)), __LINE__);
        }
        $this->limited_partnership_capital = $limited_partnership_capital;
        return $this;
    }
    /**
     * Get limited_partnership_capital_currency value
     * @return string|null
     */
    public function getLimited_partnership_capital_currency()
    {
        return $this->limited_partnership_capital_currency;
    }
    /**
     * Set limited_partnership_capital_currency value
     * @param string $limited_partnership_capital_currency
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setLimited_partnership_capital_currency($limited_partnership_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($limited_partnership_capital_currency) && !is_string($limited_partnership_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($limited_partnership_capital_currency)), __LINE__);
        }
        $this->limited_partnership_capital_currency = $limited_partnership_capital_currency;
        return $this;
    }
    /**
     * Get establishment_postcode value
     * @return string|null
     */
    public function getEstablishment_postcode()
    {
        return $this->establishment_postcode;
    }
    /**
     * Set establishment_postcode value
     * @param string $establishment_postcode
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setEstablishment_postcode($establishment_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_postcode) && !is_string($establishment_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_postcode)), __LINE__);
        }
        $this->establishment_postcode = $establishment_postcode;
        return $this;
    }
    /**
     * Get establishment_city value
     * @return string|null
     */
    public function getEstablishment_city()
    {
        return $this->establishment_city;
    }
    /**
     * Set establishment_city value
     * @param string $establishment_city
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setEstablishment_city($establishment_city = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_city) && !is_string($establishment_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_city)), __LINE__);
        }
        $this->establishment_city = $establishment_city;
        return $this;
    }
    /**
     * Get establishment_street value
     * @return string|null
     */
    public function getEstablishment_street()
    {
        return $this->establishment_street;
    }
    /**
     * Set establishment_street value
     * @param string $establishment_street
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setEstablishment_street($establishment_street = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_street) && !is_string($establishment_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_street)), __LINE__);
        }
        $this->establishment_street = $establishment_street;
        return $this;
    }
    /**
     * Get establishment_house_number value
     * @return int|null
     */
    public function getEstablishment_house_number()
    {
        return $this->establishment_house_number;
    }
    /**
     * Set establishment_house_number value
     * @param int $establishment_house_number
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setEstablishment_house_number($establishment_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($establishment_house_number) && !is_numeric($establishment_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($establishment_house_number)), __LINE__);
        }
        $this->establishment_house_number = $establishment_house_number;
        return $this;
    }
    /**
     * Get establishment_house_number_addition value
     * @return string|null
     */
    public function getEstablishment_house_number_addition()
    {
        return $this->establishment_house_number_addition;
    }
    /**
     * Set establishment_house_number_addition value
     * @param string $establishment_house_number_addition
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setEstablishment_house_number_addition($establishment_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_house_number_addition) && !is_string($establishment_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_house_number_addition)), __LINE__);
        }
        $this->establishment_house_number_addition = $establishment_house_number_addition;
        return $this;
    }
    /**
     * Get establishment_country value
     * @return string|null
     */
    public function getEstablishment_country()
    {
        return $this->establishment_country;
    }
    /**
     * Set establishment_country value
     * @param string $establishment_country
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setEstablishment_country($establishment_country = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_country) && !is_string($establishment_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_country)), __LINE__);
        }
        $this->establishment_country = $establishment_country;
        return $this;
    }
    /**
     * Get silent_partners value
     * @return int|null
     */
    public function getSilent_partners()
    {
        return $this->silent_partners;
    }
    /**
     * Set silent_partners value
     * @param int $silent_partners
     * @return \Webservices\StructType\DutchBusinessPartnership
     */
    public function setSilent_partners($silent_partners = null)
    {
        // validation for constraint: int
        if (!is_null($silent_partners) && !is_numeric($silent_partners)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($silent_partners)), __LINE__);
        }
        $this->silent_partners = $silent_partners;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPartnership
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
