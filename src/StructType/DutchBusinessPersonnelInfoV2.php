<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessPersonnelInfoV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessPersonnelInfoV2 extends AbstractStructBase
{
    /**
     * The fulltime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $fulltime;
    /**
     * The parttime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $parttime;
    /**
     * The total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $total;
    /**
     * Constructor method for DutchBusinessPersonnelInfoV2
     * @uses DutchBusinessPersonnelInfoV2::setFulltime()
     * @uses DutchBusinessPersonnelInfoV2::setParttime()
     * @uses DutchBusinessPersonnelInfoV2::setTotal()
     * @param int $fulltime
     * @param int $parttime
     * @param int $total
     */
    public function __construct($fulltime = null, $parttime = null, $total = null)
    {
        $this
            ->setFulltime($fulltime)
            ->setParttime($parttime)
            ->setTotal($total);
    }
    /**
     * Get fulltime value
     * @return int|null
     */
    public function getFulltime()
    {
        return $this->fulltime;
    }
    /**
     * Set fulltime value
     * @param int $fulltime
     * @return \Webservices\StructType\DutchBusinessPersonnelInfoV2
     */
    public function setFulltime($fulltime = null)
    {
        // validation for constraint: int
        if (!is_null($fulltime) && !is_numeric($fulltime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fulltime)), __LINE__);
        }
        $this->fulltime = $fulltime;
        return $this;
    }
    /**
     * Get parttime value
     * @return int|null
     */
    public function getParttime()
    {
        return $this->parttime;
    }
    /**
     * Set parttime value
     * @param int $parttime
     * @return \Webservices\StructType\DutchBusinessPersonnelInfoV2
     */
    public function setParttime($parttime = null)
    {
        // validation for constraint: int
        if (!is_null($parttime) && !is_numeric($parttime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parttime)), __LINE__);
        }
        $this->parttime = $parttime;
        return $this;
    }
    /**
     * Get total value
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \Webservices\StructType\DutchBusinessPersonnelInfoV2
     */
    public function setTotal($total = null)
    {
        // validation for constraint: int
        if (!is_null($total) && !is_numeric($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total)), __LINE__);
        }
        $this->total = $total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessPersonnelInfoV2
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
