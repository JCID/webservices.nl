<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeCompanyReportFull StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeCompanyReportFull extends AbstractStructBase
{
    /**
     * The company_id
     * @var string
     */
    public $company_id;
    /**
     * The order_number
     * @var int
     */
    public $order_number;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The company_summary
     * @var \Webservices\StructType\CreditsafeLtdCompanySummary
     */
    public $company_summary;
    /**
     * The company_identification
     * @var \Webservices\StructType\CreditsafeLtdCompanyIdentification
     */
    public $company_identification;
    /**
     * The credit_score
     * @var \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public $credit_score;
    /**
     * The contact_information
     * @var \Webservices\StructType\CreditsafeLtdContactInformation
     */
    public $contact_information;
    /**
     * The share_capital_structure
     * @var \Webservices\StructType\CreditsafeLtdShareCapitalStructure
     */
    public $share_capital_structure;
    /**
     * The directors
     * @var \Webservices\StructType\CreditsafeLtdDirectors
     */
    public $directors;
    /**
     * The other_information
     * @var \Webservices\StructType\CreditsafeLtdOtherInformation
     */
    public $other_information;
    /**
     * The group_structure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeLtdGroupStructure
     */
    public $group_structure;
    /**
     * The financial_statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeLtdFinancialStatementArray
     */
    public $financial_statements;
    /**
     * The additional_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeAdditionalInformation
     */
    public $additional_information;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document;
    /**
     * Constructor method for CreditsafeCompanyReportFull
     * @uses CreditsafeCompanyReportFull::setCompany_id()
     * @uses CreditsafeCompanyReportFull::setOrder_number()
     * @uses CreditsafeCompanyReportFull::setLanguage()
     * @uses CreditsafeCompanyReportFull::setCompany_summary()
     * @uses CreditsafeCompanyReportFull::setCompany_identification()
     * @uses CreditsafeCompanyReportFull::setCredit_score()
     * @uses CreditsafeCompanyReportFull::setContact_information()
     * @uses CreditsafeCompanyReportFull::setShare_capital_structure()
     * @uses CreditsafeCompanyReportFull::setDirectors()
     * @uses CreditsafeCompanyReportFull::setOther_information()
     * @uses CreditsafeCompanyReportFull::setGroup_structure()
     * @uses CreditsafeCompanyReportFull::setFinancial_statements()
     * @uses CreditsafeCompanyReportFull::setAdditional_information()
     * @uses CreditsafeCompanyReportFull::setDocument()
     * @param string $company_id
     * @param int $order_number
     * @param string $language
     * @param \Webservices\StructType\CreditsafeLtdCompanySummary $company_summary
     * @param \Webservices\StructType\CreditsafeLtdCompanyIdentification $company_identification
     * @param \Webservices\StructType\CreditsafeLtdCreditScore $credit_score
     * @param \Webservices\StructType\CreditsafeLtdContactInformation $contact_information
     * @param \Webservices\StructType\CreditsafeLtdShareCapitalStructure $share_capital_structure
     * @param \Webservices\StructType\CreditsafeLtdDirectors $directors
     * @param \Webservices\StructType\CreditsafeLtdOtherInformation $other_information
     * @param \Webservices\StructType\CreditsafeLtdGroupStructure $group_structure
     * @param \Webservices\ArrayType\CreditsafeLtdFinancialStatementArray $financial_statements
     * @param \Webservices\StructType\CreditsafeAdditionalInformation $additional_information
     * @param string $document
     */
    public function __construct($company_id = null, $order_number = null, $language = null, \Webservices\StructType\CreditsafeLtdCompanySummary $company_summary = null, \Webservices\StructType\CreditsafeLtdCompanyIdentification $company_identification = null, \Webservices\StructType\CreditsafeLtdCreditScore $credit_score = null, \Webservices\StructType\CreditsafeLtdContactInformation $contact_information = null, \Webservices\StructType\CreditsafeLtdShareCapitalStructure $share_capital_structure = null, \Webservices\StructType\CreditsafeLtdDirectors $directors = null, \Webservices\StructType\CreditsafeLtdOtherInformation $other_information = null, \Webservices\StructType\CreditsafeLtdGroupStructure $group_structure = null, \Webservices\ArrayType\CreditsafeLtdFinancialStatementArray $financial_statements = null, \Webservices\StructType\CreditsafeAdditionalInformation $additional_information = null, $document = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setOrder_number($order_number)
            ->setLanguage($language)
            ->setCompany_summary($company_summary)
            ->setCompany_identification($company_identification)
            ->setCredit_score($credit_score)
            ->setContact_information($contact_information)
            ->setShare_capital_structure($share_capital_structure)
            ->setDirectors($directors)
            ->setOther_information($other_information)
            ->setGroup_structure($group_structure)
            ->setFinancial_statements($financial_statements)
            ->setAdditional_information($additional_information)
            ->setDocument($document);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->company_id;
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $company_id;
        return $this;
    }
    /**
     * Get order_number value
     * @return int|null
     */
    public function getOrder_number()
    {
        return $this->order_number;
    }
    /**
     * Set order_number value
     * @param int $order_number
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setOrder_number($order_number = null)
    {
        // validation for constraint: int
        if (!is_null($order_number) && !is_numeric($order_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order_number)), __LINE__);
        }
        $this->order_number = $order_number;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get company_summary value
     * @return \Webservices\StructType\CreditsafeLtdCompanySummary|null
     */
    public function getCompany_summary()
    {
        return $this->company_summary;
    }
    /**
     * Set company_summary value
     * @param \Webservices\StructType\CreditsafeLtdCompanySummary $company_summary
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setCompany_summary(\Webservices\StructType\CreditsafeLtdCompanySummary $company_summary = null)
    {
        $this->company_summary = $company_summary;
        return $this;
    }
    /**
     * Get company_identification value
     * @return \Webservices\StructType\CreditsafeLtdCompanyIdentification|null
     */
    public function getCompany_identification()
    {
        return $this->company_identification;
    }
    /**
     * Set company_identification value
     * @param \Webservices\StructType\CreditsafeLtdCompanyIdentification $company_identification
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setCompany_identification(\Webservices\StructType\CreditsafeLtdCompanyIdentification $company_identification = null)
    {
        $this->company_identification = $company_identification;
        return $this;
    }
    /**
     * Get credit_score value
     * @return \Webservices\StructType\CreditsafeLtdCreditScore|null
     */
    public function getCredit_score()
    {
        return $this->credit_score;
    }
    /**
     * Set credit_score value
     * @param \Webservices\StructType\CreditsafeLtdCreditScore $credit_score
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setCredit_score(\Webservices\StructType\CreditsafeLtdCreditScore $credit_score = null)
    {
        $this->credit_score = $credit_score;
        return $this;
    }
    /**
     * Get contact_information value
     * @return \Webservices\StructType\CreditsafeLtdContactInformation|null
     */
    public function getContact_information()
    {
        return $this->contact_information;
    }
    /**
     * Set contact_information value
     * @param \Webservices\StructType\CreditsafeLtdContactInformation $contact_information
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setContact_information(\Webservices\StructType\CreditsafeLtdContactInformation $contact_information = null)
    {
        $this->contact_information = $contact_information;
        return $this;
    }
    /**
     * Get share_capital_structure value
     * @return \Webservices\StructType\CreditsafeLtdShareCapitalStructure|null
     */
    public function getShare_capital_structure()
    {
        return $this->share_capital_structure;
    }
    /**
     * Set share_capital_structure value
     * @param \Webservices\StructType\CreditsafeLtdShareCapitalStructure $share_capital_structure
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setShare_capital_structure(\Webservices\StructType\CreditsafeLtdShareCapitalStructure $share_capital_structure = null)
    {
        $this->share_capital_structure = $share_capital_structure;
        return $this;
    }
    /**
     * Get directors value
     * @return \Webservices\StructType\CreditsafeLtdDirectors|null
     */
    public function getDirectors()
    {
        return $this->directors;
    }
    /**
     * Set directors value
     * @param \Webservices\StructType\CreditsafeLtdDirectors $directors
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setDirectors(\Webservices\StructType\CreditsafeLtdDirectors $directors = null)
    {
        $this->directors = $directors;
        return $this;
    }
    /**
     * Get other_information value
     * @return \Webservices\StructType\CreditsafeLtdOtherInformation|null
     */
    public function getOther_information()
    {
        return $this->other_information;
    }
    /**
     * Set other_information value
     * @param \Webservices\StructType\CreditsafeLtdOtherInformation $other_information
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setOther_information(\Webservices\StructType\CreditsafeLtdOtherInformation $other_information = null)
    {
        $this->other_information = $other_information;
        return $this;
    }
    /**
     * Get group_structure value
     * @return \Webservices\StructType\CreditsafeLtdGroupStructure|null
     */
    public function getGroup_structure()
    {
        return $this->group_structure;
    }
    /**
     * Set group_structure value
     * @param \Webservices\StructType\CreditsafeLtdGroupStructure $group_structure
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setGroup_structure(\Webservices\StructType\CreditsafeLtdGroupStructure $group_structure = null)
    {
        $this->group_structure = $group_structure;
        return $this;
    }
    /**
     * Get financial_statements value
     * @return \Webservices\ArrayType\CreditsafeLtdFinancialStatementArray|null
     */
    public function getFinancial_statements()
    {
        return $this->financial_statements;
    }
    /**
     * Set financial_statements value
     * @param \Webservices\ArrayType\CreditsafeLtdFinancialStatementArray $financial_statements
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setFinancial_statements(\Webservices\ArrayType\CreditsafeLtdFinancialStatementArray $financial_statements = null)
    {
        $this->financial_statements = $financial_statements;
        return $this;
    }
    /**
     * Get additional_information value
     * @return \Webservices\StructType\CreditsafeAdditionalInformation|null
     */
    public function getAdditional_information()
    {
        return $this->additional_information;
    }
    /**
     * Set additional_information value
     * @param \Webservices\StructType\CreditsafeAdditionalInformation $additional_information
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setAdditional_information(\Webservices\StructType\CreditsafeAdditionalInformation $additional_information = null)
    {
        $this->additional_information = $additional_information;
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeCompanyReportFull
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
