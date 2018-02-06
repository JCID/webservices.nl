<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeProfitAndLossFigures StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeProfitAndLossFigures extends AbstractStructBase
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
     * The revenue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $revenue;
    /**
     * The operating_costs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $operating_costs;
    /**
     * The operating_profit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $operating_profit;
    /**
     * The wages_and_salaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $wages_and_salaries;
    /**
     * The pension_costs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $pension_costs;
    /**
     * The depreciation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $depreciation;
    /**
     * The amortisation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $amortisation;
    /**
     * The financial_income
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $financial_income;
    /**
     * The financial_expenses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $financial_expenses;
    /**
     * The extraordinary_income
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $extraordinary_income;
    /**
     * The extraordinary_costs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $extraordinary_costs;
    /**
     * The profit_before_tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $profit_before_tax;
    /**
     * The tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $tax;
    /**
     * The profit_after_tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $profit_after_tax;
    /**
     * The dividends
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $dividends;
    /**
     * The minority_interests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $minority_interests;
    /**
     * The other_appropriations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $other_appropriations;
    /**
     * The retained_profit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $retained_profit;
    /**
     * Constructor method for CreditsafeProfitAndLossFigures
     * @uses CreditsafeProfitAndLossFigures::setYear_end_date()
     * @uses CreditsafeProfitAndLossFigures::setNumber_of_weeks()
     * @uses CreditsafeProfitAndLossFigures::setCurrency()
     * @uses CreditsafeProfitAndLossFigures::setConsolidated_accounts()
     * @uses CreditsafeProfitAndLossFigures::setRevenue()
     * @uses CreditsafeProfitAndLossFigures::setOperating_costs()
     * @uses CreditsafeProfitAndLossFigures::setOperating_profit()
     * @uses CreditsafeProfitAndLossFigures::setWages_and_salaries()
     * @uses CreditsafeProfitAndLossFigures::setPension_costs()
     * @uses CreditsafeProfitAndLossFigures::setDepreciation()
     * @uses CreditsafeProfitAndLossFigures::setAmortisation()
     * @uses CreditsafeProfitAndLossFigures::setFinancial_income()
     * @uses CreditsafeProfitAndLossFigures::setFinancial_expenses()
     * @uses CreditsafeProfitAndLossFigures::setExtraordinary_income()
     * @uses CreditsafeProfitAndLossFigures::setExtraordinary_costs()
     * @uses CreditsafeProfitAndLossFigures::setProfit_before_tax()
     * @uses CreditsafeProfitAndLossFigures::setTax()
     * @uses CreditsafeProfitAndLossFigures::setProfit_after_tax()
     * @uses CreditsafeProfitAndLossFigures::setDividends()
     * @uses CreditsafeProfitAndLossFigures::setMinority_interests()
     * @uses CreditsafeProfitAndLossFigures::setOther_appropriations()
     * @uses CreditsafeProfitAndLossFigures::setRetained_profit()
     * @param string $year_end_date
     * @param int $number_of_weeks
     * @param string $currency
     * @param bool $consolidated_accounts
     * @param float $revenue
     * @param float $operating_costs
     * @param float $operating_profit
     * @param float $wages_and_salaries
     * @param float $pension_costs
     * @param float $depreciation
     * @param float $amortisation
     * @param float $financial_income
     * @param float $financial_expenses
     * @param float $extraordinary_income
     * @param float $extraordinary_costs
     * @param float $profit_before_tax
     * @param float $tax
     * @param float $profit_after_tax
     * @param float $dividends
     * @param float $minority_interests
     * @param float $other_appropriations
     * @param float $retained_profit
     */
    public function __construct($year_end_date = null, $number_of_weeks = null, $currency = null, $consolidated_accounts = null, $revenue = null, $operating_costs = null, $operating_profit = null, $wages_and_salaries = null, $pension_costs = null, $depreciation = null, $amortisation = null, $financial_income = null, $financial_expenses = null, $extraordinary_income = null, $extraordinary_costs = null, $profit_before_tax = null, $tax = null, $profit_after_tax = null, $dividends = null, $minority_interests = null, $other_appropriations = null, $retained_profit = null)
    {
        $this
            ->setYear_end_date($year_end_date)
            ->setNumber_of_weeks($number_of_weeks)
            ->setCurrency($currency)
            ->setConsolidated_accounts($consolidated_accounts)
            ->setRevenue($revenue)
            ->setOperating_costs($operating_costs)
            ->setOperating_profit($operating_profit)
            ->setWages_and_salaries($wages_and_salaries)
            ->setPension_costs($pension_costs)
            ->setDepreciation($depreciation)
            ->setAmortisation($amortisation)
            ->setFinancial_income($financial_income)
            ->setFinancial_expenses($financial_expenses)
            ->setExtraordinary_income($extraordinary_income)
            ->setExtraordinary_costs($extraordinary_costs)
            ->setProfit_before_tax($profit_before_tax)
            ->setTax($tax)
            ->setProfit_after_tax($profit_after_tax)
            ->setDividends($dividends)
            ->setMinority_interests($minority_interests)
            ->setOther_appropriations($other_appropriations)
            ->setRetained_profit($retained_profit);
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
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
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
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
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
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
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
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
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
     * Get revenue value
     * @return float|null
     */
    public function getRevenue()
    {
        return $this->revenue;
    }
    /**
     * Set revenue value
     * @param float $revenue
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setRevenue($revenue = null)
    {
        $this->revenue = $revenue;
        return $this;
    }
    /**
     * Get operating_costs value
     * @return float|null
     */
    public function getOperating_costs()
    {
        return $this->operating_costs;
    }
    /**
     * Set operating_costs value
     * @param float $operating_costs
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setOperating_costs($operating_costs = null)
    {
        $this->operating_costs = $operating_costs;
        return $this;
    }
    /**
     * Get operating_profit value
     * @return float|null
     */
    public function getOperating_profit()
    {
        return $this->operating_profit;
    }
    /**
     * Set operating_profit value
     * @param float $operating_profit
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setOperating_profit($operating_profit = null)
    {
        $this->operating_profit = $operating_profit;
        return $this;
    }
    /**
     * Get wages_and_salaries value
     * @return float|null
     */
    public function getWages_and_salaries()
    {
        return $this->wages_and_salaries;
    }
    /**
     * Set wages_and_salaries value
     * @param float $wages_and_salaries
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setWages_and_salaries($wages_and_salaries = null)
    {
        $this->wages_and_salaries = $wages_and_salaries;
        return $this;
    }
    /**
     * Get pension_costs value
     * @return float|null
     */
    public function getPension_costs()
    {
        return $this->pension_costs;
    }
    /**
     * Set pension_costs value
     * @param float $pension_costs
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setPension_costs($pension_costs = null)
    {
        $this->pension_costs = $pension_costs;
        return $this;
    }
    /**
     * Get depreciation value
     * @return float|null
     */
    public function getDepreciation()
    {
        return $this->depreciation;
    }
    /**
     * Set depreciation value
     * @param float $depreciation
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setDepreciation($depreciation = null)
    {
        $this->depreciation = $depreciation;
        return $this;
    }
    /**
     * Get amortisation value
     * @return float|null
     */
    public function getAmortisation()
    {
        return $this->amortisation;
    }
    /**
     * Set amortisation value
     * @param float $amortisation
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setAmortisation($amortisation = null)
    {
        $this->amortisation = $amortisation;
        return $this;
    }
    /**
     * Get financial_income value
     * @return float|null
     */
    public function getFinancial_income()
    {
        return $this->financial_income;
    }
    /**
     * Set financial_income value
     * @param float $financial_income
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setFinancial_income($financial_income = null)
    {
        $this->financial_income = $financial_income;
        return $this;
    }
    /**
     * Get financial_expenses value
     * @return float|null
     */
    public function getFinancial_expenses()
    {
        return $this->financial_expenses;
    }
    /**
     * Set financial_expenses value
     * @param float $financial_expenses
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setFinancial_expenses($financial_expenses = null)
    {
        $this->financial_expenses = $financial_expenses;
        return $this;
    }
    /**
     * Get extraordinary_income value
     * @return float|null
     */
    public function getExtraordinary_income()
    {
        return $this->extraordinary_income;
    }
    /**
     * Set extraordinary_income value
     * @param float $extraordinary_income
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setExtraordinary_income($extraordinary_income = null)
    {
        $this->extraordinary_income = $extraordinary_income;
        return $this;
    }
    /**
     * Get extraordinary_costs value
     * @return float|null
     */
    public function getExtraordinary_costs()
    {
        return $this->extraordinary_costs;
    }
    /**
     * Set extraordinary_costs value
     * @param float $extraordinary_costs
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setExtraordinary_costs($extraordinary_costs = null)
    {
        $this->extraordinary_costs = $extraordinary_costs;
        return $this;
    }
    /**
     * Get profit_before_tax value
     * @return float|null
     */
    public function getProfit_before_tax()
    {
        return $this->profit_before_tax;
    }
    /**
     * Set profit_before_tax value
     * @param float $profit_before_tax
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setProfit_before_tax($profit_before_tax = null)
    {
        $this->profit_before_tax = $profit_before_tax;
        return $this;
    }
    /**
     * Get tax value
     * @return float|null
     */
    public function getTax()
    {
        return $this->tax;
    }
    /**
     * Set tax value
     * @param float $tax
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setTax($tax = null)
    {
        $this->tax = $tax;
        return $this;
    }
    /**
     * Get profit_after_tax value
     * @return float|null
     */
    public function getProfit_after_tax()
    {
        return $this->profit_after_tax;
    }
    /**
     * Set profit_after_tax value
     * @param float $profit_after_tax
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setProfit_after_tax($profit_after_tax = null)
    {
        $this->profit_after_tax = $profit_after_tax;
        return $this;
    }
    /**
     * Get dividends value
     * @return float|null
     */
    public function getDividends()
    {
        return $this->dividends;
    }
    /**
     * Set dividends value
     * @param float $dividends
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setDividends($dividends = null)
    {
        $this->dividends = $dividends;
        return $this;
    }
    /**
     * Get minority_interests value
     * @return float|null
     */
    public function getMinority_interests()
    {
        return $this->minority_interests;
    }
    /**
     * Set minority_interests value
     * @param float $minority_interests
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setMinority_interests($minority_interests = null)
    {
        $this->minority_interests = $minority_interests;
        return $this;
    }
    /**
     * Get other_appropriations value
     * @return float|null
     */
    public function getOther_appropriations()
    {
        return $this->other_appropriations;
    }
    /**
     * Set other_appropriations value
     * @param float $other_appropriations
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setOther_appropriations($other_appropriations = null)
    {
        $this->other_appropriations = $other_appropriations;
        return $this;
    }
    /**
     * Get retained_profit value
     * @return float|null
     */
    public function getRetained_profit()
    {
        return $this->retained_profit;
    }
    /**
     * Set retained_profit value
     * @param float $retained_profit
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public function setRetained_profit($retained_profit = null)
    {
        $this->retained_profit = $retained_profit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures
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
