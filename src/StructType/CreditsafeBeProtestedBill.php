<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeProtestedBill StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeProtestedBill extends AbstractStructBase
{
    /**
     * The drawee_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $drawee_name;
    /**
     * The drawee_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $drawee_address;
    /**
     * The bill_amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $bill_amount;
    /**
     * The bill_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bill_currency;
    /**
     * The maturity_of_bill_in_months
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $maturity_of_bill_in_months;
    /**
     * The payment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $payment_date;
    /**
     * The name_of_drawer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name_of_drawer;
    /**
     * The city_of_drawer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city_of_drawer;
    /**
     * Constructor method for CreditsafeBeProtestedBill
     * @uses CreditsafeBeProtestedBill::setDrawee_name()
     * @uses CreditsafeBeProtestedBill::setDrawee_address()
     * @uses CreditsafeBeProtestedBill::setBill_amount()
     * @uses CreditsafeBeProtestedBill::setBill_currency()
     * @uses CreditsafeBeProtestedBill::setMaturity_of_bill_in_months()
     * @uses CreditsafeBeProtestedBill::setPayment_date()
     * @uses CreditsafeBeProtestedBill::setName_of_drawer()
     * @uses CreditsafeBeProtestedBill::setCity_of_drawer()
     * @param string $drawee_name
     * @param string $drawee_address
     * @param float $bill_amount
     * @param string $bill_currency
     * @param float $maturity_of_bill_in_months
     * @param string $payment_date
     * @param string $name_of_drawer
     * @param string $city_of_drawer
     */
    public function __construct($drawee_name = null, $drawee_address = null, $bill_amount = null, $bill_currency = null, $maturity_of_bill_in_months = null, $payment_date = null, $name_of_drawer = null, $city_of_drawer = null)
    {
        $this
            ->setDrawee_name($drawee_name)
            ->setDrawee_address($drawee_address)
            ->setBill_amount($bill_amount)
            ->setBill_currency($bill_currency)
            ->setMaturity_of_bill_in_months($maturity_of_bill_in_months)
            ->setPayment_date($payment_date)
            ->setName_of_drawer($name_of_drawer)
            ->setCity_of_drawer($city_of_drawer);
    }
    /**
     * Get drawee_name value
     * @return string|null
     */
    public function getDrawee_name()
    {
        return $this->drawee_name;
    }
    /**
     * Set drawee_name value
     * @param string $drawee_name
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setDrawee_name($drawee_name = null)
    {
        // validation for constraint: string
        if (!is_null($drawee_name) && !is_string($drawee_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($drawee_name)), __LINE__);
        }
        $this->drawee_name = $drawee_name;
        return $this;
    }
    /**
     * Get drawee_address value
     * @return string|null
     */
    public function getDrawee_address()
    {
        return $this->drawee_address;
    }
    /**
     * Set drawee_address value
     * @param string $drawee_address
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setDrawee_address($drawee_address = null)
    {
        // validation for constraint: string
        if (!is_null($drawee_address) && !is_string($drawee_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($drawee_address)), __LINE__);
        }
        $this->drawee_address = $drawee_address;
        return $this;
    }
    /**
     * Get bill_amount value
     * @return float|null
     */
    public function getBill_amount()
    {
        return $this->bill_amount;
    }
    /**
     * Set bill_amount value
     * @param float $bill_amount
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setBill_amount($bill_amount = null)
    {
        $this->bill_amount = $bill_amount;
        return $this;
    }
    /**
     * Get bill_currency value
     * @return string|null
     */
    public function getBill_currency()
    {
        return $this->bill_currency;
    }
    /**
     * Set bill_currency value
     * @param string $bill_currency
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setBill_currency($bill_currency = null)
    {
        // validation for constraint: string
        if (!is_null($bill_currency) && !is_string($bill_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_currency)), __LINE__);
        }
        $this->bill_currency = $bill_currency;
        return $this;
    }
    /**
     * Get maturity_of_bill_in_months value
     * @return float|null
     */
    public function getMaturity_of_bill_in_months()
    {
        return $this->maturity_of_bill_in_months;
    }
    /**
     * Set maturity_of_bill_in_months value
     * @param float $maturity_of_bill_in_months
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setMaturity_of_bill_in_months($maturity_of_bill_in_months = null)
    {
        $this->maturity_of_bill_in_months = $maturity_of_bill_in_months;
        return $this;
    }
    /**
     * Get payment_date value
     * @return string|null
     */
    public function getPayment_date()
    {
        return $this->payment_date;
    }
    /**
     * Set payment_date value
     * @param string $payment_date
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setPayment_date($payment_date = null)
    {
        // validation for constraint: string
        if (!is_null($payment_date) && !is_string($payment_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payment_date)), __LINE__);
        }
        $this->payment_date = $payment_date;
        return $this;
    }
    /**
     * Get name_of_drawer value
     * @return string|null
     */
    public function getName_of_drawer()
    {
        return $this->name_of_drawer;
    }
    /**
     * Set name_of_drawer value
     * @param string $name_of_drawer
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setName_of_drawer($name_of_drawer = null)
    {
        // validation for constraint: string
        if (!is_null($name_of_drawer) && !is_string($name_of_drawer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name_of_drawer)), __LINE__);
        }
        $this->name_of_drawer = $name_of_drawer;
        return $this;
    }
    /**
     * Get city_of_drawer value
     * @return string|null
     */
    public function getCity_of_drawer()
    {
        return $this->city_of_drawer;
    }
    /**
     * Set city_of_drawer value
     * @param string $city_of_drawer
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
     */
    public function setCity_of_drawer($city_of_drawer = null)
    {
        // validation for constraint: string
        if (!is_null($city_of_drawer) && !is_string($city_of_drawer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city_of_drawer)), __LINE__);
        }
        $this->city_of_drawer = $city_of_drawer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeProtestedBill
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
