<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2PersoonTypeKeuzeType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2PersoonTypeKeuzeType extends AbstractStructBase
{
    /**
     * The natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public $natuurlijk_persoon;
    /**
     * The niet_natuurlijk_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public $niet_natuurlijk_persoon;
    /**
     * Constructor method for KadasterV2PersoonTypeKeuzeType
     * @uses KadasterV2PersoonTypeKeuzeType::setNatuurlijk_persoon()
     * @uses KadasterV2PersoonTypeKeuzeType::setNiet_natuurlijk_persoon()
     * @param \Webservices\StructType\KadasterV2NatuurlijkPersoon $natuurlijk_persoon
     * @param \Webservices\StructType\KadasterV2NietNatuurlijkPersoon $niet_natuurlijk_persoon
     */
    public function __construct(\Webservices\StructType\KadasterV2NatuurlijkPersoon $natuurlijk_persoon = null, \Webservices\StructType\KadasterV2NietNatuurlijkPersoon $niet_natuurlijk_persoon = null)
    {
        $this
            ->setNatuurlijk_persoon($natuurlijk_persoon)
            ->setNiet_natuurlijk_persoon($niet_natuurlijk_persoon);
    }
    /**
     * Get natuurlijk_persoon value
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon|null
     */
    public function getNatuurlijk_persoon()
    {
        return $this->natuurlijk_persoon;
    }
    /**
     * Set natuurlijk_persoon value
     * @param \Webservices\StructType\KadasterV2NatuurlijkPersoon $natuurlijk_persoon
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
     */
    public function setNatuurlijk_persoon(\Webservices\StructType\KadasterV2NatuurlijkPersoon $natuurlijk_persoon = null)
    {
        $this->natuurlijk_persoon = $natuurlijk_persoon;
        return $this;
    }
    /**
     * Get niet_natuurlijk_persoon value
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon|null
     */
    public function getNiet_natuurlijk_persoon()
    {
        return $this->niet_natuurlijk_persoon;
    }
    /**
     * Set niet_natuurlijk_persoon value
     * @param \Webservices\StructType\KadasterV2NietNatuurlijkPersoon $niet_natuurlijk_persoon
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
     */
    public function setNiet_natuurlijk_persoon(\Webservices\StructType\KadasterV2NietNatuurlijkPersoon $niet_natuurlijk_persoon = null)
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
     * @return \Webservices\StructType\KadasterV2PersoonTypeKeuzeType
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
