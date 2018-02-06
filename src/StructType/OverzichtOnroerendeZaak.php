<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OverzichtOnroerendeZaak StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class OverzichtOnroerendeZaak extends AbstractStructBase
{
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * The kadastrale_aanduiding
     * @var \Webservices\StructType\KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * The locatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\LocatieBinnenland
     */
    public $locatie;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * Constructor method for OverzichtOnroerendeZaak
     * @uses OverzichtOnroerendeZaak::setObject_id()
     * @uses OverzichtOnroerendeZaak::setKadastrale_aanduiding()
     * @uses OverzichtOnroerendeZaak::setLocatie()
     * @uses OverzichtOnroerendeZaak::setOmschrijving()
     * @param string $object_id
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @param \Webservices\StructType\LocatieBinnenland $locatie
     * @param string $omschrijving
     */
    public function __construct($object_id = null, \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null, \Webservices\StructType\LocatieBinnenland $locatie = null, $omschrijving = null)
    {
        $this
            ->setObject_id($object_id)
            ->setKadastrale_aanduiding($kadastrale_aanduiding)
            ->setLocatie($locatie)
            ->setOmschrijving($omschrijving);
    }
    /**
     * Get object_id value
     * @return string|null
     */
    public function getObject_id()
    {
        return $this->object_id;
    }
    /**
     * Set object_id value
     * @param string $object_id
     * @return \Webservices\StructType\OverzichtOnroerendeZaak
     */
    public function setObject_id($object_id = null)
    {
        // validation for constraint: string
        if (!is_null($object_id) && !is_string($object_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($object_id)), __LINE__);
        }
        $this->object_id = $object_id;
        return $this;
    }
    /**
     * Get kadastrale_aanduiding value
     * @return \Webservices\StructType\KadastraleAanduiding|null
     */
    public function getKadastrale_aanduiding()
    {
        return $this->kadastrale_aanduiding;
    }
    /**
     * Set kadastrale_aanduiding value
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @return \Webservices\StructType\OverzichtOnroerendeZaak
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
        return $this;
    }
    /**
     * Get locatie value
     * @return \Webservices\StructType\LocatieBinnenland|null
     */
    public function getLocatie()
    {
        return $this->locatie;
    }
    /**
     * Set locatie value
     * @param \Webservices\StructType\LocatieBinnenland $locatie
     * @return \Webservices\StructType\OverzichtOnroerendeZaak
     */
    public function setLocatie(\Webservices\StructType\LocatieBinnenland $locatie = null)
    {
        $this->locatie = $locatie;
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
     * @return \Webservices\StructType\OverzichtOnroerendeZaak
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\OverzichtOnroerendeZaak
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
