<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutePlannerRoute StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerRoute extends AbstractStructBase
{
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Webservices\ArrayType\RoutePartArray
     */
    public $description;
    /**
     * The start
     * @var \Webservices\StructType\RouteLocation
     */
    public $start;
    /**
     * The destination
     * @var \Webservices\StructType\RouteLocation
     */
    public $destination;
    /**
     * The summary
     * @var \Webservices\StructType\RouteSummary
     */
    public $summary;
    /**
     * The map
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $map;
    /**
     * Constructor method for RoutePlannerRoute
     * @uses RoutePlannerRoute::setDescription()
     * @uses RoutePlannerRoute::setStart()
     * @uses RoutePlannerRoute::setDestination()
     * @uses RoutePlannerRoute::setSummary()
     * @uses RoutePlannerRoute::setMap()
     * @param \Webservices\ArrayType\RoutePartArray $description
     * @param \Webservices\StructType\RouteLocation $start
     * @param \Webservices\StructType\RouteLocation $destination
     * @param \Webservices\StructType\RouteSummary $summary
     * @param string $map
     */
    public function __construct(\Webservices\ArrayType\RoutePartArray $description = null, \Webservices\StructType\RouteLocation $start = null, \Webservices\StructType\RouteLocation $destination = null, \Webservices\StructType\RouteSummary $summary = null, $map = null)
    {
        $this
            ->setDescription($description)
            ->setStart($start)
            ->setDestination($destination)
            ->setSummary($summary)
            ->setMap($map);
    }
    /**
     * Get description value
     * @return \Webservices\ArrayType\RoutePartArray
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param \Webservices\ArrayType\RoutePartArray $description
     * @return \Webservices\StructType\RoutePlannerRoute
     */
    public function setDescription(\Webservices\ArrayType\RoutePartArray $description = null)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get start value
     * @return \Webservices\StructType\RouteLocation|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param \Webservices\StructType\RouteLocation $start
     * @return \Webservices\StructType\RoutePlannerRoute
     */
    public function setStart(\Webservices\StructType\RouteLocation $start = null)
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Get destination value
     * @return \Webservices\StructType\RouteLocation|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param \Webservices\StructType\RouteLocation $destination
     * @return \Webservices\StructType\RoutePlannerRoute
     */
    public function setDestination(\Webservices\StructType\RouteLocation $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }
    /**
     * Get summary value
     * @return \Webservices\StructType\RouteSummary|null
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * Set summary value
     * @param \Webservices\StructType\RouteSummary $summary
     * @return \Webservices\StructType\RoutePlannerRoute
     */
    public function setSummary(\Webservices\StructType\RouteSummary $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * Get map value
     * @return string|null
     */
    public function getMap()
    {
        return $this->map;
    }
    /**
     * Set map value
     * @param string $map
     * @return \Webservices\StructType\RoutePlannerRoute
     */
    public function setMap($map = null)
    {
        // validation for constraint: string
        if (!is_null($map) && !is_string($map)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($map)), __LINE__);
        }
        $this->map = $map;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerRoute
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
