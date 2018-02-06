<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessEnterpriseV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessEnterpriseV2 extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registration;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * The activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $activity;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The incorporation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $incorporation_date;
    /**
     * The founding_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $founding_date;
    /**
     * The discontinuation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $discontinuation_date;
    /**
     * The date_since
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $date_since;
    /**
     * The personnel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessPersonnelInfoV2
     */
    public $personnel;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $remarks;
    /**
     * The sbi_codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessSbiCodeV2Array
     */
    public $sbi_codes;
    /**
     * The trade_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\StringArray
     */
    public $trade_names;
    /**
     * Constructor method for DutchBusinessEnterpriseV2
     * @uses DutchBusinessEnterpriseV2::setName()
     * @uses DutchBusinessEnterpriseV2::setRegistration()
     * @uses DutchBusinessEnterpriseV2::setLegal_form_text()
     * @uses DutchBusinessEnterpriseV2::setActivity()
     * @uses DutchBusinessEnterpriseV2::setDescription()
     * @uses DutchBusinessEnterpriseV2::setIncorporation_date()
     * @uses DutchBusinessEnterpriseV2::setFounding_date()
     * @uses DutchBusinessEnterpriseV2::setDiscontinuation_date()
     * @uses DutchBusinessEnterpriseV2::setDate_since()
     * @uses DutchBusinessEnterpriseV2::setPersonnel()
     * @uses DutchBusinessEnterpriseV2::setRemarks()
     * @uses DutchBusinessEnterpriseV2::setSbi_codes()
     * @uses DutchBusinessEnterpriseV2::setTrade_names()
     * @param string $name
     * @param string $registration
     * @param string $legal_form_text
     * @param string $activity
     * @param string $description
     * @param \Webservices\StructType\DutchBusinessDateV2 $incorporation_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $founding_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $discontinuation_date
     * @param \Webservices\StructType\DutchBusinessDateV2 $date_since
     * @param \Webservices\StructType\DutchBusinessPersonnelInfoV2 $personnel
     * @param \Webservices\ArrayType\StringArray $remarks
     * @param \Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes
     * @param \Webservices\ArrayType\StringArray $trade_names
     */
    public function __construct($name = null, $registration = null, $legal_form_text = null, $activity = null, $description = null, \Webservices\StructType\DutchBusinessDateV2 $incorporation_date = null, \Webservices\StructType\DutchBusinessDateV2 $founding_date = null, \Webservices\StructType\DutchBusinessDateV2 $discontinuation_date = null, \Webservices\StructType\DutchBusinessDateV2 $date_since = null, \Webservices\StructType\DutchBusinessPersonnelInfoV2 $personnel = null, \Webservices\ArrayType\StringArray $remarks = null, \Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes = null, \Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this
            ->setName($name)
            ->setRegistration($registration)
            ->setLegal_form_text($legal_form_text)
            ->setActivity($activity)
            ->setDescription($description)
            ->setIncorporation_date($incorporation_date)
            ->setFounding_date($founding_date)
            ->setDiscontinuation_date($discontinuation_date)
            ->setDate_since($date_since)
            ->setPersonnel($personnel)
            ->setRemarks($remarks)
            ->setSbi_codes($sbi_codes)
            ->setTrade_names($trade_names);
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
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
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
     * Get registration value
     * @return string|null
     */
    public function getRegistration()
    {
        return $this->registration;
    }
    /**
     * Set registration value
     * @param string $registration
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setRegistration($registration = null)
    {
        // validation for constraint: string
        if (!is_null($registration) && !is_string($registration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration)), __LINE__);
        }
        $this->registration = $registration;
        return $this;
    }
    /**
     * Get legal_form_text value
     * @return string|null
     */
    public function getLegal_form_text()
    {
        return $this->legal_form_text;
    }
    /**
     * Set legal_form_text value
     * @param string $legal_form_text
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setLegal_form_text($legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_text) && !is_string($legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_text)), __LINE__);
        }
        $this->legal_form_text = $legal_form_text;
        return $this;
    }
    /**
     * Get activity value
     * @return string|null
     */
    public function getActivity()
    {
        return $this->activity;
    }
    /**
     * Set activity value
     * @param string $activity
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setActivity($activity = null)
    {
        // validation for constraint: string
        if (!is_null($activity) && !is_string($activity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($activity)), __LINE__);
        }
        $this->activity = $activity;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get incorporation_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getIncorporation_date()
    {
        return $this->incorporation_date;
    }
    /**
     * Set incorporation_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $incorporation_date
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setIncorporation_date(\Webservices\StructType\DutchBusinessDateV2 $incorporation_date = null)
    {
        $this->incorporation_date = $incorporation_date;
        return $this;
    }
    /**
     * Get founding_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getFounding_date()
    {
        return $this->founding_date;
    }
    /**
     * Set founding_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $founding_date
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setFounding_date(\Webservices\StructType\DutchBusinessDateV2 $founding_date = null)
    {
        $this->founding_date = $founding_date;
        return $this;
    }
    /**
     * Get discontinuation_date value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDiscontinuation_date()
    {
        return $this->discontinuation_date;
    }
    /**
     * Set discontinuation_date value
     * @param \Webservices\StructType\DutchBusinessDateV2 $discontinuation_date
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setDiscontinuation_date(\Webservices\StructType\DutchBusinessDateV2 $discontinuation_date = null)
    {
        $this->discontinuation_date = $discontinuation_date;
        return $this;
    }
    /**
     * Get date_since value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDate_since()
    {
        return $this->date_since;
    }
    /**
     * Set date_since value
     * @param \Webservices\StructType\DutchBusinessDateV2 $date_since
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setDate_since(\Webservices\StructType\DutchBusinessDateV2 $date_since = null)
    {
        $this->date_since = $date_since;
        return $this;
    }
    /**
     * Get personnel value
     * @return \Webservices\StructType\DutchBusinessPersonnelInfoV2|null
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
    /**
     * Set personnel value
     * @param \Webservices\StructType\DutchBusinessPersonnelInfoV2 $personnel
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setPersonnel(\Webservices\StructType\DutchBusinessPersonnelInfoV2 $personnel = null)
    {
        $this->personnel = $personnel;
        return $this;
    }
    /**
     * Get remarks value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param \Webservices\ArrayType\StringArray $remarks
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setRemarks(\Webservices\ArrayType\StringArray $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Get sbi_codes value
     * @return \Webservices\ArrayType\DutchBusinessSbiCodeV2Array|null
     */
    public function getSbi_codes()
    {
        return $this->sbi_codes;
    }
    /**
     * Set sbi_codes value
     * @param \Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setSbi_codes(\Webservices\ArrayType\DutchBusinessSbiCodeV2Array $sbi_codes = null)
    {
        $this->sbi_codes = $sbi_codes;
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
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
     */
    public function setTrade_names(\Webservices\ArrayType\StringArray $trade_names = null)
    {
        $this->trade_names = $trade_names;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessEnterpriseV2
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
