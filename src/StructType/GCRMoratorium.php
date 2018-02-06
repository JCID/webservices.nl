<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRMoratorium StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRMoratorium extends AbstractStructBase
{
    /**
     * The official_registration_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $official_registration_number;
    /**
     * The currently_active
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $currently_active;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The provisional_verdict_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $provisional_verdict_date;
    /**
     * The definite_verdict_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $definite_verdict_date;
    /**
     * The moratorium_term_in_months
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $moratorium_term_in_months;
    /**
     * The prolongation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prolongation_date;
    /**
     * The prolongation_in_months
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $prolongation_in_months;
    /**
     * The vote_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $vote_code;
    /**
     * The vote_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vote_text;
    /**
     * The vote_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vote_date;
    /**
     * The definite_discontinuance_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $definite_discontinuance_code;
    /**
     * The definite_discontinuance_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $definite_discontinuance_text;
    /**
     * The definite_discontinuance_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $definite_discontinuance_date;
    /**
     * The receivers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRReceiverArray
     */
    public $receivers;
    /**
     * Constructor method for GCRMoratorium
     * @uses GCRMoratorium::setOfficial_registration_number()
     * @uses GCRMoratorium::setCurrently_active()
     * @uses GCRMoratorium::setDate_from()
     * @uses GCRMoratorium::setProvisional_verdict_date()
     * @uses GCRMoratorium::setDefinite_verdict_date()
     * @uses GCRMoratorium::setMoratorium_term_in_months()
     * @uses GCRMoratorium::setProlongation_date()
     * @uses GCRMoratorium::setProlongation_in_months()
     * @uses GCRMoratorium::setVote_code()
     * @uses GCRMoratorium::setVote_text()
     * @uses GCRMoratorium::setVote_date()
     * @uses GCRMoratorium::setDefinite_discontinuance_code()
     * @uses GCRMoratorium::setDefinite_discontinuance_text()
     * @uses GCRMoratorium::setDefinite_discontinuance_date()
     * @uses GCRMoratorium::setReceivers()
     * @param int $official_registration_number
     * @param bool $currently_active
     * @param string $date_from
     * @param string $provisional_verdict_date
     * @param string $definite_verdict_date
     * @param int $moratorium_term_in_months
     * @param string $prolongation_date
     * @param int $prolongation_in_months
     * @param int $vote_code
     * @param string $vote_text
     * @param string $vote_date
     * @param int $definite_discontinuance_code
     * @param string $definite_discontinuance_text
     * @param string $definite_discontinuance_date
     * @param \Webservices\ArrayType\GCRReceiverArray $receivers
     */
    public function __construct($official_registration_number = null, $currently_active = null, $date_from = null, $provisional_verdict_date = null, $definite_verdict_date = null, $moratorium_term_in_months = null, $prolongation_date = null, $prolongation_in_months = null, $vote_code = null, $vote_text = null, $vote_date = null, $definite_discontinuance_code = null, $definite_discontinuance_text = null, $definite_discontinuance_date = null, \Webservices\ArrayType\GCRReceiverArray $receivers = null)
    {
        $this
            ->setOfficial_registration_number($official_registration_number)
            ->setCurrently_active($currently_active)
            ->setDate_from($date_from)
            ->setProvisional_verdict_date($provisional_verdict_date)
            ->setDefinite_verdict_date($definite_verdict_date)
            ->setMoratorium_term_in_months($moratorium_term_in_months)
            ->setProlongation_date($prolongation_date)
            ->setProlongation_in_months($prolongation_in_months)
            ->setVote_code($vote_code)
            ->setVote_text($vote_text)
            ->setVote_date($vote_date)
            ->setDefinite_discontinuance_code($definite_discontinuance_code)
            ->setDefinite_discontinuance_text($definite_discontinuance_text)
            ->setDefinite_discontinuance_date($definite_discontinuance_date)
            ->setReceivers($receivers);
    }
    /**
     * Get official_registration_number value
     * @return int|null
     */
    public function getOfficial_registration_number()
    {
        return $this->official_registration_number;
    }
    /**
     * Set official_registration_number value
     * @param int $official_registration_number
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setOfficial_registration_number($official_registration_number = null)
    {
        // validation for constraint: int
        if (!is_null($official_registration_number) && !is_numeric($official_registration_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($official_registration_number)), __LINE__);
        }
        $this->official_registration_number = $official_registration_number;
        return $this;
    }
    /**
     * Get currently_active value
     * @return bool|null
     */
    public function getCurrently_active()
    {
        return $this->currently_active;
    }
    /**
     * Set currently_active value
     * @param bool $currently_active
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setCurrently_active($currently_active = null)
    {
        // validation for constraint: boolean
        if (!is_null($currently_active) && !is_bool($currently_active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($currently_active)), __LINE__);
        }
        $this->currently_active = $currently_active;
        return $this;
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Get provisional_verdict_date value
     * @return string|null
     */
    public function getProvisional_verdict_date()
    {
        return $this->provisional_verdict_date;
    }
    /**
     * Set provisional_verdict_date value
     * @param string $provisional_verdict_date
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setProvisional_verdict_date($provisional_verdict_date = null)
    {
        // validation for constraint: string
        if (!is_null($provisional_verdict_date) && !is_string($provisional_verdict_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provisional_verdict_date)), __LINE__);
        }
        $this->provisional_verdict_date = $provisional_verdict_date;
        return $this;
    }
    /**
     * Get definite_verdict_date value
     * @return string|null
     */
    public function getDefinite_verdict_date()
    {
        return $this->definite_verdict_date;
    }
    /**
     * Set definite_verdict_date value
     * @param string $definite_verdict_date
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setDefinite_verdict_date($definite_verdict_date = null)
    {
        // validation for constraint: string
        if (!is_null($definite_verdict_date) && !is_string($definite_verdict_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($definite_verdict_date)), __LINE__);
        }
        $this->definite_verdict_date = $definite_verdict_date;
        return $this;
    }
    /**
     * Get moratorium_term_in_months value
     * @return int|null
     */
    public function getMoratorium_term_in_months()
    {
        return $this->moratorium_term_in_months;
    }
    /**
     * Set moratorium_term_in_months value
     * @param int $moratorium_term_in_months
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setMoratorium_term_in_months($moratorium_term_in_months = null)
    {
        // validation for constraint: int
        if (!is_null($moratorium_term_in_months) && !is_numeric($moratorium_term_in_months)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($moratorium_term_in_months)), __LINE__);
        }
        $this->moratorium_term_in_months = $moratorium_term_in_months;
        return $this;
    }
    /**
     * Get prolongation_date value
     * @return string|null
     */
    public function getProlongation_date()
    {
        return $this->prolongation_date;
    }
    /**
     * Set prolongation_date value
     * @param string $prolongation_date
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setProlongation_date($prolongation_date = null)
    {
        // validation for constraint: string
        if (!is_null($prolongation_date) && !is_string($prolongation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prolongation_date)), __LINE__);
        }
        $this->prolongation_date = $prolongation_date;
        return $this;
    }
    /**
     * Get prolongation_in_months value
     * @return int|null
     */
    public function getProlongation_in_months()
    {
        return $this->prolongation_in_months;
    }
    /**
     * Set prolongation_in_months value
     * @param int $prolongation_in_months
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setProlongation_in_months($prolongation_in_months = null)
    {
        // validation for constraint: int
        if (!is_null($prolongation_in_months) && !is_numeric($prolongation_in_months)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($prolongation_in_months)), __LINE__);
        }
        $this->prolongation_in_months = $prolongation_in_months;
        return $this;
    }
    /**
     * Get vote_code value
     * @return int|null
     */
    public function getVote_code()
    {
        return $this->vote_code;
    }
    /**
     * Set vote_code value
     * @param int $vote_code
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setVote_code($vote_code = null)
    {
        // validation for constraint: int
        if (!is_null($vote_code) && !is_numeric($vote_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vote_code)), __LINE__);
        }
        $this->vote_code = $vote_code;
        return $this;
    }
    /**
     * Get vote_text value
     * @return string|null
     */
    public function getVote_text()
    {
        return $this->vote_text;
    }
    /**
     * Set vote_text value
     * @param string $vote_text
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setVote_text($vote_text = null)
    {
        // validation for constraint: string
        if (!is_null($vote_text) && !is_string($vote_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vote_text)), __LINE__);
        }
        $this->vote_text = $vote_text;
        return $this;
    }
    /**
     * Get vote_date value
     * @return string|null
     */
    public function getVote_date()
    {
        return $this->vote_date;
    }
    /**
     * Set vote_date value
     * @param string $vote_date
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setVote_date($vote_date = null)
    {
        // validation for constraint: string
        if (!is_null($vote_date) && !is_string($vote_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vote_date)), __LINE__);
        }
        $this->vote_date = $vote_date;
        return $this;
    }
    /**
     * Get definite_discontinuance_code value
     * @return int|null
     */
    public function getDefinite_discontinuance_code()
    {
        return $this->definite_discontinuance_code;
    }
    /**
     * Set definite_discontinuance_code value
     * @param int $definite_discontinuance_code
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setDefinite_discontinuance_code($definite_discontinuance_code = null)
    {
        // validation for constraint: int
        if (!is_null($definite_discontinuance_code) && !is_numeric($definite_discontinuance_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($definite_discontinuance_code)), __LINE__);
        }
        $this->definite_discontinuance_code = $definite_discontinuance_code;
        return $this;
    }
    /**
     * Get definite_discontinuance_text value
     * @return string|null
     */
    public function getDefinite_discontinuance_text()
    {
        return $this->definite_discontinuance_text;
    }
    /**
     * Set definite_discontinuance_text value
     * @param string $definite_discontinuance_text
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setDefinite_discontinuance_text($definite_discontinuance_text = null)
    {
        // validation for constraint: string
        if (!is_null($definite_discontinuance_text) && !is_string($definite_discontinuance_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($definite_discontinuance_text)), __LINE__);
        }
        $this->definite_discontinuance_text = $definite_discontinuance_text;
        return $this;
    }
    /**
     * Get definite_discontinuance_date value
     * @return string|null
     */
    public function getDefinite_discontinuance_date()
    {
        return $this->definite_discontinuance_date;
    }
    /**
     * Set definite_discontinuance_date value
     * @param string $definite_discontinuance_date
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setDefinite_discontinuance_date($definite_discontinuance_date = null)
    {
        // validation for constraint: string
        if (!is_null($definite_discontinuance_date) && !is_string($definite_discontinuance_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($definite_discontinuance_date)), __LINE__);
        }
        $this->definite_discontinuance_date = $definite_discontinuance_date;
        return $this;
    }
    /**
     * Get receivers value
     * @return \Webservices\ArrayType\GCRReceiverArray|null
     */
    public function getReceivers()
    {
        return $this->receivers;
    }
    /**
     * Set receivers value
     * @param \Webservices\ArrayType\GCRReceiverArray $receivers
     * @return \Webservices\StructType\GCRMoratorium
     */
    public function setReceivers(\Webservices\ArrayType\GCRReceiverArray $receivers = null)
    {
        $this->receivers = $receivers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRMoratorium
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
