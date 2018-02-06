<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompliancePersonReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CompliancePersonReference extends AbstractStructBase
{
    /**
     * The compliance_person_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $compliance_person_id;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $last_name;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The date_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_birth;
    /**
     * The relation_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $relation_description;
    /**
     * Constructor method for CompliancePersonReference
     * @uses CompliancePersonReference::setCompliance_person_id()
     * @uses CompliancePersonReference::setLast_name()
     * @uses CompliancePersonReference::setFirst_name()
     * @uses CompliancePersonReference::setDate_of_birth()
     * @uses CompliancePersonReference::setRelation_description()
     * @param int $compliance_person_id
     * @param string $last_name
     * @param string $first_name
     * @param string $date_of_birth
     * @param string $relation_description
     */
    public function __construct($compliance_person_id = null, $last_name = null, $first_name = null, $date_of_birth = null, $relation_description = null)
    {
        $this
            ->setCompliance_person_id($compliance_person_id)
            ->setLast_name($last_name)
            ->setFirst_name($first_name)
            ->setDate_of_birth($date_of_birth)
            ->setRelation_description($relation_description);
    }
    /**
     * Get compliance_person_id value
     * @return int
     */
    public function getCompliance_person_id()
    {
        return $this->compliance_person_id;
    }
    /**
     * Set compliance_person_id value
     * @param int $compliance_person_id
     * @return \Webservices\StructType\CompliancePersonReference
     */
    public function setCompliance_person_id($compliance_person_id = null)
    {
        // validation for constraint: int
        if (!is_null($compliance_person_id) && !is_numeric($compliance_person_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compliance_person_id)), __LINE__);
        }
        $this->compliance_person_id = $compliance_person_id;
        return $this;
    }
    /**
     * Get last_name value
     * @return string
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\CompliancePersonReference
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Webservices\StructType\CompliancePersonReference
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get date_of_birth value
     * @return string|null
     */
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }
    /**
     * Set date_of_birth value
     * @param string $date_of_birth
     * @return \Webservices\StructType\CompliancePersonReference
     */
    public function setDate_of_birth($date_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_birth) && !is_string($date_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_birth)), __LINE__);
        }
        $this->date_of_birth = $date_of_birth;
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
     * @return \Webservices\StructType\CompliancePersonReference
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
     * @return \Webservices\StructType\CompliancePersonReference
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
