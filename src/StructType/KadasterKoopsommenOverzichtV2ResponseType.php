<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterKoopsommenOverzichtV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKoopsommenOverzichtV2ResponseType extends AbstractStructBase
{
    /**
     * The koopsommenoverzicht
     * @var \Webservices\StructType\KoopsommenOverzichtV2
     */
    public $koopsommenoverzicht;
    /**
     * Constructor method for kadasterKoopsommenOverzichtV2ResponseType
     * @uses KadasterKoopsommenOverzichtV2ResponseType::setKoopsommenoverzicht()
     * @param \Webservices\StructType\KoopsommenOverzichtV2 $koopsommenoverzicht
     */
    public function __construct(\Webservices\StructType\KoopsommenOverzichtV2 $koopsommenoverzicht = null)
    {
        $this
            ->setKoopsommenoverzicht($koopsommenoverzicht);
    }
    /**
     * Get koopsommenoverzicht value
     * @return \Webservices\StructType\KoopsommenOverzichtV2|null
     */
    public function getKoopsommenoverzicht()
    {
        return $this->koopsommenoverzicht;
    }
    /**
     * Set koopsommenoverzicht value
     * @param \Webservices\StructType\KoopsommenOverzichtV2 $koopsommenoverzicht
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2ResponseType
     */
    public function setKoopsommenoverzicht(\Webservices\StructType\KoopsommenOverzichtV2 $koopsommenoverzicht = null)
    {
        $this->koopsommenoverzicht = $koopsommenoverzicht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtV2ResponseType
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
