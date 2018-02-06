<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userCreateV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserCreateV2RequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
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
     * The usergroups
     * @var \Webservices\ArrayType\IntArray
     */
    public $usergroups;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The companyname
     * @var string
     */
    public $companyname;
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
     * The clientcode
     * @var string
     */
    public $clientcode;
    /**
     * The comments
     * @var string
     */
    public $comments;
    /**
     * Constructor method for userCreateV2RequestType
     * @uses UserCreateV2RequestType::setAccountid()
     * @uses UserCreateV2RequestType::setNickname()
     * @uses UserCreateV2RequestType::setPassword()
     * @uses UserCreateV2RequestType::setUsergroups()
     * @uses UserCreateV2RequestType::setEmail()
     * @uses UserCreateV2RequestType::setCompanyname()
     * @uses UserCreateV2RequestType::setAddress()
     * @uses UserCreateV2RequestType::setContactname()
     * @uses UserCreateV2RequestType::setContactemail()
     * @uses UserCreateV2RequestType::setTelephone()
     * @uses UserCreateV2RequestType::setFax()
     * @uses UserCreateV2RequestType::setClientcode()
     * @uses UserCreateV2RequestType::setComments()
     * @param int $accountid
     * @param string $nickname
     * @param string $password
     * @param \Webservices\ArrayType\IntArray $usergroups
     * @param string $email
     * @param string $companyname
     * @param string $address
     * @param string $contactname
     * @param string $contactemail
     * @param string $telephone
     * @param string $fax
     * @param string $clientcode
     * @param string $comments
     */
    public function __construct($accountid = null, $nickname = null, $password = null, \Webservices\ArrayType\IntArray $usergroups = null, $email = null, $companyname = null, $address = null, $contactname = null, $contactemail = null, $telephone = null, $fax = null, $clientcode = null, $comments = null)
    {
        $this
            ->setAccountid($accountid)
            ->setNickname($nickname)
            ->setPassword($password)
            ->setUsergroups($usergroups)
            ->setEmail($email)
            ->setCompanyname($companyname)
            ->setAddress($address)
            ->setContactname($contactname)
            ->setContactemail($contactemail)
            ->setTelephone($telephone)
            ->setFax($fax)
            ->setClientcode($clientcode)
            ->setComments($comments);
    }
    /**
     * Get accountid value
     * @return int|null
     */
    public function getAccountid()
    {
        return $this->accountid;
    }
    /**
     * Set accountid value
     * @param int $accountid
     * @return \Webservices\StructType\UserCreateV2RequestType
     */
    public function setAccountid($accountid = null)
    {
        // validation for constraint: int
        if (!is_null($accountid) && !is_numeric($accountid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accountid)), __LINE__);
        }
        $this->accountid = $accountid;
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * Get usergroups value
     * @return \Webservices\ArrayType\IntArray|null
     */
    public function getUsergroups()
    {
        return $this->usergroups;
    }
    /**
     * Set usergroups value
     * @param \Webservices\ArrayType\IntArray $usergroups
     * @return \Webservices\StructType\UserCreateV2RequestType
     */
    public function setUsergroups(\Webservices\ArrayType\IntArray $usergroups = null)
    {
        $this->usergroups = $usergroups;
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * Get companyname value
     * @return string|null
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }
    /**
     * Set companyname value
     * @param string $companyname
     * @return \Webservices\StructType\UserCreateV2RequestType
     */
    public function setCompanyname($companyname = null)
    {
        // validation for constraint: string
        if (!is_null($companyname) && !is_string($companyname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyname)), __LINE__);
        }
        $this->companyname = $companyname;
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * @return \Webservices\StructType\UserCreateV2RequestType
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
     * Get clientcode value
     * @return string|null
     */
    public function getClientcode()
    {
        return $this->clientcode;
    }
    /**
     * Set clientcode value
     * @param string $clientcode
     * @return \Webservices\StructType\UserCreateV2RequestType
     */
    public function setClientcode($clientcode = null)
    {
        // validation for constraint: string
        if (!is_null($clientcode) && !is_string($clientcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientcode)), __LINE__);
        }
        $this->clientcode = $clientcode;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Webservices\StructType\UserCreateV2RequestType
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UserCreateV2RequestType
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
