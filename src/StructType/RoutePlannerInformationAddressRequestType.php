<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerInformationAddressRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerInformationAddressRequestType extends AbstractStructBase
{
    /**
     * The routetype
     * @var string
     */
    public $routetype;
    /**
     * The from_postalcode
     * @var string
     */
    public $from_postalcode;
    /**
     * The from_houseno
     * @var string
     */
    public $from_houseno;
    /**
     * The from_street
     * @var string
     */
    public $from_street;
    /**
     * The from_city
     * @var string
     */
    public $from_city;
    /**
     * The from_country
     * @var string
     */
    public $from_country;
    /**
     * The to_postalcode
     * @var string
     */
    public $to_postalcode;
    /**
     * The to_houseno
     * @var string
     */
    public $to_houseno;
    /**
     * The to_street
     * @var string
     */
    public $to_street;
    /**
     * The to_city
     * @var string
     */
    public $to_city;
    /**
     * The to_country
     * @var string
     */
    public $to_country;
    /**
     * Constructor method for routePlannerInformationAddressRequestType
     * @uses RoutePlannerInformationAddressRequestType::setRoutetype()
     * @uses RoutePlannerInformationAddressRequestType::setFrom_postalcode()
     * @uses RoutePlannerInformationAddressRequestType::setFrom_houseno()
     * @uses RoutePlannerInformationAddressRequestType::setFrom_street()
     * @uses RoutePlannerInformationAddressRequestType::setFrom_city()
     * @uses RoutePlannerInformationAddressRequestType::setFrom_country()
     * @uses RoutePlannerInformationAddressRequestType::setTo_postalcode()
     * @uses RoutePlannerInformationAddressRequestType::setTo_houseno()
     * @uses RoutePlannerInformationAddressRequestType::setTo_street()
     * @uses RoutePlannerInformationAddressRequestType::setTo_city()
     * @uses RoutePlannerInformationAddressRequestType::setTo_country()
     * @param string $routetype
     * @param string $from_postalcode
     * @param string $from_houseno
     * @param string $from_street
     * @param string $from_city
     * @param string $from_country
     * @param string $to_postalcode
     * @param string $to_houseno
     * @param string $to_street
     * @param string $to_city
     * @param string $to_country
     */
    public function __construct($routetype = null, $from_postalcode = null, $from_houseno = null, $from_street = null, $from_city = null, $from_country = null, $to_postalcode = null, $to_houseno = null, $to_street = null, $to_city = null, $to_country = null)
    {
        $this
            ->setRoutetype($routetype)
            ->setFrom_postalcode($from_postalcode)
            ->setFrom_houseno($from_houseno)
            ->setFrom_street($from_street)
            ->setFrom_city($from_city)
            ->setFrom_country($from_country)
            ->setTo_postalcode($to_postalcode)
            ->setTo_houseno($to_houseno)
            ->setTo_street($to_street)
            ->setTo_city($to_city)
            ->setTo_country($to_country);
    }
    /**
     * Get routetype value
     * @return string|null
     */
    public function getRoutetype()
    {
        return $this->routetype;
    }
    /**
     * Set routetype value
     * @param string $routetype
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setRoutetype($routetype = null)
    {
        // validation for constraint: string
        if (!is_null($routetype) && !is_string($routetype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routetype)), __LINE__);
        }
        $this->routetype = $routetype;
        return $this;
    }
    /**
     * Get from_postalcode value
     * @return string|null
     */
    public function getFrom_postalcode()
    {
        return $this->from_postalcode;
    }
    /**
     * Set from_postalcode value
     * @param string $from_postalcode
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setFrom_postalcode($from_postalcode = null)
    {
        // validation for constraint: string
        if (!is_null($from_postalcode) && !is_string($from_postalcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_postalcode)), __LINE__);
        }
        $this->from_postalcode = $from_postalcode;
        return $this;
    }
    /**
     * Get from_houseno value
     * @return string|null
     */
    public function getFrom_houseno()
    {
        return $this->from_houseno;
    }
    /**
     * Set from_houseno value
     * @param string $from_houseno
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setFrom_houseno($from_houseno = null)
    {
        // validation for constraint: string
        if (!is_null($from_houseno) && !is_string($from_houseno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_houseno)), __LINE__);
        }
        $this->from_houseno = $from_houseno;
        return $this;
    }
    /**
     * Get from_street value
     * @return string|null
     */
    public function getFrom_street()
    {
        return $this->from_street;
    }
    /**
     * Set from_street value
     * @param string $from_street
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setFrom_street($from_street = null)
    {
        // validation for constraint: string
        if (!is_null($from_street) && !is_string($from_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_street)), __LINE__);
        }
        $this->from_street = $from_street;
        return $this;
    }
    /**
     * Get from_city value
     * @return string|null
     */
    public function getFrom_city()
    {
        return $this->from_city;
    }
    /**
     * Set from_city value
     * @param string $from_city
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setFrom_city($from_city = null)
    {
        // validation for constraint: string
        if (!is_null($from_city) && !is_string($from_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_city)), __LINE__);
        }
        $this->from_city = $from_city;
        return $this;
    }
    /**
     * Get from_country value
     * @return string|null
     */
    public function getFrom_country()
    {
        return $this->from_country;
    }
    /**
     * Set from_country value
     * @param string $from_country
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setFrom_country($from_country = null)
    {
        // validation for constraint: string
        if (!is_null($from_country) && !is_string($from_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_country)), __LINE__);
        }
        $this->from_country = $from_country;
        return $this;
    }
    /**
     * Get to_postalcode value
     * @return string|null
     */
    public function getTo_postalcode()
    {
        return $this->to_postalcode;
    }
    /**
     * Set to_postalcode value
     * @param string $to_postalcode
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setTo_postalcode($to_postalcode = null)
    {
        // validation for constraint: string
        if (!is_null($to_postalcode) && !is_string($to_postalcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_postalcode)), __LINE__);
        }
        $this->to_postalcode = $to_postalcode;
        return $this;
    }
    /**
     * Get to_houseno value
     * @return string|null
     */
    public function getTo_houseno()
    {
        return $this->to_houseno;
    }
    /**
     * Set to_houseno value
     * @param string $to_houseno
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setTo_houseno($to_houseno = null)
    {
        // validation for constraint: string
        if (!is_null($to_houseno) && !is_string($to_houseno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_houseno)), __LINE__);
        }
        $this->to_houseno = $to_houseno;
        return $this;
    }
    /**
     * Get to_street value
     * @return string|null
     */
    public function getTo_street()
    {
        return $this->to_street;
    }
    /**
     * Set to_street value
     * @param string $to_street
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setTo_street($to_street = null)
    {
        // validation for constraint: string
        if (!is_null($to_street) && !is_string($to_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_street)), __LINE__);
        }
        $this->to_street = $to_street;
        return $this;
    }
    /**
     * Get to_city value
     * @return string|null
     */
    public function getTo_city()
    {
        return $this->to_city;
    }
    /**
     * Set to_city value
     * @param string $to_city
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setTo_city($to_city = null)
    {
        // validation for constraint: string
        if (!is_null($to_city) && !is_string($to_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_city)), __LINE__);
        }
        $this->to_city = $to_city;
        return $this;
    }
    /**
     * Get to_country value
     * @return string|null
     */
    public function getTo_country()
    {
        return $this->to_country;
    }
    /**
     * Set to_country value
     * @param string $to_country
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
     */
    public function setTo_country($to_country = null)
    {
        // validation for constraint: string
        if (!is_null($to_country) && !is_string($to_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_country)), __LINE__);
        }
        $this->to_country = $to_country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerInformationAddressRequestType
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
