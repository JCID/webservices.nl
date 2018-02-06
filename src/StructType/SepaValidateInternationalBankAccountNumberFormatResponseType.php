<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * sepaValidateInternationalBankAccountNumberFormatResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SepaValidateInternationalBankAccountNumberFormatResponseType extends AbstractStructBase
{
    /**
     * The validation_report
     * @var \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport
     */
    public $validation_report;
    /**
     * Constructor method for
     * sepaValidateInternationalBankAccountNumberFormatResponseType
     * @uses SepaValidateInternationalBankAccountNumberFormatResponseType::setValidation_report()
     * @param \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport $validation_report
     */
    public function __construct(\Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport $validation_report = null)
    {
        $this
            ->setValidation_report($validation_report);
    }
    /**
     * Get validation_report value
     * @return \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport|null
     */
    public function getValidation_report()
    {
        return $this->validation_report;
    }
    /**
     * Set validation_report value
     * @param \Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport $validation_report
     * @return \Webservices\StructType\SepaValidateInternationalBankAccountNumberFormatResponseType
     */
    public function setValidation_report(\Webservices\StructType\SepaInternationalBankAccountNumberFormatValidationReport $validation_report = null)
    {
        $this->validation_report = $validation_report;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SepaValidateInternationalBankAccountNumberFormatResponseType
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
