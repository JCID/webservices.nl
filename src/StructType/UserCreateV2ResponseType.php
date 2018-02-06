<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userCreateV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserCreateV2ResponseType extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The nickname
     * @var string
     */
    public $nickname;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * Constructor method for userCreateV2ResponseType
     * @uses UserCreateV2ResponseType::setId()
     * @uses UserCreateV2ResponseType::setNickname()
     * @uses UserCreateV2ResponseType::setPassword()
     * @param int $id
     * @param string $nickname
     * @param string $password
     */
    public function __construct($id = null, $nickname = null, $password = null)
    {
        $this
            ->setId($id)
            ->setNickname($nickname)
            ->setPassword($password);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Webservices\StructType\UserCreateV2ResponseType
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get nickname value
     * @return string|null
     */
    public function getNickname()
    {
        return $this->nickname;
    }
    /**
     * Set nickname value
     * @param string $nickname
     * @return \Webservices\StructType\UserCreateV2ResponseType
     */
    public function setNickname($nickname = null)
    {
        // validation for constraint: string
        if (!is_null($nickname) && !is_string($nickname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nickname)), __LINE__);
        }
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Webservices\StructType\UserCreateV2ResponseType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserCreateV2ResponseType
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
