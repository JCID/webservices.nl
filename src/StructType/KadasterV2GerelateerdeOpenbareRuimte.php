<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2GerelateerdeOpenbareRuimte StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GerelateerdeOpenbareRuimte extends AbstractStructBase
{
    /**
     * The openbare_ruimte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OpenbareRuimte
     */
    public $openbare_ruimte;
    /**
     * Constructor method for KadasterV2GerelateerdeOpenbareRuimte
     * @uses KadasterV2GerelateerdeOpenbareRuimte::setOpenbare_ruimte()
     * @param \Webservices\StructType\KadasterV2OpenbareRuimte $openbare_ruimte
     */
    public function __construct(\Webservices\StructType\KadasterV2OpenbareRuimte $openbare_ruimte = null)
    {
        $this
            ->setOpenbare_ruimte($openbare_ruimte);
    }
    /**
     * Get openbare_ruimte value
     * @return \Webservices\StructType\KadasterV2OpenbareRuimte|null
     */
    public function getOpenbare_ruimte()
    {
        return $this->openbare_ruimte;
    }
    /**
     * Set openbare_ruimte value
     * @param \Webservices\StructType\KadasterV2OpenbareRuimte $openbare_ruimte
     * @return \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte
     */
    public function setOpenbare_ruimte(\Webservices\StructType\KadasterV2OpenbareRuimte $openbare_ruimte = null)
    {
        $this->openbare_ruimte = $openbare_ruimte;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GerelateerdeOpenbareRuimte
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
