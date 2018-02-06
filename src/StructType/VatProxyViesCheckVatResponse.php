<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatProxyViesCheckVatResponse StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class VatProxyViesCheckVatResponse extends AbstractStructBase
{
    /**
     * The country_code
     * @var string
     */
    public $country_code;
    /**
     * The vat_number
     * @var string
     */
    public $vat_number;
    /**
     * The request_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $request_date;
    /**
     * The valid
     * @var bool
     */
    public $valid;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * Constructor method for VatProxyViesCheckVatResponse
     * @uses VatProxyViesCheckVatResponse::setCountry_code()
     * @uses VatProxyViesCheckVatResponse::setVat_number()
     * @uses VatProxyViesCheckVatResponse::setRequest_date()
     * @uses VatProxyViesCheckVatResponse::setValid()
     * @uses VatProxyViesCheckVatResponse::setName()
     * @uses VatProxyViesCheckVatResponse::setAddress()
     * @param string $country_code
     * @param string $vat_number
     * @param string $request_date
     * @param bool $valid
     * @param string $name
     * @param string $address
     */
    public function __construct($country_code = null, $vat_number = null, $request_date = null, $valid = null, $name = null, $address = null)
    {
        $this
            ->setCountry_code($country_code)
            ->setVat_number($vat_number)
            ->setRequest_date($request_date)
            ->setValid($valid)
            ->setName($name)
            ->setAddress($address);
    }
    /**
     * Get country_code value
     * @return string|null
     */
    public function getCountry_code()
    {
        return $this->country_code;
    }
    /**
     * Set country_code value
     * @param string $country_code
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
     */
    public function setCountry_code($country_code = null)
    {
        // validation for constraint: string
        if (!is_null($country_code) && !is_string($country_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_code)), __LINE__);
        }
        $this->country_code = $country_code;
        return $this;
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
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
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
     * Get request_date value
     * @return string|null
     */
    public function getRequest_date()
    {
        return $this->request_date;
    }
    /**
     * Set request_date value
     * @param string $request_date
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
     */
    public function setRequest_date($request_date = null)
    {
        // validation for constraint: string
        if (!is_null($request_date) && !is_string($request_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request_date)), __LINE__);
        }
        $this->request_date = $request_date;
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
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\VatProxyViesCheckVatResponse
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
