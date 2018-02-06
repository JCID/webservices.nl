<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KoopsommenTypeKoopsomType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KoopsommenTypeKoopsomType extends AbstractStructBase
{
    /**
     * The bedrag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag;
    /**
     * The indicatie_meer_objecten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_meer_objecten;
    /**
     * The koopdatum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $koopdatum;
    /**
     * Constructor method for KadasterV2KoopsommenTypeKoopsomType
     * @uses KadasterV2KoopsommenTypeKoopsomType::setBedrag()
     * @uses KadasterV2KoopsommenTypeKoopsomType::setIndicatie_meer_objecten()
     * @uses KadasterV2KoopsommenTypeKoopsomType::setKoopdatum()
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag
     * @param bool $indicatie_meer_objecten
     * @param string $koopdatum
     */
    public function __construct(\Webservices\StructType\KadasterV2BedragType $bedrag = null, $indicatie_meer_objecten = null, $koopdatum = null)
    {
        $this
            ->setBedrag($bedrag)
            ->setIndicatie_meer_objecten($indicatie_meer_objecten)
            ->setKoopdatum($koopdatum);
    }
    /**
     * Get bedrag value
     * @return \Webservices\StructType\KadasterV2BedragType|null
     */
    public function getBedrag()
    {
        return $this->bedrag;
    }
    /**
     * Set bedrag value
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag
     * @return \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType
     */
    public function setBedrag(\Webservices\StructType\KadasterV2BedragType $bedrag = null)
    {
        $this->bedrag = $bedrag;
        return $this;
    }
    /**
     * Get indicatie_meer_objecten value
     * @return bool|null
     */
    public function getIndicatie_meer_objecten()
    {
        return $this->indicatie_meer_objecten;
    }
    /**
     * Set indicatie_meer_objecten value
     * @param bool $indicatie_meer_objecten
     * @return \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType
     */
    public function setIndicatie_meer_objecten($indicatie_meer_objecten = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_meer_objecten) && !is_bool($indicatie_meer_objecten)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_meer_objecten)), __LINE__);
        }
        $this->indicatie_meer_objecten = $indicatie_meer_objecten;
        return $this;
    }
    /**
     * Get koopdatum value
     * @return string|null
     */
    public function getKoopdatum()
    {
        return $this->koopdatum;
    }
    /**
     * Set koopdatum value
     * @param string $koopdatum
     * @return \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType
     */
    public function setKoopdatum($koopdatum = null)
    {
        // validation for constraint: string
        if (!is_null($koopdatum) && !is_string($koopdatum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($koopdatum)), __LINE__);
        }
        $this->koopdatum = $koopdatum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType
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
