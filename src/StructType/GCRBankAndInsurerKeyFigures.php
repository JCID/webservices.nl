<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRBankAndInsurerKeyFigures StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRBankAndInsurerKeyFigures extends AbstractStructBase
{
    /**
     * The balance_sheet_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $balance_sheet_total;
    /**
     * The equity_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $equity_capital;
    /**
     * The group_equity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $group_equity;
    /**
     * The liable_equity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $liable_equity;
    /**
     * The technical_provisions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $technical_provisions;
    /**
     * The entrusted_funds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $entrusted_funds;
    /**
     * The debt_securities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $debt_securities;
    /**
     * The credits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credits;
    /**
     * The attracted_bankers_funds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $attracted_bankers_funds;
    /**
     * The issued_bankers_funds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issued_bankers_funds;
    /**
     * The interest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $interest;
    /**
     * The premium_income
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $premium_income;
    /**
     * The other_income
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $other_income;
    /**
     * The total_benefits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $total_benefits;
    /**
     * The yield_on_investments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $yield_on_investments;
    /**
     * The operating_investments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $operating_investments;
    /**
     * The holding_gain_of_accounts_receivable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $holding_gain_of_accounts_receivable;
    /**
     * The result_before_taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $result_before_taxes;
    /**
     * The group_profit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $group_profit;
    /**
     * The net_profit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $net_profit;
    /**
     * Constructor method for GCRBankAndInsurerKeyFigures
     * @uses GCRBankAndInsurerKeyFigures::setBalance_sheet_total()
     * @uses GCRBankAndInsurerKeyFigures::setEquity_capital()
     * @uses GCRBankAndInsurerKeyFigures::setGroup_equity()
     * @uses GCRBankAndInsurerKeyFigures::setLiable_equity()
     * @uses GCRBankAndInsurerKeyFigures::setTechnical_provisions()
     * @uses GCRBankAndInsurerKeyFigures::setEntrusted_funds()
     * @uses GCRBankAndInsurerKeyFigures::setDebt_securities()
     * @uses GCRBankAndInsurerKeyFigures::setCredits()
     * @uses GCRBankAndInsurerKeyFigures::setAttracted_bankers_funds()
     * @uses GCRBankAndInsurerKeyFigures::setIssued_bankers_funds()
     * @uses GCRBankAndInsurerKeyFigures::setInterest()
     * @uses GCRBankAndInsurerKeyFigures::setPremium_income()
     * @uses GCRBankAndInsurerKeyFigures::setOther_income()
     * @uses GCRBankAndInsurerKeyFigures::setTotal_benefits()
     * @uses GCRBankAndInsurerKeyFigures::setYield_on_investments()
     * @uses GCRBankAndInsurerKeyFigures::setOperating_investments()
     * @uses GCRBankAndInsurerKeyFigures::setHolding_gain_of_accounts_receivable()
     * @uses GCRBankAndInsurerKeyFigures::setResult_before_taxes()
     * @uses GCRBankAndInsurerKeyFigures::setGroup_profit()
     * @uses GCRBankAndInsurerKeyFigures::setNet_profit()
     * @param string $balance_sheet_total
     * @param string $equity_capital
     * @param string $group_equity
     * @param string $liable_equity
     * @param string $technical_provisions
     * @param string $entrusted_funds
     * @param string $debt_securities
     * @param string $credits
     * @param string $attracted_bankers_funds
     * @param string $issued_bankers_funds
     * @param string $interest
     * @param string $premium_income
     * @param string $other_income
     * @param string $total_benefits
     * @param string $yield_on_investments
     * @param string $operating_investments
     * @param string $holding_gain_of_accounts_receivable
     * @param string $result_before_taxes
     * @param string $group_profit
     * @param string $net_profit
     */
    public function __construct($balance_sheet_total = null, $equity_capital = null, $group_equity = null, $liable_equity = null, $technical_provisions = null, $entrusted_funds = null, $debt_securities = null, $credits = null, $attracted_bankers_funds = null, $issued_bankers_funds = null, $interest = null, $premium_income = null, $other_income = null, $total_benefits = null, $yield_on_investments = null, $operating_investments = null, $holding_gain_of_accounts_receivable = null, $result_before_taxes = null, $group_profit = null, $net_profit = null)
    {
        $this
            ->setBalance_sheet_total($balance_sheet_total)
            ->setEquity_capital($equity_capital)
            ->setGroup_equity($group_equity)
            ->setLiable_equity($liable_equity)
            ->setTechnical_provisions($technical_provisions)
            ->setEntrusted_funds($entrusted_funds)
            ->setDebt_securities($debt_securities)
            ->setCredits($credits)
            ->setAttracted_bankers_funds($attracted_bankers_funds)
            ->setIssued_bankers_funds($issued_bankers_funds)
            ->setInterest($interest)
            ->setPremium_income($premium_income)
            ->setOther_income($other_income)
            ->setTotal_benefits($total_benefits)
            ->setYield_on_investments($yield_on_investments)
            ->setOperating_investments($operating_investments)
            ->setHolding_gain_of_accounts_receivable($holding_gain_of_accounts_receivable)
            ->setResult_before_taxes($result_before_taxes)
            ->setGroup_profit($group_profit)
            ->setNet_profit($net_profit);
    }
    /**
     * Get balance_sheet_total value
     * @return string|null
     */
    public function getBalance_sheet_total()
    {
        return $this->balance_sheet_total;
    }
    /**
     * Set balance_sheet_total value
     * @param string $balance_sheet_total
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setBalance_sheet_total($balance_sheet_total = null)
    {
        // validation for constraint: string
        if (!is_null($balance_sheet_total) && !is_string($balance_sheet_total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($balance_sheet_total)), __LINE__);
        }
        $this->balance_sheet_total = $balance_sheet_total;
        return $this;
    }
    /**
     * Get equity_capital value
     * @return string|null
     */
    public function getEquity_capital()
    {
        return $this->equity_capital;
    }
    /**
     * Set equity_capital value
     * @param string $equity_capital
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setEquity_capital($equity_capital = null)
    {
        // validation for constraint: string
        if (!is_null($equity_capital) && !is_string($equity_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equity_capital)), __LINE__);
        }
        $this->equity_capital = $equity_capital;
        return $this;
    }
    /**
     * Get group_equity value
     * @return string|null
     */
    public function getGroup_equity()
    {
        return $this->group_equity;
    }
    /**
     * Set group_equity value
     * @param string $group_equity
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setGroup_equity($group_equity = null)
    {
        // validation for constraint: string
        if (!is_null($group_equity) && !is_string($group_equity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group_equity)), __LINE__);
        }
        $this->group_equity = $group_equity;
        return $this;
    }
    /**
     * Get liable_equity value
     * @return string|null
     */
    public function getLiable_equity()
    {
        return $this->liable_equity;
    }
    /**
     * Set liable_equity value
     * @param string $liable_equity
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setLiable_equity($liable_equity = null)
    {
        // validation for constraint: string
        if (!is_null($liable_equity) && !is_string($liable_equity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liable_equity)), __LINE__);
        }
        $this->liable_equity = $liable_equity;
        return $this;
    }
    /**
     * Get technical_provisions value
     * @return string|null
     */
    public function getTechnical_provisions()
    {
        return $this->technical_provisions;
    }
    /**
     * Set technical_provisions value
     * @param string $technical_provisions
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setTechnical_provisions($technical_provisions = null)
    {
        // validation for constraint: string
        if (!is_null($technical_provisions) && !is_string($technical_provisions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technical_provisions)), __LINE__);
        }
        $this->technical_provisions = $technical_provisions;
        return $this;
    }
    /**
     * Get entrusted_funds value
     * @return string|null
     */
    public function getEntrusted_funds()
    {
        return $this->entrusted_funds;
    }
    /**
     * Set entrusted_funds value
     * @param string $entrusted_funds
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setEntrusted_funds($entrusted_funds = null)
    {
        // validation for constraint: string
        if (!is_null($entrusted_funds) && !is_string($entrusted_funds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($entrusted_funds)), __LINE__);
        }
        $this->entrusted_funds = $entrusted_funds;
        return $this;
    }
    /**
     * Get debt_securities value
     * @return string|null
     */
    public function getDebt_securities()
    {
        return $this->debt_securities;
    }
    /**
     * Set debt_securities value
     * @param string $debt_securities
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setDebt_securities($debt_securities = null)
    {
        // validation for constraint: string
        if (!is_null($debt_securities) && !is_string($debt_securities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($debt_securities)), __LINE__);
        }
        $this->debt_securities = $debt_securities;
        return $this;
    }
    /**
     * Get credits value
     * @return string|null
     */
    public function getCredits()
    {
        return $this->credits;
    }
    /**
     * Set credits value
     * @param string $credits
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setCredits($credits = null)
    {
        // validation for constraint: string
        if (!is_null($credits) && !is_string($credits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credits)), __LINE__);
        }
        $this->credits = $credits;
        return $this;
    }
    /**
     * Get attracted_bankers_funds value
     * @return string|null
     */
    public function getAttracted_bankers_funds()
    {
        return $this->attracted_bankers_funds;
    }
    /**
     * Set attracted_bankers_funds value
     * @param string $attracted_bankers_funds
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setAttracted_bankers_funds($attracted_bankers_funds = null)
    {
        // validation for constraint: string
        if (!is_null($attracted_bankers_funds) && !is_string($attracted_bankers_funds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attracted_bankers_funds)), __LINE__);
        }
        $this->attracted_bankers_funds = $attracted_bankers_funds;
        return $this;
    }
    /**
     * Get issued_bankers_funds value
     * @return string|null
     */
    public function getIssued_bankers_funds()
    {
        return $this->issued_bankers_funds;
    }
    /**
     * Set issued_bankers_funds value
     * @param string $issued_bankers_funds
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setIssued_bankers_funds($issued_bankers_funds = null)
    {
        // validation for constraint: string
        if (!is_null($issued_bankers_funds) && !is_string($issued_bankers_funds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issued_bankers_funds)), __LINE__);
        }
        $this->issued_bankers_funds = $issued_bankers_funds;
        return $this;
    }
    /**
     * Get interest value
     * @return string|null
     */
    public function getInterest()
    {
        return $this->interest;
    }
    /**
     * Set interest value
     * @param string $interest
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setInterest($interest = null)
    {
        // validation for constraint: string
        if (!is_null($interest) && !is_string($interest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interest)), __LINE__);
        }
        $this->interest = $interest;
        return $this;
    }
    /**
     * Get premium_income value
     * @return string|null
     */
    public function getPremium_income()
    {
        return $this->premium_income;
    }
    /**
     * Set premium_income value
     * @param string $premium_income
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setPremium_income($premium_income = null)
    {
        // validation for constraint: string
        if (!is_null($premium_income) && !is_string($premium_income)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($premium_income)), __LINE__);
        }
        $this->premium_income = $premium_income;
        return $this;
    }
    /**
     * Get other_income value
     * @return string|null
     */
    public function getOther_income()
    {
        return $this->other_income;
    }
    /**
     * Set other_income value
     * @param string $other_income
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setOther_income($other_income = null)
    {
        // validation for constraint: string
        if (!is_null($other_income) && !is_string($other_income)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($other_income)), __LINE__);
        }
        $this->other_income = $other_income;
        return $this;
    }
    /**
     * Get total_benefits value
     * @return string|null
     */
    public function getTotal_benefits()
    {
        return $this->total_benefits;
    }
    /**
     * Set total_benefits value
     * @param string $total_benefits
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setTotal_benefits($total_benefits = null)
    {
        // validation for constraint: string
        if (!is_null($total_benefits) && !is_string($total_benefits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($total_benefits)), __LINE__);
        }
        $this->total_benefits = $total_benefits;
        return $this;
    }
    /**
     * Get yield_on_investments value
     * @return string|null
     */
    public function getYield_on_investments()
    {
        return $this->yield_on_investments;
    }
    /**
     * Set yield_on_investments value
     * @param string $yield_on_investments
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setYield_on_investments($yield_on_investments = null)
    {
        // validation for constraint: string
        if (!is_null($yield_on_investments) && !is_string($yield_on_investments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($yield_on_investments)), __LINE__);
        }
        $this->yield_on_investments = $yield_on_investments;
        return $this;
    }
    /**
     * Get operating_investments value
     * @return string|null
     */
    public function getOperating_investments()
    {
        return $this->operating_investments;
    }
    /**
     * Set operating_investments value
     * @param string $operating_investments
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setOperating_investments($operating_investments = null)
    {
        // validation for constraint: string
        if (!is_null($operating_investments) && !is_string($operating_investments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operating_investments)), __LINE__);
        }
        $this->operating_investments = $operating_investments;
        return $this;
    }
    /**
     * Get holding_gain_of_accounts_receivable value
     * @return string|null
     */
    public function getHolding_gain_of_accounts_receivable()
    {
        return $this->holding_gain_of_accounts_receivable;
    }
    /**
     * Set holding_gain_of_accounts_receivable value
     * @param string $holding_gain_of_accounts_receivable
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setHolding_gain_of_accounts_receivable($holding_gain_of_accounts_receivable = null)
    {
        // validation for constraint: string
        if (!is_null($holding_gain_of_accounts_receivable) && !is_string($holding_gain_of_accounts_receivable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holding_gain_of_accounts_receivable)), __LINE__);
        }
        $this->holding_gain_of_accounts_receivable = $holding_gain_of_accounts_receivable;
        return $this;
    }
    /**
     * Get result_before_taxes value
     * @return string|null
     */
    public function getResult_before_taxes()
    {
        return $this->result_before_taxes;
    }
    /**
     * Set result_before_taxes value
     * @param string $result_before_taxes
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setResult_before_taxes($result_before_taxes = null)
    {
        // validation for constraint: string
        if (!is_null($result_before_taxes) && !is_string($result_before_taxes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($result_before_taxes)), __LINE__);
        }
        $this->result_before_taxes = $result_before_taxes;
        return $this;
    }
    /**
     * Get group_profit value
     * @return string|null
     */
    public function getGroup_profit()
    {
        return $this->group_profit;
    }
    /**
     * Set group_profit value
     * @param string $group_profit
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setGroup_profit($group_profit = null)
    {
        // validation for constraint: string
        if (!is_null($group_profit) && !is_string($group_profit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group_profit)), __LINE__);
        }
        $this->group_profit = $group_profit;
        return $this;
    }
    /**
     * Get net_profit value
     * @return string|null
     */
    public function getNet_profit()
    {
        return $this->net_profit;
    }
    /**
     * Set net_profit value
     * @param string $net_profit
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
     */
    public function setNet_profit($net_profit = null)
    {
        // validation for constraint: string
        if (!is_null($net_profit) && !is_string($net_profit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($net_profit)), __LINE__);
        }
        $this->net_profit = $net_profit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRBankAndInsurerKeyFigures
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
