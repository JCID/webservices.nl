<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportVatNumber StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportVatNumber extends AbstractStructBase
{
    /**
     * The vat_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vat_number;
    /**
     * The alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarm
     */
    public $alarm;
    /**
     * Constructor method for GraydonCreditReportVatNumber
     * @uses GraydonCreditReportVatNumber::setVat_number()
     * @uses GraydonCreditReportVatNumber::setAlarm()
     * @param string $vat_number
     * @param \Webservices\StructType\GCRAlarm $alarm
     */
    public function __construct($vat_number = null, \Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this
            ->setVat_number($vat_number)
            ->setAlarm($alarm);
    }
    /**
     * Get vat_number value
     * @return string|null
     */
    public function getVat_number()
    {
        return $this->vat_number;
    }
    /**
     * Set vat_number value
     * @param string $vat_number
     * @return \Webservices\StructType\GraydonCreditReportVatNumber
     */
    public function setVat_number($vat_number = null)
    {
        // validation for constraint: string
        if (!is_null($vat_number) && !is_string($vat_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vat_number)), __LINE__);
        }
        $this->vat_number = $vat_number;
        return $this;
    }
    /**
     * Get alarm value
     * @return \Webservices\StructType\GCRAlarm|null
     */
    public function getAlarm()
    {
        return $this->alarm;
    }
    /**
     * Set alarm value
     * @param \Webservices\StructType\GCRAlarm $alarm
     * @return \Webservices\StructType\GraydonCreditReportVatNumber
     */
    public function setAlarm(\Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this->alarm = $alarm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditReportVatNumber
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
