<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdOtherInformation StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdOtherInformation extends AbstractStructBase
{
    /**
     * The bankers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeBankerArray
     */
    public $bankers;
    /**
     * The advisors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeAdvisorArray
     */
    public $advisors;
    /**
     * The employees_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeEmployeeInformationArray
     */
    public $employees_information;
    /**
     * Constructor method for CreditsafeLtdOtherInformation
     * @uses CreditsafeLtdOtherInformation::setBankers()
     * @uses CreditsafeLtdOtherInformation::setAdvisors()
     * @uses CreditsafeLtdOtherInformation::setEmployees_information()
     * @param \Webservices\ArrayType\CreditsafeBankerArray $bankers
     * @param \Webservices\ArrayType\CreditsafeAdvisorArray $advisors
     * @param \Webservices\ArrayType\CreditsafeEmployeeInformationArray $employees_information
     */
    public function __construct(\Webservices\ArrayType\CreditsafeBankerArray $bankers = null, \Webservices\ArrayType\CreditsafeAdvisorArray $advisors = null, \Webservices\ArrayType\CreditsafeEmployeeInformationArray $employees_information = null)
    {
        $this
            ->setBankers($bankers)
            ->setAdvisors($advisors)
            ->setEmployees_information($employees_information);
    }
    /**
     * Get bankers value
     * @return \Webservices\ArrayType\CreditsafeBankerArray|null
     */
    public function getBankers()
    {
        return $this->bankers;
    }
    /**
     * Set bankers value
     * @param \Webservices\ArrayType\CreditsafeBankerArray $bankers
     * @return \Webservices\StructType\CreditsafeLtdOtherInformation
     */
    public function setBankers(\Webservices\ArrayType\CreditsafeBankerArray $bankers = null)
    {
        $this->bankers = $bankers;
        return $this;
    }
    /**
     * Get advisors value
     * @return \Webservices\ArrayType\CreditsafeAdvisorArray|null
     */
    public function getAdvisors()
    {
        return $this->advisors;
    }
    /**
     * Set advisors value
     * @param \Webservices\ArrayType\CreditsafeAdvisorArray $advisors
     * @return \Webservices\StructType\CreditsafeLtdOtherInformation
     */
    public function setAdvisors(\Webservices\ArrayType\CreditsafeAdvisorArray $advisors = null)
    {
        $this->advisors = $advisors;
        return $this;
    }
    /**
     * Get employees_information value
     * @return \Webservices\ArrayType\CreditsafeEmployeeInformationArray|null
     */
    public function getEmployees_information()
    {
        return $this->employees_information;
    }
    /**
     * Set employees_information value
     * @param \Webservices\ArrayType\CreditsafeEmployeeInformationArray $employees_information
     * @return \Webservices\StructType\CreditsafeLtdOtherInformation
     */
    public function setEmployees_information(\Webservices\ArrayType\CreditsafeEmployeeInformationArray $employees_information = null)
    {
        $this->employees_information = $employees_information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdOtherInformation
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
