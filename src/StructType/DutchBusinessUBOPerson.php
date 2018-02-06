<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOPerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOPerson extends AbstractStructBase
{
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $key;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $first_name;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $last_name;
    /**
     * The roles
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\DutchBusinessUBORoleArray
     */
    public $roles;
    /**
     * The middle_names
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $middle_names;
    /**
     * The gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gender;
    /**
     * The date_of_birth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
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
     * The date_of_death
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_of_death;
    /**
     * Constructor method for DutchBusinessUBOPerson
     * @uses DutchBusinessUBOPerson::setKey()
     * @uses DutchBusinessUBOPerson::setFirst_name()
     * @uses DutchBusinessUBOPerson::setLast_name()
     * @uses DutchBusinessUBOPerson::setRoles()
     * @uses DutchBusinessUBOPerson::setMiddle_names()
     * @uses DutchBusinessUBOPerson::setGender()
     * @uses DutchBusinessUBOPerson::setDate_of_birth()
     * @uses DutchBusinessUBOPerson::setPlace_of_birth()
     * @uses DutchBusinessUBOPerson::setCountry_of_birth()
     * @uses DutchBusinessUBOPerson::setDate_of_death()
     * @param string $key
     * @param string $first_name
     * @param string $last_name
     * @param \Webservices\ArrayType\DutchBusinessUBORoleArray $roles
     * @param string $middle_names
     * @param string $gender
     * @param string $date_of_birth
     * @param string $place_of_birth
     * @param string $country_of_birth
     * @param string $date_of_death
     */
    public function __construct($key = null, $first_name = null, $last_name = null, \Webservices\ArrayType\DutchBusinessUBORoleArray $roles = null, $middle_names = null, $gender = null, $date_of_birth = null, $place_of_birth = null, $country_of_birth = null, $date_of_death = null)
    {
        $this
            ->setKey($key)
            ->setFirst_name($first_name)
            ->setLast_name($last_name)
            ->setRoles($roles)
            ->setMiddle_names($middle_names)
            ->setGender($gender)
            ->setDate_of_birth($date_of_birth)
            ->setPlace_of_birth($place_of_birth)
            ->setCountry_of_birth($country_of_birth)
            ->setDate_of_death($date_of_death);
    }
    /**
     * Get key value
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Webservices\StructType\DutchBusinessUBOPerson
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get first_name value
     * @return string
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
     * Get last_name value
     * @return string
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
     * Get roles value
     * @return \Webservices\ArrayType\DutchBusinessUBORoleArray
     */
    public function getRoles()
    {
        return $this->roles;
    }
    /**
     * Set roles value
     * @param \Webservices\ArrayType\DutchBusinessUBORoleArray $roles
     * @return \Webservices\StructType\DutchBusinessUBOPerson
     */
    public function setRoles(\Webservices\ArrayType\DutchBusinessUBORoleArray $roles = null)
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * Get middle_names value
     * @return string|null
     */
    public function getMiddle_names()
    {
        return $this->middle_names;
    }
    /**
     * Set middle_names value
     * @param string $middle_names
     * @return \Webservices\StructType\DutchBusinessUBOPerson
     */
    public function setMiddle_names($middle_names = null)
    {
        // validation for constraint: string
        if (!is_null($middle_names) && !is_string($middle_names)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middle_names)), __LINE__);
        }
        $this->middle_names = $middle_names;
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
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
     * Get date_of_death value
     * @return string|null
     */
    public function getDate_of_death()
    {
        return $this->date_of_death;
    }
    /**
     * Set date_of_death value
     * @param string $date_of_death
     * @return \Webservices\StructType\DutchBusinessUBOPerson
     */
    public function setDate_of_death($date_of_death = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_death) && !is_string($date_of_death)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_of_death)), __LINE__);
        }
        $this->date_of_death = $date_of_death;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOPerson
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
