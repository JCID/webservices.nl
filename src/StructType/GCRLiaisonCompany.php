<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRLiaisonCompany StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRLiaisonCompany extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The contact_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRLiaisonContactDetails
     */
    public $contact_details;
    /**
     * The official_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRLiaisonOfficialData
     */
    public $official_data;
    /**
     * The financial_calamities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFinancialCalamityArray
     */
    public $financial_calamities;
    /**
     * Constructor method for GCRLiaisonCompany
     * @uses GCRLiaisonCompany::setGraydon_company_id()
     * @uses GCRLiaisonCompany::setContact_details()
     * @uses GCRLiaisonCompany::setOfficial_data()
     * @uses GCRLiaisonCompany::setFinancial_calamities()
     * @param int $graydon_company_id
     * @param \Webservices\StructType\GCRLiaisonContactDetails $contact_details
     * @param \Webservices\StructType\GCRLiaisonOfficialData $official_data
     * @param \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities
     */
    public function __construct($graydon_company_id = null, \Webservices\StructType\GCRLiaisonContactDetails $contact_details = null, \Webservices\StructType\GCRLiaisonOfficialData $official_data = null, \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContact_details($contact_details)
            ->setOfficial_data($official_data)
            ->setFinancial_calamities($financial_calamities);
    }
    /**
     * Get graydon_company_id value
     * @return int|null
     */
    public function getGraydon_company_id()
    {
        return $this->graydon_company_id;
    }
    /**
     * Set graydon_company_id value
     * @param int $graydon_company_id
     * @return \Webservices\StructType\GCRLiaisonCompany
     */
    public function setGraydon_company_id($graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_company_id) && !is_numeric($graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_company_id)), __LINE__);
        }
        $this->graydon_company_id = $graydon_company_id;
        return $this;
    }
    /**
     * Get contact_details value
     * @return \Webservices\StructType\GCRLiaisonContactDetails|null
     */
    public function getContact_details()
    {
        return $this->contact_details;
    }
    /**
     * Set contact_details value
     * @param \Webservices\StructType\GCRLiaisonContactDetails $contact_details
     * @return \Webservices\StructType\GCRLiaisonCompany
     */
    public function setContact_details(\Webservices\StructType\GCRLiaisonContactDetails $contact_details = null)
    {
        $this->contact_details = $contact_details;
        return $this;
    }
    /**
     * Get official_data value
     * @return \Webservices\StructType\GCRLiaisonOfficialData|null
     */
    public function getOfficial_data()
    {
        return $this->official_data;
    }
    /**
     * Set official_data value
     * @param \Webservices\StructType\GCRLiaisonOfficialData $official_data
     * @return \Webservices\StructType\GCRLiaisonCompany
     */
    public function setOfficial_data(\Webservices\StructType\GCRLiaisonOfficialData $official_data = null)
    {
        $this->official_data = $official_data;
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
     * @return \Webservices\StructType\GCRLiaisonCompany
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
     * @return \Webservices\StructType\GCRLiaisonCompany
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
