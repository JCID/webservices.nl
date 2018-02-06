<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportAlarm StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportAlarm extends AbstractStructBase
{
    /**
     * The company
     * @var \Webservices\StructType\GCRCompanyItselfAlarm
     */
    public $company;
    /**
     * Constructor method for GraydonCreditReportAlarm
     * @uses GraydonCreditReportAlarm::setCompany()
     * @param \Webservices\StructType\GCRCompanyItselfAlarm $company
     */
    public function __construct(\Webservices\StructType\GCRCompanyItselfAlarm $company = null)
    {
        $this
            ->setCompany($company);
    }
    /**
     * Get company value
     * @return \Webservices\StructType\GCRCompanyItselfAlarm|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param \Webservices\StructType\GCRCompanyItselfAlarm $company
     * @return \Webservices\StructType\GraydonCreditReportAlarm
     */
    public function setCompany(\Webservices\StructType\GCRCompanyItselfAlarm $company = null)
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReportAlarm
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
