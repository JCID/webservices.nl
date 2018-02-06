<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceBusiness StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceBusiness extends AbstractStructBase
{
    /**
     * The compliance_business_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $compliance_business_id;
    /**
     * The business_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $business_name;
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
     * The website_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $website_url;
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
     * Constructor method for ComplianceBusiness
     * @uses ComplianceBusiness::setCompliance_business_id()
     * @uses ComplianceBusiness::setBusiness_name()
     * @uses ComplianceBusiness::setSanctions()
     * @uses ComplianceBusiness::setFlags()
     * @uses ComplianceBusiness::setAliases()
     * @uses ComplianceBusiness::setAddresses()
     * @uses ComplianceBusiness::setRelated_businesses()
     * @uses ComplianceBusiness::setRelated_persons()
     * @uses ComplianceBusiness::setNotes()
     * @uses ComplianceBusiness::setDocuments()
     * @uses ComplianceBusiness::setWebsite_url()
     * @uses ComplianceBusiness::setTelephone_number()
     * @uses ComplianceBusiness::setFax_number()
     * @param int $compliance_business_id
     * @param string $business_name
     * @param \Webservices\ArrayType\ComplianceSanctionReferenceArray $sanctions
     * @param \Webservices\ArrayType\StringArray $flags
     * @param \Webservices\ArrayType\StringArray $aliases
     * @param \Webservices\ArrayType\ComplianceAddressReferenceArray $addresses
     * @param \Webservices\ArrayType\ComplianceBusinessReferenceArray $related_businesses
     * @param \Webservices\ArrayType\CompliancePersonReferenceArray $related_persons
     * @param \Webservices\ArrayType\ComplianceNoteReferenceArray $notes
     * @param \Webservices\ArrayType\ComplianceDocumentReferenceArray $documents
     * @param string $website_url
     * @param string $telephone_number
     * @param string $fax_number
     */
    public function __construct($compliance_business_id = null, $business_name = null, \Webservices\ArrayType\ComplianceSanctionReferenceArray $sanctions = null, \Webservices\ArrayType\StringArray $flags = null, \Webservices\ArrayType\StringArray $aliases = null, \Webservices\ArrayType\ComplianceAddressReferenceArray $addresses = null, \Webservices\ArrayType\ComplianceBusinessReferenceArray $related_businesses = null, \Webservices\ArrayType\CompliancePersonReferenceArray $related_persons = null, \Webservices\ArrayType\ComplianceNoteReferenceArray $notes = null, \Webservices\ArrayType\ComplianceDocumentReferenceArray $documents = null, $website_url = null, $telephone_number = null, $fax_number = null)
    {
        $this
            ->setCompliance_business_id($compliance_business_id)
            ->setBusiness_name($business_name)
            ->setSanctions($sanctions)
            ->setFlags($flags)
            ->setAliases($aliases)
            ->setAddresses($addresses)
            ->setRelated_businesses($related_businesses)
            ->setRelated_persons($related_persons)
            ->setNotes($notes)
            ->setDocuments($documents)
            ->setWebsite_url($website_url)
            ->setTelephone_number($telephone_number)
            ->setFax_number($fax_number);
    }
    /**
     * Get compliance_business_id value
     * @return int
     */
    public function getCompliance_business_id()
    {
        return $this->compliance_business_id;
    }
    /**
     * Set compliance_business_id value
     * @param int $compliance_business_id
     * @return \Webservices\StructType\ComplianceBusiness
     */
    public function setCompliance_business_id($compliance_business_id = null)
    {
        // validation for constraint: int
        if (!is_null($compliance_business_id) && !is_numeric($compliance_business_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compliance_business_id)), __LINE__);
        }
        $this->compliance_business_id = $compliance_business_id;
        return $this;
    }
    /**
     * Get business_name value
     * @return string
     */
    public function getBusiness_name()
    {
        return $this->business_name;
    }
    /**
     * Set business_name value
     * @param string $business_name
     * @return \Webservices\StructType\ComplianceBusiness
     */
    public function setBusiness_name($business_name = null)
    {
        // validation for constraint: string
        if (!is_null($business_name) && !is_string($business_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_name)), __LINE__);
        }
        $this->business_name = $business_name;
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
     */
    public function setAddresses(\Webservices\ArrayType\ComplianceAddressReferenceArray $addresses = null)
    {
        $this->addresses = $addresses;
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
     */
    public function setDocuments(\Webservices\ArrayType\ComplianceDocumentReferenceArray $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }
    /**
     * Get website_url value
     * @return string|null
     */
    public function getWebsite_url()
    {
        return $this->website_url;
    }
    /**
     * Set website_url value
     * @param string $website_url
     * @return \Webservices\StructType\ComplianceBusiness
     */
    public function setWebsite_url($website_url = null)
    {
        // validation for constraint: string
        if (!is_null($website_url) && !is_string($website_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($website_url)), __LINE__);
        }
        $this->website_url = $website_url;
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * @return \Webservices\StructType\ComplianceBusiness
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceBusiness
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
