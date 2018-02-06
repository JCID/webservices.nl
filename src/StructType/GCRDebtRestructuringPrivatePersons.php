<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRDebtRestructuringPrivatePersons StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRDebtRestructuringPrivatePersons extends AbstractStructBase
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
     * The debt_restructuring_term_in_months
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $debt_restructuring_term_in_months;
    /**
     * The provisional_discontinuance_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $provisional_discontinuance_code;
    /**
     * The provisional_discontinuance_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $provisional_discontinuance_text;
    /**
     * The provisional_discontinuance_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $provisional_discontinuance_date;
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
     * Constructor method for GCRDebtRestructuringPrivatePersons
     * @uses GCRDebtRestructuringPrivatePersons::setOfficial_registration_number()
     * @uses GCRDebtRestructuringPrivatePersons::setCurrently_active()
     * @uses GCRDebtRestructuringPrivatePersons::setProvisional_verdict_date()
     * @uses GCRDebtRestructuringPrivatePersons::setDefinite_verdict_date()
     * @uses GCRDebtRestructuringPrivatePersons::setDebt_restructuring_term_in_months()
     * @uses GCRDebtRestructuringPrivatePersons::setProvisional_discontinuance_code()
     * @uses GCRDebtRestructuringPrivatePersons::setProvisional_discontinuance_text()
     * @uses GCRDebtRestructuringPrivatePersons::setProvisional_discontinuance_date()
     * @uses GCRDebtRestructuringPrivatePersons::setDefinite_discontinuance_code()
     * @uses GCRDebtRestructuringPrivatePersons::setDefinite_discontinuance_text()
     * @uses GCRDebtRestructuringPrivatePersons::setDefinite_discontinuance_date()
     * @uses GCRDebtRestructuringPrivatePersons::setReceivers()
     * @param int $official_registration_number
     * @param bool $currently_active
     * @param string $provisional_verdict_date
     * @param string $definite_verdict_date
     * @param int $debt_restructuring_term_in_months
     * @param int $provisional_discontinuance_code
     * @param string $provisional_discontinuance_text
     * @param string $provisional_discontinuance_date
     * @param int $definite_discontinuance_code
     * @param string $definite_discontinuance_text
     * @param string $definite_discontinuance_date
     * @param \Webservices\ArrayType\GCRReceiverArray $receivers
     */
    public function __construct($official_registration_number = null, $currently_active = null, $provisional_verdict_date = null, $definite_verdict_date = null, $debt_restructuring_term_in_months = null, $provisional_discontinuance_code = null, $provisional_discontinuance_text = null, $provisional_discontinuance_date = null, $definite_discontinuance_code = null, $definite_discontinuance_text = null, $definite_discontinuance_date = null, \Webservices\ArrayType\GCRReceiverArray $receivers = null)
    {
        $this
            ->setOfficial_registration_number($official_registration_number)
            ->setCurrently_active($currently_active)
            ->setProvisional_verdict_date($provisional_verdict_date)
            ->setDefinite_verdict_date($definite_verdict_date)
            ->setDebt_restructuring_term_in_months($debt_restructuring_term_in_months)
            ->setProvisional_discontinuance_code($provisional_discontinuance_code)
            ->setProvisional_discontinuance_text($provisional_discontinuance_text)
            ->setProvisional_discontinuance_date($provisional_discontinuance_date)
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * Get debt_restructuring_term_in_months value
     * @return int|null
     */
    public function getDebt_restructuring_term_in_months()
    {
        return $this->debt_restructuring_term_in_months;
    }
    /**
     * Set debt_restructuring_term_in_months value
     * @param int $debt_restructuring_term_in_months
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
     */
    public function setDebt_restructuring_term_in_months($debt_restructuring_term_in_months = null)
    {
        // validation for constraint: int
        if (!is_null($debt_restructuring_term_in_months) && !is_numeric($debt_restructuring_term_in_months)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($debt_restructuring_term_in_months)), __LINE__);
        }
        $this->debt_restructuring_term_in_months = $debt_restructuring_term_in_months;
        return $this;
    }
    /**
     * Get provisional_discontinuance_code value
     * @return int|null
     */
    public function getProvisional_discontinuance_code()
    {
        return $this->provisional_discontinuance_code;
    }
    /**
     * Set provisional_discontinuance_code value
     * @param int $provisional_discontinuance_code
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
     */
    public function setProvisional_discontinuance_code($provisional_discontinuance_code = null)
    {
        // validation for constraint: int
        if (!is_null($provisional_discontinuance_code) && !is_numeric($provisional_discontinuance_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($provisional_discontinuance_code)), __LINE__);
        }
        $this->provisional_discontinuance_code = $provisional_discontinuance_code;
        return $this;
    }
    /**
     * Get provisional_discontinuance_text value
     * @return string|null
     */
    public function getProvisional_discontinuance_text()
    {
        return $this->provisional_discontinuance_text;
    }
    /**
     * Set provisional_discontinuance_text value
     * @param string $provisional_discontinuance_text
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
     */
    public function setProvisional_discontinuance_text($provisional_discontinuance_text = null)
    {
        // validation for constraint: string
        if (!is_null($provisional_discontinuance_text) && !is_string($provisional_discontinuance_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provisional_discontinuance_text)), __LINE__);
        }
        $this->provisional_discontinuance_text = $provisional_discontinuance_text;
        return $this;
    }
    /**
     * Get provisional_discontinuance_date value
     * @return string|null
     */
    public function getProvisional_discontinuance_date()
    {
        return $this->provisional_discontinuance_date;
    }
    /**
     * Set provisional_discontinuance_date value
     * @param string $provisional_discontinuance_date
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
     */
    public function setProvisional_discontinuance_date($provisional_discontinuance_date = null)
    {
        // validation for constraint: string
        if (!is_null($provisional_discontinuance_date) && !is_string($provisional_discontinuance_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provisional_discontinuance_date)), __LINE__);
        }
        $this->provisional_discontinuance_date = $provisional_discontinuance_date;
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
     * @return \Webservices\StructType\GCRDebtRestructuringPrivatePersons
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
