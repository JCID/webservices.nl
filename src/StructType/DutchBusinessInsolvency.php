<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessInsolvency StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessInsolvency extends AbstractStructBase
{
    /**
     * The insolvency_id
     * @var string
     */
    public $insolvency_id;
    /**
     * The events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\DutchBusinessInsolvencyPublicationArray
     */
    public $events;
    /**
     * Constructor method for DutchBusinessInsolvency
     * @uses DutchBusinessInsolvency::setInsolvency_id()
     * @uses DutchBusinessInsolvency::setEvents()
     * @param string $insolvency_id
     * @param \Webservices\ArrayType\DutchBusinessInsolvencyPublicationArray $events
     */
    public function __construct($insolvency_id = null, \Webservices\ArrayType\DutchBusinessInsolvencyPublicationArray $events = null)
    {
        $this
            ->setInsolvency_id($insolvency_id)
            ->setEvents($events);
    }
    /**
     * Get insolvency_id value
     * @return string|null
     */
    public function getInsolvency_id()
    {
        return $this->insolvency_id;
    }
    /**
     * Set insolvency_id value
     * @param string $insolvency_id
     * @return \Webservices\StructType\DutchBusinessInsolvency
     */
    public function setInsolvency_id($insolvency_id = null)
    {
        // validation for constraint: string
        if (!is_null($insolvency_id) && !is_string($insolvency_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insolvency_id)), __LINE__);
        }
        $this->insolvency_id = $insolvency_id;
        return $this;
    }
    /**
     * Get events value
     * @return \Webservices\ArrayType\DutchBusinessInsolvencyPublicationArray|null
     */
    public function getEvents()
    {
        return $this->events;
    }
    /**
     * Set events value
     * @param \Webservices\ArrayType\DutchBusinessInsolvencyPublicationArray $events
     * @return \Webservices\StructType\DutchBusinessInsolvency
     */
    public function setEvents(\Webservices\ArrayType\DutchBusinessInsolvencyPublicationArray $events = null)
    {
        $this->events = $events;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessInsolvency
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
