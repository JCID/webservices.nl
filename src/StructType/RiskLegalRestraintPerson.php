<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskLegalRestraintPerson StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RiskLegalRestraintPerson extends AbstractStructBase
{
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
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
     * The birth_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birth_date;
    /**
     * Constructor method for RiskLegalRestraintPerson
     * @uses RiskLegalRestraintPerson::setFirst_name()
     * @uses RiskLegalRestraintPerson::setPrefix()
     * @uses RiskLegalRestraintPerson::setLast_name()
     * @uses RiskLegalRestraintPerson::setBirth_date()
     * @param string $first_name
     * @param string $prefix
     * @param string $last_name
     * @param string $birth_date
     */
    public function __construct($first_name = null, $prefix = null, $last_name = null, $birth_date = null)
    {
        $this
            ->setFirst_name($first_name)
            ->setPrefix($prefix)
            ->setLast_name($last_name)
            ->setBirth_date($birth_date);
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
     * @return \Webservices\StructType\RiskLegalRestraintPerson
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
     * @return \Webservices\StructType\RiskLegalRestraintPerson
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
     * @return \Webservices\StructType\RiskLegalRestraintPerson
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
     * @return \Webservices\StructType\RiskLegalRestraintPerson
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RiskLegalRestraintPerson
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
