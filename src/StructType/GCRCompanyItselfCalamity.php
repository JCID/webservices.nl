<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyItselfCalamity StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyItselfCalamity extends AbstractStructBase
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
     * @var \Webservices\StructType\GCRContactDetails
     */
    public $contact_details;
    /**
     * The official_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCROfficialData
     */
    public $official_data;
    /**
     * The history
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRHistory
     */
    public $history;
    /**
     * The sectors_of_industry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRSectorOfIndustryArray
     */
    public $sectors_of_industry;
    /**
     * The share_holders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRShareHolderArray
     */
    public $share_holders;
    /**
     * The branch_offices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRBranchOfficeArray
     */
    public $branch_offices;
    /**
     * The participations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRParticipationArray
     */
    public $participations;
    /**
     * The import_export
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRImportExport
     */
    public $import_export;
    /**
     * The special_company_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRSpecialCompanyInformationArray
     */
    public $special_company_information;
    /**
     * The financial_calamities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFinancialCalamityArray
     */
    public $financial_calamities;
    /**
     * The concern_liaisons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRLiaisonArray
     */
    public $concern_liaisons;
    /**
     * The company_management
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCompanyManagement
     */
    public $company_management;
    /**
     * Constructor method for GCRCompanyItselfCalamity
     * @uses GCRCompanyItselfCalamity::setGraydon_company_id()
     * @uses GCRCompanyItselfCalamity::setContact_details()
     * @uses GCRCompanyItselfCalamity::setOfficial_data()
     * @uses GCRCompanyItselfCalamity::setHistory()
     * @uses GCRCompanyItselfCalamity::setSectors_of_industry()
     * @uses GCRCompanyItselfCalamity::setShare_holders()
     * @uses GCRCompanyItselfCalamity::setBranch_offices()
     * @uses GCRCompanyItselfCalamity::setParticipations()
     * @uses GCRCompanyItselfCalamity::setImport_export()
     * @uses GCRCompanyItselfCalamity::setSpecial_company_information()
     * @uses GCRCompanyItselfCalamity::setFinancial_calamities()
     * @uses GCRCompanyItselfCalamity::setConcern_liaisons()
     * @uses GCRCompanyItselfCalamity::setCompany_management()
     * @param int $graydon_company_id
     * @param \Webservices\StructType\GCRContactDetails $contact_details
     * @param \Webservices\StructType\GCROfficialData $official_data
     * @param \Webservices\StructType\GCRHistory $history
     * @param \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry
     * @param \Webservices\ArrayType\GCRShareHolderArray $share_holders
     * @param \Webservices\ArrayType\GCRBranchOfficeArray $branch_offices
     * @param \Webservices\ArrayType\GCRParticipationArray $participations
     * @param \Webservices\StructType\GCRImportExport $import_export
     * @param \Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information
     * @param \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities
     * @param \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons
     * @param \Webservices\StructType\GCRCompanyManagement $company_management
     */
    public function __construct($graydon_company_id = null, \Webservices\StructType\GCRContactDetails $contact_details = null, \Webservices\StructType\GCROfficialData $official_data = null, \Webservices\StructType\GCRHistory $history = null, \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null, \Webservices\ArrayType\GCRShareHolderArray $share_holders = null, \Webservices\ArrayType\GCRBranchOfficeArray $branch_offices = null, \Webservices\ArrayType\GCRParticipationArray $participations = null, \Webservices\StructType\GCRImportExport $import_export = null, \Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information = null, \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null, \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons = null, \Webservices\StructType\GCRCompanyManagement $company_management = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContact_details($contact_details)
            ->setOfficial_data($official_data)
            ->setHistory($history)
            ->setSectors_of_industry($sectors_of_industry)
            ->setShare_holders($share_holders)
            ->setBranch_offices($branch_offices)
            ->setParticipations($participations)
            ->setImport_export($import_export)
            ->setSpecial_company_information($special_company_information)
            ->setFinancial_calamities($financial_calamities)
            ->setConcern_liaisons($concern_liaisons)
            ->setCompany_management($company_management);
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
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
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
     * @return \Webservices\StructType\GCRContactDetails|null
     */
    public function getContact_details()
    {
        return $this->contact_details;
    }
    /**
     * Set contact_details value
     * @param \Webservices\StructType\GCRContactDetails $contact_details
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setContact_details(\Webservices\StructType\GCRContactDetails $contact_details = null)
    {
        $this->contact_details = $contact_details;
        return $this;
    }
    /**
     * Get official_data value
     * @return \Webservices\StructType\GCROfficialData|null
     */
    public function getOfficial_data()
    {
        return $this->official_data;
    }
    /**
     * Set official_data value
     * @param \Webservices\StructType\GCROfficialData $official_data
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setOfficial_data(\Webservices\StructType\GCROfficialData $official_data = null)
    {
        $this->official_data = $official_data;
        return $this;
    }
    /**
     * Get history value
     * @return \Webservices\StructType\GCRHistory|null
     */
    public function getHistory()
    {
        return $this->history;
    }
    /**
     * Set history value
     * @param \Webservices\StructType\GCRHistory $history
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setHistory(\Webservices\StructType\GCRHistory $history = null)
    {
        $this->history = $history;
        return $this;
    }
    /**
     * Get sectors_of_industry value
     * @return \Webservices\ArrayType\GCRSectorOfIndustryArray|null
     */
    public function getSectors_of_industry()
    {
        return $this->sectors_of_industry;
    }
    /**
     * Set sectors_of_industry value
     * @param \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setSectors_of_industry(\Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null)
    {
        $this->sectors_of_industry = $sectors_of_industry;
        return $this;
    }
    /**
     * Get share_holders value
     * @return \Webservices\ArrayType\GCRShareHolderArray|null
     */
    public function getShare_holders()
    {
        return $this->share_holders;
    }
    /**
     * Set share_holders value
     * @param \Webservices\ArrayType\GCRShareHolderArray $share_holders
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setShare_holders(\Webservices\ArrayType\GCRShareHolderArray $share_holders = null)
    {
        $this->share_holders = $share_holders;
        return $this;
    }
    /**
     * Get branch_offices value
     * @return \Webservices\ArrayType\GCRBranchOfficeArray|null
     */
    public function getBranch_offices()
    {
        return $this->branch_offices;
    }
    /**
     * Set branch_offices value
     * @param \Webservices\ArrayType\GCRBranchOfficeArray $branch_offices
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setBranch_offices(\Webservices\ArrayType\GCRBranchOfficeArray $branch_offices = null)
    {
        $this->branch_offices = $branch_offices;
        return $this;
    }
    /**
     * Get participations value
     * @return \Webservices\ArrayType\GCRParticipationArray|null
     */
    public function getParticipations()
    {
        return $this->participations;
    }
    /**
     * Set participations value
     * @param \Webservices\ArrayType\GCRParticipationArray $participations
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setParticipations(\Webservices\ArrayType\GCRParticipationArray $participations = null)
    {
        $this->participations = $participations;
        return $this;
    }
    /**
     * Get import_export value
     * @return \Webservices\StructType\GCRImportExport|null
     */
    public function getImport_export()
    {
        return $this->import_export;
    }
    /**
     * Set import_export value
     * @param \Webservices\StructType\GCRImportExport $import_export
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setImport_export(\Webservices\StructType\GCRImportExport $import_export = null)
    {
        $this->import_export = $import_export;
        return $this;
    }
    /**
     * Get special_company_information value
     * @return \Webservices\ArrayType\GCRSpecialCompanyInformationArray|null
     */
    public function getSpecial_company_information()
    {
        return $this->special_company_information;
    }
    /**
     * Set special_company_information value
     * @param \Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setSpecial_company_information(\Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information = null)
    {
        $this->special_company_information = $special_company_information;
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
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setFinancial_calamities(\Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null)
    {
        $this->financial_calamities = $financial_calamities;
        return $this;
    }
    /**
     * Get concern_liaisons value
     * @return \Webservices\ArrayType\GCRLiaisonArray|null
     */
    public function getConcern_liaisons()
    {
        return $this->concern_liaisons;
    }
    /**
     * Set concern_liaisons value
     * @param \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setConcern_liaisons(\Webservices\ArrayType\GCRLiaisonArray $concern_liaisons = null)
    {
        $this->concern_liaisons = $concern_liaisons;
        return $this;
    }
    /**
     * Get company_management value
     * @return \Webservices\StructType\GCRCompanyManagement|null
     */
    public function getCompany_management()
    {
        return $this->company_management;
    }
    /**
     * Set company_management value
     * @param \Webservices\StructType\GCRCompanyManagement $company_management
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
     */
    public function setCompany_management(\Webservices\StructType\GCRCompanyManagement $company_management = null)
    {
        $this->company_management = $company_management;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCompanyItselfCalamity
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
