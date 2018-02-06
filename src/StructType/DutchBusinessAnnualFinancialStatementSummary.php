<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessAnnualFinancialStatementSummary StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessAnnualFinancialStatementSummary extends AbstractStructBase
{
    /**
     * The year
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $year;
    /**
     * The turnover
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $turnover;
    /**
     * The profit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $profit;
    /**
     * The assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessMoneyV2
     */
    public $assets;
    /**
     * Constructor method for DutchBusinessAnnualFinancialStatementSummary
     * @uses DutchBusinessAnnualFinancialStatementSummary::setYear()
     * @uses DutchBusinessAnnualFinancialStatementSummary::setTurnover()
     * @uses DutchBusinessAnnualFinancialStatementSummary::setProfit()
     * @uses DutchBusinessAnnualFinancialStatementSummary::setAssets()
     * @param int $year
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $turnover
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $profit
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $assets
     */
    public function __construct($year = null, \Webservices\StructType\DutchBusinessMoneyV2 $turnover = null, \Webservices\StructType\DutchBusinessMoneyV2 $profit = null, \Webservices\StructType\DutchBusinessMoneyV2 $assets = null)
    {
        $this
            ->setYear($year)
            ->setTurnover($turnover)
            ->setProfit($profit)
            ->setAssets($assets);
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->year = $year;
        return $this;
    }
    /**
     * Get turnover value
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getTurnover()
    {
        return $this->turnover;
    }
    /**
     * Set turnover value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $turnover
     * @return \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary
     */
    public function setTurnover(\Webservices\StructType\DutchBusinessMoneyV2 $turnover = null)
    {
        $this->turnover = $turnover;
        return $this;
    }
    /**
     * Get profit value
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getProfit()
    {
        return $this->profit;
    }
    /**
     * Set profit value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $profit
     * @return \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary
     */
    public function setProfit(\Webservices\StructType\DutchBusinessMoneyV2 $profit = null)
    {
        $this->profit = $profit;
        return $this;
    }
    /**
     * Get assets value
     * @return \Webservices\StructType\DutchBusinessMoneyV2|null
     */
    public function getAssets()
    {
        return $this->assets;
    }
    /**
     * Set assets value
     * @param \Webservices\StructType\DutchBusinessMoneyV2 $assets
     * @return \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary
     */
    public function setAssets(\Webservices\StructType\DutchBusinessMoneyV2 $assets = null)
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessAnnualFinancialStatementSummary
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
