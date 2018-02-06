<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessDossierV3 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessDossierV3 extends AbstractStructBase
{
    /**
     * The update_info
     * @var \Webservices\StructType\DutchBusinessUpdateReference
     */
    public $update_info;
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The main_establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $main_establishment_number;
    /**
     * The indication_main_establishment
     * @var bool
     */
    public $indication_main_establishment;
    /**
     * The rsin_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rsin_number;
    /**
     * The chamber_number
     * @var string
     */
    public $chamber_number;
    /**
     * The legal_form_code
     * @var string
     */
    public $legal_form_code;
    /**
     * The legal_form_text
     * @var string
     */
    public $legal_form_text;
    /**
     * The indication_organisation_code
     * @var string
     */
    public $indication_organisation_code;
    /**
     * The legal_name
     * @var string
     */
    public $legal_name;
    /**
     * The trade_name_45
     * @var string
     */
    public $trade_name_45;
    /**
     * The trade_name_full
     * @var string
     */
    public $trade_name_full;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * The establishment_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessFormattedAddress
     */
    public $establishment_address;
    /**
     * The correspondence_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessFormattedAddress
     */
    public $correspondence_address;
    /**
     * The telephone_number
     * @var string
     */
    public $telephone_number;
    /**
     * The mobile_number
     * @var string
     */
    public $mobile_number;
    /**
     * The domain_name
     * @var string
     */
    public $domain_name;
    /**
     * The contact_title1
     * @var string
     */
    public $contact_title1;
    /**
     * The contact_title2
     * @var string
     */
    public $contact_title2;
    /**
     * The contact_initials
     * @var string
     */
    public $contact_initials;
    /**
     * The contact_prefix
     * @var string
     */
    public $contact_prefix;
    /**
     * The contact_surname
     * @var string
     */
    public $contact_surname;
    /**
     * The contact_gender
     * @var string
     */
    public $contact_gender;
    /**
     * The primary_sbi_code
     * @var string
     */
    public $primary_sbi_code;
    /**
     * The secondary_sbi_code1
     * @var string
     */
    public $secondary_sbi_code1;
    /**
     * The secondary_sbi_code2
     * @var string
     */
    public $secondary_sbi_code2;
    /**
     * The primary_sbi_code_text
     * @var string
     */
    public $primary_sbi_code_text;
    /**
     * The secondary_sbi_code1_text
     * @var string
     */
    public $secondary_sbi_code1_text;
    /**
     * The secondary_sbi_code2_text
     * @var string
     */
    public $secondary_sbi_code2_text;
    /**
     * The personnel
     * @var int
     */
    public $personnel;
    /**
     * The class_personnel
     * @var int
     */
    public $class_personnel;
    /**
     * The personnel_fulltime
     * @var int
     */
    public $personnel_fulltime;
    /**
     * The class_personnel_fulltime
     * @var int
     */
    public $class_personnel_fulltime;
    /**
     * The personnel_reference_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $personnel_reference_date;
    /**
     * The personnel_ci
     * @var int
     */
    public $personnel_ci;
    /**
     * The class_personnel_ci
     * @var int
     */
    public $class_personnel_ci;
    /**
     * The personnel_ci_reference_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $personnel_ci_reference_date;
    /**
     * The indication_import
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indication_import;
    /**
     * The indication_export
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indication_export;
    /**
     * The indication_economically_active
     * @var bool
     */
    public $indication_economically_active;
    /**
     * The indication_non_mailing
     * @var bool
     */
    public $indication_non_mailing;
    /**
     * The indication_bankruptcy
     * @var bool
     */
    public $indication_bankruptcy;
    /**
     * The indication_dip
     * @var bool
     */
    public $indication_dip;
    /**
     * The insolvencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessInsolvencyArray
     */
    public $insolvencies;
    /**
     * The authorized_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $authorized_share_capital;
    /**
     * The authorized_share_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $authorized_share_capital_currency;
    /**
     * The paid_up_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paid_up_share_capital;
    /**
     * The paid_up_share_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paid_up_share_capital_currency;
    /**
     * The issued_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $issued_share_capital;
    /**
     * The issued_share_capital_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issued_share_capital_currency;
    /**
     * The founding_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $founding_date;
    /**
     * The discontinuation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $discontinuation_date;
    /**
     * The continuation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $continuation_date;
    /**
     * The establishment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV3
     */
    public $establishment_date;
    /**
     * The annual_financial_statement_summary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary
     */
    public $annual_financial_statement_summary;
    /**
     * The structure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessStructure
     */
    public $structure;
    /**
     * The sbi_collection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessSBICollection
     */
    public $sbi_collection;
    /**
     * Constructor method for DutchBusinessDossierV3
     * @uses DutchBusinessDossierV3::setUpdate_info()
     * @uses DutchBusinessDossierV3::setDossier_number()
     * @uses DutchBusinessDossierV3::setEstablishment_number()
     * @uses DutchBusinessDossierV3::setMain_establishment_number()
     * @uses DutchBusinessDossierV3::setIndication_main_establishment()
     * @uses DutchBusinessDossierV3::setRsin_number()
     * @uses DutchBusinessDossierV3::setChamber_number()
     * @uses DutchBusinessDossierV3::setLegal_form_code()
     * @uses DutchBusinessDossierV3::setLegal_form_text()
     * @uses DutchBusinessDossierV3::setIndication_organisation_code()
     * @uses DutchBusinessDossierV3::setLegal_name()
     * @uses DutchBusinessDossierV3::setTrade_name_45()
     * @uses DutchBusinessDossierV3::setTrade_name_full()
     * @uses DutchBusinessDossierV3::setTrade_names()
     * @uses DutchBusinessDossierV3::setEstablishment_address()
     * @uses DutchBusinessDossierV3::setCorrespondence_address()
     * @uses DutchBusinessDossierV3::setTelephone_number()
     * @uses DutchBusinessDossierV3::setMobile_number()
     * @uses DutchBusinessDossierV3::setDomain_name()
     * @uses DutchBusinessDossierV3::setContact_title1()
     * @uses DutchBusinessDossierV3::setContact_title2()
     * @uses DutchBusinessDossierV3::setContact_initials()
     * @uses DutchBusinessDossierV3::setContact_prefix()
     * @uses DutchBusinessDossierV3::setContact_surname()
     * @uses DutchBusinessDossierV3::setContact_gender()
     * @uses DutchBusinessDossierV3::setPrimary_sbi_code()
     * @uses DutchBusinessDossierV3::setSecondary_sbi_code1()
     * @uses DutchBusinessDossierV3::setSecondary_sbi_code2()
     * @uses DutchBusinessDossierV3::setPrimary_sbi_code_text()
     * @uses DutchBusinessDossierV3::setSecondary_sbi_code1_text()
     * @uses DutchBusinessDossierV3::setSecondary_sbi_code2_text()
     * @uses DutchBusinessDossierV3::setPersonnel()
     * @uses DutchBusinessDossierV3::setClass_personnel()
     * @uses DutchBusinessDossierV3::setPersonnel_fulltime()
     * @uses DutchBusinessDossierV3::setClass_personnel_fulltime()
     * @uses DutchBusinessDossierV3::setPersonnel_reference_date()
     * @uses DutchBusinessDossierV3::setPersonnel_ci()
     * @uses DutchBusinessDossierV3::setClass_personnel_ci()
     * @uses DutchBusinessDossierV3::setPersonnel_ci_reference_date()
     * @uses DutchBusinessDossierV3::setIndication_import()
     * @uses DutchBusinessDossierV3::setIndication_export()
     * @uses DutchBusinessDossierV3::setIndication_economically_active()
     * @uses DutchBusinessDossierV3::setIndication_non_mailing()
     * @uses DutchBusinessDossierV3::setIndication_bankruptcy()
     * @uses DutchBusinessDossierV3::setIndication_dip()
     * @uses DutchBusinessDossierV3::setInsolvencies()
     * @uses DutchBusinessDossierV3::setAuthorized_share_capital()
     * @uses DutchBusinessDossierV3::setAuthorized_share_capital_currency()
     * @uses DutchBusinessDossierV3::setPaid_up_share_capital()
     * @uses DutchBusinessDossierV3::setPaid_up_share_capital_currency()
     * @uses DutchBusinessDossierV3::setIssued_share_capital()
     * @uses DutchBusinessDossierV3::setIssued_share_capital_currency()
     * @uses DutchBusinessDossierV3::setFounding_date()
     * @uses DutchBusinessDossierV3::setDiscontinuation_date()
     * @uses DutchBusinessDossierV3::setContinuation_date()
     * @uses DutchBusinessDossierV3::setEstablishment_date()
     * @uses DutchBusinessDossierV3::setAnnual_financial_statement_summary()
     * @uses DutchBusinessDossierV3::setStructure()
     * @uses DutchBusinessDossierV3::setSbi_collection()
     * @param \Webservices\StructType\DutchBusinessUpdateReference $update_info
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $main_establishment_number
     * @param bool $indication_main_establishment
     * @param string $rsin_number
     * @param string $chamber_number
     * @param string $legal_form_code
     * @param string $legal_form_text
     * @param string $indication_organisation_code
     * @param string $legal_name
     * @param string $trade_name_45
     * @param string $trade_name_full
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @param \Webservices\StructType\DutchBusinessFormattedAddress $establishment_address
     * @param \Webservices\StructType\DutchBusinessFormattedAddress $correspondence_address
     * @param string $telephone_number
     * @param string $mobile_number
     * @param string $domain_name
     * @param string $contact_title1
     * @param string $contact_title2
     * @param string $contact_initials
     * @param string $contact_prefix
     * @param string $contact_surname
     * @param string $contact_gender
     * @param string $primary_sbi_code
     * @param string $secondary_sbi_code1
     * @param string $secondary_sbi_code2
     * @param string $primary_sbi_code_text
     * @param string $secondary_sbi_code1_text
     * @param string $secondary_sbi_code2_text
     * @param int $personnel
     * @param int $class_personnel
     * @param int $personnel_fulltime
     * @param int $class_personnel_fulltime
     * @param \Webservices\StructType\DutchBusinessDateV3 $personnel_reference_date
     * @param int $personnel_ci
     * @param int $class_personnel_ci
     * @param \Webservices\StructType\DutchBusinessDateV3 $personnel_ci_reference_date
     * @param bool $indication_import
     * @param bool $indication_export
     * @param bool $indication_economically_active
     * @param bool $indication_non_mailing
     * @param bool $indication_bankruptcy
     * @param bool $indication_dip
     * @param \Webservices\ArrayType\DutchBusinessInsolvencyArray $insolvencies
     * @param int $authorized_share_capital
     * @param string $authorized_share_capital_currency
     * @param int $paid_up_share_capital
     * @param string $paid_up_share_capital_currency
     * @param int $issued_share_capital
     * @param string $issued_share_capital_currency
     * @param \Webservices\StructType\DutchBusinessDateV3 $founding_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $discontinuation_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $continuation_date
     * @param \Webservices\StructType\DutchBusinessDateV3 $establishment_date
     * @param \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary $annual_financial_statement_summary
     * @param \Webservices\StructType\DutchBusinessStructure $structure
     * @param \Webservices\StructType\DutchBusinessSBICollection $sbi_collection
     */
    public function __construct(\Webservices\StructType\DutchBusinessUpdateReference $update_info = null, $dossier_number = null, $establishment_number = null, $main_establishment_number = null, $indication_main_establishment = null, $rsin_number = null, $chamber_number = null, $legal_form_code = null, $legal_form_text = null, $indication_organisation_code = null, $legal_name = null, $trade_name_45 = null, $trade_name_full = null, \Webservices\ArrayType\StringArray $trade_names = null, \Webservices\StructType\DutchBusinessFormattedAddress $establishment_address = null, \Webservices\StructType\DutchBusinessFormattedAddress $correspondence_address = null, $telephone_number = null, $mobile_number = null, $domain_name = null, $contact_title1 = null, $contact_title2 = null, $contact_initials = null, $contact_prefix = null, $contact_surname = null, $contact_gender = null, $primary_sbi_code = null, $secondary_sbi_code1 = null, $secondary_sbi_code2 = null, $primary_sbi_code_text = null, $secondary_sbi_code1_text = null, $secondary_sbi_code2_text = null, $personnel = null, $class_personnel = null, $personnel_fulltime = null, $class_personnel_fulltime = null, \Webservices\StructType\DutchBusinessDateV3 $personnel_reference_date = null, $personnel_ci = null, $class_personnel_ci = null, \Webservices\StructType\DutchBusinessDateV3 $personnel_ci_reference_date = null, $indication_import = null, $indication_export = null, $indication_economically_active = null, $indication_non_mailing = null, $indication_bankruptcy = null, $indication_dip = null, \Webservices\ArrayType\DutchBusinessInsolvencyArray $insolvencies = null, $authorized_share_capital = null, $authorized_share_capital_currency = null, $paid_up_share_capital = null, $paid_up_share_capital_currency = null, $issued_share_capital = null, $issued_share_capital_currency = null, \Webservices\StructType\DutchBusinessDateV3 $founding_date = null, \Webservices\StructType\DutchBusinessDateV3 $discontinuation_date = null, \Webservices\StructType\DutchBusinessDateV3 $continuation_date = null, \Webservices\StructType\DutchBusinessDateV3 $establishment_date = null, \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary $annual_financial_statement_summary = null, \Webservices\StructType\DutchBusinessStructure $structure = null, \Webservices\StructType\DutchBusinessSBICollection $sbi_collection = null)
    {
        $this
            ->setUpdate_info($update_info)
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setMain_establishment_number($main_establishment_number)
            ->setIndication_main_establishment($indication_main_establishment)
            ->setRsin_number($rsin_number)
            ->setChamber_number($chamber_number)
            ->setLegal_form_code($legal_form_code)
            ->setLegal_form_text($legal_form_text)
            ->setIndication_organisation_code($indication_organisation_code)
            ->setLegal_name($legal_name)
            ->setTrade_name_45($trade_name_45)
            ->setTrade_name_full($trade_name_full)
            ->setTrade_names($trade_names)
            ->setEstablishment_address($establishment_address)
            ->setCorrespondence_address($correspondence_address)
            ->setTelephone_number($telephone_number)
            ->setMobile_number($mobile_number)
            ->setDomain_name($domain_name)
            ->setContact_title1($contact_title1)
            ->setContact_title2($contact_title2)
            ->setContact_initials($contact_initials)
            ->setContact_prefix($contact_prefix)
            ->setContact_surname($contact_surname)
            ->setContact_gender($contact_gender)
            ->setPrimary_sbi_code($primary_sbi_code)
            ->setSecondary_sbi_code1($secondary_sbi_code1)
            ->setSecondary_sbi_code2($secondary_sbi_code2)
            ->setPrimary_sbi_code_text($primary_sbi_code_text)
            ->setSecondary_sbi_code1_text($secondary_sbi_code1_text)
            ->setSecondary_sbi_code2_text($secondary_sbi_code2_text)
            ->setPersonnel($personnel)
            ->setClass_personnel($class_personnel)
            ->setPersonnel_fulltime($personnel_fulltime)
            ->setClass_personnel_fulltime($class_personnel_fulltime)
            ->setPersonnel_reference_date($personnel_reference_date)
            ->setPersonnel_ci($personnel_ci)
            ->setClass_personnel_ci($class_personnel_ci)
            ->setPersonnel_ci_reference_date($personnel_ci_reference_date)
            ->setIndication_import($indication_import)
            ->setIndication_export($indication_export)
            ->setIndication_economically_active($indication_economically_active)
            ->setIndication_non_mailing($indication_non_mailing)
            ->setIndication_bankruptcy($indication_bankruptcy)
            ->setIndication_dip($indication_dip)
            ->setInsolvencies($insolvencies)
            ->setAuthorized_share_capital($authorized_share_capital)
            ->setAuthorized_share_capital_currency($authorized_share_capital_currency)
            ->setPaid_up_share_capital($paid_up_share_capital)
            ->setPaid_up_share_capital_currency($paid_up_share_capital_currency)
            ->setIssued_share_capital($issued_share_capital)
            ->setIssued_share_capital_currency($issued_share_capital_currency)
            ->setFounding_date($founding_date)
            ->setDiscontinuation_date($discontinuation_date)
            ->setContinuation_date($continuation_date)
            ->setEstablishment_date($establishment_date)
            ->setAnnual_financial_statement_summary($annual_financial_statement_summary)
            ->setStructure($structure)
            ->setSbi_collection($sbi_collection);
    }
    /**
     * Get update_info value
     * @return \Webservices\StructType\DutchBusinessUpdateReference|null
     */
    public function getUpdate_info()
    {
        return $this->update_info;
    }
    /**
     * Set update_info value
     * @param \Webservices\StructType\DutchBusinessUpdateReference $update_info
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setUpdate_info(\Webservices\StructType\DutchBusinessUpdateReference $update_info = null)
    {
        $this->update_info = $update_info;
        return $this;
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get main_establishment_number value
     * @return string|null
     */
    public function getMain_establishment_number()
    {
        return $this->main_establishment_number;
    }
    /**
     * Set main_establishment_number value
     * @param string $main_establishment_number
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setMain_establishment_number($main_establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($main_establishment_number) && !is_string($main_establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($main_establishment_number)), __LINE__);
        }
        $this->main_establishment_number = $main_establishment_number;
        return $this;
    }
    /**
     * Get indication_main_establishment value
     * @return bool|null
     */
    public function getIndication_main_establishment()
    {
        return $this->indication_main_establishment;
    }
    /**
     * Set indication_main_establishment value
     * @param bool $indication_main_establishment
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_main_establishment($indication_main_establishment = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_main_establishment) && !is_bool($indication_main_establishment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_main_establishment)), __LINE__);
        }
        $this->indication_main_establishment = $indication_main_establishment;
        return $this;
    }
    /**
     * Get rsin_number value
     * @return string|null
     */
    public function getRsin_number()
    {
        return $this->rsin_number;
    }
    /**
     * Set rsin_number value
     * @param string $rsin_number
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setRsin_number($rsin_number = null)
    {
        // validation for constraint: string
        if (!is_null($rsin_number) && !is_string($rsin_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rsin_number)), __LINE__);
        }
        $this->rsin_number = $rsin_number;
        return $this;
    }
    /**
     * Get chamber_number value
     * @return string|null
     */
    public function getChamber_number()
    {
        return $this->chamber_number;
    }
    /**
     * Set chamber_number value
     * @param string $chamber_number
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setChamber_number($chamber_number = null)
    {
        // validation for constraint: string
        if (!is_null($chamber_number) && !is_string($chamber_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chamber_number)), __LINE__);
        }
        $this->chamber_number = $chamber_number;
        return $this;
    }
    /**
     * Get legal_form_code value
     * @return string|null
     */
    public function getLegal_form_code()
    {
        return $this->legal_form_code;
    }
    /**
     * Set legal_form_code value
     * @param string $legal_form_code
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setLegal_form_code($legal_form_code = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_code) && !is_string($legal_form_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_code)), __LINE__);
        }
        $this->legal_form_code = $legal_form_code;
        return $this;
    }
    /**
     * Get legal_form_text value
     * @return string|null
     */
    public function getLegal_form_text()
    {
        return $this->legal_form_text;
    }
    /**
     * Set legal_form_text value
     * @param string $legal_form_text
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setLegal_form_text($legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_text) && !is_string($legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_text)), __LINE__);
        }
        $this->legal_form_text = $legal_form_text;
        return $this;
    }
    /**
     * Get indication_organisation_code value
     * @return string|null
     */
    public function getIndication_organisation_code()
    {
        return $this->indication_organisation_code;
    }
    /**
     * Set indication_organisation_code value
     * @param string $indication_organisation_code
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_organisation_code($indication_organisation_code = null)
    {
        // validation for constraint: string
        if (!is_null($indication_organisation_code) && !is_string($indication_organisation_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indication_organisation_code)), __LINE__);
        }
        $this->indication_organisation_code = $indication_organisation_code;
        return $this;
    }
    /**
     * Get legal_name value
     * @return string|null
     */
    public function getLegal_name()
    {
        return $this->legal_name;
    }
    /**
     * Set legal_name value
     * @param string $legal_name
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setLegal_name($legal_name = null)
    {
        // validation for constraint: string
        if (!is_null($legal_name) && !is_string($legal_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_name)), __LINE__);
        }
        $this->legal_name = $legal_name;
        return $this;
    }
    /**
     * Get trade_name value
     * @return trade_name
     */
    public function getTrade_name_45()
    {
        return $this->trade_name_45;
    }
    /**
     * Set trade_name value
     * @param trade_name $trade_name
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setTrade_name_45($trade_name_45 = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name_45) && !is_string($trade_name_45)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name_45)), __LINE__);
        }
        $this->trade_name_45 = $trade_name_45;
        return $this;
    }
    /**
     * Get trade_name_full value
     * @return string|null
     */
    public function getTrade_name_full()
    {
        return $this->trade_name_full;
    }
    /**
     * Set trade_name_full value
     * @param string $trade_name_full
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setTrade_name_full($trade_name_full = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name_full) && !is_string($trade_name_full)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name_full)), __LINE__);
        }
        $this->trade_name_full = $trade_name_full;
        return $this;
    }
    /**
     * Get trade_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTrade_names()
    {
        return $this->trade_names;
    }
    /**
     * Set trade_names value
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Get establishment_address value
     * @return \Webservices\StructType\DutchBusinessFormattedAddress|null
     */
    public function getEstablishment_address()
    {
        return $this->establishment_address;
    }
    /**
     * Set establishment_address value
     * @param \Webservices\StructType\DutchBusinessFormattedAddress $establishment_address
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setEstablishment_address(\Webservices\StructType\DutchBusinessFormattedAddress $establishment_address = null)
    {
        $this->establishment_address = $establishment_address;
        return $this;
    }
    /**
     * Get correspondence_address value
     * @return \Webservices\StructType\DutchBusinessFormattedAddress|null
     */
    public function getCorrespondence_address()
    {
        return $this->correspondence_address;
    }
    /**
     * Set correspondence_address value
     * @param \Webservices\StructType\DutchBusinessFormattedAddress $correspondence_address
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setCorrespondence_address(\Webservices\StructType\DutchBusinessFormattedAddress $correspondence_address = null)
    {
        $this->correspondence_address = $correspondence_address;
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
     * @return \Webservices\StructType\DutchBusinessDossierV3
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
     * @return \Webservices\StructType\DutchBusinessDossierV3
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
     * Get domain_name value
     * @return string|null
     */
    public function getDomain_name()
    {
        return $this->domain_name;
    }
    /**
     * Set domain_name value
     * @param string $domain_name
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setDomain_name($domain_name = null)
    {
        // validation for constraint: string
        if (!is_null($domain_name) && !is_string($domain_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain_name)), __LINE__);
        }
        $this->domain_name = $domain_name;
        return $this;
    }
    /**
     * Get contact_title1 value
     * @return string|null
     */
    public function getContact_title1()
    {
        return $this->contact_title1;
    }
    /**
     * Set contact_title1 value
     * @param string $contact_title1
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContact_title1($contact_title1 = null)
    {
        // validation for constraint: string
        if (!is_null($contact_title1) && !is_string($contact_title1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_title1)), __LINE__);
        }
        $this->contact_title1 = $contact_title1;
        return $this;
    }
    /**
     * Get contact_title2 value
     * @return string|null
     */
    public function getContact_title2()
    {
        return $this->contact_title2;
    }
    /**
     * Set contact_title2 value
     * @param string $contact_title2
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContact_title2($contact_title2 = null)
    {
        // validation for constraint: string
        if (!is_null($contact_title2) && !is_string($contact_title2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_title2)), __LINE__);
        }
        $this->contact_title2 = $contact_title2;
        return $this;
    }
    /**
     * Get contact_initials value
     * @return string|null
     */
    public function getContact_initials()
    {
        return $this->contact_initials;
    }
    /**
     * Set contact_initials value
     * @param string $contact_initials
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContact_initials($contact_initials = null)
    {
        // validation for constraint: string
        if (!is_null($contact_initials) && !is_string($contact_initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_initials)), __LINE__);
        }
        $this->contact_initials = $contact_initials;
        return $this;
    }
    /**
     * Get contact_prefix value
     * @return string|null
     */
    public function getContact_prefix()
    {
        return $this->contact_prefix;
    }
    /**
     * Set contact_prefix value
     * @param string $contact_prefix
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContact_prefix($contact_prefix = null)
    {
        // validation for constraint: string
        if (!is_null($contact_prefix) && !is_string($contact_prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_prefix)), __LINE__);
        }
        $this->contact_prefix = $contact_prefix;
        return $this;
    }
    /**
     * Get contact_surname value
     * @return string|null
     */
    public function getContact_surname()
    {
        return $this->contact_surname;
    }
    /**
     * Set contact_surname value
     * @param string $contact_surname
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContact_surname($contact_surname = null)
    {
        // validation for constraint: string
        if (!is_null($contact_surname) && !is_string($contact_surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_surname)), __LINE__);
        }
        $this->contact_surname = $contact_surname;
        return $this;
    }
    /**
     * Get contact_gender value
     * @return string|null
     */
    public function getContact_gender()
    {
        return $this->contact_gender;
    }
    /**
     * Set contact_gender value
     * @param string $contact_gender
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContact_gender($contact_gender = null)
    {
        // validation for constraint: string
        if (!is_null($contact_gender) && !is_string($contact_gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact_gender)), __LINE__);
        }
        $this->contact_gender = $contact_gender;
        return $this;
    }
    /**
     * Get primary_sbi_code value
     * @return string|null
     */
    public function getPrimary_sbi_code()
    {
        return $this->primary_sbi_code;
    }
    /**
     * Set primary_sbi_code value
     * @param string $primary_sbi_code
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPrimary_sbi_code($primary_sbi_code = null)
    {
        // validation for constraint: string
        if (!is_null($primary_sbi_code) && !is_string($primary_sbi_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primary_sbi_code)), __LINE__);
        }
        $this->primary_sbi_code = $primary_sbi_code;
        return $this;
    }
    /**
     * Get secondary_sbi_code1 value
     * @return string|null
     */
    public function getSecondary_sbi_code1()
    {
        return $this->secondary_sbi_code1;
    }
    /**
     * Set secondary_sbi_code1 value
     * @param string $secondary_sbi_code1
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setSecondary_sbi_code1($secondary_sbi_code1 = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_sbi_code1) && !is_string($secondary_sbi_code1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondary_sbi_code1)), __LINE__);
        }
        $this->secondary_sbi_code1 = $secondary_sbi_code1;
        return $this;
    }
    /**
     * Get secondary_sbi_code2 value
     * @return string|null
     */
    public function getSecondary_sbi_code2()
    {
        return $this->secondary_sbi_code2;
    }
    /**
     * Set secondary_sbi_code2 value
     * @param string $secondary_sbi_code2
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setSecondary_sbi_code2($secondary_sbi_code2 = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_sbi_code2) && !is_string($secondary_sbi_code2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondary_sbi_code2)), __LINE__);
        }
        $this->secondary_sbi_code2 = $secondary_sbi_code2;
        return $this;
    }
    /**
     * Get primary_sbi_code_text value
     * @return string|null
     */
    public function getPrimary_sbi_code_text()
    {
        return $this->primary_sbi_code_text;
    }
    /**
     * Set primary_sbi_code_text value
     * @param string $primary_sbi_code_text
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPrimary_sbi_code_text($primary_sbi_code_text = null)
    {
        // validation for constraint: string
        if (!is_null($primary_sbi_code_text) && !is_string($primary_sbi_code_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primary_sbi_code_text)), __LINE__);
        }
        $this->primary_sbi_code_text = $primary_sbi_code_text;
        return $this;
    }
    /**
     * Get secondary_sbi_code1_text value
     * @return string|null
     */
    public function getSecondary_sbi_code1_text()
    {
        return $this->secondary_sbi_code1_text;
    }
    /**
     * Set secondary_sbi_code1_text value
     * @param string $secondary_sbi_code1_text
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setSecondary_sbi_code1_text($secondary_sbi_code1_text = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_sbi_code1_text) && !is_string($secondary_sbi_code1_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondary_sbi_code1_text)), __LINE__);
        }
        $this->secondary_sbi_code1_text = $secondary_sbi_code1_text;
        return $this;
    }
    /**
     * Get secondary_sbi_code2_text value
     * @return string|null
     */
    public function getSecondary_sbi_code2_text()
    {
        return $this->secondary_sbi_code2_text;
    }
    /**
     * Set secondary_sbi_code2_text value
     * @param string $secondary_sbi_code2_text
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setSecondary_sbi_code2_text($secondary_sbi_code2_text = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_sbi_code2_text) && !is_string($secondary_sbi_code2_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondary_sbi_code2_text)), __LINE__);
        }
        $this->secondary_sbi_code2_text = $secondary_sbi_code2_text;
        return $this;
    }
    /**
     * Get personnel value
     * @return int|null
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
    /**
     * Set personnel value
     * @param int $personnel
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPersonnel($personnel = null)
    {
        // validation for constraint: int
        if (!is_null($personnel) && !is_numeric($personnel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personnel)), __LINE__);
        }
        $this->personnel = $personnel;
        return $this;
    }
    /**
     * Get class_personnel value
     * @return int|null
     */
    public function getClass_personnel()
    {
        return $this->class_personnel;
    }
    /**
     * Set class_personnel value
     * @param int $class_personnel
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setClass_personnel($class_personnel = null)
    {
        // validation for constraint: int
        if (!is_null($class_personnel) && !is_numeric($class_personnel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($class_personnel)), __LINE__);
        }
        $this->class_personnel = $class_personnel;
        return $this;
    }
    /**
     * Get personnel_fulltime value
     * @return int|null
     */
    public function getPersonnel_fulltime()
    {
        return $this->personnel_fulltime;
    }
    /**
     * Set personnel_fulltime value
     * @param int $personnel_fulltime
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPersonnel_fulltime($personnel_fulltime = null)
    {
        // validation for constraint: int
        if (!is_null($personnel_fulltime) && !is_numeric($personnel_fulltime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personnel_fulltime)), __LINE__);
        }
        $this->personnel_fulltime = $personnel_fulltime;
        return $this;
    }
    /**
     * Get class_personnel_fulltime value
     * @return int|null
     */
    public function getClass_personnel_fulltime()
    {
        return $this->class_personnel_fulltime;
    }
    /**
     * Set class_personnel_fulltime value
     * @param int $class_personnel_fulltime
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setClass_personnel_fulltime($class_personnel_fulltime = null)
    {
        // validation for constraint: int
        if (!is_null($class_personnel_fulltime) && !is_numeric($class_personnel_fulltime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($class_personnel_fulltime)), __LINE__);
        }
        $this->class_personnel_fulltime = $class_personnel_fulltime;
        return $this;
    }
    /**
     * Get personnel_reference_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getPersonnel_reference_date()
    {
        return $this->personnel_reference_date;
    }
    /**
     * Set personnel_reference_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $personnel_reference_date
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPersonnel_reference_date(\Webservices\StructType\DutchBusinessDateV3 $personnel_reference_date = null)
    {
        $this->personnel_reference_date = $personnel_reference_date;
        return $this;
    }
    /**
     * Get personnel_ci value
     * @return int|null
     */
    public function getPersonnel_ci()
    {
        return $this->personnel_ci;
    }
    /**
     * Set personnel_ci value
     * @param int $personnel_ci
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPersonnel_ci($personnel_ci = null)
    {
        // validation for constraint: int
        if (!is_null($personnel_ci) && !is_numeric($personnel_ci)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personnel_ci)), __LINE__);
        }
        $this->personnel_ci = $personnel_ci;
        return $this;
    }
    /**
     * Get class_personnel_ci value
     * @return int|null
     */
    public function getClass_personnel_ci()
    {
        return $this->class_personnel_ci;
    }
    /**
     * Set class_personnel_ci value
     * @param int $class_personnel_ci
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setClass_personnel_ci($class_personnel_ci = null)
    {
        // validation for constraint: int
        if (!is_null($class_personnel_ci) && !is_numeric($class_personnel_ci)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($class_personnel_ci)), __LINE__);
        }
        $this->class_personnel_ci = $class_personnel_ci;
        return $this;
    }
    /**
     * Get personnel_ci_reference_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getPersonnel_ci_reference_date()
    {
        return $this->personnel_ci_reference_date;
    }
    /**
     * Set personnel_ci_reference_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $personnel_ci_reference_date
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPersonnel_ci_reference_date(\Webservices\StructType\DutchBusinessDateV3 $personnel_ci_reference_date = null)
    {
        $this->personnel_ci_reference_date = $personnel_ci_reference_date;
        return $this;
    }
    /**
     * Get indication_import value
     * @return bool|null
     */
    public function getIndication_import()
    {
        return $this->indication_import;
    }
    /**
     * Set indication_import value
     * @param bool $indication_import
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_import($indication_import = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_import) && !is_bool($indication_import)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_import)), __LINE__);
        }
        $this->indication_import = $indication_import;
        return $this;
    }
    /**
     * Get indication_export value
     * @return bool|null
     */
    public function getIndication_export()
    {
        return $this->indication_export;
    }
    /**
     * Set indication_export value
     * @param bool $indication_export
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_export($indication_export = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_export) && !is_bool($indication_export)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_export)), __LINE__);
        }
        $this->indication_export = $indication_export;
        return $this;
    }
    /**
     * Get indication_economically_active value
     * @return bool|null
     */
    public function getIndication_economically_active()
    {
        return $this->indication_economically_active;
    }
    /**
     * Set indication_economically_active value
     * @param bool $indication_economically_active
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_economically_active($indication_economically_active = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_economically_active) && !is_bool($indication_economically_active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_economically_active)), __LINE__);
        }
        $this->indication_economically_active = $indication_economically_active;
        return $this;
    }
    /**
     * Get indication_non_mailing value
     * @return bool|null
     */
    public function getIndication_non_mailing()
    {
        return $this->indication_non_mailing;
    }
    /**
     * Set indication_non_mailing value
     * @param bool $indication_non_mailing
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_non_mailing($indication_non_mailing = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_non_mailing) && !is_bool($indication_non_mailing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_non_mailing)), __LINE__);
        }
        $this->indication_non_mailing = $indication_non_mailing;
        return $this;
    }
    /**
     * Get indication_bankruptcy value
     * @return bool|null
     */
    public function getIndication_bankruptcy()
    {
        return $this->indication_bankruptcy;
    }
    /**
     * Set indication_bankruptcy value
     * @param bool $indication_bankruptcy
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_bankruptcy($indication_bankruptcy = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_bankruptcy) && !is_bool($indication_bankruptcy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_bankruptcy)), __LINE__);
        }
        $this->indication_bankruptcy = $indication_bankruptcy;
        return $this;
    }
    /**
     * Get indication_dip value
     * @return bool|null
     */
    public function getIndication_dip()
    {
        return $this->indication_dip;
    }
    /**
     * Set indication_dip value
     * @param bool $indication_dip
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIndication_dip($indication_dip = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_dip) && !is_bool($indication_dip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_dip)), __LINE__);
        }
        $this->indication_dip = $indication_dip;
        return $this;
    }
    /**
     * Get insolvencies value
     * @return \Webservices\ArrayType\DutchBusinessInsolvencyArray|null
     */
    public function getInsolvencies()
    {
        return $this->insolvencies;
    }
    /**
     * Set insolvencies value
     * @param \Webservices\ArrayType\DutchBusinessInsolvencyArray $insolvencies
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setInsolvencies(\Webservices\ArrayType\DutchBusinessInsolvencyArray $insolvencies = null)
    {
        $this->insolvencies = $insolvencies;
        return $this;
    }
    /**
     * Get authorized_share_capital value
     * @return int|null
     */
    public function getAuthorized_share_capital()
    {
        return $this->authorized_share_capital;
    }
    /**
     * Set authorized_share_capital value
     * @param int $authorized_share_capital
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setAuthorized_share_capital($authorized_share_capital = null)
    {
        // validation for constraint: int
        if (!is_null($authorized_share_capital) && !is_numeric($authorized_share_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($authorized_share_capital)), __LINE__);
        }
        $this->authorized_share_capital = $authorized_share_capital;
        return $this;
    }
    /**
     * Get authorized_share_capital_currency value
     * @return string|null
     */
    public function getAuthorized_share_capital_currency()
    {
        return $this->authorized_share_capital_currency;
    }
    /**
     * Set authorized_share_capital_currency value
     * @param string $authorized_share_capital_currency
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setAuthorized_share_capital_currency($authorized_share_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($authorized_share_capital_currency) && !is_string($authorized_share_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorized_share_capital_currency)), __LINE__);
        }
        $this->authorized_share_capital_currency = $authorized_share_capital_currency;
        return $this;
    }
    /**
     * Get paid_up_share_capital value
     * @return int|null
     */
    public function getPaid_up_share_capital()
    {
        return $this->paid_up_share_capital;
    }
    /**
     * Set paid_up_share_capital value
     * @param int $paid_up_share_capital
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPaid_up_share_capital($paid_up_share_capital = null)
    {
        // validation for constraint: int
        if (!is_null($paid_up_share_capital) && !is_numeric($paid_up_share_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paid_up_share_capital)), __LINE__);
        }
        $this->paid_up_share_capital = $paid_up_share_capital;
        return $this;
    }
    /**
     * Get paid_up_share_capital_currency value
     * @return string|null
     */
    public function getPaid_up_share_capital_currency()
    {
        return $this->paid_up_share_capital_currency;
    }
    /**
     * Set paid_up_share_capital_currency value
     * @param string $paid_up_share_capital_currency
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setPaid_up_share_capital_currency($paid_up_share_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($paid_up_share_capital_currency) && !is_string($paid_up_share_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paid_up_share_capital_currency)), __LINE__);
        }
        $this->paid_up_share_capital_currency = $paid_up_share_capital_currency;
        return $this;
    }
    /**
     * Get issued_share_capital value
     * @return int|null
     */
    public function getIssued_share_capital()
    {
        return $this->issued_share_capital;
    }
    /**
     * Set issued_share_capital value
     * @param int $issued_share_capital
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIssued_share_capital($issued_share_capital = null)
    {
        // validation for constraint: int
        if (!is_null($issued_share_capital) && !is_numeric($issued_share_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($issued_share_capital)), __LINE__);
        }
        $this->issued_share_capital = $issued_share_capital;
        return $this;
    }
    /**
     * Get issued_share_capital_currency value
     * @return string|null
     */
    public function getIssued_share_capital_currency()
    {
        return $this->issued_share_capital_currency;
    }
    /**
     * Set issued_share_capital_currency value
     * @param string $issued_share_capital_currency
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setIssued_share_capital_currency($issued_share_capital_currency = null)
    {
        // validation for constraint: string
        if (!is_null($issued_share_capital_currency) && !is_string($issued_share_capital_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issued_share_capital_currency)), __LINE__);
        }
        $this->issued_share_capital_currency = $issued_share_capital_currency;
        return $this;
    }
    /**
     * Get founding_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getFounding_date()
    {
        return $this->founding_date;
    }
    /**
     * Set founding_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $founding_date
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setFounding_date(\Webservices\StructType\DutchBusinessDateV3 $founding_date = null)
    {
        $this->founding_date = $founding_date;
        return $this;
    }
    /**
     * Get discontinuation_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getDiscontinuation_date()
    {
        return $this->discontinuation_date;
    }
    /**
     * Set discontinuation_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $discontinuation_date
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setDiscontinuation_date(\Webservices\StructType\DutchBusinessDateV3 $discontinuation_date = null)
    {
        $this->discontinuation_date = $discontinuation_date;
        return $this;
    }
    /**
     * Get continuation_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getContinuation_date()
    {
        return $this->continuation_date;
    }
    /**
     * Set continuation_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $continuation_date
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setContinuation_date(\Webservices\StructType\DutchBusinessDateV3 $continuation_date = null)
    {
        $this->continuation_date = $continuation_date;
        return $this;
    }
    /**
     * Get establishment_date value
     * @return \Webservices\StructType\DutchBusinessDateV3|null
     */
    public function getEstablishment_date()
    {
        return $this->establishment_date;
    }
    /**
     * Set establishment_date value
     * @param \Webservices\StructType\DutchBusinessDateV3 $establishment_date
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setEstablishment_date(\Webservices\StructType\DutchBusinessDateV3 $establishment_date = null)
    {
        $this->establishment_date = $establishment_date;
        return $this;
    }
    /**
     * Get annual_financial_statement_summary value
     * @return \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary|null
     */
    public function getAnnual_financial_statement_summary()
    {
        return $this->annual_financial_statement_summary;
    }
    /**
     * Set annual_financial_statement_summary value
     * @param \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary $annual_financial_statement_summary
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setAnnual_financial_statement_summary(\Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary $annual_financial_statement_summary = null)
    {
        $this->annual_financial_statement_summary = $annual_financial_statement_summary;
        return $this;
    }
    /**
     * Get structure value
     * @return \Webservices\StructType\DutchBusinessStructure|null
     */
    public function getStructure()
    {
        return $this->structure;
    }
    /**
     * Set structure value
     * @param \Webservices\StructType\DutchBusinessStructure $structure
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setStructure(\Webservices\StructType\DutchBusinessStructure $structure = null)
    {
        $this->structure = $structure;
        return $this;
    }
    /**
     * Get sbi_collection value
     * @return \Webservices\StructType\DutchBusinessSBICollection|null
     */
    public function getSbi_collection()
    {
        return $this->sbi_collection;
    }
    /**
     * Set sbi_collection value
     * @param \Webservices\StructType\DutchBusinessSBICollection $sbi_collection
     * @return \Webservices\StructType\DutchBusinessDossierV3
     */
    public function setSbi_collection(\Webservices\StructType\DutchBusinessSBICollection $sbi_collection = null)
    {
        $this->sbi_collection = $sbi_collection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessDossierV3
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
