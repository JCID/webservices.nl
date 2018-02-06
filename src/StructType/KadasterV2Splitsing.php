<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Splitsing StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Splitsing extends AbstractStructBase
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
     * The heeft_vereniging_van_eigenaren
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren
     */
    public $heeft_vereniging_van_eigenaren;
    /**
     * The is_gebaseerd_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2IsGebaseerdOp
     */
    public $is_gebaseerd_op;
    /**
     * Constructor method for KadasterV2Splitsing
     * @uses KadasterV2Splitsing::setId()
     * @uses KadasterV2Splitsing::setIdentificatie()
     * @uses KadasterV2Splitsing::setHeeft_vereniging_van_eigenaren()
     * @uses KadasterV2Splitsing::setIs_gebaseerd_op()
     * @param string $id
     * @param string $identificatie
     * @param \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren $heeft_vereniging_van_eigenaren
     * @param \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op
     */
    public function __construct($id = null, $identificatie = null, \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren $heeft_vereniging_van_eigenaren = null, \Webservices\StructType\KadasterV2IsGebaseerdOp $is_gebaseerd_op = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setHeeft_vereniging_van_eigenaren($heeft_vereniging_van_eigenaren)
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
     * @return \Webservices\StructType\KadasterV2Splitsing
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
     * @return \Webservices\StructType\KadasterV2Splitsing
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
     * Get heeft_vereniging_van_eigenaren value
     * @return \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren|null
     */
    public function getHeeft_vereniging_van_eigenaren()
    {
        return $this->heeft_vereniging_van_eigenaren;
    }
    /**
     * Set heeft_vereniging_van_eigenaren value
     * @param \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren $heeft_vereniging_van_eigenaren
     * @return \Webservices\StructType\KadasterV2Splitsing
     */
    public function setHeeft_vereniging_van_eigenaren(\Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren $heeft_vereniging_van_eigenaren = null)
    {
        $this->heeft_vereniging_van_eigenaren = $heeft_vereniging_van_eigenaren;
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
     * @return \Webservices\StructType\KadasterV2Splitsing
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
     * @return \Webservices\StructType\KadasterV2Splitsing
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
