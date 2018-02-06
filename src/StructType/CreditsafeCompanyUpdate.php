<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeCompanyUpdate StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeCompanyUpdate extends AbstractStructBase
{
    /**
     * The company_id
     * @var string
     */
    public $company_id;
    /**
     * The changes
     * @var \Webservices\ArrayType\StringArray
     */
    public $changes;
    /**
     * The date_last_update
     * @var string
     */
    public $date_last_update;
    /**
     * Constructor method for CreditsafeCompanyUpdate
     * @uses CreditsafeCompanyUpdate::setCompany_id()
     * @uses CreditsafeCompanyUpdate::setChanges()
     * @uses CreditsafeCompanyUpdate::setDate_last_update()
     * @param string $company_id
     * @param \Webservices\ArrayType\StringArray $changes
     * @param string $date_last_update
     */
    public function __construct($company_id = null, \Webservices\ArrayType\StringArray $changes = null, $date_last_update = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setChanges($changes)
            ->setDate_last_update($date_last_update);
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
     * @return \Webservices\StructType\CreditsafeCompanyUpdate
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
     * Get changes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getChanges()
    {
        return $this->changes;
    }
    /**
     * Set changes value
     * @param \Webservices\ArrayType\StringArray $changes
     * @return \Webservices\StructType\CreditsafeCompanyUpdate
     */
    public function setChanges(\Webservices\ArrayType\StringArray $changes = null)
    {
        $this->changes = $changes;
        return $this;
    }
    /**
     * Get date_last_update value
     * @return string|null
     */
    public function getDate_last_update()
    {
        return $this->date_last_update;
    }
    /**
     * Set date_last_update value
     * @param string $date_last_update
     * @return \Webservices\StructType\CreditsafeCompanyUpdate
     */
    public function setDate_last_update($date_last_update = null)
    {
        // validation for constraint: string
        if (!is_null($date_last_update) && !is_string($date_last_update)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_last_update)), __LINE__);
        }
        $this->date_last_update = $date_last_update;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeCompanyUpdate
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
