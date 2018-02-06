<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRBalanceSheet StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRBalanceSheet extends AbstractStructBase
{
    /**
     * The items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRItemArray
     */
    public $items;
    /**
     * The assets
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRAssets
     */
    public $assets;
    /**
     * The liabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRLiabilities
     */
    public $liabilities;
    /**
     * Constructor method for GCRBalanceSheet
     * @uses GCRBalanceSheet::setItems()
     * @uses GCRBalanceSheet::setAssets()
     * @uses GCRBalanceSheet::setLiabilities()
     * @param \Webservices\ArrayType\GCRItemArray $items
     * @param \Webservices\StructType\GCRAssets $assets
     * @param \Webservices\StructType\GCRLiabilities $liabilities
     */
    public function __construct(\Webservices\ArrayType\GCRItemArray $items = null, \Webservices\StructType\GCRAssets $assets = null, \Webservices\StructType\GCRLiabilities $liabilities = null)
    {
        $this
            ->setItems($items)
            ->setAssets($assets)
            ->setLiabilities($liabilities);
    }
    /**
     * Get items value
     * @return \Webservices\ArrayType\GCRItemArray|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param \Webservices\ArrayType\GCRItemArray $items
     * @return \Webservices\StructType\GCRBalanceSheet
     */
    public function setItems(\Webservices\ArrayType\GCRItemArray $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Get assets value
     * @return \Webservices\StructType\GCRAssets|null
     */
    public function getAssets()
    {
        return $this->assets;
    }
    /**
     * Set assets value
     * @param \Webservices\StructType\GCRAssets $assets
     * @return \Webservices\StructType\GCRBalanceSheet
     */
    public function setAssets(\Webservices\StructType\GCRAssets $assets = null)
    {
        $this->assets = $assets;
        return $this;
    }
    /**
     * Get liabilities value
     * @return \Webservices\StructType\GCRLiabilities|null
     */
    public function getLiabilities()
    {
        return $this->liabilities;
    }
    /**
     * Set liabilities value
     * @param \Webservices\StructType\GCRLiabilities $liabilities
     * @return \Webservices\StructType\GCRBalanceSheet
     */
    public function setLiabilities(\Webservices\StructType\GCRLiabilities $liabilities = null)
    {
        $this->liabilities = $liabilities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRBalanceSheet
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
