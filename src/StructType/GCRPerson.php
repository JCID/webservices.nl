<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRPerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRPerson extends AbstractStructBase
{
    /**
     * The graydon_person_id
     * @var int
     */
    public $graydon_person_id;
    /**
     * The personal_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRPersonalDetails
     */
    public $personal_details;
    /**
     * The telephone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRTelephoneNumber
     */
    public $telephone_number;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAddress
     */
    public $address;
    /**
     * The birth_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRBirthInformation
     */
    public $birth_information;
    /**
     * The job_titles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRJobTitleArray
     */
    public $job_titles;
    /**
     * The financial_calamities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFinancialCalamityArray
     */
    public $financial_calamities;
    /**
     * Constructor method for GCRPerson
     * @uses GCRPerson::setGraydon_person_id()
     * @uses GCRPerson::setPersonal_details()
     * @uses GCRPerson::setTelephone_number()
     * @uses GCRPerson::setAddress()
     * @uses GCRPerson::setBirth_information()
     * @uses GCRPerson::setJob_titles()
     * @uses GCRPerson::setFinancial_calamities()
     * @param int $graydon_person_id
     * @param \Webservices\StructType\GCRPersonalDetails $personal_details
     * @param \Webservices\StructType\GCRTelephoneNumber $telephone_number
     * @param \Webservices\StructType\GCRAddress $address
     * @param \Webservices\StructType\GCRBirthInformation $birth_information
     * @param \Webservices\ArrayType\GCRJobTitleArray $job_titles
     * @param \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities
     */
    public function __construct($graydon_person_id = null, \Webservices\StructType\GCRPersonalDetails $personal_details = null, \Webservices\StructType\GCRTelephoneNumber $telephone_number = null, \Webservices\StructType\GCRAddress $address = null, \Webservices\StructType\GCRBirthInformation $birth_information = null, \Webservices\ArrayType\GCRJobTitleArray $job_titles = null, \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null)
    {
        $this
            ->setGraydon_person_id($graydon_person_id)
            ->setPersonal_details($personal_details)
            ->setTelephone_number($telephone_number)
            ->setAddress($address)
            ->setBirth_information($birth_information)
            ->setJob_titles($job_titles)
            ->setFinancial_calamities($financial_calamities);
    }
    /**
     * Get graydon_person_id value
     * @return int|null
     */
    public function getGraydon_person_id()
    {
        return $this->graydon_person_id;
    }
    /**
     * Set graydon_person_id value
     * @param int $graydon_person_id
     * @return \Webservices\StructType\GCRPerson
     */
    public function setGraydon_person_id($graydon_person_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_person_id) && !is_numeric($graydon_person_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_person_id)), __LINE__);
        }
        $this->graydon_person_id = $graydon_person_id;
        return $this;
    }
    /**
     * Get personal_details value
     * @return \Webservices\StructType\GCRPersonalDetails|null
     */
    public function getPersonal_details()
    {
        return $this->personal_details;
    }
    /**
     * Set personal_details value
     * @param \Webservices\StructType\GCRPersonalDetails $personal_details
     * @return \Webservices\StructType\GCRPerson
     */
    public function setPersonal_details(\Webservices\StructType\GCRPersonalDetails $personal_details = null)
    {
        $this->personal_details = $personal_details;
        return $this;
    }
    /**
     * Get telephone_number value
     * @return \Webservices\StructType\GCRTelephoneNumber|null
     */
    public function getTelephone_number()
    {
        return $this->telephone_number;
    }
    /**
     * Set telephone_number value
     * @param \Webservices\StructType\GCRTelephoneNumber $telephone_number
     * @return \Webservices\StructType\GCRPerson
     */
    public function setTelephone_number(\Webservices\StructType\GCRTelephoneNumber $telephone_number = null)
    {
        $this->telephone_number = $telephone_number;
        return $this;
    }
    /**
     * Get address value
     * @return \Webservices\StructType\GCRAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\GCRAddress $address
     * @return \Webservices\StructType\GCRPerson
     */
    public function setAddress(\Webservices\StructType\GCRAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get birth_information value
     * @return \Webservices\StructType\GCRBirthInformation|null
     */
    public function getBirth_information()
    {
        return $this->birth_information;
    }
    /**
     * Set birth_information value
     * @param \Webservices\StructType\GCRBirthInformation $birth_information
     * @return \Webservices\StructType\GCRPerson
     */
    public function setBirth_information(\Webservices\StructType\GCRBirthInformation $birth_information = null)
    {
        $this->birth_information = $birth_information;
        return $this;
    }
    /**
     * Get job_titles value
     * @return \Webservices\ArrayType\GCRJobTitleArray|null
     */
    public function getJob_titles()
    {
        return $this->job_titles;
    }
    /**
     * Set job_titles value
     * @param \Webservices\ArrayType\GCRJobTitleArray $job_titles
     * @return \Webservices\StructType\GCRPerson
     */
    public function setJob_titles(\Webservices\ArrayType\GCRJobTitleArray $job_titles = null)
    {
        $this->job_titles = $job_titles;
        return $this;
    }
    /**
     * Get financial_calamities value
     * @return \Webservices\ArrayType\GCRFinancialCalamityArray|null
     */
    public function getFinancial_calamities()
    {
        return $this->financial_calamities;
    }
    /**
     * Set financial_calamities value
     * @param \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities
     * @return \Webservices\StructType\GCRPerson
     */
    public function setFinancial_calamities(\Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null)
    {
        $this->financial_calamities = $financial_calamities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRPerson
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
