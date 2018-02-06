<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRAlarmContactDetails StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRAlarmContactDetails extends AbstractStructBase
{
    /**
     * The company_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_name;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRTradeNameArray
     */
    public $trade_names;
    /**
     * The addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRAddressArray
     */
    public $addresses;
    /**
     * Constructor method for GCRAlarmContactDetails
     * @uses GCRAlarmContactDetails::setCompany_name()
     * @uses GCRAlarmContactDetails::setTrade_names()
     * @uses GCRAlarmContactDetails::setAddresses()
     * @param string $company_name
     * @param \Webservices\ArrayType\GCRTradeNameArray $trade_names
     * @param \Webservices\ArrayType\GCRAddressArray $addresses
     */
    public function __construct($company_name = null, \Webservices\ArrayType\GCRTradeNameArray $trade_names = null, \Webservices\ArrayType\GCRAddressArray $addresses = null)
    {
        $this
            ->setCompany_name($company_name)
            ->setTrade_names($trade_names)
            ->setAddresses($addresses);
    }
    /**
     * Get company_name value
     * @return string|null
     */
    public function getCompany_name()
    {
        return $this->company_name;
    }
    /**
     * Set company_name value
     * @param string $company_name
     * @return \Webservices\StructType\GCRAlarmContactDetails
     */
    public function setCompany_name($company_name = null)
    {
        // validation for constraint: string
        if (!is_null($company_name) && !is_string($company_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_name)), __LINE__);
        }
        $this->company_name = $company_name;
        return $this;
    }
    /**
     * Get trade_names value
     * @return \Webservices\ArrayType\GCRTradeNameArray|null
     */
    public function getTrade_names()
    {
        return $this->trade_names;
    }
    /**
     * Set trade_names value
     * @param \Webservices\ArrayType\GCRTradeNameArray $trade_names
     * @return \Webservices\StructType\GCRAlarmContactDetails
     */
    public function setTrade_names(\Webservices\ArrayType\GCRTradeNameArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Get addresses value
     * @return \Webservices\ArrayType\GCRAddressArray|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * Set addresses value
     * @param \Webservices\ArrayType\GCRAddressArray $addresses
     * @return \Webservices\StructType\GCRAlarmContactDetails
     */
    public function setAddresses(\Webservices\ArrayType\GCRAddressArray $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRAlarmContactDetails
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
