<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdShareCapitalStructure StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdShareCapitalStructure extends AbstractStructBase
{
    /**
     * The nominal_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $nominal_share_capital;
    /**
     * The issued_share_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $issued_share_capital;
    /**
     * The share_holders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeShareHolderArray
     */
    public $share_holders;
    /**
     * Constructor method for CreditsafeLtdShareCapitalStructure
     * @uses CreditsafeLtdShareCapitalStructure::setNominal_share_capital()
     * @uses CreditsafeLtdShareCapitalStructure::setIssued_share_capital()
     * @uses CreditsafeLtdShareCapitalStructure::setShare_holders()
     * @param float $nominal_share_capital
     * @param float $issued_share_capital
     * @param \Webservices\ArrayType\CreditsafeShareHolderArray $share_holders
     */
    public function __construct($nominal_share_capital = null, $issued_share_capital = null, \Webservices\ArrayType\CreditsafeShareHolderArray $share_holders = null)
    {
        $this
            ->setNominal_share_capital($nominal_share_capital)
            ->setIssued_share_capital($issued_share_capital)
            ->setShare_holders($share_holders);
    }
    /**
     * Get nominal_share_capital value
     * @return float|null
     */
    public function getNominal_share_capital()
    {
        return $this->nominal_share_capital;
    }
    /**
     * Set nominal_share_capital value
     * @param float $nominal_share_capital
     * @return \Webservices\StructType\CreditsafeLtdShareCapitalStructure
     */
    public function setNominal_share_capital($nominal_share_capital = null)
    {
        $this->nominal_share_capital = $nominal_share_capital;
        return $this;
    }
    /**
     * Get issued_share_capital value
     * @return float|null
     */
    public function getIssued_share_capital()
    {
        return $this->issued_share_capital;
    }
    /**
     * Set issued_share_capital value
     * @param float $issued_share_capital
     * @return \Webservices\StructType\CreditsafeLtdShareCapitalStructure
     */
    public function setIssued_share_capital($issued_share_capital = null)
    {
        $this->issued_share_capital = $issued_share_capital;
        return $this;
    }
    /**
     * Get share_holders value
     * @return \Webservices\ArrayType\CreditsafeShareHolderArray|null
     */
    public function getShare_holders()
    {
        return $this->share_holders;
    }
    /**
     * Set share_holders value
     * @param \Webservices\ArrayType\CreditsafeShareHolderArray $share_holders
     * @return \Webservices\StructType\CreditsafeLtdShareCapitalStructure
     */
    public function setShare_holders(\Webservices\ArrayType\CreditsafeShareHolderArray $share_holders = null)
    {
        $this->share_holders = $share_holders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdShareCapitalStructure
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
