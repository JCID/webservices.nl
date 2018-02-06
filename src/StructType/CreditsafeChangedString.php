<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditsafeChangedString StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CreditsafeChangedString extends AbstractStructBase
{
    /**
     * The value
     * @var string
     */
    public $value;
    /**
     * The date_changed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_changed;
    /**
     * Constructor method for CreditsafeChangedString
     * @uses CreditsafeChangedString::setValue()
     * @uses CreditsafeChangedString::setDate_changed()
     * @param string $value
     * @param string $date_changed
     */
    public function __construct($value = null, $date_changed = null)
    {
        $this
            ->setValue($value)
            ->setDate_changed($date_changed);
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Webservices\StructType\CreditsafeChangedString
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get date_changed value
     * @return string|null
     */
    public function getDate_changed()
    {
        return $this->date_changed;
    }
    /**
     * Set date_changed value
     * @param string $date_changed
     * @return \Webservices\StructType\CreditsafeChangedString
     */
    public function setDate_changed($date_changed = null)
    {
        // validation for constraint: string
        if (!is_null($date_changed) && !is_string($date_changed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_changed)), __LINE__);
        }
        $this->date_changed = $date_changed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CreditsafeChangedString
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
