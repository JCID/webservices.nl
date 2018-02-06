<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for metaGetServiceRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class MetaGetServiceRequestType extends AbstractStructBase
{
    /**
     * The service_name
     * @var string
     */
    public $service_name;
    /**
     * Constructor method for metaGetServiceRequestType
     * @uses MetaGetServiceRequestType::setService_name()
     * @param string $service_name
     */
    public function __construct($service_name = null)
    {
        $this
            ->setService_name($service_name);
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
     * @return \Webservices\StructType\MetaGetServiceRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\MetaGetServiceRequestType
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
