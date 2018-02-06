<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterKadastraleKaartPerceelResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterKadastraleKaartPerceelResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\KadasterKadastraleKaartResultaat
     */
    public $out;
    /**
     * Constructor method for kadasterKadastraleKaartPerceelResponseType
     * @uses KadasterKadastraleKaartPerceelResponseType::setOut()
     * @param \Webservices\StructType\KadasterKadastraleKaartResultaat $out
     */
    public function __construct(\Webservices\StructType\KadasterKadastraleKaartResultaat $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\KadasterKadastraleKaartResultaat|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\KadasterKadastraleKaartResultaat $out
     * @return \Webservices\StructType\KadasterKadastraleKaartPerceelResponseType
     */
    public function setOut(\Webservices\StructType\KadasterKadastraleKaartResultaat $out = null)
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
     * @return \Webservices\StructType\KadasterKadastraleKaartPerceelResponseType
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
