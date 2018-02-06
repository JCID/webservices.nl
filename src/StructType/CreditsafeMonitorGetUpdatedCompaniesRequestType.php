<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creditsafeMonitorGetUpdatedCompaniesRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeMonitorGetUpdatedCompaniesRequestType extends AbstractStructBase
{
    /**
     * The changed_since
     * @var string
     */
    public $changed_since;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for creditsafeMonitorGetUpdatedCompaniesRequestType
     * @uses CreditsafeMonitorGetUpdatedCompaniesRequestType::setChanged_since()
     * @uses CreditsafeMonitorGetUpdatedCompaniesRequestType::setPage()
     * @param string $changed_since
     * @param int $page
     */
    public function __construct($changed_since = null, $page = null)
    {
        $this
            ->setChanged_since($changed_since)
            ->setPage($page);
    }
    /**
     * Get changed_since value
     * @return string|null
     */
    public function getChanged_since()
    {
        return $this->changed_since;
    }
    /**
     * Set changed_since value
     * @param string $changed_since
     * @return \Webservices\StructType\CreditsafeMonitorGetUpdatedCompaniesRequestType
     */
    public function setChanged_since($changed_since = null)
    {
        // validation for constraint: string
        if (!is_null($changed_since) && !is_string($changed_since)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($changed_since)), __LINE__);
        }
        $this->changed_since = $changed_since;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\CreditsafeMonitorGetUpdatedCompaniesRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeMonitorGetUpdatedCompaniesRequestType
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
