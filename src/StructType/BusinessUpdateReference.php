<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessUpdateReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessUpdateReference extends AbstractStructBase
{
    /**
     * The DossierNo
     * @var string
     */
    public $DossierNo;
    /**
     * The SubDossierNo
     * @var string
     */
    public $SubDossierNo;
    /**
     * The UpdateTypes
     * @var \Webservices\ArrayType\StringArray
     */
    public $UpdateTypes;
    /**
     * The DateLastUpdate
     * @var string
     */
    public $DateLastUpdate;
    /**
     * Constructor method for BusinessUpdateReference
     * @uses BusinessUpdateReference::setDossierNo()
     * @uses BusinessUpdateReference::setSubDossierNo()
     * @uses BusinessUpdateReference::setUpdateTypes()
     * @uses BusinessUpdateReference::setDateLastUpdate()
     * @param string $dossierNo
     * @param string $subDossierNo
     * @param \Webservices\ArrayType\StringArray $updateTypes
     * @param string $dateLastUpdate
     */
    public function __construct($dossierNo = null, $subDossierNo = null, \Webservices\ArrayType\StringArray $updateTypes = null, $dateLastUpdate = null)
    {
        $this
            ->setDossierNo($dossierNo)
            ->setSubDossierNo($subDossierNo)
            ->setUpdateTypes($updateTypes)
            ->setDateLastUpdate($dateLastUpdate);
    }
    /**
     * Get DossierNo value
     * @return string|null
     */
    public function getDossierNo()
    {
        return $this->DossierNo;
    }
    /**
     * Set DossierNo value
     * @param string $dossierNo
     * @return \Webservices\StructType\BusinessUpdateReference
     */
    public function setDossierNo($dossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($dossierNo) && !is_string($dossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossierNo)), __LINE__);
        }
        $this->DossierNo = $dossierNo;
        return $this;
    }
    /**
     * Get SubDossierNo value
     * @return string|null
     */
    public function getSubDossierNo()
    {
        return $this->SubDossierNo;
    }
    /**
     * Set SubDossierNo value
     * @param string $subDossierNo
     * @return \Webservices\StructType\BusinessUpdateReference
     */
    public function setSubDossierNo($subDossierNo = null)
    {
        // validation for constraint: string
        if (!is_null($subDossierNo) && !is_string($subDossierNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subDossierNo)), __LINE__);
        }
        $this->SubDossierNo = $subDossierNo;
        return $this;
    }
    /**
     * Get UpdateTypes value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getUpdateTypes()
    {
        return $this->UpdateTypes;
    }
    /**
     * Set UpdateTypes value
     * @param \Webservices\ArrayType\StringArray $updateTypes
     * @return \Webservices\StructType\BusinessUpdateReference
     */
    public function setUpdateTypes(\Webservices\ArrayType\StringArray $updateTypes = null)
    {
        $this->UpdateTypes = $updateTypes;
        return $this;
    }
    /**
     * Get DateLastUpdate value
     * @return string|null
     */
    public function getDateLastUpdate()
    {
        return $this->DateLastUpdate;
    }
    /**
     * Set DateLastUpdate value
     * @param string $dateLastUpdate
     * @return \Webservices\StructType\BusinessUpdateReference
     */
    public function setDateLastUpdate($dateLastUpdate = null)
    {
        // validation for constraint: string
        if (!is_null($dateLastUpdate) && !is_string($dateLastUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateLastUpdate)), __LINE__);
        }
        $this->DateLastUpdate = $dateLastUpdate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessUpdateReference
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
