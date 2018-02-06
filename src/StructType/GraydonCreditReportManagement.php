<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportManagement StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportManagement extends AbstractStructBase
{
    /**
     * The company_management
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRCompanyManagement
     */
    public $company_management;
    /**
     * The persons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRPersonArray
     */
    public $persons;
    /**
     * The alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarm
     */
    public $alarm;
    /**
     * Constructor method for GraydonCreditReportManagement
     * @uses GraydonCreditReportManagement::setCompany_management()
     * @uses GraydonCreditReportManagement::setPersons()
     * @uses GraydonCreditReportManagement::setAlarm()
     * @param \Webservices\StructType\GCRCompanyManagement $company_management
     * @param \Webservices\ArrayType\GCRPersonArray $persons
     * @param \Webservices\StructType\GCRAlarm $alarm
     */
    public function __construct(\Webservices\StructType\GCRCompanyManagement $company_management = null, \Webservices\ArrayType\GCRPersonArray $persons = null, \Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this
            ->setCompany_management($company_management)
            ->setPersons($persons)
            ->setAlarm($alarm);
    }
    /**
     * Get company_management value
     * @return \Webservices\StructType\GCRCompanyManagement|null
     */
    public function getCompany_management()
    {
        return $this->company_management;
    }
    /**
     * Set company_management value
     * @param \Webservices\StructType\GCRCompanyManagement $company_management
     * @return \Webservices\StructType\GraydonCreditReportManagement
     */
    public function setCompany_management(\Webservices\StructType\GCRCompanyManagement $company_management = null)
    {
        $this->company_management = $company_management;
        return $this;
    }
    /**
     * Get persons value
     * @return \Webservices\ArrayType\GCRPersonArray|null
     */
    public function getPersons()
    {
        return $this->persons;
    }
    /**
     * Set persons value
     * @param \Webservices\ArrayType\GCRPersonArray $persons
     * @return \Webservices\StructType\GraydonCreditReportManagement
     */
    public function setPersons(\Webservices\ArrayType\GCRPersonArray $persons = null)
    {
        $this->persons = $persons;
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
     * @return \Webservices\StructType\GraydonCreditReportManagement
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
     * @return \Webservices\StructType\GraydonCreditReportManagement
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
