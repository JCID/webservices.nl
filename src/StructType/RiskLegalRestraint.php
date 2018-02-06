<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskLegalRestraint StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskLegalRestraint extends AbstractStructBase
{
    /**
     * The verdict_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $verdict_number;
    /**
     * The person
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskLegalRestraintPerson
     */
    public $person;
    /**
     * The registry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskLegalRestraintRegistry
     */
    public $registry;
    /**
     * The decisions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskLegalRestraintDecisionArray
     */
    public $decisions;
    /**
     * Constructor method for RiskLegalRestraint
     * @uses RiskLegalRestraint::setVerdict_number()
     * @uses RiskLegalRestraint::setPerson()
     * @uses RiskLegalRestraint::setRegistry()
     * @uses RiskLegalRestraint::setDecisions()
     * @param string $verdict_number
     * @param \Webservices\StructType\RiskLegalRestraintPerson $person
     * @param \Webservices\StructType\RiskLegalRestraintRegistry $registry
     * @param \Webservices\ArrayType\RiskLegalRestraintDecisionArray $decisions
     */
    public function __construct($verdict_number = null, \Webservices\StructType\RiskLegalRestraintPerson $person = null, \Webservices\StructType\RiskLegalRestraintRegistry $registry = null, \Webservices\ArrayType\RiskLegalRestraintDecisionArray $decisions = null)
    {
        $this
            ->setVerdict_number($verdict_number)
            ->setPerson($person)
            ->setRegistry($registry)
            ->setDecisions($decisions);
    }
    /**
     * Get verdict_number value
     * @return string|null
     */
    public function getVerdict_number()
    {
        return $this->verdict_number;
    }
    /**
     * Set verdict_number value
     * @param string $verdict_number
     * @return \Webservices\StructType\RiskLegalRestraint
     */
    public function setVerdict_number($verdict_number = null)
    {
        // validation for constraint: string
        if (!is_null($verdict_number) && !is_string($verdict_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verdict_number)), __LINE__);
        }
        $this->verdict_number = $verdict_number;
        return $this;
    }
    /**
     * Get person value
     * @return \Webservices\StructType\RiskLegalRestraintPerson|null
     */
    public function getPerson()
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \Webservices\StructType\RiskLegalRestraintPerson $person
     * @return \Webservices\StructType\RiskLegalRestraint
     */
    public function setPerson(\Webservices\StructType\RiskLegalRestraintPerson $person = null)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Get registry value
     * @return \Webservices\StructType\RiskLegalRestraintRegistry|null
     */
    public function getRegistry()
    {
        return $this->registry;
    }
    /**
     * Set registry value
     * @param \Webservices\StructType\RiskLegalRestraintRegistry $registry
     * @return \Webservices\StructType\RiskLegalRestraint
     */
    public function setRegistry(\Webservices\StructType\RiskLegalRestraintRegistry $registry = null)
    {
        $this->registry = $registry;
        return $this;
    }
    /**
     * Get decisions value
     * @return \Webservices\ArrayType\RiskLegalRestraintDecisionArray|null
     */
    public function getDecisions()
    {
        return $this->decisions;
    }
    /**
     * Set decisions value
     * @param \Webservices\ArrayType\RiskLegalRestraintDecisionArray $decisions
     * @return \Webservices\StructType\RiskLegalRestraint
     */
    public function setDecisions(\Webservices\ArrayType\RiskLegalRestraintDecisionArray $decisions = null)
    {
        $this->decisions = $decisions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskLegalRestraint
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
