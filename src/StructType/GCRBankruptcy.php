<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRBankruptcy StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRBankruptcy extends AbstractStructBase
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
     * The date_of_verdict
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_verdict;
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
     * The curators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCuratorArray
     */
    public $curators;
    /**
     * Constructor method for GCRBankruptcy
     * @uses GCRBankruptcy::setOfficial_registration_number()
     * @uses GCRBankruptcy::setCurrently_active()
     * @uses GCRBankruptcy::setDate_of_verdict()
     * @uses GCRBankruptcy::setDefinite_discontinuance_code()
     * @uses GCRBankruptcy::setDefinite_discontinuance_text()
     * @uses GCRBankruptcy::setDefinite_discontinuance_date()
     * @uses GCRBankruptcy::setCurators()
     * @param int $official_registration_number
     * @param bool $currently_active
     * @param string $date_of_verdict
     * @param int $definite_discontinuance_code
     * @param string $definite_discontinuance_text
     * @param string $definite_discontinuance_date
     * @param \Webservices\ArrayType\GCRCuratorArray $curators
     */
    public function __construct($official_registration_number = null, $currently_active = null, $date_of_verdict = null, $definite_discontinuance_code = null, $definite_discontinuance_text = null, $definite_discontinuance_date = null, \Webservices\ArrayType\GCRCuratorArray $curators = null)
    {
        $this
            ->setOfficial_registration_number($official_registration_number)
            ->setCurrently_active($currently_active)
            ->setDate_of_verdict($date_of_verdict)
            ->setDefinite_discontinuance_code($definite_discontinuance_code)
            ->setDefinite_discontinuance_text($definite_discontinuance_text)
            ->setDefinite_discontinuance_date($definite_discontinuance_date)
            ->setCurators($curators);
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
     * @return \Webservices\StructType\GCRBankruptcy
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
     * @return \Webservices\StructType\GCRBankruptcy
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
     * Get date_of_verdict value
     * @return string|null
     */
    public function getDate_of_verdict()
    {
        return $this->date_of_verdict;
    }
    /**
     * Set date_of_verdict value
     * @param string $date_of_verdict
     * @return \Webservices\StructType\GCRBankruptcy
     */
    public function setDate_of_verdict($date_of_verdict = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_verdict) && !is_string($date_of_verdict)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_verdict)), __LINE__);
        }
        $this->date_of_verdict = $date_of_verdict;
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
     * @return \Webservices\StructType\GCRBankruptcy
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
     * @return \Webservices\StructType\GCRBankruptcy
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
     * @return \Webservices\StructType\GCRBankruptcy
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
     * Get curators value
     * @return \Webservices\ArrayType\GCRCuratorArray|null
     */
    public function getCurators()
    {
        return $this->curators;
    }
    /**
     * Set curators value
     * @param \Webservices\ArrayType\GCRCuratorArray $curators
     * @return \Webservices\StructType\GCRBankruptcy
     */
    public function setCurators(\Webservices\ArrayType\GCRCuratorArray $curators = null)
    {
        $this->curators = $curators;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRBankruptcy
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
