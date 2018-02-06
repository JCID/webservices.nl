<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessOrganizationTree StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessOrganizationTree extends AbstractStructBase
{
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
     * The tree
     * @var \Webservices\StructType\DutchBusinessOrganizationNode
     */
    public $tree;
    /**
     * Constructor method for DutchBusinessOrganizationTree
     * @uses DutchBusinessOrganizationTree::setName()
     * @uses DutchBusinessOrganizationTree::setDossier_number()
     * @uses DutchBusinessOrganizationTree::setTree()
     * @param string $name
     * @param string $dossier_number
     * @param \Webservices\StructType\DutchBusinessOrganizationNode $tree
     */
    public function __construct($name = null, $dossier_number = null, \Webservices\StructType\DutchBusinessOrganizationNode $tree = null)
    {
        $this
            ->setName($name)
            ->setDossier_number($dossier_number)
            ->setTree($tree);
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
     * @return \Webservices\StructType\DutchBusinessOrganizationTree
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
     * @return \Webservices\StructType\DutchBusinessOrganizationTree
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
     * Get tree value
     * @return \Webservices\StructType\DutchBusinessOrganizationNode|null
     */
    public function getTree()
    {
        return $this->tree;
    }
    /**
     * Set tree value
     * @param \Webservices\StructType\DutchBusinessOrganizationNode $tree
     * @return \Webservices\StructType\DutchBusinessOrganizationTree
     */
    public function setTree(\Webservices\StructType\DutchBusinessOrganizationNode $tree = null)
    {
        $this->tree = $tree;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessOrganizationTree
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
