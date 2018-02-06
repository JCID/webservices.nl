<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonCreditReportQuickscan StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditReportQuickscan extends AbstractStructBase
{
    /**
     * The pd_rating
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pd_rating;
    /**
     * The credit_flag_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_flag_code;
    /**
     * The credit_flag_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $credit_flag_text;
    /**
     * The alarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAlarm
     */
    public $alarm;
    /**
     * Constructor method for GraydonCreditReportQuickscan
     * @uses GraydonCreditReportQuickscan::setPd_rating()
     * @uses GraydonCreditReportQuickscan::setCredit_flag_code()
     * @uses GraydonCreditReportQuickscan::setCredit_flag_text()
     * @uses GraydonCreditReportQuickscan::setAlarm()
     * @param string $pd_rating
     * @param string $credit_flag_code
     * @param string $credit_flag_text
     * @param \Webservices\StructType\GCRAlarm $alarm
     */
    public function __construct($pd_rating = null, $credit_flag_code = null, $credit_flag_text = null, \Webservices\StructType\GCRAlarm $alarm = null)
    {
        $this
            ->setPd_rating($pd_rating)
            ->setCredit_flag_code($credit_flag_code)
            ->setCredit_flag_text($credit_flag_text)
            ->setAlarm($alarm);
    }
    /**
     * Get pd_rating value
     * @return string|null
     */
    public function getPd_rating()
    {
        return $this->pd_rating;
    }
    /**
     * Set pd_rating value
     * @param string $pd_rating
     * @return \Webservices\StructType\GraydonCreditReportQuickscan
     */
    public function setPd_rating($pd_rating = null)
    {
        // validation for constraint: string
        if (!is_null($pd_rating) && !is_string($pd_rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pd_rating)), __LINE__);
        }
        $this->pd_rating = $pd_rating;
        return $this;
    }
    /**
     * Get credit_flag_code value
     * @return string|null
     */
    public function getCredit_flag_code()
    {
        return $this->credit_flag_code;
    }
    /**
     * Set credit_flag_code value
     * @param string $credit_flag_code
     * @return \Webservices\StructType\GraydonCreditReportQuickscan
     */
    public function setCredit_flag_code($credit_flag_code = null)
    {
        // validation for constraint: string
        if (!is_null($credit_flag_code) && !is_string($credit_flag_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_flag_code)), __LINE__);
        }
        $this->credit_flag_code = $credit_flag_code;
        return $this;
    }
    /**
     * Get credit_flag_text value
     * @return string|null
     */
    public function getCredit_flag_text()
    {
        return $this->credit_flag_text;
    }
    /**
     * Set credit_flag_text value
     * @param string $credit_flag_text
     * @return \Webservices\StructType\GraydonCreditReportQuickscan
     */
    public function setCredit_flag_text($credit_flag_text = null)
    {
        // validation for constraint: string
        if (!is_null($credit_flag_text) && !is_string($credit_flag_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credit_flag_text)), __LINE__);
        }
        $this->credit_flag_text = $credit_flag_text;
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
     * @return \Webservices\StructType\GraydonCreditReportQuickscan
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
     * @return \Webservices\StructType\GraydonCreditReportQuickscan
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
