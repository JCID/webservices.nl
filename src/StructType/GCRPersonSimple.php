<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRPersonSimple StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRPersonSimple extends AbstractStructBase
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
     * Constructor method for GCRPersonSimple
     * @uses GCRPersonSimple::setGraydon_person_id()
     * @uses GCRPersonSimple::setPersonal_details()
     * @uses GCRPersonSimple::setAddress()
     * @uses GCRPersonSimple::setBirth_information()
     * @param int $graydon_person_id
     * @param \Webservices\StructType\GCRPersonalDetails $personal_details
     * @param \Webservices\StructType\GCRAddress $address
     * @param \Webservices\StructType\GCRBirthInformation $birth_information
     */
    public function __construct($graydon_person_id = null, \Webservices\StructType\GCRPersonalDetails $personal_details = null, \Webservices\StructType\GCRAddress $address = null, \Webservices\StructType\GCRBirthInformation $birth_information = null)
    {
        $this
            ->setGraydon_person_id($graydon_person_id)
            ->setPersonal_details($personal_details)
            ->setAddress($address)
            ->setBirth_information($birth_information);
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
     * @return \Webservices\StructType\GCRPersonSimple
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
     * @return \Webservices\StructType\GCRPersonSimple
     */
    public function setPersonal_details(\Webservices\StructType\GCRPersonalDetails $personal_details = null)
    {
        $this->personal_details = $personal_details;
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
     * @return \Webservices\StructType\GCRPersonSimple
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
     * @return \Webservices\StructType\GCRPersonSimple
     */
    public function setBirth_information(\Webservices\StructType\GCRBirthInformation $birth_information = null)
    {
        $this->birth_information = $birth_information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRPersonSimple
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
