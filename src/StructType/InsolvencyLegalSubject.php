<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyLegalSubject StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyLegalSubject extends AbstractStructBase
{
    /**
     * The natural_person
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyConcernedPerson
     */
    public $natural_person;
    /**
     * The legal_entity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyAffectedCompany
     */
    public $legal_entity;
    /**
     * Constructor method for InsolvencyLegalSubject
     * @uses InsolvencyLegalSubject::setNatural_person()
     * @uses InsolvencyLegalSubject::setLegal_entity()
     * @param \Webservices\StructType\InsolvencyConcernedPerson $natural_person
     * @param \Webservices\StructType\InsolvencyAffectedCompany $legal_entity
     */
    public function __construct(\Webservices\StructType\InsolvencyConcernedPerson $natural_person = null, \Webservices\StructType\InsolvencyAffectedCompany $legal_entity = null)
    {
        $this
            ->setNatural_person($natural_person)
            ->setLegal_entity($legal_entity);
    }
    /**
     * Get natural_person value
     * @return \Webservices\StructType\InsolvencyConcernedPerson|null
     */
    public function getNatural_person()
    {
        return $this->natural_person;
    }
    /**
     * Set natural_person value
     * @param \Webservices\StructType\InsolvencyConcernedPerson $natural_person
     * @return \Webservices\StructType\InsolvencyLegalSubject
     */
    public function setNatural_person(\Webservices\StructType\InsolvencyConcernedPerson $natural_person = null)
    {
        $this->natural_person = $natural_person;
        return $this;
    }
    /**
     * Get legal_entity value
     * @return \Webservices\StructType\InsolvencyAffectedCompany|null
     */
    public function getLegal_entity()
    {
        return $this->legal_entity;
    }
    /**
     * Set legal_entity value
     * @param \Webservices\StructType\InsolvencyAffectedCompany $legal_entity
     * @return \Webservices\StructType\InsolvencyLegalSubject
     */
    public function setLegal_entity(\Webservices\StructType\InsolvencyAffectedCompany $legal_entity = null)
    {
        $this->legal_entity = $legal_entity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyLegalSubject
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
