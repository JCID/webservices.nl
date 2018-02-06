<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyItselfAlarm StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyItselfAlarm extends AbstractStructBase
{
    /**
     * The graydon_company_id
     * @var int
     */
    public $graydon_company_id;
    /**
     * The contact_details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarmContactDetails
     */
    public $contact_details;
    /**
     * The discontinuance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRDiscontinuance
     */
    public $discontinuance;
    /**
     * The special_company_information
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRSpecialCompanyInformationArray
     */
    public $special_company_information;
    /**
     * Constructor method for GCRCompanyItselfAlarm
     * @uses GCRCompanyItselfAlarm::setGraydon_company_id()
     * @uses GCRCompanyItselfAlarm::setContact_details()
     * @uses GCRCompanyItselfAlarm::setDiscontinuance()
     * @uses GCRCompanyItselfAlarm::setSpecial_company_information()
     * @param int $graydon_company_id
     * @param \Webservices\StructType\GCRAlarmContactDetails $contact_details
     * @param \Webservices\StructType\GCRDiscontinuance $discontinuance
     * @param \Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information
     */
    public function __construct($graydon_company_id = null, \Webservices\StructType\GCRAlarmContactDetails $contact_details = null, \Webservices\StructType\GCRDiscontinuance $discontinuance = null, \Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information = null)
    {
        $this
            ->setGraydon_company_id($graydon_company_id)
            ->setContact_details($contact_details)
            ->setDiscontinuance($discontinuance)
            ->setSpecial_company_information($special_company_information);
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
     * @return \Webservices\StructType\GCRCompanyItselfAlarm
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
     * Get contact_details value
     * @return \Webservices\StructType\GCRAlarmContactDetails|null
     */
    public function getContact_details()
    {
        return $this->contact_details;
    }
    /**
     * Set contact_details value
     * @param \Webservices\StructType\GCRAlarmContactDetails $contact_details
     * @return \Webservices\StructType\GCRCompanyItselfAlarm
     */
    public function setContact_details(\Webservices\StructType\GCRAlarmContactDetails $contact_details = null)
    {
        $this->contact_details = $contact_details;
        return $this;
    }
    /**
     * Get discontinuance value
     * @return \Webservices\StructType\GCRDiscontinuance|null
     */
    public function getDiscontinuance()
    {
        return $this->discontinuance;
    }
    /**
     * Set discontinuance value
     * @param \Webservices\StructType\GCRDiscontinuance $discontinuance
     * @return \Webservices\StructType\GCRCompanyItselfAlarm
     */
    public function setDiscontinuance(\Webservices\StructType\GCRDiscontinuance $discontinuance = null)
    {
        $this->discontinuance = $discontinuance;
        return $this;
    }
    /**
     * Get special_company_information value
     * @return \Webservices\ArrayType\GCRSpecialCompanyInformationArray|null
     */
    public function getSpecial_company_information()
    {
        return $this->special_company_information;
    }
    /**
     * Set special_company_information value
     * @param \Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information
     * @return \Webservices\StructType\GCRCompanyItselfAlarm
     */
    public function setSpecial_company_information(\Webservices\ArrayType\GCRSpecialCompanyInformationArray $special_company_information = null)
    {
        $this->special_company_information = $special_company_information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCompanyItselfAlarm
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
