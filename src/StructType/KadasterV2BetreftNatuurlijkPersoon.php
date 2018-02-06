<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2BetreftNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2BetreftNatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The geregistreerd_persoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2GeregistreerdPersoon
     */
    public $geregistreerd_persoon;
    /**
     * Constructor method for KadasterV2BetreftNatuurlijkPersoon
     * @uses KadasterV2BetreftNatuurlijkPersoon::setGeregistreerd_persoon()
     * @param \Webservices\StructType\KadasterV2GeregistreerdPersoon $geregistreerd_persoon
     */
    public function __construct(\Webservices\StructType\KadasterV2GeregistreerdPersoon $geregistreerd_persoon = null)
    {
        $this
            ->setGeregistreerd_persoon($geregistreerd_persoon);
    }
    /**
     * Get geregistreerd_persoon value
     * @return \Webservices\StructType\KadasterV2GeregistreerdPersoon|null
     */
    public function getGeregistreerd_persoon()
    {
        return $this->geregistreerd_persoon;
    }
    /**
     * Set geregistreerd_persoon value
     * @param \Webservices\StructType\KadasterV2GeregistreerdPersoon $geregistreerd_persoon
     * @return \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon
     */
    public function setGeregistreerd_persoon(\Webservices\StructType\KadasterV2GeregistreerdPersoon $geregistreerd_persoon = null)
    {
        $this->geregistreerd_persoon = $geregistreerd_persoon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon
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
