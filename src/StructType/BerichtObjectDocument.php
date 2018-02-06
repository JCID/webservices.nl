<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BerichtObjectDocument StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BerichtObjectDocument extends AbstractStructBase
{
    /**
     * The datum_bijgewerkt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datum_bijgewerkt;
    /**
     * The object_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $object_id;
    /**
     * The kadastrale_aanduiding
     * @var \Webservices\StructType\KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The locaties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\LocatieBinnenlandLijst
     */
    public $locaties;
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * The afbeeldingen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\Base64BinaryArray
     */
    public $afbeeldingen;
    /**
     * Constructor method for BerichtObjectDocument
     * @uses BerichtObjectDocument::setDatum_bijgewerkt()
     * @uses BerichtObjectDocument::setObject_id()
     * @uses BerichtObjectDocument::setKadastrale_aanduiding()
     * @uses BerichtObjectDocument::setOmschrijving()
     * @uses BerichtObjectDocument::setLocaties()
     * @uses BerichtObjectDocument::setDocument()
     * @uses BerichtObjectDocument::setAfbeeldingen()
     * @param string $datum_bijgewerkt
     * @param string $object_id
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @param string $omschrijving
     * @param \Webservices\StructType\LocatieBinnenlandLijst $locaties
     * @param string $document
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     */
    public function __construct($datum_bijgewerkt = null, $object_id = null, \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null, $omschrijving = null, \Webservices\StructType\LocatieBinnenlandLijst $locaties = null, $document = null, \Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this
            ->setDatum_bijgewerkt($datum_bijgewerkt)
            ->setObject_id($object_id)
            ->setKadastrale_aanduiding($kadastrale_aanduiding)
            ->setOmschrijving($omschrijving)
            ->setLocaties($locaties)
            ->setDocument($document)
            ->setAfbeeldingen($afbeeldingen);
    }
    /**
     * Get datum_bijgewerkt value
     * @return string|null
     */
    public function getDatum_bijgewerkt()
    {
        return $this->datum_bijgewerkt;
    }
    /**
     * Set datum_bijgewerkt value
     * @param string $datum_bijgewerkt
     * @return \Webservices\StructType\BerichtObjectDocument
     */
    public function setDatum_bijgewerkt($datum_bijgewerkt = null)
    {
        // validation for constraint: string
        if (!is_null($datum_bijgewerkt) && !is_string($datum_bijgewerkt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datum_bijgewerkt)), __LINE__);
        }
        $this->datum_bijgewerkt = $datum_bijgewerkt;
        return $this;
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
     * @return \Webservices\StructType\BerichtObjectDocument
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
     * @return \Webservices\StructType\BerichtObjectDocument
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
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
     * @return \Webservices\StructType\BerichtObjectDocument
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
     * Get locaties value
     * @return \Webservices\StructType\LocatieBinnenlandLijst|null
     */
    public function getLocaties()
    {
        return $this->locaties;
    }
    /**
     * Set locaties value
     * @param \Webservices\StructType\LocatieBinnenlandLijst $locaties
     * @return \Webservices\StructType\BerichtObjectDocument
     */
    public function setLocaties(\Webservices\StructType\LocatieBinnenlandLijst $locaties = null)
    {
        $this->locaties = $locaties;
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Webservices\StructType\BerichtObjectDocument
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Get afbeeldingen value
     * @return \Webservices\ArrayType\Base64BinaryArray|null
     */
    public function getAfbeeldingen()
    {
        return $this->afbeeldingen;
    }
    /**
     * Set afbeeldingen value
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     * @return \Webservices\StructType\BerichtObjectDocument
     */
    public function setAfbeeldingen(\Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this->afbeeldingen = $afbeeldingen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BerichtObjectDocument
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
