<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for metaGetMethodRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaGetMethodRequestType extends AbstractStructBase
{
    /**
     * The service_name
     * @var string
     */
    public $service_name;
    /**
     * The method_name
     * @var string
     */
    public $method_name;
    /**
     * Constructor method for metaGetMethodRequestType
     * @uses MetaGetMethodRequestType::setService_name()
     * @uses MetaGetMethodRequestType::setMethod_name()
     * @param string $service_name
     * @param string $method_name
     */
    public function __construct($service_name = null, $method_name = null)
    {
        $this
            ->setService_name($service_name)
            ->setMethod_name($method_name);
    }
    /**
     * Get service_name value
     * @return string|null
     */
    public function getService_name()
    {
        return $this->service_name;
    }
    /**
     * Set service_name value
     * @param string $service_name
     * @return \Webservices\StructType\MetaGetMethodRequestType
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
     * Get method_name value
     * @return string|null
     */
    public function getMethod_name()
    {
        return $this->method_name;
    }
    /**
     * Set method_name value
     * @param string $method_name
     * @return \Webservices\StructType\MetaGetMethodRequestType
     */
    public function setMethod_name($method_name = null)
    {
        // validation for constraint: string
        if (!is_null($method_name) && !is_string($method_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($method_name)), __LINE__);
        }
        $this->method_name = $method_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaGetMethodRequestType
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
