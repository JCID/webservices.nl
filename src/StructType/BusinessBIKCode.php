<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessBIKCode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessBIKCode extends AbstractStructBase
{
    /**
     * The bikcode
     * @var string
     */
    public $bikcode;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for BusinessBIKCode
     * @uses BusinessBIKCode::setBikcode()
     * @uses BusinessBIKCode::setDescription()
     * @param string $bikcode
     * @param string $description
     */
    public function __construct($bikcode = null, $description = null)
    {
        $this
            ->setBikcode($bikcode)
            ->setDescription($description);
    }
    /**
     * Get bikcode value
     * @return string|null
     */
    public function getBikcode()
    {
        return $this->bikcode;
    }
    /**
     * Set bikcode value
     * @param string $bikcode
     * @return \Webservices\StructType\BusinessBIKCode
     */
    public function setBikcode($bikcode = null)
    {
        // validation for constraint: string
        if (!is_null($bikcode) && !is_string($bikcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bikcode)), __LINE__);
        }
        $this->bikcode = $bikcode;
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
     * @return \Webservices\StructType\BusinessBIKCode
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
     * @return \Webservices\StructType\BusinessBIKCode
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
