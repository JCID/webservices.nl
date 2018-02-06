<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeNSSODetail StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeNSSODetail extends AbstractStructBase
{
    /**
     * The business_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_number;
    /**
     * The name_of_defendant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name_of_defendant;
    /**
     * The legal_form_of_defendant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_of_defendant;
    /**
     * The date_of_summons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_summons;
    /**
     * The labour_court
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $labour_court;
    /**
     * Constructor method for CreditsafeBeNSSODetail
     * @uses CreditsafeBeNSSODetail::setBusiness_number()
     * @uses CreditsafeBeNSSODetail::setName_of_defendant()
     * @uses CreditsafeBeNSSODetail::setLegal_form_of_defendant()
     * @uses CreditsafeBeNSSODetail::setDate_of_summons()
     * @uses CreditsafeBeNSSODetail::setLabour_court()
     * @param string $business_number
     * @param string $name_of_defendant
     * @param string $legal_form_of_defendant
     * @param string $date_of_summons
     * @param string $labour_court
     */
    public function __construct($business_number = null, $name_of_defendant = null, $legal_form_of_defendant = null, $date_of_summons = null, $labour_court = null)
    {
        $this
            ->setBusiness_number($business_number)
            ->setName_of_defendant($name_of_defendant)
            ->setLegal_form_of_defendant($legal_form_of_defendant)
            ->setDate_of_summons($date_of_summons)
            ->setLabour_court($labour_court);
    }
    /**
     * Get business_number value
     * @return string|null
     */
    public function getBusiness_number()
    {
        return $this->business_number;
    }
    /**
     * Set business_number value
     * @param string $business_number
     * @return \Webservices\StructType\CreditsafeBeNSSODetail
     */
    public function setBusiness_number($business_number = null)
    {
        // validation for constraint: string
        if (!is_null($business_number) && !is_string($business_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_number)), __LINE__);
        }
        $this->business_number = $business_number;
        return $this;
    }
    /**
     * Get name_of_defendant value
     * @return string|null
     */
    public function getName_of_defendant()
    {
        return $this->name_of_defendant;
    }
    /**
     * Set name_of_defendant value
     * @param string $name_of_defendant
     * @return \Webservices\StructType\CreditsafeBeNSSODetail
     */
    public function setName_of_defendant($name_of_defendant = null)
    {
        // validation for constraint: string
        if (!is_null($name_of_defendant) && !is_string($name_of_defendant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name_of_defendant)), __LINE__);
        }
        $this->name_of_defendant = $name_of_defendant;
        return $this;
    }
    /**
     * Get legal_form_of_defendant value
     * @return string|null
     */
    public function getLegal_form_of_defendant()
    {
        return $this->legal_form_of_defendant;
    }
    /**
     * Set legal_form_of_defendant value
     * @param string $legal_form_of_defendant
     * @return \Webservices\StructType\CreditsafeBeNSSODetail
     */
    public function setLegal_form_of_defendant($legal_form_of_defendant = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_of_defendant) && !is_string($legal_form_of_defendant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_of_defendant)), __LINE__);
        }
        $this->legal_form_of_defendant = $legal_form_of_defendant;
        return $this;
    }
    /**
     * Get date_of_summons value
     * @return string|null
     */
    public function getDate_of_summons()
    {
        return $this->date_of_summons;
    }
    /**
     * Set date_of_summons value
     * @param string $date_of_summons
     * @return \Webservices\StructType\CreditsafeBeNSSODetail
     */
    public function setDate_of_summons($date_of_summons = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_summons) && !is_string($date_of_summons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_summons)), __LINE__);
        }
        $this->date_of_summons = $date_of_summons;
        return $this;
    }
    /**
     * Get labour_court value
     * @return string|null
     */
    public function getLabour_court()
    {
        return $this->labour_court;
    }
    /**
     * Set labour_court value
     * @param string $labour_court
     * @return \Webservices\StructType\CreditsafeBeNSSODetail
     */
    public function setLabour_court($labour_court = null)
    {
        // validation for constraint: string
        if (!is_null($labour_court) && !is_string($labour_court)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labour_court)), __LINE__);
        }
        $this->labour_court = $labour_court;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeNSSODetail
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
