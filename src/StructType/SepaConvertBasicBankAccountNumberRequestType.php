<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sepaConvertBasicBankAccountNumberRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SepaConvertBasicBankAccountNumberRequestType extends AbstractStructBase
{
    /**
     * The bban
     * @var string
     */
    public $bban;
    /**
     * The country_iso
     * @var string
     */
    public $country_iso;
    /**
     * Constructor method for sepaConvertBasicBankAccountNumberRequestType
     * @uses SepaConvertBasicBankAccountNumberRequestType::setBban()
     * @uses SepaConvertBasicBankAccountNumberRequestType::setCountry_iso()
     * @param string $bban
     * @param string $country_iso
     */
    public function __construct($bban = null, $country_iso = null)
    {
        $this
            ->setBban($bban)
            ->setCountry_iso($country_iso);
    }
    /**
     * Get bban value
     * @return string|null
     */
    public function getBban()
    {
        return $this->bban;
    }
    /**
     * Set bban value
     * @param string $bban
     * @return \Webservices\StructType\SepaConvertBasicBankAccountNumberRequestType
     */
    public function setBban($bban = null)
    {
        // validation for constraint: string
        if (!is_null($bban) && !is_string($bban)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bban)), __LINE__);
        }
        $this->bban = $bban;
        return $this;
    }
    /**
     * Get country_iso value
     * @return string|null
     */
    public function getCountry_iso()
    {
        return $this->country_iso;
    }
    /**
     * Set country_iso value
     * @param string $country_iso
     * @return \Webservices\StructType\SepaConvertBasicBankAccountNumberRequestType
     */
    public function setCountry_iso($country_iso = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso) && !is_string($country_iso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso)), __LINE__);
        }
        $this->country_iso = $country_iso;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SepaConvertBasicBankAccountNumberRequestType
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
