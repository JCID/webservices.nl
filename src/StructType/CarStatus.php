<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarStatus StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarStatus extends AbstractStructBase
{
    /**
     * The insured
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $insured;
    /**
     * The awaiting_inspection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $awaiting_inspection;
    /**
     * The missing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $missing;
    /**
     * The stolen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $stolen;
    /**
     * Constructor method for CarStatus
     * @uses CarStatus::setInsured()
     * @uses CarStatus::setAwaiting_inspection()
     * @uses CarStatus::setMissing()
     * @uses CarStatus::setStolen()
     * @param bool $insured
     * @param bool $awaiting_inspection
     * @param bool $missing
     * @param bool $stolen
     */
    public function __construct($insured = null, $awaiting_inspection = null, $missing = null, $stolen = null)
    {
        $this
            ->setInsured($insured)
            ->setAwaiting_inspection($awaiting_inspection)
            ->setMissing($missing)
            ->setStolen($stolen);
    }
    /**
     * Get insured value
     * @return bool|null
     */
    public function getInsured()
    {
        return $this->insured;
    }
    /**
     * Set insured value
     * @param bool $insured
     * @return \Webservices\StructType\CarStatus
     */
    public function setInsured($insured = null)
    {
        // validation for constraint: boolean
        if (!is_null($insured) && !is_bool($insured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insured)), __LINE__);
        }
        $this->insured = $insured;
        return $this;
    }
    /**
     * Get awaiting_inspection value
     * @return bool|null
     */
    public function getAwaiting_inspection()
    {
        return $this->awaiting_inspection;
    }
    /**
     * Set awaiting_inspection value
     * @param bool $awaiting_inspection
     * @return \Webservices\StructType\CarStatus
     */
    public function setAwaiting_inspection($awaiting_inspection = null)
    {
        // validation for constraint: boolean
        if (!is_null($awaiting_inspection) && !is_bool($awaiting_inspection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($awaiting_inspection)), __LINE__);
        }
        $this->awaiting_inspection = $awaiting_inspection;
        return $this;
    }
    /**
     * Get missing value
     * @return bool|null
     */
    public function getMissing()
    {
        return $this->missing;
    }
    /**
     * Set missing value
     * @param bool $missing
     * @return \Webservices\StructType\CarStatus
     */
    public function setMissing($missing = null)
    {
        // validation for constraint: boolean
        if (!is_null($missing) && !is_bool($missing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($missing)), __LINE__);
        }
        $this->missing = $missing;
        return $this;
    }
    /**
     * Get stolen value
     * @return bool|null
     */
    public function getStolen()
    {
        return $this->stolen;
    }
    /**
     * Set stolen value
     * @param bool $stolen
     * @return \Webservices\StructType\CarStatus
     */
    public function setStolen($stolen = null)
    {
        // validation for constraint: boolean
        if (!is_null($stolen) && !is_bool($stolen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stolen)), __LINE__);
        }
        $this->stolen = $stolen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarStatus
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
