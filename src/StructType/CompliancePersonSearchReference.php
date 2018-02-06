<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompliancePersonSearchReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CompliancePersonSearchReference extends AbstractStructBase
{
    /**
     * The match_score
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $match_score;
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
     * The flags
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\StringArray
     */
    public $flags;
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
     * The nationality
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nationality;
    /**
     * Constructor method for CompliancePersonSearchReference
     * @uses CompliancePersonSearchReference::setMatch_score()
     * @uses CompliancePersonSearchReference::setCompliance_person_id()
     * @uses CompliancePersonSearchReference::setLast_name()
     * @uses CompliancePersonSearchReference::setFlags()
     * @uses CompliancePersonSearchReference::setFirst_name()
     * @uses CompliancePersonSearchReference::setDate_of_birth()
     * @uses CompliancePersonSearchReference::setNationality()
     * @param int $match_score
     * @param int $compliance_person_id
     * @param string $last_name
     * @param \Webservices\ArrayType\StringArray $flags
     * @param string $first_name
     * @param string $date_of_birth
     * @param string $nationality
     */
    public function __construct($match_score = null, $compliance_person_id = null, $last_name = null, \Webservices\ArrayType\StringArray $flags = null, $first_name = null, $date_of_birth = null, $nationality = null)
    {
        $this
            ->setMatch_score($match_score)
            ->setCompliance_person_id($compliance_person_id)
            ->setLast_name($last_name)
            ->setFlags($flags)
            ->setFirst_name($first_name)
            ->setDate_of_birth($date_of_birth)
            ->setNationality($nationality);
    }
    /**
     * Get match_score value
     * @return int
     */
    public function getMatch_score()
    {
        return $this->match_score;
    }
    /**
     * Set match_score value
     * @param int $match_score
     * @return \Webservices\StructType\CompliancePersonSearchReference
     */
    public function setMatch_score($match_score = null)
    {
        // validation for constraint: int
        if (!is_null($match_score) && !is_numeric($match_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($match_score)), __LINE__);
        }
        $this->match_score = $match_score;
        return $this;
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
     * @return \Webservices\StructType\CompliancePersonSearchReference
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
     * @return \Webservices\StructType\CompliancePersonSearchReference
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
     * Get flags value
     * @return \Webservices\ArrayType\StringArray
     */
    public function getFlags()
    {
        return $this->flags;
    }
    /**
     * Set flags value
     * @param \Webservices\ArrayType\StringArray $flags
     * @return \Webservices\StructType\CompliancePersonSearchReference
     */
    public function setFlags(\Webservices\ArrayType\StringArray $flags = null)
    {
        $this->flags = $flags;
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
     * @return \Webservices\StructType\CompliancePersonSearchReference
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
     * @return \Webservices\StructType\CompliancePersonSearchReference
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
     * Get nationality value
     * @return string|null
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Webservices\StructType\CompliancePersonSearchReference
     */
    public function setNationality($nationality = null)
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CompliancePersonSearchReference
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
