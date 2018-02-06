<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterAddressCoordinatesResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterAddressCoordinatesResponseType extends AbstractStructBase
{
    /**
     * The coordinates
     * @var \Webservices\StructType\KadasterCoordinates
     */
    public $coordinates;
    /**
     * Constructor method for kadasterAddressCoordinatesResponseType
     * @uses KadasterAddressCoordinatesResponseType::setCoordinates()
     * @param \Webservices\StructType\KadasterCoordinates $coordinates
     */
    public function __construct(\Webservices\StructType\KadasterCoordinates $coordinates = null)
    {
        $this
            ->setCoordinates($coordinates);
    }
    /**
     * Get coordinates value
     * @return \Webservices\StructType\KadasterCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Webservices\StructType\KadasterCoordinates $coordinates
     * @return \Webservices\StructType\KadasterAddressCoordinatesResponseType
     */
    public function setCoordinates(\Webservices\StructType\KadasterCoordinates $coordinates = null)
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterAddressCoordinatesResponseType
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
