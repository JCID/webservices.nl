<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2NietNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2NietNatuurlijkPersoon extends AbstractStructBase
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
     * The statutaire_naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statutaire_naam;
    /**
     * The statutaire_zetel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statutaire_zetel;
    /**
     * The rechtsvorm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rechtsvorm;
    /**
     * The betreft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon
     */
    public $betreft;
    /**
     * The postlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AddressLocatie
     */
    public $postlocatie;
    /**
     * The woonlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AddressLocatie
     */
    public $woonlocatie;
    /**
     * The indicatie_beschikkingsbevoegdheid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_beschikkingsbevoegdheid;
    /**
     * Constructor method for KadasterV2NietNatuurlijkPersoon
     * @uses KadasterV2NietNatuurlijkPersoon::setId()
     * @uses KadasterV2NietNatuurlijkPersoon::setIdentificatie()
     * @uses KadasterV2NietNatuurlijkPersoon::setStatutaire_naam()
     * @uses KadasterV2NietNatuurlijkPersoon::setStatutaire_zetel()
     * @uses KadasterV2NietNatuurlijkPersoon::setRechtsvorm()
     * @uses KadasterV2NietNatuurlijkPersoon::setBetreft()
     * @uses KadasterV2NietNatuurlijkPersoon::setPostlocatie()
     * @uses KadasterV2NietNatuurlijkPersoon::setWoonlocatie()
     * @uses KadasterV2NietNatuurlijkPersoon::setIndicatie_beschikkingsbevoegdheid()
     * @param string $id
     * @param string $identificatie
     * @param string $statutaire_naam
     * @param string $statutaire_zetel
     * @param string $rechtsvorm
     * @param \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon $betreft
     * @param \Webservices\StructType\KadasterV2AddressLocatie $postlocatie
     * @param \Webservices\StructType\KadasterV2AddressLocatie $woonlocatie
     * @param bool $indicatie_beschikkingsbevoegdheid
     */
    public function __construct($id = null, $identificatie = null, $statutaire_naam = null, $statutaire_zetel = null, $rechtsvorm = null, \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon $betreft = null, \Webservices\StructType\KadasterV2AddressLocatie $postlocatie = null, \Webservices\StructType\KadasterV2AddressLocatie $woonlocatie = null, $indicatie_beschikkingsbevoegdheid = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setStatutaire_naam($statutaire_naam)
            ->setStatutaire_zetel($statutaire_zetel)
            ->setRechtsvorm($rechtsvorm)
            ->setBetreft($betreft)
            ->setPostlocatie($postlocatie)
            ->setWoonlocatie($woonlocatie)
            ->setIndicatie_beschikkingsbevoegdheid($indicatie_beschikkingsbevoegdheid);
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
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
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
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
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
     * Get statutaire_naam value
     * @return string|null
     */
    public function getStatutaire_naam()
    {
        return $this->statutaire_naam;
    }
    /**
     * Set statutaire_naam value
     * @param string $statutaire_naam
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setStatutaire_naam($statutaire_naam = null)
    {
        // validation for constraint: string
        if (!is_null($statutaire_naam) && !is_string($statutaire_naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statutaire_naam)), __LINE__);
        }
        $this->statutaire_naam = $statutaire_naam;
        return $this;
    }
    /**
     * Get statutaire_zetel value
     * @return string|null
     */
    public function getStatutaire_zetel()
    {
        return $this->statutaire_zetel;
    }
    /**
     * Set statutaire_zetel value
     * @param string $statutaire_zetel
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setStatutaire_zetel($statutaire_zetel = null)
    {
        // validation for constraint: string
        if (!is_null($statutaire_zetel) && !is_string($statutaire_zetel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statutaire_zetel)), __LINE__);
        }
        $this->statutaire_zetel = $statutaire_zetel;
        return $this;
    }
    /**
     * Get rechtsvorm value
     * @return string|null
     */
    public function getRechtsvorm()
    {
        return $this->rechtsvorm;
    }
    /**
     * Set rechtsvorm value
     * @param string $rechtsvorm
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setRechtsvorm($rechtsvorm = null)
    {
        // validation for constraint: string
        if (!is_null($rechtsvorm) && !is_string($rechtsvorm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rechtsvorm)), __LINE__);
        }
        $this->rechtsvorm = $rechtsvorm;
        return $this;
    }
    /**
     * Get betreft value
     * @return \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon|null
     */
    public function getBetreft()
    {
        return $this->betreft;
    }
    /**
     * Set betreft value
     * @param \Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon $betreft
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setBetreft(\Webservices\StructType\KadasterV2BetreftNietNatuurlijkPersoon $betreft = null)
    {
        $this->betreft = $betreft;
        return $this;
    }
    /**
     * Get postlocatie value
     * @return \Webservices\StructType\KadasterV2AddressLocatie|null
     */
    public function getPostlocatie()
    {
        return $this->postlocatie;
    }
    /**
     * Set postlocatie value
     * @param \Webservices\StructType\KadasterV2AddressLocatie $postlocatie
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setPostlocatie(\Webservices\StructType\KadasterV2AddressLocatie $postlocatie = null)
    {
        $this->postlocatie = $postlocatie;
        return $this;
    }
    /**
     * Get woonlocatie value
     * @return \Webservices\StructType\KadasterV2AddressLocatie|null
     */
    public function getWoonlocatie()
    {
        return $this->woonlocatie;
    }
    /**
     * Set woonlocatie value
     * @param \Webservices\StructType\KadasterV2AddressLocatie $woonlocatie
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setWoonlocatie(\Webservices\StructType\KadasterV2AddressLocatie $woonlocatie = null)
    {
        $this->woonlocatie = $woonlocatie;
        return $this;
    }
    /**
     * Get indicatie_beschikkingsbevoegdheid value
     * @return bool|null
     */
    public function getIndicatie_beschikkingsbevoegdheid()
    {
        return $this->indicatie_beschikkingsbevoegdheid;
    }
    /**
     * Set indicatie_beschikkingsbevoegdheid value
     * @param bool $indicatie_beschikkingsbevoegdheid
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public function setIndicatie_beschikkingsbevoegdheid($indicatie_beschikkingsbevoegdheid = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_beschikkingsbevoegdheid) && !is_bool($indicatie_beschikkingsbevoegdheid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_beschikkingsbevoegdheid)), __LINE__);
        }
        $this->indicatie_beschikkingsbevoegdheid = $indicatie_beschikkingsbevoegdheid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
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
