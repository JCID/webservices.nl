<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyAnnualAccount StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyAnnualAccount extends AbstractStructBase
{
    /**
     * The financial_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $financial_year;
    /**
     * The month_end_financial_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $month_end_financial_year;
    /**
     * The day_end_financial_year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $day_end_financial_year;
    /**
     * The length_financial_year_in_months
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $length_financial_year_in_months;
    /**
     * The reliable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $reliable;
    /**
     * The account_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $account_code;
    /**
     * The account_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $account_text;
    /**
     * The filing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRFiling
     */
    public $filing;
    /**
     * The financial_year_graydon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $financial_year_graydon;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency_code;
    /**
     * The scale_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $scale_code;
    /**
     * The scale_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $scale_text;
    /**
     * The date_of_drawing_up
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_drawing_up;
    /**
     * The balance_sheet_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $balance_sheet_code;
    /**
     * The balance_sheet_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $balance_sheet_text;
    /**
     * The balance_sheet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRBalanceSheet
     */
    public $balance_sheet;
    /**
     * The profit_and_loss_account
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRItemArray
     */
    public $profit_and_loss_account;
    /**
     * The supplement_to_annual_account
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRItemArray
     */
    public $supplement_to_annual_account;
    /**
     * The ratios
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRRatioArray
     */
    public $ratios;
    /**
     * Constructor method for GCRCompanyAnnualAccount
     * @uses GCRCompanyAnnualAccount::setFinancial_year()
     * @uses GCRCompanyAnnualAccount::setMonth_end_financial_year()
     * @uses GCRCompanyAnnualAccount::setDay_end_financial_year()
     * @uses GCRCompanyAnnualAccount::setLength_financial_year_in_months()
     * @uses GCRCompanyAnnualAccount::setReliable()
     * @uses GCRCompanyAnnualAccount::setAccount_code()
     * @uses GCRCompanyAnnualAccount::setAccount_text()
     * @uses GCRCompanyAnnualAccount::setFiling()
     * @uses GCRCompanyAnnualAccount::setFinancial_year_graydon()
     * @uses GCRCompanyAnnualAccount::setCurrency_code()
     * @uses GCRCompanyAnnualAccount::setScale_code()
     * @uses GCRCompanyAnnualAccount::setScale_text()
     * @uses GCRCompanyAnnualAccount::setDate_of_drawing_up()
     * @uses GCRCompanyAnnualAccount::setBalance_sheet_code()
     * @uses GCRCompanyAnnualAccount::setBalance_sheet_text()
     * @uses GCRCompanyAnnualAccount::setBalance_sheet()
     * @uses GCRCompanyAnnualAccount::setProfit_and_loss_account()
     * @uses GCRCompanyAnnualAccount::setSupplement_to_annual_account()
     * @uses GCRCompanyAnnualAccount::setRatios()
     * @param string $financial_year
     * @param int $month_end_financial_year
     * @param int $day_end_financial_year
     * @param int $length_financial_year_in_months
     * @param bool $reliable
     * @param string $account_code
     * @param string $account_text
     * @param \Webservices\StructType\GCRFiling $filing
     * @param string $financial_year_graydon
     * @param string $currency_code
     * @param string $scale_code
     * @param string $scale_text
     * @param string $date_of_drawing_up
     * @param string $balance_sheet_code
     * @param string $balance_sheet_text
     * @param \Webservices\StructType\GCRBalanceSheet $balance_sheet
     * @param \Webservices\ArrayType\GCRItemArray $profit_and_loss_account
     * @param \Webservices\ArrayType\GCRItemArray $supplement_to_annual_account
     * @param \Webservices\ArrayType\GCRRatioArray $ratios
     */
    public function __construct($financial_year = null, $month_end_financial_year = null, $day_end_financial_year = null, $length_financial_year_in_months = null, $reliable = null, $account_code = null, $account_text = null, \Webservices\StructType\GCRFiling $filing = null, $financial_year_graydon = null, $currency_code = null, $scale_code = null, $scale_text = null, $date_of_drawing_up = null, $balance_sheet_code = null, $balance_sheet_text = null, \Webservices\StructType\GCRBalanceSheet $balance_sheet = null, \Webservices\ArrayType\GCRItemArray $profit_and_loss_account = null, \Webservices\ArrayType\GCRItemArray $supplement_to_annual_account = null, \Webservices\ArrayType\GCRRatioArray $ratios = null)
    {
        $this
            ->setFinancial_year($financial_year)
            ->setMonth_end_financial_year($month_end_financial_year)
            ->setDay_end_financial_year($day_end_financial_year)
            ->setLength_financial_year_in_months($length_financial_year_in_months)
            ->setReliable($reliable)
            ->setAccount_code($account_code)
            ->setAccount_text($account_text)
            ->setFiling($filing)
            ->setFinancial_year_graydon($financial_year_graydon)
            ->setCurrency_code($currency_code)
            ->setScale_code($scale_code)
            ->setScale_text($scale_text)
            ->setDate_of_drawing_up($date_of_drawing_up)
            ->setBalance_sheet_code($balance_sheet_code)
            ->setBalance_sheet_text($balance_sheet_text)
            ->setBalance_sheet($balance_sheet)
            ->setProfit_and_loss_account($profit_and_loss_account)
            ->setSupplement_to_annual_account($supplement_to_annual_account)
            ->setRatios($ratios);
    }
    /**
     * Get financial_year value
     * @return string|null
     */
    public function getFinancial_year()
    {
        return $this->financial_year;
    }
    /**
     * Set financial_year value
     * @param string $financial_year
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setFinancial_year($financial_year = null)
    {
        // validation for constraint: string
        if (!is_null($financial_year) && !is_string($financial_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financial_year)), __LINE__);
        }
        $this->financial_year = $financial_year;
        return $this;
    }
    /**
     * Get month_end_financial_year value
     * @return int|null
     */
    public function getMonth_end_financial_year()
    {
        return $this->month_end_financial_year;
    }
    /**
     * Set month_end_financial_year value
     * @param int $month_end_financial_year
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setMonth_end_financial_year($month_end_financial_year = null)
    {
        // validation for constraint: int
        if (!is_null($month_end_financial_year) && !is_numeric($month_end_financial_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month_end_financial_year)), __LINE__);
        }
        $this->month_end_financial_year = $month_end_financial_year;
        return $this;
    }
    /**
     * Get day_end_financial_year value
     * @return int|null
     */
    public function getDay_end_financial_year()
    {
        return $this->day_end_financial_year;
    }
    /**
     * Set day_end_financial_year value
     * @param int $day_end_financial_year
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setDay_end_financial_year($day_end_financial_year = null)
    {
        // validation for constraint: int
        if (!is_null($day_end_financial_year) && !is_numeric($day_end_financial_year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($day_end_financial_year)), __LINE__);
        }
        $this->day_end_financial_year = $day_end_financial_year;
        return $this;
    }
    /**
     * Get length_financial_year_in_months value
     * @return int|null
     */
    public function getLength_financial_year_in_months()
    {
        return $this->length_financial_year_in_months;
    }
    /**
     * Set length_financial_year_in_months value
     * @param int $length_financial_year_in_months
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setLength_financial_year_in_months($length_financial_year_in_months = null)
    {
        // validation for constraint: int
        if (!is_null($length_financial_year_in_months) && !is_numeric($length_financial_year_in_months)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length_financial_year_in_months)), __LINE__);
        }
        $this->length_financial_year_in_months = $length_financial_year_in_months;
        return $this;
    }
    /**
     * Get reliable value
     * @return bool|null
     */
    public function getReliable()
    {
        return $this->reliable;
    }
    /**
     * Set reliable value
     * @param bool $reliable
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setReliable($reliable = null)
    {
        // validation for constraint: boolean
        if (!is_null($reliable) && !is_bool($reliable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reliable)), __LINE__);
        }
        $this->reliable = $reliable;
        return $this;
    }
    /**
     * Get account_code value
     * @return string|null
     */
    public function getAccount_code()
    {
        return $this->account_code;
    }
    /**
     * Set account_code value
     * @param string $account_code
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setAccount_code($account_code = null)
    {
        // validation for constraint: string
        if (!is_null($account_code) && !is_string($account_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_code)), __LINE__);
        }
        $this->account_code = $account_code;
        return $this;
    }
    /**
     * Get account_text value
     * @return string|null
     */
    public function getAccount_text()
    {
        return $this->account_text;
    }
    /**
     * Set account_text value
     * @param string $account_text
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setAccount_text($account_text = null)
    {
        // validation for constraint: string
        if (!is_null($account_text) && !is_string($account_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_text)), __LINE__);
        }
        $this->account_text = $account_text;
        return $this;
    }
    /**
     * Get filing value
     * @return \Webservices\StructType\GCRFiling|null
     */
    public function getFiling()
    {
        return $this->filing;
    }
    /**
     * Set filing value
     * @param \Webservices\StructType\GCRFiling $filing
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setFiling(\Webservices\StructType\GCRFiling $filing = null)
    {
        $this->filing = $filing;
        return $this;
    }
    /**
     * Get financial_year_graydon value
     * @return string|null
     */
    public function getFinancial_year_graydon()
    {
        return $this->financial_year_graydon;
    }
    /**
     * Set financial_year_graydon value
     * @param string $financial_year_graydon
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setFinancial_year_graydon($financial_year_graydon = null)
    {
        // validation for constraint: string
        if (!is_null($financial_year_graydon) && !is_string($financial_year_graydon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financial_year_graydon)), __LINE__);
        }
        $this->financial_year_graydon = $financial_year_graydon;
        return $this;
    }
    /**
     * Get currency_code value
     * @return string|null
     */
    public function getCurrency_code()
    {
        return $this->currency_code;
    }
    /**
     * Set currency_code value
     * @param string $currency_code
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setCurrency_code($currency_code = null)
    {
        // validation for constraint: string
        if (!is_null($currency_code) && !is_string($currency_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency_code)), __LINE__);
        }
        $this->currency_code = $currency_code;
        return $this;
    }
    /**
     * Get scale_code value
     * @return string|null
     */
    public function getScale_code()
    {
        return $this->scale_code;
    }
    /**
     * Set scale_code value
     * @param string $scale_code
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setScale_code($scale_code = null)
    {
        // validation for constraint: string
        if (!is_null($scale_code) && !is_string($scale_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scale_code)), __LINE__);
        }
        $this->scale_code = $scale_code;
        return $this;
    }
    /**
     * Get scale_text value
     * @return string|null
     */
    public function getScale_text()
    {
        return $this->scale_text;
    }
    /**
     * Set scale_text value
     * @param string $scale_text
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setScale_text($scale_text = null)
    {
        // validation for constraint: string
        if (!is_null($scale_text) && !is_string($scale_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scale_text)), __LINE__);
        }
        $this->scale_text = $scale_text;
        return $this;
    }
    /**
     * Get date_of_drawing_up value
     * @return string|null
     */
    public function getDate_of_drawing_up()
    {
        return $this->date_of_drawing_up;
    }
    /**
     * Set date_of_drawing_up value
     * @param string $date_of_drawing_up
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setDate_of_drawing_up($date_of_drawing_up = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_drawing_up) && !is_string($date_of_drawing_up)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_drawing_up)), __LINE__);
        }
        $this->date_of_drawing_up = $date_of_drawing_up;
        return $this;
    }
    /**
     * Get balance_sheet_code value
     * @return string|null
     */
    public function getBalance_sheet_code()
    {
        return $this->balance_sheet_code;
    }
    /**
     * Set balance_sheet_code value
     * @param string $balance_sheet_code
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setBalance_sheet_code($balance_sheet_code = null)
    {
        // validation for constraint: string
        if (!is_null($balance_sheet_code) && !is_string($balance_sheet_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($balance_sheet_code)), __LINE__);
        }
        $this->balance_sheet_code = $balance_sheet_code;
        return $this;
    }
    /**
     * Get balance_sheet_text value
     * @return string|null
     */
    public function getBalance_sheet_text()
    {
        return $this->balance_sheet_text;
    }
    /**
     * Set balance_sheet_text value
     * @param string $balance_sheet_text
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setBalance_sheet_text($balance_sheet_text = null)
    {
        // validation for constraint: string
        if (!is_null($balance_sheet_text) && !is_string($balance_sheet_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($balance_sheet_text)), __LINE__);
        }
        $this->balance_sheet_text = $balance_sheet_text;
        return $this;
    }
    /**
     * Get balance_sheet value
     * @return \Webservices\StructType\GCRBalanceSheet|null
     */
    public function getBalance_sheet()
    {
        return $this->balance_sheet;
    }
    /**
     * Set balance_sheet value
     * @param \Webservices\StructType\GCRBalanceSheet $balance_sheet
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setBalance_sheet(\Webservices\StructType\GCRBalanceSheet $balance_sheet = null)
    {
        $this->balance_sheet = $balance_sheet;
        return $this;
    }
    /**
     * Get profit_and_loss_account value
     * @return \Webservices\ArrayType\GCRItemArray|null
     */
    public function getProfit_and_loss_account()
    {
        return $this->profit_and_loss_account;
    }
    /**
     * Set profit_and_loss_account value
     * @param \Webservices\ArrayType\GCRItemArray $profit_and_loss_account
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setProfit_and_loss_account(\Webservices\ArrayType\GCRItemArray $profit_and_loss_account = null)
    {
        $this->profit_and_loss_account = $profit_and_loss_account;
        return $this;
    }
    /**
     * Get supplement_to_annual_account value
     * @return \Webservices\ArrayType\GCRItemArray|null
     */
    public function getSupplement_to_annual_account()
    {
        return $this->supplement_to_annual_account;
    }
    /**
     * Set supplement_to_annual_account value
     * @param \Webservices\ArrayType\GCRItemArray $supplement_to_annual_account
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setSupplement_to_annual_account(\Webservices\ArrayType\GCRItemArray $supplement_to_annual_account = null)
    {
        $this->supplement_to_annual_account = $supplement_to_annual_account;
        return $this;
    }
    /**
     * Get ratios value
     * @return \Webservices\ArrayType\GCRRatioArray|null
     */
    public function getRatios()
    {
        return $this->ratios;
    }
    /**
     * Set ratios value
     * @param \Webservices\ArrayType\GCRRatioArray $ratios
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
     */
    public function setRatios(\Webservices\ArrayType\GCRRatioArray $ratios = null)
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
     * @return \Webservices\StructType\GCRCompanyAnnualAccount
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
