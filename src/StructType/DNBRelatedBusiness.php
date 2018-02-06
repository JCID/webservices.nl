<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DNBRelatedBusiness StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DNBRelatedBusiness extends AbstractStructBase
{
    /**
     * The duns
     * @var string
     */
    public $duns;
    /**
     * The dnb_key
     * @var string
     */
    public $dnb_key;
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * Constructor method for DNBRelatedBusiness
     * @uses DNBRelatedBusiness::setDuns()
     * @uses DNBRelatedBusiness::setDnb_key()
     * @uses DNBRelatedBusiness::setTrade_name()
     * @uses DNBRelatedBusiness::setCountry()
     * @param string $duns
     * @param string $dnb_key
     * @param string $trade_name
     * @param string $country
     */
    public function __construct($duns = null, $dnb_key = null, $trade_name = null, $country = null)
    {
        $this
            ->setDuns($duns)
            ->setDnb_key($dnb_key)
            ->setTrade_name($trade_name)
            ->setCountry($country);
    }
    /**
     * Get duns value
     * @return string|null
     */
    public function getDuns()
    {
        return $this->duns;
    }
    /**
     * Set duns value
     * @param string $duns
     * @return \Webservices\StructType\DNBRelatedBusiness
     */
    public function setDuns($duns = null)
    {
        // validation for constraint: string
        if (!is_null($duns) && !is_string($duns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duns)), __LINE__);
        }
        $this->duns = $duns;
        return $this;
    }
    /**
     * Get dnb_key value
     * @return string|null
     */
    public function getDnb_key()
    {
        return $this->dnb_key;
    }
    /**
     * Set dnb_key value
     * @param string $dnb_key
     * @return \Webservices\StructType\DNBRelatedBusiness
     */
    public function setDnb_key($dnb_key = null)
    {
        // validation for constraint: string
        if (!is_null($dnb_key) && !is_string($dnb_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dnb_key)), __LINE__);
        }
        $this->dnb_key = $dnb_key;
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
     * @return \Webservices\StructType\DNBRelatedBusiness
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
     * @return \Webservices\StructType\DNBRelatedBusiness
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
     * @return \Webservices\StructType\DNBRelatedBusiness
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
