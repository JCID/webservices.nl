<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBOInvestigationToken StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBOInvestigationToken extends AbstractStructBase
{
    /**
     * The token
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $token;
    /**
     * Constructor method for DutchBusinessUBOInvestigationToken
     * @uses DutchBusinessUBOInvestigationToken::setToken()
     * @param string $token
     */
    public function __construct($token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get token value
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationToken
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBOInvestigationToken
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
