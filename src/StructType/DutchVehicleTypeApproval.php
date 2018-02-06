<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleTypeApproval StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleTypeApproval extends AbstractStructBase
{
    /**
     * The type_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type_code;
    /**
     * The version_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version_code;
    /**
     * The type_approval_mark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type_approval_mark;
    /**
     * Constructor method for DutchVehicleTypeApproval
     * @uses DutchVehicleTypeApproval::setType_code()
     * @uses DutchVehicleTypeApproval::setVersion_code()
     * @uses DutchVehicleTypeApproval::setType_approval_mark()
     * @param string $type_code
     * @param string $version_code
     * @param string $type_approval_mark
     */
    public function __construct($type_code = null, $version_code = null, $type_approval_mark = null)
    {
        $this
            ->setType_code($type_code)
            ->setVersion_code($version_code)
            ->setType_approval_mark($type_approval_mark);
    }
    /**
     * Get type_code value
     * @return string|null
     */
    public function getType_code()
    {
        return $this->type_code;
    }
    /**
     * Set type_code value
     * @param string $type_code
     * @return \Webservices\StructType\DutchVehicleTypeApproval
     */
    public function setType_code($type_code = null)
    {
        // validation for constraint: string
        if (!is_null($type_code) && !is_string($type_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type_code)), __LINE__);
        }
        $this->type_code = $type_code;
        return $this;
    }
    /**
     * Get version_code value
     * @return string|null
     */
    public function getVersion_code()
    {
        return $this->version_code;
    }
    /**
     * Set version_code value
     * @param string $version_code
     * @return \Webservices\StructType\DutchVehicleTypeApproval
     */
    public function setVersion_code($version_code = null)
    {
        // validation for constraint: string
        if (!is_null($version_code) && !is_string($version_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version_code)), __LINE__);
        }
        $this->version_code = $version_code;
        return $this;
    }
    /**
     * Get type_approval_mark value
     * @return string|null
     */
    public function getType_approval_mark()
    {
        return $this->type_approval_mark;
    }
    /**
     * Set type_approval_mark value
     * @param string $type_approval_mark
     * @return \Webservices\StructType\DutchVehicleTypeApproval
     */
    public function setType_approval_mark($type_approval_mark = null)
    {
        // validation for constraint: string
        if (!is_null($type_approval_mark) && !is_string($type_approval_mark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type_approval_mark)), __LINE__);
        }
        $this->type_approval_mark = $type_approval_mark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchVehicleTypeApproval
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
