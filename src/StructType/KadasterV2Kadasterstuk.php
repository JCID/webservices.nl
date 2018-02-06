<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Kadasterstuk StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Kadasterstuk extends AbstractStructBase
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
     * The indicatie_correctie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_correctie;
    /**
     * The acg_identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AcgIDType
     */
    public $acg_identificatie;
    /**
     * The bijlage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2BijlageArray
     */
    public $bijlage;
    /**
     * The omvat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Omvat
     */
    public $omvat;
    /**
     * Constructor method for KadasterV2Kadasterstuk
     * @uses KadasterV2Kadasterstuk::setId()
     * @uses KadasterV2Kadasterstuk::setIdentificatie()
     * @uses KadasterV2Kadasterstuk::setIndicatie_correctie()
     * @uses KadasterV2Kadasterstuk::setAcg_identificatie()
     * @uses KadasterV2Kadasterstuk::setBijlage()
     * @uses KadasterV2Kadasterstuk::setOmvat()
     * @param string $id
     * @param string $identificatie
     * @param bool $indicatie_correctie
     * @param \Webservices\StructType\KadasterV2AcgIDType $acg_identificatie
     * @param \Webservices\ArrayType\KadasterV2BijlageArray $bijlage
     * @param \Webservices\StructType\KadasterV2Omvat $omvat
     */
    public function __construct($id = null, $identificatie = null, $indicatie_correctie = null, \Webservices\StructType\KadasterV2AcgIDType $acg_identificatie = null, \Webservices\ArrayType\KadasterV2BijlageArray $bijlage = null, \Webservices\StructType\KadasterV2Omvat $omvat = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setIndicatie_correctie($indicatie_correctie)
            ->setAcg_identificatie($acg_identificatie)
            ->setBijlage($bijlage)
            ->setOmvat($omvat);
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
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
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
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
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
     * Get indicatie_correctie value
     * @return bool|null
     */
    public function getIndicatie_correctie()
    {
        return $this->indicatie_correctie;
    }
    /**
     * Set indicatie_correctie value
     * @param bool $indicatie_correctie
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
     */
    public function setIndicatie_correctie($indicatie_correctie = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_correctie) && !is_bool($indicatie_correctie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_correctie)), __LINE__);
        }
        $this->indicatie_correctie = $indicatie_correctie;
        return $this;
    }
    /**
     * Get acg_identificatie value
     * @return \Webservices\StructType\KadasterV2AcgIDType|null
     */
    public function getAcg_identificatie()
    {
        return $this->acg_identificatie;
    }
    /**
     * Set acg_identificatie value
     * @param \Webservices\StructType\KadasterV2AcgIDType $acg_identificatie
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
     */
    public function setAcg_identificatie(\Webservices\StructType\KadasterV2AcgIDType $acg_identificatie = null)
    {
        $this->acg_identificatie = $acg_identificatie;
        return $this;
    }
    /**
     * Get bijlage value
     * @return \Webservices\ArrayType\KadasterV2BijlageArray|null
     */
    public function getBijlage()
    {
        return $this->bijlage;
    }
    /**
     * Set bijlage value
     * @param \Webservices\ArrayType\KadasterV2BijlageArray $bijlage
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
     */
    public function setBijlage(\Webservices\ArrayType\KadasterV2BijlageArray $bijlage = null)
    {
        $this->bijlage = $bijlage;
        return $this;
    }
    /**
     * Get omvat value
     * @return \Webservices\StructType\KadasterV2Omvat|null
     */
    public function getOmvat()
    {
        return $this->omvat;
    }
    /**
     * Set omvat value
     * @param \Webservices\StructType\KadasterV2Omvat $omvat
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
     */
    public function setOmvat(\Webservices\StructType\KadasterV2Omvat $omvat = null)
    {
        $this->omvat = $omvat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Kadasterstuk
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
