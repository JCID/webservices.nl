<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchVehicleBodyApproval StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchVehicleBodyApproval extends AbstractStructBase
{
    /**
     * The type_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $type_id;
    /**
     * The type_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type_code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for DutchVehicleBodyApproval
     * @uses DutchVehicleBodyApproval::setType_id()
     * @uses DutchVehicleBodyApproval::setType_code()
     * @uses DutchVehicleBodyApproval::setDescription()
     * @param int $type_id
     * @param string $type_code
     * @param string $description
     */
    public function __construct($type_id = null, $type_code = null, $description = null)
    {
        $this
            ->setType_id($type_id)
            ->setType_code($type_code)
            ->setDescription($description);
    }
    /**
     * Get type_id value
     * @return int|null
     */
    public function getType_id()
    {
        return $this->type_id;
    }
    /**
     * Set type_id value
     * @param int $type_id
     * @return \Webservices\StructType\DutchVehicleBodyApproval
     */
    public function setType_id($type_id = null)
    {
        // validation for constraint: int
        if (!is_null($type_id) && !is_numeric($type_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($type_id)), __LINE__);
        }
        $this->type_id = $type_id;
        return $this;
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
     * @return \Webservices\StructType\DutchVehicleBodyApproval
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
     * @return \Webservices\StructType\DutchVehicleBodyApproval
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
     * @return \Webservices\StructType\DutchVehicleBodyApproval
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
