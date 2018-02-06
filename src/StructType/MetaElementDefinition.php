<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetaElementDefinition StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaElementDefinition extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $name;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $type;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $description;
    /**
     * The required
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    public $required;
    /**
     * The documentation_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $documentation_url;
    /**
     * The validations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\MetaValidationDefinitionArray
     */
    public $validations;
    /**
     * The default_value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $default_value;
    /**
     * Constructor method for MetaElementDefinition
     * @uses MetaElementDefinition::setName()
     * @uses MetaElementDefinition::setType()
     * @uses MetaElementDefinition::setDescription()
     * @uses MetaElementDefinition::setRequired()
     * @uses MetaElementDefinition::setDocumentation_url()
     * @uses MetaElementDefinition::setValidations()
     * @uses MetaElementDefinition::setDefault_value()
     * @param string $name
     * @param string $type
     * @param string $description
     * @param bool $required
     * @param string $documentation_url
     * @param \Webservices\ArrayType\MetaValidationDefinitionArray $validations
     * @param string $default_value
     */
    public function __construct($name = null, $type = null, $description = null, $required = null, $documentation_url = null, \Webservices\ArrayType\MetaValidationDefinitionArray $validations = null, $default_value = null)
    {
        $this
            ->setName($name)
            ->setType($type)
            ->setDescription($description)
            ->setRequired($required)
            ->setDocumentation_url($documentation_url)
            ->setValidations($validations)
            ->setDefault_value($default_value);
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
     * @return \Webservices\StructType\MetaElementDefinition
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\MetaElementDefinition
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
     * Get description value
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\MetaElementDefinition
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
     * Get required value
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \Webservices\StructType\MetaElementDefinition
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Get documentation_url value
     * @return string|null
     */
    public function getDocumentation_url()
    {
        return $this->documentation_url;
    }
    /**
     * Set documentation_url value
     * @param string $documentation_url
     * @return \Webservices\StructType\MetaElementDefinition
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
     * Get validations value
     * @return \Webservices\ArrayType\MetaValidationDefinitionArray|null
     */
    public function getValidations()
    {
        return $this->validations;
    }
    /**
     * Set validations value
     * @param \Webservices\ArrayType\MetaValidationDefinitionArray $validations
     * @return \Webservices\StructType\MetaElementDefinition
     */
    public function setValidations(\Webservices\ArrayType\MetaValidationDefinitionArray $validations = null)
    {
        $this->validations = $validations;
        return $this;
    }
    /**
     * Get default_value value
     * @return string|null
     */
    public function getDefault_value()
    {
        return $this->default_value;
    }
    /**
     * Set default_value value
     * @param string $default_value
     * @return \Webservices\StructType\MetaElementDefinition
     */
    public function setDefault_value($default_value = null)
    {
        // validation for constraint: string
        if (!is_null($default_value) && !is_string($default_value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($default_value)), __LINE__);
        }
        $this->default_value = $default_value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaElementDefinition
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
