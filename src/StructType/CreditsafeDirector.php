<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeDirector StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeDirector extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender;
    /**
     * The appointment_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $appointment_date;
    /**
     * The date_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_birth;
    /**
     * The position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $position;
    /**
     * Constructor method for CreditsafeDirector
     * @uses CreditsafeDirector::setName()
     * @uses CreditsafeDirector::setAddress()
     * @uses CreditsafeDirector::setGender()
     * @uses CreditsafeDirector::setAppointment_date()
     * @uses CreditsafeDirector::setDate_of_birth()
     * @uses CreditsafeDirector::setPosition()
     * @param string $name
     * @param string $address
     * @param string $gender
     * @param string $appointment_date
     * @param string $date_of_birth
     * @param string $position
     */
    public function __construct($name = null, $address = null, $gender = null, $appointment_date = null, $date_of_birth = null, $position = null)
    {
        $this
            ->setName($name)
            ->setAddress($address)
            ->setGender($gender)
            ->setAppointment_date($appointment_date)
            ->setDate_of_birth($date_of_birth)
            ->setPosition($position);
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
     * @return \Webservices\StructType\CreditsafeDirector
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
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Webservices\StructType\CreditsafeDirector
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param string $gender
     * @return \Webservices\StructType\CreditsafeDirector
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        return $this;
    }
    /**
     * Get appointment_date value
     * @return string|null
     */
    public function getAppointment_date()
    {
        return $this->appointment_date;
    }
    /**
     * Set appointment_date value
     * @param string $appointment_date
     * @return \Webservices\StructType\CreditsafeDirector
     */
    public function setAppointment_date($appointment_date = null)
    {
        // validation for constraint: string
        if (!is_null($appointment_date) && !is_string($appointment_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appointment_date)), __LINE__);
        }
        $this->appointment_date = $appointment_date;
        return $this;
    }
    /**
     * Get date_of_birth value
     * @return string|null
     */
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }
    /**
     * Set date_of_birth value
     * @param string $date_of_birth
     * @return \Webservices\StructType\CreditsafeDirector
     */
    public function setDate_of_birth($date_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_birth) && !is_string($date_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_birth)), __LINE__);
        }
        $this->date_of_birth = $date_of_birth;
        return $this;
    }
    /**
     * Get position value
     * @return string|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param string $position
     * @return \Webservices\StructType\CreditsafeDirector
     */
    public function setPosition($position = null)
    {
        // validation for constraint: string
        if (!is_null($position) && !is_string($position)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($position)), __LINE__);
        }
        $this->position = $position;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeDirector
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
