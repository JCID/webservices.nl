<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeBeEvent StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeBeEvent extends AbstractStructBase
{
    /**
     * The serial_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $serial_number;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for CreditsafeBeEvent
     * @uses CreditsafeBeEvent::setSerial_number()
     * @uses CreditsafeBeEvent::setDescription()
     * @param int $serial_number
     * @param string $description
     */
    public function __construct($serial_number = null, $description = null)
    {
        $this
            ->setSerial_number($serial_number)
            ->setDescription($description);
    }
    /**
     * Get serial_number value
     * @return int|null
     */
    public function getSerial_number()
    {
        return $this->serial_number;
    }
    /**
     * Set serial_number value
     * @param int $serial_number
     * @return \Webservices\StructType\CreditsafeBeEvent
     */
    public function setSerial_number($serial_number = null)
    {
        // validation for constraint: int
        if (!is_null($serial_number) && !is_numeric($serial_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serial_number)), __LINE__);
        }
        $this->serial_number = $serial_number;
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
     * @return \Webservices\StructType\CreditsafeBeEvent
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
     * @return \Webservices\StructType\CreditsafeBeEvent
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
