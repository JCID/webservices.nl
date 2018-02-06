<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeRegisteredContractor StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeRegisteredContractor extends AbstractStructBase
{
    /**
     * The registration_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $registration_number;
    /**
     * The contractor_description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contractor_description;
    /**
     * The striking_off_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $striking_off_date;
    /**
     * Constructor method for CreditsafeBeRegisteredContractor
     * @uses CreditsafeBeRegisteredContractor::setRegistration_number()
     * @uses CreditsafeBeRegisteredContractor::setContractor_description()
     * @uses CreditsafeBeRegisteredContractor::setStriking_off_date()
     * @param int $registration_number
     * @param string $contractor_description
     * @param string $striking_off_date
     */
    public function __construct($registration_number = null, $contractor_description = null, $striking_off_date = null)
    {
        $this
            ->setRegistration_number($registration_number)
            ->setContractor_description($contractor_description)
            ->setStriking_off_date($striking_off_date);
    }
    /**
     * Get registration_number value
     * @return int|null
     */
    public function getRegistration_number()
    {
        return $this->registration_number;
    }
    /**
     * Set registration_number value
     * @param int $registration_number
     * @return \Webservices\StructType\CreditsafeBeRegisteredContractor
     */
    public function setRegistration_number($registration_number = null)
    {
        // validation for constraint: int
        if (!is_null($registration_number) && !is_numeric($registration_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($registration_number)), __LINE__);
        }
        $this->registration_number = $registration_number;
        return $this;
    }
    /**
     * Get contractor_description value
     * @return string|null
     */
    public function getContractor_description()
    {
        return $this->contractor_description;
    }
    /**
     * Set contractor_description value
     * @param string $contractor_description
     * @return \Webservices\StructType\CreditsafeBeRegisteredContractor
     */
    public function setContractor_description($contractor_description = null)
    {
        // validation for constraint: string
        if (!is_null($contractor_description) && !is_string($contractor_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contractor_description)), __LINE__);
        }
        $this->contractor_description = $contractor_description;
        return $this;
    }
    /**
     * Get striking_off_date value
     * @return string|null
     */
    public function getStriking_off_date()
    {
        return $this->striking_off_date;
    }
    /**
     * Set striking_off_date value
     * @param string $striking_off_date
     * @return \Webservices\StructType\CreditsafeBeRegisteredContractor
     */
    public function setStriking_off_date($striking_off_date = null)
    {
        // validation for constraint: string
        if (!is_null($striking_off_date) && !is_string($striking_off_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($striking_off_date)), __LINE__);
        }
        $this->striking_off_date = $striking_off_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeBeRegisteredContractor
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
