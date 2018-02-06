<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleRegistration StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleRegistration extends AbstractStructBase
{
    /**
     * The date_apk_due_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_apk_due_date;
    /**
     * The date_first_issuing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_first_issuing;
    /**
     * The date_first_admission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_first_admission;
    /**
     * The date_suspension_end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_suspension_end_date;
    /**
     * The date_tachograph_expiration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_tachograph_expiration;
    /**
     * The date_latest_name_registration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_latest_name_registration;
    /**
     * The ownerships
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ownerships;
    /**
     * Constructor method for DutchVehicleRegistration
     * @uses DutchVehicleRegistration::setDate_apk_due_date()
     * @uses DutchVehicleRegistration::setDate_first_issuing()
     * @uses DutchVehicleRegistration::setDate_first_admission()
     * @uses DutchVehicleRegistration::setDate_suspension_end_date()
     * @uses DutchVehicleRegistration::setDate_tachograph_expiration()
     * @uses DutchVehicleRegistration::setDate_latest_name_registration()
     * @uses DutchVehicleRegistration::setOwnerships()
     * @param string $date_apk_due_date
     * @param string $date_first_issuing
     * @param string $date_first_admission
     * @param string $date_suspension_end_date
     * @param string $date_tachograph_expiration
     * @param string $date_latest_name_registration
     * @param int $ownerships
     */
    public function __construct($date_apk_due_date = null, $date_first_issuing = null, $date_first_admission = null, $date_suspension_end_date = null, $date_tachograph_expiration = null, $date_latest_name_registration = null, $ownerships = null)
    {
        $this
            ->setDate_apk_due_date($date_apk_due_date)
            ->setDate_first_issuing($date_first_issuing)
            ->setDate_first_admission($date_first_admission)
            ->setDate_suspension_end_date($date_suspension_end_date)
            ->setDate_tachograph_expiration($date_tachograph_expiration)
            ->setDate_latest_name_registration($date_latest_name_registration)
            ->setOwnerships($ownerships);
    }
    /**
     * Get date_apk_due_date value
     * @return string|null
     */
    public function getDate_apk_due_date()
    {
        return $this->date_apk_due_date;
    }
    /**
     * Set date_apk_due_date value
     * @param string $date_apk_due_date
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setDate_apk_due_date($date_apk_due_date = null)
    {
        // validation for constraint: string
        if (!is_null($date_apk_due_date) && !is_string($date_apk_due_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_apk_due_date)), __LINE__);
        }
        $this->date_apk_due_date = $date_apk_due_date;
        return $this;
    }
    /**
     * Get date_first_issuing value
     * @return string|null
     */
    public function getDate_first_issuing()
    {
        return $this->date_first_issuing;
    }
    /**
     * Set date_first_issuing value
     * @param string $date_first_issuing
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setDate_first_issuing($date_first_issuing = null)
    {
        // validation for constraint: string
        if (!is_null($date_first_issuing) && !is_string($date_first_issuing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_first_issuing)), __LINE__);
        }
        $this->date_first_issuing = $date_first_issuing;
        return $this;
    }
    /**
     * Get date_first_admission value
     * @return string|null
     */
    public function getDate_first_admission()
    {
        return $this->date_first_admission;
    }
    /**
     * Set date_first_admission value
     * @param string $date_first_admission
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setDate_first_admission($date_first_admission = null)
    {
        // validation for constraint: string
        if (!is_null($date_first_admission) && !is_string($date_first_admission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_first_admission)), __LINE__);
        }
        $this->date_first_admission = $date_first_admission;
        return $this;
    }
    /**
     * Get date_suspension_end_date value
     * @return string|null
     */
    public function getDate_suspension_end_date()
    {
        return $this->date_suspension_end_date;
    }
    /**
     * Set date_suspension_end_date value
     * @param string $date_suspension_end_date
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setDate_suspension_end_date($date_suspension_end_date = null)
    {
        // validation for constraint: string
        if (!is_null($date_suspension_end_date) && !is_string($date_suspension_end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_suspension_end_date)), __LINE__);
        }
        $this->date_suspension_end_date = $date_suspension_end_date;
        return $this;
    }
    /**
     * Get date_tachograph_expiration value
     * @return string|null
     */
    public function getDate_tachograph_expiration()
    {
        return $this->date_tachograph_expiration;
    }
    /**
     * Set date_tachograph_expiration value
     * @param string $date_tachograph_expiration
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setDate_tachograph_expiration($date_tachograph_expiration = null)
    {
        // validation for constraint: string
        if (!is_null($date_tachograph_expiration) && !is_string($date_tachograph_expiration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_tachograph_expiration)), __LINE__);
        }
        $this->date_tachograph_expiration = $date_tachograph_expiration;
        return $this;
    }
    /**
     * Get date_latest_name_registration value
     * @return string|null
     */
    public function getDate_latest_name_registration()
    {
        return $this->date_latest_name_registration;
    }
    /**
     * Set date_latest_name_registration value
     * @param string $date_latest_name_registration
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setDate_latest_name_registration($date_latest_name_registration = null)
    {
        // validation for constraint: string
        if (!is_null($date_latest_name_registration) && !is_string($date_latest_name_registration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_latest_name_registration)), __LINE__);
        }
        $this->date_latest_name_registration = $date_latest_name_registration;
        return $this;
    }
    /**
     * Get ownerships value
     * @return int|null
     */
    public function getOwnerships()
    {
        return $this->ownerships;
    }
    /**
     * Set ownerships value
     * @param int $ownerships
     * @return \Webservices\StructType\DutchVehicleRegistration
     */
    public function setOwnerships($ownerships = null)
    {
        // validation for constraint: int
        if (!is_null($ownerships) && !is_numeric($ownerships)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ownerships)), __LINE__);
        }
        $this->ownerships = $ownerships;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleRegistration
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
