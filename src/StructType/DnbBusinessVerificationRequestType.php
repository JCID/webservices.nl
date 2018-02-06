<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnbBusinessVerificationRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DnbBusinessVerificationRequestType extends AbstractStructBase
{
    /**
     * The company_id
     * @var string
     */
    public $company_id;
    /**
     * The company_id_type
     * @var string
     */
    public $company_id_type;
    /**
     * Constructor method for dnbBusinessVerificationRequestType
     * @uses DnbBusinessVerificationRequestType::setCompany_id()
     * @uses DnbBusinessVerificationRequestType::setCompany_id_type()
     * @param string $company_id
     * @param string $company_id_type
     */
    public function __construct($company_id = null, $company_id_type = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setCompany_id_type($company_id_type);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->company_id;
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \Webservices\StructType\DnbBusinessVerificationRequestType
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $company_id;
        return $this;
    }
    /**
     * Get company_id_type value
     * @return string|null
     */
    public function getCompany_id_type()
    {
        return $this->company_id_type;
    }
    /**
     * Set company_id_type value
     * @param string $company_id_type
     * @return \Webservices\StructType\DnbBusinessVerificationRequestType
     */
    public function setCompany_id_type($company_id_type = null)
    {
        // validation for constraint: string
        if (!is_null($company_id_type) && !is_string($company_id_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id_type)), __LINE__);
        }
        $this->company_id_type = $company_id_type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DnbBusinessVerificationRequestType
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
