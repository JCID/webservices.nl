<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskLegalRestraintAdministrator StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskLegalRestraintAdministrator extends AbstractStructBase
{
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $role;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\RiskAddress
     */
    public $address;
    /**
     * Constructor method for RiskLegalRestraintAdministrator
     * @uses RiskLegalRestraintAdministrator::setRole()
     * @uses RiskLegalRestraintAdministrator::setName()
     * @uses RiskLegalRestraintAdministrator::setAddress()
     * @param string $role
     * @param string $name
     * @param \Webservices\StructType\RiskAddress $address
     */
    public function __construct($role = null, $name = null, \Webservices\StructType\RiskAddress $address = null)
    {
        $this
            ->setRole($role)
            ->setName($name)
            ->setAddress($address);
    }
    /**
     * Get role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \Webservices\StructType\RiskLegalRestraintAdministrator
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
     * @return \Webservices\StructType\RiskLegalRestraintAdministrator
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
     * @return \Webservices\StructType\RiskAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\RiskAddress $address
     * @return \Webservices\StructType\RiskLegalRestraintAdministrator
     */
    public function setAddress(\Webservices\StructType\RiskAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskLegalRestraintAdministrator
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
