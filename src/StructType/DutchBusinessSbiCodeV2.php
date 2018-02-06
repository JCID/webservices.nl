<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessSbiCodeV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSbiCodeV2 extends AbstractStructBase
{
    /**
     * The sbi_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sbi_code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchBusinessSbiCodeV2
     * @uses DutchBusinessSbiCodeV2::setSbi_code()
     * @uses DutchBusinessSbiCodeV2::setDescription()
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
     * @return \Webservices\StructType\DutchBusinessSbiCodeV2
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
     * @return \Webservices\StructType\DutchBusinessSbiCodeV2
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
     * @return \Webservices\StructType\DutchBusinessSbiCodeV2
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
