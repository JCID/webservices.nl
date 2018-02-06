<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCapital StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCapital extends AbstractStructBase
{
    /**
     * The is_current
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_current;
    /**
     * The date_change
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_change;
    /**
     * The social_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $social_capital;
    /**
     * The capital_of_commandite_partnership
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $capital_of_commandite_partnership;
    /**
     * The issued_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $issued_capital;
    /**
     * The paid_up_capital
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paid_up_capital;
    /**
     * The monetary_amount_specified_in_corporate_deed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $monetary_amount_specified_in_corporate_deed;
    /**
     * Constructor method for GCRCapital
     * @uses GCRCapital::setIs_current()
     * @uses GCRCapital::setDate_change()
     * @uses GCRCapital::setSocial_capital()
     * @uses GCRCapital::setCapital_of_commandite_partnership()
     * @uses GCRCapital::setIssued_capital()
     * @uses GCRCapital::setPaid_up_capital()
     * @uses GCRCapital::setMonetary_amount_specified_in_corporate_deed()
     * @param bool $is_current
     * @param string $date_change
     * @param string $social_capital
     * @param string $capital_of_commandite_partnership
     * @param string $issued_capital
     * @param string $paid_up_capital
     * @param string $monetary_amount_specified_in_corporate_deed
     */
    public function __construct($is_current = null, $date_change = null, $social_capital = null, $capital_of_commandite_partnership = null, $issued_capital = null, $paid_up_capital = null, $monetary_amount_specified_in_corporate_deed = null)
    {
        $this
            ->setIs_current($is_current)
            ->setDate_change($date_change)
            ->setSocial_capital($social_capital)
            ->setCapital_of_commandite_partnership($capital_of_commandite_partnership)
            ->setIssued_capital($issued_capital)
            ->setPaid_up_capital($paid_up_capital)
            ->setMonetary_amount_specified_in_corporate_deed($monetary_amount_specified_in_corporate_deed);
    }
    /**
     * Get is_current value
     * @return bool|null
     */
    public function getIs_current()
    {
        return $this->is_current;
    }
    /**
     * Set is_current value
     * @param bool $is_current
     * @return \Webservices\StructType\GCRCapital
     */
    public function setIs_current($is_current = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_current) && !is_bool($is_current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_current)), __LINE__);
        }
        $this->is_current = $is_current;
        return $this;
    }
    /**
     * Get date_change value
     * @return string|null
     */
    public function getDate_change()
    {
        return $this->date_change;
    }
    /**
     * Set date_change value
     * @param string $date_change
     * @return \Webservices\StructType\GCRCapital
     */
    public function setDate_change($date_change = null)
    {
        // validation for constraint: string
        if (!is_null($date_change) && !is_string($date_change)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_change)), __LINE__);
        }
        $this->date_change = $date_change;
        return $this;
    }
    /**
     * Get social_capital value
     * @return string|null
     */
    public function getSocial_capital()
    {
        return $this->social_capital;
    }
    /**
     * Set social_capital value
     * @param string $social_capital
     * @return \Webservices\StructType\GCRCapital
     */
    public function setSocial_capital($social_capital = null)
    {
        // validation for constraint: string
        if (!is_null($social_capital) && !is_string($social_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($social_capital)), __LINE__);
        }
        $this->social_capital = $social_capital;
        return $this;
    }
    /**
     * Get capital_of_commandite_partnership value
     * @return string|null
     */
    public function getCapital_of_commandite_partnership()
    {
        return $this->capital_of_commandite_partnership;
    }
    /**
     * Set capital_of_commandite_partnership value
     * @param string $capital_of_commandite_partnership
     * @return \Webservices\StructType\GCRCapital
     */
    public function setCapital_of_commandite_partnership($capital_of_commandite_partnership = null)
    {
        // validation for constraint: string
        if (!is_null($capital_of_commandite_partnership) && !is_string($capital_of_commandite_partnership)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($capital_of_commandite_partnership)), __LINE__);
        }
        $this->capital_of_commandite_partnership = $capital_of_commandite_partnership;
        return $this;
    }
    /**
     * Get issued_capital value
     * @return string|null
     */
    public function getIssued_capital()
    {
        return $this->issued_capital;
    }
    /**
     * Set issued_capital value
     * @param string $issued_capital
     * @return \Webservices\StructType\GCRCapital
     */
    public function setIssued_capital($issued_capital = null)
    {
        // validation for constraint: string
        if (!is_null($issued_capital) && !is_string($issued_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issued_capital)), __LINE__);
        }
        $this->issued_capital = $issued_capital;
        return $this;
    }
    /**
     * Get paid_up_capital value
     * @return string|null
     */
    public function getPaid_up_capital()
    {
        return $this->paid_up_capital;
    }
    /**
     * Set paid_up_capital value
     * @param string $paid_up_capital
     * @return \Webservices\StructType\GCRCapital
     */
    public function setPaid_up_capital($paid_up_capital = null)
    {
        // validation for constraint: string
        if (!is_null($paid_up_capital) && !is_string($paid_up_capital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paid_up_capital)), __LINE__);
        }
        $this->paid_up_capital = $paid_up_capital;
        return $this;
    }
    /**
     * Get monetary_amount_specified_in_corporate_deed value
     * @return string|null
     */
    public function getMonetary_amount_specified_in_corporate_deed()
    {
        return $this->monetary_amount_specified_in_corporate_deed;
    }
    /**
     * Set monetary_amount_specified_in_corporate_deed value
     * @param string $monetary_amount_specified_in_corporate_deed
     * @return \Webservices\StructType\GCRCapital
     */
    public function setMonetary_amount_specified_in_corporate_deed($monetary_amount_specified_in_corporate_deed = null)
    {
        // validation for constraint: string
        if (!is_null($monetary_amount_specified_in_corporate_deed) && !is_string($monetary_amount_specified_in_corporate_deed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($monetary_amount_specified_in_corporate_deed)), __LINE__);
        }
        $this->monetary_amount_specified_in_corporate_deed = $monetary_amount_specified_in_corporate_deed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCapital
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
