<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRAssets StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRAssets extends AbstractStructBase
{
    /**
     * The fixed_assets_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRItem
     */
    public $fixed_assets_total;
    /**
     * The fixed_assets_items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRItemArray
     */
    public $fixed_assets_items;
    /**
     * The current_assets_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\GCRItem
     */
    public $current_assets_total;
    /**
     * The current_assets_items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRItemArray
     */
    public $current_assets_items;
    /**
     * The balance_sheet_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $balance_sheet_total;
    /**
     * Constructor method for GCRAssets
     * @uses GCRAssets::setFixed_assets_total()
     * @uses GCRAssets::setFixed_assets_items()
     * @uses GCRAssets::setCurrent_assets_total()
     * @uses GCRAssets::setCurrent_assets_items()
     * @uses GCRAssets::setBalance_sheet_total()
     * @param \Webservices\StructType\GCRItem $fixed_assets_total
     * @param \Webservices\ArrayType\GCRItemArray $fixed_assets_items
     * @param \Webservices\StructType\GCRItem $current_assets_total
     * @param \Webservices\ArrayType\GCRItemArray $current_assets_items
     * @param float $balance_sheet_total
     */
    public function __construct(\Webservices\StructType\GCRItem $fixed_assets_total = null, \Webservices\ArrayType\GCRItemArray $fixed_assets_items = null, \Webservices\StructType\GCRItem $current_assets_total = null, \Webservices\ArrayType\GCRItemArray $current_assets_items = null, $balance_sheet_total = null)
    {
        $this
            ->setFixed_assets_total($fixed_assets_total)
            ->setFixed_assets_items($fixed_assets_items)
            ->setCurrent_assets_total($current_assets_total)
            ->setCurrent_assets_items($current_assets_items)
            ->setBalance_sheet_total($balance_sheet_total);
    }
    /**
     * Get fixed_assets_total value
     * @return \Webservices\StructType\GCRItem|null
     */
    public function getFixed_assets_total()
    {
        return $this->fixed_assets_total;
    }
    /**
     * Set fixed_assets_total value
     * @param \Webservices\StructType\GCRItem $fixed_assets_total
     * @return \Webservices\StructType\GCRAssets
     */
    public function setFixed_assets_total(\Webservices\StructType\GCRItem $fixed_assets_total = null)
    {
        $this->fixed_assets_total = $fixed_assets_total;
        return $this;
    }
    /**
     * Get fixed_assets_items value
     * @return \Webservices\ArrayType\GCRItemArray|null
     */
    public function getFixed_assets_items()
    {
        return $this->fixed_assets_items;
    }
    /**
     * Set fixed_assets_items value
     * @param \Webservices\ArrayType\GCRItemArray $fixed_assets_items
     * @return \Webservices\StructType\GCRAssets
     */
    public function setFixed_assets_items(\Webservices\ArrayType\GCRItemArray $fixed_assets_items = null)
    {
        $this->fixed_assets_items = $fixed_assets_items;
        return $this;
    }
    /**
     * Get current_assets_total value
     * @return \Webservices\StructType\GCRItem|null
     */
    public function getCurrent_assets_total()
    {
        return $this->current_assets_total;
    }
    /**
     * Set current_assets_total value
     * @param \Webservices\StructType\GCRItem $current_assets_total
     * @return \Webservices\StructType\GCRAssets
     */
    public function setCurrent_assets_total(\Webservices\StructType\GCRItem $current_assets_total = null)
    {
        $this->current_assets_total = $current_assets_total;
        return $this;
    }
    /**
     * Get current_assets_items value
     * @return \Webservices\ArrayType\GCRItemArray|null
     */
    public function getCurrent_assets_items()
    {
        return $this->current_assets_items;
    }
    /**
     * Set current_assets_items value
     * @param \Webservices\ArrayType\GCRItemArray $current_assets_items
     * @return \Webservices\StructType\GCRAssets
     */
    public function setCurrent_assets_items(\Webservices\ArrayType\GCRItemArray $current_assets_items = null)
    {
        $this->current_assets_items = $current_assets_items;
        return $this;
    }
    /**
     * Get balance_sheet_total value
     * @return float|null
     */
    public function getBalance_sheet_total()
    {
        return $this->balance_sheet_total;
    }
    /**
     * Set balance_sheet_total value
     * @param float $balance_sheet_total
     * @return \Webservices\StructType\GCRAssets
     */
    public function setBalance_sheet_total($balance_sheet_total = null)
    {
        $this->balance_sheet_total = $balance_sheet_total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRAssets
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
