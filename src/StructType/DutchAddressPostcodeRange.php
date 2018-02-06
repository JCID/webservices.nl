<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchAddressPostcodeRange StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchAddressPostcodeRange extends AbstractStructBase
{
    /**
     * The house_number_from
     * @var int
     */
    public $house_number_from;
    /**
     * The house_number_to
     * @var int
     */
    public $house_number_to;
    /**
     * The neighborhood_code
     * @var string
     */
    public $neighborhood_code;
    /**
     * The letter_combination
     * @var string
     */
    public $letter_combination;
    /**
     * The range_indication
     * @var string
     */
    public $range_indication;
    /**
     * The street_name
     * @var string
     */
    public $street_name;
    /**
     * The street_name_nen
     * @var string
     */
    public $street_name_nen;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The municipality
     * @var string
     */
    public $municipality;
    /**
     * The municipality_code
     * @var int
     */
    public $municipality_code;
    /**
     * The cebuco_code
     * @var int
     */
    public $cebuco_code;
    /**
     * The province
     * @var string
     */
    public $province;
    /**
     * The province_code
     * @var string
     */
    public $province_code;
    /**
     * Constructor method for DutchAddressPostcodeRange
     * @uses DutchAddressPostcodeRange::setHouse_number_from()
     * @uses DutchAddressPostcodeRange::setHouse_number_to()
     * @uses DutchAddressPostcodeRange::setNeighborhood_code()
     * @uses DutchAddressPostcodeRange::setLetter_combination()
     * @uses DutchAddressPostcodeRange::setRange_indication()
     * @uses DutchAddressPostcodeRange::setStreet_name()
     * @uses DutchAddressPostcodeRange::setStreet_name_nen()
     * @uses DutchAddressPostcodeRange::setCity()
     * @uses DutchAddressPostcodeRange::setMunicipality()
     * @uses DutchAddressPostcodeRange::setMunicipality_code()
     * @uses DutchAddressPostcodeRange::setCebuco_code()
     * @uses DutchAddressPostcodeRange::setProvince()
     * @uses DutchAddressPostcodeRange::setProvince_code()
     * @param int $house_number_from
     * @param int $house_number_to
     * @param string $neighborhood_code
     * @param string $letter_combination
     * @param string $range_indication
     * @param string $street_name
     * @param string $street_name_nen
     * @param string $city
     * @param string $municipality
     * @param int $municipality_code
     * @param int $cebuco_code
     * @param string $province
     * @param string $province_code
     */
    public function __construct($house_number_from = null, $house_number_to = null, $neighborhood_code = null, $letter_combination = null, $range_indication = null, $street_name = null, $street_name_nen = null, $city = null, $municipality = null, $municipality_code = null, $cebuco_code = null, $province = null, $province_code = null)
    {
        $this
            ->setHouse_number_from($house_number_from)
            ->setHouse_number_to($house_number_to)
            ->setNeighborhood_code($neighborhood_code)
            ->setLetter_combination($letter_combination)
            ->setRange_indication($range_indication)
            ->setStreet_name($street_name)
            ->setStreet_name_nen($street_name_nen)
            ->setCity($city)
            ->setMunicipality($municipality)
            ->setMunicipality_code($municipality_code)
            ->setCebuco_code($cebuco_code)
            ->setProvince($province)
            ->setProvince_code($province_code);
    }
    /**
     * Get house_number_from value
     * @return int|null
     */
    public function getHouse_number_from()
    {
        return $this->house_number_from;
    }
    /**
     * Set house_number_from value
     * @param int $house_number_from
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setHouse_number_from($house_number_from = null)
    {
        // validation for constraint: int
        if (!is_null($house_number_from) && !is_numeric($house_number_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_number_from)), __LINE__);
        }
        $this->house_number_from = $house_number_from;
        return $this;
    }
    /**
     * Get house_number_to value
     * @return int|null
     */
    public function getHouse_number_to()
    {
        return $this->house_number_to;
    }
    /**
     * Set house_number_to value
     * @param int $house_number_to
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setHouse_number_to($house_number_to = null)
    {
        // validation for constraint: int
        if (!is_null($house_number_to) && !is_numeric($house_number_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_number_to)), __LINE__);
        }
        $this->house_number_to = $house_number_to;
        return $this;
    }
    /**
     * Get neighborhood_code value
     * @return string|null
     */
    public function getNeighborhood_code()
    {
        return $this->neighborhood_code;
    }
    /**
     * Set neighborhood_code value
     * @param string $neighborhood_code
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setNeighborhood_code($neighborhood_code = null)
    {
        // validation for constraint: string
        if (!is_null($neighborhood_code) && !is_string($neighborhood_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($neighborhood_code)), __LINE__);
        }
        $this->neighborhood_code = $neighborhood_code;
        return $this;
    }
    /**
     * Get letter_combination value
     * @return string|null
     */
    public function getLetter_combination()
    {
        return $this->letter_combination;
    }
    /**
     * Set letter_combination value
     * @param string $letter_combination
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setLetter_combination($letter_combination = null)
    {
        // validation for constraint: string
        if (!is_null($letter_combination) && !is_string($letter_combination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($letter_combination)), __LINE__);
        }
        $this->letter_combination = $letter_combination;
        return $this;
    }
    /**
     * Get range_indication value
     * @return string|null
     */
    public function getRange_indication()
    {
        return $this->range_indication;
    }
    /**
     * Set range_indication value
     * @param string $range_indication
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setRange_indication($range_indication = null)
    {
        // validation for constraint: string
        if (!is_null($range_indication) && !is_string($range_indication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($range_indication)), __LINE__);
        }
        $this->range_indication = $range_indication;
        return $this;
    }
    /**
     * Get street_name value
     * @return string|null
     */
    public function getStreet_name()
    {
        return $this->street_name;
    }
    /**
     * Set street_name value
     * @param string $street_name
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setStreet_name($street_name = null)
    {
        // validation for constraint: string
        if (!is_null($street_name) && !is_string($street_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street_name)), __LINE__);
        }
        $this->street_name = $street_name;
        return $this;
    }
    /**
     * Get street_name_nen value
     * @return string|null
     */
    public function getStreet_name_nen()
    {
        return $this->street_name_nen;
    }
    /**
     * Set street_name_nen value
     * @param string $street_name_nen
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setStreet_name_nen($street_name_nen = null)
    {
        // validation for constraint: string
        if (!is_null($street_name_nen) && !is_string($street_name_nen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street_name_nen)), __LINE__);
        }
        $this->street_name_nen = $street_name_nen;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get municipality value
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
    /**
     * Set municipality value
     * @param string $municipality
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setMunicipality($municipality = null)
    {
        // validation for constraint: string
        if (!is_null($municipality) && !is_string($municipality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($municipality)), __LINE__);
        }
        $this->municipality = $municipality;
        return $this;
    }
    /**
     * Get municipality_code value
     * @return int|null
     */
    public function getMunicipality_code()
    {
        return $this->municipality_code;
    }
    /**
     * Set municipality_code value
     * @param int $municipality_code
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setMunicipality_code($municipality_code = null)
    {
        // validation for constraint: int
        if (!is_null($municipality_code) && !is_numeric($municipality_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($municipality_code)), __LINE__);
        }
        $this->municipality_code = $municipality_code;
        return $this;
    }
    /**
     * Get cebuco_code value
     * @return int|null
     */
    public function getCebuco_code()
    {
        return $this->cebuco_code;
    }
    /**
     * Set cebuco_code value
     * @param int $cebuco_code
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setCebuco_code($cebuco_code = null)
    {
        // validation for constraint: int
        if (!is_null($cebuco_code) && !is_numeric($cebuco_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cebuco_code)), __LINE__);
        }
        $this->cebuco_code = $cebuco_code;
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
     * @return \Webservices\StructType\DutchAddressPostcodeRange
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
     * Get province_code value
     * @return string|null
     */
    public function getProvince_code()
    {
        return $this->province_code;
    }
    /**
     * Set province_code value
     * @param string $province_code
     * @return \Webservices\StructType\DutchAddressPostcodeRange
     */
    public function setProvince_code($province_code = null)
    {
        // validation for constraint: string
        if (!is_null($province_code) && !is_string($province_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province_code)), __LINE__);
        }
        $this->province_code = $province_code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchAddressPostcodeRange
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
