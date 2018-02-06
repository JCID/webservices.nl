<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2ZakelijkRecht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2ZakelijkRecht extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificatie;
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The rust_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Betreft
     */
    public $rust_op;
    /**
     * The is_belast_met
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2ZakelijkRechtArray
     */
    public $is_belast_met;
    /**
     * The is_beperkt_tot
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2TenaamstellingArray
     */
    public $is_beperkt_tot;
    /**
     * Constructor method for KadasterV2ZakelijkRecht
     * @uses KadasterV2ZakelijkRecht::setId()
     * @uses KadasterV2ZakelijkRecht::setIdentificatie()
     * @uses KadasterV2ZakelijkRecht::setAard()
     * @uses KadasterV2ZakelijkRecht::setRust_op()
     * @uses KadasterV2ZakelijkRecht::setIs_belast_met()
     * @uses KadasterV2ZakelijkRecht::setIs_beperkt_tot()
     * @param string $id
     * @param string $identificatie
     * @param string $aard
     * @param \Webservices\StructType\KadasterV2Betreft $rust_op
     * @param \Webservices\ArrayType\KadasterV2ZakelijkRechtArray $is_belast_met
     * @param \Webservices\ArrayType\KadasterV2TenaamstellingArray $is_beperkt_tot
     */
    public function __construct($id = null, $identificatie = null, $aard = null, \Webservices\StructType\KadasterV2Betreft $rust_op = null, \Webservices\ArrayType\KadasterV2ZakelijkRechtArray $is_belast_met = null, \Webservices\ArrayType\KadasterV2TenaamstellingArray $is_beperkt_tot = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setAard($aard)
            ->setRust_op($rust_op)
            ->setIs_belast_met($is_belast_met)
            ->setIs_beperkt_tot($is_beperkt_tot);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get identificatie value
     * @return string|null
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }
    /**
     * Set identificatie value
     * @param string $identificatie
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public function setIdentificatie($identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($identificatie) && !is_string($identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificatie)), __LINE__);
        }
        $this->identificatie = $identificatie;
        return $this;
    }
    /**
     * Get aard value
     * @return string|null
     */
    public function getAard()
    {
        return $this->aard;
    }
    /**
     * Set aard value
     * @param string $aard
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public function setAard($aard = null)
    {
        // validation for constraint: string
        if (!is_null($aard) && !is_string($aard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard)), __LINE__);
        }
        $this->aard = $aard;
        return $this;
    }
    /**
     * Get rust_op value
     * @return \Webservices\StructType\KadasterV2Betreft|null
     */
    public function getRust_op()
    {
        return $this->rust_op;
    }
    /**
     * Set rust_op value
     * @param \Webservices\StructType\KadasterV2Betreft $rust_op
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public function setRust_op(\Webservices\StructType\KadasterV2Betreft $rust_op = null)
    {
        $this->rust_op = $rust_op;
        return $this;
    }
    /**
     * Get is_belast_met value
     * @return \Webservices\ArrayType\KadasterV2ZakelijkRechtArray|null
     */
    public function getIs_belast_met()
    {
        return $this->is_belast_met;
    }
    /**
     * Set is_belast_met value
     * @param \Webservices\ArrayType\KadasterV2ZakelijkRechtArray $is_belast_met
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public function setIs_belast_met(\Webservices\ArrayType\KadasterV2ZakelijkRechtArray $is_belast_met = null)
    {
        $this->is_belast_met = $is_belast_met;
        return $this;
    }
    /**
     * Get is_beperkt_tot value
     * @return \Webservices\ArrayType\KadasterV2TenaamstellingArray|null
     */
    public function getIs_beperkt_tot()
    {
        return $this->is_beperkt_tot;
    }
    /**
     * Set is_beperkt_tot value
     * @param \Webservices\ArrayType\KadasterV2TenaamstellingArray $is_beperkt_tot
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public function setIs_beperkt_tot(\Webservices\ArrayType\KadasterV2TenaamstellingArray $is_beperkt_tot = null)
    {
        $this->is_beperkt_tot = $is_beperkt_tot;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht
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
