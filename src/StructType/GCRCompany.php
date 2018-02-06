<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompany StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompany extends AbstractStructBase
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
     * The positions_in_other_companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRJobTitleArray
     */
    public $positions_in_other_companies;
    /**
     * The annual_figures
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRAnnualFiguresArray
     */
    public $annual_figures;
    /**
     * The financial_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRFinancialDetails
     */
    public $financial_details;
    /**
     * The financial_calamities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFinancialCalamityArray
     */
    public $financial_calamities;
    /**
     * Constructor method for GCRCompany
     * @uses GCRCompany::setGraydon_company_id()
     * @uses GCRCompany::setContact_details()
     * @uses GCRCompany::setOfficial_data()
     * @uses GCRCompany::setHistory()
     * @uses GCRCompany::setSectors_of_industry()
     * @uses GCRCompany::setPositions_in_other_companies()
     * @uses GCRCompany::setAnnual_figures()
     * @uses GCRCompany::setFinancial_details()
     * @uses GCRCompany::setFinancial_calamities()
     * @param int $graydon_company_id
     * @param \Webservices\StructType\GCRContactDetails $contact_details
     * @param \Webservices\StructType\GCROfficialData $official_data
     * @param \Webservices\StructType\GCRHistory $history
     * @param \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry
     * @param \Webservices\ArrayType\GCRJobTitleArray $positions_in_other_companies
     * @param \Webservices\ArrayType\GCRAnnualFiguresArray $annual_figures
     * @param \Webservices\StructType\GCRFinancialDetails $financial_details
     * @param \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities
     */
    public function __construct($graydon_company_id = null, \Webservices\StructType\GCRContactDetails $contact_details = null, \Webservices\StructType\GCROfficialData $official_data = null, \Webservices\StructType\GCRHistory $history = null, \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null, \Webservices\ArrayType\GCRJobTitleArray $positions_in_other_companies = null, \Webservices\ArrayType\GCRAnnualFiguresArray $annual_figures = null, \Webservices\StructType\GCRFinancialDetails $financial_details = null, \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContact_details($contact_details)
            ->setOfficial_data($official_data)
            ->setHistory($history)
            ->setSectors_of_industry($sectors_of_industry)
            ->setPositions_in_other_companies($positions_in_other_companies)
            ->setAnnual_figures($annual_figures)
            ->setFinancial_details($financial_details)
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
     * @return \Webservices\StructType\GCRCompany
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
     * @return \Webservices\StructType\GCRCompany
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
     * @return \Webservices\StructType\GCRCompany
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
     * @return \Webservices\StructType\GCRCompany
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
     * @return \Webservices\StructType\GCRCompany
     */
    public function setSectors_of_industry(\Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null)
    {
        $this->sectors_of_industry = $sectors_of_industry;
        return $this;
    }
    /**
     * Get positions_in_other_companies value
     * @return \Webservices\ArrayType\GCRJobTitleArray|null
     */
    public function getPositions_in_other_companies()
    {
        return $this->positions_in_other_companies;
    }
    /**
     * Set positions_in_other_companies value
     * @param \Webservices\ArrayType\GCRJobTitleArray $positions_in_other_companies
     * @return \Webservices\StructType\GCRCompany
     */
    public function setPositions_in_other_companies(\Webservices\ArrayType\GCRJobTitleArray $positions_in_other_companies = null)
    {
        $this->positions_in_other_companies = $positions_in_other_companies;
        return $this;
    }
    /**
     * Get annual_figures value
     * @return \Webservices\ArrayType\GCRAnnualFiguresArray|null
     */
    public function getAnnual_figures()
    {
        return $this->annual_figures;
    }
    /**
     * Set annual_figures value
     * @param \Webservices\ArrayType\GCRAnnualFiguresArray $annual_figures
     * @return \Webservices\StructType\GCRCompany
     */
    public function setAnnual_figures(\Webservices\ArrayType\GCRAnnualFiguresArray $annual_figures = null)
    {
        $this->annual_figures = $annual_figures;
        return $this;
    }
    /**
     * Get financial_details value
     * @return \Webservices\StructType\GCRFinancialDetails|null
     */
    public function getFinancial_details()
    {
        return $this->financial_details;
    }
    /**
     * Set financial_details value
     * @param \Webservices\StructType\GCRFinancialDetails $financial_details
     * @return \Webservices\StructType\GCRCompany
     */
    public function setFinancial_details(\Webservices\StructType\GCRFinancialDetails $financial_details = null)
    {
        $this->financial_details = $financial_details;
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
     * @return \Webservices\StructType\GCRCompany
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
     * @return \Webservices\StructType\GCRCompany
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
