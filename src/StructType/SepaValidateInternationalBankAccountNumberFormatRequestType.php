<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * sepaValidateInternationalBankAccountNumberFormatRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SepaValidateInternationalBankAccountNumberFormatRequestType extends AbstractStructBase
{
    /**
     * The iban
     * @var string
     */
    public $iban;
    /**
     * Constructor method for
     * sepaValidateInternationalBankAccountNumberFormatRequestType
     * @uses SepaValidateInternationalBankAccountNumberFormatRequestType::setIban()
     * @param string $iban
     */
    public function __construct($iban = null)
    {
        $this
            ->setIban($iban);
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
     * @return \Webservices\StructType\SepaValidateInternationalBankAccountNumberFormatRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SepaValidateInternationalBankAccountNumberFormatRequestType
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
