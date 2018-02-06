<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerDescriptionDutchAddressRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerDescriptionDutchAddressRequestType extends AbstractStructBase
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
     * The from_housno
     * @var string
     */
    public $from_housno;
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
     * The to_postalcode
     * @var string
     */
    public $to_postalcode;
    /**
     * The to_housno
     * @var string
     */
    public $to_housno;
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
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for routePlannerDescriptionDutchAddressRequestType
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setRoutetype()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setFrom_postalcode()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setFrom_housno()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setFrom_street()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setFrom_city()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setTo_postalcode()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setTo_housno()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setTo_street()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setTo_city()
     * @uses RoutePlannerDescriptionDutchAddressRequestType::setLanguage()
     * @param string $routetype
     * @param string $from_postalcode
     * @param string $from_housno
     * @param string $from_street
     * @param string $from_city
     * @param string $to_postalcode
     * @param string $to_housno
     * @param string $to_street
     * @param string $to_city
     * @param string $language
     */
    public function __construct($routetype = null, $from_postalcode = null, $from_housno = null, $from_street = null, $from_city = null, $to_postalcode = null, $to_housno = null, $to_street = null, $to_city = null, $language = null)
    {
        $this
            ->setRoutetype($routetype)
            ->setFrom_postalcode($from_postalcode)
            ->setFrom_housno($from_housno)
            ->setFrom_street($from_street)
            ->setFrom_city($from_city)
            ->setTo_postalcode($to_postalcode)
            ->setTo_housno($to_housno)
            ->setTo_street($to_street)
            ->setTo_city($to_city)
            ->setLanguage($language);
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * Get from_housno value
     * @return string|null
     */
    public function getFrom_housno()
    {
        return $this->from_housno;
    }
    /**
     * Set from_housno value
     * @param string $from_housno
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
     */
    public function setFrom_housno($from_housno = null)
    {
        // validation for constraint: string
        if (!is_null($from_housno) && !is_string($from_housno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from_housno)), __LINE__);
        }
        $this->from_housno = $from_housno;
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * Get to_housno value
     * @return string|null
     */
    public function getTo_housno()
    {
        return $this->to_housno;
    }
    /**
     * Set to_housno value
     * @param string $to_housno
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
     */
    public function setTo_housno($to_housno = null)
    {
        // validation for constraint: string
        if (!is_null($to_housno) && !is_string($to_housno)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to_housno)), __LINE__);
        }
        $this->to_housno = $to_housno;
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
     * @return \Webservices\StructType\RoutePlannerDescriptionDutchAddressRequestType
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
