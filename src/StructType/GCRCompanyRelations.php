<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyRelations StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyRelations extends AbstractStructBase
{
    /**
     * The companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCompanyArray
     */
    public $companies;
    /**
     * The persons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRPersonArray
     */
    public $persons;
    /**
     * Constructor method for GCRCompanyRelations
     * @uses GCRCompanyRelations::setCompanies()
     * @uses GCRCompanyRelations::setPersons()
     * @param \Webservices\ArrayType\GCRCompanyArray $companies
     * @param \Webservices\ArrayType\GCRPersonArray $persons
     */
    public function __construct(\Webservices\ArrayType\GCRCompanyArray $companies = null, \Webservices\ArrayType\GCRPersonArray $persons = null)
    {
        $this
            ->setCompanies($companies)
            ->setPersons($persons);
    }
    /**
     * Get companies value
     * @return \Webservices\ArrayType\GCRCompanyArray|null
     */
    public function getCompanies()
    {
        return $this->companies;
    }
    /**
     * Set companies value
     * @param \Webservices\ArrayType\GCRCompanyArray $companies
     * @return \Webservices\StructType\GCRCompanyRelations
     */
    public function setCompanies(\Webservices\ArrayType\GCRCompanyArray $companies = null)
    {
        $this->companies = $companies;
        return $this;
    }
    /**
     * Get persons value
     * @return \Webservices\ArrayType\GCRPersonArray|null
     */
    public function getPersons()
    {
        return $this->persons;
    }
    /**
     * Set persons value
     * @param \Webservices\ArrayType\GCRPersonArray $persons
     * @return \Webservices\StructType\GCRCompanyRelations
     */
    public function setPersons(\Webservices\ArrayType\GCRPersonArray $persons = null)
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
     * @return \Webservices\StructType\GCRCompanyRelations
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
