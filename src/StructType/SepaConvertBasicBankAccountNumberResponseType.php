<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sepaConvertBasicBankAccountNumberResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SepaConvertBasicBankAccountNumberResponseType extends AbstractStructBase
{
    /**
     * The bankaccount
     * @var \Webservices\StructType\SepaBankAccountData
     */
    public $bankaccount;
    /**
     * Constructor method for sepaConvertBasicBankAccountNumberResponseType
     * @uses SepaConvertBasicBankAccountNumberResponseType::setBankaccount()
     * @param \Webservices\StructType\SepaBankAccountData $bankaccount
     */
    public function __construct(\Webservices\StructType\SepaBankAccountData $bankaccount = null)
    {
        $this
            ->setBankaccount($bankaccount);
    }
    /**
     * Get bankaccount value
     * @return \Webservices\StructType\SepaBankAccountData|null
     */
    public function getBankaccount()
    {
        return $this->bankaccount;
    }
    /**
     * Set bankaccount value
     * @param \Webservices\StructType\SepaBankAccountData $bankaccount
     * @return \Webservices\StructType\SepaConvertBasicBankAccountNumberResponseType
     */
    public function setBankaccount(\Webservices\StructType\SepaBankAccountData $bankaccount = null)
    {
        $this->bankaccount = $bankaccount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SepaConvertBasicBankAccountNumberResponseType
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
