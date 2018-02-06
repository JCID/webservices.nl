<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kvkSearchPostcodeRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KvkSearchPostcodeRequestType extends AbstractStructBase
{
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
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for kvkSearchPostcodeRequestType
     * @uses KvkSearchPostcodeRequestType::setPostcode()
     * @uses KvkSearchPostcodeRequestType::setHouse_number()
     * @uses KvkSearchPostcodeRequestType::setHouse_number_addition()
     * @uses KvkSearchPostcodeRequestType::setPage()
     * @param string $postcode
     * @param int $house_number
     * @param string $house_number_addition
     * @param int $page
     */
    public function __construct($postcode = null, $house_number = null, $house_number_addition = null, $page = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHouse_number($house_number)
            ->setHouse_number_addition($house_number_addition)
            ->setPage($page);
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
     * @return \Webservices\StructType\KvkSearchPostcodeRequestType
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
     * @return \Webservices\StructType\KvkSearchPostcodeRequestType
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
     * @return \Webservices\StructType\KvkSearchPostcodeRequestType
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
     * @return \Webservices\StructType\KvkSearchPostcodeRequestType
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
     * @return \Webservices\StructType\KvkSearchPostcodeRequestType
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
