<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBalanceSheet StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBalanceSheet extends AbstractStructBase
{
    /**
     * The year_end_date
     * @var string
     */
    public $year_end_date;
    /**
     * The number_of_weeks
     * @var int
     */
    public $number_of_weeks;
    /**
     * The currency
     * @var string
     */
    public $currency;
    /**
     * The consolidated_accounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $consolidated_accounts;
    /**
     * The land_and_buildings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $land_and_buildings;
    /**
     * The plant_and_machinery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $plant_and_machinery;
    /**
     * The other_tangible_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_tangible_assets;
    /**
     * The total_tangible_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_tangible_assets;
    /**
     * The goodwill
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $goodwill;
    /**
     * The other_intangible_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_intangible_assets;
    /**
     * The total_intangible_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_intangible_assets;
    /**
     * The investments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $investments;
    /**
     * The loans_to_group
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $loans_to_group;
    /**
     * The other_loans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_loans;
    /**
     * The miscellaneous_fixed_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $miscellaneous_fixed_assets;
    /**
     * The total_other_fixed_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_other_fixed_assets;
    /**
     * The total_fixed_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_fixed_assets;
    /**
     * The raw_materials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $raw_materials;
    /**
     * The work_in_progress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $work_in_progress;
    /**
     * The finished_goods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $finished_goods;
    /**
     * The other_inventories
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_inventories;
    /**
     * The total_inventories
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_inventories;
    /**
     * The trade_receivables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $trade_receivables;
    /**
     * The group_receivables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $group_receivables;
    /**
     * The receivables_due_after1year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $receivables_due_after1year;
    /**
     * The miscellaneous_receivables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $miscellaneous_receivables;
    /**
     * The total_receivables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_receivables;
    /**
     * The cash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $cash;
    /**
     * The other_current_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_current_assets;
    /**
     * The total_current_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_current_assets;
    /**
     * The total_assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_assets;
    /**
     * The trade_payables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $trade_payables;
    /**
     * The bank_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $bank_liabilities;
    /**
     * The other_loans_or_finance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_loans_or_finance;
    /**
     * The group_payables
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $group_payables;
    /**
     * The miscellaneous_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $miscellaneous_liabilities;
    /**
     * The total_current_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_current_liabilities;
    /**
     * The trade_payables_due_after1year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $trade_payables_due_after1year;
    /**
     * The bank_liabilities_due_after1year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $bank_liabilities_due_after1year;
    /**
     * The other_loans_or_finance_due_after1year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_loans_or_finance_due_after1year;
    /**
     * The group_payables_due_after1year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $group_payables_due_after1year;
    /**
     * The miscellaneous_liabilities_due_after1year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $miscellaneous_liabilities_due_after1year;
    /**
     * The total_long_term_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_long_term_liabilities;
    /**
     * The total_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_liabilities;
    /**
     * The called_up_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $called_up_share_capital;
    /**
     * The share_premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $share_premium;
    /**
     * The revenue_reserves
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $revenue_reserves;
    /**
     * The other_reserves
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_reserves;
    /**
     * The total_shareholders_equity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_shareholders_equity;
    /**
     * Constructor method for CreditsafeBalanceSheet
     * @uses CreditsafeBalanceSheet::setYear_end_date()
     * @uses CreditsafeBalanceSheet::setNumber_of_weeks()
     * @uses CreditsafeBalanceSheet::setCurrency()
     * @uses CreditsafeBalanceSheet::setConsolidated_accounts()
     * @uses CreditsafeBalanceSheet::setLand_and_buildings()
     * @uses CreditsafeBalanceSheet::setPlant_and_machinery()
     * @uses CreditsafeBalanceSheet::setOther_tangible_assets()
     * @uses CreditsafeBalanceSheet::setTotal_tangible_assets()
     * @uses CreditsafeBalanceSheet::setGoodwill()
     * @uses CreditsafeBalanceSheet::setOther_intangible_assets()
     * @uses CreditsafeBalanceSheet::setTotal_intangible_assets()
     * @uses CreditsafeBalanceSheet::setInvestments()
     * @uses CreditsafeBalanceSheet::setLoans_to_group()
     * @uses CreditsafeBalanceSheet::setOther_loans()
     * @uses CreditsafeBalanceSheet::setMiscellaneous_fixed_assets()
     * @uses CreditsafeBalanceSheet::setTotal_other_fixed_assets()
     * @uses CreditsafeBalanceSheet::setTotal_fixed_assets()
     * @uses CreditsafeBalanceSheet::setRaw_materials()
     * @uses CreditsafeBalanceSheet::setWork_in_progress()
     * @uses CreditsafeBalanceSheet::setFinished_goods()
     * @uses CreditsafeBalanceSheet::setOther_inventories()
     * @uses CreditsafeBalanceSheet::setTotal_inventories()
     * @uses CreditsafeBalanceSheet::setTrade_receivables()
     * @uses CreditsafeBalanceSheet::setGroup_receivables()
     * @uses CreditsafeBalanceSheet::setReceivables_due_after1year()
     * @uses CreditsafeBalanceSheet::setMiscellaneous_receivables()
     * @uses CreditsafeBalanceSheet::setTotal_receivables()
     * @uses CreditsafeBalanceSheet::setCash()
     * @uses CreditsafeBalanceSheet::setOther_current_assets()
     * @uses CreditsafeBalanceSheet::setTotal_current_assets()
     * @uses CreditsafeBalanceSheet::setTotal_assets()
     * @uses CreditsafeBalanceSheet::setTrade_payables()
     * @uses CreditsafeBalanceSheet::setBank_liabilities()
     * @uses CreditsafeBalanceSheet::setOther_loans_or_finance()
     * @uses CreditsafeBalanceSheet::setGroup_payables()
     * @uses CreditsafeBalanceSheet::setMiscellaneous_liabilities()
     * @uses CreditsafeBalanceSheet::setTotal_current_liabilities()
     * @uses CreditsafeBalanceSheet::setTrade_payables_due_after1year()
     * @uses CreditsafeBalanceSheet::setBank_liabilities_due_after1year()
     * @uses CreditsafeBalanceSheet::setOther_loans_or_finance_due_after1year()
     * @uses CreditsafeBalanceSheet::setGroup_payables_due_after1year()
     * @uses CreditsafeBalanceSheet::setMiscellaneous_liabilities_due_after1year()
     * @uses CreditsafeBalanceSheet::setTotal_long_term_liabilities()
     * @uses CreditsafeBalanceSheet::setTotal_liabilities()
     * @uses CreditsafeBalanceSheet::setCalled_up_share_capital()
     * @uses CreditsafeBalanceSheet::setShare_premium()
     * @uses CreditsafeBalanceSheet::setRevenue_reserves()
     * @uses CreditsafeBalanceSheet::setOther_reserves()
     * @uses CreditsafeBalanceSheet::setTotal_shareholders_equity()
     * @param string $year_end_date
     * @param int $number_of_weeks
     * @param string $currency
     * @param bool $consolidated_accounts
     * @param float $land_and_buildings
     * @param float $plant_and_machinery
     * @param float $other_tangible_assets
     * @param float $total_tangible_assets
     * @param float $goodwill
     * @param float $other_intangible_assets
     * @param float $total_intangible_assets
     * @param float $investments
     * @param float $loans_to_group
     * @param float $other_loans
     * @param float $miscellaneous_fixed_assets
     * @param float $total_other_fixed_assets
     * @param float $total_fixed_assets
     * @param float $raw_materials
     * @param float $work_in_progress
     * @param float $finished_goods
     * @param float $other_inventories
     * @param float $total_inventories
     * @param float $trade_receivables
     * @param float $group_receivables
     * @param float $receivables_due_after1year
     * @param float $miscellaneous_receivables
     * @param float $total_receivables
     * @param float $cash
     * @param float $other_current_assets
     * @param float $total_current_assets
     * @param float $total_assets
     * @param float $trade_payables
     * @param float $bank_liabilities
     * @param float $other_loans_or_finance
     * @param float $group_payables
     * @param float $miscellaneous_liabilities
     * @param float $total_current_liabilities
     * @param float $trade_payables_due_after1year
     * @param float $bank_liabilities_due_after1year
     * @param float $other_loans_or_finance_due_after1year
     * @param float $group_payables_due_after1year
     * @param float $miscellaneous_liabilities_due_after1year
     * @param float $total_long_term_liabilities
     * @param float $total_liabilities
     * @param float $called_up_share_capital
     * @param float $share_premium
     * @param float $revenue_reserves
     * @param float $other_reserves
     * @param float $total_shareholders_equity
     */
    public function __construct($year_end_date = null, $number_of_weeks = null, $currency = null, $consolidated_accounts = null, $land_and_buildings = null, $plant_and_machinery = null, $other_tangible_assets = null, $total_tangible_assets = null, $goodwill = null, $other_intangible_assets = null, $total_intangible_assets = null, $investments = null, $loans_to_group = null, $other_loans = null, $miscellaneous_fixed_assets = null, $total_other_fixed_assets = null, $total_fixed_assets = null, $raw_materials = null, $work_in_progress = null, $finished_goods = null, $other_inventories = null, $total_inventories = null, $trade_receivables = null, $group_receivables = null, $receivables_due_after1year = null, $miscellaneous_receivables = null, $total_receivables = null, $cash = null, $other_current_assets = null, $total_current_assets = null, $total_assets = null, $trade_payables = null, $bank_liabilities = null, $other_loans_or_finance = null, $group_payables = null, $miscellaneous_liabilities = null, $total_current_liabilities = null, $trade_payables_due_after1year = null, $bank_liabilities_due_after1year = null, $other_loans_or_finance_due_after1year = null, $group_payables_due_after1year = null, $miscellaneous_liabilities_due_after1year = null, $total_long_term_liabilities = null, $total_liabilities = null, $called_up_share_capital = null, $share_premium = null, $revenue_reserves = null, $other_reserves = null, $total_shareholders_equity = null)
    {
        $this
            ->setYear_end_date($year_end_date)
            ->setNumber_of_weeks($number_of_weeks)
            ->setCurrency($currency)
            ->setConsolidated_accounts($consolidated_accounts)
            ->setLand_and_buildings($land_and_buildings)
            ->setPlant_and_machinery($plant_and_machinery)
            ->setOther_tangible_assets($other_tangible_assets)
            ->setTotal_tangible_assets($total_tangible_assets)
            ->setGoodwill($goodwill)
            ->setOther_intangible_assets($other_intangible_assets)
            ->setTotal_intangible_assets($total_intangible_assets)
            ->setInvestments($investments)
            ->setLoans_to_group($loans_to_group)
            ->setOther_loans($other_loans)
            ->setMiscellaneous_fixed_assets($miscellaneous_fixed_assets)
            ->setTotal_other_fixed_assets($total_other_fixed_assets)
            ->setTotal_fixed_assets($total_fixed_assets)
            ->setRaw_materials($raw_materials)
            ->setWork_in_progress($work_in_progress)
            ->setFinished_goods($finished_goods)
            ->setOther_inventories($other_inventories)
            ->setTotal_inventories($total_inventories)
            ->setTrade_receivables($trade_receivables)
            ->setGroup_receivables($group_receivables)
            ->setReceivables_due_after1year($receivables_due_after1year)
            ->setMiscellaneous_receivables($miscellaneous_receivables)
            ->setTotal_receivables($total_receivables)
            ->setCash($cash)
            ->setOther_current_assets($other_current_assets)
            ->setTotal_current_assets($total_current_assets)
            ->setTotal_assets($total_assets)
            ->setTrade_payables($trade_payables)
            ->setBank_liabilities($bank_liabilities)
            ->setOther_loans_or_finance($other_loans_or_finance)
            ->setGroup_payables($group_payables)
            ->setMiscellaneous_liabilities($miscellaneous_liabilities)
            ->setTotal_current_liabilities($total_current_liabilities)
            ->setTrade_payables_due_after1year($trade_payables_due_after1year)
            ->setBank_liabilities_due_after1year($bank_liabilities_due_after1year)
            ->setOther_loans_or_finance_due_after1year($other_loans_or_finance_due_after1year)
            ->setGroup_payables_due_after1year($group_payables_due_after1year)
            ->setMiscellaneous_liabilities_due_after1year($miscellaneous_liabilities_due_after1year)
            ->setTotal_long_term_liabilities($total_long_term_liabilities)
            ->setTotal_liabilities($total_liabilities)
            ->setCalled_up_share_capital($called_up_share_capital)
            ->setShare_premium($share_premium)
            ->setRevenue_reserves($revenue_reserves)
            ->setOther_reserves($other_reserves)
            ->setTotal_shareholders_equity($total_shareholders_equity);
    }
    /**
     * Get year_end_date value
     * @return string|null
     */
    public function getYear_end_date()
    {
        return $this->year_end_date;
    }
    /**
     * Set year_end_date value
     * @param string $year_end_date
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setYear_end_date($year_end_date = null)
    {
        // validation for constraint: string
        if (!is_null($year_end_date) && !is_string($year_end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($year_end_date)), __LINE__);
        }
        $this->year_end_date = $year_end_date;
        return $this;
    }
    /**
     * Get number_of_weeks value
     * @return int|null
     */
    public function getNumber_of_weeks()
    {
        return $this->number_of_weeks;
    }
    /**
     * Set number_of_weeks value
     * @param int $number_of_weeks
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setNumber_of_weeks($number_of_weeks = null)
    {
        // validation for constraint: int
        if (!is_null($number_of_weeks) && !is_numeric($number_of_weeks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number_of_weeks)), __LINE__);
        }
        $this->number_of_weeks = $number_of_weeks;
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
     * @return \Webservices\StructType\CreditsafeBalanceSheet
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
     * Get consolidated_accounts value
     * @return bool|null
     */
    public function getConsolidated_accounts()
    {
        return $this->consolidated_accounts;
    }
    /**
     * Set consolidated_accounts value
     * @param bool $consolidated_accounts
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setConsolidated_accounts($consolidated_accounts = null)
    {
        // validation for constraint: boolean
        if (!is_null($consolidated_accounts) && !is_bool($consolidated_accounts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($consolidated_accounts)), __LINE__);
        }
        $this->consolidated_accounts = $consolidated_accounts;
        return $this;
    }
    /**
     * Get land_and_buildings value
     * @return float|null
     */
    public function getLand_and_buildings()
    {
        return $this->land_and_buildings;
    }
    /**
     * Set land_and_buildings value
     * @param float $land_and_buildings
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setLand_and_buildings($land_and_buildings = null)
    {
        $this->land_and_buildings = $land_and_buildings;
        return $this;
    }
    /**
     * Get plant_and_machinery value
     * @return float|null
     */
    public function getPlant_and_machinery()
    {
        return $this->plant_and_machinery;
    }
    /**
     * Set plant_and_machinery value
     * @param float $plant_and_machinery
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setPlant_and_machinery($plant_and_machinery = null)
    {
        $this->plant_and_machinery = $plant_and_machinery;
        return $this;
    }
    /**
     * Get other_tangible_assets value
     * @return float|null
     */
    public function getOther_tangible_assets()
    {
        return $this->other_tangible_assets;
    }
    /**
     * Set other_tangible_assets value
     * @param float $other_tangible_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_tangible_assets($other_tangible_assets = null)
    {
        $this->other_tangible_assets = $other_tangible_assets;
        return $this;
    }
    /**
     * Get total_tangible_assets value
     * @return float|null
     */
    public function getTotal_tangible_assets()
    {
        return $this->total_tangible_assets;
    }
    /**
     * Set total_tangible_assets value
     * @param float $total_tangible_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_tangible_assets($total_tangible_assets = null)
    {
        $this->total_tangible_assets = $total_tangible_assets;
        return $this;
    }
    /**
     * Get goodwill value
     * @return float|null
     */
    public function getGoodwill()
    {
        return $this->goodwill;
    }
    /**
     * Set goodwill value
     * @param float $goodwill
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setGoodwill($goodwill = null)
    {
        $this->goodwill = $goodwill;
        return $this;
    }
    /**
     * Get other_intangible_assets value
     * @return float|null
     */
    public function getOther_intangible_assets()
    {
        return $this->other_intangible_assets;
    }
    /**
     * Set other_intangible_assets value
     * @param float $other_intangible_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_intangible_assets($other_intangible_assets = null)
    {
        $this->other_intangible_assets = $other_intangible_assets;
        return $this;
    }
    /**
     * Get total_intangible_assets value
     * @return float|null
     */
    public function getTotal_intangible_assets()
    {
        return $this->total_intangible_assets;
    }
    /**
     * Set total_intangible_assets value
     * @param float $total_intangible_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_intangible_assets($total_intangible_assets = null)
    {
        $this->total_intangible_assets = $total_intangible_assets;
        return $this;
    }
    /**
     * Get investments value
     * @return float|null
     */
    public function getInvestments()
    {
        return $this->investments;
    }
    /**
     * Set investments value
     * @param float $investments
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setInvestments($investments = null)
    {
        $this->investments = $investments;
        return $this;
    }
    /**
     * Get loans_to_group value
     * @return float|null
     */
    public function getLoans_to_group()
    {
        return $this->loans_to_group;
    }
    /**
     * Set loans_to_group value
     * @param float $loans_to_group
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setLoans_to_group($loans_to_group = null)
    {
        $this->loans_to_group = $loans_to_group;
        return $this;
    }
    /**
     * Get other_loans value
     * @return float|null
     */
    public function getOther_loans()
    {
        return $this->other_loans;
    }
    /**
     * Set other_loans value
     * @param float $other_loans
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_loans($other_loans = null)
    {
        $this->other_loans = $other_loans;
        return $this;
    }
    /**
     * Get miscellaneous_fixed_assets value
     * @return float|null
     */
    public function getMiscellaneous_fixed_assets()
    {
        return $this->miscellaneous_fixed_assets;
    }
    /**
     * Set miscellaneous_fixed_assets value
     * @param float $miscellaneous_fixed_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setMiscellaneous_fixed_assets($miscellaneous_fixed_assets = null)
    {
        $this->miscellaneous_fixed_assets = $miscellaneous_fixed_assets;
        return $this;
    }
    /**
     * Get total_other_fixed_assets value
     * @return float|null
     */
    public function getTotal_other_fixed_assets()
    {
        return $this->total_other_fixed_assets;
    }
    /**
     * Set total_other_fixed_assets value
     * @param float $total_other_fixed_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_other_fixed_assets($total_other_fixed_assets = null)
    {
        $this->total_other_fixed_assets = $total_other_fixed_assets;
        return $this;
    }
    /**
     * Get total_fixed_assets value
     * @return float|null
     */
    public function getTotal_fixed_assets()
    {
        return $this->total_fixed_assets;
    }
    /**
     * Set total_fixed_assets value
     * @param float $total_fixed_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_fixed_assets($total_fixed_assets = null)
    {
        $this->total_fixed_assets = $total_fixed_assets;
        return $this;
    }
    /**
     * Get raw_materials value
     * @return float|null
     */
    public function getRaw_materials()
    {
        return $this->raw_materials;
    }
    /**
     * Set raw_materials value
     * @param float $raw_materials
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setRaw_materials($raw_materials = null)
    {
        $this->raw_materials = $raw_materials;
        return $this;
    }
    /**
     * Get work_in_progress value
     * @return float|null
     */
    public function getWork_in_progress()
    {
        return $this->work_in_progress;
    }
    /**
     * Set work_in_progress value
     * @param float $work_in_progress
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setWork_in_progress($work_in_progress = null)
    {
        $this->work_in_progress = $work_in_progress;
        return $this;
    }
    /**
     * Get finished_goods value
     * @return float|null
     */
    public function getFinished_goods()
    {
        return $this->finished_goods;
    }
    /**
     * Set finished_goods value
     * @param float $finished_goods
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setFinished_goods($finished_goods = null)
    {
        $this->finished_goods = $finished_goods;
        return $this;
    }
    /**
     * Get other_inventories value
     * @return float|null
     */
    public function getOther_inventories()
    {
        return $this->other_inventories;
    }
    /**
     * Set other_inventories value
     * @param float $other_inventories
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_inventories($other_inventories = null)
    {
        $this->other_inventories = $other_inventories;
        return $this;
    }
    /**
     * Get total_inventories value
     * @return float|null
     */
    public function getTotal_inventories()
    {
        return $this->total_inventories;
    }
    /**
     * Set total_inventories value
     * @param float $total_inventories
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_inventories($total_inventories = null)
    {
        $this->total_inventories = $total_inventories;
        return $this;
    }
    /**
     * Get trade_receivables value
     * @return float|null
     */
    public function getTrade_receivables()
    {
        return $this->trade_receivables;
    }
    /**
     * Set trade_receivables value
     * @param float $trade_receivables
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTrade_receivables($trade_receivables = null)
    {
        $this->trade_receivables = $trade_receivables;
        return $this;
    }
    /**
     * Get group_receivables value
     * @return float|null
     */
    public function getGroup_receivables()
    {
        return $this->group_receivables;
    }
    /**
     * Set group_receivables value
     * @param float $group_receivables
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setGroup_receivables($group_receivables = null)
    {
        $this->group_receivables = $group_receivables;
        return $this;
    }
    /**
     * Get receivables_due_after1year value
     * @return float|null
     */
    public function getReceivables_due_after1year()
    {
        return $this->receivables_due_after1year;
    }
    /**
     * Set receivables_due_after1year value
     * @param float $receivables_due_after1year
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setReceivables_due_after1year($receivables_due_after1year = null)
    {
        $this->receivables_due_after1year = $receivables_due_after1year;
        return $this;
    }
    /**
     * Get miscellaneous_receivables value
     * @return float|null
     */
    public function getMiscellaneous_receivables()
    {
        return $this->miscellaneous_receivables;
    }
    /**
     * Set miscellaneous_receivables value
     * @param float $miscellaneous_receivables
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setMiscellaneous_receivables($miscellaneous_receivables = null)
    {
        $this->miscellaneous_receivables = $miscellaneous_receivables;
        return $this;
    }
    /**
     * Get total_receivables value
     * @return float|null
     */
    public function getTotal_receivables()
    {
        return $this->total_receivables;
    }
    /**
     * Set total_receivables value
     * @param float $total_receivables
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_receivables($total_receivables = null)
    {
        $this->total_receivables = $total_receivables;
        return $this;
    }
    /**
     * Get cash value
     * @return float|null
     */
    public function getCash()
    {
        return $this->cash;
    }
    /**
     * Set cash value
     * @param float $cash
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setCash($cash = null)
    {
        $this->cash = $cash;
        return $this;
    }
    /**
     * Get other_current_assets value
     * @return float|null
     */
    public function getOther_current_assets()
    {
        return $this->other_current_assets;
    }
    /**
     * Set other_current_assets value
     * @param float $other_current_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_current_assets($other_current_assets = null)
    {
        $this->other_current_assets = $other_current_assets;
        return $this;
    }
    /**
     * Get total_current_assets value
     * @return float|null
     */
    public function getTotal_current_assets()
    {
        return $this->total_current_assets;
    }
    /**
     * Set total_current_assets value
     * @param float $total_current_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_current_assets($total_current_assets = null)
    {
        $this->total_current_assets = $total_current_assets;
        return $this;
    }
    /**
     * Get total_assets value
     * @return float|null
     */
    public function getTotal_assets()
    {
        return $this->total_assets;
    }
    /**
     * Set total_assets value
     * @param float $total_assets
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_assets($total_assets = null)
    {
        $this->total_assets = $total_assets;
        return $this;
    }
    /**
     * Get trade_payables value
     * @return float|null
     */
    public function getTrade_payables()
    {
        return $this->trade_payables;
    }
    /**
     * Set trade_payables value
     * @param float $trade_payables
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTrade_payables($trade_payables = null)
    {
        $this->trade_payables = $trade_payables;
        return $this;
    }
    /**
     * Get bank_liabilities value
     * @return float|null
     */
    public function getBank_liabilities()
    {
        return $this->bank_liabilities;
    }
    /**
     * Set bank_liabilities value
     * @param float $bank_liabilities
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setBank_liabilities($bank_liabilities = null)
    {
        $this->bank_liabilities = $bank_liabilities;
        return $this;
    }
    /**
     * Get other_loans_or_finance value
     * @return float|null
     */
    public function getOther_loans_or_finance()
    {
        return $this->other_loans_or_finance;
    }
    /**
     * Set other_loans_or_finance value
     * @param float $other_loans_or_finance
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_loans_or_finance($other_loans_or_finance = null)
    {
        $this->other_loans_or_finance = $other_loans_or_finance;
        return $this;
    }
    /**
     * Get group_payables value
     * @return float|null
     */
    public function getGroup_payables()
    {
        return $this->group_payables;
    }
    /**
     * Set group_payables value
     * @param float $group_payables
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setGroup_payables($group_payables = null)
    {
        $this->group_payables = $group_payables;
        return $this;
    }
    /**
     * Get miscellaneous_liabilities value
     * @return float|null
     */
    public function getMiscellaneous_liabilities()
    {
        return $this->miscellaneous_liabilities;
    }
    /**
     * Set miscellaneous_liabilities value
     * @param float $miscellaneous_liabilities
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setMiscellaneous_liabilities($miscellaneous_liabilities = null)
    {
        $this->miscellaneous_liabilities = $miscellaneous_liabilities;
        return $this;
    }
    /**
     * Get total_current_liabilities value
     * @return float|null
     */
    public function getTotal_current_liabilities()
    {
        return $this->total_current_liabilities;
    }
    /**
     * Set total_current_liabilities value
     * @param float $total_current_liabilities
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_current_liabilities($total_current_liabilities = null)
    {
        $this->total_current_liabilities = $total_current_liabilities;
        return $this;
    }
    /**
     * Get trade_payables_due_after1year value
     * @return float|null
     */
    public function getTrade_payables_due_after1year()
    {
        return $this->trade_payables_due_after1year;
    }
    /**
     * Set trade_payables_due_after1year value
     * @param float $trade_payables_due_after1year
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTrade_payables_due_after1year($trade_payables_due_after1year = null)
    {
        $this->trade_payables_due_after1year = $trade_payables_due_after1year;
        return $this;
    }
    /**
     * Get bank_liabilities_due_after1year value
     * @return float|null
     */
    public function getBank_liabilities_due_after1year()
    {
        return $this->bank_liabilities_due_after1year;
    }
    /**
     * Set bank_liabilities_due_after1year value
     * @param float $bank_liabilities_due_after1year
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setBank_liabilities_due_after1year($bank_liabilities_due_after1year = null)
    {
        $this->bank_liabilities_due_after1year = $bank_liabilities_due_after1year;
        return $this;
    }
    /**
     * Get other_loans_or_finance_due_after1year value
     * @return float|null
     */
    public function getOther_loans_or_finance_due_after1year()
    {
        return $this->other_loans_or_finance_due_after1year;
    }
    /**
     * Set other_loans_or_finance_due_after1year value
     * @param float $other_loans_or_finance_due_after1year
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_loans_or_finance_due_after1year($other_loans_or_finance_due_after1year = null)
    {
        $this->other_loans_or_finance_due_after1year = $other_loans_or_finance_due_after1year;
        return $this;
    }
    /**
     * Get group_payables_due_after1year value
     * @return float|null
     */
    public function getGroup_payables_due_after1year()
    {
        return $this->group_payables_due_after1year;
    }
    /**
     * Set group_payables_due_after1year value
     * @param float $group_payables_due_after1year
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setGroup_payables_due_after1year($group_payables_due_after1year = null)
    {
        $this->group_payables_due_after1year = $group_payables_due_after1year;
        return $this;
    }
    /**
     * Get miscellaneous_liabilities_due_after1year value
     * @return float|null
     */
    public function getMiscellaneous_liabilities_due_after1year()
    {
        return $this->miscellaneous_liabilities_due_after1year;
    }
    /**
     * Set miscellaneous_liabilities_due_after1year value
     * @param float $miscellaneous_liabilities_due_after1year
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setMiscellaneous_liabilities_due_after1year($miscellaneous_liabilities_due_after1year = null)
    {
        $this->miscellaneous_liabilities_due_after1year = $miscellaneous_liabilities_due_after1year;
        return $this;
    }
    /**
     * Get total_long_term_liabilities value
     * @return float|null
     */
    public function getTotal_long_term_liabilities()
    {
        return $this->total_long_term_liabilities;
    }
    /**
     * Set total_long_term_liabilities value
     * @param float $total_long_term_liabilities
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_long_term_liabilities($total_long_term_liabilities = null)
    {
        $this->total_long_term_liabilities = $total_long_term_liabilities;
        return $this;
    }
    /**
     * Get total_liabilities value
     * @return float|null
     */
    public function getTotal_liabilities()
    {
        return $this->total_liabilities;
    }
    /**
     * Set total_liabilities value
     * @param float $total_liabilities
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_liabilities($total_liabilities = null)
    {
        $this->total_liabilities = $total_liabilities;
        return $this;
    }
    /**
     * Get called_up_share_capital value
     * @return float|null
     */
    public function getCalled_up_share_capital()
    {
        return $this->called_up_share_capital;
    }
    /**
     * Set called_up_share_capital value
     * @param float $called_up_share_capital
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setCalled_up_share_capital($called_up_share_capital = null)
    {
        $this->called_up_share_capital = $called_up_share_capital;
        return $this;
    }
    /**
     * Get share_premium value
     * @return float|null
     */
    public function getShare_premium()
    {
        return $this->share_premium;
    }
    /**
     * Set share_premium value
     * @param float $share_premium
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setShare_premium($share_premium = null)
    {
        $this->share_premium = $share_premium;
        return $this;
    }
    /**
     * Get revenue_reserves value
     * @return float|null
     */
    public function getRevenue_reserves()
    {
        return $this->revenue_reserves;
    }
    /**
     * Set revenue_reserves value
     * @param float $revenue_reserves
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setRevenue_reserves($revenue_reserves = null)
    {
        $this->revenue_reserves = $revenue_reserves;
        return $this;
    }
    /**
     * Get other_reserves value
     * @return float|null
     */
    public function getOther_reserves()
    {
        return $this->other_reserves;
    }
    /**
     * Set other_reserves value
     * @param float $other_reserves
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setOther_reserves($other_reserves = null)
    {
        $this->other_reserves = $other_reserves;
        return $this;
    }
    /**
     * Get total_shareholders_equity value
     * @return float|null
     */
    public function getTotal_shareholders_equity()
    {
        return $this->total_shareholders_equity;
    }
    /**
     * Set total_shareholders_equity value
     * @param float $total_shareholders_equity
     * @return \Webservices\StructType\CreditsafeBalanceSheet
     */
    public function setTotal_shareholders_equity($total_shareholders_equity = null)
    {
        $this->total_shareholders_equity = $total_shareholders_equity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBalanceSheet
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
