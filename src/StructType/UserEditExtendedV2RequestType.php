<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for userEditExtendedV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UserEditExtendedV2RequestType extends AbstractStructBase
{
    /**
     * The userid
     * @var int
     */
    public $userid;
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
     * The accountid
     * @var int
     */
    public $accountid;
    /**
     * The balancethreshold
     * @var float
     */
    public $balancethreshold;
    /**
     * The notificationrecipients
     * @var string
     */
    public $notificationrecipients;
    /**
     * Constructor method for userEditExtendedV2RequestType
     * @uses UserEditExtendedV2RequestType::setUserid()
     * @uses UserEditExtendedV2RequestType::setNickname()
     * @uses UserEditExtendedV2RequestType::setPassword()
     * @uses UserEditExtendedV2RequestType::setEmail()
     * @uses UserEditExtendedV2RequestType::setCompanyname()
     * @uses UserEditExtendedV2RequestType::setAddress()
     * @uses UserEditExtendedV2RequestType::setContactname()
     * @uses UserEditExtendedV2RequestType::setContactemail()
     * @uses UserEditExtendedV2RequestType::setTelephone()
     * @uses UserEditExtendedV2RequestType::setFax()
     * @uses UserEditExtendedV2RequestType::setClientcode()
     * @uses UserEditExtendedV2RequestType::setComments()
     * @uses UserEditExtendedV2RequestType::setAccountid()
     * @uses UserEditExtendedV2RequestType::setBalancethreshold()
     * @uses UserEditExtendedV2RequestType::setNotificationrecipients()
     * @param int $userid
     * @param string $nickname
     * @param string $password
     * @param string $email
     * @param string $companyname
     * @param string $address
     * @param string $contactname
     * @param string $contactemail
     * @param string $telephone
     * @param string $fax
     * @param string $clientcode
     * @param string $comments
     * @param int $accountid
     * @param float $balancethreshold
     * @param string $notificationrecipients
     */
    public function __construct($userid = null, $nickname = null, $password = null, $email = null, $companyname = null, $address = null, $contactname = null, $contactemail = null, $telephone = null, $fax = null, $clientcode = null, $comments = null, $accountid = null, $balancethreshold = null, $notificationrecipients = null)
    {
        $this
            ->setUserid($userid)
            ->setNickname($nickname)
            ->setPassword($password)
            ->setEmail($email)
            ->setCompanyname($companyname)
            ->setAddress($address)
            ->setContactname($contactname)
            ->setContactemail($contactemail)
            ->setTelephone($telephone)
            ->setFax($fax)
            ->setClientcode($clientcode)
            ->setComments($comments)
            ->setAccountid($accountid)
            ->setBalancethreshold($balancethreshold)
            ->setNotificationrecipients($notificationrecipients);
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * Get balancethreshold value
     * @return float|null
     */
    public function getBalancethreshold()
    {
        return $this->balancethreshold;
    }
    /**
     * Set balancethreshold value
     * @param float $balancethreshold
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
     */
    public function setBalancethreshold($balancethreshold = null)
    {
        $this->balancethreshold = $balancethreshold;
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
     * @return \Webservices\StructType\UserEditExtendedV2RequestType
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
