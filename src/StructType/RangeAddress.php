<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RangeAddress StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RangeAddress extends AbstractStructBase
{
    /**
     * The reeks
     * @var \Webservices\StructType\PCReeks
     */
    public $reeks;
    /**
     * The huisnr
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $huisnr;
    /**
     * The huisnr_toevoeging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisnr_toevoeging;
    /**
     * Constructor method for RangeAddress
     * @uses RangeAddress::setReeks()
     * @uses RangeAddress::setHuisnr()
     * @uses RangeAddress::setHuisnr_toevoeging()
     * @param \Webservices\StructType\PCReeks $reeks
     * @param int $huisnr
     * @param string $huisnr_toevoeging
     */
    public function __construct(\Webservices\StructType\PCReeks $reeks = null, $huisnr = null, $huisnr_toevoeging = null)
    {
        $this
            ->setReeks($reeks)
            ->setHuisnr($huisnr)
            ->setHuisnr_toevoeging($huisnr_toevoeging);
    }
    /**
     * Get reeks value
     * @return \Webservices\StructType\PCReeks|null
     */
    public function getReeks()
    {
        return $this->reeks;
    }
    /**
     * Set reeks value
     * @param \Webservices\StructType\PCReeks $reeks
     * @return \Webservices\StructType\RangeAddress
     */
    public function setReeks(\Webservices\StructType\PCReeks $reeks = null)
    {
        $this->reeks = $reeks;
        return $this;
    }
    /**
     * Get huisnr value
     * @return int|null
     */
    public function getHuisnr()
    {
        return $this->huisnr;
    }
    /**
     * Set huisnr value
     * @param int $huisnr
     * @return \Webservices\StructType\RangeAddress
     */
    public function setHuisnr($huisnr = null)
    {
        // validation for constraint: int
        if (!is_null($huisnr) && !is_numeric($huisnr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnr)), __LINE__);
        }
        $this->huisnr = $huisnr;
        return $this;
    }
    /**
     * Get huisnr_toevoeging value
     * @return string|null
     */
    public function getHuisnr_toevoeging()
    {
        return $this->huisnr_toevoeging;
    }
    /**
     * Set huisnr_toevoeging value
     * @param string $huisnr_toevoeging
     * @return \Webservices\StructType\RangeAddress
     */
    public function setHuisnr_toevoeging($huisnr_toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnr_toevoeging) && !is_string($huisnr_toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnr_toevoeging)), __LINE__);
        }
        $this->huisnr_toevoeging = $huisnr_toevoeging;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RangeAddress
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
