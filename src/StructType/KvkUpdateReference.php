<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KvkUpdateReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KvkUpdateReference extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The update_types
     * @var \Webservices\ArrayType\StringArray
     */
    public $update_types;
    /**
     * The date_last_update
     * @var string
     */
    public $date_last_update;
    /**
     * Constructor method for KvkUpdateReference
     * @uses KvkUpdateReference::setDossier_number()
     * @uses KvkUpdateReference::setEstablishment_number()
     * @uses KvkUpdateReference::setUpdate_types()
     * @uses KvkUpdateReference::setDate_last_update()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param \Webservices\ArrayType\StringArray $update_types
     * @param string $date_last_update
     */
    public function __construct($dossier_number = null, $establishment_number = null, \Webservices\ArrayType\StringArray $update_types = null, $date_last_update = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setUpdate_types($update_types)
            ->setDate_last_update($date_last_update);
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
     * @return \Webservices\StructType\KvkUpdateReference
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
     * @return \Webservices\StructType\KvkUpdateReference
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
     * @return \Webservices\StructType\KvkUpdateReference
     */
    public function setUpdate_types(\Webservices\ArrayType\StringArray $update_types = null)
    {
        $this->update_types = $update_types;
        return $this;
    }
    /**
     * Get date_last_update value
     * @return string|null
     */
    public function getDate_last_update()
    {
        return $this->date_last_update;
    }
    /**
     * Set date_last_update value
     * @param string $date_last_update
     * @return \Webservices\StructType\KvkUpdateReference
     */
    public function setDate_last_update($date_last_update = null)
    {
        // validation for constraint: string
        if (!is_null($date_last_update) && !is_string($date_last_update)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_last_update)), __LINE__);
        }
        $this->date_last_update = $date_last_update;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KvkUpdateReference
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
