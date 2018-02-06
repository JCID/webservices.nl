<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kvkUpdateCheckDossierRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KvkUpdateCheckDossierRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * @var string
     */
    public $establishment_number;
    /**
     * The update_types
     * @var \Webservices\ArrayType\StringArray
     */
    public $update_types;
    /**
     * Constructor method for kvkUpdateCheckDossierRequestType
     * @uses KvkUpdateCheckDossierRequestType::setDossier_number()
     * @uses KvkUpdateCheckDossierRequestType::setEstablishment_number()
     * @uses KvkUpdateCheckDossierRequestType::setUpdate_types()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param \Webservices\ArrayType\StringArray $update_types
     */
    public function __construct($dossier_number = null, $establishment_number = null, \Webservices\ArrayType\StringArray $update_types = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setUpdate_types($update_types);
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
     * @return \Webservices\StructType\KvkUpdateCheckDossierRequestType
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
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\KvkUpdateCheckDossierRequestType
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get update_types value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getUpdate_types()
    {
        return $this->update_types;
    }
    /**
     * Set update_types value
     * @param \Webservices\ArrayType\StringArray $update_types
     * @return \Webservices\StructType\KvkUpdateCheckDossierRequestType
     */
    public function setUpdate_types(\Webservices\ArrayType\StringArray $update_types = null)
    {
        $this->update_types = $update_types;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KvkUpdateCheckDossierRequestType
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
