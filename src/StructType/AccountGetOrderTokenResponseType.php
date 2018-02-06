<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountGetOrderTokenResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountGetOrderTokenResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\AccountOrderToken
     */
    public $out;
    /**
     * Constructor method for accountGetOrderTokenResponseType
     * @uses AccountGetOrderTokenResponseType::setOut()
     * @param \Webservices\StructType\AccountOrderToken $out
     */
    public function __construct(\Webservices\StructType\AccountOrderToken $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\AccountOrderToken|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\AccountOrderToken $out
     * @return \Webservices\StructType\AccountGetOrderTokenResponseType
     */
    public function setOut(\Webservices\StructType\AccountOrderToken $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AccountGetOrderTokenResponseType
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
