<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceBusinessSearchReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceBusinessSearchReference extends AbstractStructBase
{
    /**
     * The match_score
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $match_score;
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
     * The flags
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\StringArray
     */
    public $flags;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for ComplianceBusinessSearchReference
     * @uses ComplianceBusinessSearchReference::setMatch_score()
     * @uses ComplianceBusinessSearchReference::setCompliance_business_id()
     * @uses ComplianceBusinessSearchReference::setName()
     * @uses ComplianceBusinessSearchReference::setFlags()
     * @uses ComplianceBusinessSearchReference::setCountry()
     * @param int $match_score
     * @param int $compliance_business_id
     * @param string $name
     * @param \Webservices\ArrayType\StringArray $flags
     * @param string $country
     */
    public function __construct($match_score = null, $compliance_business_id = null, $name = null, \Webservices\ArrayType\StringArray $flags = null, $country = null)
    {
        $this
            ->setMatch_score($match_score)
            ->setCompliance_business_id($compliance_business_id)
            ->setName($name)
            ->setFlags($flags)
            ->setCountry($country);
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
     * @return \Webservices\StructType\ComplianceBusinessSearchReference
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
     * @return \Webservices\StructType\ComplianceBusinessSearchReference
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
     * @return \Webservices\StructType\ComplianceBusinessSearchReference
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
     * @return \Webservices\StructType\ComplianceBusinessSearchReference
     */
    public function setFlags(\Webservices\ArrayType\StringArray $flags = null)
    {
        $this->flags = $flags;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\ComplianceBusinessSearchReference
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceBusinessSearchReference
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
