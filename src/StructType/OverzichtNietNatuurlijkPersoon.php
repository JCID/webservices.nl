<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverzichtNietNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OverzichtNietNatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The naam
     * @var string
     */
    public $naam;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * Constructor method for OverzichtNietNatuurlijkPersoon
     * @uses OverzichtNietNatuurlijkPersoon::setNaam()
     * @uses OverzichtNietNatuurlijkPersoon::setCode()
     * @param string $naam
     * @param string $code
     */
    public function __construct($naam = null, $code = null)
    {
        $this
            ->setNaam($naam)
            ->setCode($code);
    }
    /**
     * Get naam value
     * @return string|null
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Set naam value
     * @param string $naam
     * @return \Webservices\StructType\OverzichtNietNatuurlijkPersoon
     */
    public function setNaam($naam = null)
    {
        // validation for constraint: string
        if (!is_null($naam) && !is_string($naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($naam)), __LINE__);
        }
        $this->naam = $naam;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Webservices\StructType\OverzichtNietNatuurlijkPersoon
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\OverzichtNietNatuurlijkPersoon
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
