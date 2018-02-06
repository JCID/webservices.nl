<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCreditFactor StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCreditFactor extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The adjustment
     * @var int
     */
    public $adjustment;
    /**
     * Constructor method for GCRCreditFactor
     * @uses GCRCreditFactor::setType()
     * @uses GCRCreditFactor::setDescription()
     * @uses GCRCreditFactor::setAdjustment()
     * @param string $type
     * @param string $description
     * @param int $adjustment
     */
    public function __construct($type = null, $description = null, $adjustment = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setAdjustment($adjustment);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\GCRCreditFactor
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Webservices\StructType\GCRCreditFactor
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
     * Get adjustment value
     * @return int|null
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }
    /**
     * Set adjustment value
     * @param int $adjustment
     * @return \Webservices\StructType\GCRCreditFactor
     */
    public function setAdjustment($adjustment = null)
    {
        // validation for constraint: int
        if (!is_null($adjustment) && !is_numeric($adjustment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($adjustment)), __LINE__);
        }
        $this->adjustment = $adjustment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCreditFactor
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
