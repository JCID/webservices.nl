<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyAffectedCompany StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyAffectedCompany extends AbstractStructBase
{
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The coc_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coc_number;
    /**
     * The coc_registered_city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coc_registered_city;
    /**
     * The addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyAddresses
     */
    public $addresses;
    /**
     * The is_former
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $is_former;
    /**
     * Constructor method for InsolvencyAffectedCompany
     * @uses InsolvencyAffectedCompany::setTrade_name()
     * @uses InsolvencyAffectedCompany::setCoc_number()
     * @uses InsolvencyAffectedCompany::setCoc_registered_city()
     * @uses InsolvencyAffectedCompany::setAddresses()
     * @uses InsolvencyAffectedCompany::setIs_former()
     * @param string $trade_name
     * @param string $coc_number
     * @param string $coc_registered_city
     * @param \Webservices\StructType\InsolvencyAddresses $addresses
     * @param bool $is_former
     */
    public function __construct($trade_name = null, $coc_number = null, $coc_registered_city = null, \Webservices\StructType\InsolvencyAddresses $addresses = null, $is_former = null)
    {
        $this
            ->setTrade_name($trade_name)
            ->setCoc_number($coc_number)
            ->setCoc_registered_city($coc_registered_city)
            ->setAddresses($addresses)
            ->setIs_former($is_former);
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
     * @return \Webservices\StructType\InsolvencyAffectedCompany
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
     * Get coc_number value
     * @return string|null
     */
    public function getCoc_number()
    {
        return $this->coc_number;
    }
    /**
     * Set coc_number value
     * @param string $coc_number
     * @return \Webservices\StructType\InsolvencyAffectedCompany
     */
    public function setCoc_number($coc_number = null)
    {
        // validation for constraint: string
        if (!is_null($coc_number) && !is_string($coc_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coc_number)), __LINE__);
        }
        $this->coc_number = $coc_number;
        return $this;
    }
    /**
     * Get coc_registered_city value
     * @return string|null
     */
    public function getCoc_registered_city()
    {
        return $this->coc_registered_city;
    }
    /**
     * Set coc_registered_city value
     * @param string $coc_registered_city
     * @return \Webservices\StructType\InsolvencyAffectedCompany
     */
    public function setCoc_registered_city($coc_registered_city = null)
    {
        // validation for constraint: string
        if (!is_null($coc_registered_city) && !is_string($coc_registered_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coc_registered_city)), __LINE__);
        }
        $this->coc_registered_city = $coc_registered_city;
        return $this;
    }
    /**
     * Get addresses value
     * @return \Webservices\StructType\InsolvencyAddresses|null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * Set addresses value
     * @param \Webservices\StructType\InsolvencyAddresses $addresses
     * @return \Webservices\StructType\InsolvencyAffectedCompany
     */
    public function setAddresses(\Webservices\StructType\InsolvencyAddresses $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Get is_former value
     * @return bool|null
     */
    public function getIs_former()
    {
        return $this->is_former;
    }
    /**
     * Set is_former value
     * @param bool $is_former
     * @return \Webservices\StructType\InsolvencyAffectedCompany
     */
    public function setIs_former($is_former = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_former) && !is_bool($is_former)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_former)), __LINE__);
        }
        $this->is_former = $is_former;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyAffectedCompany
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
