<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Mandeligheid StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Mandeligheid extends AbstractStructBase
{
    /**
     * The mandelige_percelen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadastraleAanduidingLijst
     */
    public $mandelige_percelen;
    /**
     * The hoofd_percelen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadastraleAanduidingLijst
     */
    public $hoofd_percelen;
    /**
     * Constructor method for Mandeligheid
     * @uses Mandeligheid::setMandelige_percelen()
     * @uses Mandeligheid::setHoofd_percelen()
     * @param \Webservices\StructType\KadastraleAanduidingLijst $mandelige_percelen
     * @param \Webservices\StructType\KadastraleAanduidingLijst $hoofd_percelen
     */
    public function __construct(\Webservices\StructType\KadastraleAanduidingLijst $mandelige_percelen = null, \Webservices\StructType\KadastraleAanduidingLijst $hoofd_percelen = null)
    {
        $this
            ->setMandelige_percelen($mandelige_percelen)
            ->setHoofd_percelen($hoofd_percelen);
    }
    /**
     * Get mandelige_percelen value
     * @return \Webservices\StructType\KadastraleAanduidingLijst|null
     */
    public function getMandelige_percelen()
    {
        return $this->mandelige_percelen;
    }
    /**
     * Set mandelige_percelen value
     * @param \Webservices\StructType\KadastraleAanduidingLijst $mandelige_percelen
     * @return \Webservices\StructType\Mandeligheid
     */
    public function setMandelige_percelen(\Webservices\StructType\KadastraleAanduidingLijst $mandelige_percelen = null)
    {
        $this->mandelige_percelen = $mandelige_percelen;
        return $this;
    }
    /**
     * Get hoofd_percelen value
     * @return \Webservices\StructType\KadastraleAanduidingLijst|null
     */
    public function getHoofd_percelen()
    {
        return $this->hoofd_percelen;
    }
    /**
     * Set hoofd_percelen value
     * @param \Webservices\StructType\KadastraleAanduidingLijst $hoofd_percelen
     * @return \Webservices\StructType\Mandeligheid
     */
    public function setHoofd_percelen(\Webservices\StructType\KadastraleAanduidingLijst $hoofd_percelen = null)
    {
        $this->hoofd_percelen = $hoofd_percelen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Mandeligheid
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
