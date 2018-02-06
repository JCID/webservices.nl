<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDossierExtended StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessDossierExtended extends AbstractStructBase
{
    /**
     * The BasicDossierPart
     * @var \Webservices\StructType\BusinessDossierV3
     */
    public $BasicDossierPart;
    /**
     * The ExtendedDossierPart
     * @var \Webservices\StructType\BusinessDossierExtendedPart
     */
    public $ExtendedDossierPart;
    /**
     * Constructor method for BusinessDossierExtended
     * @uses BusinessDossierExtended::setBasicDossierPart()
     * @uses BusinessDossierExtended::setExtendedDossierPart()
     * @param \Webservices\StructType\BusinessDossierV3 $basicDossierPart
     * @param \Webservices\StructType\BusinessDossierExtendedPart $extendedDossierPart
     */
    public function __construct(\Webservices\StructType\BusinessDossierV3 $basicDossierPart = null, \Webservices\StructType\BusinessDossierExtendedPart $extendedDossierPart = null)
    {
        $this
            ->setBasicDossierPart($basicDossierPart)
            ->setExtendedDossierPart($extendedDossierPart);
    }
    /**
     * Get BasicDossierPart value
     * @return \Webservices\StructType\BusinessDossierV3|null
     */
    public function getBasicDossierPart()
    {
        return $this->BasicDossierPart;
    }
    /**
     * Set BasicDossierPart value
     * @param \Webservices\StructType\BusinessDossierV3 $basicDossierPart
     * @return \Webservices\StructType\BusinessDossierExtended
     */
    public function setBasicDossierPart(\Webservices\StructType\BusinessDossierV3 $basicDossierPart = null)
    {
        $this->BasicDossierPart = $basicDossierPart;
        return $this;
    }
    /**
     * Get ExtendedDossierPart value
     * @return \Webservices\StructType\BusinessDossierExtendedPart|null
     */
    public function getExtendedDossierPart()
    {
        return $this->ExtendedDossierPart;
    }
    /**
     * Set ExtendedDossierPart value
     * @param \Webservices\StructType\BusinessDossierExtendedPart $extendedDossierPart
     * @return \Webservices\StructType\BusinessDossierExtended
     */
    public function setExtendedDossierPart(\Webservices\StructType\BusinessDossierExtendedPart $extendedDossierPart = null)
    {
        $this->ExtendedDossierPart = $extendedDossierPart;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessDossierExtended
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
