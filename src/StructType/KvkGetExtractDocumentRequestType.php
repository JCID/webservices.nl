<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kvkGetExtractDocumentRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KvkGetExtractDocumentRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The allow_caching
     * @var bool
     */
    public $allow_caching;
    /**
     * Constructor method for kvkGetExtractDocumentRequestType
     * @uses KvkGetExtractDocumentRequestType::setDossier_number()
     * @uses KvkGetExtractDocumentRequestType::setAllow_caching()
     * @param string $dossier_number
     * @param bool $allow_caching
     */
    public function __construct($dossier_number = null, $allow_caching = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setAllow_caching($allow_caching);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\KvkGetExtractDocumentRequestType
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get allow_caching value
     * @return bool|null
     */
    public function getAllow_caching()
    {
        return $this->allow_caching;
    }
    /**
     * Set allow_caching value
     * @param bool $allow_caching
     * @return \Webservices\StructType\KvkGetExtractDocumentRequestType
     */
    public function setAllow_caching($allow_caching = null)
    {
        // validation for constraint: boolean
        if (!is_null($allow_caching) && !is_bool($allow_caching)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allow_caching)), __LINE__);
        }
        $this->allow_caching = $allow_caching;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KvkGetExtractDocumentRequestType
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
