<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPositionV3 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPositionV3 extends AbstractStructBase
{
    /**
     * The functionary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessPersonV3
     */
    public $functionary;
    /**
     * The organisation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessOrganizationReferenceV3
     */
    public $organisation;
    /**
     * The residential_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $residential_address;
    /**
     * The correspondence_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $correspondence_address;
    /**
     * The establishment_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $establishment_address;
    /**
     * The longest_serving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $longest_serving;
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
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $function_start_date;
    /**
     * The function_registration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $function_registration_date;
    /**
     * The function_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
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
     * @var \Webservices\StructType\DutchBusinessDateV3
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
     * @var \Webservices\StructType\DutchBusinessDateV3
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
     * The authorization_establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $authorization_establishment_number;
    /**
     * The authorization_start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $authorization_start_date;
    /**
     * The authorization_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $authorization_end_date;
    /**
     * The authorization_constraints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $authorization_constraints;
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
     * @var \Webservices\StructType\DutchBusinessDateV3
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
     * The date_since
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $date_since;
    /**
     * The date_joined
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $date_joined;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $remarks;
    /**
     * Constructor method for DutchBusinessPositionV3
     * @uses DutchBusinessPositionV3::setFunctionary()
     * @uses DutchBusinessPositionV3::setOrganisation()
     * @uses DutchBusinessPositionV3::setResidential_address()
     * @uses DutchBusinessPositionV3::setCorrespondence_address()
     * @uses DutchBusinessPositionV3::setEstablishment_address()
     * @uses DutchBusinessPositionV3::setLongest_serving()
     * @uses DutchBusinessPositionV3::setFunction_type()
     * @uses DutchBusinessPositionV3::setFunction_description()
     * @uses DutchBusinessPositionV3::setFunction_title()
     * @uses DutchBusinessPositionV3::setFunction_start_date()
     * @uses DutchBusinessPositionV3::setFunction_registration_date()
     * @uses DutchBusinessPositionV3::setFunction_end_date()
     * @uses DutchBusinessPositionV3::setFunction_authorization()
     * @uses DutchBusinessPositionV3::setFunction_authorization_description()
     * @uses DutchBusinessPositionV3::setFunction_authorization_start_date()
     * @uses DutchBusinessPositionV3::setFunction_authorization_signing_power()
     * @uses DutchBusinessPositionV3::setFunction_authorization_end_date()
     * @uses DutchBusinessPositionV3::setAuthorization_description()
     * @uses DutchBusinessPositionV3::setAuthorization_establishment_number()
     * @uses DutchBusinessPositionV3::setAuthorization_start_date()
     * @uses DutchBusinessPositionV3::setAuthorization_end_date()
     * @uses DutchBusinessPositionV3::setAuthorization_constraints()
     * @uses DutchBusinessPositionV3::setInauguration()
     * @uses DutchBusinessPositionV3::setInauguration_function()
     * @uses DutchBusinessPositionV3::setInauguration_duration()
     * @uses DutchBusinessPositionV3::setInauguration_date()
     * @uses DutchBusinessPositionV3::setInauguration_body()
     * @uses DutchBusinessPositionV3::setUnder_receivership()
     * @uses DutchBusinessPositionV3::setRights_against_third_parties()
     * @uses DutchBusinessPositionV3::setRelease_of_covenant()
     * @uses DutchBusinessPositionV3::setDate_since()
     * @uses DutchBusinessPositionV3::setDate_joined()
     * @uses DutchBusinessPositionV3::setRemarks()
     * @param \Webservices\StructType\DutchBusinessPersonV3 $functionary
     * @param \Webservices\StructType\DutchBusinessOrganizationReferenceV3 $organisation
     * @param \Webservices\StructType\DutchBusinessAddressV3 $residential_address
     * @param \Webservices\StructType\DutchBusinessAddressV3 $correspondence_address
     * @param \Webservices\StructType\DutchBusinessAddressV3 $establishment_address
     * @param bool $longest_serving
     * @param string $function_type
     * @param string $function_description
     * @param string $function_title
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_start_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_registration_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_end_date
     * @param string $function_authorization
     * @param string $function_authorization_description
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_authorization_start_date
     * @param string $function_authorization_signing_power
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_authorization_end_date
     * @param string $authorization_description
     * @param string $authorization_establishment_number
     * @param \Webservices\StructType\DutchBusinessDateV3 $authorization_start_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $authorization_end_date
     * @param \Webservices\ArrayType\StringArray $authorization_constraints
     * @param string $inauguration
     * @param string $inauguration_function
     * @param string $inauguration_duration
     * @param \Webservices\StructType\DutchBusinessDateV3 $inauguration_date
     * @param string $inauguration_body
     * @param string $under_receivership
     * @param string $rights_against_third_parties
     * @param string $release_of_covenant
     * @param \Webservices\StructType\DutchBusinessDateV3 $date_since
     * @param \Webservices\StructType\DutchBusinessDateV3 $date_joined
     * @param \Webservices\ArrayType\StringArray $remarks
     */
    public function __construct(\Webservices\StructType\DutchBusinessPersonV3 $functionary = null, \Webservices\StructType\DutchBusinessOrganizationReferenceV3 $organisation = null, \Webservices\StructType\DutchBusinessAddressV3 $residential_address = null, \Webservices\StructType\DutchBusinessAddressV3 $correspondence_address = null, \Webservices\StructType\DutchBusinessAddressV3 $establishment_address = null, $longest_serving = null, $function_type = null, $function_description = null, $function_title = null, \Webservices\StructType\DutchBusinessDateV3 $function_start_date = null, \Webservices\StructType\DutchBusinessDateV3 $function_registration_date = null, \Webservices\StructType\DutchBusinessDateV3 $function_end_date = null, $function_authorization = null, $function_authorization_description = null, \Webservices\StructType\DutchBusinessDateV3 $function_authorization_start_date = null, $function_authorization_signing_power = null, \Webservices\StructType\DutchBusinessDateV3 $function_authorization_end_date = null, $authorization_description = null, $authorization_establishment_number = null, \Webservices\StructType\DutchBusinessDateV3 $authorization_start_date = null, \Webservices\StructType\DutchBusinessDateV3 $authorization_end_date = null, \Webservices\ArrayType\StringArray $authorization_constraints = null, $inauguration = null, $inauguration_function = null, $inauguration_duration = null, \Webservices\StructType\DutchBusinessDateV3 $inauguration_date = null, $inauguration_body = null, $under_receivership = null, $rights_against_third_parties = null, $release_of_covenant = null, \Webservices\StructType\DutchBusinessDateV3 $date_since = null, \Webservices\StructType\DutchBusinessDateV3 $date_joined = null, \Webservices\ArrayType\StringArray $remarks = null)
    {
        $this
            ->setFunctionary($functionary)
            ->setOrganisation($organisation)
            ->setResidential_address($residential_address)
            ->setCorrespondence_address($correspondence_address)
            ->setEstablishment_address($establishment_address)
            ->setLongest_serving($longest_serving)
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
            ->setAuthorization_establishment_number($authorization_establishment_number)
            ->setAuthorization_start_date($authorization_start_date)
            ->setAuthorization_end_date($authorization_end_date)
            ->setAuthorization_constraints($authorization_constraints)
            ->setInauguration($inauguration)
            ->setInauguration_function($inauguration_function)
            ->setInauguration_duration($inauguration_duration)
            ->setInauguration_date($inauguration_date)
            ->setInauguration_body($inauguration_body)
            ->setUnder_receivership($under_receivership)
            ->setRights_against_third_parties($rights_against_third_parties)
            ->setRelease_of_covenant($release_of_covenant)
            ->setDate_since($date_since)
            ->setDate_joined($date_joined)
            ->setRemarks($remarks);
    }
    /**
     * Get functionary value
     * @return \Webservices\StructType\DutchBusinessPersonV3|null
     */
    public function getFunctionary()
    {
        return $this->functionary;
    }
    /**
     * Set functionary value
     * @param \Webservices\StructType\DutchBusinessPersonV3 $functionary
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setFunctionary(\Webservices\StructType\DutchBusinessPersonV3 $functionary = null)
    {
        $this->functionary = $functionary;
        return $this;
    }
    /**
     * Get organisation value
     * @return \Webservices\StructType\DutchBusinessOrganizationReferenceV3|null
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param \Webservices\StructType\DutchBusinessOrganizationReferenceV3 $organisation
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setOrganisation(\Webservices\StructType\DutchBusinessOrganizationReferenceV3 $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }
    /**
     * Get residential_address value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getResidential_address()
    {
        return $this->residential_address;
    }
    /**
     * Set residential_address value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $residential_address
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setResidential_address(\Webservices\StructType\DutchBusinessAddressV3 $residential_address = null)
    {
        $this->residential_address = $residential_address;
        return $this;
    }
    /**
     * Get correspondence_address value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getCorrespondence_address()
    {
        return $this->correspondence_address;
    }
    /**
     * Set correspondence_address value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $correspondence_address
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setCorrespondence_address(\Webservices\StructType\DutchBusinessAddressV3 $correspondence_address = null)
    {
        $this->correspondence_address = $correspondence_address;
        return $this;
    }
    /**
     * Get establishment_address value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getEstablishment_address()
    {
        return $this->establishment_address;
    }
    /**
     * Set establishment_address value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $establishment_address
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setEstablishment_address(\Webservices\StructType\DutchBusinessAddressV3 $establishment_address = null)
    {
        $this->establishment_address = $establishment_address;
        return $this;
    }
    /**
     * Get longest_serving value
     * @return bool|null
     */
    public function getLongest_serving()
    {
        return $this->longest_serving;
    }
    /**
     * Set longest_serving value
     * @param bool $longest_serving
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setLongest_serving($longest_serving = null)
    {
        // validation for constraint: boolean
        if (!is_null($longest_serving) && !is_bool($longest_serving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($longest_serving)), __LINE__);
        }
        $this->longest_serving = $longest_serving;
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getFunction_start_date()
    {
        return $this->function_start_date;
    }
    /**
     * Set function_start_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_start_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setFunction_start_date(\Webservices\StructType\DutchBusinessDateV3 $function_start_date = null)
    {
        $this->function_start_date = $function_start_date;
        return $this;
    }
    /**
     * Get function_registration_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getFunction_registration_date()
    {
        return $this->function_registration_date;
    }
    /**
     * Set function_registration_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_registration_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setFunction_registration_date(\Webservices\StructType\DutchBusinessDateV3 $function_registration_date = null)
    {
        $this->function_registration_date = $function_registration_date;
        return $this;
    }
    /**
     * Get function_end_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getFunction_end_date()
    {
        return $this->function_end_date;
    }
    /**
     * Set function_end_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_end_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setFunction_end_date(\Webservices\StructType\DutchBusinessDateV3 $function_end_date = null)
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getFunction_authorization_start_date()
    {
        return $this->function_authorization_start_date;
    }
    /**
     * Set function_authorization_start_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_authorization_start_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setFunction_authorization_start_date(\Webservices\StructType\DutchBusinessDateV3 $function_authorization_start_date = null)
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getFunction_authorization_end_date()
    {
        return $this->function_authorization_end_date;
    }
    /**
     * Set function_authorization_end_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $function_authorization_end_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setFunction_authorization_end_date(\Webservices\StructType\DutchBusinessDateV3 $function_authorization_end_date = null)
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * Get authorization_establishment_number value
     * @return string|null
     */
    public function getAuthorization_establishment_number()
    {
        return $this->authorization_establishment_number;
    }
    /**
     * Set authorization_establishment_number value
     * @param string $authorization_establishment_number
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setAuthorization_establishment_number($authorization_establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($authorization_establishment_number) && !is_string($authorization_establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorization_establishment_number)), __LINE__);
        }
        $this->authorization_establishment_number = $authorization_establishment_number;
        return $this;
    }
    /**
     * Get authorization_start_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getAuthorization_start_date()
    {
        return $this->authorization_start_date;
    }
    /**
     * Set authorization_start_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $authorization_start_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setAuthorization_start_date(\Webservices\StructType\DutchBusinessDateV3 $authorization_start_date = null)
    {
        $this->authorization_start_date = $authorization_start_date;
        return $this;
    }
    /**
     * Get authorization_end_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getAuthorization_end_date()
    {
        return $this->authorization_end_date;
    }
    /**
     * Set authorization_end_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $authorization_end_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setAuthorization_end_date(\Webservices\StructType\DutchBusinessDateV3 $authorization_end_date = null)
    {
        $this->authorization_end_date = $authorization_end_date;
        return $this;
    }
    /**
     * Get authorization_constraints value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getAuthorization_constraints()
    {
        return $this->authorization_constraints;
    }
    /**
     * Set authorization_constraints value
     * @param \Webservices\ArrayType\StringArray $authorization_constraints
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setAuthorization_constraints(\Webservices\ArrayType\StringArray $authorization_constraints = null)
    {
        $this->authorization_constraints = $authorization_constraints;
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getInauguration_date()
    {
        return $this->inauguration_date;
    }
    /**
     * Set inauguration_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $inauguration_date
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setInauguration_date(\Webservices\StructType\DutchBusinessDateV3 $inauguration_date = null)
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
     * Get date_since value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getDate_since()
    {
        return $this->date_since;
    }
    /**
     * Set date_since value
     * @param \Webservices\StructType\DutchBusinessDateV3 $date_since
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setDate_since(\Webservices\StructType\DutchBusinessDateV3 $date_since = null)
    {
        $this->date_since = $date_since;
        return $this;
    }
    /**
     * Get date_joined value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getDate_joined()
    {
        return $this->date_joined;
    }
    /**
     * Set date_joined value
     * @param \Webservices\StructType\DutchBusinessDateV3 $date_joined
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setDate_joined(\Webservices\StructType\DutchBusinessDateV3 $date_joined = null)
    {
        $this->date_joined = $date_joined;
        return $this;
    }
    /**
     * Get remarks value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param \Webservices\ArrayType\StringArray $remarks
     * @return \Webservices\StructType\DutchBusinessPositionV3
     */
    public function setRemarks(\Webservices\ArrayType\StringArray $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPositionV3
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
