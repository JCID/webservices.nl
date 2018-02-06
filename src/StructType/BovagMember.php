<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BovagMember StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BovagMember extends AbstractStructBase
{
    /**
     * The bovag_id
     * @var string
     */
    public $bovag_id;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The certificate_url
     * @var string
     */
    public $certificate_url;
    /**
     * The departments
     * @var \Webservices\ArrayType\BovagDepartmentArray
     */
    public $departments;
    /**
     * The dutch_business_identifiers
     * @var \Webservices\StructType\DutchBusinessIdentifiers
     */
    public $dutch_business_identifiers;
    /**
     * Constructor method for BovagMember
     * @uses BovagMember::setBovag_id()
     * @uses BovagMember::setName()
     * @uses BovagMember::setCertificate_url()
     * @uses BovagMember::setDepartments()
     * @uses BovagMember::setDutch_business_identifiers()
     * @param string $bovag_id
     * @param string $name
     * @param string $certificate_url
     * @param \Webservices\ArrayType\BovagDepartmentArray $departments
     * @param \Webservices\StructType\DutchBusinessIdentifiers $dutch_business_identifiers
     */
    public function __construct($bovag_id = null, $name = null, $certificate_url = null, \Webservices\ArrayType\BovagDepartmentArray $departments = null, \Webservices\StructType\DutchBusinessIdentifiers $dutch_business_identifiers = null)
    {
        $this
            ->setBovag_id($bovag_id)
            ->setName($name)
            ->setCertificate_url($certificate_url)
            ->setDepartments($departments)
            ->setDutch_business_identifiers($dutch_business_identifiers);
    }
    /**
     * Get bovag_id value
     * @return string|null
     */
    public function getBovag_id()
    {
        return $this->bovag_id;
    }
    /**
     * Set bovag_id value
     * @param string $bovag_id
     * @return \Webservices\StructType\BovagMember
     */
    public function setBovag_id($bovag_id = null)
    {
        // validation for constraint: string
        if (!is_null($bovag_id) && !is_string($bovag_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bovag_id)), __LINE__);
        }
        $this->bovag_id = $bovag_id;
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
     * @return \Webservices\StructType\BovagMember
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
     * Get certificate_url value
     * @return string|null
     */
    public function getCertificate_url()
    {
        return $this->certificate_url;
    }
    /**
     * Set certificate_url value
     * @param string $certificate_url
     * @return \Webservices\StructType\BovagMember
     */
    public function setCertificate_url($certificate_url = null)
    {
        // validation for constraint: string
        if (!is_null($certificate_url) && !is_string($certificate_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificate_url)), __LINE__);
        }
        $this->certificate_url = $certificate_url;
        return $this;
    }
    /**
     * Get departments value
     * @return \Webservices\ArrayType\BovagDepartmentArray|null
     */
    public function getDepartments()
    {
        return $this->departments;
    }
    /**
     * Set departments value
     * @param \Webservices\ArrayType\BovagDepartmentArray $departments
     * @return \Webservices\StructType\BovagMember
     */
    public function setDepartments(\Webservices\ArrayType\BovagDepartmentArray $departments = null)
    {
        $this->departments = $departments;
        return $this;
    }
    /**
     * Get dutch_business_identifiers value
     * @return \Webservices\StructType\DutchBusinessIdentifiers|null
     */
    public function getDutch_business_identifiers()
    {
        return $this->dutch_business_identifiers;
    }
    /**
     * Set dutch_business_identifiers value
     * @param \Webservices\StructType\DutchBusinessIdentifiers $dutch_business_identifiers
     * @return \Webservices\StructType\BovagMember
     */
    public function setDutch_business_identifiers(\Webservices\StructType\DutchBusinessIdentifiers $dutch_business_identifiers = null)
    {
        $this->dutch_business_identifiers = $dutch_business_identifiers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BovagMember
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
