<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userEditV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserEditV2RequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The contactname
     * @var string
     */
    public $contactname;
    /**
     * The contactemail
     * @var string
     */
    public $contactemail;
    /**
     * The telephone
     * @var string
     */
    public $telephone;
    /**
     * The fax
     * @var string
     */
    public $fax;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * Constructor method for userEditV2RequestType
     * @uses UserEditV2RequestType::setUserid()
     * @uses UserEditV2RequestType::setEmail()
     * @uses UserEditV2RequestType::setAddress()
     * @uses UserEditV2RequestType::setContactname()
     * @uses UserEditV2RequestType::setContactemail()
     * @uses UserEditV2RequestType::setTelephone()
     * @uses UserEditV2RequestType::setFax()
     * @uses UserEditV2RequestType::setPassword()
     * @param int $userid
     * @param string $email
     * @param string $address
     * @param string $contactname
     * @param string $contactemail
     * @param string $telephone
     * @param string $fax
     * @param string $password
     */
    public function __construct($userid = null, $email = null, $address = null, $contactname = null, $contactemail = null, $telephone = null, $fax = null, $password = null)
    {
        $this
            ->setUserid($userid)
            ->setEmail($email)
            ->setAddress($address)
            ->setContactname($contactname)
            ->setContactemail($contactemail)
            ->setTelephone($telephone)
            ->setFax($fax)
            ->setPassword($password);
    }
    /**
     * Get userid value
     * @return int|null
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * Set userid value
     * @param int $userid
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setUserid($userid = null)
    {
        // validation for constraint: int
        if (!is_null($userid) && !is_numeric($userid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userid)), __LINE__);
        }
        $this->userid = $userid;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get contactname value
     * @return string|null
     */
    public function getContactname()
    {
        return $this->contactname;
    }
    /**
     * Set contactname value
     * @param string $contactname
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setContactname($contactname = null)
    {
        // validation for constraint: string
        if (!is_null($contactname) && !is_string($contactname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactname)), __LINE__);
        }
        $this->contactname = $contactname;
        return $this;
    }
    /**
     * Get contactemail value
     * @return string|null
     */
    public function getContactemail()
    {
        return $this->contactemail;
    }
    /**
     * Set contactemail value
     * @param string $contactemail
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setContactemail($contactemail = null)
    {
        // validation for constraint: string
        if (!is_null($contactemail) && !is_string($contactemail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactemail)), __LINE__);
        }
        $this->contactemail = $contactemail;
        return $this;
    }
    /**
     * Get telephone value
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setTelephone($telephone = null)
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone)), __LINE__);
        }
        $this->telephone = $telephone;
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Webservices\StructType\UserEditV2RequestType
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
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
     * @return \Webservices\StructType\UserEditV2RequestType
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
     * @return \Webservices\StructType\UserEditV2RequestType
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
