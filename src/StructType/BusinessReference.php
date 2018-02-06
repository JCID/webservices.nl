<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BusinessReference extends AbstractStructBase
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
     * The Streetname
     * @var string
     */
    public $Streetname;
    /**
     * The City
     * @var string
     */
    public $City;
    /**
     * Constructor method for BusinessReference
     * @uses BusinessReference::setDossierNo()
     * @uses BusinessReference::setSubDossierNo()
     * @uses BusinessReference::setTradename()
     * @uses BusinessReference::setStreetname()
     * @uses BusinessReference::setCity()
     * @param string $dossierNo
     * @param string $subDossierNo
     * @param string $tradename
     * @param string $streetname
     * @param string $city
     */
    public function __construct($dossierNo = null, $subDossierNo = null, $tradename = null, $streetname = null, $city = null)
    {
        $this
            ->setDossierNo($dossierNo)
            ->setSubDossierNo($subDossierNo)
            ->setTradename($tradename)
            ->setStreetname($streetname)
            ->setCity($city);
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
     * @return \Webservices\StructType\BusinessReference
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
     * @return \Webservices\StructType\BusinessReference
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
     * @return \Webservices\StructType\BusinessReference
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
     * Get Streetname value
     * @return string|null
     */
    public function getStreetname()
    {
        return $this->Streetname;
    }
    /**
     * Set Streetname value
     * @param string $streetname
     * @return \Webservices\StructType\BusinessReference
     */
    public function setStreetname($streetname = null)
    {
        // validation for constraint: string
        if (!is_null($streetname) && !is_string($streetname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetname)), __LINE__);
        }
        $this->Streetname = $streetname;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Webservices\StructType\BusinessReference
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BusinessReference
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
