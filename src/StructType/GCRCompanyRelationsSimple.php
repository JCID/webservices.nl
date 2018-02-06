<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyRelationsSimple StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyRelationsSimple extends AbstractStructBase
{
    /**
     * The companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCompanySimpleArray
     */
    public $companies;
    /**
     * The persons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRPersonSimpleArray
     */
    public $persons;
    /**
     * Constructor method for GCRCompanyRelationsSimple
     * @uses GCRCompanyRelationsSimple::setCompanies()
     * @uses GCRCompanyRelationsSimple::setPersons()
     * @param \Webservices\ArrayType\GCRCompanySimpleArray $companies
     * @param \Webservices\ArrayType\GCRPersonSimpleArray $persons
     */
    public function __construct(\Webservices\ArrayType\GCRCompanySimpleArray $companies = null, \Webservices\ArrayType\GCRPersonSimpleArray $persons = null)
    {
        $this
            ->setCompanies($companies)
            ->setPersons($persons);
    }
    /**
     * Get companies value
     * @return \Webservices\ArrayType\GCRCompanySimpleArray|null
     */
    public function getCompanies()
    {
        return $this->companies;
    }
    /**
     * Set companies value
     * @param \Webservices\ArrayType\GCRCompanySimpleArray $companies
     * @return \Webservices\StructType\GCRCompanyRelationsSimple
     */
    public function setCompanies(\Webservices\ArrayType\GCRCompanySimpleArray $companies = null)
    {
        $this->companies = $companies;
        return $this;
    }
    /**
     * Get persons value
     * @return \Webservices\ArrayType\GCRPersonSimpleArray|null
     */
    public function getPersons()
    {
        return $this->persons;
    }
    /**
     * Set persons value
     * @param \Webservices\ArrayType\GCRPersonSimpleArray $persons
     * @return \Webservices\StructType\GCRCompanyRelationsSimple
     */
    public function setPersons(\Webservices\ArrayType\GCRPersonSimpleArray $persons = null)
    {
        $this->persons = $persons;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCompanyRelationsSimple
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
