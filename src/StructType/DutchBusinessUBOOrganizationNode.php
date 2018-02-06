<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOOrganizationNode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOOrganizationNode extends AbstractStructBase
{
    /**
     * The level
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $level;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $type;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $name;
    /**
     * The role_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $role_type;
    /**
     * The registered_in
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $registered_in;
    /**
     * The parents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessUBOOrganizationNodeArray
     */
    public $parents;
    /**
     * Constructor method for DutchBusinessUBOOrganizationNode
     * @uses DutchBusinessUBOOrganizationNode::setLevel()
     * @uses DutchBusinessUBOOrganizationNode::setId()
     * @uses DutchBusinessUBOOrganizationNode::setType()
     * @uses DutchBusinessUBOOrganizationNode::setName()
     * @uses DutchBusinessUBOOrganizationNode::setRole_type()
     * @uses DutchBusinessUBOOrganizationNode::setRegistered_in()
     * @uses DutchBusinessUBOOrganizationNode::setParents()
     * @param int $level
     * @param string $id
     * @param string $type
     * @param string $name
     * @param string $role_type
     * @param string $registered_in
     * @param \Webservices\ArrayType\DutchBusinessUBOOrganizationNodeArray $parents
     */
    public function __construct($level = null, $id = null, $type = null, $name = null, $role_type = null, $registered_in = null, \Webservices\ArrayType\DutchBusinessUBOOrganizationNodeArray $parents = null)
    {
        $this
            ->setLevel($level)
            ->setId($id)
            ->setType($type)
            ->setName($name)
            ->setRole_type($role_type)
            ->setRegistered_in($registered_in)
            ->setParents($parents);
    }
    /**
     * Get level value
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param int $level
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !is_numeric($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Get id value
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
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
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
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
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
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
     * Get role_type value
     * @return string|null
     */
    public function getRole_type()
    {
        return $this->role_type;
    }
    /**
     * Set role_type value
     * @param string $role_type
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
     */
    public function setRole_type($role_type = null)
    {
        // validation for constraint: string
        if (!is_null($role_type) && !is_string($role_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role_type)), __LINE__);
        }
        $this->role_type = $role_type;
        return $this;
    }
    /**
     * Get registered_in value
     * @return string|null
     */
    public function getRegistered_in()
    {
        return $this->registered_in;
    }
    /**
     * Set registered_in value
     * @param string $registered_in
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
     */
    public function setRegistered_in($registered_in = null)
    {
        // validation for constraint: string
        if (!is_null($registered_in) && !is_string($registered_in)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registered_in)), __LINE__);
        }
        $this->registered_in = $registered_in;
        return $this;
    }
    /**
     * Get parents value
     * @return \Webservices\ArrayType\DutchBusinessUBOOrganizationNodeArray|null
     */
    public function getParents()
    {
        return $this->parents;
    }
    /**
     * Set parents value
     * @param \Webservices\ArrayType\DutchBusinessUBOOrganizationNodeArray $parents
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
     */
    public function setParents(\Webservices\ArrayType\DutchBusinessUBOOrganizationNodeArray $parents = null)
    {
        $this->parents = $parents;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOOrganizationNode
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
