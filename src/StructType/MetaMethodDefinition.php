<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetaMethodDefinition StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaMethodDefinition extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $name;
    /**
     * The service_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $service_name;
    /**
     * The deprecated
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    public $deprecated;
    /**
     * The latest
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    public $latest;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $description;
    /**
     * The documentation
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $documentation;
    /**
     * The documentation_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $documentation_url;
    /**
     * The input_elements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\MetaElementDefinitionArray
     */
    public $input_elements;
    /**
     * The output_elements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\MetaElementDefinitionArray
     */
    public $output_elements;
    /**
     * The related_methods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\MetaMethodReferenceArray
     */
    public $related_methods;
    /**
     * Constructor method for MetaMethodDefinition
     * @uses MetaMethodDefinition::setName()
     * @uses MetaMethodDefinition::setService_name()
     * @uses MetaMethodDefinition::setDeprecated()
     * @uses MetaMethodDefinition::setLatest()
     * @uses MetaMethodDefinition::setDescription()
     * @uses MetaMethodDefinition::setDocumentation()
     * @uses MetaMethodDefinition::setDocumentation_url()
     * @uses MetaMethodDefinition::setInput_elements()
     * @uses MetaMethodDefinition::setOutput_elements()
     * @uses MetaMethodDefinition::setRelated_methods()
     * @param string $name
     * @param string $service_name
     * @param bool $deprecated
     * @param bool $latest
     * @param string $description
     * @param string $documentation
     * @param string $documentation_url
     * @param \Webservices\ArrayType\MetaElementDefinitionArray $input_elements
     * @param \Webservices\ArrayType\MetaElementDefinitionArray $output_elements
     * @param \Webservices\ArrayType\MetaMethodReferenceArray $related_methods
     */
    public function __construct($name = null, $service_name = null, $deprecated = null, $latest = null, $description = null, $documentation = null, $documentation_url = null, \Webservices\ArrayType\MetaElementDefinitionArray $input_elements = null, \Webservices\ArrayType\MetaElementDefinitionArray $output_elements = null, \Webservices\ArrayType\MetaMethodReferenceArray $related_methods = null)
    {
        $this
            ->setName($name)
            ->setService_name($service_name)
            ->setDeprecated($deprecated)
            ->setLatest($latest)
            ->setDescription($description)
            ->setDocumentation($documentation)
            ->setDocumentation_url($documentation_url)
            ->setInput_elements($input_elements)
            ->setOutput_elements($output_elements)
            ->setRelated_methods($related_methods);
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
     * @return \Webservices\StructType\MetaMethodDefinition
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
     * Get service_name value
     * @return string
     */
    public function getService_name()
    {
        return $this->service_name;
    }
    /**
     * Set service_name value
     * @param string $service_name
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setService_name($service_name = null)
    {
        // validation for constraint: string
        if (!is_null($service_name) && !is_string($service_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service_name)), __LINE__);
        }
        $this->service_name = $service_name;
        return $this;
    }
    /**
     * Get deprecated value
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    /**
     * Set deprecated value
     * @param bool $deprecated
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setDeprecated($deprecated = null)
    {
        // validation for constraint: boolean
        if (!is_null($deprecated) && !is_bool($deprecated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deprecated)), __LINE__);
        }
        $this->deprecated = $deprecated;
        return $this;
    }
    /**
     * Get latest value
     * @return bool
     */
    public function getLatest()
    {
        return $this->latest;
    }
    /**
     * Set latest value
     * @param bool $latest
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setLatest($latest = null)
    {
        // validation for constraint: boolean
        if (!is_null($latest) && !is_bool($latest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($latest)), __LINE__);
        }
        $this->latest = $latest;
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
     * @return \Webservices\StructType\MetaMethodDefinition
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
     * Get documentation value
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }
    /**
     * Set documentation value
     * @param string $documentation
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setDocumentation($documentation = null)
    {
        // validation for constraint: string
        if (!is_null($documentation) && !is_string($documentation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentation)), __LINE__);
        }
        $this->documentation = $documentation;
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
     * @return \Webservices\StructType\MetaMethodDefinition
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
     * Get input_elements value
     * @return \Webservices\ArrayType\MetaElementDefinitionArray|null
     */
    public function getInput_elements()
    {
        return $this->input_elements;
    }
    /**
     * Set input_elements value
     * @param \Webservices\ArrayType\MetaElementDefinitionArray $input_elements
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setInput_elements(\Webservices\ArrayType\MetaElementDefinitionArray $input_elements = null)
    {
        $this->input_elements = $input_elements;
        return $this;
    }
    /**
     * Get output_elements value
     * @return \Webservices\ArrayType\MetaElementDefinitionArray|null
     */
    public function getOutput_elements()
    {
        return $this->output_elements;
    }
    /**
     * Set output_elements value
     * @param \Webservices\ArrayType\MetaElementDefinitionArray $output_elements
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setOutput_elements(\Webservices\ArrayType\MetaElementDefinitionArray $output_elements = null)
    {
        $this->output_elements = $output_elements;
        return $this;
    }
    /**
     * Get related_methods value
     * @return \Webservices\ArrayType\MetaMethodReferenceArray|null
     */
    public function getRelated_methods()
    {
        return $this->related_methods;
    }
    /**
     * Set related_methods value
     * @param \Webservices\ArrayType\MetaMethodReferenceArray $related_methods
     * @return \Webservices\StructType\MetaMethodDefinition
     */
    public function setRelated_methods(\Webservices\ArrayType\MetaMethodReferenceArray $related_methods = null)
    {
        $this->related_methods = $related_methods;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaMethodDefinition
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
