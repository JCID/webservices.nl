<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2TenBehoeveVan StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2TenBehoeveVan extends AbstractStructBase
{
    /**
     * The natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2NatuurlijkPersoonArray
     */
    public $natuurlijk_persoon;
    /**
     * The niet_natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2NietNatuurlijkPersoonArray
     */
    public $niet_natuurlijk_persoon;
    /**
     * Constructor method for KadasterV2TenBehoeveVan
     * @uses KadasterV2TenBehoeveVan::setNatuurlijk_persoon()
     * @uses KadasterV2TenBehoeveVan::setNiet_natuurlijk_persoon()
     * @param \Webservices\ArrayType\KadasterV2NatuurlijkPersoonArray $natuurlijk_persoon
     * @param \Webservices\ArrayType\KadasterV2NietNatuurlijkPersoonArray $niet_natuurlijk_persoon
     */
    public function __construct(\Webservices\ArrayType\KadasterV2NatuurlijkPersoonArray $natuurlijk_persoon = null, \Webservices\ArrayType\KadasterV2NietNatuurlijkPersoonArray $niet_natuurlijk_persoon = null)
    {
        $this
            ->setNatuurlijk_persoon($natuurlijk_persoon)
            ->setNiet_natuurlijk_persoon($niet_natuurlijk_persoon);
    }
    /**
     * Get natuurlijk_persoon value
     * @return \Webservices\ArrayType\KadasterV2NatuurlijkPersoonArray|null
     */
    public function getNatuurlijk_persoon()
    {
        return $this->natuurlijk_persoon;
    }
    /**
     * Set natuurlijk_persoon value
     * @param \Webservices\ArrayType\KadasterV2NatuurlijkPersoonArray $natuurlijk_persoon
     * @return \Webservices\StructType\KadasterV2TenBehoeveVan
     */
    public function setNatuurlijk_persoon(\Webservices\ArrayType\KadasterV2NatuurlijkPersoonArray $natuurlijk_persoon = null)
    {
        $this->natuurlijk_persoon = $natuurlijk_persoon;
        return $this;
    }
    /**
     * Get niet_natuurlijk_persoon value
     * @return \Webservices\ArrayType\KadasterV2NietNatuurlijkPersoonArray|null
     */
    public function getNiet_natuurlijk_persoon()
    {
        return $this->niet_natuurlijk_persoon;
    }
    /**
     * Set niet_natuurlijk_persoon value
     * @param \Webservices\ArrayType\KadasterV2NietNatuurlijkPersoonArray $niet_natuurlijk_persoon
     * @return \Webservices\StructType\KadasterV2TenBehoeveVan
     */
    public function setNiet_natuurlijk_persoon(\Webservices\ArrayType\KadasterV2NietNatuurlijkPersoonArray $niet_natuurlijk_persoon = null)
    {
        $this->niet_natuurlijk_persoon = $niet_natuurlijk_persoon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2TenBehoeveVan
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
