<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for complianceGetPersonRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceGetPersonRequestType extends AbstractStructBase
{
    /**
     * The compliance_person_id
     * @var string
     */
    public $compliance_person_id;
    /**
     * Constructor method for complianceGetPersonRequestType
     * @uses ComplianceGetPersonRequestType::setCompliance_person_id()
     * @param string $compliance_person_id
     */
    public function __construct($compliance_person_id = null)
    {
        $this
            ->setCompliance_person_id($compliance_person_id);
    }
    /**
     * Get compliance_person_id value
     * @return string|null
     */
    public function getCompliance_person_id()
    {
        return $this->compliance_person_id;
    }
    /**
     * Set compliance_person_id value
     * @param string $compliance_person_id
     * @return \Webservices\StructType\ComplianceGetPersonRequestType
     */
    public function setCompliance_person_id($compliance_person_id = null)
    {
        // validation for constraint: string
        if (!is_null($compliance_person_id) && !is_string($compliance_person_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compliance_person_id)), __LINE__);
        }
        $this->compliance_person_id = $compliance_person_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceGetPersonRequestType
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
