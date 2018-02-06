<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Tenaamstelling StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Tenaamstelling extends AbstractStructBase
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
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Van
     */
    public $van;
    /**
     * The ten_name_van
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
     */
    public $ten_name_van;
    /**
     * Constructor method for KadasterV2Tenaamstelling
     * @uses KadasterV2Tenaamstelling::setId()
     * @uses KadasterV2Tenaamstelling::setIdentificatie()
     * @uses KadasterV2Tenaamstelling::setOmschrijving()
     * @uses KadasterV2Tenaamstelling::setVan()
     * @uses KadasterV2Tenaamstelling::setTen_name_van()
     * @param string $id
     * @param string $identificatie
     * @param string $omschrijving
     * @param \Webservices\StructType\KadasterV2Van $van
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van
     */
    public function __construct($id = null, $identificatie = null, $omschrijving = null, \Webservices\StructType\KadasterV2Van $van = null, \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setOmschrijving($omschrijving)
            ->setVan($van)
            ->setTen_name_van($ten_name_van);
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
     * @return \Webservices\StructType\KadasterV2Tenaamstelling
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
     * @return \Webservices\StructType\KadasterV2Tenaamstelling
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
     * Get omschrijving value
     * @return string|null
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
    /**
     * Set omschrijving value
     * @param string $omschrijving
     * @return \Webservices\StructType\KadasterV2Tenaamstelling
     */
    public function setOmschrijving($omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving) && !is_string($omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving)), __LINE__);
        }
        $this->omschrijving = $omschrijving;
        return $this;
    }
    /**
     * Get van value
     * @return \Webservices\StructType\KadasterV2Van|null
     */
    public function getVan()
    {
        return $this->van;
    }
    /**
     * Set van value
     * @param \Webservices\StructType\KadasterV2Van $van
     * @return \Webservices\StructType\KadasterV2Tenaamstelling
     */
    public function setVan(\Webservices\StructType\KadasterV2Van $van = null)
    {
        $this->van = $van;
        return $this;
    }
    /**
     * Get ten_name_van value
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType|null
     */
    public function getTen_name_van()
    {
        return $this->ten_name_van;
    }
    /**
     * Set ten_name_van value
     * @param \Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van
     * @return \Webservices\StructType\KadasterV2Tenaamstelling
     */
    public function setTen_name_van(\Webservices\StructType\KadasterV2PersoonTypeKeuzeType $ten_name_van = null)
    {
        $this->ten_name_van = $ten_name_van;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Tenaamstelling
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
