<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraydonReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GraydonReference extends AbstractStructBase
{
    /**
     * The company_id
     * @var string
     */
    public $company_id;
    /**
     * The company_id_type
     * @var string
     */
    public $company_id_type;
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The house_no
     * @var int
     */
    public $house_no;
    /**
     * The house_no_addition
     * @var string
     */
    public $house_no_addition;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The residence
     * @var string
     */
    public $residence;
    /**
     * The country_iso2
     * @var string
     */
    public $country_iso2;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * Constructor method for GraydonReference
     * @uses GraydonReference::setCompany_id()
     * @uses GraydonReference::setCompany_id_type()
     * @uses GraydonReference::setTrade_name()
     * @uses GraydonReference::setStreet()
     * @uses GraydonReference::setHouse_no()
     * @uses GraydonReference::setHouse_no_addition()
     * @uses GraydonReference::setPostcode()
     * @uses GraydonReference::setResidence()
     * @uses GraydonReference::setCountry_iso2()
     * @uses GraydonReference::setUrl()
     * @uses GraydonReference::setEmail()
     * @param string $company_id
     * @param string $company_id_type
     * @param string $trade_name
     * @param string $street
     * @param int $house_no
     * @param string $house_no_addition
     * @param string $postcode
     * @param string $residence
     * @param string $country_iso2
     * @param string $url
     * @param string $email
     */
    public function __construct($company_id = null, $company_id_type = null, $trade_name = null, $street = null, $house_no = null, $house_no_addition = null, $postcode = null, $residence = null, $country_iso2 = null, $url = null, $email = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setCompany_id_type($company_id_type)
            ->setTrade_name($trade_name)
            ->setStreet($street)
            ->setHouse_no($house_no)
            ->setHouse_no_addition($house_no_addition)
            ->setPostcode($postcode)
            ->setResidence($residence)
            ->setCountry_iso2($country_iso2)
            ->setUrl($url)
            ->setEmail($email);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->company_id;
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \Webservices\StructType\GraydonReference
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $company_id;
        return $this;
    }
    /**
     * Get company_id_type value
     * @return string|null
     */
    public function getCompany_id_type()
    {
        return $this->company_id_type;
    }
    /**
     * Set company_id_type value
     * @param string $company_id_type
     * @return \Webservices\StructType\GraydonReference
     */
    public function setCompany_id_type($company_id_type = null)
    {
        // validation for constraint: string
        if (!is_null($company_id_type) && !is_string($company_id_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id_type)), __LINE__);
        }
        $this->company_id_type = $company_id_type;
        return $this;
    }
    /**
     * Get trade_name value
     * @return string|null
     */
    public function getTrade_name()
    {
        return $this->trade_name;
    }
    /**
     * Set trade_name value
     * @param string $trade_name
     * @return \Webservices\StructType\GraydonReference
     */
    public function setTrade_name($trade_name = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name) && !is_string($trade_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name)), __LINE__);
        }
        $this->trade_name = $trade_name;
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
     * @return \Webservices\StructType\GraydonReference
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
     * @return \Webservices\StructType\GraydonReference
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
     * Get house_no_addition value
     * @return string|null
     */
    public function getHouse_no_addition()
    {
        return $this->house_no_addition;
    }
    /**
     * Set house_no_addition value
     * @param string $house_no_addition
     * @return \Webservices\StructType\GraydonReference
     */
    public function setHouse_no_addition($house_no_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_no_addition) && !is_string($house_no_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_no_addition)), __LINE__);
        }
        $this->house_no_addition = $house_no_addition;
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
     * @return \Webservices\StructType\GraydonReference
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
     * Get residence value
     * @return string|null
     */
    public function getResidence()
    {
        return $this->residence;
    }
    /**
     * Set residence value
     * @param string $residence
     * @return \Webservices\StructType\GraydonReference
     */
    public function setResidence($residence = null)
    {
        // validation for constraint: string
        if (!is_null($residence) && !is_string($residence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residence)), __LINE__);
        }
        $this->residence = $residence;
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
     * @return \Webservices\StructType\GraydonReference
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
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Webservices\StructType\GraydonReference
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Webservices\StructType\GraydonReference
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GraydonReference
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
