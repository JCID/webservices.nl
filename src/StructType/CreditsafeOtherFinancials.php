<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeOtherFinancials StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeOtherFinancials extends AbstractStructBase
{
    /**
     * The contingent_liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contingent_liabilities;
    /**
     * The working_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $working_capital;
    /**
     * The net_worth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $net_worth;
    /**
     * Constructor method for CreditsafeOtherFinancials
     * @uses CreditsafeOtherFinancials::setContingent_liabilities()
     * @uses CreditsafeOtherFinancials::setWorking_capital()
     * @uses CreditsafeOtherFinancials::setNet_worth()
     * @param string $contingent_liabilities
     * @param float $working_capital
     * @param float $net_worth
     */
    public function __construct($contingent_liabilities = null, $working_capital = null, $net_worth = null)
    {
        $this
            ->setContingent_liabilities($contingent_liabilities)
            ->setWorking_capital($working_capital)
            ->setNet_worth($net_worth);
    }
    /**
     * Get contingent_liabilities value
     * @return string|null
     */
    public function getContingent_liabilities()
    {
        return $this->contingent_liabilities;
    }
    /**
     * Set contingent_liabilities value
     * @param string $contingent_liabilities
     * @return \Webservices\StructType\CreditsafeOtherFinancials
     */
    public function setContingent_liabilities($contingent_liabilities = null)
    {
        // validation for constraint: string
        if (!is_null($contingent_liabilities) && !is_string($contingent_liabilities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contingent_liabilities)), __LINE__);
        }
        $this->contingent_liabilities = $contingent_liabilities;
        return $this;
    }
    /**
     * Get working_capital value
     * @return float|null
     */
    public function getWorking_capital()
    {
        return $this->working_capital;
    }
    /**
     * Set working_capital value
     * @param float $working_capital
     * @return \Webservices\StructType\CreditsafeOtherFinancials
     */
    public function setWorking_capital($working_capital = null)
    {
        $this->working_capital = $working_capital;
        return $this;
    }
    /**
     * Get net_worth value
     * @return float|null
     */
    public function getNet_worth()
    {
        return $this->net_worth;
    }
    /**
     * Set net_worth value
     * @param float $net_worth
     * @return \Webservices\StructType\CreditsafeOtherFinancials
     */
    public function setNet_worth($net_worth = null)
    {
        $this->net_worth = $net_worth;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeOtherFinancials
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
