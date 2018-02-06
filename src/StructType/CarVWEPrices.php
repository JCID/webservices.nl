<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEPrices StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEPrices extends AbstractStructBase
{
    /**
     * The current_price_retail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $current_price_retail;
    /**
     * The current_price_exchange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $current_price_exchange;
    /**
     * The current_price_trade
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $current_price_trade;
    /**
     * The date_price_list
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_price_list;
    /**
     * The catalog_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $catalog_price;
    /**
     * The btw_new_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $btw_new_price;
    /**
     * The bpm_new_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $bpm_new_price;
    /**
     * The net_catalog_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $net_catalog_price;
    /**
     * The recalculated_catalog_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $recalculated_catalog_price;
    /**
     * The recalculated_btw_new_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $recalculated_btw_new_price;
    /**
     * The recalculated_net_catalog_price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $recalculated_net_catalog_price;
    /**
     * Constructor method for CarVWEPrices
     * @uses CarVWEPrices::setCurrent_price_retail()
     * @uses CarVWEPrices::setCurrent_price_exchange()
     * @uses CarVWEPrices::setCurrent_price_trade()
     * @uses CarVWEPrices::setDate_price_list()
     * @uses CarVWEPrices::setCatalog_price()
     * @uses CarVWEPrices::setBtw_new_price()
     * @uses CarVWEPrices::setBpm_new_price()
     * @uses CarVWEPrices::setNet_catalog_price()
     * @uses CarVWEPrices::setRecalculated_catalog_price()
     * @uses CarVWEPrices::setRecalculated_btw_new_price()
     * @uses CarVWEPrices::setRecalculated_net_catalog_price()
     * @param int $current_price_retail
     * @param int $current_price_exchange
     * @param int $current_price_trade
     * @param string $date_price_list
     * @param int $catalog_price
     * @param int $btw_new_price
     * @param int $bpm_new_price
     * @param int $net_catalog_price
     * @param int $recalculated_catalog_price
     * @param int $recalculated_btw_new_price
     * @param int $recalculated_net_catalog_price
     */
    public function __construct($current_price_retail = null, $current_price_exchange = null, $current_price_trade = null, $date_price_list = null, $catalog_price = null, $btw_new_price = null, $bpm_new_price = null, $net_catalog_price = null, $recalculated_catalog_price = null, $recalculated_btw_new_price = null, $recalculated_net_catalog_price = null)
    {
        $this
            ->setCurrent_price_retail($current_price_retail)
            ->setCurrent_price_exchange($current_price_exchange)
            ->setCurrent_price_trade($current_price_trade)
            ->setDate_price_list($date_price_list)
            ->setCatalog_price($catalog_price)
            ->setBtw_new_price($btw_new_price)
            ->setBpm_new_price($bpm_new_price)
            ->setNet_catalog_price($net_catalog_price)
            ->setRecalculated_catalog_price($recalculated_catalog_price)
            ->setRecalculated_btw_new_price($recalculated_btw_new_price)
            ->setRecalculated_net_catalog_price($recalculated_net_catalog_price);
    }
    /**
     * Get current_price_retail value
     * @return int|null
     */
    public function getCurrent_price_retail()
    {
        return $this->current_price_retail;
    }
    /**
     * Set current_price_retail value
     * @param int $current_price_retail
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setCurrent_price_retail($current_price_retail = null)
    {
        // validation for constraint: int
        if (!is_null($current_price_retail) && !is_numeric($current_price_retail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($current_price_retail)), __LINE__);
        }
        $this->current_price_retail = $current_price_retail;
        return $this;
    }
    /**
     * Get current_price_exchange value
     * @return int|null
     */
    public function getCurrent_price_exchange()
    {
        return $this->current_price_exchange;
    }
    /**
     * Set current_price_exchange value
     * @param int $current_price_exchange
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setCurrent_price_exchange($current_price_exchange = null)
    {
        // validation for constraint: int
        if (!is_null($current_price_exchange) && !is_numeric($current_price_exchange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($current_price_exchange)), __LINE__);
        }
        $this->current_price_exchange = $current_price_exchange;
        return $this;
    }
    /**
     * Get current_price_trade value
     * @return int|null
     */
    public function getCurrent_price_trade()
    {
        return $this->current_price_trade;
    }
    /**
     * Set current_price_trade value
     * @param int $current_price_trade
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setCurrent_price_trade($current_price_trade = null)
    {
        // validation for constraint: int
        if (!is_null($current_price_trade) && !is_numeric($current_price_trade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($current_price_trade)), __LINE__);
        }
        $this->current_price_trade = $current_price_trade;
        return $this;
    }
    /**
     * Get date_price_list value
     * @return string|null
     */
    public function getDate_price_list()
    {
        return $this->date_price_list;
    }
    /**
     * Set date_price_list value
     * @param string $date_price_list
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setDate_price_list($date_price_list = null)
    {
        // validation for constraint: string
        if (!is_null($date_price_list) && !is_string($date_price_list)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_price_list)), __LINE__);
        }
        $this->date_price_list = $date_price_list;
        return $this;
    }
    /**
     * Get catalog_price value
     * @return int|null
     */
    public function getCatalog_price()
    {
        return $this->catalog_price;
    }
    /**
     * Set catalog_price value
     * @param int $catalog_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setCatalog_price($catalog_price = null)
    {
        // validation for constraint: int
        if (!is_null($catalog_price) && !is_numeric($catalog_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($catalog_price)), __LINE__);
        }
        $this->catalog_price = $catalog_price;
        return $this;
    }
    /**
     * Get btw_new_price value
     * @return int|null
     */
    public function getBtw_new_price()
    {
        return $this->btw_new_price;
    }
    /**
     * Set btw_new_price value
     * @param int $btw_new_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setBtw_new_price($btw_new_price = null)
    {
        // validation for constraint: int
        if (!is_null($btw_new_price) && !is_numeric($btw_new_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($btw_new_price)), __LINE__);
        }
        $this->btw_new_price = $btw_new_price;
        return $this;
    }
    /**
     * Get bpm_new_price value
     * @return int|null
     */
    public function getBpm_new_price()
    {
        return $this->bpm_new_price;
    }
    /**
     * Set bpm_new_price value
     * @param int $bpm_new_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setBpm_new_price($bpm_new_price = null)
    {
        // validation for constraint: int
        if (!is_null($bpm_new_price) && !is_numeric($bpm_new_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bpm_new_price)), __LINE__);
        }
        $this->bpm_new_price = $bpm_new_price;
        return $this;
    }
    /**
     * Get net_catalog_price value
     * @return int|null
     */
    public function getNet_catalog_price()
    {
        return $this->net_catalog_price;
    }
    /**
     * Set net_catalog_price value
     * @param int $net_catalog_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setNet_catalog_price($net_catalog_price = null)
    {
        // validation for constraint: int
        if (!is_null($net_catalog_price) && !is_numeric($net_catalog_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($net_catalog_price)), __LINE__);
        }
        $this->net_catalog_price = $net_catalog_price;
        return $this;
    }
    /**
     * Get recalculated_catalog_price value
     * @return int|null
     */
    public function getRecalculated_catalog_price()
    {
        return $this->recalculated_catalog_price;
    }
    /**
     * Set recalculated_catalog_price value
     * @param int $recalculated_catalog_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setRecalculated_catalog_price($recalculated_catalog_price = null)
    {
        // validation for constraint: int
        if (!is_null($recalculated_catalog_price) && !is_numeric($recalculated_catalog_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recalculated_catalog_price)), __LINE__);
        }
        $this->recalculated_catalog_price = $recalculated_catalog_price;
        return $this;
    }
    /**
     * Get recalculated_btw_new_price value
     * @return int|null
     */
    public function getRecalculated_btw_new_price()
    {
        return $this->recalculated_btw_new_price;
    }
    /**
     * Set recalculated_btw_new_price value
     * @param int $recalculated_btw_new_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setRecalculated_btw_new_price($recalculated_btw_new_price = null)
    {
        // validation for constraint: int
        if (!is_null($recalculated_btw_new_price) && !is_numeric($recalculated_btw_new_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recalculated_btw_new_price)), __LINE__);
        }
        $this->recalculated_btw_new_price = $recalculated_btw_new_price;
        return $this;
    }
    /**
     * Get recalculated_net_catalog_price value
     * @return int|null
     */
    public function getRecalculated_net_catalog_price()
    {
        return $this->recalculated_net_catalog_price;
    }
    /**
     * Set recalculated_net_catalog_price value
     * @param int $recalculated_net_catalog_price
     * @return \Webservices\StructType\CarVWEPrices
     */
    public function setRecalculated_net_catalog_price($recalculated_net_catalog_price = null)
    {
        // validation for constraint: int
        if (!is_null($recalculated_net_catalog_price) && !is_numeric($recalculated_net_catalog_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recalculated_net_catalog_price)), __LINE__);
        }
        $this->recalculated_net_catalog_price = $recalculated_net_catalog_price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEPrices
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
