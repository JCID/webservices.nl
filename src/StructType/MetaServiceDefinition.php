<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetaServiceDefinition StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaServiceDefinition extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $name;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $category;
    /**
     * The documentation_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $documentation_url;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The methods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\MetaMethodReferenceArray
     */
    public $methods;
    /**
     * The protocols
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\MetaProtocolDefinitionArray
     */
    public $protocols;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * Constructor method for MetaServiceDefinition
     * @uses MetaServiceDefinition::setName()
     * @uses MetaServiceDefinition::setCategory()
     * @uses MetaServiceDefinition::setDocumentation_url()
     * @uses MetaServiceDefinition::setDescription()
     * @uses MetaServiceDefinition::setMethods()
     * @uses MetaServiceDefinition::setProtocols()
     * @uses MetaServiceDefinition::setStatus()
     * @param string $name
     * @param string $category
     * @param string $documentation_url
     * @param string $description
     * @param \Webservices\ArrayType\MetaMethodReferenceArray $methods
     * @param \Webservices\ArrayType\MetaProtocolDefinitionArray $protocols
     * @param string $status
     */
    public function __construct($name = null, $category = null, $documentation_url = null, $description = null, \Webservices\ArrayType\MetaMethodReferenceArray $methods = null, \Webservices\ArrayType\MetaProtocolDefinitionArray $protocols = null, $status = null)
    {
        $this
            ->setName($name)
            ->setCategory($category)
            ->setDocumentation_url($documentation_url)
            ->setDescription($description)
            ->setMethods($methods)
            ->setProtocols($protocols)
            ->setStatus($status);
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
     * @return \Webservices\StructType\MetaServiceDefinition
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
     * Get category value
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Webservices\StructType\MetaServiceDefinition
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get documentation_url value
     * @return string
     */
    public function getDocumentation_url()
    {
        return $this->documentation_url;
    }
    /**
     * Set documentation_url value
     * @param string $documentation_url
     * @return \Webservices\StructType\MetaServiceDefinition
     */
    public function setDocumentation_url($documentation_url = null)
    {
        // validation for constraint: string
        if (!is_null($documentation_url) && !is_string($documentation_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentation_url)), __LINE__);
        }
        $this->documentation_url = $documentation_url;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\MetaServiceDefinition
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get methods value
     * @return \Webservices\ArrayType\MetaMethodReferenceArray|null
     */
    public function getMethods()
    {
        return $this->methods;
    }
    /**
     * Set methods value
     * @param \Webservices\ArrayType\MetaMethodReferenceArray $methods
     * @return \Webservices\StructType\MetaServiceDefinition
     */
    public function setMethods(\Webservices\ArrayType\MetaMethodReferenceArray $methods = null)
    {
        $this->methods = $methods;
        return $this;
    }
    /**
     * Get protocols value
     * @return \Webservices\ArrayType\MetaProtocolDefinitionArray|null
     */
    public function getProtocols()
    {
        return $this->protocols;
    }
    /**
     * Set protocols value
     * @param \Webservices\ArrayType\MetaProtocolDefinitionArray $protocols
     * @return \Webservices\StructType\MetaServiceDefinition
     */
    public function setProtocols(\Webservices\ArrayType\MetaProtocolDefinitionArray $protocols = null)
    {
        $this->protocols = $protocols;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Webservices\StructType\MetaServiceDefinition
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaServiceDefinition
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
