<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCalamity StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCalamity extends AbstractStructBase
{
    /**
     * The calamity_events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCalamityEventArray
     */
    public $calamity_events;
    /**
     * The other_calamities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRCalamityOtherArray
     */
    public $other_calamities;
    /**
     * Constructor method for GCRCalamity
     * @uses GCRCalamity::setCalamity_events()
     * @uses GCRCalamity::setOther_calamities()
     * @param \Webservices\ArrayType\GCRCalamityEventArray $calamity_events
     * @param \Webservices\ArrayType\GCRCalamityOtherArray $other_calamities
     */
    public function __construct(\Webservices\ArrayType\GCRCalamityEventArray $calamity_events = null, \Webservices\ArrayType\GCRCalamityOtherArray $other_calamities = null)
    {
        $this
            ->setCalamity_events($calamity_events)
            ->setOther_calamities($other_calamities);
    }
    /**
     * Get calamity_events value
     * @return \Webservices\ArrayType\GCRCalamityEventArray|null
     */
    public function getCalamity_events()
    {
        return $this->calamity_events;
    }
    /**
     * Set calamity_events value
     * @param \Webservices\ArrayType\GCRCalamityEventArray $calamity_events
     * @return \Webservices\StructType\GCRCalamity
     */
    public function setCalamity_events(\Webservices\ArrayType\GCRCalamityEventArray $calamity_events = null)
    {
        $this->calamity_events = $calamity_events;
        return $this;
    }
    /**
     * Get other_calamities value
     * @return \Webservices\ArrayType\GCRCalamityOtherArray|null
     */
    public function getOther_calamities()
    {
        return $this->other_calamities;
    }
    /**
     * Set other_calamities value
     * @param \Webservices\ArrayType\GCRCalamityOtherArray $other_calamities
     * @return \Webservices\StructType\GCRCalamity
     */
    public function setOther_calamities(\Webservices\ArrayType\GCRCalamityOtherArray $other_calamities = null)
    {
        $this->other_calamities = $other_calamities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCalamity
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
