<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRLiabilities StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRLiabilities extends AbstractStructBase
{
    /**
     * The liabilities_items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRItemArray
     */
    public $liabilities_items;
    /**
     * The balance_sheet_total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $balance_sheet_total;
    /**
     * Constructor method for GCRLiabilities
     * @uses GCRLiabilities::setLiabilities_items()
     * @uses GCRLiabilities::setBalance_sheet_total()
     * @param \Webservices\ArrayType\GCRItemArray $liabilities_items
     * @param float $balance_sheet_total
     */
    public function __construct(\Webservices\ArrayType\GCRItemArray $liabilities_items = null, $balance_sheet_total = null)
    {
        $this
            ->setLiabilities_items($liabilities_items)
            ->setBalance_sheet_total($balance_sheet_total);
    }
    /**
     * Get liabilities_items value
     * @return \Webservices\ArrayType\GCRItemArray|null
     */
    public function getLiabilities_items()
    {
        return $this->liabilities_items;
    }
    /**
     * Set liabilities_items value
     * @param \Webservices\ArrayType\GCRItemArray $liabilities_items
     * @return \Webservices\StructType\GCRLiabilities
     */
    public function setLiabilities_items(\Webservices\ArrayType\GCRItemArray $liabilities_items = null)
    {
        $this->liabilities_items = $liabilities_items;
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
     * @return \Webservices\StructType\GCRLiabilities
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
     * @return \Webservices\StructType\GCRLiabilities
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
