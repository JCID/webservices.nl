<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createTestUserRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreateTestUserRequestType extends AbstractStructBase
{
    /**
     * The application
     * @var string
     */
    public $application;
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
     * The contactname
     * @var string
     */
    public $contactname;
    /**
     * The telephone
     * @var string
     */
    public $telephone;
    /**
     * Constructor method for createTestUserRequestType
     * @uses CreateTestUserRequestType::setApplication()
     * @uses CreateTestUserRequestType::setEmail()
     * @uses CreateTestUserRequestType::setCompanyname()
     * @uses CreateTestUserRequestType::setContactname()
     * @uses CreateTestUserRequestType::setTelephone()
     * @param string $application
     * @param string $email
     * @param string $companyname
     * @param string $contactname
     * @param string $telephone
     */
    public function __construct($application = null, $email = null, $companyname = null, $contactname = null, $telephone = null)
    {
        $this
            ->setApplication($application)
            ->setEmail($email)
            ->setCompanyname($companyname)
            ->setContactname($contactname)
            ->setTelephone($telephone);
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication()
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Webservices\StructType\CreateTestUserRequestType
     */
    public function setApplication($application = null)
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($application)), __LINE__);
        }
        $this->application = $application;
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
     * @return \Webservices\StructType\CreateTestUserRequestType
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
     * @return \Webservices\StructType\CreateTestUserRequestType
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
     * @return \Webservices\StructType\CreateTestUserRequestType
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
     * @return \Webservices\StructType\CreateTestUserRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreateTestUserRequestType
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
