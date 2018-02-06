<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2StukVan StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2StukVan extends AbstractStructBase
{
    /**
     * The ter_inschrijving_aangeboden_stuk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk
     */
    public $ter_inschrijving_aangeboden_stuk;
    /**
     * Constructor method for KadasterV2StukVan
     * @uses KadasterV2StukVan::setTer_inschrijving_aangeboden_stuk()
     * @param \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk $ter_inschrijving_aangeboden_stuk
     */
    public function __construct(\Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk $ter_inschrijving_aangeboden_stuk = null)
    {
        $this
            ->setTer_inschrijving_aangeboden_stuk($ter_inschrijving_aangeboden_stuk);
    }
    /**
     * Get ter_inschrijving_aangeboden_stuk value
     * @return \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk|null
     */
    public function getTer_inschrijving_aangeboden_stuk()
    {
        return $this->ter_inschrijving_aangeboden_stuk;
    }
    /**
     * Set ter_inschrijving_aangeboden_stuk value
     * @param \Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk $ter_inschrijving_aangeboden_stuk
     * @return \Webservices\StructType\KadasterV2StukVan
     */
    public function setTer_inschrijving_aangeboden_stuk(\Webservices\StructType\KadasterV2TerInschrijvingAangebodenStuk $ter_inschrijving_aangeboden_stuk = null)
    {
        $this->ter_inschrijving_aangeboden_stuk = $ter_inschrijving_aangeboden_stuk;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2StukVan
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
