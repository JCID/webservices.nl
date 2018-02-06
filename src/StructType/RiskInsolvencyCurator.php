<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskInsolvencyCurator StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskInsolvencyCurator extends AbstractStructBase
{
    /**
     * The titles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $titles;
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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskAddress
     */
    public $address;
    /**
     * The telephone_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $telephone_number;
    /**
     * The fax_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fax_number;
    /**
     * The email_address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email_address;
    /**
     * The mutation_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mutation_date;
    /**
     * Constructor method for RiskInsolvencyCurator
     * @uses RiskInsolvencyCurator::setTitles()
     * @uses RiskInsolvencyCurator::setInitials()
     * @uses RiskInsolvencyCurator::setPrefix()
     * @uses RiskInsolvencyCurator::setLast_name()
     * @uses RiskInsolvencyCurator::setAddress()
     * @uses RiskInsolvencyCurator::setTelephone_number()
     * @uses RiskInsolvencyCurator::setFax_number()
     * @uses RiskInsolvencyCurator::setEmail_address()
     * @uses RiskInsolvencyCurator::setMutation_date()
     * @param string $titles
     * @param string $initials
     * @param string $prefix
     * @param string $last_name
     * @param \Webservices\StructType\RiskAddress $address
     * @param string $telephone_number
     * @param string $fax_number
     * @param string $email_address
     * @param string $mutation_date
     */
    public function __construct($titles = null, $initials = null, $prefix = null, $last_name = null, \Webservices\StructType\RiskAddress $address = null, $telephone_number = null, $fax_number = null, $email_address = null, $mutation_date = null)
    {
        $this
            ->setTitles($titles)
            ->setInitials($initials)
            ->setPrefix($prefix)
            ->setLast_name($last_name)
            ->setAddress($address)
            ->setTelephone_number($telephone_number)
            ->setFax_number($fax_number)
            ->setEmail_address($email_address)
            ->setMutation_date($mutation_date);
    }
    /**
     * Get titles value
     * @return string|null
     */
    public function getTitles()
    {
        return $this->titles;
    }
    /**
     * Set titles value
     * @param string $titles
     * @return \Webservices\StructType\RiskInsolvencyCurator
     */
    public function setTitles($titles = null)
    {
        // validation for constraint: string
        if (!is_null($titles) && !is_string($titles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($titles)), __LINE__);
        }
        $this->titles = $titles;
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
     * @return \Webservices\StructType\RiskInsolvencyCurator
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
     * @return \Webservices\StructType\RiskInsolvencyCurator
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
     * @return \Webservices\StructType\RiskInsolvencyCurator
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
     * Get address value
     * @return \Webservices\StructType\RiskAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\RiskAddress $address
     * @return \Webservices\StructType\RiskInsolvencyCurator
     */
    public function setAddress(\Webservices\StructType\RiskAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get telephone_number value
     * @return string|null
     */
    public function getTelephone_number()
    {
        return $this->telephone_number;
    }
    /**
     * Set telephone_number value
     * @param string $telephone_number
     * @return \Webservices\StructType\RiskInsolvencyCurator
     */
    public function setTelephone_number($telephone_number = null)
    {
        // validation for constraint: string
        if (!is_null($telephone_number) && !is_string($telephone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone_number)), __LINE__);
        }
        $this->telephone_number = $telephone_number;
        return $this;
    }
    /**
     * Get fax_number value
     * @return string|null
     */
    public function getFax_number()
    {
        return $this->fax_number;
    }
    /**
     * Set fax_number value
     * @param string $fax_number
     * @return \Webservices\StructType\RiskInsolvencyCurator
     */
    public function setFax_number($fax_number = null)
    {
        // validation for constraint: string
        if (!is_null($fax_number) && !is_string($fax_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax_number)), __LINE__);
        }
        $this->fax_number = $fax_number;
        return $this;
    }
    /**
     * Get email_address value
     * @return string|null
     */
    public function getEmail_address()
    {
        return $this->email_address;
    }
    /**
     * Set email_address value
     * @param string $email_address
     * @return \Webservices\StructType\RiskInsolvencyCurator
     */
    public function setEmail_address($email_address = null)
    {
        // validation for constraint: string
        if (!is_null($email_address) && !is_string($email_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email_address)), __LINE__);
        }
        $this->email_address = $email_address;
        return $this;
    }
    /**
     * Get mutation_date value
     * @return string|null
     */
    public function getMutation_date()
    {
        return $this->mutation_date;
    }
    /**
     * Set mutation_date value
     * @param string $mutation_date
     * @return \Webservices\StructType\RiskInsolvencyCurator
     */
    public function setMutation_date($mutation_date = null)
    {
        // validation for constraint: string
        if (!is_null($mutation_date) && !is_string($mutation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mutation_date)), __LINE__);
        }
        $this->mutation_date = $mutation_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskInsolvencyCurator
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
