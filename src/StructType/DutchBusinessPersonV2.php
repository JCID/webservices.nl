<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPersonV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPersonV2 extends AbstractStructBase
{
    /**
     * The full_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $full_name;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $title;
    /**
     * The initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $initials;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * The gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender;
    /**
     * The date_deceased
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $date_deceased;
    /**
     * The date_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessDateV2
     */
    public $date_of_birth;
    /**
     * The place_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $place_of_birth;
    /**
     * The country_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country_of_birth;
    /**
     * Constructor method for DutchBusinessPersonV2
     * @uses DutchBusinessPersonV2::setFull_name()
     * @uses DutchBusinessPersonV2::setFirst_name()
     * @uses DutchBusinessPersonV2::setTitle()
     * @uses DutchBusinessPersonV2::setInitials()
     * @uses DutchBusinessPersonV2::setLast_name()
     * @uses DutchBusinessPersonV2::setGender()
     * @uses DutchBusinessPersonV2::setDate_deceased()
     * @uses DutchBusinessPersonV2::setDate_of_birth()
     * @uses DutchBusinessPersonV2::setPlace_of_birth()
     * @uses DutchBusinessPersonV2::setCountry_of_birth()
     * @param string $full_name
     * @param string $first_name
     * @param string $title
     * @param string $initials
     * @param string $last_name
     * @param string $gender
     * @param \Webservices\StructType\DutchBusinessDateV2 $date_deceased
     * @param \Webservices\StructType\DutchBusinessDateV2 $date_of_birth
     * @param string $place_of_birth
     * @param string $country_of_birth
     */
    public function __construct($full_name = null, $first_name = null, $title = null, $initials = null, $last_name = null, $gender = null, \Webservices\StructType\DutchBusinessDateV2 $date_deceased = null, \Webservices\StructType\DutchBusinessDateV2 $date_of_birth = null, $place_of_birth = null, $country_of_birth = null)
    {
        $this
            ->setFull_name($full_name)
            ->setFirst_name($first_name)
            ->setTitle($title)
            ->setInitials($initials)
            ->setLast_name($last_name)
            ->setGender($gender)
            ->setDate_deceased($date_deceased)
            ->setDate_of_birth($date_of_birth)
            ->setPlace_of_birth($place_of_birth)
            ->setCountry_of_birth($country_of_birth);
    }
    /**
     * Get full_name value
     * @return string|null
     */
    public function getFull_name()
    {
        return $this->full_name;
    }
    /**
     * Set full_name value
     * @param string $full_name
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setFull_name($full_name = null)
    {
        // validation for constraint: string
        if (!is_null($full_name) && !is_string($full_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($full_name)), __LINE__);
        }
        $this->full_name = $full_name;
        return $this;
    }
    /**
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->initials;
    }
    /**
     * Set initials value
     * @param string $initials
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initials)), __LINE__);
        }
        $this->initials = $initials;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
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
     * @return \Webservices\StructType\DutchBusinessPersonV2
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
     * Get date_deceased value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDate_deceased()
    {
        return $this->date_deceased;
    }
    /**
     * Set date_deceased value
     * @param \Webservices\StructType\DutchBusinessDateV2 $date_deceased
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setDate_deceased(\Webservices\StructType\DutchBusinessDateV2 $date_deceased = null)
    {
        $this->date_deceased = $date_deceased;
        return $this;
    }
    /**
     * Get date_of_birth value
     * @return \Webservices\StructType\DutchBusinessDateV2|null
     */
    public function getDate_of_birth()
    {
        return $this->date_of_birth;
    }
    /**
     * Set date_of_birth value
     * @param \Webservices\StructType\DutchBusinessDateV2 $date_of_birth
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setDate_of_birth(\Webservices\StructType\DutchBusinessDateV2 $date_of_birth = null)
    {
        $this->date_of_birth = $date_of_birth;
        return $this;
    }
    /**
     * Get place_of_birth value
     * @return string|null
     */
    public function getPlace_of_birth()
    {
        return $this->place_of_birth;
    }
    /**
     * Set place_of_birth value
     * @param string $place_of_birth
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setPlace_of_birth($place_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($place_of_birth) && !is_string($place_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($place_of_birth)), __LINE__);
        }
        $this->place_of_birth = $place_of_birth;
        return $this;
    }
    /**
     * Get country_of_birth value
     * @return string|null
     */
    public function getCountry_of_birth()
    {
        return $this->country_of_birth;
    }
    /**
     * Set country_of_birth value
     * @param string $country_of_birth
     * @return \Webservices\StructType\DutchBusinessPersonV2
     */
    public function setCountry_of_birth($country_of_birth = null)
    {
        // validation for constraint: string
        if (!is_null($country_of_birth) && !is_string($country_of_birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_of_birth)), __LINE__);
        }
        $this->country_of_birth = $country_of_birth;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPersonV2
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
