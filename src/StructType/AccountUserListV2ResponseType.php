<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountUserListV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountUserListV2ResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\UserV2PagedResult
     */
    public $out;
    /**
     * Constructor method for accountUserListV2ResponseType
     * @uses AccountUserListV2ResponseType::setOut()
     * @param \Webservices\StructType\UserV2PagedResult $out
     */
    public function __construct(\Webservices\StructType\UserV2PagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\UserV2PagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\UserV2PagedResult $out
     * @return \Webservices\StructType\AccountUserListV2ResponseType
     */
    public function setOut(\Webservices\StructType\UserV2PagedResult $out = null)
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
     * @return \Webservices\StructType\AccountUserListV2ResponseType
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
