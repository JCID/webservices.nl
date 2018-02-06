<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for driveInfoDistanceLookupRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DriveInfoDistanceLookupRequestType extends AbstractStructBase
{
    /**
     * The nbcodefrom
     * @var string
     */
    public $nbcodefrom;
    /**
     * The nbcodeto
     * @var string
     */
    public $nbcodeto;
    /**
     * Constructor method for driveInfoDistanceLookupRequestType
     * @uses DriveInfoDistanceLookupRequestType::setNbcodefrom()
     * @uses DriveInfoDistanceLookupRequestType::setNbcodeto()
     * @param string $nbcodefrom
     * @param string $nbcodeto
     */
    public function __construct($nbcodefrom = null, $nbcodeto = null)
    {
        $this
            ->setNbcodefrom($nbcodefrom)
            ->setNbcodeto($nbcodeto);
    }
    /**
     * Get nbcodefrom value
     * @return string|null
     */
    public function getNbcodefrom()
    {
        return $this->nbcodefrom;
    }
    /**
     * Set nbcodefrom value
     * @param string $nbcodefrom
     * @return \Webservices\StructType\DriveInfoDistanceLookupRequestType
     */
    public function setNbcodefrom($nbcodefrom = null)
    {
        // validation for constraint: string
        if (!is_null($nbcodefrom) && !is_string($nbcodefrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcodefrom)), __LINE__);
        }
        $this->nbcodefrom = $nbcodefrom;
        return $this;
    }
    /**
     * Get nbcodeto value
     * @return string|null
     */
    public function getNbcodeto()
    {
        return $this->nbcodeto;
    }
    /**
     * Set nbcodeto value
     * @param string $nbcodeto
     * @return \Webservices\StructType\DriveInfoDistanceLookupRequestType
     */
    public function setNbcodeto($nbcodeto = null)
    {
        // validation for constraint: string
        if (!is_null($nbcodeto) && !is_string($nbcodeto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbcodeto)), __LINE__);
        }
        $this->nbcodeto = $nbcodeto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DriveInfoDistanceLookupRequestType
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
