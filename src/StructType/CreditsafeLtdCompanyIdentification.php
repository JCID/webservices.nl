<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdCompanyIdentification StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdCompanyIdentification extends AbstractStructBase
{
    /**
     * The basic_information
     * @var \Webservices\StructType\CreditsafeLtdCompanyBasicInformation
     */
    public $basic_information;
    /**
     * The activities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeCompanyActivityArray
     */
    public $activities;
    /**
     * The previous_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeChangedStringArray
     */
    public $previous_names;
    /**
     * The previous_legal_forms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\CreditsafeChangedStringArray
     */
    public $previous_legal_forms;
    /**
     * Constructor method for CreditsafeLtdCompanyIdentification
     * @uses CreditsafeLtdCompanyIdentification::setBasic_information()
     * @uses CreditsafeLtdCompanyIdentification::setActivities()
     * @uses CreditsafeLtdCompanyIdentification::setPrevious_names()
     * @uses CreditsafeLtdCompanyIdentification::setPrevious_legal_forms()
     * @param \Webservices\StructType\CreditsafeLtdCompanyBasicInformation $basic_information
     * @param \Webservices\ArrayType\CreditsafeCompanyActivityArray $activities
     * @param \Webservices\ArrayType\CreditsafeChangedStringArray $previous_names
     * @param \Webservices\ArrayType\CreditsafeChangedStringArray $previous_legal_forms
     */
    public function __construct(\Webservices\StructType\CreditsafeLtdCompanyBasicInformation $basic_information = null, \Webservices\ArrayType\CreditsafeCompanyActivityArray $activities = null, \Webservices\ArrayType\CreditsafeChangedStringArray $previous_names = null, \Webservices\ArrayType\CreditsafeChangedStringArray $previous_legal_forms = null)
    {
        $this
            ->setBasic_information($basic_information)
            ->setActivities($activities)
            ->setPrevious_names($previous_names)
            ->setPrevious_legal_forms($previous_legal_forms);
    }
    /**
     * Get basic_information value
     * @return \Webservices\StructType\CreditsafeLtdCompanyBasicInformation|null
     */
    public function getBasic_information()
    {
        return $this->basic_information;
    }
    /**
     * Set basic_information value
     * @param \Webservices\StructType\CreditsafeLtdCompanyBasicInformation $basic_information
     * @return \Webservices\StructType\CreditsafeLtdCompanyIdentification
     */
    public function setBasic_information(\Webservices\StructType\CreditsafeLtdCompanyBasicInformation $basic_information = null)
    {
        $this->basic_information = $basic_information;
        return $this;
    }
    /**
     * Get activities value
     * @return \Webservices\ArrayType\CreditsafeCompanyActivityArray|null
     */
    public function getActivities()
    {
        return $this->activities;
    }
    /**
     * Set activities value
     * @param \Webservices\ArrayType\CreditsafeCompanyActivityArray $activities
     * @return \Webservices\StructType\CreditsafeLtdCompanyIdentification
     */
    public function setActivities(\Webservices\ArrayType\CreditsafeCompanyActivityArray $activities = null)
    {
        $this->activities = $activities;
        return $this;
    }
    /**
     * Get previous_names value
     * @return \Webservices\ArrayType\CreditsafeChangedStringArray|null
     */
    public function getPrevious_names()
    {
        return $this->previous_names;
    }
    /**
     * Set previous_names value
     * @param \Webservices\ArrayType\CreditsafeChangedStringArray $previous_names
     * @return \Webservices\StructType\CreditsafeLtdCompanyIdentification
     */
    public function setPrevious_names(\Webservices\ArrayType\CreditsafeChangedStringArray $previous_names = null)
    {
        $this->previous_names = $previous_names;
        return $this;
    }
    /**
     * Get previous_legal_forms value
     * @return \Webservices\ArrayType\CreditsafeChangedStringArray|null
     */
    public function getPrevious_legal_forms()
    {
        return $this->previous_legal_forms;
    }
    /**
     * Set previous_legal_forms value
     * @param \Webservices\ArrayType\CreditsafeChangedStringArray $previous_legal_forms
     * @return \Webservices\StructType\CreditsafeLtdCompanyIdentification
     */
    public function setPrevious_legal_forms(\Webservices\ArrayType\CreditsafeChangedStringArray $previous_legal_forms = null)
    {
        $this->previous_legal_forms = $previous_legal_forms;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdCompanyIdentification
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
