<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyPublications StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyPublications extends AbstractStructBase
{
    /**
     * The is_legacy
     * @var bool
     */
    public $is_legacy;
    /**
     * The event
     * @var \Webservices\ArrayType\InsolvencyPublicationArray
     */
    public $event;
    /**
     * Constructor method for InsolvencyPublications
     * @uses InsolvencyPublications::setIs_legacy()
     * @uses InsolvencyPublications::setEvent()
     * @param bool $is_legacy
     * @param \Webservices\ArrayType\InsolvencyPublicationArray $event
     */
    public function __construct($is_legacy = null, \Webservices\ArrayType\InsolvencyPublicationArray $event = null)
    {
        $this
            ->setIs_legacy($is_legacy)
            ->setEvent($event);
    }
    /**
     * Get is_legacy value
     * @return bool|null
     */
    public function getIs_legacy()
    {
        return $this->is_legacy;
    }
    /**
     * Set is_legacy value
     * @param bool $is_legacy
     * @return \Webservices\StructType\InsolvencyPublications
     */
    public function setIs_legacy($is_legacy = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_legacy) && !is_bool($is_legacy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_legacy)), __LINE__);
        }
        $this->is_legacy = $is_legacy;
        return $this;
    }
    /**
     * Get event value
     * @return \Webservices\ArrayType\InsolvencyPublicationArray|null
     */
    public function getEvent()
    {
        return $this->event;
    }
    /**
     * Set event value
     * @param \Webservices\ArrayType\InsolvencyPublicationArray $event
     * @return \Webservices\StructType\InsolvencyPublications
     */
    public function setEvent(\Webservices\ArrayType\InsolvencyPublicationArray $event = null)
    {
        $this->event = $event;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyPublications
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
