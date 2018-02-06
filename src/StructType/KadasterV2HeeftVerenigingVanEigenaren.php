<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2HeeftVerenigingVanEigenaren StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2HeeftVerenigingVanEigenaren extends AbstractStructBase
{
    /**
     * The persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2NietNatuurlijkPersoon
     */
    public $persoon;
    /**
     * Constructor method for KadasterV2HeeftVerenigingVanEigenaren
     * @uses KadasterV2HeeftVerenigingVanEigenaren::setPersoon()
     * @param \Webservices\StructType\KadasterV2NietNatuurlijkPersoon $persoon
     */
    public function __construct(\Webservices\StructType\KadasterV2NietNatuurlijkPersoon $persoon = null)
    {
        $this
            ->setPersoon($persoon);
    }
    /**
     * Get persoon value
     * @return \Webservices\StructType\KadasterV2NietNatuurlijkPersoon|null
     */
    public function getPersoon()
    {
        return $this->persoon;
    }
    /**
     * Set persoon value
     * @param \Webservices\StructType\KadasterV2NietNatuurlijkPersoon $persoon
     * @return \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren
     */
    public function setPersoon(\Webservices\StructType\KadasterV2NietNatuurlijkPersoon $persoon = null)
    {
        $this->persoon = $persoon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2HeeftVerenigingVanEigenaren
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
