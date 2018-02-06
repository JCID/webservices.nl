<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class User extends AbstractStructBase
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
     * The credits
     * @var int
     */
    public $credits;
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
     * The creationtime
     * @var string
     */
    public $creationtime;
    /**
     * The lastmodified
     * @var string
     */
    public $lastmodified;
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The account_id
     * @var int
     */
    public $account_id;
    /**
     * The account_name
     * @var string
     */
    public $account_name;
    /**
     * The usergroups
     * @var \Webservices\ArrayType\UserGroupArray
     */
    public $usergroups;
    /**
     * The creditthreshold
     * @var int
     */
    public $creditthreshold;
    /**
     * The notificationrecipients
     * @var string
     */
    public $notificationrecipients;
    /**
     * Constructor method for User
     * @uses User::setId()
     * @uses User::setNickname()
     * @uses User::setEmail()
     * @uses User::setCompanyname()
     * @uses User::setAddress()
     * @uses User::setContactname()
     * @uses User::setContactemail()
     * @uses User::setTelephone()
     * @uses User::setFax()
     * @uses User::setCredits()
     * @uses User::setClientcode()
     * @uses User::setComments()
     * @uses User::setCreationtime()
     * @uses User::setLastmodified()
     * @uses User::setActive()
     * @uses User::setAccount_id()
     * @uses User::setAccount_name()
     * @uses User::setUsergroups()
     * @uses User::setCreditthreshold()
     * @uses User::setNotificationrecipients()
     * @param int $id
     * @param string $nickname
     * @param string $email
     * @param string $companyname
     * @param string $address
     * @param string $contactname
     * @param string $contactemail
     * @param string $telephone
     * @param string $fax
     * @param int $credits
     * @param string $clientcode
     * @param string $comments
     * @param string $creationtime
     * @param string $lastmodified
     * @param bool $active
     * @param int $account_id
     * @param string $account_name
     * @param \Webservices\ArrayType\UserGroupArray $usergroups
     * @param int $creditthreshold
     * @param string $notificationrecipients
     */
    public function __construct($id = null, $nickname = null, $email = null, $companyname = null, $address = null, $contactname = null, $contactemail = null, $telephone = null, $fax = null, $credits = null, $clientcode = null, $comments = null, $creationtime = null, $lastmodified = null, $active = null, $account_id = null, $account_name = null, \Webservices\ArrayType\UserGroupArray $usergroups = null, $creditthreshold = null, $notificationrecipients = null)
    {
        $this
            ->setId($id)
            ->setNickname($nickname)
            ->setEmail($email)
            ->setCompanyname($companyname)
            ->setAddress($address)
            ->setContactname($contactname)
            ->setContactemail($contactemail)
            ->setTelephone($telephone)
            ->setFax($fax)
            ->setCredits($credits)
            ->setClientcode($clientcode)
            ->setComments($comments)
            ->setCreationtime($creationtime)
            ->setLastmodified($lastmodified)
            ->setActive($active)
            ->setAccount_id($account_id)
            ->setAccount_name($account_name)
            ->setUsergroups($usergroups)
            ->setCreditthreshold($creditthreshold)
            ->setNotificationrecipients($notificationrecipients);
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * Get credits value
     * @return int|null
     */
    public function getCredits()
    {
        return $this->credits;
    }
    /**
     * Set credits value
     * @param int $credits
     * @return \Webservices\StructType\User
     */
    public function setCredits($credits = null)
    {
        // validation for constraint: int
        if (!is_null($credits) && !is_numeric($credits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($credits)), __LINE__);
        }
        $this->credits = $credits;
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
     * @return \Webservices\StructType\User
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
     * @return \Webservices\StructType\User
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
     * Get creationtime value
     * @return string|null
     */
    public function getCreationtime()
    {
        return $this->creationtime;
    }
    /**
     * Set creationtime value
     * @param string $creationtime
     * @return \Webservices\StructType\User
     */
    public function setCreationtime($creationtime = null)
    {
        // validation for constraint: string
        if (!is_null($creationtime) && !is_string($creationtime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationtime)), __LINE__);
        }
        $this->creationtime = $creationtime;
        return $this;
    }
    /**
     * Get lastmodified value
     * @return string|null
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }
    /**
     * Set lastmodified value
     * @param string $lastmodified
     * @return \Webservices\StructType\User
     */
    public function setLastmodified($lastmodified = null)
    {
        // validation for constraint: string
        if (!is_null($lastmodified) && !is_string($lastmodified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastmodified)), __LINE__);
        }
        $this->lastmodified = $lastmodified;
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Webservices\StructType\User
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get account_id value
     * @return int|null
     */
    public function getAccount_id()
    {
        return $this->account_id;
    }
    /**
     * Set account_id value
     * @param int $account_id
     * @return \Webservices\StructType\User
     */
    public function setAccount_id($account_id = null)
    {
        // validation for constraint: int
        if (!is_null($account_id) && !is_numeric($account_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($account_id)), __LINE__);
        }
        $this->account_id = $account_id;
        return $this;
    }
    /**
     * Get account_name value
     * @return string|null
     */
    public function getAccount_name()
    {
        return $this->account_name;
    }
    /**
     * Set account_name value
     * @param string $account_name
     * @return \Webservices\StructType\User
     */
    public function setAccount_name($account_name = null)
    {
        // validation for constraint: string
        if (!is_null($account_name) && !is_string($account_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_name)), __LINE__);
        }
        $this->account_name = $account_name;
        return $this;
    }
    /**
     * Get usergroups value
     * @return \Webservices\ArrayType\UserGroupArray|null
     */
    public function getUsergroups()
    {
        return $this->usergroups;
    }
    /**
     * Set usergroups value
     * @param \Webservices\ArrayType\UserGroupArray $usergroups
     * @return \Webservices\StructType\User
     */
    public function setUsergroups(\Webservices\ArrayType\UserGroupArray $usergroups = null)
    {
        $this->usergroups = $usergroups;
        return $this;
    }
    /**
     * Get creditthreshold value
     * @return int|null
     */
    public function getCreditthreshold()
    {
        return $this->creditthreshold;
    }
    /**
     * Set creditthreshold value
     * @param int $creditthreshold
     * @return \Webservices\StructType\User
     */
    public function setCreditthreshold($creditthreshold = null)
    {
        // validation for constraint: int
        if (!is_null($creditthreshold) && !is_numeric($creditthreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($creditthreshold)), __LINE__);
        }
        $this->creditthreshold = $creditthreshold;
        return $this;
    }
    /**
     * Get notificationrecipients value
     * @return string|null
     */
    public function getNotificationrecipients()
    {
        return $this->notificationrecipients;
    }
    /**
     * Set notificationrecipients value
     * @param string $notificationrecipients
     * @return \Webservices\StructType\User
     */
    public function setNotificationrecipients($notificationrecipients = null)
    {
        // validation for constraint: string
        if (!is_null($notificationrecipients) && !is_string($notificationrecipients)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationrecipients)), __LINE__);
        }
        $this->notificationrecipients = $notificationrecipients;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\User
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
