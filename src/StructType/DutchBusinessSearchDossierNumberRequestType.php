<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessSearchDossierNumberRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSearchDossierNumberRequestType extends AbstractStructBase
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
     * The rsin_number
     * @var string
     */
    public $rsin_number;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for dutchBusinessSearchDossierNumberRequestType
     * @uses DutchBusinessSearchDossierNumberRequestType::setDossier_number()
     * @uses DutchBusinessSearchDossierNumberRequestType::setEstablishment_number()
     * @uses DutchBusinessSearchDossierNumberRequestType::setRsin_number()
     * @uses DutchBusinessSearchDossierNumberRequestType::setPage()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $rsin_number
     * @param int $page
     */
    public function __construct($dossier_number = null, $establishment_number = null, $rsin_number = null, $page = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setRsin_number($rsin_number)
            ->setPage($page);
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
     * @return \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType
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
     * @return \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType
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
     * Get rsin_number value
     * @return string|null
     */
    public function getRsin_number()
    {
        return $this->rsin_number;
    }
    /**
     * Set rsin_number value
     * @param string $rsin_number
     * @return \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType
     */
    public function setRsin_number($rsin_number = null)
    {
        // validation for constraint: string
        if (!is_null($rsin_number) && !is_string($rsin_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rsin_number)), __LINE__);
        }
        $this->rsin_number = $rsin_number;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessSearchDossierNumberRequestType
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
