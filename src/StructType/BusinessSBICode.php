<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessSBICode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessSBICode extends AbstractStructBase
{
    /**
     * The sbicode
     * @var string
     */
    public $sbicode;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for BusinessSBICode
     * @uses BusinessSBICode::setSbicode()
     * @uses BusinessSBICode::setDescription()
     * @param string $sbicode
     * @param string $description
     */
    public function __construct($sbicode = null, $description = null)
    {
        $this
            ->setSbicode($sbicode)
            ->setDescription($description);
    }
    /**
     * Get sbicode value
     * @return string|null
     */
    public function getSbicode()
    {
        return $this->sbicode;
    }
    /**
     * Set sbicode value
     * @param string $sbicode
     * @return \Webservices\StructType\BusinessSBICode
     */
    public function setSbicode($sbicode = null)
    {
        // validation for constraint: string
        if (!is_null($sbicode) && !is_string($sbicode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sbicode)), __LINE__);
        }
        $this->sbicode = $sbicode;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\BusinessSBICode
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessSBICode
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
