<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeAdvisor StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeAdvisor extends AbstractStructBase
{
    /**
     * The auditor_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $auditor_name;
    /**
     * The solicitor_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $solicitor_name;
    /**
     * Constructor method for CreditsafeAdvisor
     * @uses CreditsafeAdvisor::setAuditor_name()
     * @uses CreditsafeAdvisor::setSolicitor_name()
     * @param string $auditor_name
     * @param string $solicitor_name
     */
    public function __construct($auditor_name = null, $solicitor_name = null)
    {
        $this
            ->setAuditor_name($auditor_name)
            ->setSolicitor_name($solicitor_name);
    }
    /**
     * Get auditor_name value
     * @return string|null
     */
    public function getAuditor_name()
    {
        return $this->auditor_name;
    }
    /**
     * Set auditor_name value
     * @param string $auditor_name
     * @return \Webservices\StructType\CreditsafeAdvisor
     */
    public function setAuditor_name($auditor_name = null)
    {
        // validation for constraint: string
        if (!is_null($auditor_name) && !is_string($auditor_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditor_name)), __LINE__);
        }
        $this->auditor_name = $auditor_name;
        return $this;
    }
    /**
     * Get solicitor_name value
     * @return string|null
     */
    public function getSolicitor_name()
    {
        return $this->solicitor_name;
    }
    /**
     * Set solicitor_name value
     * @param string $solicitor_name
     * @return \Webservices\StructType\CreditsafeAdvisor
     */
    public function setSolicitor_name($solicitor_name = null)
    {
        // validation for constraint: string
        if (!is_null($solicitor_name) && !is_string($solicitor_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($solicitor_name)), __LINE__);
        }
        $this->solicitor_name = $solicitor_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeAdvisor
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
