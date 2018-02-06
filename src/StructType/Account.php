<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Account extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The environment
     * @var string
     */
    public $environment;
    /**
     * The reseller
     * @var bool
     */
    public $reseller;
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
     * The description
     * @var string
     */
    public $description;
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
     * The usernameprefix
     * @var string
     */
    public $usernameprefix;
    /**
     * The creditthreshold
     * @var int
     */
    public $creditthreshold;
    /**
     * Constructor method for Account
     * @uses Account::setId()
     * @uses Account::setName()
     * @uses Account::setAddress()
     * @uses Account::setEnvironment()
     * @uses Account::setReseller()
     * @uses Account::setContactname()
     * @uses Account::setContactemail()
     * @uses Account::setTelephone()
     * @uses Account::setFax()
     * @uses Account::setDescription()
     * @uses Account::setCreationtime()
     * @uses Account::setLastmodified()
     * @uses Account::setCredits()
     * @uses Account::setClientcode()
     * @uses Account::setComments()
     * @uses Account::setUsernameprefix()
     * @uses Account::setCreditthreshold()
     * @param int $id
     * @param string $name
     * @param string $address
     * @param string $environment
     * @param bool $reseller
     * @param string $contactname
     * @param string $contactemail
     * @param string $telephone
     * @param string $fax
     * @param string $description
     * @param string $creationtime
     * @param string $lastmodified
     * @param int $credits
     * @param string $clientcode
     * @param string $comments
     * @param string $usernameprefix
     * @param int $creditthreshold
     */
    public function __construct($id = null, $name = null, $address = null, $environment = null, $reseller = null, $contactname = null, $contactemail = null, $telephone = null, $fax = null, $description = null, $creationtime = null, $lastmodified = null, $credits = null, $clientcode = null, $comments = null, $usernameprefix = null, $creditthreshold = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setAddress($address)
            ->setEnvironment($environment)
            ->setReseller($reseller)
            ->setContactname($contactname)
            ->setContactemail($contactemail)
            ->setTelephone($telephone)
            ->setFax($fax)
            ->setDescription($description)
            ->setCreationtime($creationtime)
            ->setLastmodified($lastmodified)
            ->setCredits($credits)
            ->setClientcode($clientcode)
            ->setComments($comments)
            ->setUsernameprefix($usernameprefix)
            ->setCreditthreshold($creditthreshold);
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
     * @return \Webservices\StructType\Account
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\Account
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
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
     * @return \Webservices\StructType\Account
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
     * Get environment value
     * @return string|null
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /**
     * Set environment value
     * @param string $environment
     * @return \Webservices\StructType\Account
     */
    public function setEnvironment($environment = null)
    {
        // validation for constraint: string
        if (!is_null($environment) && !is_string($environment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($environment)), __LINE__);
        }
        $this->environment = $environment;
        return $this;
    }
    /**
     * Get reseller value
     * @return bool|null
     */
    public function getReseller()
    {
        return $this->reseller;
    }
    /**
     * Set reseller value
     * @param bool $reseller
     * @return \Webservices\StructType\Account
     */
    public function setReseller($reseller = null)
    {
        // validation for constraint: boolean
        if (!is_null($reseller) && !is_bool($reseller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reseller)), __LINE__);
        }
        $this->reseller = $reseller;
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\Account
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * @return \Webservices\StructType\Account
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
     * Get usernameprefix value
     * @return string|null
     */
    public function getUsernameprefix()
    {
        return $this->usernameprefix;
    }
    /**
     * Set usernameprefix value
     * @param string $usernameprefix
     * @return \Webservices\StructType\Account
     */
    public function setUsernameprefix($usernameprefix = null)
    {
        // validation for constraint: string
        if (!is_null($usernameprefix) && !is_string($usernameprefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usernameprefix)), __LINE__);
        }
        $this->usernameprefix = $usernameprefix;
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
     * @return \Webservices\StructType\Account
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Account
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
