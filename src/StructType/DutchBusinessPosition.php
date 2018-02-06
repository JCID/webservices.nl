<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPosition StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPosition extends AbstractStructBase
{
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $title;
    /**
     * The initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $initials;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * The function_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_type;
    /**
     * The function_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_description;
    /**
     * The function_title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_title;
    /**
     * The function_start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $function_start_date;
    /**
     * The function_registration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $function_registration_date;
    /**
     * The function_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $function_end_date;
    /**
     * The function_authorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_authorization;
    /**
     * The function_authorization_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_authorization_description;
    /**
     * The function_authorization_start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $function_authorization_start_date;
    /**
     * The function_authorization_signing_power
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_authorization_signing_power;
    /**
     * The function_authorization_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $function_authorization_end_date;
    /**
     * The authorization_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $authorization_description;
    /**
     * The authorization_start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $authorization_start_date;
    /**
     * The authorization_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $authorization_end_date;
    /**
     * The inauguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $inauguration;
    /**
     * The inauguration_function
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $inauguration_function;
    /**
     * The inauguration_duration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $inauguration_duration;
    /**
     * The inauguration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $inauguration_date;
    /**
     * The inauguration_body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $inauguration_body;
    /**
     * The under_receivership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $under_receivership;
    /**
     * The rights_against_third_parties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rights_against_third_parties;
    /**
     * The release_of_covenant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $release_of_covenant;
    /**
     * The date_deceased
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $date_deceased;
    /**
     * The date_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $date_of_birth;
    /**
     * The place_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $place_of_birth;
    /**
     * The country_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country_of_birth;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street;
    /**
     * The house_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $house_number;
    /**
     * The house_number_addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $house_number_addition;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The telephone_numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $telephone_numbers;
    /**
     * The date_since
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $date_since;
    /**
     * The date_joined
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDate
     */
    public $date_joined;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * Constructor method for DutchBusinessPosition
     * @uses DutchBusinessPosition::setTrade_names()
     * @uses DutchBusinessPosition::setDossier_number()
     * @uses DutchBusinessPosition::setEstablishment_number()
     * @uses DutchBusinessPosition::setName()
     * @uses DutchBusinessPosition::setFirst_name()
     * @uses DutchBusinessPosition::setTitle()
     * @uses DutchBusinessPosition::setInitials()
     * @uses DutchBusinessPosition::setLast_name()
     * @uses DutchBusinessPosition::setFunction_type()
     * @uses DutchBusinessPosition::setFunction_description()
     * @uses DutchBusinessPosition::setFunction_title()
     * @uses DutchBusinessPosition::setFunction_start_date()
     * @uses DutchBusinessPosition::setFunction_registration_date()
     * @uses DutchBusinessPosition::setFunction_end_date()
     * @uses DutchBusinessPosition::setFunction_authorization()
     * @uses DutchBusinessPosition::setFunction_authorization_description()
     * @uses DutchBusinessPosition::setFunction_authorization_start_date()
     * @uses DutchBusinessPosition::setFunction_authorization_signing_power()
     * @uses DutchBusinessPosition::setFunction_authorization_end_date()
     * @uses DutchBusinessPosition::setAuthorization_description()
     * @uses DutchBusinessPosition::setAuthorization_start_date()
     * @uses DutchBusinessPosition::setAuthorization_end_date()
     * @uses DutchBusinessPosition::setInauguration()
     * @uses DutchBusinessPosition::setInauguration_function()
     * @uses DutchBusinessPosition::setInauguration_duration()
     * @uses DutchBusinessPosition::setInauguration_date()
     * @uses DutchBusinessPosition::setInauguration_body()
     * @uses DutchBusinessPosition::setUnder_receivership()
     * @uses DutchBusinessPosition::setRights_against_third_parties()
     * @uses DutchBusinessPosition::setRelease_of_covenant()
     * @uses DutchBusinessPosition::setDate_deceased()
     * @uses DutchBusinessPosition::setDate_of_birth()
     * @uses DutchBusinessPosition::setPlace_of_birth()
     * @uses DutchBusinessPosition::setCountry_of_birth()
     * @uses DutchBusinessPosition::setPostcode()
     * @uses DutchBusinessPosition::setCity()
     * @uses DutchBusinessPosition::setStreet()
     * @uses DutchBusinessPosition::setHouse_number()
     * @uses DutchBusinessPosition::setHouse_number_addition()
     * @uses DutchBusinessPosition::setCountry()
     * @uses DutchBusinessPosition::setTelephone_numbers()
     * @uses DutchBusinessPosition::setDate_since()
     * @uses DutchBusinessPosition::setDate_joined()
     * @uses DutchBusinessPosition::setStatus()
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $name
     * @param string $first_name
     * @param string $title
     * @param string $initials
     * @param string $last_name
     * @param string $function_type
     * @param string $function_description
     * @param string $function_title
     * @param \Webservices\StructType\DutchBusinessDate $function_start_date
     * @param \Webservices\StructType\DutchBusinessDate $function_registration_date
     * @param \Webservices\StructType\DutchBusinessDate $function_end_date
     * @param string $function_authorization
     * @param string $function_authorization_description
     * @param \Webservices\StructType\DutchBusinessDate $function_authorization_start_date
     * @param string $function_authorization_signing_power
     * @param \Webservices\StructType\DutchBusinessDate $function_authorization_end_date
     * @param string $authorization_description
     * @param \Webservices\StructType\DutchBusinessDate $authorization_start_date
     * @param \Webservices\StructType\DutchBusinessDate $authorization_end_date
     * @param string $inauguration
     * @param string $inauguration_function
     * @param string $inauguration_duration
     * @param \Webservices\StructType\DutchBusinessDate $inauguration_date
     * @param string $inauguration_body
     * @param string $under_receivership
     * @param string $rights_against_third_parties
     * @param string $release_of_covenant
     * @param \Webservices\StructType\DutchBusinessDate $date_deceased
     * @param \Webservices\StructType\DutchBusinessDate $date_of_birth
     * @param string $place_of_birth
     * @param string $country_of_birth
     * @param string $postcode
     * @param string $city
     * @param string $street
     * @param int $house_number
     * @param string $house_number_addition
     * @param string $country
     * @param \Webservices\ArrayType\StringArray $telephone_numbers
     * @param \Webservices\StructType\DutchBusinessDate $date_since
     * @param \Webservices\StructType\DutchBusinessDate $date_joined
     * @param string $status
     */
    public function __construct(\Webservices\ArrayType\StringArray $trade_names = null, $dossier_number = null, $establishment_number = null, $name = null, $first_name = null, $title = null, $initials = null, $last_name = null, $function_type = null, $function_description = null, $function_title = null, \Webservices\StructType\DutchBusinessDate $function_start_date = null, \Webservices\StructType\DutchBusinessDate $function_registration_date = null, \Webservices\StructType\DutchBusinessDate $function_end_date = null, $function_authorization = null, $function_authorization_description = null, \Webservices\StructType\DutchBusinessDate $function_authorization_start_date = null, $function_authorization_signing_power = null, \Webservices\StructType\DutchBusinessDate $function_authorization_end_date = null, $authorization_description = null, \Webservices\StructType\DutchBusinessDate $authorization_start_date = null, \Webservices\StructType\DutchBusinessDate $authorization_end_date = null, $inauguration = null, $inauguration_function = null, $inauguration_duration = null, \Webservices\StructType\DutchBusinessDate $inauguration_date = null, $inauguration_body = null, $under_receivership = null, $rights_against_third_parties = null, $release_of_covenant = null, \Webservices\StructType\DutchBusinessDate $date_deceased = null, \Webservices\StructType\DutchBusinessDate $date_of_birth = null, $place_of_birth = null, $country_of_birth = null, $postcode = null, $city = null, $street = null, $house_number = null, $house_number_addition = null, $country = null, \Webservices\ArrayType\StringArray $telephone_numbers = null, \Webservices\StructType\DutchBusinessDate $date_since = null, \Webservices\StructType\DutchBusinessDate $date_joined = null, $status = null)
    {
        $this
            ->setTrade_names($trade_names)
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setName($name)
            ->setFirst_name($first_name)
            ->setTitle($title)
            ->setInitials($initials)
            ->setLast_name($last_name)
            ->setFunction_type($function_type)
            ->setFunction_description($function_description)
            ->setFunction_title($function_title)
            ->setFunction_start_date($function_start_date)
            ->setFunction_registration_date($function_registration_date)
            ->setFunction_end_date($function_end_date)
            ->setFunction_authorization($function_authorization)
            ->setFunction_authorization_description($function_authorization_description)
            ->setFunction_authorization_start_date($function_authorization_start_date)
            ->setFunction_authorization_signing_power($function_authorization_signing_power)
            ->setFunction_authorization_end_date($function_authorization_end_date)
            ->setAuthorization_description($authorization_description)
            ->setAuthorization_start_date($authorization_start_date)
            ->setAuthorization_end_date($authorization_end_date)
            ->setInauguration($inauguration)
            ->setInauguration_function($inauguration_function)
            ->setInauguration_duration($inauguration_duration)
            ->setInauguration_date($inauguration_date)
            ->setInauguration_body($inauguration_body)
            ->setUnder_receivership($under_receivership)
            ->setRights_against_third_parties($rights_against_third_parties)
            ->setRelease_of_covenant($release_of_covenant)
            ->setDate_deceased($date_deceased)
            ->setDate_of_birth($date_of_birth)
            ->setPlace_of_birth($place_of_birth)
            ->setCountry_of_birth($country_of_birth)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setStreet($street)
            ->setHouse_number($house_number)
            ->setHouse_number_addition($house_number_addition)
            ->setCountry($country)
            ->setTelephone_numbers($telephone_numbers)
            ->setDate_since($date_since)
            ->setDate_joined($date_joined)
            ->setStatus($status);
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
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->initials;
    }
    /**
     * Set initials value
     * @param string $initials
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initials)), __LINE__);
        }
        $this->initials = $initials;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get function_type value
     * @return string|null
     */
    public function getFunction_type()
    {
        return $this->function_type;
    }
    /**
     * Set function_type value
     * @param string $function_type
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_type($function_type = null)
    {
        // validation for constraint: string
        if (!is_null($function_type) && !is_string($function_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_type)), __LINE__);
        }
        $this->function_type = $function_type;
        return $this;
    }
    /**
     * Get function_description value
     * @return string|null
     */
    public function getFunction_description()
    {
        return $this->function_description;
    }
    /**
     * Set function_description value
     * @param string $function_description
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_description($function_description = null)
    {
        // validation for constraint: string
        if (!is_null($function_description) && !is_string($function_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_description)), __LINE__);
        }
        $this->function_description = $function_description;
        return $this;
    }
    /**
     * Get function_title value
     * @return string|null
     */
    public function getFunction_title()
    {
        return $this->function_title;
    }
    /**
     * Set function_title value
     * @param string $function_title
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_title($function_title = null)
    {
        // validation for constraint: string
        if (!is_null($function_title) && !is_string($function_title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_title)), __LINE__);
        }
        $this->function_title = $function_title;
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
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_start_date(\Webservices\StructType\DutchBusinessDate $function_start_date = null)
    {
        $this->function_start_date = $function_start_date;
        return $this;
    }
    /**
     * Get function_registration_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFunction_registration_date()
    {
        return $this->function_registration_date;
    }
    /**
     * Set function_registration_date value
     * @param \Webservices\StructType\DutchBusinessDate $function_registration_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_registration_date(\Webservices\StructType\DutchBusinessDate $function_registration_date = null)
    {
        $this->function_registration_date = $function_registration_date;
        return $this;
    }
    /**
     * Get function_end_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFunction_end_date()
    {
        return $this->function_end_date;
    }
    /**
     * Set function_end_date value
     * @param \Webservices\StructType\DutchBusinessDate $function_end_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_end_date(\Webservices\StructType\DutchBusinessDate $function_end_date = null)
    {
        $this->function_end_date = $function_end_date;
        return $this;
    }
    /**
     * Get function_authorization value
     * @return string|null
     */
    public function getFunction_authorization()
    {
        return $this->function_authorization;
    }
    /**
     * Set function_authorization value
     * @param string $function_authorization
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_authorization($function_authorization = null)
    {
        // validation for constraint: string
        if (!is_null($function_authorization) && !is_string($function_authorization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_authorization)), __LINE__);
        }
        $this->function_authorization = $function_authorization;
        return $this;
    }
    /**
     * Get function_authorization_description value
     * @return string|null
     */
    public function getFunction_authorization_description()
    {
        return $this->function_authorization_description;
    }
    /**
     * Set function_authorization_description value
     * @param string $function_authorization_description
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_authorization_description($function_authorization_description = null)
    {
        // validation for constraint: string
        if (!is_null($function_authorization_description) && !is_string($function_authorization_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_authorization_description)), __LINE__);
        }
        $this->function_authorization_description = $function_authorization_description;
        return $this;
    }
    /**
     * Get function_authorization_start_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFunction_authorization_start_date()
    {
        return $this->function_authorization_start_date;
    }
    /**
     * Set function_authorization_start_date value
     * @param \Webservices\StructType\DutchBusinessDate $function_authorization_start_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_authorization_start_date(\Webservices\StructType\DutchBusinessDate $function_authorization_start_date = null)
    {
        $this->function_authorization_start_date = $function_authorization_start_date;
        return $this;
    }
    /**
     * Get function_authorization_signing_power value
     * @return string|null
     */
    public function getFunction_authorization_signing_power()
    {
        return $this->function_authorization_signing_power;
    }
    /**
     * Set function_authorization_signing_power value
     * @param string $function_authorization_signing_power
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_authorization_signing_power($function_authorization_signing_power = null)
    {
        // validation for constraint: string
        if (!is_null($function_authorization_signing_power) && !is_string($function_authorization_signing_power)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_authorization_signing_power)), __LINE__);
        }
        $this->function_authorization_signing_power = $function_authorization_signing_power;
        return $this;
    }
    /**
     * Get function_authorization_end_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getFunction_authorization_end_date()
    {
        return $this->function_authorization_end_date;
    }
    /**
     * Set function_authorization_end_date value
     * @param \Webservices\StructType\DutchBusinessDate $function_authorization_end_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setFunction_authorization_end_date(\Webservices\StructType\DutchBusinessDate $function_authorization_end_date = null)
    {
        $this->function_authorization_end_date = $function_authorization_end_date;
        return $this;
    }
    /**
     * Get authorization_description value
     * @return string|null
     */
    public function getAuthorization_description()
    {
        return $this->authorization_description;
    }
    /**
     * Set authorization_description value
     * @param string $authorization_description
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setAuthorization_description($authorization_description = null)
    {
        // validation for constraint: string
        if (!is_null($authorization_description) && !is_string($authorization_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorization_description)), __LINE__);
        }
        $this->authorization_description = $authorization_description;
        return $this;
    }
    /**
     * Get authorization_start_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getAuthorization_start_date()
    {
        return $this->authorization_start_date;
    }
    /**
     * Set authorization_start_date value
     * @param \Webservices\StructType\DutchBusinessDate $authorization_start_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setAuthorization_start_date(\Webservices\StructType\DutchBusinessDate $authorization_start_date = null)
    {
        $this->authorization_start_date = $authorization_start_date;
        return $this;
    }
    /**
     * Get authorization_end_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getAuthorization_end_date()
    {
        return $this->authorization_end_date;
    }
    /**
     * Set authorization_end_date value
     * @param \Webservices\StructType\DutchBusinessDate $authorization_end_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setAuthorization_end_date(\Webservices\StructType\DutchBusinessDate $authorization_end_date = null)
    {
        $this->authorization_end_date = $authorization_end_date;
        return $this;
    }
    /**
     * Get inauguration value
     * @return string|null
     */
    public function getInauguration()
    {
        return $this->inauguration;
    }
    /**
     * Set inauguration value
     * @param string $inauguration
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setInauguration($inauguration = null)
    {
        // validation for constraint: string
        if (!is_null($inauguration) && !is_string($inauguration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inauguration)), __LINE__);
        }
        $this->inauguration = $inauguration;
        return $this;
    }
    /**
     * Get inauguration_function value
     * @return string|null
     */
    public function getInauguration_function()
    {
        return $this->inauguration_function;
    }
    /**
     * Set inauguration_function value
     * @param string $inauguration_function
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setInauguration_function($inauguration_function = null)
    {
        // validation for constraint: string
        if (!is_null($inauguration_function) && !is_string($inauguration_function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inauguration_function)), __LINE__);
        }
        $this->inauguration_function = $inauguration_function;
        return $this;
    }
    /**
     * Get inauguration_duration value
     * @return string|null
     */
    public function getInauguration_duration()
    {
        return $this->inauguration_duration;
    }
    /**
     * Set inauguration_duration value
     * @param string $inauguration_duration
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setInauguration_duration($inauguration_duration = null)
    {
        // validation for constraint: string
        if (!is_null($inauguration_duration) && !is_string($inauguration_duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inauguration_duration)), __LINE__);
        }
        $this->inauguration_duration = $inauguration_duration;
        return $this;
    }
    /**
     * Get inauguration_date value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getInauguration_date()
    {
        return $this->inauguration_date;
    }
    /**
     * Set inauguration_date value
     * @param \Webservices\StructType\DutchBusinessDate $inauguration_date
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setInauguration_date(\Webservices\StructType\DutchBusinessDate $inauguration_date = null)
    {
        $this->inauguration_date = $inauguration_date;
        return $this;
    }
    /**
     * Get inauguration_body value
     * @return string|null
     */
    public function getInauguration_body()
    {
        return $this->inauguration_body;
    }
    /**
     * Set inauguration_body value
     * @param string $inauguration_body
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setInauguration_body($inauguration_body = null)
    {
        // validation for constraint: string
        if (!is_null($inauguration_body) && !is_string($inauguration_body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inauguration_body)), __LINE__);
        }
        $this->inauguration_body = $inauguration_body;
        return $this;
    }
    /**
     * Get under_receivership value
     * @return string|null
     */
    public function getUnder_receivership()
    {
        return $this->under_receivership;
    }
    /**
     * Set under_receivership value
     * @param string $under_receivership
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setUnder_receivership($under_receivership = null)
    {
        // validation for constraint: string
        if (!is_null($under_receivership) && !is_string($under_receivership)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($under_receivership)), __LINE__);
        }
        $this->under_receivership = $under_receivership;
        return $this;
    }
    /**
     * Get rights_against_third_parties value
     * @return string|null
     */
    public function getRights_against_third_parties()
    {
        return $this->rights_against_third_parties;
    }
    /**
     * Set rights_against_third_parties value
     * @param string $rights_against_third_parties
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setRights_against_third_parties($rights_against_third_parties = null)
    {
        // validation for constraint: string
        if (!is_null($rights_against_third_parties) && !is_string($rights_against_third_parties)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rights_against_third_parties)), __LINE__);
        }
        $this->rights_against_third_parties = $rights_against_third_parties;
        return $this;
    }
    /**
     * Get release_of_covenant value
     * @return string|null
     */
    public function getRelease_of_covenant()
    {
        return $this->release_of_covenant;
    }
    /**
     * Set release_of_covenant value
     * @param string $release_of_covenant
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setRelease_of_covenant($release_of_covenant = null)
    {
        // validation for constraint: string
        if (!is_null($release_of_covenant) && !is_string($release_of_covenant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($release_of_covenant)), __LINE__);
        }
        $this->release_of_covenant = $release_of_covenant;
        return $this;
    }
    /**
     * Get date_deceased value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDate_deceased()
    {
        return $this->date_deceased;
    }
    /**
     * Set date_deceased value
     * @param \Webservices\StructType\DutchBusinessDate $date_deceased
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setDate_deceased(\Webservices\StructType\DutchBusinessDate $date_deceased = null)
    {
        $this->date_deceased = $date_deceased;
        return $this;
    }
    /**
     * Get date_of_birth value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }
    /**
     * Set date_of_birth value
     * @param \Webservices\StructType\DutchBusinessDate $date_of_birth
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setDate_of_birth(\Webservices\StructType\DutchBusinessDate $date_of_birth = null)
    {
        $this->date_of_birth = $date_of_birth;
        return $this;
    }
    /**
     * Get place_of_birth value
     * @return string|null
     */
    public function getPlace_of_birth()
    {
        return $this->place_of_birth;
    }
    /**
     * Set place_of_birth value
     * @param string $place_of_birth
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setPlace_of_birth($place_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($place_of_birth) && !is_string($place_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($place_of_birth)), __LINE__);
        }
        $this->place_of_birth = $place_of_birth;
        return $this;
    }
    /**
     * Get country_of_birth value
     * @return string|null
     */
    public function getCountry_of_birth()
    {
        return $this->country_of_birth;
    }
    /**
     * Set country_of_birth value
     * @param string $country_of_birth
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setCountry_of_birth($country_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($country_of_birth) && !is_string($country_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_of_birth)), __LINE__);
        }
        $this->country_of_birth = $country_of_birth;
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
    /**
     * Get house_number value
     * @return int|null
     */
    public function getHouse_number()
    {
        return $this->house_number;
    }
    /**
     * Set house_number value
     * @param int $house_number
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setHouse_number($house_number = null)
    {
        // validation for constraint: int
        if (!is_null($house_number) && !is_numeric($house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_number)), __LINE__);
        }
        $this->house_number = $house_number;
        return $this;
    }
    /**
     * Get house_number_addition value
     * @return string|null
     */
    public function getHouse_number_addition()
    {
        return $this->house_number_addition;
    }
    /**
     * Set house_number_addition value
     * @param string $house_number_addition
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setHouse_number_addition($house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_number_addition) && !is_string($house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_number_addition)), __LINE__);
        }
        $this->house_number_addition = $house_number_addition;
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setTelephone_numbers(\Webservices\ArrayType\StringArray $telephone_numbers = null)
    {
        $this->telephone_numbers = $telephone_numbers;
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
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setDate_since(\Webservices\StructType\DutchBusinessDate $date_since = null)
    {
        $this->date_since = $date_since;
        return $this;
    }
    /**
     * Get date_joined value
     * @return \Webservices\StructType\DutchBusinessDate|null
     */
    public function getDate_joined()
    {
        return $this->date_joined;
    }
    /**
     * Set date_joined value
     * @param \Webservices\StructType\DutchBusinessDate $date_joined
     * @return \Webservices\StructType\DutchBusinessPosition
     */
    public function setDate_joined(\Webservices\StructType\DutchBusinessDate $date_joined = null)
    {
        $this->date_joined = $date_joined;
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
     * @return \Webservices\StructType\DutchBusinessPosition
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPosition
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
