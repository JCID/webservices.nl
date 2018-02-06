<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetaProtocolDefinition StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaProtocolDefinition extends AbstractStructBase
{
    /**
     * The documentation_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $documentation_url;
    /**
     * The location
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $location;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $type;
    /**
     * Constructor method for MetaProtocolDefinition
     * @uses MetaProtocolDefinition::setDocumentation_url()
     * @uses MetaProtocolDefinition::setLocation()
     * @uses MetaProtocolDefinition::setType()
     * @param string $documentation_url
     * @param string $location
     * @param string $type
     */
    public function __construct($documentation_url = null, $location = null, $type = null)
    {
        $this
            ->setDocumentation_url($documentation_url)
            ->setLocation($location)
            ->setType($type);
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
     * @return \Webservices\StructType\MetaProtocolDefinition
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
     * Get location value
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \Webservices\StructType\MetaProtocolDefinition
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
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
     * @return \Webservices\StructType\MetaProtocolDefinition
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaProtocolDefinition
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
