<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRBranchOffice StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRBranchOffice extends AbstractStructBase
{
    /**
     * The branch_office_id
     * @var string
     */
    public $branch_office_id;
    /**
     * The business_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_name;
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
     * The email_addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $email_addresses;
    /**
     * The estabishment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $estabishment_date;
    /**
     * The discontinuance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRDiscontinuance
     */
    public $discontinuance;
    /**
     * Constructor method for GCRBranchOffice
     * @uses GCRBranchOffice::setBranch_office_id()
     * @uses GCRBranchOffice::setBusiness_name()
     * @uses GCRBranchOffice::setTrade_names()
     * @uses GCRBranchOffice::setAddresses()
     * @uses GCRBranchOffice::setTelephone_numbers()
     * @uses GCRBranchOffice::setEmail_addresses()
     * @uses GCRBranchOffice::setEstabishment_date()
     * @uses GCRBranchOffice::setDiscontinuance()
     * @param string $branch_office_id
     * @param string $business_name
     * @param \Webservices\ArrayType\GCRTradeNameArray $trade_names
     * @param \Webservices\ArrayType\GCRAddressArray $addresses
     * @param \Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @param string $estabishment_date
     * @param \Webservices\StructType\GCRDiscontinuance $discontinuance
     */
    public function __construct($branch_office_id = null, $business_name = null, \Webservices\ArrayType\GCRTradeNameArray $trade_names = null, \Webservices\ArrayType\GCRAddressArray $addresses = null, \Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers = null, \Webservices\ArrayType\StringArray $email_addresses = null, $estabishment_date = null, \Webservices\StructType\GCRDiscontinuance $discontinuance = null)
    {
        $this
            ->setBranch_office_id($branch_office_id)
            ->setBusiness_name($business_name)
            ->setTrade_names($trade_names)
            ->setAddresses($addresses)
            ->setTelephone_numbers($telephone_numbers)
            ->setEmail_addresses($email_addresses)
            ->setEstabishment_date($estabishment_date)
            ->setDiscontinuance($discontinuance);
    }
    /**
     * Get branch_office_id value
     * @return string|null
     */
    public function getBranch_office_id()
    {
        return $this->branch_office_id;
    }
    /**
     * Set branch_office_id value
     * @param string $branch_office_id
     * @return \Webservices\StructType\GCRBranchOffice
     */
    public function setBranch_office_id($branch_office_id = null)
    {
        // validation for constraint: string
        if (!is_null($branch_office_id) && !is_string($branch_office_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($branch_office_id)), __LINE__);
        }
        $this->branch_office_id = $branch_office_id;
        return $this;
    }
    /**
     * Get business_name value
     * @return string|null
     */
    public function getBusiness_name()
    {
        return $this->business_name;
    }
    /**
     * Set business_name value
     * @param string $business_name
     * @return \Webservices\StructType\GCRBranchOffice
     */
    public function setBusiness_name($business_name = null)
    {
        // validation for constraint: string
        if (!is_null($business_name) && !is_string($business_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_name)), __LINE__);
        }
        $this->business_name = $business_name;
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
     * @return \Webservices\StructType\GCRBranchOffice
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
     * @return \Webservices\StructType\GCRBranchOffice
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
     * @return \Webservices\StructType\GCRBranchOffice
     */
    public function setTelephone_numbers(\Webservices\ArrayType\GCRTelephoneNumberArray $telephone_numbers = null)
    {
        $this->telephone_numbers = $telephone_numbers;
        return $this;
    }
    /**
     * Get email_addresses value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getEmail_addresses()
    {
        return $this->email_addresses;
    }
    /**
     * Set email_addresses value
     * @param \Webservices\ArrayType\StringArray $email_addresses
     * @return \Webservices\StructType\GCRBranchOffice
     */
    public function setEmail_addresses(\Webservices\ArrayType\StringArray $email_addresses = null)
    {
        $this->email_addresses = $email_addresses;
        return $this;
    }
    /**
     * Get estabishment_date value
     * @return string|null
     */
    public function getEstabishment_date()
    {
        return $this->estabishment_date;
    }
    /**
     * Set estabishment_date value
     * @param string $estabishment_date
     * @return \Webservices\StructType\GCRBranchOffice
     */
    public function setEstabishment_date($estabishment_date = null)
    {
        // validation for constraint: string
        if (!is_null($estabishment_date) && !is_string($estabishment_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estabishment_date)), __LINE__);
        }
        $this->estabishment_date = $estabishment_date;
        return $this;
    }
    /**
     * Get discontinuance value
     * @return \Webservices\StructType\GCRDiscontinuance|null
     */
    public function getDiscontinuance()
    {
        return $this->discontinuance;
    }
    /**
     * Set discontinuance value
     * @param \Webservices\StructType\GCRDiscontinuance $discontinuance
     * @return \Webservices\StructType\GCRBranchOffice
     */
    public function setDiscontinuance(\Webservices\StructType\GCRDiscontinuance $discontinuance = null)
    {
        $this->discontinuance = $discontinuance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRBranchOffice
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
