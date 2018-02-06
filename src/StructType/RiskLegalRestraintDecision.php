<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskLegalRestraintDecision StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskLegalRestraintDecision extends AbstractStructBase
{
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * The cause
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cause;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The court
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $court;
    /**
     * The jurisdiction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $jurisdiction;
    /**
     * The district
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $district;
    /**
     * The administrator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskLegalRestraintAdministrator
     */
    public $administrator;
    /**
     * Constructor method for RiskLegalRestraintDecision
     * @uses RiskLegalRestraintDecision::setNumber()
     * @uses RiskLegalRestraintDecision::setCause()
     * @uses RiskLegalRestraintDecision::setDate()
     * @uses RiskLegalRestraintDecision::setCourt()
     * @uses RiskLegalRestraintDecision::setJurisdiction()
     * @uses RiskLegalRestraintDecision::setDistrict()
     * @uses RiskLegalRestraintDecision::setAdministrator()
     * @param string $number
     * @param string $cause
     * @param string $date
     * @param string $court
     * @param string $jurisdiction
     * @param string $district
     * @param \Webservices\StructType\RiskLegalRestraintAdministrator $administrator
     */
    public function __construct($number = null, $cause = null, $date = null, $court = null, $jurisdiction = null, $district = null, \Webservices\StructType\RiskLegalRestraintAdministrator $administrator = null)
    {
        $this
            ->setNumber($number)
            ->setCause($cause)
            ->setDate($date)
            ->setCourt($court)
            ->setJurisdiction($jurisdiction)
            ->setDistrict($district)
            ->setAdministrator($administrator);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get cause value
     * @return string|null
     */
    public function getCause()
    {
        return $this->cause;
    }
    /**
     * Set cause value
     * @param string $cause
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setCause($cause = null)
    {
        // validation for constraint: string
        if (!is_null($cause) && !is_string($cause)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cause)), __LINE__);
        }
        $this->cause = $cause;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get court value
     * @return string|null
     */
    public function getCourt()
    {
        return $this->court;
    }
    /**
     * Set court value
     * @param string $court
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setCourt($court = null)
    {
        // validation for constraint: string
        if (!is_null($court) && !is_string($court)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($court)), __LINE__);
        }
        $this->court = $court;
        return $this;
    }
    /**
     * Get jurisdiction value
     * @return string|null
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }
    /**
     * Set jurisdiction value
     * @param string $jurisdiction
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setJurisdiction($jurisdiction = null)
    {
        // validation for constraint: string
        if (!is_null($jurisdiction) && !is_string($jurisdiction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jurisdiction)), __LINE__);
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }
    /**
     * Get district value
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->district;
    }
    /**
     * Set district value
     * @param string $district
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setDistrict($district = null)
    {
        // validation for constraint: string
        if (!is_null($district) && !is_string($district)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($district)), __LINE__);
        }
        $this->district = $district;
        return $this;
    }
    /**
     * Get administrator value
     * @return \Webservices\StructType\RiskLegalRestraintAdministrator|null
     */
    public function getAdministrator()
    {
        return $this->administrator;
    }
    /**
     * Set administrator value
     * @param \Webservices\StructType\RiskLegalRestraintAdministrator $administrator
     * @return \Webservices\StructType\RiskLegalRestraintDecision
     */
    public function setAdministrator(\Webservices\StructType\RiskLegalRestraintAdministrator $administrator = null)
    {
        $this->administrator = $administrator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskLegalRestraintDecision
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
