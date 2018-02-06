<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBEnterpriseManagement StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBEnterpriseManagement extends AbstractStructBase
{
    /**
     * The quickcheck
     * @var \Webservices\StructType\DNBQuickCheck
     */
    public $quickcheck;
    /**
     * The main_branch_indication
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $main_branch_indication;
    /**
     * The indate_indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indate_indicator;
    /**
     * The registration_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registration_type;
    /**
     * The import_indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $import_indicator;
    /**
     * The export_indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $export_indicator;
    /**
     * The location_ownership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $location_ownership;
    /**
     * The claims_indicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $claims_indicator;
    /**
     * The paydex_score_earlier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paydex_score_earlier;
    /**
     * The average_high_credit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $average_high_credit;
    /**
     * The high_credit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $high_credit;
    /**
     * The total_payments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $total_payments;
    /**
     * The headquarters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBRelatedBusiness
     */
    public $headquarters;
    /**
     * The parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBRelatedBusiness
     */
    public $parent;
    /**
     * The domestic_ultimate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBRelatedBusiness
     */
    public $domestic_ultimate;
    /**
     * The global_ultimate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DNBRelatedBusiness
     */
    public $global_ultimate;
    /**
     * The is_subsidiary_location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_subsidiary_location;
    /**
     * The location_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $location_status;
    /**
     * The accounts_audited
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $accounts_audited;
    /**
     * The statement_consolidated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $statement_consolidated;
    /**
     * The figures_estimated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_estimated;
    /**
     * The figures_forecast
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_forecast;
    /**
     * The year_period
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $year_period;
    /**
     * The figures_final
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_final;
    /**
     * The opening_statement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $opening_statement;
    /**
     * The figures_proforma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_proforma;
    /**
     * The trial_balance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $trial_balance;
    /**
     * The figures_signed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_signed;
    /**
     * The figures_restated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_restated;
    /**
     * The figures_unbalanced
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_unbalanced;
    /**
     * The figures_qualified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $figures_qualified;
    /**
     * The accounts_receivable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $accounts_receivable;
    /**
     * The liquid_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $liquid_assets;
    /**
     * The inventory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $inventory;
    /**
     * The total_current_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $total_current_assets;
    /**
     * The total_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $total_assets;
    /**
     * The accounts_payable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $accounts_payable;
    /**
     * The total_current_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $total_current_liabilities;
    /**
     * The total_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $total_liabilities;
    /**
     * The net_income
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_income;
    /**
     * The quick_ratio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $quick_ratio;
    /**
     * The current_ratio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $current_ratio;
    /**
     * The previous_net_worth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $previous_net_worth;
    /**
     * The previous_sales
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $previous_sales;
    /**
     * The previous_statement_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_statement_date;
    /**
     * The line_of_business
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line_of_business;
    /**
     * The failure_score
     * @var \Webservices\ArrayType\DNBScoreGroupArray
     */
    public $failure_score;
    /**
     * The credit_score
     * @var \Webservices\ArrayType\DNBScoreGroupArray
     */
    public $credit_score;
    /**
     * The global_failure_score
     * @var \Webservices\ArrayType\DNBScoreGroupArray
     */
    public $global_failure_score;
    /**
     * Constructor method for DNBEnterpriseManagement
     * @uses DNBEnterpriseManagement::setQuickcheck()
     * @uses DNBEnterpriseManagement::setMain_branch_indication()
     * @uses DNBEnterpriseManagement::setIndate_indicator()
     * @uses DNBEnterpriseManagement::setRegistration_type()
     * @uses DNBEnterpriseManagement::setImport_indicator()
     * @uses DNBEnterpriseManagement::setExport_indicator()
     * @uses DNBEnterpriseManagement::setLocation_ownership()
     * @uses DNBEnterpriseManagement::setClaims_indicator()
     * @uses DNBEnterpriseManagement::setPaydex_score_earlier()
     * @uses DNBEnterpriseManagement::setAverage_high_credit()
     * @uses DNBEnterpriseManagement::setHigh_credit()
     * @uses DNBEnterpriseManagement::setTotal_payments()
     * @uses DNBEnterpriseManagement::setHeadquarters()
     * @uses DNBEnterpriseManagement::setParent()
     * @uses DNBEnterpriseManagement::setDomestic_ultimate()
     * @uses DNBEnterpriseManagement::setGlobal_ultimate()
     * @uses DNBEnterpriseManagement::setIs_subsidiary_location()
     * @uses DNBEnterpriseManagement::setLocation_status()
     * @uses DNBEnterpriseManagement::setAccounts_audited()
     * @uses DNBEnterpriseManagement::setStatement_consolidated()
     * @uses DNBEnterpriseManagement::setFigures_estimated()
     * @uses DNBEnterpriseManagement::setFigures_forecast()
     * @uses DNBEnterpriseManagement::setYear_period()
     * @uses DNBEnterpriseManagement::setFigures_final()
     * @uses DNBEnterpriseManagement::setOpening_statement()
     * @uses DNBEnterpriseManagement::setFigures_proforma()
     * @uses DNBEnterpriseManagement::setTrial_balance()
     * @uses DNBEnterpriseManagement::setFigures_signed()
     * @uses DNBEnterpriseManagement::setFigures_restated()
     * @uses DNBEnterpriseManagement::setFigures_unbalanced()
     * @uses DNBEnterpriseManagement::setFigures_qualified()
     * @uses DNBEnterpriseManagement::setAccounts_receivable()
     * @uses DNBEnterpriseManagement::setLiquid_assets()
     * @uses DNBEnterpriseManagement::setInventory()
     * @uses DNBEnterpriseManagement::setTotal_current_assets()
     * @uses DNBEnterpriseManagement::setTotal_assets()
     * @uses DNBEnterpriseManagement::setAccounts_payable()
     * @uses DNBEnterpriseManagement::setTotal_current_liabilities()
     * @uses DNBEnterpriseManagement::setTotal_liabilities()
     * @uses DNBEnterpriseManagement::setNet_income()
     * @uses DNBEnterpriseManagement::setQuick_ratio()
     * @uses DNBEnterpriseManagement::setCurrent_ratio()
     * @uses DNBEnterpriseManagement::setPrevious_net_worth()
     * @uses DNBEnterpriseManagement::setPrevious_sales()
     * @uses DNBEnterpriseManagement::setPrevious_statement_date()
     * @uses DNBEnterpriseManagement::setLine_of_business()
     * @uses DNBEnterpriseManagement::setFailure_score()
     * @uses DNBEnterpriseManagement::setCredit_score()
     * @uses DNBEnterpriseManagement::setGlobal_failure_score()
     * @param \Webservices\StructType\DNBQuickCheck $quickcheck
     * @param bool $main_branch_indication
     * @param bool $indate_indicator
     * @param string $registration_type
     * @param bool $import_indicator
     * @param bool $export_indicator
     * @param string $location_ownership
     * @param bool $claims_indicator
     * @param int $paydex_score_earlier
     * @param int $average_high_credit
     * @param int $high_credit
     * @param int $total_payments
     * @param \Webservices\StructType\DNBRelatedBusiness $headquarters
     * @param \Webservices\StructType\DNBRelatedBusiness $parent
     * @param \Webservices\StructType\DNBRelatedBusiness $domestic_ultimate
     * @param \Webservices\StructType\DNBRelatedBusiness $global_ultimate
     * @param bool $is_subsidiary_location
     * @param string $location_status
     * @param bool $accounts_audited
     * @param bool $statement_consolidated
     * @param bool $figures_estimated
     * @param bool $figures_forecast
     * @param bool $year_period
     * @param bool $figures_final
     * @param bool $opening_statement
     * @param bool $figures_proforma
     * @param bool $trial_balance
     * @param bool $figures_signed
     * @param bool $figures_restated
     * @param bool $figures_unbalanced
     * @param bool $figures_qualified
     * @param int $accounts_receivable
     * @param int $liquid_assets
     * @param int $inventory
     * @param int $total_current_assets
     * @param int $total_assets
     * @param int $accounts_payable
     * @param int $total_current_liabilities
     * @param int $total_liabilities
     * @param int $net_income
     * @param float $quick_ratio
     * @param float $current_ratio
     * @param int $previous_net_worth
     * @param int $previous_sales
     * @param string $previous_statement_date
     * @param string $line_of_business
     * @param \Webservices\ArrayType\DNBScoreGroupArray $failure_score
     * @param \Webservices\ArrayType\DNBScoreGroupArray $credit_score
     * @param \Webservices\ArrayType\DNBScoreGroupArray $global_failure_score
     */
    public function __construct(\Webservices\StructType\DNBQuickCheck $quickcheck = null, $main_branch_indication = null, $indate_indicator = null, $registration_type = null, $import_indicator = null, $export_indicator = null, $location_ownership = null, $claims_indicator = null, $paydex_score_earlier = null, $average_high_credit = null, $high_credit = null, $total_payments = null, \Webservices\StructType\DNBRelatedBusiness $headquarters = null, \Webservices\StructType\DNBRelatedBusiness $parent = null, \Webservices\StructType\DNBRelatedBusiness $domestic_ultimate = null, \Webservices\StructType\DNBRelatedBusiness $global_ultimate = null, $is_subsidiary_location = null, $location_status = null, $accounts_audited = null, $statement_consolidated = null, $figures_estimated = null, $figures_forecast = null, $year_period = null, $figures_final = null, $opening_statement = null, $figures_proforma = null, $trial_balance = null, $figures_signed = null, $figures_restated = null, $figures_unbalanced = null, $figures_qualified = null, $accounts_receivable = null, $liquid_assets = null, $inventory = null, $total_current_assets = null, $total_assets = null, $accounts_payable = null, $total_current_liabilities = null, $total_liabilities = null, $net_income = null, $quick_ratio = null, $current_ratio = null, $previous_net_worth = null, $previous_sales = null, $previous_statement_date = null, $line_of_business = null, \Webservices\ArrayType\DNBScoreGroupArray $failure_score = null, \Webservices\ArrayType\DNBScoreGroupArray $credit_score = null, \Webservices\ArrayType\DNBScoreGroupArray $global_failure_score = null)
    {
        $this
            ->setQuickcheck($quickcheck)
            ->setMain_branch_indication($main_branch_indication)
            ->setIndate_indicator($indate_indicator)
            ->setRegistration_type($registration_type)
            ->setImport_indicator($import_indicator)
            ->setExport_indicator($export_indicator)
            ->setLocation_ownership($location_ownership)
            ->setClaims_indicator($claims_indicator)
            ->setPaydex_score_earlier($paydex_score_earlier)
            ->setAverage_high_credit($average_high_credit)
            ->setHigh_credit($high_credit)
            ->setTotal_payments($total_payments)
            ->setHeadquarters($headquarters)
            ->setParent($parent)
            ->setDomestic_ultimate($domestic_ultimate)
            ->setGlobal_ultimate($global_ultimate)
            ->setIs_subsidiary_location($is_subsidiary_location)
            ->setLocation_status($location_status)
            ->setAccounts_audited($accounts_audited)
            ->setStatement_consolidated($statement_consolidated)
            ->setFigures_estimated($figures_estimated)
            ->setFigures_forecast($figures_forecast)
            ->setYear_period($year_period)
            ->setFigures_final($figures_final)
            ->setOpening_statement($opening_statement)
            ->setFigures_proforma($figures_proforma)
            ->setTrial_balance($trial_balance)
            ->setFigures_signed($figures_signed)
            ->setFigures_restated($figures_restated)
            ->setFigures_unbalanced($figures_unbalanced)
            ->setFigures_qualified($figures_qualified)
            ->setAccounts_receivable($accounts_receivable)
            ->setLiquid_assets($liquid_assets)
            ->setInventory($inventory)
            ->setTotal_current_assets($total_current_assets)
            ->setTotal_assets($total_assets)
            ->setAccounts_payable($accounts_payable)
            ->setTotal_current_liabilities($total_current_liabilities)
            ->setTotal_liabilities($total_liabilities)
            ->setNet_income($net_income)
            ->setQuick_ratio($quick_ratio)
            ->setCurrent_ratio($current_ratio)
            ->setPrevious_net_worth($previous_net_worth)
            ->setPrevious_sales($previous_sales)
            ->setPrevious_statement_date($previous_statement_date)
            ->setLine_of_business($line_of_business)
            ->setFailure_score($failure_score)
            ->setCredit_score($credit_score)
            ->setGlobal_failure_score($global_failure_score);
    }
    /**
     * Get quickcheck value
     * @return \Webservices\StructType\DNBQuickCheck|null
     */
    public function getQuickcheck()
    {
        return $this->quickcheck;
    }
    /**
     * Set quickcheck value
     * @param \Webservices\StructType\DNBQuickCheck $quickcheck
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setQuickcheck(\Webservices\StructType\DNBQuickCheck $quickcheck = null)
    {
        $this->quickcheck = $quickcheck;
        return $this;
    }
    /**
     * Get main_branch_indication value
     * @return bool|null
     */
    public function getMain_branch_indication()
    {
        return $this->main_branch_indication;
    }
    /**
     * Set main_branch_indication value
     * @param bool $main_branch_indication
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setMain_branch_indication($main_branch_indication = null)
    {
        // validation for constraint: boolean
        if (!is_null($main_branch_indication) && !is_bool($main_branch_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($main_branch_indication)), __LINE__);
        }
        $this->main_branch_indication = $main_branch_indication;
        return $this;
    }
    /**
     * Get indate_indicator value
     * @return bool|null
     */
    public function getIndate_indicator()
    {
        return $this->indate_indicator;
    }
    /**
     * Set indate_indicator value
     * @param bool $indate_indicator
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setIndate_indicator($indate_indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($indate_indicator) && !is_bool($indate_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indate_indicator)), __LINE__);
        }
        $this->indate_indicator = $indate_indicator;
        return $this;
    }
    /**
     * Get registration_type value
     * @return string|null
     */
    public function getRegistration_type()
    {
        return $this->registration_type;
    }
    /**
     * Set registration_type value
     * @param string $registration_type
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setRegistration_type($registration_type = null)
    {
        // validation for constraint: string
        if (!is_null($registration_type) && !is_string($registration_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration_type)), __LINE__);
        }
        $this->registration_type = $registration_type;
        return $this;
    }
    /**
     * Get import_indicator value
     * @return bool|null
     */
    public function getImport_indicator()
    {
        return $this->import_indicator;
    }
    /**
     * Set import_indicator value
     * @param bool $import_indicator
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setImport_indicator($import_indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($import_indicator) && !is_bool($import_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($import_indicator)), __LINE__);
        }
        $this->import_indicator = $import_indicator;
        return $this;
    }
    /**
     * Get export_indicator value
     * @return bool|null
     */
    public function getExport_indicator()
    {
        return $this->export_indicator;
    }
    /**
     * Set export_indicator value
     * @param bool $export_indicator
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setExport_indicator($export_indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($export_indicator) && !is_bool($export_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($export_indicator)), __LINE__);
        }
        $this->export_indicator = $export_indicator;
        return $this;
    }
    /**
     * Get location_ownership value
     * @return string|null
     */
    public function getLocation_ownership()
    {
        return $this->location_ownership;
    }
    /**
     * Set location_ownership value
     * @param string $location_ownership
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setLocation_ownership($location_ownership = null)
    {
        // validation for constraint: string
        if (!is_null($location_ownership) && !is_string($location_ownership)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location_ownership)), __LINE__);
        }
        $this->location_ownership = $location_ownership;
        return $this;
    }
    /**
     * Get claims_indicator value
     * @return bool|null
     */
    public function getClaims_indicator()
    {
        return $this->claims_indicator;
    }
    /**
     * Set claims_indicator value
     * @param bool $claims_indicator
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setClaims_indicator($claims_indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($claims_indicator) && !is_bool($claims_indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($claims_indicator)), __LINE__);
        }
        $this->claims_indicator = $claims_indicator;
        return $this;
    }
    /**
     * Get paydex_score_earlier value
     * @return int|null
     */
    public function getPaydex_score_earlier()
    {
        return $this->paydex_score_earlier;
    }
    /**
     * Set paydex_score_earlier value
     * @param int $paydex_score_earlier
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setPaydex_score_earlier($paydex_score_earlier = null)
    {
        // validation for constraint: int
        if (!is_null($paydex_score_earlier) && !is_numeric($paydex_score_earlier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paydex_score_earlier)), __LINE__);
        }
        $this->paydex_score_earlier = $paydex_score_earlier;
        return $this;
    }
    /**
     * Get average_high_credit value
     * @return int|null
     */
    public function getAverage_high_credit()
    {
        return $this->average_high_credit;
    }
    /**
     * Set average_high_credit value
     * @param int $average_high_credit
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setAverage_high_credit($average_high_credit = null)
    {
        // validation for constraint: int
        if (!is_null($average_high_credit) && !is_numeric($average_high_credit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($average_high_credit)), __LINE__);
        }
        $this->average_high_credit = $average_high_credit;
        return $this;
    }
    /**
     * Get high_credit value
     * @return int|null
     */
    public function getHigh_credit()
    {
        return $this->high_credit;
    }
    /**
     * Set high_credit value
     * @param int $high_credit
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setHigh_credit($high_credit = null)
    {
        // validation for constraint: int
        if (!is_null($high_credit) && !is_numeric($high_credit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($high_credit)), __LINE__);
        }
        $this->high_credit = $high_credit;
        return $this;
    }
    /**
     * Get total_payments value
     * @return int|null
     */
    public function getTotal_payments()
    {
        return $this->total_payments;
    }
    /**
     * Set total_payments value
     * @param int $total_payments
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setTotal_payments($total_payments = null)
    {
        // validation for constraint: int
        if (!is_null($total_payments) && !is_numeric($total_payments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total_payments)), __LINE__);
        }
        $this->total_payments = $total_payments;
        return $this;
    }
    /**
     * Get headquarters value
     * @return \Webservices\StructType\DNBRelatedBusiness|null
     */
    public function getHeadquarters()
    {
        return $this->headquarters;
    }
    /**
     * Set headquarters value
     * @param \Webservices\StructType\DNBRelatedBusiness $headquarters
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setHeadquarters(\Webservices\StructType\DNBRelatedBusiness $headquarters = null)
    {
        $this->headquarters = $headquarters;
        return $this;
    }
    /**
     * Get parent value
     * @return \Webservices\StructType\DNBRelatedBusiness|null
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Set parent value
     * @param \Webservices\StructType\DNBRelatedBusiness $parent
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setParent(\Webservices\StructType\DNBRelatedBusiness $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }
    /**
     * Get domestic_ultimate value
     * @return \Webservices\StructType\DNBRelatedBusiness|null
     */
    public function getDomestic_ultimate()
    {
        return $this->domestic_ultimate;
    }
    /**
     * Set domestic_ultimate value
     * @param \Webservices\StructType\DNBRelatedBusiness $domestic_ultimate
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setDomestic_ultimate(\Webservices\StructType\DNBRelatedBusiness $domestic_ultimate = null)
    {
        $this->domestic_ultimate = $domestic_ultimate;
        return $this;
    }
    /**
     * Get global_ultimate value
     * @return \Webservices\StructType\DNBRelatedBusiness|null
     */
    public function getGlobal_ultimate()
    {
        return $this->global_ultimate;
    }
    /**
     * Set global_ultimate value
     * @param \Webservices\StructType\DNBRelatedBusiness $global_ultimate
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setGlobal_ultimate(\Webservices\StructType\DNBRelatedBusiness $global_ultimate = null)
    {
        $this->global_ultimate = $global_ultimate;
        return $this;
    }
    /**
     * Get is_subsidiary_location value
     * @return bool|null
     */
    public function getIs_subsidiary_location()
    {
        return $this->is_subsidiary_location;
    }
    /**
     * Set is_subsidiary_location value
     * @param bool $is_subsidiary_location
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setIs_subsidiary_location($is_subsidiary_location = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_subsidiary_location) && !is_bool($is_subsidiary_location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_subsidiary_location)), __LINE__);
        }
        $this->is_subsidiary_location = $is_subsidiary_location;
        return $this;
    }
    /**
     * Get location_status value
     * @return string|null
     */
    public function getLocation_status()
    {
        return $this->location_status;
    }
    /**
     * Set location_status value
     * @param string $location_status
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setLocation_status($location_status = null)
    {
        // validation for constraint: string
        if (!is_null($location_status) && !is_string($location_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location_status)), __LINE__);
        }
        $this->location_status = $location_status;
        return $this;
    }
    /**
     * Get accounts_audited value
     * @return bool|null
     */
    public function getAccounts_audited()
    {
        return $this->accounts_audited;
    }
    /**
     * Set accounts_audited value
     * @param bool $accounts_audited
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setAccounts_audited($accounts_audited = null)
    {
        // validation for constraint: boolean
        if (!is_null($accounts_audited) && !is_bool($accounts_audited)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($accounts_audited)), __LINE__);
        }
        $this->accounts_audited = $accounts_audited;
        return $this;
    }
    /**
     * Get statement_consolidated value
     * @return bool|null
     */
    public function getStatement_consolidated()
    {
        return $this->statement_consolidated;
    }
    /**
     * Set statement_consolidated value
     * @param bool $statement_consolidated
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setStatement_consolidated($statement_consolidated = null)
    {
        // validation for constraint: boolean
        if (!is_null($statement_consolidated) && !is_bool($statement_consolidated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($statement_consolidated)), __LINE__);
        }
        $this->statement_consolidated = $statement_consolidated;
        return $this;
    }
    /**
     * Get figures_estimated value
     * @return bool|null
     */
    public function getFigures_estimated()
    {
        return $this->figures_estimated;
    }
    /**
     * Set figures_estimated value
     * @param bool $figures_estimated
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_estimated($figures_estimated = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_estimated) && !is_bool($figures_estimated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_estimated)), __LINE__);
        }
        $this->figures_estimated = $figures_estimated;
        return $this;
    }
    /**
     * Get figures_forecast value
     * @return bool|null
     */
    public function getFigures_forecast()
    {
        return $this->figures_forecast;
    }
    /**
     * Set figures_forecast value
     * @param bool $figures_forecast
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_forecast($figures_forecast = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_forecast) && !is_bool($figures_forecast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_forecast)), __LINE__);
        }
        $this->figures_forecast = $figures_forecast;
        return $this;
    }
    /**
     * Get year_period value
     * @return bool|null
     */
    public function getYear_period()
    {
        return $this->year_period;
    }
    /**
     * Set year_period value
     * @param bool $year_period
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setYear_period($year_period = null)
    {
        // validation for constraint: boolean
        if (!is_null($year_period) && !is_bool($year_period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($year_period)), __LINE__);
        }
        $this->year_period = $year_period;
        return $this;
    }
    /**
     * Get figures_final value
     * @return bool|null
     */
    public function getFigures_final()
    {
        return $this->figures_final;
    }
    /**
     * Set figures_final value
     * @param bool $figures_final
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_final($figures_final = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_final) && !is_bool($figures_final)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_final)), __LINE__);
        }
        $this->figures_final = $figures_final;
        return $this;
    }
    /**
     * Get opening_statement value
     * @return bool|null
     */
    public function getOpening_statement()
    {
        return $this->opening_statement;
    }
    /**
     * Set opening_statement value
     * @param bool $opening_statement
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setOpening_statement($opening_statement = null)
    {
        // validation for constraint: boolean
        if (!is_null($opening_statement) && !is_bool($opening_statement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($opening_statement)), __LINE__);
        }
        $this->opening_statement = $opening_statement;
        return $this;
    }
    /**
     * Get figures_proforma value
     * @return bool|null
     */
    public function getFigures_proforma()
    {
        return $this->figures_proforma;
    }
    /**
     * Set figures_proforma value
     * @param bool $figures_proforma
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_proforma($figures_proforma = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_proforma) && !is_bool($figures_proforma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_proforma)), __LINE__);
        }
        $this->figures_proforma = $figures_proforma;
        return $this;
    }
    /**
     * Get trial_balance value
     * @return bool|null
     */
    public function getTrial_balance()
    {
        return $this->trial_balance;
    }
    /**
     * Set trial_balance value
     * @param bool $trial_balance
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setTrial_balance($trial_balance = null)
    {
        // validation for constraint: boolean
        if (!is_null($trial_balance) && !is_bool($trial_balance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($trial_balance)), __LINE__);
        }
        $this->trial_balance = $trial_balance;
        return $this;
    }
    /**
     * Get figures_signed value
     * @return bool|null
     */
    public function getFigures_signed()
    {
        return $this->figures_signed;
    }
    /**
     * Set figures_signed value
     * @param bool $figures_signed
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_signed($figures_signed = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_signed) && !is_bool($figures_signed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_signed)), __LINE__);
        }
        $this->figures_signed = $figures_signed;
        return $this;
    }
    /**
     * Get figures_restated value
     * @return bool|null
     */
    public function getFigures_restated()
    {
        return $this->figures_restated;
    }
    /**
     * Set figures_restated value
     * @param bool $figures_restated
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_restated($figures_restated = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_restated) && !is_bool($figures_restated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_restated)), __LINE__);
        }
        $this->figures_restated = $figures_restated;
        return $this;
    }
    /**
     * Get figures_unbalanced value
     * @return bool|null
     */
    public function getFigures_unbalanced()
    {
        return $this->figures_unbalanced;
    }
    /**
     * Set figures_unbalanced value
     * @param bool $figures_unbalanced
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_unbalanced($figures_unbalanced = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_unbalanced) && !is_bool($figures_unbalanced)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_unbalanced)), __LINE__);
        }
        $this->figures_unbalanced = $figures_unbalanced;
        return $this;
    }
    /**
     * Get figures_qualified value
     * @return bool|null
     */
    public function getFigures_qualified()
    {
        return $this->figures_qualified;
    }
    /**
     * Set figures_qualified value
     * @param bool $figures_qualified
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFigures_qualified($figures_qualified = null)
    {
        // validation for constraint: boolean
        if (!is_null($figures_qualified) && !is_bool($figures_qualified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($figures_qualified)), __LINE__);
        }
        $this->figures_qualified = $figures_qualified;
        return $this;
    }
    /**
     * Get accounts_receivable value
     * @return int|null
     */
    public function getAccounts_receivable()
    {
        return $this->accounts_receivable;
    }
    /**
     * Set accounts_receivable value
     * @param int $accounts_receivable
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setAccounts_receivable($accounts_receivable = null)
    {
        // validation for constraint: int
        if (!is_null($accounts_receivable) && !is_numeric($accounts_receivable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accounts_receivable)), __LINE__);
        }
        $this->accounts_receivable = $accounts_receivable;
        return $this;
    }
    /**
     * Get liquid_assets value
     * @return int|null
     */
    public function getLiquid_assets()
    {
        return $this->liquid_assets;
    }
    /**
     * Set liquid_assets value
     * @param int $liquid_assets
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setLiquid_assets($liquid_assets = null)
    {
        // validation for constraint: int
        if (!is_null($liquid_assets) && !is_numeric($liquid_assets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($liquid_assets)), __LINE__);
        }
        $this->liquid_assets = $liquid_assets;
        return $this;
    }
    /**
     * Get inventory value
     * @return int|null
     */
    public function getInventory()
    {
        return $this->inventory;
    }
    /**
     * Set inventory value
     * @param int $inventory
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setInventory($inventory = null)
    {
        // validation for constraint: int
        if (!is_null($inventory) && !is_numeric($inventory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inventory)), __LINE__);
        }
        $this->inventory = $inventory;
        return $this;
    }
    /**
     * Get total_current_assets value
     * @return int|null
     */
    public function getTotal_current_assets()
    {
        return $this->total_current_assets;
    }
    /**
     * Set total_current_assets value
     * @param int $total_current_assets
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setTotal_current_assets($total_current_assets = null)
    {
        // validation for constraint: int
        if (!is_null($total_current_assets) && !is_numeric($total_current_assets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total_current_assets)), __LINE__);
        }
        $this->total_current_assets = $total_current_assets;
        return $this;
    }
    /**
     * Get total_assets value
     * @return int|null
     */
    public function getTotal_assets()
    {
        return $this->total_assets;
    }
    /**
     * Set total_assets value
     * @param int $total_assets
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setTotal_assets($total_assets = null)
    {
        // validation for constraint: int
        if (!is_null($total_assets) && !is_numeric($total_assets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total_assets)), __LINE__);
        }
        $this->total_assets = $total_assets;
        return $this;
    }
    /**
     * Get accounts_payable value
     * @return int|null
     */
    public function getAccounts_payable()
    {
        return $this->accounts_payable;
    }
    /**
     * Set accounts_payable value
     * @param int $accounts_payable
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setAccounts_payable($accounts_payable = null)
    {
        // validation for constraint: int
        if (!is_null($accounts_payable) && !is_numeric($accounts_payable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accounts_payable)), __LINE__);
        }
        $this->accounts_payable = $accounts_payable;
        return $this;
    }
    /**
     * Get total_current_liabilities value
     * @return int|null
     */
    public function getTotal_current_liabilities()
    {
        return $this->total_current_liabilities;
    }
    /**
     * Set total_current_liabilities value
     * @param int $total_current_liabilities
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setTotal_current_liabilities($total_current_liabilities = null)
    {
        // validation for constraint: int
        if (!is_null($total_current_liabilities) && !is_numeric($total_current_liabilities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total_current_liabilities)), __LINE__);
        }
        $this->total_current_liabilities = $total_current_liabilities;
        return $this;
    }
    /**
     * Get total_liabilities value
     * @return int|null
     */
    public function getTotal_liabilities()
    {
        return $this->total_liabilities;
    }
    /**
     * Set total_liabilities value
     * @param int $total_liabilities
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setTotal_liabilities($total_liabilities = null)
    {
        // validation for constraint: int
        if (!is_null($total_liabilities) && !is_numeric($total_liabilities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total_liabilities)), __LINE__);
        }
        $this->total_liabilities = $total_liabilities;
        return $this;
    }
    /**
     * Get net_income value
     * @return int|null
     */
    public function getNet_income()
    {
        return $this->net_income;
    }
    /**
     * Set net_income value
     * @param int $net_income
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setNet_income($net_income = null)
    {
        // validation for constraint: int
        if (!is_null($net_income) && !is_numeric($net_income)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_income)), __LINE__);
        }
        $this->net_income = $net_income;
        return $this;
    }
    /**
     * Get quick_ratio value
     * @return float|null
     */
    public function getQuick_ratio()
    {
        return $this->quick_ratio;
    }
    /**
     * Set quick_ratio value
     * @param float $quick_ratio
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setQuick_ratio($quick_ratio = null)
    {
        $this->quick_ratio = $quick_ratio;
        return $this;
    }
    /**
     * Get current_ratio value
     * @return float|null
     */
    public function getCurrent_ratio()
    {
        return $this->current_ratio;
    }
    /**
     * Set current_ratio value
     * @param float $current_ratio
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setCurrent_ratio($current_ratio = null)
    {
        $this->current_ratio = $current_ratio;
        return $this;
    }
    /**
     * Get previous_net_worth value
     * @return int|null
     */
    public function getPrevious_net_worth()
    {
        return $this->previous_net_worth;
    }
    /**
     * Set previous_net_worth value
     * @param int $previous_net_worth
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setPrevious_net_worth($previous_net_worth = null)
    {
        // validation for constraint: int
        if (!is_null($previous_net_worth) && !is_numeric($previous_net_worth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previous_net_worth)), __LINE__);
        }
        $this->previous_net_worth = $previous_net_worth;
        return $this;
    }
    /**
     * Get previous_sales value
     * @return int|null
     */
    public function getPrevious_sales()
    {
        return $this->previous_sales;
    }
    /**
     * Set previous_sales value
     * @param int $previous_sales
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setPrevious_sales($previous_sales = null)
    {
        // validation for constraint: int
        if (!is_null($previous_sales) && !is_numeric($previous_sales)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previous_sales)), __LINE__);
        }
        $this->previous_sales = $previous_sales;
        return $this;
    }
    /**
     * Get previous_statement_date value
     * @return string|null
     */
    public function getPrevious_statement_date()
    {
        return $this->previous_statement_date;
    }
    /**
     * Set previous_statement_date value
     * @param string $previous_statement_date
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setPrevious_statement_date($previous_statement_date = null)
    {
        // validation for constraint: string
        if (!is_null($previous_statement_date) && !is_string($previous_statement_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_statement_date)), __LINE__);
        }
        $this->previous_statement_date = $previous_statement_date;
        return $this;
    }
    /**
     * Get line_of_business value
     * @return string|null
     */
    public function getLine_of_business()
    {
        return $this->line_of_business;
    }
    /**
     * Set line_of_business value
     * @param string $line_of_business
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setLine_of_business($line_of_business = null)
    {
        // validation for constraint: string
        if (!is_null($line_of_business) && !is_string($line_of_business)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line_of_business)), __LINE__);
        }
        $this->line_of_business = $line_of_business;
        return $this;
    }
    /**
     * Get failure_score value
     * @return \Webservices\ArrayType\DNBScoreGroupArray|null
     */
    public function getFailure_score()
    {
        return $this->failure_score;
    }
    /**
     * Set failure_score value
     * @param \Webservices\ArrayType\DNBScoreGroupArray $failure_score
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setFailure_score(\Webservices\ArrayType\DNBScoreGroupArray $failure_score = null)
    {
        $this->failure_score = $failure_score;
        return $this;
    }
    /**
     * Get credit_score value
     * @return \Webservices\ArrayType\DNBScoreGroupArray|null
     */
    public function getCredit_score()
    {
        return $this->credit_score;
    }
    /**
     * Set credit_score value
     * @param \Webservices\ArrayType\DNBScoreGroupArray $credit_score
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setCredit_score(\Webservices\ArrayType\DNBScoreGroupArray $credit_score = null)
    {
        $this->credit_score = $credit_score;
        return $this;
    }
    /**
     * Get global_failure_score value
     * @return \Webservices\ArrayType\DNBScoreGroupArray|null
     */
    public function getGlobal_failure_score()
    {
        return $this->global_failure_score;
    }
    /**
     * Set global_failure_score value
     * @param \Webservices\ArrayType\DNBScoreGroupArray $global_failure_score
     * @return \Webservices\StructType\DNBEnterpriseManagement
     */
    public function setGlobal_failure_score(\Webservices\ArrayType\DNBScoreGroupArray $global_failure_score = null)
    {
        $this->global_failure_score = $global_failure_score;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBEnterpriseManagement
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
