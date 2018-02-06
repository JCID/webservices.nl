<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeFinancialRatios StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeFinancialRatios extends AbstractStructBase
{
    /**
     * The pre_tax_profit_margin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $pre_tax_profit_margin;
    /**
     * The return_on_capital_employed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $return_on_capital_employed;
    /**
     * The return_on_total_assets_employed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $return_on_total_assets_employed;
    /**
     * The return_on_net_assets_employed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $return_on_net_assets_employed;
    /**
     * The sales_or_net_working_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $sales_or_net_working_capital;
    /**
     * The stock_turnover_ratio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $stock_turnover_ratio;
    /**
     * The debtor_days
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $debtor_days;
    /**
     * The creditor_days
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $creditor_days;
    /**
     * The current_ratio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $current_ratio;
    /**
     * The liquidity_ratio_or_acid_test
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $liquidity_ratio_or_acid_test;
    /**
     * The current_debt_ratio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $current_debt_ratio;
    /**
     * The gearing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $gearing;
    /**
     * The equity_in_percentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $equity_in_percentage;
    /**
     * The total_debt_ratio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $total_debt_ratio;
    /**
     * Constructor method for CreditsafeFinancialRatios
     * @uses CreditsafeFinancialRatios::setPre_tax_profit_margin()
     * @uses CreditsafeFinancialRatios::setReturn_on_capital_employed()
     * @uses CreditsafeFinancialRatios::setReturn_on_total_assets_employed()
     * @uses CreditsafeFinancialRatios::setReturn_on_net_assets_employed()
     * @uses CreditsafeFinancialRatios::setSales_or_net_working_capital()
     * @uses CreditsafeFinancialRatios::setStock_turnover_ratio()
     * @uses CreditsafeFinancialRatios::setDebtor_days()
     * @uses CreditsafeFinancialRatios::setCreditor_days()
     * @uses CreditsafeFinancialRatios::setCurrent_ratio()
     * @uses CreditsafeFinancialRatios::setLiquidity_ratio_or_acid_test()
     * @uses CreditsafeFinancialRatios::setCurrent_debt_ratio()
     * @uses CreditsafeFinancialRatios::setGearing()
     * @uses CreditsafeFinancialRatios::setEquity_in_percentage()
     * @uses CreditsafeFinancialRatios::setTotal_debt_ratio()
     * @param float $pre_tax_profit_margin
     * @param float $return_on_capital_employed
     * @param float $return_on_total_assets_employed
     * @param float $return_on_net_assets_employed
     * @param float $sales_or_net_working_capital
     * @param float $stock_turnover_ratio
     * @param float $debtor_days
     * @param float $creditor_days
     * @param float $current_ratio
     * @param float $liquidity_ratio_or_acid_test
     * @param float $current_debt_ratio
     * @param float $gearing
     * @param float $equity_in_percentage
     * @param float $total_debt_ratio
     */
    public function __construct($pre_tax_profit_margin = null, $return_on_capital_employed = null, $return_on_total_assets_employed = null, $return_on_net_assets_employed = null, $sales_or_net_working_capital = null, $stock_turnover_ratio = null, $debtor_days = null, $creditor_days = null, $current_ratio = null, $liquidity_ratio_or_acid_test = null, $current_debt_ratio = null, $gearing = null, $equity_in_percentage = null, $total_debt_ratio = null)
    {
        $this
            ->setPre_tax_profit_margin($pre_tax_profit_margin)
            ->setReturn_on_capital_employed($return_on_capital_employed)
            ->setReturn_on_total_assets_employed($return_on_total_assets_employed)
            ->setReturn_on_net_assets_employed($return_on_net_assets_employed)
            ->setSales_or_net_working_capital($sales_or_net_working_capital)
            ->setStock_turnover_ratio($stock_turnover_ratio)
            ->setDebtor_days($debtor_days)
            ->setCreditor_days($creditor_days)
            ->setCurrent_ratio($current_ratio)
            ->setLiquidity_ratio_or_acid_test($liquidity_ratio_or_acid_test)
            ->setCurrent_debt_ratio($current_debt_ratio)
            ->setGearing($gearing)
            ->setEquity_in_percentage($equity_in_percentage)
            ->setTotal_debt_ratio($total_debt_ratio);
    }
    /**
     * Get pre_tax_profit_margin value
     * @return float|null
     */
    public function getPre_tax_profit_margin()
    {
        return $this->pre_tax_profit_margin;
    }
    /**
     * Set pre_tax_profit_margin value
     * @param float $pre_tax_profit_margin
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setPre_tax_profit_margin($pre_tax_profit_margin = null)
    {
        $this->pre_tax_profit_margin = $pre_tax_profit_margin;
        return $this;
    }
    /**
     * Get return_on_capital_employed value
     * @return float|null
     */
    public function getReturn_on_capital_employed()
    {
        return $this->return_on_capital_employed;
    }
    /**
     * Set return_on_capital_employed value
     * @param float $return_on_capital_employed
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setReturn_on_capital_employed($return_on_capital_employed = null)
    {
        $this->return_on_capital_employed = $return_on_capital_employed;
        return $this;
    }
    /**
     * Get return_on_total_assets_employed value
     * @return float|null
     */
    public function getReturn_on_total_assets_employed()
    {
        return $this->return_on_total_assets_employed;
    }
    /**
     * Set return_on_total_assets_employed value
     * @param float $return_on_total_assets_employed
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setReturn_on_total_assets_employed($return_on_total_assets_employed = null)
    {
        $this->return_on_total_assets_employed = $return_on_total_assets_employed;
        return $this;
    }
    /**
     * Get return_on_net_assets_employed value
     * @return float|null
     */
    public function getReturn_on_net_assets_employed()
    {
        return $this->return_on_net_assets_employed;
    }
    /**
     * Set return_on_net_assets_employed value
     * @param float $return_on_net_assets_employed
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setReturn_on_net_assets_employed($return_on_net_assets_employed = null)
    {
        $this->return_on_net_assets_employed = $return_on_net_assets_employed;
        return $this;
    }
    /**
     * Get sales_or_net_working_capital value
     * @return float|null
     */
    public function getSales_or_net_working_capital()
    {
        return $this->sales_or_net_working_capital;
    }
    /**
     * Set sales_or_net_working_capital value
     * @param float $sales_or_net_working_capital
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setSales_or_net_working_capital($sales_or_net_working_capital = null)
    {
        $this->sales_or_net_working_capital = $sales_or_net_working_capital;
        return $this;
    }
    /**
     * Get stock_turnover_ratio value
     * @return float|null
     */
    public function getStock_turnover_ratio()
    {
        return $this->stock_turnover_ratio;
    }
    /**
     * Set stock_turnover_ratio value
     * @param float $stock_turnover_ratio
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setStock_turnover_ratio($stock_turnover_ratio = null)
    {
        $this->stock_turnover_ratio = $stock_turnover_ratio;
        return $this;
    }
    /**
     * Get debtor_days value
     * @return float|null
     */
    public function getDebtor_days()
    {
        return $this->debtor_days;
    }
    /**
     * Set debtor_days value
     * @param float $debtor_days
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setDebtor_days($debtor_days = null)
    {
        $this->debtor_days = $debtor_days;
        return $this;
    }
    /**
     * Get creditor_days value
     * @return float|null
     */
    public function getCreditor_days()
    {
        return $this->creditor_days;
    }
    /**
     * Set creditor_days value
     * @param float $creditor_days
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setCreditor_days($creditor_days = null)
    {
        $this->creditor_days = $creditor_days;
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
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setCurrent_ratio($current_ratio = null)
    {
        $this->current_ratio = $current_ratio;
        return $this;
    }
    /**
     * Get liquidity_ratio_or_acid_test value
     * @return float|null
     */
    public function getLiquidity_ratio_or_acid_test()
    {
        return $this->liquidity_ratio_or_acid_test;
    }
    /**
     * Set liquidity_ratio_or_acid_test value
     * @param float $liquidity_ratio_or_acid_test
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setLiquidity_ratio_or_acid_test($liquidity_ratio_or_acid_test = null)
    {
        $this->liquidity_ratio_or_acid_test = $liquidity_ratio_or_acid_test;
        return $this;
    }
    /**
     * Get current_debt_ratio value
     * @return float|null
     */
    public function getCurrent_debt_ratio()
    {
        return $this->current_debt_ratio;
    }
    /**
     * Set current_debt_ratio value
     * @param float $current_debt_ratio
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setCurrent_debt_ratio($current_debt_ratio = null)
    {
        $this->current_debt_ratio = $current_debt_ratio;
        return $this;
    }
    /**
     * Get gearing value
     * @return float|null
     */
    public function getGearing()
    {
        return $this->gearing;
    }
    /**
     * Set gearing value
     * @param float $gearing
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setGearing($gearing = null)
    {
        $this->gearing = $gearing;
        return $this;
    }
    /**
     * Get equity_in_percentage value
     * @return float|null
     */
    public function getEquity_in_percentage()
    {
        return $this->equity_in_percentage;
    }
    /**
     * Set equity_in_percentage value
     * @param float $equity_in_percentage
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setEquity_in_percentage($equity_in_percentage = null)
    {
        $this->equity_in_percentage = $equity_in_percentage;
        return $this;
    }
    /**
     * Get total_debt_ratio value
     * @return float|null
     */
    public function getTotal_debt_ratio()
    {
        return $this->total_debt_ratio;
    }
    /**
     * Set total_debt_ratio value
     * @param float $total_debt_ratio
     * @return \Webservices\StructType\CreditsafeFinancialRatios
     */
    public function setTotal_debt_ratio($total_debt_ratio = null)
    {
        $this->total_debt_ratio = $total_debt_ratio;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeFinancialRatios
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
