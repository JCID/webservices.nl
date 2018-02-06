<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SepaBankAccountData StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SepaBankAccountData extends AbstractStructBase
{
    /**
     * The bban
     * @var string
     */
    public $bban;
    /**
     * The iban
     * @var string
     */
    public $iban;
    /**
     * The bic
     * @var string
     */
    public $bic;
    /**
     * Constructor method for SepaBankAccountData
     * @uses SepaBankAccountData::setBban()
     * @uses SepaBankAccountData::setIban()
     * @uses SepaBankAccountData::setBic()
     * @param string $bban
     * @param string $iban
     * @param string $bic
     */
    public function __construct($bban = null, $iban = null, $bic = null)
    {
        $this
            ->setBban($bban)
            ->setIban($iban)
            ->setBic($bic);
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
     * @return \Webservices\StructType\SepaBankAccountData
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
     * Get iban value
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Webservices\StructType\SepaBankAccountData
     */
    public function setIban($iban = null)
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        return $this;
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic()
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \Webservices\StructType\SepaBankAccountData
     */
    public function setBic($bic = null)
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SepaBankAccountData
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
