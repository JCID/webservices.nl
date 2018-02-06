<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceRoleReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceRoleReference extends AbstractStructBase
{
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $role;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\ComplianceDate
     */
    public $start_date;
    /**
     * The end_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\ComplianceDate
     */
    public $end_date;
    /**
     * Constructor method for ComplianceRoleReference
     * @uses ComplianceRoleReference::setRole()
     * @uses ComplianceRoleReference::setCountry()
     * @uses ComplianceRoleReference::setStart_date()
     * @uses ComplianceRoleReference::setEnd_date()
     * @param string $role
     * @param string $country
     * @param \Webservices\StructType\ComplianceDate $start_date
     * @param \Webservices\StructType\ComplianceDate $end_date
     */
    public function __construct($role = null, $country = null, \Webservices\StructType\ComplianceDate $start_date = null, \Webservices\StructType\ComplianceDate $end_date = null)
    {
        $this
            ->setRole($role)
            ->setCountry($country)
            ->setStart_date($start_date)
            ->setEnd_date($end_date);
    }
    /**
     * Get role value
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \Webservices\StructType\ComplianceRoleReference
     */
    public function setRole($role = null)
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role)), __LINE__);
        }
        $this->role = $role;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\ComplianceRoleReference
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get start_date value
     * @return \Webservices\StructType\ComplianceDate|null
     */
    public function getStart_date()
    {
        return $this->start_date;
    }
    /**
     * Set start_date value
     * @param \Webservices\StructType\ComplianceDate $start_date
     * @return \Webservices\StructType\ComplianceRoleReference
     */
    public function setStart_date(\Webservices\StructType\ComplianceDate $start_date = null)
    {
        $this->start_date = $start_date;
        return $this;
    }
    /**
     * Get end_date value
     * @return \Webservices\StructType\ComplianceDate|null
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }
    /**
     * Set end_date value
     * @param \Webservices\StructType\ComplianceDate $end_date
     * @return \Webservices\StructType\ComplianceRoleReference
     */
    public function setEnd_date(\Webservices\StructType\ComplianceDate $end_date = null)
    {
        $this->end_date = $end_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceRoleReference
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
