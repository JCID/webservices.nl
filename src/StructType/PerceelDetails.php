<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerceelDetails StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class PerceelDetails extends AbstractStructBase
{
    /**
     * The perceel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadastraalPerceel
     */
    public $perceel;
    /**
     * The appartementsrecht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\VerenigingVanEigenaren
     */
    public $appartementsrecht;
    /**
     * Constructor method for PerceelDetails
     * @uses PerceelDetails::setPerceel()
     * @uses PerceelDetails::setAppartementsrecht()
     * @param \Webservices\StructType\KadastraalPerceel $perceel
     * @param \Webservices\StructType\VerenigingVanEigenaren $appartementsrecht
     */
    public function __construct(\Webservices\StructType\KadastraalPerceel $perceel = null, \Webservices\StructType\VerenigingVanEigenaren $appartementsrecht = null)
    {
        $this
            ->setPerceel($perceel)
            ->setAppartementsrecht($appartementsrecht);
    }
    /**
     * Get perceel value
     * @return \Webservices\StructType\KadastraalPerceel|null
     */
    public function getPerceel()
    {
        return $this->perceel;
    }
    /**
     * Set perceel value
     * @param \Webservices\StructType\KadastraalPerceel $perceel
     * @return \Webservices\StructType\PerceelDetails
     */
    public function setPerceel(\Webservices\StructType\KadastraalPerceel $perceel = null)
    {
        $this->perceel = $perceel;
        return $this;
    }
    /**
     * Get appartementsrecht value
     * @return \Webservices\StructType\VerenigingVanEigenaren|null
     */
    public function getAppartementsrecht()
    {
        return $this->appartementsrecht;
    }
    /**
     * Set appartementsrecht value
     * @param \Webservices\StructType\VerenigingVanEigenaren $appartementsrecht
     * @return \Webservices\StructType\PerceelDetails
     */
    public function setAppartementsrecht(\Webservices\StructType\VerenigingVanEigenaren $appartementsrecht = null)
    {
        $this->appartementsrecht = $appartementsrecht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\PerceelDetails
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
