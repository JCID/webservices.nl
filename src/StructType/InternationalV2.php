<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InternationalV2 extends AbstractStructBase
{
    /**
     * The address
     * @var \Webservices\StructType\InternationalFormattedAddress
     */
    public $address;
    /**
     * The element_match_status
     * @var string
     */
    public $element_match_status;
    /**
     * The element_result_status
     * @var string
     */
    public $element_result_status;
    /**
     * Constructor method for InternationalV2
     * @uses InternationalV2::setAddress()
     * @uses InternationalV2::setElement_match_status()
     * @uses InternationalV2::setElement_result_status()
     * @param \Webservices\StructType\InternationalFormattedAddress $address
     * @param string $element_match_status
     * @param string $element_result_status
     */
    public function __construct(\Webservices\StructType\InternationalFormattedAddress $address = null, $element_match_status = null, $element_result_status = null)
    {
        $this
            ->setAddress($address)
            ->setElement_match_status($element_match_status)
            ->setElement_result_status($element_result_status);
    }
    /**
     * Get address value
     * @return \Webservices\StructType\InternationalFormattedAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Webservices\StructType\InternationalFormattedAddress $address
     * @return \Webservices\StructType\InternationalV2
     */
    public function setAddress(\Webservices\StructType\InternationalFormattedAddress $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get element_match_status value
     * @return string|null
     */
    public function getElement_match_status()
    {
        return $this->element_match_status;
    }
    /**
     * Set element_match_status value
     * @param string $element_match_status
     * @return \Webservices\StructType\InternationalV2
     */
    public function setElement_match_status($element_match_status = null)
    {
        // validation for constraint: string
        if (!is_null($element_match_status) && !is_string($element_match_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($element_match_status)), __LINE__);
        }
        $this->element_match_status = $element_match_status;
        return $this;
    }
    /**
     * Get element_result_status value
     * @return string|null
     */
    public function getElement_result_status()
    {
        return $this->element_result_status;
    }
    /**
     * Set element_result_status value
     * @param string $element_result_status
     * @return \Webservices\StructType\InternationalV2
     */
    public function setElement_result_status($element_result_status = null)
    {
        // validation for constraint: string
        if (!is_null($element_result_status) && !is_string($element_result_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($element_result_status)), __LINE__);
        }
        $this->element_result_status = $element_result_status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InternationalV2
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
