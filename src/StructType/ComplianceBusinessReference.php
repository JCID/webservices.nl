<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceBusinessReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceBusinessReference extends AbstractStructBase
{
    /**
     * The compliance_business_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $compliance_business_id;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $name;
    /**
     * The relation_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $relation_description;
    /**
     * Constructor method for ComplianceBusinessReference
     * @uses ComplianceBusinessReference::setCompliance_business_id()
     * @uses ComplianceBusinessReference::setName()
     * @uses ComplianceBusinessReference::setRelation_description()
     * @param int $compliance_business_id
     * @param string $name
     * @param string $relation_description
     */
    public function __construct($compliance_business_id = null, $name = null, $relation_description = null)
    {
        $this
            ->setCompliance_business_id($compliance_business_id)
            ->setName($name)
            ->setRelation_description($relation_description);
    }
    /**
     * Get compliance_business_id value
     * @return int
     */
    public function getCompliance_business_id()
    {
        return $this->compliance_business_id;
    }
    /**
     * Set compliance_business_id value
     * @param int $compliance_business_id
     * @return \Webservices\StructType\ComplianceBusinessReference
     */
    public function setCompliance_business_id($compliance_business_id = null)
    {
        // validation for constraint: int
        if (!is_null($compliance_business_id) && !is_numeric($compliance_business_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compliance_business_id)), __LINE__);
        }
        $this->compliance_business_id = $compliance_business_id;
        return $this;
    }
    /**
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\ComplianceBusinessReference
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get relation_description value
     * @return string|null
     */
    public function getRelation_description()
    {
        return $this->relation_description;
    }
    /**
     * Set relation_description value
     * @param string $relation_description
     * @return \Webservices\StructType\ComplianceBusinessReference
     */
    public function setRelation_description($relation_description = null)
    {
        // validation for constraint: string
        if (!is_null($relation_description) && !is_string($relation_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relation_description)), __LINE__);
        }
        $this->relation_description = $relation_description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceBusinessReference
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
