<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyConcernedPerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyConcernedPerson extends AbstractStructBase
{
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $initials;
    /**
     * The prefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prefix;
    /**
     * The last_name
     * @var string
     */
    public $last_name;
    /**
     * The addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyAddresses
     */
    public $addresses;
    /**
     * The birth_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_date;
    /**
     * The birth_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_city;
    /**
     * The birth_country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_country;
    /**
     * The deceased_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deceased_date;
    /**
     * Constructor method for InsolvencyConcernedPerson
     * @uses InsolvencyConcernedPerson::setFirst_name()
     * @uses InsolvencyConcernedPerson::setInitials()
     * @uses InsolvencyConcernedPerson::setPrefix()
     * @uses InsolvencyConcernedPerson::setLast_name()
     * @uses InsolvencyConcernedPerson::setAddresses()
     * @uses InsolvencyConcernedPerson::setBirth_date()
     * @uses InsolvencyConcernedPerson::setBirth_city()
     * @uses InsolvencyConcernedPerson::setBirth_country()
     * @uses InsolvencyConcernedPerson::setDeceased_date()
     * @param string $first_name
     * @param string $initials
     * @param string $prefix
     * @param string $last_name
     * @param \Webservices\StructType\InsolvencyAddresses $addresses
     * @param string $birth_date
     * @param string $birth_city
     * @param string $birth_country
     * @param string $deceased_date
     */
    public function __construct($first_name = null, $initials = null, $prefix = null, $last_name = null, \Webservices\StructType\InsolvencyAddresses $addresses = null, $birth_date = null, $birth_city = null, $birth_country = null, $deceased_date = null)
    {
        $this
            ->setFirst_name($first_name)
            ->setInitials($initials)
            ->setPrefix($prefix)
            ->setLast_name($last_name)
            ->setAddresses($addresses)
            ->setBirth_date($birth_date)
            ->setBirth_city($birth_city)
            ->setBirth_country($birth_country)
            ->setDeceased_date($deceased_date);
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
     * @return \Webservices\StructType\InsolvencyConcernedPerson
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
     * @return \Webservices\StructType\InsolvencyConcernedPerson
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
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Webservices\StructType\InsolvencyConcernedPerson
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
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
     * @return \Webservices\StructType\InsolvencyConcernedPerson
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
     * Get addresses value
     * @return \Webservices\StructType\InsolvencyAddresses|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * Set addresses value
     * @param \Webservices\StructType\InsolvencyAddresses $addresses
     * @return \Webservices\StructType\InsolvencyConcernedPerson
     */
    public function setAddresses(\Webservices\StructType\InsolvencyAddresses $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Get birth_date value
     * @return string|null
     */
    public function getBirth_date()
    {
        return $this->birth_date;
    }
    /**
     * Set birth_date value
     * @param string $birth_date
     * @return \Webservices\StructType\InsolvencyConcernedPerson
     */
    public function setBirth_date($birth_date = null)
    {
        // validation for constraint: string
        if (!is_null($birth_date) && !is_string($birth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_date)), __LINE__);
        }
        $this->birth_date = $birth_date;
        return $this;
    }
    /**
     * Get birth_city value
     * @return string|null
     */
    public function getBirth_city()
    {
        return $this->birth_city;
    }
    /**
     * Set birth_city value
     * @param string $birth_city
     * @return \Webservices\StructType\InsolvencyConcernedPerson
     */
    public function setBirth_city($birth_city = null)
    {
        // validation for constraint: string
        if (!is_null($birth_city) && !is_string($birth_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_city)), __LINE__);
        }
        $this->birth_city = $birth_city;
        return $this;
    }
    /**
     * Get birth_country value
     * @return string|null
     */
    public function getBirth_country()
    {
        return $this->birth_country;
    }
    /**
     * Set birth_country value
     * @param string $birth_country
     * @return \Webservices\StructType\InsolvencyConcernedPerson
     */
    public function setBirth_country($birth_country = null)
    {
        // validation for constraint: string
        if (!is_null($birth_country) && !is_string($birth_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_country)), __LINE__);
        }
        $this->birth_country = $birth_country;
        return $this;
    }
    /**
     * Get deceased_date value
     * @return string|null
     */
    public function getDeceased_date()
    {
        return $this->deceased_date;
    }
    /**
     * Set deceased_date value
     * @param string $deceased_date
     * @return \Webservices\StructType\InsolvencyConcernedPerson
     */
    public function setDeceased_date($deceased_date = null)
    {
        // validation for constraint: string
        if (!is_null($deceased_date) && !is_string($deceased_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deceased_date)), __LINE__);
        }
        $this->deceased_date = $deceased_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyConcernedPerson
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
