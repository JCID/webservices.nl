<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessOrganizationNode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessOrganizationNode extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The children
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessOrganizationNodeArray
     */
    public $children;
    /**
     * Constructor method for DutchBusinessOrganizationNode
     * @uses DutchBusinessOrganizationNode::setName()
     * @uses DutchBusinessOrganizationNode::setType()
     * @uses DutchBusinessOrganizationNode::setId()
     * @uses DutchBusinessOrganizationNode::setChildren()
     * @param string $name
     * @param string $type
     * @param string $id
     * @param \Webservices\ArrayType\DutchBusinessOrganizationNodeArray $children
     */
    public function __construct($name = null, $type = null, $id = null, \Webservices\ArrayType\DutchBusinessOrganizationNodeArray $children = null)
    {
        $this
            ->setName($name)
            ->setType($type)
            ->setId($id)
            ->setChildren($children);
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
     * @return \Webservices\StructType\DutchBusinessOrganizationNode
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\DutchBusinessOrganizationNode
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\DutchBusinessOrganizationNode
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get children value
     * @return \Webservices\ArrayType\DutchBusinessOrganizationNodeArray|null
     */
    public function getChildren()
    {
        return $this->children;
    }
    /**
     * Set children value
     * @param \Webservices\ArrayType\DutchBusinessOrganizationNodeArray $children
     * @return \Webservices\StructType\DutchBusinessOrganizationNode
     */
    public function setChildren(\Webservices\ArrayType\DutchBusinessOrganizationNodeArray $children = null)
    {
        $this->children = $children;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessOrganizationNode
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
