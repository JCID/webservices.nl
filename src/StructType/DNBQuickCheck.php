<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBQuickCheck StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBQuickCheck extends AbstractStructBase
{
    /**
     * The duns
     * @var string
     */
    public $duns;
    /**
     * The dnb_key
     * @var string
     */
    public $dnb_key;
    /**
     * The enquiry_duns
     * @var string
     */
    public $enquiry_duns;
    /**
     * The business_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_number;
    /**
     * The business_number_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_number_type;
    /**
     * The business_number_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_number_description;
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The address
     * @var \Webservices\ArrayType\StringArray
     */
    public $address;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $region;
    /**
     * The subregion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $subregion;
    /**
     * The country_calling_code
     * @var string
     */
    public $country_calling_code;
    /**
     * The phone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phone_number;
    /**
     * The fax_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fax_number;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The ceo_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ceo_name;
    /**
     * The ceo_title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ceo_title;
    /**
     * The principal_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $principal_name;
    /**
     * The principal_title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $principal_title;
    /**
     * The currency
     * @var string
     */
    public $currency;
    /**
     * The statement_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statement_currency;
    /**
     * The debtor_inpossession
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $debtor_inpossession;
    /**
     * The criminal_proceedings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $criminal_proceedings;
    /**
     * The suit_judgement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $suit_judgement;
    /**
     * The financial_embarrassment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $financial_embarrassment;
    /**
     * The financial_legal_events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $financial_legal_events;
    /**
     * The operational_events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $operational_events;
    /**
     * The other_events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $other_events;
    /**
     * The disaster
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $disaster;
    /**
     * The secured_filings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $secured_filings;
    /**
     * The out_of_business
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $out_of_business;
    /**
     * The history_indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $history_indicator;
    /**
     * The history_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $history_description;
    /**
     * The income_statement_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $income_statement_date;
    /**
     * The income_statement_date_start
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $income_statement_date_start;
    /**
     * The income_statement_date_end
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $income_statement_date_end;
    /**
     * The financial_statement_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $financial_statement_date;
    /**
     * The incorporation_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $incorporation_year;
    /**
     * The start_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $start_year;
    /**
     * The current_control_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $current_control_year;
    /**
     * The local_activity_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $local_activity_code;
    /**
     * The local_activity_code_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $local_activity_code_type;
    /**
     * The local_activity_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $local_activity_description;
    /**
     * The sic_activity_code
     * @var string
     */
    public $sic_activity_code;
    /**
     * The sic_activity_description
     * @var string
     */
    public $sic_activity_description;
    /**
     * The sic_version
     * @var string
     */
    public $sic_version;
    /**
     * The legal_form
     * @var string
     */
    public $legal_form;
    /**
     * The legal_form_description
     * @var string
     */
    public $legal_form_description;
    /**
     * The paydex_norm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paydex_norm;
    /**
     * The paydex_score
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paydex_score;
    /**
     * The dnb_rating
     * @var string
     */
    public $dnb_rating;
    /**
     * The maximum_credit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $maximum_credit;
    /**
     * The maximum_credit_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $maximum_credit_currency;
    /**
     * The intangible_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $intangible_assets;
    /**
     * The net_worth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_worth;
    /**
     * The tangible_net_worth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBMonetaryAmount
     */
    public $tangible_net_worth;
    /**
     * The sales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $sales;
    /**
     * The annual_sales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBMonetaryAmount
     */
    public $annual_sales;
    /**
     * The employees_primary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBEmployeeCount
     */
    public $employees_primary;
    /**
     * The employees_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBEmployeeCount
     */
    public $employees_total;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * Constructor method for DNBQuickCheck
     * @uses DNBQuickCheck::setDuns()
     * @uses DNBQuickCheck::setDnb_key()
     * @uses DNBQuickCheck::setEnquiry_duns()
     * @uses DNBQuickCheck::setBusiness_number()
     * @uses DNBQuickCheck::setBusiness_number_type()
     * @uses DNBQuickCheck::setBusiness_number_description()
     * @uses DNBQuickCheck::setTrade_name()
     * @uses DNBQuickCheck::setAddress()
     * @uses DNBQuickCheck::setPostcode()
     * @uses DNBQuickCheck::setCity()
     * @uses DNBQuickCheck::setRegion()
     * @uses DNBQuickCheck::setSubregion()
     * @uses DNBQuickCheck::setCountry_calling_code()
     * @uses DNBQuickCheck::setPhone_number()
     * @uses DNBQuickCheck::setFax_number()
     * @uses DNBQuickCheck::setCountry()
     * @uses DNBQuickCheck::setCeo_name()
     * @uses DNBQuickCheck::setCeo_title()
     * @uses DNBQuickCheck::setPrincipal_name()
     * @uses DNBQuickCheck::setPrincipal_title()
     * @uses DNBQuickCheck::setCurrency()
     * @uses DNBQuickCheck::setStatement_currency()
     * @uses DNBQuickCheck::setDebtor_inpossession()
     * @uses DNBQuickCheck::setCriminal_proceedings()
     * @uses DNBQuickCheck::setSuit_judgement()
     * @uses DNBQuickCheck::setFinancial_embarrassment()
     * @uses DNBQuickCheck::setFinancial_legal_events()
     * @uses DNBQuickCheck::setOperational_events()
     * @uses DNBQuickCheck::setOther_events()
     * @uses DNBQuickCheck::setDisaster()
     * @uses DNBQuickCheck::setSecured_filings()
     * @uses DNBQuickCheck::setOut_of_business()
     * @uses DNBQuickCheck::setHistory_indicator()
     * @uses DNBQuickCheck::setHistory_description()
     * @uses DNBQuickCheck::setIncome_statement_date()
     * @uses DNBQuickCheck::setIncome_statement_date_start()
     * @uses DNBQuickCheck::setIncome_statement_date_end()
     * @uses DNBQuickCheck::setFinancial_statement_date()
     * @uses DNBQuickCheck::setIncorporation_year()
     * @uses DNBQuickCheck::setStart_year()
     * @uses DNBQuickCheck::setCurrent_control_year()
     * @uses DNBQuickCheck::setLocal_activity_code()
     * @uses DNBQuickCheck::setLocal_activity_code_type()
     * @uses DNBQuickCheck::setLocal_activity_description()
     * @uses DNBQuickCheck::setSic_activity_code()
     * @uses DNBQuickCheck::setSic_activity_description()
     * @uses DNBQuickCheck::setSic_version()
     * @uses DNBQuickCheck::setLegal_form()
     * @uses DNBQuickCheck::setLegal_form_description()
     * @uses DNBQuickCheck::setPaydex_norm()
     * @uses DNBQuickCheck::setPaydex_score()
     * @uses DNBQuickCheck::setDnb_rating()
     * @uses DNBQuickCheck::setMaximum_credit()
     * @uses DNBQuickCheck::setMaximum_credit_currency()
     * @uses DNBQuickCheck::setIntangible_assets()
     * @uses DNBQuickCheck::setNet_worth()
     * @uses DNBQuickCheck::setTangible_net_worth()
     * @uses DNBQuickCheck::setSales()
     * @uses DNBQuickCheck::setAnnual_sales()
     * @uses DNBQuickCheck::setEmployees_primary()
     * @uses DNBQuickCheck::setEmployees_total()
     * @uses DNBQuickCheck::setTrade_names()
     * @param string $duns
     * @param string $dnb_key
     * @param string $enquiry_duns
     * @param string $business_number
     * @param string $business_number_type
     * @param string $business_number_description
     * @param string $trade_name
     * @param \Webservices\ArrayType\StringArray $address
     * @param string $postcode
     * @param string $city
     * @param string $region
     * @param string $subregion
     * @param string $country_calling_code
     * @param string $phone_number
     * @param string $fax_number
     * @param string $country
     * @param string $ceo_name
     * @param string $ceo_title
     * @param string $principal_name
     * @param string $principal_title
     * @param string $currency
     * @param string $statement_currency
     * @param bool $debtor_inpossession
     * @param bool $criminal_proceedings
     * @param bool $suit_judgement
     * @param bool $financial_embarrassment
     * @param bool $financial_legal_events
     * @param bool $operational_events
     * @param bool $other_events
     * @param bool $disaster
     * @param bool $secured_filings
     * @param bool $out_of_business
     * @param string $history_indicator
     * @param string $history_description
     * @param string $income_statement_date
     * @param string $income_statement_date_start
     * @param string $income_statement_date_end
     * @param string $financial_statement_date
     * @param int $incorporation_year
     * @param int $start_year
     * @param int $current_control_year
     * @param string $local_activity_code
     * @param string $local_activity_code_type
     * @param string $local_activity_description
     * @param string $sic_activity_code
     * @param string $sic_activity_description
     * @param string $sic_version
     * @param string $legal_form
     * @param string $legal_form_description
     * @param int $paydex_norm
     * @param int $paydex_score
     * @param string $dnb_rating
     * @param int $maximum_credit
     * @param string $maximum_credit_currency
     * @param int $intangible_assets
     * @param int $net_worth
     * @param \Webservices\StructType\DNBMonetaryAmount $tangible_net_worth
     * @param int $sales
     * @param \Webservices\StructType\DNBMonetaryAmount $annual_sales
     * @param \Webservices\StructType\DNBEmployeeCount $employees_primary
     * @param \Webservices\StructType\DNBEmployeeCount $employees_total
     * @param \Webservices\ArrayType\StringArray $trade_names
     */
    public function __construct($duns = null, $dnb_key = null, $enquiry_duns = null, $business_number = null, $business_number_type = null, $business_number_description = null, $trade_name = null, \Webservices\ArrayType\StringArray $address = null, $postcode = null, $city = null, $region = null, $subregion = null, $country_calling_code = null, $phone_number = null, $fax_number = null, $country = null, $ceo_name = null, $ceo_title = null, $principal_name = null, $principal_title = null, $currency = null, $statement_currency = null, $debtor_inpossession = null, $criminal_proceedings = null, $suit_judgement = null, $financial_embarrassment = null, $financial_legal_events = null, $operational_events = null, $other_events = null, $disaster = null, $secured_filings = null, $out_of_business = null, $history_indicator = null, $history_description = null, $income_statement_date = null, $income_statement_date_start = null, $income_statement_date_end = null, $financial_statement_date = null, $incorporation_year = null, $start_year = null, $current_control_year = null, $local_activity_code = null, $local_activity_code_type = null, $local_activity_description = null, $sic_activity_code = null, $sic_activity_description = null, $sic_version = null, $legal_form = null, $legal_form_description = null, $paydex_norm = null, $paydex_score = null, $dnb_rating = null, $maximum_credit = null, $maximum_credit_currency = null, $intangible_assets = null, $net_worth = null, \Webservices\StructType\DNBMonetaryAmount $tangible_net_worth = null, $sales = null, \Webservices\StructType\DNBMonetaryAmount $annual_sales = null, \Webservices\StructType\DNBEmployeeCount $employees_primary = null, \Webservices\StructType\DNBEmployeeCount $employees_total = null, \Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this
            ->setDuns($duns)
            ->setDnb_key($dnb_key)
            ->setEnquiry_duns($enquiry_duns)
            ->setBusiness_number($business_number)
            ->setBusiness_number_type($business_number_type)
            ->setBusiness_number_description($business_number_description)
            ->setTrade_name($trade_name)
            ->setAddress($address)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setRegion($region)
            ->setSubregion($subregion)
            ->setCountry_calling_code($country_calling_code)
            ->setPhone_number($phone_number)
            ->setFax_number($fax_number)
            ->setCountry($country)
            ->setCeo_name($ceo_name)
            ->setCeo_title($ceo_title)
            ->setPrincipal_name($principal_name)
            ->setPrincipal_title($principal_title)
            ->setCurrency($currency)
            ->setStatement_currency($statement_currency)
            ->setDebtor_inpossession($debtor_inpossession)
            ->setCriminal_proceedings($criminal_proceedings)
            ->setSuit_judgement($suit_judgement)
            ->setFinancial_embarrassment($financial_embarrassment)
            ->setFinancial_legal_events($financial_legal_events)
            ->setOperational_events($operational_events)
            ->setOther_events($other_events)
            ->setDisaster($disaster)
            ->setSecured_filings($secured_filings)
            ->setOut_of_business($out_of_business)
            ->setHistory_indicator($history_indicator)
            ->setHistory_description($history_description)
            ->setIncome_statement_date($income_statement_date)
            ->setIncome_statement_date_start($income_statement_date_start)
            ->setIncome_statement_date_end($income_statement_date_end)
            ->setFinancial_statement_date($financial_statement_date)
            ->setIncorporation_year($incorporation_year)
            ->setStart_year($start_year)
            ->setCurrent_control_year($current_control_year)
            ->setLocal_activity_code($local_activity_code)
            ->setLocal_activity_code_type($local_activity_code_type)
            ->setLocal_activity_description($local_activity_description)
            ->setSic_activity_code($sic_activity_code)
            ->setSic_activity_description($sic_activity_description)
            ->setSic_version($sic_version)
            ->setLegal_form($legal_form)
            ->setLegal_form_description($legal_form_description)
            ->setPaydex_norm($paydex_norm)
            ->setPaydex_score($paydex_score)
            ->setDnb_rating($dnb_rating)
            ->setMaximum_credit($maximum_credit)
            ->setMaximum_credit_currency($maximum_credit_currency)
            ->setIntangible_assets($intangible_assets)
            ->setNet_worth($net_worth)
            ->setTangible_net_worth($tangible_net_worth)
            ->setSales($sales)
            ->setAnnual_sales($annual_sales)
            ->setEmployees_primary($employees_primary)
            ->setEmployees_total($employees_total)
            ->setTrade_names($trade_names);
    }
    /**
     * Get duns value
     * @return string|null
     */
    public function getDuns()
    {
        return $this->duns;
    }
    /**
     * Set duns value
     * @param string $duns
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setDuns($duns = null)
    {
        // validation for constraint: string
        if (!is_null($duns) && !is_string($duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duns)), __LINE__);
        }
        $this->duns = $duns;
        return $this;
    }
    /**
     * Get dnb_key value
     * @return string|null
     */
    public function getDnb_key()
    {
        return $this->dnb_key;
    }
    /**
     * Set dnb_key value
     * @param string $dnb_key
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setDnb_key($dnb_key = null)
    {
        // validation for constraint: string
        if (!is_null($dnb_key) && !is_string($dnb_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dnb_key)), __LINE__);
        }
        $this->dnb_key = $dnb_key;
        return $this;
    }
    /**
     * Get enquiry_duns value
     * @return string|null
     */
    public function getEnquiry_duns()
    {
        return $this->enquiry_duns;
    }
    /**
     * Set enquiry_duns value
     * @param string $enquiry_duns
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setEnquiry_duns($enquiry_duns = null)
    {
        // validation for constraint: string
        if (!is_null($enquiry_duns) && !is_string($enquiry_duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enquiry_duns)), __LINE__);
        }
        $this->enquiry_duns = $enquiry_duns;
        return $this;
    }
    /**
     * Get business_number value
     * @return string|null
     */
    public function getBusiness_number()
    {
        return $this->business_number;
    }
    /**
     * Set business_number value
     * @param string $business_number
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setBusiness_number($business_number = null)
    {
        // validation for constraint: string
        if (!is_null($business_number) && !is_string($business_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number)), __LINE__);
        }
        $this->business_number = $business_number;
        return $this;
    }
    /**
     * Get business_number_type value
     * @return string|null
     */
    public function getBusiness_number_type()
    {
        return $this->business_number_type;
    }
    /**
     * Set business_number_type value
     * @param string $business_number_type
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setBusiness_number_type($business_number_type = null)
    {
        // validation for constraint: string
        if (!is_null($business_number_type) && !is_string($business_number_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number_type)), __LINE__);
        }
        $this->business_number_type = $business_number_type;
        return $this;
    }
    /**
     * Get business_number_description value
     * @return string|null
     */
    public function getBusiness_number_description()
    {
        return $this->business_number_description;
    }
    /**
     * Set business_number_description value
     * @param string $business_number_description
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setBusiness_number_description($business_number_description = null)
    {
        // validation for constraint: string
        if (!is_null($business_number_description) && !is_string($business_number_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number_description)), __LINE__);
        }
        $this->business_number_description = $business_number_description;
        return $this;
    }
    /**
     * Get trade_name value
     * @return string|null
     */
    public function getTrade_name()
    {
        return $this->trade_name;
    }
    /**
     * Set trade_name value
     * @param string $trade_name
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setTrade_name($trade_name = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name) && !is_string($trade_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name)), __LINE__);
        }
        $this->trade_name = $trade_name;
        return $this;
    }
    /**
     * Get address value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\ArrayType\StringArray $address
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setAddress(\Webservices\ArrayType\StringArray $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $region
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->region = $region;
        return $this;
    }
    /**
     * Get subregion value
     * @return string|null
     */
    public function getSubregion()
    {
        return $this->subregion;
    }
    /**
     * Set subregion value
     * @param string $subregion
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSubregion($subregion = null)
    {
        // validation for constraint: string
        if (!is_null($subregion) && !is_string($subregion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subregion)), __LINE__);
        }
        $this->subregion = $subregion;
        return $this;
    }
    /**
     * Get country_calling_code value
     * @return string|null
     */
    public function getCountry_calling_code()
    {
        return $this->country_calling_code;
    }
    /**
     * Set country_calling_code value
     * @param string $country_calling_code
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCountry_calling_code($country_calling_code = null)
    {
        // validation for constraint: string
        if (!is_null($country_calling_code) && !is_string($country_calling_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_calling_code)), __LINE__);
        }
        $this->country_calling_code = $country_calling_code;
        return $this;
    }
    /**
     * Get phone_number value
     * @return string|null
     */
    public function getPhone_number()
    {
        return $this->phone_number;
    }
    /**
     * Set phone_number value
     * @param string $phone_number
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setPhone_number($phone_number = null)
    {
        // validation for constraint: string
        if (!is_null($phone_number) && !is_string($phone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone_number)), __LINE__);
        }
        $this->phone_number = $phone_number;
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
     * @return \Webservices\StructType\DNBQuickCheck
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
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get ceo_name value
     * @return string|null
     */
    public function getCeo_name()
    {
        return $this->ceo_name;
    }
    /**
     * Set ceo_name value
     * @param string $ceo_name
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCeo_name($ceo_name = null)
    {
        // validation for constraint: string
        if (!is_null($ceo_name) && !is_string($ceo_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ceo_name)), __LINE__);
        }
        $this->ceo_name = $ceo_name;
        return $this;
    }
    /**
     * Get ceo_title value
     * @return string|null
     */
    public function getCeo_title()
    {
        return $this->ceo_title;
    }
    /**
     * Set ceo_title value
     * @param string $ceo_title
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCeo_title($ceo_title = null)
    {
        // validation for constraint: string
        if (!is_null($ceo_title) && !is_string($ceo_title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ceo_title)), __LINE__);
        }
        $this->ceo_title = $ceo_title;
        return $this;
    }
    /**
     * Get principal_name value
     * @return string|null
     */
    public function getPrincipal_name()
    {
        return $this->principal_name;
    }
    /**
     * Set principal_name value
     * @param string $principal_name
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setPrincipal_name($principal_name = null)
    {
        // validation for constraint: string
        if (!is_null($principal_name) && !is_string($principal_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($principal_name)), __LINE__);
        }
        $this->principal_name = $principal_name;
        return $this;
    }
    /**
     * Get principal_title value
     * @return string|null
     */
    public function getPrincipal_title()
    {
        return $this->principal_title;
    }
    /**
     * Set principal_title value
     * @param string $principal_title
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setPrincipal_title($principal_title = null)
    {
        // validation for constraint: string
        if (!is_null($principal_title) && !is_string($principal_title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($principal_title)), __LINE__);
        }
        $this->principal_title = $principal_title;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get statement_currency value
     * @return string|null
     */
    public function getStatement_currency()
    {
        return $this->statement_currency;
    }
    /**
     * Set statement_currency value
     * @param string $statement_currency
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setStatement_currency($statement_currency = null)
    {
        // validation for constraint: string
        if (!is_null($statement_currency) && !is_string($statement_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statement_currency)), __LINE__);
        }
        $this->statement_currency = $statement_currency;
        return $this;
    }
    /**
     * Get debtor_inpossession value
     * @return bool|null
     */
    public function getDebtor_inpossession()
    {
        return $this->debtor_inpossession;
    }
    /**
     * Set debtor_inpossession value
     * @param bool $debtor_inpossession
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setDebtor_inpossession($debtor_inpossession = null)
    {
        // validation for constraint: boolean
        if (!is_null($debtor_inpossession) && !is_bool($debtor_inpossession)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($debtor_inpossession)), __LINE__);
        }
        $this->debtor_inpossession = $debtor_inpossession;
        return $this;
    }
    /**
     * Get criminal_proceedings value
     * @return bool|null
     */
    public function getCriminal_proceedings()
    {
        return $this->criminal_proceedings;
    }
    /**
     * Set criminal_proceedings value
     * @param bool $criminal_proceedings
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCriminal_proceedings($criminal_proceedings = null)
    {
        // validation for constraint: boolean
        if (!is_null($criminal_proceedings) && !is_bool($criminal_proceedings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($criminal_proceedings)), __LINE__);
        }
        $this->criminal_proceedings = $criminal_proceedings;
        return $this;
    }
    /**
     * Get suit_judgement value
     * @return bool|null
     */
    public function getSuit_judgement()
    {
        return $this->suit_judgement;
    }
    /**
     * Set suit_judgement value
     * @param bool $suit_judgement
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSuit_judgement($suit_judgement = null)
    {
        // validation for constraint: boolean
        if (!is_null($suit_judgement) && !is_bool($suit_judgement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suit_judgement)), __LINE__);
        }
        $this->suit_judgement = $suit_judgement;
        return $this;
    }
    /**
     * Get financial_embarrassment value
     * @return bool|null
     */
    public function getFinancial_embarrassment()
    {
        return $this->financial_embarrassment;
    }
    /**
     * Set financial_embarrassment value
     * @param bool $financial_embarrassment
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setFinancial_embarrassment($financial_embarrassment = null)
    {
        // validation for constraint: boolean
        if (!is_null($financial_embarrassment) && !is_bool($financial_embarrassment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($financial_embarrassment)), __LINE__);
        }
        $this->financial_embarrassment = $financial_embarrassment;
        return $this;
    }
    /**
     * Get financial_legal_events value
     * @return bool|null
     */
    public function getFinancial_legal_events()
    {
        return $this->financial_legal_events;
    }
    /**
     * Set financial_legal_events value
     * @param bool $financial_legal_events
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setFinancial_legal_events($financial_legal_events = null)
    {
        // validation for constraint: boolean
        if (!is_null($financial_legal_events) && !is_bool($financial_legal_events)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($financial_legal_events)), __LINE__);
        }
        $this->financial_legal_events = $financial_legal_events;
        return $this;
    }
    /**
     * Get operational_events value
     * @return bool|null
     */
    public function getOperational_events()
    {
        return $this->operational_events;
    }
    /**
     * Set operational_events value
     * @param bool $operational_events
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setOperational_events($operational_events = null)
    {
        // validation for constraint: boolean
        if (!is_null($operational_events) && !is_bool($operational_events)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($operational_events)), __LINE__);
        }
        $this->operational_events = $operational_events;
        return $this;
    }
    /**
     * Get other_events value
     * @return bool|null
     */
    public function getOther_events()
    {
        return $this->other_events;
    }
    /**
     * Set other_events value
     * @param bool $other_events
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setOther_events($other_events = null)
    {
        // validation for constraint: boolean
        if (!is_null($other_events) && !is_bool($other_events)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($other_events)), __LINE__);
        }
        $this->other_events = $other_events;
        return $this;
    }
    /**
     * Get disaster value
     * @return bool|null
     */
    public function getDisaster()
    {
        return $this->disaster;
    }
    /**
     * Set disaster value
     * @param bool $disaster
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setDisaster($disaster = null)
    {
        // validation for constraint: boolean
        if (!is_null($disaster) && !is_bool($disaster)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disaster)), __LINE__);
        }
        $this->disaster = $disaster;
        return $this;
    }
    /**
     * Get secured_filings value
     * @return bool|null
     */
    public function getSecured_filings()
    {
        return $this->secured_filings;
    }
    /**
     * Set secured_filings value
     * @param bool $secured_filings
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSecured_filings($secured_filings = null)
    {
        // validation for constraint: boolean
        if (!is_null($secured_filings) && !is_bool($secured_filings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($secured_filings)), __LINE__);
        }
        $this->secured_filings = $secured_filings;
        return $this;
    }
    /**
     * Get out_of_business value
     * @return bool|null
     */
    public function getOut_of_business()
    {
        return $this->out_of_business;
    }
    /**
     * Set out_of_business value
     * @param bool $out_of_business
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setOut_of_business($out_of_business = null)
    {
        // validation for constraint: boolean
        if (!is_null($out_of_business) && !is_bool($out_of_business)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($out_of_business)), __LINE__);
        }
        $this->out_of_business = $out_of_business;
        return $this;
    }
    /**
     * Get history_indicator value
     * @return string|null
     */
    public function getHistory_indicator()
    {
        return $this->history_indicator;
    }
    /**
     * Set history_indicator value
     * @param string $history_indicator
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setHistory_indicator($history_indicator = null)
    {
        // validation for constraint: string
        if (!is_null($history_indicator) && !is_string($history_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($history_indicator)), __LINE__);
        }
        $this->history_indicator = $history_indicator;
        return $this;
    }
    /**
     * Get history_description value
     * @return string|null
     */
    public function getHistory_description()
    {
        return $this->history_description;
    }
    /**
     * Set history_description value
     * @param string $history_description
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setHistory_description($history_description = null)
    {
        // validation for constraint: string
        if (!is_null($history_description) && !is_string($history_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($history_description)), __LINE__);
        }
        $this->history_description = $history_description;
        return $this;
    }
    /**
     * Get income_statement_date value
     * @return string|null
     */
    public function getIncome_statement_date()
    {
        return $this->income_statement_date;
    }
    /**
     * Set income_statement_date value
     * @param string $income_statement_date
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setIncome_statement_date($income_statement_date = null)
    {
        // validation for constraint: string
        if (!is_null($income_statement_date) && !is_string($income_statement_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($income_statement_date)), __LINE__);
        }
        $this->income_statement_date = $income_statement_date;
        return $this;
    }
    /**
     * Get income_statement_date_start value
     * @return string|null
     */
    public function getIncome_statement_date_start()
    {
        return $this->income_statement_date_start;
    }
    /**
     * Set income_statement_date_start value
     * @param string $income_statement_date_start
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setIncome_statement_date_start($income_statement_date_start = null)
    {
        // validation for constraint: string
        if (!is_null($income_statement_date_start) && !is_string($income_statement_date_start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($income_statement_date_start)), __LINE__);
        }
        $this->income_statement_date_start = $income_statement_date_start;
        return $this;
    }
    /**
     * Get income_statement_date_end value
     * @return string|null
     */
    public function getIncome_statement_date_end()
    {
        return $this->income_statement_date_end;
    }
    /**
     * Set income_statement_date_end value
     * @param string $income_statement_date_end
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setIncome_statement_date_end($income_statement_date_end = null)
    {
        // validation for constraint: string
        if (!is_null($income_statement_date_end) && !is_string($income_statement_date_end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($income_statement_date_end)), __LINE__);
        }
        $this->income_statement_date_end = $income_statement_date_end;
        return $this;
    }
    /**
     * Get financial_statement_date value
     * @return string|null
     */
    public function getFinancial_statement_date()
    {
        return $this->financial_statement_date;
    }
    /**
     * Set financial_statement_date value
     * @param string $financial_statement_date
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setFinancial_statement_date($financial_statement_date = null)
    {
        // validation for constraint: string
        if (!is_null($financial_statement_date) && !is_string($financial_statement_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financial_statement_date)), __LINE__);
        }
        $this->financial_statement_date = $financial_statement_date;
        return $this;
    }
    /**
     * Get incorporation_year value
     * @return int|null
     */
    public function getIncorporation_year()
    {
        return $this->incorporation_year;
    }
    /**
     * Set incorporation_year value
     * @param int $incorporation_year
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setIncorporation_year($incorporation_year = null)
    {
        // validation for constraint: int
        if (!is_null($incorporation_year) && !is_numeric($incorporation_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($incorporation_year)), __LINE__);
        }
        $this->incorporation_year = $incorporation_year;
        return $this;
    }
    /**
     * Get start_year value
     * @return int|null
     */
    public function getStart_year()
    {
        return $this->start_year;
    }
    /**
     * Set start_year value
     * @param int $start_year
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setStart_year($start_year = null)
    {
        // validation for constraint: int
        if (!is_null($start_year) && !is_numeric($start_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($start_year)), __LINE__);
        }
        $this->start_year = $start_year;
        return $this;
    }
    /**
     * Get current_control_year value
     * @return int|null
     */
    public function getCurrent_control_year()
    {
        return $this->current_control_year;
    }
    /**
     * Set current_control_year value
     * @param int $current_control_year
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setCurrent_control_year($current_control_year = null)
    {
        // validation for constraint: int
        if (!is_null($current_control_year) && !is_numeric($current_control_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($current_control_year)), __LINE__);
        }
        $this->current_control_year = $current_control_year;
        return $this;
    }
    /**
     * Get local_activity_code value
     * @return string|null
     */
    public function getLocal_activity_code()
    {
        return $this->local_activity_code;
    }
    /**
     * Set local_activity_code value
     * @param string $local_activity_code
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setLocal_activity_code($local_activity_code = null)
    {
        // validation for constraint: string
        if (!is_null($local_activity_code) && !is_string($local_activity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($local_activity_code)), __LINE__);
        }
        $this->local_activity_code = $local_activity_code;
        return $this;
    }
    /**
     * Get local_activity_code_type value
     * @return string|null
     */
    public function getLocal_activity_code_type()
    {
        return $this->local_activity_code_type;
    }
    /**
     * Set local_activity_code_type value
     * @param string $local_activity_code_type
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setLocal_activity_code_type($local_activity_code_type = null)
    {
        // validation for constraint: string
        if (!is_null($local_activity_code_type) && !is_string($local_activity_code_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($local_activity_code_type)), __LINE__);
        }
        $this->local_activity_code_type = $local_activity_code_type;
        return $this;
    }
    /**
     * Get local_activity_description value
     * @return string|null
     */
    public function getLocal_activity_description()
    {
        return $this->local_activity_description;
    }
    /**
     * Set local_activity_description value
     * @param string $local_activity_description
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setLocal_activity_description($local_activity_description = null)
    {
        // validation for constraint: string
        if (!is_null($local_activity_description) && !is_string($local_activity_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($local_activity_description)), __LINE__);
        }
        $this->local_activity_description = $local_activity_description;
        return $this;
    }
    /**
     * Get sic_activity_code value
     * @return string|null
     */
    public function getSic_activity_code()
    {
        return $this->sic_activity_code;
    }
    /**
     * Set sic_activity_code value
     * @param string $sic_activity_code
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSic_activity_code($sic_activity_code = null)
    {
        // validation for constraint: string
        if (!is_null($sic_activity_code) && !is_string($sic_activity_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sic_activity_code)), __LINE__);
        }
        $this->sic_activity_code = $sic_activity_code;
        return $this;
    }
    /**
     * Get sic_activity_description value
     * @return string|null
     */
    public function getSic_activity_description()
    {
        return $this->sic_activity_description;
    }
    /**
     * Set sic_activity_description value
     * @param string $sic_activity_description
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSic_activity_description($sic_activity_description = null)
    {
        // validation for constraint: string
        if (!is_null($sic_activity_description) && !is_string($sic_activity_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sic_activity_description)), __LINE__);
        }
        $this->sic_activity_description = $sic_activity_description;
        return $this;
    }
    /**
     * Get sic_version value
     * @return string|null
     */
    public function getSic_version()
    {
        return $this->sic_version;
    }
    /**
     * Set sic_version value
     * @param string $sic_version
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSic_version($sic_version = null)
    {
        // validation for constraint: string
        if (!is_null($sic_version) && !is_string($sic_version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sic_version)), __LINE__);
        }
        $this->sic_version = $sic_version;
        return $this;
    }
    /**
     * Get legal_form value
     * @return string|null
     */
    public function getLegal_form()
    {
        return $this->legal_form;
    }
    /**
     * Set legal_form value
     * @param string $legal_form
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setLegal_form($legal_form = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form) && !is_string($legal_form)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form)), __LINE__);
        }
        $this->legal_form = $legal_form;
        return $this;
    }
    /**
     * Get legal_form_description value
     * @return string|null
     */
    public function getLegal_form_description()
    {
        return $this->legal_form_description;
    }
    /**
     * Set legal_form_description value
     * @param string $legal_form_description
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setLegal_form_description($legal_form_description = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_description) && !is_string($legal_form_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_description)), __LINE__);
        }
        $this->legal_form_description = $legal_form_description;
        return $this;
    }
    /**
     * Get paydex_norm value
     * @return int|null
     */
    public function getPaydex_norm()
    {
        return $this->paydex_norm;
    }
    /**
     * Set paydex_norm value
     * @param int $paydex_norm
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setPaydex_norm($paydex_norm = null)
    {
        // validation for constraint: int
        if (!is_null($paydex_norm) && !is_numeric($paydex_norm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paydex_norm)), __LINE__);
        }
        $this->paydex_norm = $paydex_norm;
        return $this;
    }
    /**
     * Get paydex_score value
     * @return int|null
     */
    public function getPaydex_score()
    {
        return $this->paydex_score;
    }
    /**
     * Set paydex_score value
     * @param int $paydex_score
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setPaydex_score($paydex_score = null)
    {
        // validation for constraint: int
        if (!is_null($paydex_score) && !is_numeric($paydex_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paydex_score)), __LINE__);
        }
        $this->paydex_score = $paydex_score;
        return $this;
    }
    /**
     * Get dnb_rating value
     * @return string|null
     */
    public function getDnb_rating()
    {
        return $this->dnb_rating;
    }
    /**
     * Set dnb_rating value
     * @param string $dnb_rating
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setDnb_rating($dnb_rating = null)
    {
        // validation for constraint: string
        if (!is_null($dnb_rating) && !is_string($dnb_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dnb_rating)), __LINE__);
        }
        $this->dnb_rating = $dnb_rating;
        return $this;
    }
    /**
     * Get maximum_credit value
     * @return int|null
     */
    public function getMaximum_credit()
    {
        return $this->maximum_credit;
    }
    /**
     * Set maximum_credit value
     * @param int $maximum_credit
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setMaximum_credit($maximum_credit = null)
    {
        // validation for constraint: int
        if (!is_null($maximum_credit) && !is_numeric($maximum_credit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximum_credit)), __LINE__);
        }
        $this->maximum_credit = $maximum_credit;
        return $this;
    }
    /**
     * Get maximum_credit_currency value
     * @return string|null
     */
    public function getMaximum_credit_currency()
    {
        return $this->maximum_credit_currency;
    }
    /**
     * Set maximum_credit_currency value
     * @param string $maximum_credit_currency
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setMaximum_credit_currency($maximum_credit_currency = null)
    {
        // validation for constraint: string
        if (!is_null($maximum_credit_currency) && !is_string($maximum_credit_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximum_credit_currency)), __LINE__);
        }
        $this->maximum_credit_currency = $maximum_credit_currency;
        return $this;
    }
    /**
     * Get intangible_assets value
     * @return int|null
     */
    public function getIntangible_assets()
    {
        return $this->intangible_assets;
    }
    /**
     * Set intangible_assets value
     * @param int $intangible_assets
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setIntangible_assets($intangible_assets = null)
    {
        // validation for constraint: int
        if (!is_null($intangible_assets) && !is_numeric($intangible_assets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($intangible_assets)), __LINE__);
        }
        $this->intangible_assets = $intangible_assets;
        return $this;
    }
    /**
     * Get net_worth value
     * @return int|null
     */
    public function getNet_worth()
    {
        return $this->net_worth;
    }
    /**
     * Set net_worth value
     * @param int $net_worth
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setNet_worth($net_worth = null)
    {
        // validation for constraint: int
        if (!is_null($net_worth) && !is_numeric($net_worth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_worth)), __LINE__);
        }
        $this->net_worth = $net_worth;
        return $this;
    }
    /**
     * Get tangible_net_worth value
     * @return \Webservices\StructType\DNBMonetaryAmount|null
     */
    public function getTangible_net_worth()
    {
        return $this->tangible_net_worth;
    }
    /**
     * Set tangible_net_worth value
     * @param \Webservices\StructType\DNBMonetaryAmount $tangible_net_worth
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setTangible_net_worth(\Webservices\StructType\DNBMonetaryAmount $tangible_net_worth = null)
    {
        $this->tangible_net_worth = $tangible_net_worth;
        return $this;
    }
    /**
     * Get sales value
     * @return int|null
     */
    public function getSales()
    {
        return $this->sales;
    }
    /**
     * Set sales value
     * @param int $sales
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setSales($sales = null)
    {
        // validation for constraint: int
        if (!is_null($sales) && !is_numeric($sales)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sales)), __LINE__);
        }
        $this->sales = $sales;
        return $this;
    }
    /**
     * Get annual_sales value
     * @return \Webservices\StructType\DNBMonetaryAmount|null
     */
    public function getAnnual_sales()
    {
        return $this->annual_sales;
    }
    /**
     * Set annual_sales value
     * @param \Webservices\StructType\DNBMonetaryAmount $annual_sales
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setAnnual_sales(\Webservices\StructType\DNBMonetaryAmount $annual_sales = null)
    {
        $this->annual_sales = $annual_sales;
        return $this;
    }
    /**
     * Get employees_primary value
     * @return \Webservices\StructType\DNBEmployeeCount|null
     */
    public function getEmployees_primary()
    {
        return $this->employees_primary;
    }
    /**
     * Set employees_primary value
     * @param \Webservices\StructType\DNBEmployeeCount $employees_primary
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setEmployees_primary(\Webservices\StructType\DNBEmployeeCount $employees_primary = null)
    {
        $this->employees_primary = $employees_primary;
        return $this;
    }
    /**
     * Get employees_total value
     * @return \Webservices\StructType\DNBEmployeeCount|null
     */
    public function getEmployees_total()
    {
        return $this->employees_total;
    }
    /**
     * Set employees_total value
     * @param \Webservices\StructType\DNBEmployeeCount $employees_total
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setEmployees_total(\Webservices\StructType\DNBEmployeeCount $employees_total = null)
    {
        $this->employees_total = $employees_total;
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
     * @return \Webservices\StructType\DNBQuickCheck
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBQuickCheck
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
