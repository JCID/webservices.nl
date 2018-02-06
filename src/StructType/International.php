<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for International StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class International extends AbstractStructBase
{
    /**
     * The matchrate
     * @var float
     */
    public $matchrate;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The housenr
     * @var string
     */
    public $housenr;
    /**
     * The pobox
     * @var string
     */
    public $pobox;
    /**
     * The locality
     * @var string
     */
    public $locality;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The province
     * @var string
     */
    public $province;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * Constructor method for International
     * @uses International::setMatchrate()
     * @uses International::setStreet()
     * @uses International::setHousenr()
     * @uses International::setPobox()
     * @uses International::setLocality()
     * @uses International::setPostcode()
     * @uses International::setProvince()
     * @uses International::setCountry()
     * @param float $matchrate
     * @param string $street
     * @param string $housenr
     * @param string $pobox
     * @param string $locality
     * @param string $postcode
     * @param string $province
     * @param string $country
     */
    public function __construct($matchrate = null, $street = null, $housenr = null, $pobox = null, $locality = null, $postcode = null, $province = null, $country = null)
    {
        $this
            ->setMatchrate($matchrate)
            ->setStreet($street)
            ->setHousenr($housenr)
            ->setPobox($pobox)
            ->setLocality($locality)
            ->setPostcode($postcode)
            ->setProvince($province)
            ->setCountry($country);
    }
    /**
     * Get matchrate value
     * @return float|null
     */
    public function getMatchrate()
    {
        return $this->matchrate;
    }
    /**
     * Set matchrate value
     * @param float $matchrate
     * @return \Webservices\StructType\International
     */
    public function setMatchrate($matchrate = null)
    {
        $this->matchrate = $matchrate;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Webservices\StructType\International
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
    /**
     * Get housenr value
     * @return string|null
     */
    public function getHousenr()
    {
        return $this->housenr;
    }
    /**
     * Set housenr value
     * @param string $housenr
     * @return \Webservices\StructType\International
     */
    public function setHousenr($housenr = null)
    {
        // validation for constraint: string
        if (!is_null($housenr) && !is_string($housenr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($housenr)), __LINE__);
        }
        $this->housenr = $housenr;
        return $this;
    }
    /**
     * Get pobox value
     * @return string|null
     */
    public function getPobox()
    {
        return $this->pobox;
    }
    /**
     * Set pobox value
     * @param string $pobox
     * @return \Webservices\StructType\International
     */
    public function setPobox($pobox = null)
    {
        // validation for constraint: string
        if (!is_null($pobox) && !is_string($pobox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pobox)), __LINE__);
        }
        $this->pobox = $pobox;
        return $this;
    }
    /**
     * Get locality value
     * @return string|null
     */
    public function getLocality()
    {
        return $this->locality;
    }
    /**
     * Set locality value
     * @param string $locality
     * @return \Webservices\StructType\International
     */
    public function setLocality($locality = null)
    {
        // validation for constraint: string
        if (!is_null($locality) && !is_string($locality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locality)), __LINE__);
        }
        $this->locality = $locality;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\International
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Webservices\StructType\International
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Webservices\StructType\International
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\International
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
