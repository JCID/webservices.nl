<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterV2GetKoopsommenOverzichtResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GetKoopsommenOverzichtResponseType extends AbstractStructBase
{
    /**
     * The resultaat
     * @var \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse
     */
    public $resultaat;
    /**
     * Constructor method for kadasterV2GetKoopsommenOverzichtResponseType
     * @uses KadasterV2GetKoopsommenOverzichtResponseType::setResultaat()
     * @param \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse $resultaat
     */
    public function __construct(\Webservices\StructType\KadasterV2KoopsommenOverzichtResponse $resultaat = null)
    {
        $this
            ->setResultaat($resultaat);
    }
    /**
     * Get resultaat value
     * @return \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse|null
     */
    public function getResultaat()
    {
        return $this->resultaat;
    }
    /**
     * Set resultaat value
     * @param \Webservices\StructType\KadasterV2KoopsommenOverzichtResponse $resultaat
     * @return \Webservices\StructType\KadasterV2GetKoopsommenOverzichtResponseType
     */
    public function setResultaat(\Webservices\StructType\KadasterV2KoopsommenOverzichtResponse $resultaat = null)
    {
        $this->resultaat = $resultaat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GetKoopsommenOverzichtResponseType
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
