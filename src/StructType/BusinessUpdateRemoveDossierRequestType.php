<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessUpdateRemoveDossierRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessUpdateRemoveDossierRequestType extends AbstractStructBase
{
    /**
     * The dossierno
     * @var string
     */
    public $dossierno;
    /**
     * The subdossierno
     * @var string
     */
    public $subdossierno;
    /**
     * Constructor method for businessUpdateRemoveDossierRequestType
     * @uses BusinessUpdateRemoveDossierRequestType::setDossierno()
     * @uses BusinessUpdateRemoveDossierRequestType::setSubdossierno()
     * @param string $dossierno
     * @param string $subdossierno
     */
    public function __construct($dossierno = null, $subdossierno = null)
    {
        $this
            ->setDossierno($dossierno)
            ->setSubdossierno($subdossierno);
    }
    /**
     * Get dossierno value
     * @return string|null
     */
    public function getDossierno()
    {
        return $this->dossierno;
    }
    /**
     * Set dossierno value
     * @param string $dossierno
     * @return \Webservices\StructType\BusinessUpdateRemoveDossierRequestType
     */
    public function setDossierno($dossierno = null)
    {
        // validation for constraint: string
        if (!is_null($dossierno) && !is_string($dossierno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossierno)), __LINE__);
        }
        $this->dossierno = $dossierno;
        return $this;
    }
    /**
     * Get subdossierno value
     * @return string|null
     */
    public function getSubdossierno()
    {
        return $this->subdossierno;
    }
    /**
     * Set subdossierno value
     * @param string $subdossierno
     * @return \Webservices\StructType\BusinessUpdateRemoveDossierRequestType
     */
    public function setSubdossierno($subdossierno = null)
    {
        // validation for constraint: string
        if (!is_null($subdossierno) && !is_string($subdossierno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subdossierno)), __LINE__);
        }
        $this->subdossierno = $subdossierno;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessUpdateRemoveDossierRequestType
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
