<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountEditV2RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AccountEditV2RequestType extends AbstractStructBase
{
    /**
     * The accountid
     * @var int
     */
    public $accountid;
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
     * The description
     * @var string
     */
    public $description;
    /**
     * The balancethreshold
     * @var float
     */
    public $balancethreshold;
    /**
     * Constructor method for accountEditV2RequestType
     * @uses AccountEditV2RequestType::setAccountid()
     * @uses AccountEditV2RequestType::setAddress()
     * @uses AccountEditV2RequestType::setContactname()
     * @uses AccountEditV2RequestType::setContactemail()
     * @uses AccountEditV2RequestType::setTelephone()
     * @uses AccountEditV2RequestType::setFax()
     * @uses AccountEditV2RequestType::setDescription()
     * @uses AccountEditV2RequestType::setBalancethreshold()
     * @param int $accountid
     * @param string $address
     * @param string $contactname
     * @param string $contactemail
     * @param string $telephone
     * @param string $fax
     * @param string $description
     * @param float $balancethreshold
     */
    public function __construct($accountid = null, $address = null, $contactname = null, $contactemail = null, $telephone = null, $fax = null, $description = null, $balancethreshold = null)
    {
        $this
            ->setAccountid($accountid)
            ->setAddress($address)
            ->setContactname($contactname)
            ->setContactemail($contactemail)
            ->setTelephone($telephone)
            ->setFax($fax)
            ->setDescription($description)
            ->setBalancethreshold($balancethreshold);
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
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
     * @return \Webservices\StructType\AccountEditV2RequestType
     */
    public function setBalancethreshold($balancethreshold = null)
    {
        $this->balancethreshold = $balancethreshold;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AccountEditV2RequestType
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
