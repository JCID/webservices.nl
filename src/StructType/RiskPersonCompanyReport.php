<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskPersonCompanyReport StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskPersonCompanyReport extends AbstractStructBase
{
    /**
     * The person
     * @var \Webservices\StructType\RiskPerson
     */
    public $person;
    /**
     * The conclusion
     * @var \Webservices\StructType\RiskResult
     */
    public $conclusion;
    /**
     * The report_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskCompanyReport
     */
    public $report_data;
    /**
     * Constructor method for RiskPersonCompanyReport
     * @uses RiskPersonCompanyReport::setPerson()
     * @uses RiskPersonCompanyReport::setConclusion()
     * @uses RiskPersonCompanyReport::setReport_data()
     * @param \Webservices\StructType\RiskPerson $person
     * @param \Webservices\StructType\RiskResult $conclusion
     * @param \Webservices\StructType\RiskCompanyReport $report_data
     */
    public function __construct(\Webservices\StructType\RiskPerson $person = null, \Webservices\StructType\RiskResult $conclusion = null, \Webservices\StructType\RiskCompanyReport $report_data = null)
    {
        $this
            ->setPerson($person)
            ->setConclusion($conclusion)
            ->setReport_data($report_data);
    }
    /**
     * Get person value
     * @return \Webservices\StructType\RiskPerson|null
     */
    public function getPerson()
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \Webservices\StructType\RiskPerson $person
     * @return \Webservices\StructType\RiskPersonCompanyReport
     */
    public function setPerson(\Webservices\StructType\RiskPerson $person = null)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Get conclusion value
     * @return \Webservices\StructType\RiskResult|null
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }
    /**
     * Set conclusion value
     * @param \Webservices\StructType\RiskResult $conclusion
     * @return \Webservices\StructType\RiskPersonCompanyReport
     */
    public function setConclusion(\Webservices\StructType\RiskResult $conclusion = null)
    {
        $this->conclusion = $conclusion;
        return $this;
    }
    /**
     * Get report_data value
     * @return \Webservices\StructType\RiskCompanyReport|null
     */
    public function getReport_data()
    {
        return $this->report_data;
    }
    /**
     * Set report_data value
     * @param \Webservices\StructType\RiskCompanyReport $report_data
     * @return \Webservices\StructType\RiskPersonCompanyReport
     */
    public function setReport_data(\Webservices\StructType\RiskCompanyReport $report_data = null)
    {
        $this->report_data = $report_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskPersonCompanyReport
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
