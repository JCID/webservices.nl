<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBScoreGroup StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBScoreGroup extends AbstractStructBase
{
    /**
     * The score
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $score;
    /**
     * The score_commentaries
     * @var \Webservices\ArrayType\DNBCommentaryArray
     */
    public $score_commentaries;
    /**
     * The score_class
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $score_class;
    /**
     * The national_percentile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $national_percentile;
    /**
     * The score_override_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $score_override_code;
    /**
     * The incidence_of_default
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $incidence_of_default;
    /**
     * The score_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $score_date;
    /**
     * The industry_norm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $industry_norm;
    /**
     * The industry_incidence_of_default
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $industry_incidence_of_default;
    /**
     * The industry_percentile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $industry_percentile;
    /**
     * The unnormalized_score
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $unnormalized_score;
    /**
     * The algorithm_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $algorithm_id;
    /**
     * Constructor method for DNBScoreGroup
     * @uses DNBScoreGroup::setScore()
     * @uses DNBScoreGroup::setScore_commentaries()
     * @uses DNBScoreGroup::setScore_class()
     * @uses DNBScoreGroup::setNational_percentile()
     * @uses DNBScoreGroup::setScore_override_code()
     * @uses DNBScoreGroup::setIncidence_of_default()
     * @uses DNBScoreGroup::setScore_date()
     * @uses DNBScoreGroup::setIndustry_norm()
     * @uses DNBScoreGroup::setIndustry_incidence_of_default()
     * @uses DNBScoreGroup::setIndustry_percentile()
     * @uses DNBScoreGroup::setUnnormalized_score()
     * @uses DNBScoreGroup::setAlgorithm_id()
     * @param int $score
     * @param \Webservices\ArrayType\DNBCommentaryArray $score_commentaries
     * @param bool $score_class
     * @param int $national_percentile
     * @param string $score_override_code
     * @param int $incidence_of_default
     * @param string $score_date
     * @param string $industry_norm
     * @param string $industry_incidence_of_default
     * @param int $industry_percentile
     * @param string $unnormalized_score
     * @param string $algorithm_id
     */
    public function __construct($score = null, \Webservices\ArrayType\DNBCommentaryArray $score_commentaries = null, $score_class = null, $national_percentile = null, $score_override_code = null, $incidence_of_default = null, $score_date = null, $industry_norm = null, $industry_incidence_of_default = null, $industry_percentile = null, $unnormalized_score = null, $algorithm_id = null)
    {
        $this
            ->setScore($score)
            ->setScore_commentaries($score_commentaries)
            ->setScore_class($score_class)
            ->setNational_percentile($national_percentile)
            ->setScore_override_code($score_override_code)
            ->setIncidence_of_default($incidence_of_default)
            ->setScore_date($score_date)
            ->setIndustry_norm($industry_norm)
            ->setIndustry_incidence_of_default($industry_incidence_of_default)
            ->setIndustry_percentile($industry_percentile)
            ->setUnnormalized_score($unnormalized_score)
            ->setAlgorithm_id($algorithm_id);
    }
    /**
     * Get score value
     * @return int|null
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param int $score
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setScore($score = null)
    {
        // validation for constraint: int
        if (!is_null($score) && !is_numeric($score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($score)), __LINE__);
        }
        $this->score = $score;
        return $this;
    }
    /**
     * Get score_commentaries value
     * @return \Webservices\ArrayType\DNBCommentaryArray|null
     */
    public function getScore_commentaries()
    {
        return $this->score_commentaries;
    }
    /**
     * Set score_commentaries value
     * @param \Webservices\ArrayType\DNBCommentaryArray $score_commentaries
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setScore_commentaries(\Webservices\ArrayType\DNBCommentaryArray $score_commentaries = null)
    {
        $this->score_commentaries = $score_commentaries;
        return $this;
    }
    /**
     * Get score_class value
     * @return bool|null
     */
    public function getScore_class()
    {
        return $this->score_class;
    }
    /**
     * Set score_class value
     * @param bool $score_class
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setScore_class($score_class = null)
    {
        // validation for constraint: boolean
        if (!is_null($score_class) && !is_bool($score_class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($score_class)), __LINE__);
        }
        $this->score_class = $score_class;
        return $this;
    }
    /**
     * Get national_percentile value
     * @return int|null
     */
    public function getNational_percentile()
    {
        return $this->national_percentile;
    }
    /**
     * Set national_percentile value
     * @param int $national_percentile
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setNational_percentile($national_percentile = null)
    {
        // validation for constraint: int
        if (!is_null($national_percentile) && !is_numeric($national_percentile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($national_percentile)), __LINE__);
        }
        $this->national_percentile = $national_percentile;
        return $this;
    }
    /**
     * Get score_override_code value
     * @return string|null
     */
    public function getScore_override_code()
    {
        return $this->score_override_code;
    }
    /**
     * Set score_override_code value
     * @param string $score_override_code
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setScore_override_code($score_override_code = null)
    {
        // validation for constraint: string
        if (!is_null($score_override_code) && !is_string($score_override_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($score_override_code)), __LINE__);
        }
        $this->score_override_code = $score_override_code;
        return $this;
    }
    /**
     * Get incidence_of_default value
     * @return int|null
     */
    public function getIncidence_of_default()
    {
        return $this->incidence_of_default;
    }
    /**
     * Set incidence_of_default value
     * @param int $incidence_of_default
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setIncidence_of_default($incidence_of_default = null)
    {
        // validation for constraint: int
        if (!is_null($incidence_of_default) && !is_numeric($incidence_of_default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($incidence_of_default)), __LINE__);
        }
        $this->incidence_of_default = $incidence_of_default;
        return $this;
    }
    /**
     * Get score_date value
     * @return string|null
     */
    public function getScore_date()
    {
        return $this->score_date;
    }
    /**
     * Set score_date value
     * @param string $score_date
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setScore_date($score_date = null)
    {
        // validation for constraint: string
        if (!is_null($score_date) && !is_string($score_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($score_date)), __LINE__);
        }
        $this->score_date = $score_date;
        return $this;
    }
    /**
     * Get industry_norm value
     * @return string|null
     */
    public function getIndustry_norm()
    {
        return $this->industry_norm;
    }
    /**
     * Set industry_norm value
     * @param string $industry_norm
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setIndustry_norm($industry_norm = null)
    {
        // validation for constraint: string
        if (!is_null($industry_norm) && !is_string($industry_norm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($industry_norm)), __LINE__);
        }
        $this->industry_norm = $industry_norm;
        return $this;
    }
    /**
     * Get industry_incidence_of_default value
     * @return string|null
     */
    public function getIndustry_incidence_of_default()
    {
        return $this->industry_incidence_of_default;
    }
    /**
     * Set industry_incidence_of_default value
     * @param string $industry_incidence_of_default
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setIndustry_incidence_of_default($industry_incidence_of_default = null)
    {
        // validation for constraint: string
        if (!is_null($industry_incidence_of_default) && !is_string($industry_incidence_of_default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($industry_incidence_of_default)), __LINE__);
        }
        $this->industry_incidence_of_default = $industry_incidence_of_default;
        return $this;
    }
    /**
     * Get industry_percentile value
     * @return int|null
     */
    public function getIndustry_percentile()
    {
        return $this->industry_percentile;
    }
    /**
     * Set industry_percentile value
     * @param int $industry_percentile
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setIndustry_percentile($industry_percentile = null)
    {
        // validation for constraint: int
        if (!is_null($industry_percentile) && !is_numeric($industry_percentile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($industry_percentile)), __LINE__);
        }
        $this->industry_percentile = $industry_percentile;
        return $this;
    }
    /**
     * Get unnormalized_score value
     * @return string|null
     */
    public function getUnnormalized_score()
    {
        return $this->unnormalized_score;
    }
    /**
     * Set unnormalized_score value
     * @param string $unnormalized_score
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setUnnormalized_score($unnormalized_score = null)
    {
        // validation for constraint: string
        if (!is_null($unnormalized_score) && !is_string($unnormalized_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unnormalized_score)), __LINE__);
        }
        $this->unnormalized_score = $unnormalized_score;
        return $this;
    }
    /**
     * Get algorithm_id value
     * @return string|null
     */
    public function getAlgorithm_id()
    {
        return $this->algorithm_id;
    }
    /**
     * Set algorithm_id value
     * @param string $algorithm_id
     * @return \Webservices\StructType\DNBScoreGroup
     */
    public function setAlgorithm_id($algorithm_id = null)
    {
        // validation for constraint: string
        if (!is_null($algorithm_id) && !is_string($algorithm_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($algorithm_id)), __LINE__);
        }
        $this->algorithm_id = $algorithm_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DNBScoreGroup
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
