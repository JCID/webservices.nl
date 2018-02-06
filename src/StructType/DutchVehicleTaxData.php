<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleTaxData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleTaxData extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The base
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $base;
    /**
     * Constructor method for DutchVehicleTaxData
     * @uses DutchVehicleTaxData::setAmount()
     * @uses DutchVehicleTaxData::setBase()
     * @param int $amount
     * @param string $base
     */
    public function __construct($amount = null, $base = null)
    {
        $this
            ->setAmount($amount)
            ->setBase($base);
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Webservices\StructType\DutchVehicleTaxData
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get base value
     * @return string|null
     */
    public function getBase()
    {
        return $this->base;
    }
    /**
     * Set base value
     * @param string $base
     * @return \Webservices\StructType\DutchVehicleTaxData
     */
    public function setBase($base = null)
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($base)), __LINE__);
        }
        $this->base = $base;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleTaxData
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
