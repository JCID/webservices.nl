<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskInsolvencyRegistration StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskInsolvencyRegistration extends AbstractStructBase
{
    /**
     * The case_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $case_number;
    /**
     * The previous_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $previous_number;
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
     * The deptor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deptor;
    /**
     * The partner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $partner;
    /**
     * Constructor method for RiskInsolvencyRegistration
     * @uses RiskInsolvencyRegistration::setCase_number()
     * @uses RiskInsolvencyRegistration::setPrevious_number()
     * @uses RiskInsolvencyRegistration::setCourt()
     * @uses RiskInsolvencyRegistration::setJurisdiction()
     * @uses RiskInsolvencyRegistration::setDistrict()
     * @uses RiskInsolvencyRegistration::setDeptor()
     * @uses RiskInsolvencyRegistration::setPartner()
     * @param string $case_number
     * @param string $previous_number
     * @param string $court
     * @param string $jurisdiction
     * @param string $district
     * @param string $deptor
     * @param string $partner
     */
    public function __construct($case_number = null, $previous_number = null, $court = null, $jurisdiction = null, $district = null, $deptor = null, $partner = null)
    {
        $this
            ->setCase_number($case_number)
            ->setPrevious_number($previous_number)
            ->setCourt($court)
            ->setJurisdiction($jurisdiction)
            ->setDistrict($district)
            ->setDeptor($deptor)
            ->setPartner($partner);
    }
    /**
     * Get case_number value
     * @return string|null
     */
    public function getCase_number()
    {
        return $this->case_number;
    }
    /**
     * Set case_number value
     * @param string $case_number
     * @return \Webservices\StructType\RiskInsolvencyRegistration
     */
    public function setCase_number($case_number = null)
    {
        // validation for constraint: string
        if (!is_null($case_number) && !is_string($case_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($case_number)), __LINE__);
        }
        $this->case_number = $case_number;
        return $this;
    }
    /**
     * Get previous_number value
     * @return string|null
     */
    public function getPrevious_number()
    {
        return $this->previous_number;
    }
    /**
     * Set previous_number value
     * @param string $previous_number
     * @return \Webservices\StructType\RiskInsolvencyRegistration
     */
    public function setPrevious_number($previous_number = null)
    {
        // validation for constraint: string
        if (!is_null($previous_number) && !is_string($previous_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previous_number)), __LINE__);
        }
        $this->previous_number = $previous_number;
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
     * @return \Webservices\StructType\RiskInsolvencyRegistration
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
     * @return \Webservices\StructType\RiskInsolvencyRegistration
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
     * @return \Webservices\StructType\RiskInsolvencyRegistration
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
     * Get deptor value
     * @return string|null
     */
    public function getDeptor()
    {
        return $this->deptor;
    }
    /**
     * Set deptor value
     * @param string $deptor
     * @return \Webservices\StructType\RiskInsolvencyRegistration
     */
    public function setDeptor($deptor = null)
    {
        // validation for constraint: string
        if (!is_null($deptor) && !is_string($deptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deptor)), __LINE__);
        }
        $this->deptor = $deptor;
        return $this;
    }
    /**
     * Get partner value
     * @return string|null
     */
    public function getPartner()
    {
        return $this->partner;
    }
    /**
     * Set partner value
     * @param string $partner
     * @return \Webservices\StructType\RiskInsolvencyRegistration
     */
    public function setPartner($partner = null)
    {
        // validation for constraint: string
        if (!is_null($partner) && !is_string($partner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partner)), __LINE__);
        }
        $this->partner = $partner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskInsolvencyRegistration
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
