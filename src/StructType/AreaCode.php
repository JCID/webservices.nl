<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreaCode StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AreaCode extends AbstractStructBase
{
    /**
     * The areacode
     * @var string
     */
    public $areacode;
    /**
     * Constructor method for AreaCode
     * @uses AreaCode::setAreacode()
     * @param string $areacode
     */
    public function __construct($areacode = null)
    {
        $this
            ->setAreacode($areacode);
    }
    /**
     * Get areacode value
     * @return string|null
     */
    public function getAreacode()
    {
        return $this->areacode;
    }
    /**
     * Set areacode value
     * @param string $areacode
     * @return \Webservices\StructType\AreaCode
     */
    public function setAreacode($areacode = null)
    {
        // validation for constraint: string
        if (!is_null($areacode) && !is_string($areacode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areacode)), __LINE__);
        }
        $this->areacode = $areacode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\AreaCode
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
