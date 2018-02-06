<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Mandeligheid StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Mandeligheid extends AbstractStructBase
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
     * The omvat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2HoofdzaakArray
     */
    public $omvat;
    /**
     * The is_gebaseerd_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsGebaseerdOp
     */
    public $is_gebaseerd_op;
    /**
     * Constructor method for KadasterV2Mandeligheid
     * @uses KadasterV2Mandeligheid::setId()
     * @uses KadasterV2Mandeligheid::setIdentificatie()
     * @uses KadasterV2Mandeligheid::setOmvat()
     * @uses KadasterV2Mandeligheid::setIs_gebaseerd_op()
     * @param string $id
     * @param string $identificatie
     * @param \Webservices\ArrayType\KadasterV2HoofdzaakArray $omvat
     * @param \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op
     */
    public function __construct($id = null, $identificatie = null, \Webservices\ArrayType\KadasterV2HoofdzaakArray $omvat = null, \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setOmvat($omvat)
            ->setIs_gebaseerd_op($is_gebaseerd_op);
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
     * @return \Webservices\StructType\KadasterV2Mandeligheid
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
     * @return \Webservices\StructType\KadasterV2Mandeligheid
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
     * Get omvat value
     * @return \Webservices\ArrayType\KadasterV2HoofdzaakArray|null
     */
    public function getOmvat()
    {
        return $this->omvat;
    }
    /**
     * Set omvat value
     * @param \Webservices\ArrayType\KadasterV2HoofdzaakArray $omvat
     * @return \Webservices\StructType\KadasterV2Mandeligheid
     */
    public function setOmvat(\Webservices\ArrayType\KadasterV2HoofdzaakArray $omvat = null)
    {
        $this->omvat = $omvat;
        return $this;
    }
    /**
     * Get is_gebaseerd_op value
     * @return \Webservices\StructType\KadasterV2IsGebaseerdOp|null
     */
    public function getIs_gebaseerd_op()
    {
        return $this->is_gebaseerd_op;
    }
    /**
     * Set is_gebaseerd_op value
     * @param \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op
     * @return \Webservices\StructType\KadasterV2Mandeligheid
     */
    public function setIs_gebaseerd_op(\Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null)
    {
        $this->is_gebaseerd_op = $is_gebaseerd_op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Mandeligheid
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
