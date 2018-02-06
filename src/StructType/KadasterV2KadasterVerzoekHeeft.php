<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadasterVerzoekHeeft StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadasterVerzoekHeeft extends AbstractStructBase
{
    /**
     * The reden_verzoek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2RedenVerzoekArray
     */
    public $reden_verzoek;
    /**
     * Constructor method for KadasterV2KadasterVerzoekHeeft
     * @uses KadasterV2KadasterVerzoekHeeft::setReden_verzoek()
     * @param \Webservices\ArrayType\KadasterV2RedenVerzoekArray $reden_verzoek
     */
    public function __construct(\Webservices\ArrayType\KadasterV2RedenVerzoekArray $reden_verzoek = null)
    {
        $this
            ->setReden_verzoek($reden_verzoek);
    }
    /**
     * Get reden_verzoek value
     * @return \Webservices\ArrayType\KadasterV2RedenVerzoekArray|null
     */
    public function getReden_verzoek()
    {
        return $this->reden_verzoek;
    }
    /**
     * Set reden_verzoek value
     * @param \Webservices\ArrayType\KadasterV2RedenVerzoekArray $reden_verzoek
     * @return \Webservices\StructType\KadasterV2KadasterVerzoekHeeft
     */
    public function setReden_verzoek(\Webservices\ArrayType\KadasterV2RedenVerzoekArray $reden_verzoek = null)
    {
        $this->reden_verzoek = $reden_verzoek;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KadasterVerzoekHeeft
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
