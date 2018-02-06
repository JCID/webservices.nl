<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SepaInternationalBankAccountNumberFormatValidationReport
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SepaInternationalBankAccountNumberFormatValidationReport extends AbstractStructBase
{
    /**
     * The iban
     * @var string
     */
    public $iban;
    /**
     * The valid
     * @var bool
     */
    public $valid;
    /**
     * Constructor method for SepaInternationalBankAccountNumberFormatValidationReport
     * @uses SepaInternationalBankAccountNumberFormatValidationReport::setIban()
     * @uses SepaInternationalBankAccountNumberFormatValidationReport::setValid()
     * @param string $iban
     * @param bool $valid
     */
    public function __construct($iban = null, $valid = null)
    {
        $this
            ->setIban($iban)
            ->setValid($valid);
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
     * @return \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport
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
     * Get valid value
     * @return bool|null
     */
    public function getValid()
    {
        return $this->valid;
    }
    /**
     * Set valid value
     * @param bool $valid
     * @return \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport
     */
    public function setValid($valid = null)
    {
        // validation for constraint: boolean
        if (!is_null($valid) && !is_bool($valid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($valid)), __LINE__);
        }
        $this->valid = $valid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport
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
