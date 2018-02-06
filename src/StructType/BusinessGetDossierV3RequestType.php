<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessGetDossierV3RequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessGetDossierV3RequestType extends AbstractStructBase
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
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for businessGetDossierV3RequestType
     * @uses BusinessGetDossierV3RequestType::setDossierno()
     * @uses BusinessGetDossierV3RequestType::setSubdossierno()
     * @uses BusinessGetDossierV3RequestType::setPage()
     * @param string $dossierno
     * @param string $subdossierno
     * @param int $page
     */
    public function __construct($dossierno = null, $subdossierno = null, $page = null)
    {
        $this
            ->setDossierno($dossierno)
            ->setSubdossierno($subdossierno)
            ->setPage($page);
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
     * @return \Webservices\StructType\BusinessGetDossierV3RequestType
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
     * @return \Webservices\StructType\BusinessGetDossierV3RequestType
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
     * @return \Webservices\StructType\BusinessGetDossierV3RequestType
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
     * @return \Webservices\StructType\BusinessGetDossierV3RequestType
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
