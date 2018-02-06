<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompliancePerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CompliancePerson extends AbstractStructBase
{
    /**
     * The compliance_person_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $compliance_person_id;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $last_name;
    /**
     * The sanctions
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\ComplianceSanctionReferenceArray
     */
    public $sanctions;
    /**
     * The flags
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\StringArray
     */
    public $flags;
    /**
     * The aliases
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\StringArray
     */
    public $aliases;
    /**
     * The addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\ComplianceAddressReferenceArray
     */
    public $addresses;
    /**
     * The roles
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\ComplianceRoleReferenceArray
     */
    public $roles;
    /**
     * The related_businesses
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\ComplianceBusinessReferenceArray
     */
    public $related_businesses;
    /**
     * The related_persons
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\CompliancePersonReferenceArray
     */
    public $related_persons;
    /**
     * The notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\ComplianceNoteReferenceArray
     */
    public $notes;
    /**
     * The documents
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\ComplianceDocumentReferenceArray
     */
    public $documents;
    /**
     * The pep_level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $pep_level;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The middle_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $middle_name;
    /**
     * The gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender;
    /**
     * The date_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_birth;
    /**
     * The date_of_death
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_death;
    /**
     * The deceased
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $deceased;
    /**
     * The nationality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nationality;
    /**
     * The image_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $image_url;
    /**
     * The telephone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $telephone_number;
    /**
     * The fax_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fax_number;
    /**
     * The mobile_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mobile_number;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * Constructor method for CompliancePerson
     * @uses CompliancePerson::setCompliance_person_id()
     * @uses CompliancePerson::setLast_name()
     * @uses CompliancePerson::setSanctions()
     * @uses CompliancePerson::setFlags()
     * @uses CompliancePerson::setAliases()
     * @uses CompliancePerson::setAddresses()
     * @uses CompliancePerson::setRoles()
     * @uses CompliancePerson::setRelated_businesses()
     * @uses CompliancePerson::setRelated_persons()
     * @uses CompliancePerson::setNotes()
     * @uses CompliancePerson::setDocuments()
     * @uses CompliancePerson::setPep_level()
     * @uses CompliancePerson::setFirst_name()
     * @uses CompliancePerson::setMiddle_name()
     * @uses CompliancePerson::setGender()
     * @uses CompliancePerson::setDate_of_birth()
     * @uses CompliancePerson::setDate_of_death()
     * @uses CompliancePerson::setDeceased()
     * @uses CompliancePerson::setNationality()
     * @uses CompliancePerson::setImage_url()
     * @uses CompliancePerson::setTelephone_number()
     * @uses CompliancePerson::setFax_number()
     * @uses CompliancePerson::setMobile_number()
     * @uses CompliancePerson::setEmail()
     * @param int $compliance_person_id
     * @param string $last_name
     * @param \Webservices\ArrayType\ComplianceSanctionReferenceArray $sanctions
     * @param \Webservices\ArrayType\StringArray $flags
     * @param \Webservices\ArrayType\StringArray $aliases
     * @param \Webservices\ArrayType\ComplianceAddressReferenceArray $addresses
     * @param \Webservices\ArrayType\ComplianceRoleReferenceArray $roles
     * @param \Webservices\ArrayType\ComplianceBusinessReferenceArray $related_businesses
     * @param \Webservices\ArrayType\CompliancePersonReferenceArray $related_persons
     * @param \Webservices\ArrayType\ComplianceNoteReferenceArray $notes
     * @param \Webservices\ArrayType\ComplianceDocumentReferenceArray $documents
     * @param int $pep_level
     * @param string $first_name
     * @param string $middle_name
     * @param string $gender
     * @param string $date_of_birth
     * @param string $date_of_death
     * @param bool $deceased
     * @param string $nationality
     * @param string $image_url
     * @param string $telephone_number
     * @param string $fax_number
     * @param string $mobile_number
     * @param string $email
     */
    public function __construct($compliance_person_id = null, $last_name = null, \Webservices\ArrayType\ComplianceSanctionReferenceArray $sanctions = null, \Webservices\ArrayType\StringArray $flags = null, \Webservices\ArrayType\StringArray $aliases = null, \Webservices\ArrayType\ComplianceAddressReferenceArray $addresses = null, \Webservices\ArrayType\ComplianceRoleReferenceArray $roles = null, \Webservices\ArrayType\ComplianceBusinessReferenceArray $related_businesses = null, \Webservices\ArrayType\CompliancePersonReferenceArray $related_persons = null, \Webservices\ArrayType\ComplianceNoteReferenceArray $notes = null, \Webservices\ArrayType\ComplianceDocumentReferenceArray $documents = null, $pep_level = null, $first_name = null, $middle_name = null, $gender = null, $date_of_birth = null, $date_of_death = null, $deceased = null, $nationality = null, $image_url = null, $telephone_number = null, $fax_number = null, $mobile_number = null, $email = null)
    {
        $this
            ->setCompliance_person_id($compliance_person_id)
            ->setLast_name($last_name)
            ->setSanctions($sanctions)
            ->setFlags($flags)
            ->setAliases($aliases)
            ->setAddresses($addresses)
            ->setRoles($roles)
            ->setRelated_businesses($related_businesses)
            ->setRelated_persons($related_persons)
            ->setNotes($notes)
            ->setDocuments($documents)
            ->setPep_level($pep_level)
            ->setFirst_name($first_name)
            ->setMiddle_name($middle_name)
            ->setGender($gender)
            ->setDate_of_birth($date_of_birth)
            ->setDate_of_death($date_of_death)
            ->setDeceased($deceased)
            ->setNationality($nationality)
            ->setImage_url($image_url)
            ->setTelephone_number($telephone_number)
            ->setFax_number($fax_number)
            ->setMobile_number($mobile_number)
            ->setEmail($email);
    }
    /**
     * Get compliance_person_id value
     * @return int
     */
    public function getCompliance_person_id()
    {
        return $this->compliance_person_id;
    }
    /**
     * Set compliance_person_id value
     * @param int $compliance_person_id
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setCompliance_person_id($compliance_person_id = null)
    {
        // validation for constraint: int
        if (!is_null($compliance_person_id) && !is_numeric($compliance_person_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compliance_person_id)), __LINE__);
        }
        $this->compliance_person_id = $compliance_person_id;
        return $this;
    }
    /**
     * Get last_name value
     * @return string
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\CompliancePerson
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
     * Get sanctions value
     * @return \Webservices\ArrayType\ComplianceSanctionReferenceArray
     */
    public function getSanctions()
    {
        return $this->sanctions;
    }
    /**
     * Set sanctions value
     * @param \Webservices\ArrayType\ComplianceSanctionReferenceArray $sanctions
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setSanctions(\Webservices\ArrayType\ComplianceSanctionReferenceArray $sanctions = null)
    {
        $this->sanctions = $sanctions;
        return $this;
    }
    /**
     * Get flags value
     * @return \Webservices\ArrayType\StringArray
     */
    public function getFlags()
    {
        return $this->flags;
    }
    /**
     * Set flags value
     * @param \Webservices\ArrayType\StringArray $flags
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setFlags(\Webservices\ArrayType\StringArray $flags = null)
    {
        $this->flags = $flags;
        return $this;
    }
    /**
     * Get aliases value
     * @return \Webservices\ArrayType\StringArray
     */
    public function getAliases()
    {
        return $this->aliases;
    }
    /**
     * Set aliases value
     * @param \Webservices\ArrayType\StringArray $aliases
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setAliases(\Webservices\ArrayType\StringArray $aliases = null)
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * Get addresses value
     * @return \Webservices\ArrayType\ComplianceAddressReferenceArray
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * Set addresses value
     * @param \Webservices\ArrayType\ComplianceAddressReferenceArray $addresses
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setAddresses(\Webservices\ArrayType\ComplianceAddressReferenceArray $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Get roles value
     * @return \Webservices\ArrayType\ComplianceRoleReferenceArray
     */
    public function getRoles()
    {
        return $this->roles;
    }
    /**
     * Set roles value
     * @param \Webservices\ArrayType\ComplianceRoleReferenceArray $roles
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setRoles(\Webservices\ArrayType\ComplianceRoleReferenceArray $roles = null)
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * Get related_businesses value
     * @return \Webservices\ArrayType\ComplianceBusinessReferenceArray
     */
    public function getRelated_businesses()
    {
        return $this->related_businesses;
    }
    /**
     * Set related_businesses value
     * @param \Webservices\ArrayType\ComplianceBusinessReferenceArray $related_businesses
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setRelated_businesses(\Webservices\ArrayType\ComplianceBusinessReferenceArray $related_businesses = null)
    {
        $this->related_businesses = $related_businesses;
        return $this;
    }
    /**
     * Get related_persons value
     * @return \Webservices\ArrayType\CompliancePersonReferenceArray
     */
    public function getRelated_persons()
    {
        return $this->related_persons;
    }
    /**
     * Set related_persons value
     * @param \Webservices\ArrayType\CompliancePersonReferenceArray $related_persons
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setRelated_persons(\Webservices\ArrayType\CompliancePersonReferenceArray $related_persons = null)
    {
        $this->related_persons = $related_persons;
        return $this;
    }
    /**
     * Get notes value
     * @return \Webservices\ArrayType\ComplianceNoteReferenceArray
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Set notes value
     * @param \Webservices\ArrayType\ComplianceNoteReferenceArray $notes
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setNotes(\Webservices\ArrayType\ComplianceNoteReferenceArray $notes = null)
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * Get documents value
     * @return \Webservices\ArrayType\ComplianceDocumentReferenceArray
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param \Webservices\ArrayType\ComplianceDocumentReferenceArray $documents
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setDocuments(\Webservices\ArrayType\ComplianceDocumentReferenceArray $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }
    /**
     * Get pep_level value
     * @return int|null
     */
    public function getPep_level()
    {
        return $this->pep_level;
    }
    /**
     * Set pep_level value
     * @param int $pep_level
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setPep_level($pep_level = null)
    {
        // validation for constraint: int
        if (!is_null($pep_level) && !is_numeric($pep_level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pep_level)), __LINE__);
        }
        $this->pep_level = $pep_level;
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
     * @return \Webservices\StructType\CompliancePerson
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
     * Get middle_name value
     * @return string|null
     */
    public function getMiddle_name()
    {
        return $this->middle_name;
    }
    /**
     * Set middle_name value
     * @param string $middle_name
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setMiddle_name($middle_name = null)
    {
        // validation for constraint: string
        if (!is_null($middle_name) && !is_string($middle_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middle_name)), __LINE__);
        }
        $this->middle_name = $middle_name;
        return $this;
    }
    /**
     * Get gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param string $gender
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        return $this;
    }
    /**
     * Get date_of_birth value
     * @return string|null
     */
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }
    /**
     * Set date_of_birth value
     * @param string $date_of_birth
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setDate_of_birth($date_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_birth) && !is_string($date_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_birth)), __LINE__);
        }
        $this->date_of_birth = $date_of_birth;
        return $this;
    }
    /**
     * Get date_of_death value
     * @return string|null
     */
    public function getDate_of_death()
    {
        return $this->date_of_death;
    }
    /**
     * Set date_of_death value
     * @param string $date_of_death
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setDate_of_death($date_of_death = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_death) && !is_string($date_of_death)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_death)), __LINE__);
        }
        $this->date_of_death = $date_of_death;
        return $this;
    }
    /**
     * Get deceased value
     * @return bool|null
     */
    public function getDeceased()
    {
        return $this->deceased;
    }
    /**
     * Set deceased value
     * @param bool $deceased
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setDeceased($deceased = null)
    {
        // validation for constraint: boolean
        if (!is_null($deceased) && !is_bool($deceased)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deceased)), __LINE__);
        }
        $this->deceased = $deceased;
        return $this;
    }
    /**
     * Get nationality value
     * @return string|null
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setNationality($nationality = null)
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
        return $this;
    }
    /**
     * Get image_url value
     * @return string|null
     */
    public function getImage_url()
    {
        return $this->image_url;
    }
    /**
     * Set image_url value
     * @param string $image_url
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setImage_url($image_url = null)
    {
        // validation for constraint: string
        if (!is_null($image_url) && !is_string($image_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image_url)), __LINE__);
        }
        $this->image_url = $image_url;
        return $this;
    }
    /**
     * Get telephone_number value
     * @return string|null
     */
    public function getTelephone_number()
    {
        return $this->telephone_number;
    }
    /**
     * Set telephone_number value
     * @param string $telephone_number
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setTelephone_number($telephone_number = null)
    {
        // validation for constraint: string
        if (!is_null($telephone_number) && !is_string($telephone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone_number)), __LINE__);
        }
        $this->telephone_number = $telephone_number;
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
     * @return \Webservices\StructType\CompliancePerson
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
     * Get mobile_number value
     * @return string|null
     */
    public function getMobile_number()
    {
        return $this->mobile_number;
    }
    /**
     * Set mobile_number value
     * @param string $mobile_number
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setMobile_number($mobile_number = null)
    {
        // validation for constraint: string
        if (!is_null($mobile_number) && !is_string($mobile_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile_number)), __LINE__);
        }
        $this->mobile_number = $mobile_number;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Webservices\StructType\CompliancePerson
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CompliancePerson
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
