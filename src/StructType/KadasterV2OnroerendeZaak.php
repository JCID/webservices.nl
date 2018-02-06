<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2OnroerendeZaak StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2OnroerendeZaak extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificatie;
    /**
     * The adres
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AddressLocatie
     */
    public $adres;
    /**
     * The uin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $uin;
    /**
     * The aard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The kadastrale_aanduiding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * The aard_cultuur_onbebouwd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard_cultuur_onbebouwd;
    /**
     * The aard_cultuur_bebouwd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aard_cultuur_bebouwd;
    /**
     * Constructor method for KadasterV2OnroerendeZaak
     * @uses KadasterV2OnroerendeZaak::setId()
     * @uses KadasterV2OnroerendeZaak::setType()
     * @uses KadasterV2OnroerendeZaak::setIdentificatie()
     * @uses KadasterV2OnroerendeZaak::setAdres()
     * @uses KadasterV2OnroerendeZaak::setUin()
     * @uses KadasterV2OnroerendeZaak::setAard()
     * @uses KadasterV2OnroerendeZaak::setOmschrijving()
     * @uses KadasterV2OnroerendeZaak::setKadastrale_aanduiding()
     * @uses KadasterV2OnroerendeZaak::setAard_cultuur_onbebouwd()
     * @uses KadasterV2OnroerendeZaak::setAard_cultuur_bebouwd()
     * @param string $id
     * @param string $type
     * @param string $identificatie
     * @param \Webservices\StructType\KadasterV2AddressLocatie $adres
     * @param string $uin
     * @param string $aard
     * @param string $omschrijving
     * @param \Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding
     * @param string $aard_cultuur_onbebouwd
     * @param string $aard_cultuur_bebouwd
     */
    public function __construct($id = null, $type = null, $identificatie = null, \Webservices\StructType\KadasterV2AddressLocatie $adres = null, $uin = null, $aard = null, $omschrijving = null, \Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding = null, $aard_cultuur_onbebouwd = null, $aard_cultuur_bebouwd = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setIdentificatie($identificatie)
            ->setAdres($adres)
            ->setUin($uin)
            ->setAard($aard)
            ->setOmschrijving($omschrijving)
            ->setKadastrale_aanduiding($kadastrale_aanduiding)
            ->setAard_cultuur_onbebouwd($aard_cultuur_onbebouwd)
            ->setAard_cultuur_bebouwd($aard_cultuur_bebouwd);
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
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
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
     * Get adres value
     * @return \Webservices\StructType\KadasterV2AddressLocatie|null
     */
    public function getAdres()
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \Webservices\StructType\KadasterV2AddressLocatie $adres
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
     */
    public function setAdres(\Webservices\StructType\KadasterV2AddressLocatie $adres = null)
    {
        $this->adres = $adres;
        return $this;
    }
    /**
     * Get uin value
     * @return string|null
     */
    public function getUin()
    {
        return $this->uin;
    }
    /**
     * Set uin value
     * @param string $uin
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
     */
    public function setUin($uin = null)
    {
        // validation for constraint: string
        if (!is_null($uin) && !is_string($uin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uin)), __LINE__);
        }
        $this->uin = $uin;
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
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
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
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
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
     * Get kadastrale_aanduiding value
     * @return \Webservices\StructType\KadasterV2KadastraleAanduiding|null
     */
    public function getKadastrale_aanduiding()
    {
        return $this->kadastrale_aanduiding;
    }
    /**
     * Set kadastrale_aanduiding value
     * @param \Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadasterV2KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
        return $this;
    }
    /**
     * Get aard_cultuur_onbebouwd value
     * @return string|null
     */
    public function getAard_cultuur_onbebouwd()
    {
        return $this->aard_cultuur_onbebouwd;
    }
    /**
     * Set aard_cultuur_onbebouwd value
     * @param string $aard_cultuur_onbebouwd
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
     */
    public function setAard_cultuur_onbebouwd($aard_cultuur_onbebouwd = null)
    {
        // validation for constraint: string
        if (!is_null($aard_cultuur_onbebouwd) && !is_string($aard_cultuur_onbebouwd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_cultuur_onbebouwd)), __LINE__);
        }
        $this->aard_cultuur_onbebouwd = $aard_cultuur_onbebouwd;
        return $this;
    }
    /**
     * Get aard_cultuur_bebouwd value
     * @return string|null
     */
    public function getAard_cultuur_bebouwd()
    {
        return $this->aard_cultuur_bebouwd;
    }
    /**
     * Set aard_cultuur_bebouwd value
     * @param string $aard_cultuur_bebouwd
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
     */
    public function setAard_cultuur_bebouwd($aard_cultuur_bebouwd = null)
    {
        // validation for constraint: string
        if (!is_null($aard_cultuur_bebouwd) && !is_string($aard_cultuur_bebouwd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aard_cultuur_bebouwd)), __LINE__);
        }
        $this->aard_cultuur_bebouwd = $aard_cultuur_bebouwd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2OnroerendeZaak
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
