<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insolvencySearchPublicationsByPersonRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencySearchPublicationsByPersonRequestType extends AbstractStructBase
{
    /**
     * The last_name
     * @var string
     */
    public $last_name;
    /**
     * The prefix
     * @var string
     */
    public $prefix;
    /**
     * The birth_date
     * @var string
     */
    public $birth_date;
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
     * Constructor method for insolvencySearchPublicationsByPersonRequestType
     * @uses InsolvencySearchPublicationsByPersonRequestType::setLast_name()
     * @uses InsolvencySearchPublicationsByPersonRequestType::setPrefix()
     * @uses InsolvencySearchPublicationsByPersonRequestType::setBirth_date()
     * @uses InsolvencySearchPublicationsByPersonRequestType::setPostcode()
     * @uses InsolvencySearchPublicationsByPersonRequestType::setHouse_number()
     * @param string $last_name
     * @param string $prefix
     * @param string $birth_date
     * @param string $postcode
     * @param int $house_number
     */
    public function __construct($last_name = null, $prefix = null, $birth_date = null, $postcode = null, $house_number = null)
    {
        $this
            ->setLast_name($last_name)
            ->setPrefix($prefix)
            ->setBirth_date($birth_date)
            ->setPostcode($postcode)
            ->setHouse_number($house_number);
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Get birth_date value
     * @return string|null
     */
    public function getBirth_date()
    {
        return $this->birth_date;
    }
    /**
     * Set birth_date value
     * @param string $birth_date
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType
     */
    public function setBirth_date($birth_date = null)
    {
        // validation for constraint: string
        if (!is_null($birth_date) && !is_string($birth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birth_date)), __LINE__);
        }
        $this->birth_date = $birth_date;
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
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType
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
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonRequestType
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
