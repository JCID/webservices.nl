<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterV2GetBronDocumentResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GetBronDocumentResponseType extends AbstractStructBase
{
    /**
     * The resultaat
     * @var \Webservices\StructType\KadasterV2BronDocumentResponse
     */
    public $resultaat;
    /**
     * Constructor method for kadasterV2GetBronDocumentResponseType
     * @uses KadasterV2GetBronDocumentResponseType::setResultaat()
     * @param \Webservices\StructType\KadasterV2BronDocumentResponse $resultaat
     */
    public function __construct(\Webservices\StructType\KadasterV2BronDocumentResponse $resultaat = null)
    {
        $this
            ->setResultaat($resultaat);
    }
    /**
     * Get resultaat value
     * @return \Webservices\StructType\KadasterV2BronDocumentResponse|null
     */
    public function getResultaat()
    {
        return $this->resultaat;
    }
    /**
     * Set resultaat value
     * @param \Webservices\StructType\KadasterV2BronDocumentResponse $resultaat
     * @return \Webservices\StructType\KadasterV2GetBronDocumentResponseType
     */
    public function setResultaat(\Webservices\StructType\KadasterV2BronDocumentResponse $resultaat = null)
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
     * @return \Webservices\StructType\KadasterV2GetBronDocumentResponseType
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
