<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetaMethodReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaMethodReference extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $name;
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
     * Constructor method for MetaMethodReference
     * @uses MetaMethodReference::setName()
     * @uses MetaMethodReference::setDeprecated()
     * @uses MetaMethodReference::setLatest()
     * @uses MetaMethodReference::setDocumentation_url()
     * @uses MetaMethodReference::setDescription()
     * @param string $name
     * @param bool $deprecated
     * @param bool $latest
     * @param string $documentation_url
     * @param string $description
     */
    public function __construct($name = null, $deprecated = null, $latest = null, $documentation_url = null, $description = null)
    {
        $this
            ->setName($name)
            ->setDeprecated($deprecated)
            ->setLatest($latest)
            ->setDocumentation_url($documentation_url)
            ->setDescription($description);
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
     * @return \Webservices\StructType\MetaMethodReference
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
     * @return \Webservices\StructType\MetaMethodReference
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
     * @return \Webservices\StructType\MetaMethodReference
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
     * @return \Webservices\StructType\MetaMethodReference
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
     * @return \Webservices\StructType\MetaMethodReference
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaMethodReference
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
