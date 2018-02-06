<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2BedragType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2BedragType extends AbstractStructBase
{
    /**
     * The som
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $som;
    /**
     * The valuta
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $valuta;
    /**
     * Constructor method for KadasterV2BedragType
     * @uses KadasterV2BedragType::setSom()
     * @uses KadasterV2BedragType::setValuta()
     * @param float $som
     * @param string $valuta
     */
    public function __construct($som = null, $valuta = null)
    {
        $this
            ->setSom($som)
            ->setValuta($valuta);
    }
    /**
     * Get som value
     * @return float|null
     */
    public function getSom()
    {
        return $this->som;
    }
    /**
     * Set som value
     * @param float $som
     * @return \Webservices\StructType\KadasterV2BedragType
     */
    public function setSom($som = null)
    {
        $this->som = $som;
        return $this;
    }
    /**
     * Get valuta value
     * @return string|null
     */
    public function getValuta()
    {
        return $this->valuta;
    }
    /**
     * Set valuta value
     * @param string $valuta
     * @return \Webservices\StructType\KadasterV2BedragType
     */
    public function setValuta($valuta = null)
    {
        // validation for constraint: string
        if (!is_null($valuta) && !is_string($valuta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valuta)), __LINE__);
        }
        $this->valuta = $valuta;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2BedragType
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
