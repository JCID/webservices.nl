<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessEstablishment StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessEstablishment extends AbstractStructBase
{
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The main_establishment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $main_establishment;
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
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * The activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $activity;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The sbi_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $sbi_codes;
    /**
     * The sbi_codes_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $sbi_codes_text;
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
     * The correspondence_postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_postcode;
    /**
     * The correspondence_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_city;
    /**
     * The correspondence_street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_street;
    /**
     * The correspondence_house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $correspondence_house_number;
    /**
     * The correspondence_house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_house_number_addition;
    /**
     * The correspondence_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $correspondence_country;
    /**
     * The curator_postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $curator_postcode;
    /**
     * The curator_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $curator_city;
    /**
     * The curator_street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $curator_street;
    /**
     * The curator_house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $curator_house_number;
    /**
     * The curator_house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $curator_house_number_addition;
    /**
     * The curator_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $curator_country;
    /**
     * The telephone_numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $telephone_numbers;
    /**
     * The fax_numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $fax_numbers;
    /**
     * The email_addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $email_addresses;
    /**
     * The domain_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $domain_names;
    /**
     * The establishment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $establishment_date;
    /**
     * The date_since
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $date_since;
    /**
     * The personnel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $personnel;
    /**
     * Constructor method for DutchBusinessEstablishment
     * @uses DutchBusinessEstablishment::setEstablishment_number()
     * @uses DutchBusinessEstablishment::setMain_establishment()
     * @uses DutchBusinessEstablishment::setStatus()
     * @uses DutchBusinessEstablishment::setLegal_form_text()
     * @uses DutchBusinessEstablishment::setTrade_names()
     * @uses DutchBusinessEstablishment::setActivity()
     * @uses DutchBusinessEstablishment::setDescription()
     * @uses DutchBusinessEstablishment::setSbi_codes()
     * @uses DutchBusinessEstablishment::setSbi_codes_text()
     * @uses DutchBusinessEstablishment::setEstablishment_postcode()
     * @uses DutchBusinessEstablishment::setEstablishment_city()
     * @uses DutchBusinessEstablishment::setEstablishment_street()
     * @uses DutchBusinessEstablishment::setEstablishment_house_number()
     * @uses DutchBusinessEstablishment::setEstablishment_house_number_addition()
     * @uses DutchBusinessEstablishment::setEstablishment_country()
     * @uses DutchBusinessEstablishment::setCorrespondence_postcode()
     * @uses DutchBusinessEstablishment::setCorrespondence_city()
     * @uses DutchBusinessEstablishment::setCorrespondence_street()
     * @uses DutchBusinessEstablishment::setCorrespondence_house_number()
     * @uses DutchBusinessEstablishment::setCorrespondence_house_number_addition()
     * @uses DutchBusinessEstablishment::setCorrespondence_country()
     * @uses DutchBusinessEstablishment::setCurator_postcode()
     * @uses DutchBusinessEstablishment::setCurator_city()
     * @uses DutchBusinessEstablishment::setCurator_street()
     * @uses DutchBusinessEstablishment::setCurator_house_number()
     * @uses DutchBusinessEstablishment::setCurator_house_number_addition()
     * @uses DutchBusinessEstablishment::setCurator_country()
     * @uses DutchBusinessEstablishment::setTelephone_numbers()
     * @uses DutchBusinessEstablishment::setFax_numbers()
     * @uses DutchBusinessEstablishment::setEmail_addresses()
     * @uses DutchBusinessEstablishment::setDomain_names()
     * @uses DutchBusinessEstablishment::setEstablishment_date()
     * @uses DutchBusinessEstablishment::setDate_since()
     * @uses DutchBusinessEstablishment::setPersonnel()
     * @param string $establishment_number
     * @param bool $main_establishment
     * @param string $status
     * @param string $legal_form_text
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @param string $activity
     * @param string $description
     * @param \Webservices\ArrayType\StringArray $sbi_codes
     * @param \Webservices\ArrayType\StringArray $sbi_codes_text
     * @param string $establishment_postcode
     * @param string $establishment_city
     * @param string $establishment_street
     * @param int $establishment_house_number
     * @param string $establishment_house_number_addition
     * @param string $establishment_country
     * @param string $correspondence_postcode
     * @param string $correspondence_city
     * @param string $correspondence_street
     * @param int $correspondence_house_number
     * @param string $correspondence_house_number_addition
     * @param string $correspondence_country
     * @param string $curator_postcode
     * @param string $curator_city
     * @param string $curator_street
     * @param int $curator_house_number
     * @param string $curator_house_number_addition
     * @param string $curator_country
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @param \Webservices\ArrayType\StringArray $fax_numbers
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @param \Webservices\ArrayType\StringArray $domain_names
     * @param \Webservices\StructType\DutchBusinessDate $establishment_date
     * @param \Webservices\StructType\DutchBusinessDate $date_since
     * @param int $personnel
     */
    public function __construct($establishment_number = null, $main_establishment = null, $status = null, $legal_form_text = null, \Webservices\ArrayType\StringArray $trade_names = null, $activity = null, $description = null, \Webservices\ArrayType\StringArray $sbi_codes = null, \Webservices\ArrayType\StringArray $sbi_codes_text = null, $establishment_postcode = null, $establishment_city = null, $establishment_street = null, $establishment_house_number = null, $establishment_house_number_addition = null, $establishment_country = null, $correspondence_postcode = null, $correspondence_city = null, $correspondence_street = null, $correspondence_house_number = null, $correspondence_house_number_addition = null, $correspondence_country = null, $curator_postcode = null, $curator_city = null, $curator_street = null, $curator_house_number = null, $curator_house_number_addition = null, $curator_country = null, \Webservices\ArrayType\StringArray $telephone_numbers = null, \Webservices\ArrayType\StringArray $fax_numbers = null, \Webservices\ArrayType\StringArray $email_addresses = null, \Webservices\ArrayType\StringArray $domain_names = null, \Webservices\StructType\DutchBusinessDate $establishment_date = null, \Webservices\StructType\DutchBusinessDate $date_since = null, $personnel = null)
    {
        $this
            ->setEstablishment_number($establishment_number)
            ->setMain_establishment($main_establishment)
            ->setStatus($status)
            ->setLegal_form_text($legal_form_text)
            ->setTrade_names($trade_names)
            ->setActivity($activity)
            ->setDescription($description)
            ->setSbi_codes($sbi_codes)
            ->setSbi_codes_text($sbi_codes_text)
            ->setEstablishment_postcode($establishment_postcode)
            ->setEstablishment_city($establishment_city)
            ->setEstablishment_street($establishment_street)
            ->setEstablishment_house_number($establishment_house_number)
            ->setEstablishment_house_number_addition($establishment_house_number_addition)
            ->setEstablishment_country($establishment_country)
            ->setCorrespondence_postcode($correspondence_postcode)
            ->setCorrespondence_city($correspondence_city)
            ->setCorrespondence_street($correspondence_street)
            ->setCorrespondence_house_number($correspondence_house_number)
            ->setCorrespondence_house_number_addition($correspondence_house_number_addition)
            ->setCorrespondence_country($correspondence_country)
            ->setCurator_postcode($curator_postcode)
            ->setCurator_city($curator_city)
            ->setCurator_street($curator_street)
            ->setCurator_house_number($curator_house_number)
            ->setCurator_house_number_addition($curator_house_number_addition)
            ->setCurator_country($curator_country)
            ->setTelephone_numbers($telephone_numbers)
            ->setFax_numbers($fax_numbers)
            ->setEmail_addresses($email_addresses)
            ->setDomain_names($domain_names)
            ->setEstablishment_date($establishment_date)
            ->setDate_since($date_since)
            ->setPersonnel($personnel);
    }
    /**
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get main_establishment value
     * @return bool|null
     */
    public function getMain_establishment()
    {
        return $this->main_establishment;
    }
    /**
     * Set main_establishment value
     * @param bool $main_establishment
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setMain_establishment($main_establishment = null)
    {
        // validation for constraint: boolean
        if (!is_null($main_establishment) && !is_bool($main_establishment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($main_establishment)), __LINE__);
        }
        $this->main_establishment = $main_establishment;
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Get activity value
     * @return string|null
     */
    public function getActivity()
    {
        return $this->activity;
    }
    /**
     * Set activity value
     * @param string $activity
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setActivity($activity = null)
    {
        // validation for constraint: string
        if (!is_null($activity) && !is_string($activity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activity)), __LINE__);
        }
        $this->activity = $activity;
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * Get sbi_codes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getSbi_codes()
    {
        return $this->sbi_codes;
    }
    /**
     * Set sbi_codes value
     * @param \Webservices\ArrayType\StringArray $sbi_codes
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setSbi_codes(\Webservices\ArrayType\StringArray $sbi_codes = null)
    {
        $this->sbi_codes = $sbi_codes;
        return $this;
    }
    /**
     * Get sbi_codes_text value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getSbi_codes_text()
    {
        return $this->sbi_codes_text;
    }
    /**
     * Set sbi_codes_text value
     * @param \Webservices\ArrayType\StringArray $sbi_codes_text
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setSbi_codes_text(\Webservices\ArrayType\StringArray $sbi_codes_text = null)
    {
        $this->sbi_codes_text = $sbi_codes_text;
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
     * Get correspondence_postcode value
     * @return string|null
     */
    public function getCorrespondence_postcode()
    {
        return $this->correspondence_postcode;
    }
    /**
     * Set correspondence_postcode value
     * @param string $correspondence_postcode
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCorrespondence_postcode($correspondence_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_postcode) && !is_string($correspondence_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_postcode)), __LINE__);
        }
        $this->correspondence_postcode = $correspondence_postcode;
        return $this;
    }
    /**
     * Get correspondence_city value
     * @return string|null
     */
    public function getCorrespondence_city()
    {
        return $this->correspondence_city;
    }
    /**
     * Set correspondence_city value
     * @param string $correspondence_city
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCorrespondence_city($correspondence_city = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_city) && !is_string($correspondence_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_city)), __LINE__);
        }
        $this->correspondence_city = $correspondence_city;
        return $this;
    }
    /**
     * Get correspondence_street value
     * @return string|null
     */
    public function getCorrespondence_street()
    {
        return $this->correspondence_street;
    }
    /**
     * Set correspondence_street value
     * @param string $correspondence_street
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCorrespondence_street($correspondence_street = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_street) && !is_string($correspondence_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_street)), __LINE__);
        }
        $this->correspondence_street = $correspondence_street;
        return $this;
    }
    /**
     * Get correspondence_house_number value
     * @return int|null
     */
    public function getCorrespondence_house_number()
    {
        return $this->correspondence_house_number;
    }
    /**
     * Set correspondence_house_number value
     * @param int $correspondence_house_number
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCorrespondence_house_number($correspondence_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($correspondence_house_number) && !is_numeric($correspondence_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($correspondence_house_number)), __LINE__);
        }
        $this->correspondence_house_number = $correspondence_house_number;
        return $this;
    }
    /**
     * Get correspondence_house_number_addition value
     * @return string|null
     */
    public function getCorrespondence_house_number_addition()
    {
        return $this->correspondence_house_number_addition;
    }
    /**
     * Set correspondence_house_number_addition value
     * @param string $correspondence_house_number_addition
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCorrespondence_house_number_addition($correspondence_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_house_number_addition) && !is_string($correspondence_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_house_number_addition)), __LINE__);
        }
        $this->correspondence_house_number_addition = $correspondence_house_number_addition;
        return $this;
    }
    /**
     * Get correspondence_country value
     * @return string|null
     */
    public function getCorrespondence_country()
    {
        return $this->correspondence_country;
    }
    /**
     * Set correspondence_country value
     * @param string $correspondence_country
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCorrespondence_country($correspondence_country = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_country) && !is_string($correspondence_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_country)), __LINE__);
        }
        $this->correspondence_country = $correspondence_country;
        return $this;
    }
    /**
     * Get curator_postcode value
     * @return string|null
     */
    public function getCurator_postcode()
    {
        return $this->curator_postcode;
    }
    /**
     * Set curator_postcode value
     * @param string $curator_postcode
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCurator_postcode($curator_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($curator_postcode) && !is_string($curator_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($curator_postcode)), __LINE__);
        }
        $this->curator_postcode = $curator_postcode;
        return $this;
    }
    /**
     * Get curator_city value
     * @return string|null
     */
    public function getCurator_city()
    {
        return $this->curator_city;
    }
    /**
     * Set curator_city value
     * @param string $curator_city
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCurator_city($curator_city = null)
    {
        // validation for constraint: string
        if (!is_null($curator_city) && !is_string($curator_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($curator_city)), __LINE__);
        }
        $this->curator_city = $curator_city;
        return $this;
    }
    /**
     * Get curator_street value
     * @return string|null
     */
    public function getCurator_street()
    {
        return $this->curator_street;
    }
    /**
     * Set curator_street value
     * @param string $curator_street
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCurator_street($curator_street = null)
    {
        // validation for constraint: string
        if (!is_null($curator_street) && !is_string($curator_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($curator_street)), __LINE__);
        }
        $this->curator_street = $curator_street;
        return $this;
    }
    /**
     * Get curator_house_number value
     * @return int|null
     */
    public function getCurator_house_number()
    {
        return $this->curator_house_number;
    }
    /**
     * Set curator_house_number value
     * @param int $curator_house_number
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCurator_house_number($curator_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($curator_house_number) && !is_numeric($curator_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($curator_house_number)), __LINE__);
        }
        $this->curator_house_number = $curator_house_number;
        return $this;
    }
    /**
     * Get curator_house_number_addition value
     * @return string|null
     */
    public function getCurator_house_number_addition()
    {
        return $this->curator_house_number_addition;
    }
    /**
     * Set curator_house_number_addition value
     * @param string $curator_house_number_addition
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCurator_house_number_addition($curator_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($curator_house_number_addition) && !is_string($curator_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($curator_house_number_addition)), __LINE__);
        }
        $this->curator_house_number_addition = $curator_house_number_addition;
        return $this;
    }
    /**
     * Get curator_country value
     * @return string|null
     */
    public function getCurator_country()
    {
        return $this->curator_country;
    }
    /**
     * Set curator_country value
     * @param string $curator_country
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setCurator_country($curator_country = null)
    {
        // validation for constraint: string
        if (!is_null($curator_country) && !is_string($curator_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($curator_country)), __LINE__);
        }
        $this->curator_country = $curator_country;
        return $this;
    }
    /**
     * Get telephone_numbers value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTelephone_numbers()
    {
        return $this->telephone_numbers;
    }
    /**
     * Set telephone_numbers value
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setTelephone_numbers(\Webservices\ArrayType\StringArray $telephone_numbers = null)
    {
        $this->telephone_numbers = $telephone_numbers;
        return $this;
    }
    /**
     * Get fax_numbers value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getFax_numbers()
    {
        return $this->fax_numbers;
    }
    /**
     * Set fax_numbers value
     * @param \Webservices\ArrayType\StringArray $fax_numbers
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setFax_numbers(\Webservices\ArrayType\StringArray $fax_numbers = null)
    {
        $this->fax_numbers = $fax_numbers;
        return $this;
    }
    /**
     * Get email_addresses value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getEmail_addresses()
    {
        return $this->email_addresses;
    }
    /**
     * Set email_addresses value
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setEmail_addresses(\Webservices\ArrayType\StringArray $email_addresses = null)
    {
        $this->email_addresses = $email_addresses;
        return $this;
    }
    /**
     * Get domain_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getDomain_names()
    {
        return $this->domain_names;
    }
    /**
     * Set domain_names value
     * @param \Webservices\ArrayType\StringArray $domain_names
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setDomain_names(\Webservices\ArrayType\StringArray $domain_names = null)
    {
        $this->domain_names = $domain_names;
        return $this;
    }
    /**
     * Get establishment_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getEstablishment_date()
    {
        return $this->establishment_date;
    }
    /**
     * Set establishment_date value
     * @param \Webservices\StructType\DutchBusinessDate $establishment_date
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setEstablishment_date(\Webservices\StructType\DutchBusinessDate $establishment_date = null)
    {
        $this->establishment_date = $establishment_date;
        return $this;
    }
    /**
     * Get date_since value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDate_since()
    {
        return $this->date_since;
    }
    /**
     * Set date_since value
     * @param \Webservices\StructType\DutchBusinessDate $date_since
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setDate_since(\Webservices\StructType\DutchBusinessDate $date_since = null)
    {
        $this->date_since = $date_since;
        return $this;
    }
    /**
     * Get personnel value
     * @return int|null
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
    /**
     * Set personnel value
     * @param int $personnel
     * @return \Webservices\StructType\DutchBusinessEstablishment
     */
    public function setPersonnel($personnel = null)
    {
        // validation for constraint: int
        if (!is_null($personnel) && !is_numeric($personnel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personnel)), __LINE__);
        }
        $this->personnel = $personnel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessEstablishment
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
