<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterUittrekselKadastraleKaartPostcodeV3ResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterUittrekselKadastraleKaartPostcodeV3ResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2
     */
    public $out;
    /**
     * Constructor method for kadasterUittrekselKadastraleKaartPostcodeV3ResponseType
     * @uses KadasterUittrekselKadastraleKaartPostcodeV3ResponseType::setOut()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2 $out
     */
    public function __construct(\Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2 $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2 $out
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3ResponseType
     */
    public function setOut(\Webservices\StructType\KadasterUittrekselKadastraleKaartResultaatV2 $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPostcodeV3ResponseType
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
