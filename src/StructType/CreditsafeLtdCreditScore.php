<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeLtdCreditScore StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeLtdCreditScore extends AbstractStructBase
{
    /**
     * The current_credit_rating
     * @var string
     */
    public $current_credit_rating;
    /**
     * The current_rating_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $current_rating_description;
    /**
     * The current_credit_limit
     * @var string
     */
    public $current_credit_limit;
    /**
     * The current_contract_limit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $current_contract_limit;
    /**
     * The previous_credit_limit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_credit_limit;
    /**
     * The previous_credit_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_credit_rating;
    /**
     * The previous_rating_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_rating_description;
    /**
     * The date_of_latest_rating_change
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_latest_rating_change;
    /**
     * Constructor method for CreditsafeLtdCreditScore
     * @uses CreditsafeLtdCreditScore::setCurrent_credit_rating()
     * @uses CreditsafeLtdCreditScore::setCurrent_rating_description()
     * @uses CreditsafeLtdCreditScore::setCurrent_credit_limit()
     * @uses CreditsafeLtdCreditScore::setCurrent_contract_limit()
     * @uses CreditsafeLtdCreditScore::setPrevious_credit_limit()
     * @uses CreditsafeLtdCreditScore::setPrevious_credit_rating()
     * @uses CreditsafeLtdCreditScore::setPrevious_rating_description()
     * @uses CreditsafeLtdCreditScore::setDate_of_latest_rating_change()
     * @param string $current_credit_rating
     * @param string $current_rating_description
     * @param string $current_credit_limit
     * @param float $current_contract_limit
     * @param string $previous_credit_limit
     * @param string $previous_credit_rating
     * @param string $previous_rating_description
     * @param string $date_of_latest_rating_change
     */
    public function __construct($current_credit_rating = null, $current_rating_description = null, $current_credit_limit = null, $current_contract_limit = null, $previous_credit_limit = null, $previous_credit_rating = null, $previous_rating_description = null, $date_of_latest_rating_change = null)
    {
        $this
            ->setCurrent_credit_rating($current_credit_rating)
            ->setCurrent_rating_description($current_rating_description)
            ->setCurrent_credit_limit($current_credit_limit)
            ->setCurrent_contract_limit($current_contract_limit)
            ->setPrevious_credit_limit($previous_credit_limit)
            ->setPrevious_credit_rating($previous_credit_rating)
            ->setPrevious_rating_description($previous_rating_description)
            ->setDate_of_latest_rating_change($date_of_latest_rating_change);
    }
    /**
     * Get current_credit_rating value
     * @return string|null
     */
    public function getCurrent_credit_rating()
    {
        return $this->current_credit_rating;
    }
    /**
     * Set current_credit_rating value
     * @param string $current_credit_rating
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setCurrent_credit_rating($current_credit_rating = null)
    {
        // validation for constraint: string
        if (!is_null($current_credit_rating) && !is_string($current_credit_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($current_credit_rating)), __LINE__);
        }
        $this->current_credit_rating = $current_credit_rating;
        return $this;
    }
    /**
     * Get current_rating_description value
     * @return string|null
     */
    public function getCurrent_rating_description()
    {
        return $this->current_rating_description;
    }
    /**
     * Set current_rating_description value
     * @param string $current_rating_description
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setCurrent_rating_description($current_rating_description = null)
    {
        // validation for constraint: string
        if (!is_null($current_rating_description) && !is_string($current_rating_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($current_rating_description)), __LINE__);
        }
        $this->current_rating_description = $current_rating_description;
        return $this;
    }
    /**
     * Get current_credit_limit value
     * @return string|null
     */
    public function getCurrent_credit_limit()
    {
        return $this->current_credit_limit;
    }
    /**
     * Set current_credit_limit value
     * @param string $current_credit_limit
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setCurrent_credit_limit($current_credit_limit = null)
    {
        // validation for constraint: string
        if (!is_null($current_credit_limit) && !is_string($current_credit_limit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($current_credit_limit)), __LINE__);
        }
        $this->current_credit_limit = $current_credit_limit;
        return $this;
    }
    /**
     * Get current_contract_limit value
     * @return float|null
     */
    public function getCurrent_contract_limit()
    {
        return $this->current_contract_limit;
    }
    /**
     * Set current_contract_limit value
     * @param float $current_contract_limit
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setCurrent_contract_limit($current_contract_limit = null)
    {
        $this->current_contract_limit = $current_contract_limit;
        return $this;
    }
    /**
     * Get previous_credit_limit value
     * @return string|null
     */
    public function getPrevious_credit_limit()
    {
        return $this->previous_credit_limit;
    }
    /**
     * Set previous_credit_limit value
     * @param string $previous_credit_limit
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setPrevious_credit_limit($previous_credit_limit = null)
    {
        // validation for constraint: string
        if (!is_null($previous_credit_limit) && !is_string($previous_credit_limit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_credit_limit)), __LINE__);
        }
        $this->previous_credit_limit = $previous_credit_limit;
        return $this;
    }
    /**
     * Get previous_credit_rating value
     * @return string|null
     */
    public function getPrevious_credit_rating()
    {
        return $this->previous_credit_rating;
    }
    /**
     * Set previous_credit_rating value
     * @param string $previous_credit_rating
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setPrevious_credit_rating($previous_credit_rating = null)
    {
        // validation for constraint: string
        if (!is_null($previous_credit_rating) && !is_string($previous_credit_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_credit_rating)), __LINE__);
        }
        $this->previous_credit_rating = $previous_credit_rating;
        return $this;
    }
    /**
     * Get previous_rating_description value
     * @return string|null
     */
    public function getPrevious_rating_description()
    {
        return $this->previous_rating_description;
    }
    /**
     * Set previous_rating_description value
     * @param string $previous_rating_description
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setPrevious_rating_description($previous_rating_description = null)
    {
        // validation for constraint: string
        if (!is_null($previous_rating_description) && !is_string($previous_rating_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_rating_description)), __LINE__);
        }
        $this->previous_rating_description = $previous_rating_description;
        return $this;
    }
    /**
     * Get date_of_latest_rating_change value
     * @return string|null
     */
    public function getDate_of_latest_rating_change()
    {
        return $this->date_of_latest_rating_change;
    }
    /**
     * Set date_of_latest_rating_change value
     * @param string $date_of_latest_rating_change
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
     */
    public function setDate_of_latest_rating_change($date_of_latest_rating_change = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_latest_rating_change) && !is_string($date_of_latest_rating_change)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_latest_rating_change)), __LINE__);
        }
        $this->date_of_latest_rating_change = $date_of_latest_rating_change;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeLtdCreditScore
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
