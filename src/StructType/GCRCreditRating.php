<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCreditRating StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCreditRating extends AbstractStructBase
{
    /**
     * The y_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $y_rating;
    /**
     * The pd_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pd_rating;
    /**
     * The pd_percentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $pd_percentage;
    /**
     * The erc_score
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $erc_score;
    /**
     * The credit_flag_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_flag_code;
    /**
     * The credit_flag_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_flag_text;
    /**
     * The ratings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRRatingArray
     */
    public $ratings;
    /**
     * The y_rating_history
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRRatingHistoryArray
     */
    public $y_rating_history;
    /**
     * The pd_rating_history
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRRatingHistoryArray
     */
    public $pd_rating_history;
    /**
     * The pd_percentage_history
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRPercentageHistoryArray
     */
    public $pd_percentage_history;
    /**
     * Constructor method for GCRCreditRating
     * @uses GCRCreditRating::setY_rating()
     * @uses GCRCreditRating::setPd_rating()
     * @uses GCRCreditRating::setPd_percentage()
     * @uses GCRCreditRating::setErc_score()
     * @uses GCRCreditRating::setCredit_flag_code()
     * @uses GCRCreditRating::setCredit_flag_text()
     * @uses GCRCreditRating::setRatings()
     * @uses GCRCreditRating::setY_rating_history()
     * @uses GCRCreditRating::setPd_rating_history()
     * @uses GCRCreditRating::setPd_percentage_history()
     * @param string $y_rating
     * @param string $pd_rating
     * @param float $pd_percentage
     * @param string $erc_score
     * @param string $credit_flag_code
     * @param string $credit_flag_text
     * @param \Webservices\ArrayType\GCRRatingArray $ratings
     * @param \Webservices\ArrayType\GCRRatingHistoryArray $y_rating_history
     * @param \Webservices\ArrayType\GCRRatingHistoryArray $pd_rating_history
     * @param \Webservices\ArrayType\GCRPercentageHistoryArray $pd_percentage_history
     */
    public function __construct($y_rating = null, $pd_rating = null, $pd_percentage = null, $erc_score = null, $credit_flag_code = null, $credit_flag_text = null, \Webservices\ArrayType\GCRRatingArray $ratings = null, \Webservices\ArrayType\GCRRatingHistoryArray $y_rating_history = null, \Webservices\ArrayType\GCRRatingHistoryArray $pd_rating_history = null, \Webservices\ArrayType\GCRPercentageHistoryArray $pd_percentage_history = null)
    {
        $this
            ->setY_rating($y_rating)
            ->setPd_rating($pd_rating)
            ->setPd_percentage($pd_percentage)
            ->setErc_score($erc_score)
            ->setCredit_flag_code($credit_flag_code)
            ->setCredit_flag_text($credit_flag_text)
            ->setRatings($ratings)
            ->setY_rating_history($y_rating_history)
            ->setPd_rating_history($pd_rating_history)
            ->setPd_percentage_history($pd_percentage_history);
    }
    /**
     * Get y_rating value
     * @return string|null
     */
    public function getY_rating()
    {
        return $this->y_rating;
    }
    /**
     * Set y_rating value
     * @param string $y_rating
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setY_rating($y_rating = null)
    {
        // validation for constraint: string
        if (!is_null($y_rating) && !is_string($y_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($y_rating)), __LINE__);
        }
        $this->y_rating = $y_rating;
        return $this;
    }
    /**
     * Get pd_rating value
     * @return string|null
     */
    public function getPd_rating()
    {
        return $this->pd_rating;
    }
    /**
     * Set pd_rating value
     * @param string $pd_rating
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setPd_rating($pd_rating = null)
    {
        // validation for constraint: string
        if (!is_null($pd_rating) && !is_string($pd_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pd_rating)), __LINE__);
        }
        $this->pd_rating = $pd_rating;
        return $this;
    }
    /**
     * Get pd_percentage value
     * @return float|null
     */
    public function getPd_percentage()
    {
        return $this->pd_percentage;
    }
    /**
     * Set pd_percentage value
     * @param float $pd_percentage
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setPd_percentage($pd_percentage = null)
    {
        $this->pd_percentage = $pd_percentage;
        return $this;
    }
    /**
     * Get erc_score value
     * @return string|null
     */
    public function getErc_score()
    {
        return $this->erc_score;
    }
    /**
     * Set erc_score value
     * @param string $erc_score
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setErc_score($erc_score = null)
    {
        // validation for constraint: string
        if (!is_null($erc_score) && !is_string($erc_score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($erc_score)), __LINE__);
        }
        $this->erc_score = $erc_score;
        return $this;
    }
    /**
     * Get credit_flag_code value
     * @return string|null
     */
    public function getCredit_flag_code()
    {
        return $this->credit_flag_code;
    }
    /**
     * Set credit_flag_code value
     * @param string $credit_flag_code
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setCredit_flag_code($credit_flag_code = null)
    {
        // validation for constraint: string
        if (!is_null($credit_flag_code) && !is_string($credit_flag_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_flag_code)), __LINE__);
        }
        $this->credit_flag_code = $credit_flag_code;
        return $this;
    }
    /**
     * Get credit_flag_text value
     * @return string|null
     */
    public function getCredit_flag_text()
    {
        return $this->credit_flag_text;
    }
    /**
     * Set credit_flag_text value
     * @param string $credit_flag_text
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setCredit_flag_text($credit_flag_text = null)
    {
        // validation for constraint: string
        if (!is_null($credit_flag_text) && !is_string($credit_flag_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_flag_text)), __LINE__);
        }
        $this->credit_flag_text = $credit_flag_text;
        return $this;
    }
    /**
     * Get ratings value
     * @return \Webservices\ArrayType\GCRRatingArray|null
     */
    public function getRatings()
    {
        return $this->ratings;
    }
    /**
     * Set ratings value
     * @param \Webservices\ArrayType\GCRRatingArray $ratings
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setRatings(\Webservices\ArrayType\GCRRatingArray $ratings = null)
    {
        $this->ratings = $ratings;
        return $this;
    }
    /**
     * Get y_rating_history value
     * @return \Webservices\ArrayType\GCRRatingHistoryArray|null
     */
    public function getY_rating_history()
    {
        return $this->y_rating_history;
    }
    /**
     * Set y_rating_history value
     * @param \Webservices\ArrayType\GCRRatingHistoryArray $y_rating_history
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setY_rating_history(\Webservices\ArrayType\GCRRatingHistoryArray $y_rating_history = null)
    {
        $this->y_rating_history = $y_rating_history;
        return $this;
    }
    /**
     * Get pd_rating_history value
     * @return \Webservices\ArrayType\GCRRatingHistoryArray|null
     */
    public function getPd_rating_history()
    {
        return $this->pd_rating_history;
    }
    /**
     * Set pd_rating_history value
     * @param \Webservices\ArrayType\GCRRatingHistoryArray $pd_rating_history
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setPd_rating_history(\Webservices\ArrayType\GCRRatingHistoryArray $pd_rating_history = null)
    {
        $this->pd_rating_history = $pd_rating_history;
        return $this;
    }
    /**
     * Get pd_percentage_history value
     * @return \Webservices\ArrayType\GCRPercentageHistoryArray|null
     */
    public function getPd_percentage_history()
    {
        return $this->pd_percentage_history;
    }
    /**
     * Set pd_percentage_history value
     * @param \Webservices\ArrayType\GCRPercentageHistoryArray $pd_percentage_history
     * @return \Webservices\StructType\GCRCreditRating
     */
    public function setPd_percentage_history(\Webservices\ArrayType\GCRPercentageHistoryArray $pd_percentage_history = null)
    {
        $this->pd_percentage_history = $pd_percentage_history;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCreditRating
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
