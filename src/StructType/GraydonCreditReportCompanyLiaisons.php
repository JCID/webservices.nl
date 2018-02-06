<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportCompanyLiaisons StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportCompanyLiaisons extends AbstractStructBase
{
    /**
     * The concern_liaisons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRLiaisonArray
     */
    public $concern_liaisons;
    /**
     * The companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRLiaisonCompanyArray
     */
    public $companies;
    /**
     * The alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarm
     */
    public $alarm;
    /**
     * Constructor method for GraydonCreditReportCompanyLiaisons
     * @uses GraydonCreditReportCompanyLiaisons::setConcern_liaisons()
     * @uses GraydonCreditReportCompanyLiaisons::setCompanies()
     * @uses GraydonCreditReportCompanyLiaisons::setAlarm()
     * @param \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons
     * @param \Webservices\ArrayType\GCRLiaisonCompanyArray $companies
     * @param \Webservices\StructType\GCRAlarm $alarm
     */
    public function __construct(\Webservices\ArrayType\GCRLiaisonArray $concern_liaisons = null, \Webservices\ArrayType\GCRLiaisonCompanyArray $companies = null, \Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this
            ->setConcern_liaisons($concern_liaisons)
            ->setCompanies($companies)
            ->setAlarm($alarm);
    }
    /**
     * Get concern_liaisons value
     * @return \Webservices\ArrayType\GCRLiaisonArray|null
     */
    public function getConcern_liaisons()
    {
        return $this->concern_liaisons;
    }
    /**
     * Set concern_liaisons value
     * @param \Webservices\ArrayType\GCRLiaisonArray $concern_liaisons
     * @return \Webservices\StructType\GraydonCreditReportCompanyLiaisons
     */
    public function setConcern_liaisons(\Webservices\ArrayType\GCRLiaisonArray $concern_liaisons = null)
    {
        $this->concern_liaisons = $concern_liaisons;
        return $this;
    }
    /**
     * Get companies value
     * @return \Webservices\ArrayType\GCRLiaisonCompanyArray|null
     */
    public function getCompanies()
    {
        return $this->companies;
    }
    /**
     * Set companies value
     * @param \Webservices\ArrayType\GCRLiaisonCompanyArray $companies
     * @return \Webservices\StructType\GraydonCreditReportCompanyLiaisons
     */
    public function setCompanies(\Webservices\ArrayType\GCRLiaisonCompanyArray $companies = null)
    {
        $this->companies = $companies;
        return $this;
    }
    /**
     * Get alarm value
     * @return \Webservices\StructType\GCRAlarm|null
     */
    public function getAlarm()
    {
        return $this->alarm;
    }
    /**
     * Set alarm value
     * @param \Webservices\StructType\GCRAlarm $alarm
     * @return \Webservices\StructType\GraydonCreditReportCompanyLiaisons
     */
    public function setAlarm(\Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this->alarm = $alarm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReportCompanyLiaisons
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
