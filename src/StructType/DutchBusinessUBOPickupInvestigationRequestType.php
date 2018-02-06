<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessUBOPickupInvestigationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOPickupInvestigationRequestType extends AbstractStructBase
{
    /**
     * The token
     * @var string
     */
    public $token;
    /**
     * The include_source
     * @var bool
     */
    public $include_source;
    /**
     * Constructor method for dutchBusinessUBOPickupInvestigationRequestType
     * @uses DutchBusinessUBOPickupInvestigationRequestType::setToken()
     * @uses DutchBusinessUBOPickupInvestigationRequestType::setInclude_source()
     * @param string $token
     * @param bool $include_source
     */
    public function __construct($token = null, $include_source = null)
    {
        $this
            ->setToken($token)
            ->setInclude_source($include_source);
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Webservices\StructType\DutchBusinessUBOPickupInvestigationRequestType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
    /**
     * Get include_source value
     * @return bool|null
     */
    public function getInclude_source()
    {
        return $this->include_source;
    }
    /**
     * Set include_source value
     * @param bool $include_source
     * @return \Webservices\StructType\DutchBusinessUBOPickupInvestigationRequestType
     */
    public function setInclude_source($include_source = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_source) && !is_bool($include_source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($include_source)), __LINE__);
        }
        $this->include_source = $include_source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOPickupInvestigationRequestType
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
