<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createTestUserResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreateTestUserResponseType extends AbstractStructBase
{
    /**
     * The user_credentials
     * @var \Webservices\StructType\UserCredentials
     */
    public $user_credentials;
    /**
     * Constructor method for createTestUserResponseType
     * @uses CreateTestUserResponseType::setUser_credentials()
     * @param \Webservices\StructType\UserCredentials $user_credentials
     */
    public function __construct(\Webservices\StructType\UserCredentials $user_credentials = null)
    {
        $this
            ->setUser_credentials($user_credentials);
    }
    /**
     * Get user_credentials value
     * @return \Webservices\StructType\UserCredentials|null
     */
    public function getUser_credentials()
    {
        return $this->user_credentials;
    }
    /**
     * Set user_credentials value
     * @param \Webservices\StructType\UserCredentials $user_credentials
     * @return \Webservices\StructType\CreateTestUserResponseType
     */
    public function setUser_credentials(\Webservices\StructType\UserCredentials $user_credentials = null)
    {
        $this->user_credentials = $user_credentials;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreateTestUserResponseType
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
