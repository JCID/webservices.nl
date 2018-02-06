<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadastraalTypeKoopsomType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadastraalTypeKoopsomType extends AbstractStructBase
{
    /**
     * The bedrag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag;
    /**
     * The koopjaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $koopjaar;
    /**
     * The indicatie_meer_objecten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_meer_objecten;
    /**
     * Constructor method for KadasterV2KadastraalTypeKoopsomType
     * @uses KadasterV2KadastraalTypeKoopsomType::setBedrag()
     * @uses KadasterV2KadastraalTypeKoopsomType::setKoopjaar()
     * @uses KadasterV2KadastraalTypeKoopsomType::setIndicatie_meer_objecten()
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag
     * @param int $koopjaar
     * @param bool $indicatie_meer_objecten
     */
    public function __construct(\Webservices\StructType\KadasterV2BedragType $bedrag = null, $koopjaar = null, $indicatie_meer_objecten = null)
    {
        $this
            ->setBedrag($bedrag)
            ->setKoopjaar($koopjaar)
            ->setIndicatie_meer_objecten($indicatie_meer_objecten);
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
     * @return \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType
     */
    public function setBedrag(\Webservices\StructType\KadasterV2BedragType $bedrag = null)
    {
        $this->bedrag = $bedrag;
        return $this;
    }
    /**
     * Get koopjaar value
     * @return int|null
     */
    public function getKoopjaar()
    {
        return $this->koopjaar;
    }
    /**
     * Set koopjaar value
     * @param int $koopjaar
     * @return \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType
     */
    public function setKoopjaar($koopjaar = null)
    {
        // validation for constraint: int
        if (!is_null($koopjaar) && !is_numeric($koopjaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($koopjaar)), __LINE__);
        }
        $this->koopjaar = $koopjaar;
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
     * @return \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KadastraalTypeKoopsomType
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
