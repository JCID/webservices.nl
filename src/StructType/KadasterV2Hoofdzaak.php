<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Hoofdzaak StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Hoofdzaak extends AbstractStructBase
{
    /**
     * The aandeel_inmandeligheid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BreukType
     */
    public $aandeel_inmandeligheid;
    /**
     * The is
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2Betreft
     */
    public $is;
    /**
     * Constructor method for KadasterV2Hoofdzaak
     * @uses KadasterV2Hoofdzaak::setAandeel_inmandeligheid()
     * @uses KadasterV2Hoofdzaak::setIs()
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel_inmandeligheid
     * @param \Webservices\StructType\KadasterV2Betreft $is
     */
    public function __construct(\Webservices\StructType\KadasterV2BreukType $aandeel_inmandeligheid = null, \Webservices\StructType\KadasterV2Betreft $is = null)
    {
        $this
            ->setAandeel_inmandeligheid($aandeel_inmandeligheid)
            ->setIs($is);
    }
    /**
     * Get aandeel_inmandeligheid value
     * @return \Webservices\StructType\KadasterV2BreukType|null
     */
    public function getAandeel_inmandeligheid()
    {
        return $this->aandeel_inmandeligheid;
    }
    /**
     * Set aandeel_inmandeligheid value
     * @param \Webservices\StructType\KadasterV2BreukType $aandeel_inmandeligheid
     * @return \Webservices\StructType\KadasterV2Hoofdzaak
     */
    public function setAandeel_inmandeligheid(\Webservices\StructType\KadasterV2BreukType $aandeel_inmandeligheid = null)
    {
        $this->aandeel_inmandeligheid = $aandeel_inmandeligheid;
        return $this;
    }
    /**
     * Get is value
     * @return \Webservices\StructType\KadasterV2Betreft|null
     */
    public function getIs()
    {
        return $this->is;
    }
    /**
     * Set is value
     * @param \Webservices\StructType\KadasterV2Betreft $is
     * @return \Webservices\StructType\KadasterV2Hoofdzaak
     */
    public function setIs(\Webservices\StructType\KadasterV2Betreft $is = null)
    {
        $this->is = $is;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Hoofdzaak
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
