<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRContactDetails StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRContactDetails extends AbstractStructBase
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
     * The telephone_numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRTelephoneNumberArray
     */
    public $telephone_numbers;
    /**
     * Constructor method for GCRContactDetails
     * @uses GCRContactDetails::setCompany_name()
     * @uses GCRContactDetails::setTrade_names()
     * @uses GCRContactDetails::setAddresses()
     * @uses GCRContactDetails::setTelephone_numbers()
     * @param string $company_name
     * @param \Webservices\ArrayType\GCRTradeNameArray $trade_names
     * @param \Webservices\ArrayType\GCRAddressArray $addresses
     * @param \Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers
     */
    public function __construct($company_name = null, \Webservices\ArrayType\GCRTradeNameArray $trade_names = null, \Webservices\ArrayType\GCRAddressArray $addresses = null, \Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers = null)
    {
        $this
            ->setCompany_name($company_name)
            ->setTrade_names($trade_names)
            ->setAddresses($addresses)
            ->setTelephone_numbers($telephone_numbers);
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
     * @return \Webservices\StructType\GCRContactDetails
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
     * @return \Webservices\StructType\GCRContactDetails
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
     * @return \Webservices\StructType\GCRContactDetails
     */
    public function setAddresses(\Webservices\ArrayType\GCRAddressArray $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Get telephone_numbers value
     * @return \Webservices\ArrayType\GCRTelephoneNumberArray|null
     */
    public function getTelephone_numbers()
    {
        return $this->telephone_numbers;
    }
    /**
     * Set telephone_numbers value
     * @param \Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers
     * @return \Webservices\StructType\GCRContactDetails
     */
    public function setTelephone_numbers(\Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers = null)
    {
        $this->telephone_numbers = $telephone_numbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRContactDetails
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
