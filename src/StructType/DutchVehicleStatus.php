<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleStatus StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleStatus extends AbstractStructBase
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
     * The missed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $missed;
    /**
     * The stolen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $stolen;
    /**
     * The exported
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $exported;
    /**
     * The suspended
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $suspended;
    /**
     * Constructor method for DutchVehicleStatus
     * @uses DutchVehicleStatus::setInsured()
     * @uses DutchVehicleStatus::setAwaiting_inspection()
     * @uses DutchVehicleStatus::setMissed()
     * @uses DutchVehicleStatus::setStolen()
     * @uses DutchVehicleStatus::setExported()
     * @uses DutchVehicleStatus::setSuspended()
     * @param bool $insured
     * @param bool $awaiting_inspection
     * @param bool $missed
     * @param bool $stolen
     * @param bool $exported
     * @param bool $suspended
     */
    public function __construct($insured = null, $awaiting_inspection = null, $missed = null, $stolen = null, $exported = null, $suspended = null)
    {
        $this
            ->setInsured($insured)
            ->setAwaiting_inspection($awaiting_inspection)
            ->setMissed($missed)
            ->setStolen($stolen)
            ->setExported($exported)
            ->setSuspended($suspended);
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
     * @return \Webservices\StructType\DutchVehicleStatus
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
     * @return \Webservices\StructType\DutchVehicleStatus
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
     * Get missed value
     * @return bool|null
     */
    public function getMissed()
    {
        return $this->missed;
    }
    /**
     * Set missed value
     * @param bool $missed
     * @return \Webservices\StructType\DutchVehicleStatus
     */
    public function setMissed($missed = null)
    {
        // validation for constraint: boolean
        if (!is_null($missed) && !is_bool($missed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($missed)), __LINE__);
        }
        $this->missed = $missed;
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
     * @return \Webservices\StructType\DutchVehicleStatus
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
     * Get exported value
     * @return bool|null
     */
    public function getExported()
    {
        return $this->exported;
    }
    /**
     * Set exported value
     * @param bool $exported
     * @return \Webservices\StructType\DutchVehicleStatus
     */
    public function setExported($exported = null)
    {
        // validation for constraint: boolean
        if (!is_null($exported) && !is_bool($exported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exported)), __LINE__);
        }
        $this->exported = $exported;
        return $this;
    }
    /**
     * Get suspended value
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->suspended;
    }
    /**
     * Set suspended value
     * @param bool $suspended
     * @return \Webservices\StructType\DutchVehicleStatus
     */
    public function setSuspended($suspended = null)
    {
        // validation for constraint: boolean
        if (!is_null($suspended) && !is_bool($suspended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suspended)), __LINE__);
        }
        $this->suspended = $suspended;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleStatus
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
