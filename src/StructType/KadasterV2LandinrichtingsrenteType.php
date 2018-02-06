<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2LandinrichtingsrenteType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2LandinrichtingsrenteType extends AbstractStructBase
{
    /**
     * The bedrag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BedragType
     */
    public $bedrag;
    /**
     * The eindjaar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $eindjaar;
    /**
     * Constructor method for KadasterV2LandinrichtingsrenteType
     * @uses KadasterV2LandinrichtingsrenteType::setBedrag()
     * @uses KadasterV2LandinrichtingsrenteType::setEindjaar()
     * @param \Webservices\StructType\KadasterV2BedragType $bedrag
     * @param int $eindjaar
     */
    public function __construct(\Webservices\StructType\KadasterV2BedragType $bedrag = null, $eindjaar = null)
    {
        $this
            ->setBedrag($bedrag)
            ->setEindjaar($eindjaar);
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
     * @return \Webservices\StructType\KadasterV2LandinrichtingsrenteType
     */
    public function setBedrag(\Webservices\StructType\KadasterV2BedragType $bedrag = null)
    {
        $this->bedrag = $bedrag;
        return $this;
    }
    /**
     * Get eindjaar value
     * @return int|null
     */
    public function getEindjaar()
    {
        return $this->eindjaar;
    }
    /**
     * Set eindjaar value
     * @param int $eindjaar
     * @return \Webservices\StructType\KadasterV2LandinrichtingsrenteType
     */
    public function setEindjaar($eindjaar = null)
    {
        // validation for constraint: int
        if (!is_null($eindjaar) && !is_numeric($eindjaar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eindjaar)), __LINE__);
        }
        $this->eindjaar = $eindjaar;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2LandinrichtingsrenteType
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
