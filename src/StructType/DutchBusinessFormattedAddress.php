<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessFormattedAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessFormattedAddress extends AbstractStructBase
{
    /**
     * The original
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $original;
    /**
     * The official
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $official;
    /**
     * The formatted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\DutchBusinessAddressV3
     */
    public $formatted;
    /**
     * Constructor method for DutchBusinessFormattedAddress
     * @uses DutchBusinessFormattedAddress::setOriginal()
     * @uses DutchBusinessFormattedAddress::setOfficial()
     * @uses DutchBusinessFormattedAddress::setFormatted()
     * @param \Webservices\StructType\DutchBusinessAddressV3 $original
     * @param \Webservices\StructType\DutchBusinessAddressV3 $official
     * @param \Webservices\StructType\DutchBusinessAddressV3 $formatted
     */
    public function __construct(\Webservices\StructType\DutchBusinessAddressV3 $original = null, \Webservices\StructType\DutchBusinessAddressV3 $official = null, \Webservices\StructType\DutchBusinessAddressV3 $formatted = null)
    {
        $this
            ->setOriginal($original)
            ->setOfficial($official)
            ->setFormatted($formatted);
    }
    /**
     * Get original value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getOriginal()
    {
        return $this->original;
    }
    /**
     * Set original value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $original
     * @return \Webservices\StructType\DutchBusinessFormattedAddress
     */
    public function setOriginal(\Webservices\StructType\DutchBusinessAddressV3 $original = null)
    {
        $this->original = $original;
        return $this;
    }
    /**
     * Get official value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getOfficial()
    {
        return $this->official;
    }
    /**
     * Set official value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $official
     * @return \Webservices\StructType\DutchBusinessFormattedAddress
     */
    public function setOfficial(\Webservices\StructType\DutchBusinessAddressV3 $official = null)
    {
        $this->official = $official;
        return $this;
    }
    /**
     * Get formatted value
     * @return \Webservices\StructType\DutchBusinessAddressV3|null
     */
    public function getFormatted()
    {
        return $this->formatted;
    }
    /**
     * Set formatted value
     * @param \Webservices\StructType\DutchBusinessAddressV3 $formatted
     * @return \Webservices\StructType\DutchBusinessFormattedAddress
     */
    public function setFormatted(\Webservices\StructType\DutchBusinessAddressV3 $formatted = null)
    {
        $this->formatted = $formatted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessFormattedAddress
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
