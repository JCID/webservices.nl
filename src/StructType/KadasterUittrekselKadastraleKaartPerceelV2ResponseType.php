<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterUittrekselKadastraleKaartPerceelV2ResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterUittrekselKadastraleKaartPerceelV2ResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaat
     */
    public $out;
    /**
     * Constructor method for kadasterUittrekselKadastraleKaartPerceelV2ResponseType
     * @uses KadasterUittrekselKadastraleKaartPerceelV2ResponseType::setOut()
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaat $out
     */
    public function __construct(\Webservices\StructType\KadasterUittrekselKadastraleKaartResultaat $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaat|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\KadasterUittrekselKadastraleKaartResultaat $out
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2ResponseType
     */
    public function setOut(\Webservices\StructType\KadasterUittrekselKadastraleKaartResultaat $out = null)
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
     * @return \Webservices\StructType\KadasterUittrekselKadastraleKaartPerceelV2ResponseType
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
