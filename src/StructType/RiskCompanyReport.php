<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskCompanyReport StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskCompanyReport extends AbstractStructBase
{
    /**
     * The companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskCompanyArray
     */
    public $companies;
    /**
     * The insolvencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskInsolvencyArray
     */
    public $insolvencies;
    /**
     * The legal_restraint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskLegalRestraint
     */
    public $legal_restraint;
    /**
     * Constructor method for RiskCompanyReport
     * @uses RiskCompanyReport::setCompanies()
     * @uses RiskCompanyReport::setInsolvencies()
     * @uses RiskCompanyReport::setLegal_restraint()
     * @param \Webservices\ArrayType\RiskCompanyArray $companies
     * @param \Webservices\ArrayType\RiskInsolvencyArray $insolvencies
     * @param \Webservices\StructType\RiskLegalRestraint $legal_restraint
     */
    public function __construct(\Webservices\ArrayType\RiskCompanyArray $companies = null, \Webservices\ArrayType\RiskInsolvencyArray $insolvencies = null, \Webservices\StructType\RiskLegalRestraint $legal_restraint = null)
    {
        $this
            ->setCompanies($companies)
            ->setInsolvencies($insolvencies)
            ->setLegal_restraint($legal_restraint);
    }
    /**
     * Get companies value
     * @return \Webservices\ArrayType\RiskCompanyArray|null
     */
    public function getCompanies()
    {
        return $this->companies;
    }
    /**
     * Set companies value
     * @param \Webservices\ArrayType\RiskCompanyArray $companies
     * @return \Webservices\StructType\RiskCompanyReport
     */
    public function setCompanies(\Webservices\ArrayType\RiskCompanyArray $companies = null)
    {
        $this->companies = $companies;
        return $this;
    }
    /**
     * Get insolvencies value
     * @return \Webservices\ArrayType\RiskInsolvencyArray|null
     */
    public function getInsolvencies()
    {
        return $this->insolvencies;
    }
    /**
     * Set insolvencies value
     * @param \Webservices\ArrayType\RiskInsolvencyArray $insolvencies
     * @return \Webservices\StructType\RiskCompanyReport
     */
    public function setInsolvencies(\Webservices\ArrayType\RiskInsolvencyArray $insolvencies = null)
    {
        $this->insolvencies = $insolvencies;
        return $this;
    }
    /**
     * Get legal_restraint value
     * @return \Webservices\StructType\RiskLegalRestraint|null
     */
    public function getLegal_restraint()
    {
        return $this->legal_restraint;
    }
    /**
     * Set legal_restraint value
     * @param \Webservices\StructType\RiskLegalRestraint $legal_restraint
     * @return \Webservices\StructType\RiskCompanyReport
     */
    public function setLegal_restraint(\Webservices\StructType\RiskLegalRestraint $legal_restraint = null)
    {
        $this->legal_restraint = $legal_restraint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskCompanyReport
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
