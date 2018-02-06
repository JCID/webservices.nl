<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GemeentelijkeRegistratie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GemeentelijkeRegistratie extends AbstractStructBase
{
    /**
     * The id_gemeentelijke_registratie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id_gemeentelijke_registratie;
    /**
     * The nummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nummer;
    /**
     * The datum_inwerking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_inwerking;
    /**
     * The omschrijving_publiekrechtelijke_beperking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_publiekrechtelijke_beperking;
    /**
     * Constructor method for KadasterV2GemeentelijkeRegistratie
     * @uses KadasterV2GemeentelijkeRegistratie::setId_gemeentelijke_registratie()
     * @uses KadasterV2GemeentelijkeRegistratie::setNummer()
     * @uses KadasterV2GemeentelijkeRegistratie::setDatum_inwerking()
     * @uses KadasterV2GemeentelijkeRegistratie::setOmschrijving_publiekrechtelijke_beperking()
     * @param string $id_gemeentelijke_registratie
     * @param string $nummer
     * @param string $datum_inwerking
     * @param string $omschrijving_publiekrechtelijke_beperking
     */
    public function __construct($id_gemeentelijke_registratie = null, $nummer = null, $datum_inwerking = null, $omschrijving_publiekrechtelijke_beperking = null)
    {
        $this
            ->setId_gemeentelijke_registratie($id_gemeentelijke_registratie)
            ->setNummer($nummer)
            ->setDatum_inwerking($datum_inwerking)
            ->setOmschrijving_publiekrechtelijke_beperking($omschrijving_publiekrechtelijke_beperking);
    }
    /**
     * Get id_gemeentelijke_registratie value
     * @return string|null
     */
    public function getId_gemeentelijke_registratie()
    {
        return $this->id_gemeentelijke_registratie;
    }
    /**
     * Set id_gemeentelijke_registratie value
     * @param string $id_gemeentelijke_registratie
     * @return \Webservices\StructType\KadasterV2GemeentelijkeRegistratie
     */
    public function setId_gemeentelijke_registratie($id_gemeentelijke_registratie = null)
    {
        // validation for constraint: string
        if (!is_null($id_gemeentelijke_registratie) && !is_string($id_gemeentelijke_registratie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id_gemeentelijke_registratie)), __LINE__);
        }
        $this->id_gemeentelijke_registratie = $id_gemeentelijke_registratie;
        return $this;
    }
    /**
     * Get nummer value
     * @return string|null
     */
    public function getNummer()
    {
        return $this->nummer;
    }
    /**
     * Set nummer value
     * @param string $nummer
     * @return \Webservices\StructType\KadasterV2GemeentelijkeRegistratie
     */
    public function setNummer($nummer = null)
    {
        // validation for constraint: string
        if (!is_null($nummer) && !is_string($nummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nummer)), __LINE__);
        }
        $this->nummer = $nummer;
        return $this;
    }
    /**
     * Get datum_inwerking value
     * @return string|null
     */
    public function getDatum_inwerking()
    {
        return $this->datum_inwerking;
    }
    /**
     * Set datum_inwerking value
     * @param string $datum_inwerking
     * @return \Webservices\StructType\KadasterV2GemeentelijkeRegistratie
     */
    public function setDatum_inwerking($datum_inwerking = null)
    {
        // validation for constraint: string
        if (!is_null($datum_inwerking) && !is_string($datum_inwerking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_inwerking)), __LINE__);
        }
        $this->datum_inwerking = $datum_inwerking;
        return $this;
    }
    /**
     * Get omschrijving_publiekrechtelijke_beperking value
     * @return string|null
     */
    public function getOmschrijving_publiekrechtelijke_beperking()
    {
        return $this->omschrijving_publiekrechtelijke_beperking;
    }
    /**
     * Set omschrijving_publiekrechtelijke_beperking value
     * @param string $omschrijving_publiekrechtelijke_beperking
     * @return \Webservices\StructType\KadasterV2GemeentelijkeRegistratie
     */
    public function setOmschrijving_publiekrechtelijke_beperking($omschrijving_publiekrechtelijke_beperking = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_publiekrechtelijke_beperking) && !is_string($omschrijving_publiekrechtelijke_beperking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_publiekrechtelijke_beperking)), __LINE__);
        }
        $this->omschrijving_publiekrechtelijke_beperking = $omschrijving_publiekrechtelijke_beperking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GemeentelijkeRegistratie
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
