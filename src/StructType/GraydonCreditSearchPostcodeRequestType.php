<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graydonCreditSearchPostcodeRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonCreditSearchPostcodeRequestType extends AbstractStructBase
{
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The house_no
     * @var int
     */
    public $house_no;
    /**
     * The telephone_no
     * @var string
     */
    public $telephone_no;
    /**
     * The country_iso2
     * @var string
     */
    public $country_iso2;
    /**
     * Constructor method for graydonCreditSearchPostcodeRequestType
     * @uses GraydonCreditSearchPostcodeRequestType::setPostcode()
     * @uses GraydonCreditSearchPostcodeRequestType::setHouse_no()
     * @uses GraydonCreditSearchPostcodeRequestType::setTelephone_no()
     * @uses GraydonCreditSearchPostcodeRequestType::setCountry_iso2()
     * @param string $postcode
     * @param int $house_no
     * @param string $telephone_no
     * @param string $country_iso2
     */
    public function __construct($postcode = null, $house_no = null, $telephone_no = null, $country_iso2 = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHouse_no($house_no)
            ->setTelephone_no($telephone_no)
            ->setCountry_iso2($country_iso2);
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
     * @return \Webservices\StructType\GraydonCreditSearchPostcodeRequestType
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
     * Get house_no value
     * @return int|null
     */
    public function getHouse_no()
    {
        return $this->house_no;
    }
    /**
     * Set house_no value
     * @param int $house_no
     * @return \Webservices\StructType\GraydonCreditSearchPostcodeRequestType
     */
    public function setHouse_no($house_no = null)
    {
        // validation for constraint: int
        if (!is_null($house_no) && !is_numeric($house_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_no)), __LINE__);
        }
        $this->house_no = $house_no;
        return $this;
    }
    /**
     * Get telephone_no value
     * @return string|null
     */
    public function getTelephone_no()
    {
        return $this->telephone_no;
    }
    /**
     * Set telephone_no value
     * @param string $telephone_no
     * @return \Webservices\StructType\GraydonCreditSearchPostcodeRequestType
     */
    public function setTelephone_no($telephone_no = null)
    {
        // validation for constraint: string
        if (!is_null($telephone_no) && !is_string($telephone_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone_no)), __LINE__);
        }
        $this->telephone_no = $telephone_no;
        return $this;
    }
    /**
     * Get country_iso2 value
     * @return string|null
     */
    public function getCountry_iso2()
    {
        return $this->country_iso2;
    }
    /**
     * Set country_iso2 value
     * @param string $country_iso2
     * @return \Webservices\StructType\GraydonCreditSearchPostcodeRequestType
     */
    public function setCountry_iso2($country_iso2 = null)
    {
        // validation for constraint: string
        if (!is_null($country_iso2) && !is_string($country_iso2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_iso2)), __LINE__);
        }
        $this->country_iso2 = $country_iso2;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonCreditSearchPostcodeRequestType
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
