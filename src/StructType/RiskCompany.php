<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskCompany StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskCompany extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * The addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskCompanyAddressArray
     */
    public $addresses;
    /**
     * The function_title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_title;
    /**
     * The function_authorization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_authorization;
    /**
     * The function_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $function_end_date;
    /**
     * The insolvencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\RiskInsolvencyArray
     */
    public $insolvencies;
    /**
     * The mutation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mutation_date;
    /**
     * Constructor method for RiskCompany
     * @uses RiskCompany::setDossier_number()
     * @uses RiskCompany::setEstablishment_number()
     * @uses RiskCompany::setStatus()
     * @uses RiskCompany::setTrade_names()
     * @uses RiskCompany::setAddresses()
     * @uses RiskCompany::setFunction_title()
     * @uses RiskCompany::setFunction_authorization()
     * @uses RiskCompany::setFunction_end_date()
     * @uses RiskCompany::setInsolvencies()
     * @uses RiskCompany::setMutation_date()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $status
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @param \Webservices\ArrayType\RiskCompanyAddressArray $addresses
     * @param string $function_title
     * @param string $function_authorization
     * @param string $function_end_date
     * @param \Webservices\ArrayType\RiskInsolvencyArray $insolvencies
     * @param string $mutation_date
     */
    public function __construct($dossier_number = null, $establishment_number = null, $status = null, \Webservices\ArrayType\StringArray $trade_names = null, \Webservices\ArrayType\RiskCompanyAddressArray $addresses = null, $function_title = null, $function_authorization = null, $function_end_date = null, \Webservices\ArrayType\RiskInsolvencyArray $insolvencies = null, $mutation_date = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setStatus($status)
            ->setTrade_names($trade_names)
            ->setAddresses($addresses)
            ->setFunction_title($function_title)
            ->setFunction_authorization($function_authorization)
            ->setFunction_end_date($function_end_date)
            ->setInsolvencies($insolvencies)
            ->setMutation_date($mutation_date);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\RiskCompany
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\RiskCompany
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\RiskCompany
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get trade_names value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTrade_names()
    {
        return $this->trade_names;
    }
    /**
     * Set trade_names value
     * @param \Webservices\ArrayType\StringArray $trade_names
     * @return \Webservices\StructType\RiskCompany
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Get addresses value
     * @return \Webservices\ArrayType\RiskCompanyAddressArray|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * Set addresses value
     * @param \Webservices\ArrayType\RiskCompanyAddressArray $addresses
     * @return \Webservices\StructType\RiskCompany
     */
    public function setAddresses(\Webservices\ArrayType\RiskCompanyAddressArray $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Get function_title value
     * @return string|null
     */
    public function getFunction_title()
    {
        return $this->function_title;
    }
    /**
     * Set function_title value
     * @param string $function_title
     * @return \Webservices\StructType\RiskCompany
     */
    public function setFunction_title($function_title = null)
    {
        // validation for constraint: string
        if (!is_null($function_title) && !is_string($function_title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_title)), __LINE__);
        }
        $this->function_title = $function_title;
        return $this;
    }
    /**
     * Get function_authorization value
     * @return string|null
     */
    public function getFunction_authorization()
    {
        return $this->function_authorization;
    }
    /**
     * Set function_authorization value
     * @param string $function_authorization
     * @return \Webservices\StructType\RiskCompany
     */
    public function setFunction_authorization($function_authorization = null)
    {
        // validation for constraint: string
        if (!is_null($function_authorization) && !is_string($function_authorization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_authorization)), __LINE__);
        }
        $this->function_authorization = $function_authorization;
        return $this;
    }
    /**
     * Get function_end_date value
     * @return string|null
     */
    public function getFunction_end_date()
    {
        return $this->function_end_date;
    }
    /**
     * Set function_end_date value
     * @param string $function_end_date
     * @return \Webservices\StructType\RiskCompany
     */
    public function setFunction_end_date($function_end_date = null)
    {
        // validation for constraint: string
        if (!is_null($function_end_date) && !is_string($function_end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($function_end_date)), __LINE__);
        }
        $this->function_end_date = $function_end_date;
        return $this;
    }
    /**
     * Get insolvencies value
     * @return \Webservices\ArrayType\RiskInsolvencyArray|null
     */
    public function getInsolvencies()
    {
        return $this->insolvencies;
    }
    /**
     * Set insolvencies value
     * @param \Webservices\ArrayType\RiskInsolvencyArray $insolvencies
     * @return \Webservices\StructType\RiskCompany
     */
    public function setInsolvencies(\Webservices\ArrayType\RiskInsolvencyArray $insolvencies = null)
    {
        $this->insolvencies = $insolvencies;
        return $this;
    }
    /**
     * Get mutation_date value
     * @return string|null
     */
    public function getMutation_date()
    {
        return $this->mutation_date;
    }
    /**
     * Set mutation_date value
     * @param string $mutation_date
     * @return \Webservices\StructType\RiskCompany
     */
    public function setMutation_date($mutation_date = null)
    {
        // validation for constraint: string
        if (!is_null($mutation_date) && !is_string($mutation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mutation_date)), __LINE__);
        }
        $this->mutation_date = $mutation_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskCompany
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
