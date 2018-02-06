<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Hypotheek StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Hypotheek extends AbstractStructBase
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
     * The omschrijving_betrokken_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_betrokken_recht;
    /**
     * The aandeel_inbetrokken_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BreukType
     */
    public $aandeel_inbetrokken_recht;
    /**
     * The heeft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Heeft
     */
    public $heeft;
    /**
     * The is_gebaseerd_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GebaseerdOp
     */
    public $is_gebaseerd_op;
    /**
     * The is_vermeld_in
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $is_vermeld_in;
    /**
     * The rust_op
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Betreft
     */
    public $rust_op;
    /**
     * Constructor method for KadasterV2Hypotheek
     * @uses KadasterV2Hypotheek::setId()
     * @uses KadasterV2Hypotheek::setIdentificatie()
     * @uses KadasterV2Hypotheek::setOmschrijving_betrokken_recht()
     * @uses KadasterV2Hypotheek::setAandeel_inbetrokken_recht()
     * @uses KadasterV2Hypotheek::setHeeft()
     * @uses KadasterV2Hypotheek::setIs_gebaseerd_op()
     * @uses KadasterV2Hypotheek::setIs_vermeld_in()
     * @uses KadasterV2Hypotheek::setRust_op()
     * @param string $id
     * @param string $identificatie
     * @param string $omschrijving_betrokken_recht
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel_inbetrokken_recht
     * @param \Webservices\StructType\KadasterV2Heeft $heeft
     * @param \Webservices\StructType\KadasterV2GebaseerdOp $is_gebaseerd_op
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     * @param \Webservices\StructType\KadasterV2Betreft $rust_op
     */
    public function __construct($id = null, $identificatie = null, $omschrijving_betrokken_recht = null, \Webservices\StructType\KadasterV2BreukType $aandeel_inbetrokken_recht = null, \Webservices\StructType\KadasterV2Heeft $heeft = null, \Webservices\StructType\KadasterV2GebaseerdOp $is_gebaseerd_op = null, \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null, \Webservices\StructType\KadasterV2Betreft $rust_op = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setOmschrijving_betrokken_recht($omschrijving_betrokken_recht)
            ->setAandeel_inbetrokken_recht($aandeel_inbetrokken_recht)
            ->setHeeft($heeft)
            ->setIs_gebaseerd_op($is_gebaseerd_op)
            ->setIs_vermeld_in($is_vermeld_in)
            ->setRust_op($rust_op);
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
     * @return \Webservices\StructType\KadasterV2Hypotheek
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
     * @return \Webservices\StructType\KadasterV2Hypotheek
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
     * Get omschrijving_betrokken_recht value
     * @return string|null
     */
    public function getOmschrijving_betrokken_recht()
    {
        return $this->omschrijving_betrokken_recht;
    }
    /**
     * Set omschrijving_betrokken_recht value
     * @param string $omschrijving_betrokken_recht
     * @return \Webservices\StructType\KadasterV2Hypotheek
     */
    public function setOmschrijving_betrokken_recht($omschrijving_betrokken_recht = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_betrokken_recht) && !is_string($omschrijving_betrokken_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_betrokken_recht)), __LINE__);
        }
        $this->omschrijving_betrokken_recht = $omschrijving_betrokken_recht;
        return $this;
    }
    /**
     * Get aandeel_inbetrokken_recht value
     * @return \Webservices\StructType\KadasterV2BreukType|null
     */
    public function getAandeel_inbetrokken_recht()
    {
        return $this->aandeel_inbetrokken_recht;
    }
    /**
     * Set aandeel_inbetrokken_recht value
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel_inbetrokken_recht
     * @return \Webservices\StructType\KadasterV2Hypotheek
     */
    public function setAandeel_inbetrokken_recht(\Webservices\StructType\KadasterV2BreukType $aandeel_inbetrokken_recht = null)
    {
        $this->aandeel_inbetrokken_recht = $aandeel_inbetrokken_recht;
        return $this;
    }
    /**
     * Get heeft value
     * @return \Webservices\StructType\KadasterV2Heeft|null
     */
    public function getHeeft()
    {
        return $this->heeft;
    }
    /**
     * Set heeft value
     * @param \Webservices\StructType\KadasterV2Heeft $heeft
     * @return \Webservices\StructType\KadasterV2Hypotheek
     */
    public function setHeeft(\Webservices\StructType\KadasterV2Heeft $heeft = null)
    {
        $this->heeft = $heeft;
        return $this;
    }
    /**
     * Get is_gebaseerd_op value
     * @return \Webservices\StructType\KadasterV2GebaseerdOp|null
     */
    public function getIs_gebaseerd_op()
    {
        return $this->is_gebaseerd_op;
    }
    /**
     * Set is_gebaseerd_op value
     * @param \Webservices\StructType\KadasterV2GebaseerdOp $is_gebaseerd_op
     * @return \Webservices\StructType\KadasterV2Hypotheek
     */
    public function setIs_gebaseerd_op(\Webservices\StructType\KadasterV2GebaseerdOp $is_gebaseerd_op = null)
    {
        $this->is_gebaseerd_op = $is_gebaseerd_op;
        return $this;
    }
    /**
     * Get is_vermeld_in value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getIs_vermeld_in()
    {
        return $this->is_vermeld_in;
    }
    /**
     * Set is_vermeld_in value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     * @return \Webservices\StructType\KadasterV2Hypotheek
     */
    public function setIs_vermeld_in(\Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null)
    {
        $this->is_vermeld_in = $is_vermeld_in;
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
     * @return \Webservices\StructType\KadasterV2Hypotheek
     */
    public function setRust_op(\Webservices\StructType\KadasterV2Betreft $rust_op = null)
    {
        $this->rust_op = $rust_op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Hypotheek
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
