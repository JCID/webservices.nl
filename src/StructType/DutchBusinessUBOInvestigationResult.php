<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOInvestigationResult StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOInvestigationResult extends AbstractStructBase
{
    /**
     * The persons
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\DutchBusinessUBOPersonArray
     */
    public $persons;
    /**
     * The organisations
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\DutchBusinessUBOOrganisationArray
     */
    public $organisations;
    /**
     * The tree
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\StructType\DutchBusinessUBOOrganizationNode
     */
    public $tree;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * Constructor method for DutchBusinessUBOInvestigationResult
     * @uses DutchBusinessUBOInvestigationResult::setPersons()
     * @uses DutchBusinessUBOInvestigationResult::setOrganisations()
     * @uses DutchBusinessUBOInvestigationResult::setTree()
     * @uses DutchBusinessUBOInvestigationResult::setName()
     * @uses DutchBusinessUBOInvestigationResult::setDossier_number()
     * @param \Webservices\ArrayType\DutchBusinessUBOPersonArray $persons
     * @param \Webservices\ArrayType\DutchBusinessUBOOrganisationArray $organisations
     * @param \Webservices\StructType\DutchBusinessUBOOrganizationNode $tree
     * @param string $name
     * @param string $dossier_number
     */
    public function __construct(\Webservices\ArrayType\DutchBusinessUBOPersonArray $persons = null, \Webservices\ArrayType\DutchBusinessUBOOrganisationArray $organisations = null, \Webservices\StructType\DutchBusinessUBOOrganizationNode $tree = null, $name = null, $dossier_number = null)
    {
        $this
            ->setPersons($persons)
            ->setOrganisations($organisations)
            ->setTree($tree)
            ->setName($name)
            ->setDossier_number($dossier_number);
    }
    /**
     * Get persons value
     * @return \Webservices\ArrayType\DutchBusinessUBOPersonArray
     */
    public function getPersons()
    {
        return $this->persons;
    }
    /**
     * Set persons value
     * @param \Webservices\ArrayType\DutchBusinessUBOPersonArray $persons
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationResult
     */
    public function setPersons(\Webservices\ArrayType\DutchBusinessUBOPersonArray $persons = null)
    {
        $this->persons = $persons;
        return $this;
    }
    /**
     * Get organisations value
     * @return \Webservices\ArrayType\DutchBusinessUBOOrganisationArray
     */
    public function getOrganisations()
    {
        return $this->organisations;
    }
    /**
     * Set organisations value
     * @param \Webservices\ArrayType\DutchBusinessUBOOrganisationArray $organisations
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationResult
     */
    public function setOrganisations(\Webservices\ArrayType\DutchBusinessUBOOrganisationArray $organisations = null)
    {
        $this->organisations = $organisations;
        return $this;
    }
    /**
     * Get tree value
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
     */
    public function getTree()
    {
        return $this->tree;
    }
    /**
     * Set tree value
     * @param \Webservices\StructType\DutchBusinessUBOOrganizationNode $tree
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationResult
     */
    public function setTree(\Webservices\StructType\DutchBusinessUBOOrganizationNode $tree = null)
    {
        $this->tree = $tree;
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
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationResult
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
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationResult
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationResult
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
