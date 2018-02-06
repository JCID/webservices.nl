<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creditsafeMonitorGetUpdatedCompaniesResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeMonitorGetUpdatedCompaniesResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\CreditsafeCompanyUpdatePagedResult
     */
    public $out;
    /**
     * Constructor method for creditsafeMonitorGetUpdatedCompaniesResponseType
     * @uses CreditsafeMonitorGetUpdatedCompaniesResponseType::setOut()
     * @param \Webservices\StructType\CreditsafeCompanyUpdatePagedResult $out
     */
    public function __construct(\Webservices\StructType\CreditsafeCompanyUpdatePagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\CreditsafeCompanyUpdatePagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\CreditsafeCompanyUpdatePagedResult $out
     * @return \Webservices\StructType\CreditsafeMonitorGetUpdatedCompaniesResponseType
     */
    public function setOut(\Webservices\StructType\CreditsafeCompanyUpdatePagedResult $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeMonitorGetUpdatedCompaniesResponseType
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
