<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskResult extends AbstractStructBase
{
    /**
     * The person_score
     * @var int
     */
    public $person_score;
    /**
     * The address_score
     * @var int
     */
    public $address_score;
    /**
     * The postcode_score
     * @var int
     */
    public $postcode_score;
    /**
     * Constructor method for RiskResult
     * @uses RiskResult::setPerson_score()
     * @uses RiskResult::setAddress_score()
     * @uses RiskResult::setPostcode_score()
     * @param int $person_score
     * @param int $address_score
     * @param int $postcode_score
     */
    public function __construct($person_score = null, $address_score = null, $postcode_score = null)
    {
        $this
            ->setPerson_score($person_score)
            ->setAddress_score($address_score)
            ->setPostcode_score($postcode_score);
    }
    /**
     * Get person_score value
     * @return int|null
     */
    public function getPerson_score()
    {
        return $this->person_score;
    }
    /**
     * Set person_score value
     * @param int $person_score
     * @return \Webservices\StructType\RiskResult
     */
    public function setPerson_score($person_score = null)
    {
        // validation for constraint: int
        if (!is_null($person_score) && !is_numeric($person_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($person_score)), __LINE__);
        }
        $this->person_score = $person_score;
        return $this;
    }
    /**
     * Get address_score value
     * @return int|null
     */
    public function getAddress_score()
    {
        return $this->address_score;
    }
    /**
     * Set address_score value
     * @param int $address_score
     * @return \Webservices\StructType\RiskResult
     */
    public function setAddress_score($address_score = null)
    {
        // validation for constraint: int
        if (!is_null($address_score) && !is_numeric($address_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($address_score)), __LINE__);
        }
        $this->address_score = $address_score;
        return $this;
    }
    /**
     * Get postcode_score value
     * @return int|null
     */
    public function getPostcode_score()
    {
        return $this->postcode_score;
    }
    /**
     * Set postcode_score value
     * @param int $postcode_score
     * @return \Webservices\StructType\RiskResult
     */
    public function setPostcode_score($postcode_score = null)
    {
        // validation for constraint: int
        if (!is_null($postcode_score) && !is_numeric($postcode_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($postcode_score)), __LINE__);
        }
        $this->postcode_score = $postcode_score;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskResult
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
