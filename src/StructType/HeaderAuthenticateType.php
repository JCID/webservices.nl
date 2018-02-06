<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HeaderAuthenticateType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class HeaderAuthenticateType extends AbstractStructBase
{
    /**
     * The reactid
     * @var string
     */
    public $reactid;
    /**
     * Constructor method for HeaderAuthenticateType
     * @uses HeaderAuthenticateType::setReactid()
     * @param string $reactid
     */
    public function __construct($reactid = null)
    {
        $this
            ->setReactid($reactid);
    }
    /**
     * Get reactid value
     * @return string|null
     */
    public function getReactid()
    {
        return $this->reactid;
    }
    /**
     * Set reactid value
     * @param string $reactid
     * @return \Webservices\StructType\HeaderAuthenticateType
     */
    public function setReactid($reactid = null)
    {
        // validation for constraint: string
        if (!is_null($reactid) && !is_string($reactid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reactid)), __LINE__);
        }
        $this->reactid = $reactid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\HeaderAuthenticateType
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
