<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EDRScore StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class EDRScore extends AbstractStructBase
{
    /**
     * The person_score
     * @var int
     */
    public $person_score;
    /**
     * The region_score
     * @var int
     */
    public $region_score;
    /**
     * The edr_region_score
     * @var int
     */
    public $edr_region_score;
    /**
     * The weighted_score
     * @var int
     */
    public $weighted_score;
    /**
     * Constructor method for EDRScore
     * @uses EDRScore::setPerson_score()
     * @uses EDRScore::setRegion_score()
     * @uses EDRScore::setEdr_region_score()
     * @uses EDRScore::setWeighted_score()
     * @param int $person_score
     * @param int $region_score
     * @param int $edr_region_score
     * @param int $weighted_score
     */
    public function __construct($person_score = null, $region_score = null, $edr_region_score = null, $weighted_score = null)
    {
        $this
            ->setPerson_score($person_score)
            ->setRegion_score($region_score)
            ->setEdr_region_score($edr_region_score)
            ->setWeighted_score($weighted_score);
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
     * @return \Webservices\StructType\EDRScore
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
     * Get region_score value
     * @return int|null
     */
    public function getRegion_score()
    {
        return $this->region_score;
    }
    /**
     * Set region_score value
     * @param int $region_score
     * @return \Webservices\StructType\EDRScore
     */
    public function setRegion_score($region_score = null)
    {
        // validation for constraint: int
        if (!is_null($region_score) && !is_numeric($region_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($region_score)), __LINE__);
        }
        $this->region_score = $region_score;
        return $this;
    }
    /**
     * Get edr_region_score value
     * @return int|null
     */
    public function getEdr_region_score()
    {
        return $this->edr_region_score;
    }
    /**
     * Set edr_region_score value
     * @param int $edr_region_score
     * @return \Webservices\StructType\EDRScore
     */
    public function setEdr_region_score($edr_region_score = null)
    {
        // validation for constraint: int
        if (!is_null($edr_region_score) && !is_numeric($edr_region_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($edr_region_score)), __LINE__);
        }
        $this->edr_region_score = $edr_region_score;
        return $this;
    }
    /**
     * Get weighted_score value
     * @return int|null
     */
    public function getWeighted_score()
    {
        return $this->weighted_score;
    }
    /**
     * Set weighted_score value
     * @param int $weighted_score
     * @return \Webservices\StructType\EDRScore
     */
    public function setWeighted_score($weighted_score = null)
    {
        // validation for constraint: int
        if (!is_null($weighted_score) && !is_numeric($weighted_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weighted_score)), __LINE__);
        }
        $this->weighted_score = $weighted_score;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\EDRScore
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
