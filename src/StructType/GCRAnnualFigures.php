<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRAnnualFigures StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRAnnualFigures extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $graydon_company_id;
    /**
     * The company_annual_accounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCompanyAnnualAccountArray
     */
    public $company_annual_accounts;
    /**
     * The bank_and_insurer_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRBankAndInsurerDataArray
     */
    public $bank_and_insurer_data;
    /**
     * Constructor method for GCRAnnualFigures
     * @uses GCRAnnualFigures::setGraydon_company_id()
     * @uses GCRAnnualFigures::setCompany_annual_accounts()
     * @uses GCRAnnualFigures::setBank_and_insurer_data()
     * @param int $graydon_company_id
     * @param \Webservices\ArrayType\GCRCompanyAnnualAccountArray $company_annual_accounts
     * @param \Webservices\ArrayType\GCRBankAndInsurerDataArray $bank_and_insurer_data
     */
    public function __construct($graydon_company_id = null, \Webservices\ArrayType\GCRCompanyAnnualAccountArray $company_annual_accounts = null, \Webservices\ArrayType\GCRBankAndInsurerDataArray $bank_and_insurer_data = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setCompany_annual_accounts($company_annual_accounts)
            ->setBank_and_insurer_data($bank_and_insurer_data);
    }
    /**
     * Get graydon_company_id value
     * @return int|null
     */
    public function getGraydon_company_id()
    {
        return $this->graydon_company_id;
    }
    /**
     * Set graydon_company_id value
     * @param int $graydon_company_id
     * @return \Webservices\StructType\GCRAnnualFigures
     */
    public function setGraydon_company_id($graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($graydon_company_id) && !is_numeric($graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($graydon_company_id)), __LINE__);
        }
        $this->graydon_company_id = $graydon_company_id;
        return $this;
    }
    /**
     * Get company_annual_accounts value
     * @return \Webservices\ArrayType\GCRCompanyAnnualAccountArray|null
     */
    public function getCompany_annual_accounts()
    {
        return $this->company_annual_accounts;
    }
    /**
     * Set company_annual_accounts value
     * @param \Webservices\ArrayType\GCRCompanyAnnualAccountArray $company_annual_accounts
     * @return \Webservices\StructType\GCRAnnualFigures
     */
    public function setCompany_annual_accounts(\Webservices\ArrayType\GCRCompanyAnnualAccountArray $company_annual_accounts = null)
    {
        $this->company_annual_accounts = $company_annual_accounts;
        return $this;
    }
    /**
     * Get bank_and_insurer_data value
     * @return \Webservices\ArrayType\GCRBankAndInsurerDataArray|null
     */
    public function getBank_and_insurer_data()
    {
        return $this->bank_and_insurer_data;
    }
    /**
     * Set bank_and_insurer_data value
     * @param \Webservices\ArrayType\GCRBankAndInsurerDataArray $bank_and_insurer_data
     * @return \Webservices\StructType\GCRAnnualFigures
     */
    public function setBank_and_insurer_data(\Webservices\ArrayType\GCRBankAndInsurerDataArray $bank_and_insurer_data = null)
    {
        $this->bank_and_insurer_data = $bank_and_insurer_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRAnnualFigures
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
