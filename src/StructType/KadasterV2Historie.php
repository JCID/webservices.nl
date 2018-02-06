<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Historie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Historie extends AbstractStructBase
{
    /**
     * The kadaster_historie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public $kadaster_historie;
    /**
     * Constructor method for KadasterV2Historie
     * @uses KadasterV2Historie::setKadaster_historie()
     * @param \Webservices\StructType\KadasterV2KadasterHistorie $kadaster_historie
     */
    public function __construct(\Webservices\StructType\KadasterV2KadasterHistorie $kadaster_historie = null)
    {
        $this
            ->setKadaster_historie($kadaster_historie);
    }
    /**
     * Get kadaster_historie value
     * @return \Webservices\StructType\KadasterV2KadasterHistorie|null
     */
    public function getKadaster_historie()
    {
        return $this->kadaster_historie;
    }
    /**
     * Set kadaster_historie value
     * @param \Webservices\StructType\KadasterV2KadasterHistorie $kadaster_historie
     * @return \Webservices\StructType\KadasterV2Historie
     */
    public function setKadaster_historie(\Webservices\StructType\KadasterV2KadasterHistorie $kadaster_historie = null)
    {
        $this->kadaster_historie = $kadaster_historie;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Historie
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
