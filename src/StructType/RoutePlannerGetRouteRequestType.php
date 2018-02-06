<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerGetRouteRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerGetRouteRequestType extends AbstractStructBase
{
    /**
     * The start_postcode
     * @var string
     */
    public $start_postcode;
    /**
     * The start_house_number
     * @var int
     */
    public $start_house_number;
    /**
     * The start_house_number_addition
     * @var string
     */
    public $start_house_number_addition;
    /**
     * The start_street
     * @var string
     */
    public $start_street;
    /**
     * The start_city
     * @var string
     */
    public $start_city;
    /**
     * The start_country
     * @var string
     */
    public $start_country;
    /**
     * The destination_postcode
     * @var string
     */
    public $destination_postcode;
    /**
     * The destination_house_number
     * @var int
     */
    public $destination_house_number;
    /**
     * The destination_house_number_addition
     * @var string
     */
    public $destination_house_number_addition;
    /**
     * The destination_street
     * @var string
     */
    public $destination_street;
    /**
     * The destination_city
     * @var string
     */
    public $destination_city;
    /**
     * The destination_country
     * @var string
     */
    public $destination_country;
    /**
     * The route_type
     * @var string
     */
    public $route_type;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for routePlannerGetRouteRequestType
     * @uses RoutePlannerGetRouteRequestType::setStart_postcode()
     * @uses RoutePlannerGetRouteRequestType::setStart_house_number()
     * @uses RoutePlannerGetRouteRequestType::setStart_house_number_addition()
     * @uses RoutePlannerGetRouteRequestType::setStart_street()
     * @uses RoutePlannerGetRouteRequestType::setStart_city()
     * @uses RoutePlannerGetRouteRequestType::setStart_country()
     * @uses RoutePlannerGetRouteRequestType::setDestination_postcode()
     * @uses RoutePlannerGetRouteRequestType::setDestination_house_number()
     * @uses RoutePlannerGetRouteRequestType::setDestination_house_number_addition()
     * @uses RoutePlannerGetRouteRequestType::setDestination_street()
     * @uses RoutePlannerGetRouteRequestType::setDestination_city()
     * @uses RoutePlannerGetRouteRequestType::setDestination_country()
     * @uses RoutePlannerGetRouteRequestType::setRoute_type()
     * @uses RoutePlannerGetRouteRequestType::setLanguage()
     * @param string $start_postcode
     * @param int $start_house_number
     * @param string $start_house_number_addition
     * @param string $start_street
     * @param string $start_city
     * @param string $start_country
     * @param string $destination_postcode
     * @param int $destination_house_number
     * @param string $destination_house_number_addition
     * @param string $destination_street
     * @param string $destination_city
     * @param string $destination_country
     * @param string $route_type
     * @param string $language
     */
    public function __construct($start_postcode = null, $start_house_number = null, $start_house_number_addition = null, $start_street = null, $start_city = null, $start_country = null, $destination_postcode = null, $destination_house_number = null, $destination_house_number_addition = null, $destination_street = null, $destination_city = null, $destination_country = null, $route_type = null, $language = null)
    {
        $this
            ->setStart_postcode($start_postcode)
            ->setStart_house_number($start_house_number)
            ->setStart_house_number_addition($start_house_number_addition)
            ->setStart_street($start_street)
            ->setStart_city($start_city)
            ->setStart_country($start_country)
            ->setDestination_postcode($destination_postcode)
            ->setDestination_house_number($destination_house_number)
            ->setDestination_house_number_addition($destination_house_number_addition)
            ->setDestination_street($destination_street)
            ->setDestination_city($destination_city)
            ->setDestination_country($destination_country)
            ->setRoute_type($route_type)
            ->setLanguage($language);
    }
    /**
     * Get start_postcode value
     * @return string|null
     */
    public function getStart_postcode()
    {
        return $this->start_postcode;
    }
    /**
     * Set start_postcode value
     * @param string $start_postcode
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setStart_postcode($start_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($start_postcode) && !is_string($start_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_postcode)), __LINE__);
        }
        $this->start_postcode = $start_postcode;
        return $this;
    }
    /**
     * Get start_house_number value
     * @return int|null
     */
    public function getStart_house_number()
    {
        return $this->start_house_number;
    }
    /**
     * Set start_house_number value
     * @param int $start_house_number
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setStart_house_number($start_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($start_house_number) && !is_numeric($start_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($start_house_number)), __LINE__);
        }
        $this->start_house_number = $start_house_number;
        return $this;
    }
    /**
     * Get start_house_number_addition value
     * @return string|null
     */
    public function getStart_house_number_addition()
    {
        return $this->start_house_number_addition;
    }
    /**
     * Set start_house_number_addition value
     * @param string $start_house_number_addition
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setStart_house_number_addition($start_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($start_house_number_addition) && !is_string($start_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_house_number_addition)), __LINE__);
        }
        $this->start_house_number_addition = $start_house_number_addition;
        return $this;
    }
    /**
     * Get start_street value
     * @return string|null
     */
    public function getStart_street()
    {
        return $this->start_street;
    }
    /**
     * Set start_street value
     * @param string $start_street
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setStart_street($start_street = null)
    {
        // validation for constraint: string
        if (!is_null($start_street) && !is_string($start_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_street)), __LINE__);
        }
        $this->start_street = $start_street;
        return $this;
    }
    /**
     * Get start_city value
     * @return string|null
     */
    public function getStart_city()
    {
        return $this->start_city;
    }
    /**
     * Set start_city value
     * @param string $start_city
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setStart_city($start_city = null)
    {
        // validation for constraint: string
        if (!is_null($start_city) && !is_string($start_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_city)), __LINE__);
        }
        $this->start_city = $start_city;
        return $this;
    }
    /**
     * Get start_country value
     * @return string|null
     */
    public function getStart_country()
    {
        return $this->start_country;
    }
    /**
     * Set start_country value
     * @param string $start_country
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setStart_country($start_country = null)
    {
        // validation for constraint: string
        if (!is_null($start_country) && !is_string($start_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_country)), __LINE__);
        }
        $this->start_country = $start_country;
        return $this;
    }
    /**
     * Get destination_postcode value
     * @return string|null
     */
    public function getDestination_postcode()
    {
        return $this->destination_postcode;
    }
    /**
     * Set destination_postcode value
     * @param string $destination_postcode
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setDestination_postcode($destination_postcode = null)
    {
        // validation for constraint: string
        if (!is_null($destination_postcode) && !is_string($destination_postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination_postcode)), __LINE__);
        }
        $this->destination_postcode = $destination_postcode;
        return $this;
    }
    /**
     * Get destination_house_number value
     * @return int|null
     */
    public function getDestination_house_number()
    {
        return $this->destination_house_number;
    }
    /**
     * Set destination_house_number value
     * @param int $destination_house_number
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setDestination_house_number($destination_house_number = null)
    {
        // validation for constraint: int
        if (!is_null($destination_house_number) && !is_numeric($destination_house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($destination_house_number)), __LINE__);
        }
        $this->destination_house_number = $destination_house_number;
        return $this;
    }
    /**
     * Get destination_house_number_addition value
     * @return string|null
     */
    public function getDestination_house_number_addition()
    {
        return $this->destination_house_number_addition;
    }
    /**
     * Set destination_house_number_addition value
     * @param string $destination_house_number_addition
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setDestination_house_number_addition($destination_house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($destination_house_number_addition) && !is_string($destination_house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination_house_number_addition)), __LINE__);
        }
        $this->destination_house_number_addition = $destination_house_number_addition;
        return $this;
    }
    /**
     * Get destination_street value
     * @return string|null
     */
    public function getDestination_street()
    {
        return $this->destination_street;
    }
    /**
     * Set destination_street value
     * @param string $destination_street
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setDestination_street($destination_street = null)
    {
        // validation for constraint: string
        if (!is_null($destination_street) && !is_string($destination_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination_street)), __LINE__);
        }
        $this->destination_street = $destination_street;
        return $this;
    }
    /**
     * Get destination_city value
     * @return string|null
     */
    public function getDestination_city()
    {
        return $this->destination_city;
    }
    /**
     * Set destination_city value
     * @param string $destination_city
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setDestination_city($destination_city = null)
    {
        // validation for constraint: string
        if (!is_null($destination_city) && !is_string($destination_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination_city)), __LINE__);
        }
        $this->destination_city = $destination_city;
        return $this;
    }
    /**
     * Get destination_country value
     * @return string|null
     */
    public function getDestination_country()
    {
        return $this->destination_country;
    }
    /**
     * Set destination_country value
     * @param string $destination_country
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setDestination_country($destination_country = null)
    {
        // validation for constraint: string
        if (!is_null($destination_country) && !is_string($destination_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination_country)), __LINE__);
        }
        $this->destination_country = $destination_country;
        return $this;
    }
    /**
     * Get route_type value
     * @return string|null
     */
    public function getRoute_type()
    {
        return $this->route_type;
    }
    /**
     * Set route_type value
     * @param string $route_type
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setRoute_type($route_type = null)
    {
        // validation for constraint: string
        if (!is_null($route_type) && !is_string($route_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($route_type)), __LINE__);
        }
        $this->route_type = $route_type;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerGetRouteRequestType
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
