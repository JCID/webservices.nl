<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCalamityEvent StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCalamityEvent extends AbstractStructBase
{
    /**
     * The event_code
     * @var int
     */
    public $event_code;
    /**
     * The event_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $event_text;
    /**
     * The event_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $event_date;
    /**
     * The expiration_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expiration_date;
    /**
     * The damage_amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $damage_amount;
    /**
     * The damage_currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $damage_currency;
    /**
     * The insurance_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $insurance_code;
    /**
     * The insurance_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $insurance_text;
    /**
     * The instigator_graydon_company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $instigator_graydon_company_id;
    /**
     * Constructor method for GCRCalamityEvent
     * @uses GCRCalamityEvent::setEvent_code()
     * @uses GCRCalamityEvent::setEvent_text()
     * @uses GCRCalamityEvent::setEvent_date()
     * @uses GCRCalamityEvent::setExpiration_date()
     * @uses GCRCalamityEvent::setDamage_amount()
     * @uses GCRCalamityEvent::setDamage_currency()
     * @uses GCRCalamityEvent::setInsurance_code()
     * @uses GCRCalamityEvent::setInsurance_text()
     * @uses GCRCalamityEvent::setInstigator_graydon_company_id()
     * @param int $event_code
     * @param string $event_text
     * @param string $event_date
     * @param string $expiration_date
     * @param string $damage_amount
     * @param string $damage_currency
     * @param int $insurance_code
     * @param string $insurance_text
     * @param int $instigator_graydon_company_id
     */
    public function __construct($event_code = null, $event_text = null, $event_date = null, $expiration_date = null, $damage_amount = null, $damage_currency = null, $insurance_code = null, $insurance_text = null, $instigator_graydon_company_id = null)
    {
        $this
            ->setEvent_code($event_code)
            ->setEvent_text($event_text)
            ->setEvent_date($event_date)
            ->setExpiration_date($expiration_date)
            ->setDamage_amount($damage_amount)
            ->setDamage_currency($damage_currency)
            ->setInsurance_code($insurance_code)
            ->setInsurance_text($insurance_text)
            ->setInstigator_graydon_company_id($instigator_graydon_company_id);
    }
    /**
     * Get event_code value
     * @return int|null
     */
    public function getEvent_code()
    {
        return $this->event_code;
    }
    /**
     * Set event_code value
     * @param int $event_code
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setEvent_code($event_code = null)
    {
        // validation for constraint: int
        if (!is_null($event_code) && !is_numeric($event_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($event_code)), __LINE__);
        }
        $this->event_code = $event_code;
        return $this;
    }
    /**
     * Get event_text value
     * @return string|null
     */
    public function getEvent_text()
    {
        return $this->event_text;
    }
    /**
     * Set event_text value
     * @param string $event_text
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setEvent_text($event_text = null)
    {
        // validation for constraint: string
        if (!is_null($event_text) && !is_string($event_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($event_text)), __LINE__);
        }
        $this->event_text = $event_text;
        return $this;
    }
    /**
     * Get event_date value
     * @return string|null
     */
    public function getEvent_date()
    {
        return $this->event_date;
    }
    /**
     * Set event_date value
     * @param string $event_date
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setEvent_date($event_date = null)
    {
        // validation for constraint: string
        if (!is_null($event_date) && !is_string($event_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($event_date)), __LINE__);
        }
        $this->event_date = $event_date;
        return $this;
    }
    /**
     * Get expiration_date value
     * @return string|null
     */
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }
    /**
     * Set expiration_date value
     * @param string $expiration_date
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setExpiration_date($expiration_date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_date) && !is_string($expiration_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiration_date)), __LINE__);
        }
        $this->expiration_date = $expiration_date;
        return $this;
    }
    /**
     * Get damage_amount value
     * @return string|null
     */
    public function getDamage_amount()
    {
        return $this->damage_amount;
    }
    /**
     * Set damage_amount value
     * @param string $damage_amount
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setDamage_amount($damage_amount = null)
    {
        // validation for constraint: string
        if (!is_null($damage_amount) && !is_string($damage_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($damage_amount)), __LINE__);
        }
        $this->damage_amount = $damage_amount;
        return $this;
    }
    /**
     * Get damage_currency value
     * @return string|null
     */
    public function getDamage_currency()
    {
        return $this->damage_currency;
    }
    /**
     * Set damage_currency value
     * @param string $damage_currency
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setDamage_currency($damage_currency = null)
    {
        // validation for constraint: string
        if (!is_null($damage_currency) && !is_string($damage_currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($damage_currency)), __LINE__);
        }
        $this->damage_currency = $damage_currency;
        return $this;
    }
    /**
     * Get insurance_code value
     * @return int|null
     */
    public function getInsurance_code()
    {
        return $this->insurance_code;
    }
    /**
     * Set insurance_code value
     * @param int $insurance_code
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setInsurance_code($insurance_code = null)
    {
        // validation for constraint: int
        if (!is_null($insurance_code) && !is_numeric($insurance_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insurance_code)), __LINE__);
        }
        $this->insurance_code = $insurance_code;
        return $this;
    }
    /**
     * Get insurance_text value
     * @return string|null
     */
    public function getInsurance_text()
    {
        return $this->insurance_text;
    }
    /**
     * Set insurance_text value
     * @param string $insurance_text
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setInsurance_text($insurance_text = null)
    {
        // validation for constraint: string
        if (!is_null($insurance_text) && !is_string($insurance_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insurance_text)), __LINE__);
        }
        $this->insurance_text = $insurance_text;
        return $this;
    }
    /**
     * Get instigator_graydon_company_id value
     * @return int|null
     */
    public function getInstigator_graydon_company_id()
    {
        return $this->instigator_graydon_company_id;
    }
    /**
     * Set instigator_graydon_company_id value
     * @param int $instigator_graydon_company_id
     * @return \Webservices\StructType\GCRCalamityEvent
     */
    public function setInstigator_graydon_company_id($instigator_graydon_company_id = null)
    {
        // validation for constraint: int
        if (!is_null($instigator_graydon_company_id) && !is_numeric($instigator_graydon_company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($instigator_graydon_company_id)), __LINE__);
        }
        $this->instigator_graydon_company_id = $instigator_graydon_company_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCalamityEvent
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
