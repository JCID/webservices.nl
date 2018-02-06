<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplianceSanctionReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ComplianceSanctionReference extends AbstractStructBase
{
    /**
     * The organisation
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $organisation;
    /**
     * The active
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    public $active;
    /**
     * Constructor method for ComplianceSanctionReference
     * @uses ComplianceSanctionReference::setOrganisation()
     * @uses ComplianceSanctionReference::setActive()
     * @param string $organisation
     * @param bool $active
     */
    public function __construct($organisation = null, $active = null)
    {
        $this
            ->setOrganisation($organisation)
            ->setActive($active);
    }
    /**
     * Get organisation value
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param string $organisation
     * @return \Webservices\StructType\ComplianceSanctionReference
     */
    public function setOrganisation($organisation = null)
    {
        // validation for constraint: string
        if (!is_null($organisation) && !is_string($organisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organisation)), __LINE__);
        }
        $this->organisation = $organisation;
        return $this;
    }
    /**
     * Get active value
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Webservices\StructType\ComplianceSanctionReference
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ComplianceSanctionReference
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
