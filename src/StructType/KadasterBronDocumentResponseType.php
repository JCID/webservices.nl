<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterBronDocumentResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterBronDocumentResponseType extends AbstractStructBase
{
    /**
     * The bron_document
     * @var \Webservices\StructType\KadasterBronDocument
     */
    public $bron_document;
    /**
     * Constructor method for kadasterBronDocumentResponseType
     * @uses KadasterBronDocumentResponseType::setBron_document()
     * @param \Webservices\StructType\KadasterBronDocument $bron_document
     */
    public function __construct(\Webservices\StructType\KadasterBronDocument $bron_document = null)
    {
        $this
            ->setBron_document($bron_document);
    }
    /**
     * Get bron_document value
     * @return \Webservices\StructType\KadasterBronDocument|null
     */
    public function getBron_document()
    {
        return $this->bron_document;
    }
    /**
     * Set bron_document value
     * @param \Webservices\StructType\KadasterBronDocument $bron_document
     * @return \Webservices\StructType\KadasterBronDocumentResponseType
     */
    public function setBron_document(\Webservices\StructType\KadasterBronDocument $bron_document = null)
    {
        $this->bron_document = $bron_document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterBronDocumentResponseType
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
