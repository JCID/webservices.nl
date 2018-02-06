<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterKoopsommenOverzichtResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKoopsommenOverzichtResponseType extends AbstractStructBase
{
    /**
     * The koopsommenoverzicht
     * @var \Webservices\StructType\KoopsommenOverzicht
     */
    public $koopsommenoverzicht;
    /**
     * Constructor method for kadasterKoopsommenOverzichtResponseType
     * @uses KadasterKoopsommenOverzichtResponseType::setKoopsommenoverzicht()
     * @param \Webservices\StructType\KoopsommenOverzicht $koopsommenoverzicht
     */
    public function __construct(\Webservices\StructType\KoopsommenOverzicht $koopsommenoverzicht = null)
    {
        $this
            ->setKoopsommenoverzicht($koopsommenoverzicht);
    }
    /**
     * Get koopsommenoverzicht value
     * @return \Webservices\StructType\KoopsommenOverzicht|null
     */
    public function getKoopsommenoverzicht()
    {
        return $this->koopsommenoverzicht;
    }
    /**
     * Set koopsommenoverzicht value
     * @param \Webservices\StructType\KoopsommenOverzicht $koopsommenoverzicht
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtResponseType
     */
    public function setKoopsommenoverzicht(\Webservices\StructType\KoopsommenOverzicht $koopsommenoverzicht = null)
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
     * @return \Webservices\StructType\KadasterKoopsommenOverzichtResponseType
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
