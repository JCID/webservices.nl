<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessReferenceV3 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessReferenceV3 extends AbstractStructBase
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
     * The Tradename
     * @var string
     */
    public $Tradename;
    /**
     * The EstablishmentStreetname
     * @var string
     */
    public $EstablishmentStreetname;
    /**
     * The EstablishmentCity
     * @var string
     */
    public $EstablishmentCity;
    /**
     * The CorrespondenceStreetname
     * @var string
     */
    public $CorrespondenceStreetname;
    /**
     * The CorrespondenceCity
     * @var string
     */
    public $CorrespondenceCity;
    /**
     * The IndicationEconomicallyActive
     * @var bool
     */
    public $IndicationEconomicallyActive;
    /**
     * Constructor method for BusinessReferenceV3
     * @uses BusinessReferenceV3::setDossierNo()
     * @uses BusinessReferenceV3::setSubDossierNo()
     * @uses BusinessReferenceV3::setTradename()
     * @uses BusinessReferenceV3::setEstablishmentStreetname()
     * @uses BusinessReferenceV3::setEstablishmentCity()
     * @uses BusinessReferenceV3::setCorrespondenceStreetname()
     * @uses BusinessReferenceV3::setCorrespondenceCity()
     * @uses BusinessReferenceV3::setIndicationEconomicallyActive()
     * @param string $dossierNo
     * @param string $subDossierNo
     * @param string $tradename
     * @param string $establishmentStreetname
     * @param string $establishmentCity
     * @param string $correspondenceStreetname
     * @param string $correspondenceCity
     * @param bool $indicationEconomicallyActive
     */
    public function __construct($dossierNo = null, $subDossierNo = null, $tradename = null, $establishmentStreetname = null, $establishmentCity = null, $correspondenceStreetname = null, $correspondenceCity = null, $indicationEconomicallyActive = null)
    {
        $this
            ->setDossierNo($dossierNo)
            ->setSubDossierNo($subDossierNo)
            ->setTradename($tradename)
            ->setEstablishmentStreetname($establishmentStreetname)
            ->setEstablishmentCity($establishmentCity)
            ->setCorrespondenceStreetname($correspondenceStreetname)
            ->setCorrespondenceCity($correspondenceCity)
            ->setIndicationEconomicallyActive($indicationEconomicallyActive);
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
     * @return \Webservices\StructType\BusinessReferenceV3
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
     * @return \Webservices\StructType\BusinessReferenceV3
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
     * Get Tradename value
     * @return string|null
     */
    public function getTradename()
    {
        return $this->Tradename;
    }
    /**
     * Set Tradename value
     * @param string $tradename
     * @return \Webservices\StructType\BusinessReferenceV3
     */
    public function setTradename($tradename = null)
    {
        // validation for constraint: string
        if (!is_null($tradename) && !is_string($tradename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradename)), __LINE__);
        }
        $this->Tradename = $tradename;
        return $this;
    }
    /**
     * Get EstablishmentStreetname value
     * @return string|null
     */
    public function getEstablishmentStreetname()
    {
        return $this->EstablishmentStreetname;
    }
    /**
     * Set EstablishmentStreetname value
     * @param string $establishmentStreetname
     * @return \Webservices\StructType\BusinessReferenceV3
     */
    public function setEstablishmentStreetname($establishmentStreetname = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentStreetname) && !is_string($establishmentStreetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentStreetname)), __LINE__);
        }
        $this->EstablishmentStreetname = $establishmentStreetname;
        return $this;
    }
    /**
     * Get EstablishmentCity value
     * @return string|null
     */
    public function getEstablishmentCity()
    {
        return $this->EstablishmentCity;
    }
    /**
     * Set EstablishmentCity value
     * @param string $establishmentCity
     * @return \Webservices\StructType\BusinessReferenceV3
     */
    public function setEstablishmentCity($establishmentCity = null)
    {
        // validation for constraint: string
        if (!is_null($establishmentCity) && !is_string($establishmentCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishmentCity)), __LINE__);
        }
        $this->EstablishmentCity = $establishmentCity;
        return $this;
    }
    /**
     * Get CorrespondenceStreetname value
     * @return string|null
     */
    public function getCorrespondenceStreetname()
    {
        return $this->CorrespondenceStreetname;
    }
    /**
     * Set CorrespondenceStreetname value
     * @param string $correspondenceStreetname
     * @return \Webservices\StructType\BusinessReferenceV3
     */
    public function setCorrespondenceStreetname($correspondenceStreetname = null)
    {
        // validation for constraint: string
        if (!is_null($correspondenceStreetname) && !is_string($correspondenceStreetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondenceStreetname)), __LINE__);
        }
        $this->CorrespondenceStreetname = $correspondenceStreetname;
        return $this;
    }
    /**
     * Get CorrespondenceCity value
     * @return string|null
     */
    public function getCorrespondenceCity()
    {
        return $this->CorrespondenceCity;
    }
    /**
     * Set CorrespondenceCity value
     * @param string $correspondenceCity
     * @return \Webservices\StructType\BusinessReferenceV3
     */
    public function setCorrespondenceCity($correspondenceCity = null)
    {
        // validation for constraint: string
        if (!is_null($correspondenceCity) && !is_string($correspondenceCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondenceCity)), __LINE__);
        }
        $this->CorrespondenceCity = $correspondenceCity;
        return $this;
    }
    /**
     * Get IndicationEconomicallyActive value
     * @return bool|null
     */
    public function getIndicationEconomicallyActive()
    {
        return $this->IndicationEconomicallyActive;
    }
    /**
     * Set IndicationEconomicallyActive value
     * @param bool $indicationEconomicallyActive
     * @return \Webservices\StructType\BusinessReferenceV3
     */
    public function setIndicationEconomicallyActive($indicationEconomicallyActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicationEconomicallyActive) && !is_bool($indicationEconomicallyActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicationEconomicallyActive)), __LINE__);
        }
        $this->IndicationEconomicallyActive = $indicationEconomicallyActive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessReferenceV3
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
