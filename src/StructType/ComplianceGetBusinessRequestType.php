<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for complianceGetBusinessRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceGetBusinessRequestType extends AbstractStructBase
{
    /**
     * The compliance_business_id
     * @var string
     */
    public $compliance_business_id;
    /**
     * Constructor method for complianceGetBusinessRequestType
     * @uses ComplianceGetBusinessRequestType::setCompliance_business_id()
     * @param string $compliance_business_id
     */
    public function __construct($compliance_business_id = null)
    {
        $this
            ->setCompliance_business_id($compliance_business_id);
    }
    /**
     * Get compliance_business_id value
     * @return string|null
     */
    public function getCompliance_business_id()
    {
        return $this->compliance_business_id;
    }
    /**
     * Set compliance_business_id value
     * @param string $compliance_business_id
     * @return \Webservices\StructType\ComplianceGetBusinessRequestType
     */
    public function setCompliance_business_id($compliance_business_id = null)
    {
        // validation for constraint: string
        if (!is_null($compliance_business_id) && !is_string($compliance_business_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compliance_business_id)), __LINE__);
        }
        $this->compliance_business_id = $compliance_business_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceGetBusinessRequestType
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
