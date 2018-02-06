<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyItself StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyItself extends AbstractStructBase
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
     * The personnel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRPersonnel
     */
    public $personnel;
    /**
     * The credit_advice_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCreditAdviceData
     */
    public $credit_advice_data;
    /**
     * The sectors_of_industry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRSectorOfIndustryArray
     */
    public $sectors_of_industry;
    /**
     * The calamity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCalamity
     */
    public $calamity;
    /**
     * The payment_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRPaymentInformationArray
     */
    public $payment_information;
    /**
     * The declarations_of_liability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRDeclarationOfLiabilityArray
     */
    public $declarations_of_liability;
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
     * Constructor method for GCRCompanyItself
     * @uses GCRCompanyItself::setGraydon_company_id()
     * @uses GCRCompanyItself::setContact_details()
     * @uses GCRCompanyItself::setOfficial_data()
     * @uses GCRCompanyItself::setHistory()
     * @uses GCRCompanyItself::setPositions_in_other_companies()
     * @uses GCRCompanyItself::setAnnual_figures()
     * @uses GCRCompanyItself::setFinancial_details()
     * @uses GCRCompanyItself::setFinancial_calamities()
     * @uses GCRCompanyItself::setPersonnel()
     * @uses GCRCompanyItself::setCredit_advice_data()
     * @uses GCRCompanyItself::setSectors_of_industry()
     * @uses GCRCompanyItself::setCalamity()
     * @uses GCRCompanyItself::setPayment_information()
     * @uses GCRCompanyItself::setDeclarations_of_liability()
     * @uses GCRCompanyItself::setConcern_liaisons()
     * @uses GCRCompanyItself::setCompany_management()
     * @param int $graydon_company_id
     * @param \Webservices\StructType\GCRContactDetails $contact_details
     * @param \Webservices\StructType\GCROfficialData $official_data
     * @param \Webservices\StructType\GCRHistory $history
     * @param \Webservices\ArrayType\GCRJobTitleArray $positions_in_other_companies
     * @param \Webservices\ArrayType\GCRAnnualFiguresArray $annual_figures
     * @param \Webservices\StructType\GCRFinancialDetails $financial_details
     * @param \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities
     * @param \Webservices\StructType\GCRPersonnel $personnel
     * @param \Webservices\StructType\GCRCreditAdviceData $credit_advice_data
     * @param \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry
     * @param \Webservices\StructType\GCRCalamity $calamity
     * @param \Webservices\ArrayType\GCRPaymentInformationArray $payment_information
     * @param \Webservices\ArrayType\GCRDeclarationOfLiabilityArray $declarations_of_liability
     * @param \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons
     * @param \Webservices\StructType\GCRCompanyManagement $company_management
     */
    public function __construct($graydon_company_id = null, \Webservices\StructType\GCRContactDetails $contact_details = null, \Webservices\StructType\GCROfficialData $official_data = null, \Webservices\StructType\GCRHistory $history = null, \Webservices\ArrayType\GCRJobTitleArray $positions_in_other_companies = null, \Webservices\ArrayType\GCRAnnualFiguresArray $annual_figures = null, \Webservices\StructType\GCRFinancialDetails $financial_details = null, \Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null, \Webservices\StructType\GCRPersonnel $personnel = null, \Webservices\StructType\GCRCreditAdviceData $credit_advice_data = null, \Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null, \Webservices\StructType\GCRCalamity $calamity = null, \Webservices\ArrayType\GCRPaymentInformationArray $payment_information = null, \Webservices\ArrayType\GCRDeclarationOfLiabilityArray $declarations_of_liability = null, \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons = null, \Webservices\StructType\GCRCompanyManagement $company_management = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContact_details($contact_details)
            ->setOfficial_data($official_data)
            ->setHistory($history)
            ->setPositions_in_other_companies($positions_in_other_companies)
            ->setAnnual_figures($annual_figures)
            ->setFinancial_details($financial_details)
            ->setFinancial_calamities($financial_calamities)
            ->setPersonnel($personnel)
            ->setCredit_advice_data($credit_advice_data)
            ->setSectors_of_industry($sectors_of_industry)
            ->setCalamity($calamity)
            ->setPayment_information($payment_information)
            ->setDeclarations_of_liability($declarations_of_liability)
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setHistory(\Webservices\StructType\GCRHistory $history = null)
    {
        $this->history = $history;
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setFinancial_calamities(\Webservices\ArrayType\GCRFinancialCalamityArray $financial_calamities = null)
    {
        $this->financial_calamities = $financial_calamities;
        return $this;
    }
    /**
     * Get personnel value
     * @return \Webservices\StructType\GCRPersonnel|null
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
    /**
     * Set personnel value
     * @param \Webservices\StructType\GCRPersonnel $personnel
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setPersonnel(\Webservices\StructType\GCRPersonnel $personnel = null)
    {
        $this->personnel = $personnel;
        return $this;
    }
    /**
     * Get credit_advice_data value
     * @return \Webservices\StructType\GCRCreditAdviceData|null
     */
    public function getCredit_advice_data()
    {
        return $this->credit_advice_data;
    }
    /**
     * Set credit_advice_data value
     * @param \Webservices\StructType\GCRCreditAdviceData $credit_advice_data
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setCredit_advice_data(\Webservices\StructType\GCRCreditAdviceData $credit_advice_data = null)
    {
        $this->credit_advice_data = $credit_advice_data;
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
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setSectors_of_industry(\Webservices\ArrayType\GCRSectorOfIndustryArray $sectors_of_industry = null)
    {
        $this->sectors_of_industry = $sectors_of_industry;
        return $this;
    }
    /**
     * Get calamity value
     * @return \Webservices\StructType\GCRCalamity|null
     */
    public function getCalamity()
    {
        return $this->calamity;
    }
    /**
     * Set calamity value
     * @param \Webservices\StructType\GCRCalamity $calamity
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setCalamity(\Webservices\StructType\GCRCalamity $calamity = null)
    {
        $this->calamity = $calamity;
        return $this;
    }
    /**
     * Get payment_information value
     * @return \Webservices\ArrayType\GCRPaymentInformationArray|null
     */
    public function getPayment_information()
    {
        return $this->payment_information;
    }
    /**
     * Set payment_information value
     * @param \Webservices\ArrayType\GCRPaymentInformationArray $payment_information
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setPayment_information(\Webservices\ArrayType\GCRPaymentInformationArray $payment_information = null)
    {
        $this->payment_information = $payment_information;
        return $this;
    }
    /**
     * Get declarations_of_liability value
     * @return \Webservices\ArrayType\GCRDeclarationOfLiabilityArray|null
     */
    public function getDeclarations_of_liability()
    {
        return $this->declarations_of_liability;
    }
    /**
     * Set declarations_of_liability value
     * @param \Webservices\ArrayType\GCRDeclarationOfLiabilityArray $declarations_of_liability
     * @return \Webservices\StructType\GCRCompanyItself
     */
    public function setDeclarations_of_liability(\Webservices\ArrayType\GCRDeclarationOfLiabilityArray $declarations_of_liability = null)
    {
        $this->declarations_of_liability = $declarations_of_liability;
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
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
     * @return \Webservices\StructType\GCRCompanyItself
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
