<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRTradeName StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRTradeName extends AbstractStructBase
{
    /**
     * The is_current
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_current;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The date_until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_until;
    /**
     * Constructor method for GCRTradeName
     * @uses GCRTradeName::setIs_current()
     * @uses GCRTradeName::setName()
     * @uses GCRTradeName::setDate_from()
     * @uses GCRTradeName::setDate_until()
     * @param bool $is_current
     * @param string $name
     * @param string $date_from
     * @param string $date_until
     */
    public function __construct($is_current = null, $name = null, $date_from = null, $date_until = null)
    {
        $this
            ->setIs_current($is_current)
            ->setName($name)
            ->setDate_from($date_from)
            ->setDate_until($date_until);
    }
    /**
     * Get is_current value
     * @return bool|null
     */
    public function getIs_current()
    {
        return $this->is_current;
    }
    /**
     * Set is_current value
     * @param bool $is_current
     * @return \Webservices\StructType\GCRTradeName
     */
    public function setIs_current($is_current = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_current) && !is_bool($is_current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_current)), __LINE__);
        }
        $this->is_current = $is_current;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\GCRTradeName
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRTradeName
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Get date_until value
     * @return string|null
     */
    public function getDate_until()
    {
        return $this->date_until;
    }
    /**
     * Set date_until value
     * @param string $date_until
     * @return \Webservices\StructType\GCRTradeName
     */
    public function setDate_until($date_until = null)
    {
        // validation for constraint: string
        if (!is_null($date_until) && !is_string($date_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_until)), __LINE__);
        }
        $this->date_until = $date_until;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRTradeName
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
