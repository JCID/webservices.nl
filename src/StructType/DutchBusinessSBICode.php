<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessSBICode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSBICode extends AbstractStructBase
{
    /**
     * The sbi_code
     * @var string
     */
    public $sbi_code;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchBusinessSBICode
     * @uses DutchBusinessSBICode::setSbi_code()
     * @uses DutchBusinessSBICode::setDescription()
     * @param string $sbi_code
     * @param string $description
     */
    public function __construct($sbi_code = null, $description = null)
    {
        $this
            ->setSbi_code($sbi_code)
            ->setDescription($description);
    }
    /**
     * Get sbi_code value
     * @return string|null
     */
    public function getSbi_code()
    {
        return $this->sbi_code;
    }
    /**
     * Set sbi_code value
     * @param string $sbi_code
     * @return \Webservices\StructType\DutchBusinessSBICode
     */
    public function setSbi_code($sbi_code = null)
    {
        // validation for constraint: string
        if (!is_null($sbi_code) && !is_string($sbi_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sbi_code)), __LINE__);
        }
        $this->sbi_code = $sbi_code;
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
     * @return \Webservices\StructType\DutchBusinessSBICode
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
     * @return \Webservices\StructType\DutchBusinessSBICode
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
