<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kvkSearchParametersRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KvkSearchParametersRequestType extends AbstractStructBase
{
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The house_number
     * @var int
     */
    public $house_number;
    /**
     * The house_number_addition
     * @var string
     */
    public $house_number_addition;
    /**
     * The telephone_number
     * @var string
     */
    public $telephone_number;
    /**
     * The domain_name
     * @var string
     */
    public $domain_name;
    /**
     * The strict_search
     * @var bool
     */
    public $strict_search;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for kvkSearchParametersRequestType
     * @uses KvkSearchParametersRequestType::setTrade_name()
     * @uses KvkSearchParametersRequestType::setCity()
     * @uses KvkSearchParametersRequestType::setStreet()
     * @uses KvkSearchParametersRequestType::setPostcode()
     * @uses KvkSearchParametersRequestType::setHouse_number()
     * @uses KvkSearchParametersRequestType::setHouse_number_addition()
     * @uses KvkSearchParametersRequestType::setTelephone_number()
     * @uses KvkSearchParametersRequestType::setDomain_name()
     * @uses KvkSearchParametersRequestType::setStrict_search()
     * @uses KvkSearchParametersRequestType::setPage()
     * @param string $trade_name
     * @param string $city
     * @param string $street
     * @param string $postcode
     * @param int $house_number
     * @param string $house_number_addition
     * @param string $telephone_number
     * @param string $domain_name
     * @param bool $strict_search
     * @param int $page
     */
    public function __construct($trade_name = null, $city = null, $street = null, $postcode = null, $house_number = null, $house_number_addition = null, $telephone_number = null, $domain_name = null, $strict_search = null, $page = null)
    {
        $this
            ->setTrade_name($trade_name)
            ->setCity($city)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setHouse_number($house_number)
            ->setHouse_number_addition($house_number_addition)
            ->setTelephone_number($telephone_number)
            ->setDomain_name($domain_name)
            ->setStrict_search($strict_search)
            ->setPage($page);
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
     * @return \Webservices\StructType\KvkSearchParametersRequestType
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
     * @return \Webservices\StructType\KvkSearchParametersRequestType
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
     * @return \Webservices\StructType\KvkSearchParametersRequestType
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
     * @return \Webservices\StructType\KvkSearchParametersRequestType
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
     * Get house_number value
     * @return int|null
     */
    public function getHouse_number()
    {
        return $this->house_number;
    }
    /**
     * Set house_number value
     * @param int $house_number
     * @return \Webservices\StructType\KvkSearchParametersRequestType
     */
    public function setHouse_number($house_number = null)
    {
        // validation for constraint: int
        if (!is_null($house_number) && !is_numeric($house_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($house_number)), __LINE__);
        }
        $this->house_number = $house_number;
        return $this;
    }
    /**
     * Get house_number_addition value
     * @return string|null
     */
    public function getHouse_number_addition()
    {
        return $this->house_number_addition;
    }
    /**
     * Set house_number_addition value
     * @param string $house_number_addition
     * @return \Webservices\StructType\KvkSearchParametersRequestType
     */
    public function setHouse_number_addition($house_number_addition = null)
    {
        // validation for constraint: string
        if (!is_null($house_number_addition) && !is_string($house_number_addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($house_number_addition)), __LINE__);
        }
        $this->house_number_addition = $house_number_addition;
        return $this;
    }
    /**
     * Get telephone_number value
     * @return string|null
     */
    public function getTelephone_number()
    {
        return $this->telephone_number;
    }
    /**
     * Set telephone_number value
     * @param string $telephone_number
     * @return \Webservices\StructType\KvkSearchParametersRequestType
     */
    public function setTelephone_number($telephone_number = null)
    {
        // validation for constraint: string
        if (!is_null($telephone_number) && !is_string($telephone_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telephone_number)), __LINE__);
        }
        $this->telephone_number = $telephone_number;
        return $this;
    }
    /**
     * Get domain_name value
     * @return string|null
     */
    public function getDomain_name()
    {
        return $this->domain_name;
    }
    /**
     * Set domain_name value
     * @param string $domain_name
     * @return \Webservices\StructType\KvkSearchParametersRequestType
     */
    public function setDomain_name($domain_name = null)
    {
        // validation for constraint: string
        if (!is_null($domain_name) && !is_string($domain_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain_name)), __LINE__);
        }
        $this->domain_name = $domain_name;
        return $this;
    }
    /**
     * Get strict_search value
     * @return bool|null
     */
    public function getStrict_search()
    {
        return $this->strict_search;
    }
    /**
     * Set strict_search value
     * @param bool $strict_search
     * @return \Webservices\StructType\KvkSearchParametersRequestType
     */
    public function setStrict_search($strict_search = null)
    {
        // validation for constraint: boolean
        if (!is_null($strict_search) && !is_bool($strict_search)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($strict_search)), __LINE__);
        }
        $this->strict_search = $strict_search;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\KvkSearchParametersRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KvkSearchParametersRequestType
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
