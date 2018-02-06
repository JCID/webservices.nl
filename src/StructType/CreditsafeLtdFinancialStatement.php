<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdFinancialStatement StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdFinancialStatement extends AbstractStructBase
{
    /**
     * The profit_and_loss
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeProfitAndLossFigures
     */
    public $profit_and_loss;
    /**
     * The balance_sheet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeBalanceSheet
     */
    public $balance_sheet;
    /**
     * The other_financials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeOtherFinancials
     */
    public $other_financials;
    /**
     * The ratios
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CreditsafeFinancialRatios
     */
    public $ratios;
    /**
     * Constructor method for CreditsafeLtdFinancialStatement
     * @uses CreditsafeLtdFinancialStatement::setProfit_and_loss()
     * @uses CreditsafeLtdFinancialStatement::setBalance_sheet()
     * @uses CreditsafeLtdFinancialStatement::setOther_financials()
     * @uses CreditsafeLtdFinancialStatement::setRatios()
     * @param \Webservices\StructType\CreditsafeProfitAndLossFigures $profit_and_loss
     * @param \Webservices\StructType\CreditsafeBalanceSheet $balance_sheet
     * @param \Webservices\StructType\CreditsafeOtherFinancials $other_financials
     * @param \Webservices\StructType\CreditsafeFinancialRatios $ratios
     */
    public function __construct(\Webservices\StructType\CreditsafeProfitAndLossFigures $profit_and_loss = null, \Webservices\StructType\CreditsafeBalanceSheet $balance_sheet = null, \Webservices\StructType\CreditsafeOtherFinancials $other_financials = null, \Webservices\StructType\CreditsafeFinancialRatios $ratios = null)
    {
        $this
            ->setProfit_and_loss($profit_and_loss)
            ->setBalance_sheet($balance_sheet)
            ->setOther_financials($other_financials)
            ->setRatios($ratios);
    }
    /**
     * Get profit_and_loss value
     * @return \Webservices\StructType\CreditsafeProfitAndLossFigures|null
     */
    public function getProfit_and_loss()
    {
        return $this->profit_and_loss;
    }
    /**
     * Set profit_and_loss value
     * @param \Webservices\StructType\CreditsafeProfitAndLossFigures $profit_and_loss
     * @return \Webservices\StructType\CreditsafeLtdFinancialStatement
     */
    public function setProfit_and_loss(\Webservices\StructType\CreditsafeProfitAndLossFigures $profit_and_loss = null)
    {
        $this->profit_and_loss = $profit_and_loss;
        return $this;
    }
    /**
     * Get balance_sheet value
     * @return \Webservices\StructType\CreditsafeBalanceSheet|null
     */
    public function getBalance_sheet()
    {
        return $this->balance_sheet;
    }
    /**
     * Set balance_sheet value
     * @param \Webservices\StructType\CreditsafeBalanceSheet $balance_sheet
     * @return \Webservices\StructType\CreditsafeLtdFinancialStatement
     */
    public function setBalance_sheet(\Webservices\StructType\CreditsafeBalanceSheet $balance_sheet = null)
    {
        $this->balance_sheet = $balance_sheet;
        return $this;
    }
    /**
     * Get other_financials value
     * @return \Webservices\StructType\CreditsafeOtherFinancials|null
     */
    public function getOther_financials()
    {
        return $this->other_financials;
    }
    /**
     * Set other_financials value
     * @param \Webservices\StructType\CreditsafeOtherFinancials $other_financials
     * @return \Webservices\StructType\CreditsafeLtdFinancialStatement
     */
    public function setOther_financials(\Webservices\StructType\CreditsafeOtherFinancials $other_financials = null)
    {
        $this->other_financials = $other_financials;
        return $this;
    }
    /**
     * Get ratios value
     * @return \Webservices\StructType\CreditsafeFinancialRatios|null
     */
    public function getRatios()
    {
        return $this->ratios;
    }
    /**
     * Set ratios value
     * @param \Webservices\StructType\CreditsafeFinancialRatios $ratios
     * @return \Webservices\StructType\CreditsafeLtdFinancialStatement
     */
    public function setRatios(\Webservices\StructType\CreditsafeFinancialRatios $ratios = null)
    {
        $this->ratios = $ratios;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdFinancialStatement
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
