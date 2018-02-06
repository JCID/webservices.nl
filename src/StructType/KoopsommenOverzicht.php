<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KoopsommenOverzicht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KoopsommenOverzicht extends AbstractStructBase
{
    /**
     * The eind_datum
     * @var string
     */
    public $eind_datum;
    /**
     * The straatnaam
     * @var string
     */
    public $straatnaam;
    /**
     * The huisnr_van
     * @var int
     */
    public $huisnr_van;
    /**
     * The huisnr_tm
     * @var int
     */
    public $huisnr_tm;
    /**
     * The reeksindicatie
     * @var string
     */
    public $reeksindicatie;
    /**
     * The gemeente
     * @var string
     */
    public $gemeente;
    /**
     * The koopsommen
     * @var \Webservices\ArrayType\KoopsomArray
     */
    public $koopsommen;
    /**
     * Constructor method for KoopsommenOverzicht
     * @uses KoopsommenOverzicht::setEind_datum()
     * @uses KoopsommenOverzicht::setStraatnaam()
     * @uses KoopsommenOverzicht::setHuisnr_van()
     * @uses KoopsommenOverzicht::setHuisnr_tm()
     * @uses KoopsommenOverzicht::setReeksindicatie()
     * @uses KoopsommenOverzicht::setGemeente()
     * @uses KoopsommenOverzicht::setKoopsommen()
     * @param string $eind_datum
     * @param string $straatnaam
     * @param int $huisnr_van
     * @param int $huisnr_tm
     * @param string $reeksindicatie
     * @param string $gemeente
     * @param \Webservices\ArrayType\KoopsomArray $koopsommen
     */
    public function __construct($eind_datum = null, $straatnaam = null, $huisnr_van = null, $huisnr_tm = null, $reeksindicatie = null, $gemeente = null, \Webservices\ArrayType\KoopsomArray $koopsommen = null)
    {
        $this
            ->setEind_datum($eind_datum)
            ->setStraatnaam($straatnaam)
            ->setHuisnr_van($huisnr_van)
            ->setHuisnr_tm($huisnr_tm)
            ->setReeksindicatie($reeksindicatie)
            ->setGemeente($gemeente)
            ->setKoopsommen($koopsommen);
    }
    /**
     * Get eind_datum value
     * @return string|null
     */
    public function getEind_datum()
    {
        return $this->eind_datum;
    }
    /**
     * Set eind_datum value
     * @param string $eind_datum
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setEind_datum($eind_datum = null)
    {
        // validation for constraint: string
        if (!is_null($eind_datum) && !is_string($eind_datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eind_datum)), __LINE__);
        }
        $this->eind_datum = $eind_datum;
        return $this;
    }
    /**
     * Get straatnaam value
     * @return string|null
     */
    public function getStraatnaam()
    {
        return $this->straatnaam;
    }
    /**
     * Set straatnaam value
     * @param string $straatnaam
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setStraatnaam($straatnaam = null)
    {
        // validation for constraint: string
        if (!is_null($straatnaam) && !is_string($straatnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straatnaam)), __LINE__);
        }
        $this->straatnaam = $straatnaam;
        return $this;
    }
    /**
     * Get huisnr_van value
     * @return int|null
     */
    public function getHuisnr_van()
    {
        return $this->huisnr_van;
    }
    /**
     * Set huisnr_van value
     * @param int $huisnr_van
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setHuisnr_van($huisnr_van = null)
    {
        // validation for constraint: int
        if (!is_null($huisnr_van) && !is_numeric($huisnr_van)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnr_van)), __LINE__);
        }
        $this->huisnr_van = $huisnr_van;
        return $this;
    }
    /**
     * Get huisnr_tm value
     * @return int|null
     */
    public function getHuisnr_tm()
    {
        return $this->huisnr_tm;
    }
    /**
     * Set huisnr_tm value
     * @param int $huisnr_tm
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setHuisnr_tm($huisnr_tm = null)
    {
        // validation for constraint: int
        if (!is_null($huisnr_tm) && !is_numeric($huisnr_tm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnr_tm)), __LINE__);
        }
        $this->huisnr_tm = $huisnr_tm;
        return $this;
    }
    /**
     * Get reeksindicatie value
     * @return string|null
     */
    public function getReeksindicatie()
    {
        return $this->reeksindicatie;
    }
    /**
     * Set reeksindicatie value
     * @param string $reeksindicatie
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setReeksindicatie($reeksindicatie = null)
    {
        // validation for constraint: string
        if (!is_null($reeksindicatie) && !is_string($reeksindicatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reeksindicatie)), __LINE__);
        }
        $this->reeksindicatie = $reeksindicatie;
        return $this;
    }
    /**
     * Get gemeente value
     * @return string|null
     */
    public function getGemeente()
    {
        return $this->gemeente;
    }
    /**
     * Set gemeente value
     * @param string $gemeente
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setGemeente($gemeente = null)
    {
        // validation for constraint: string
        if (!is_null($gemeente) && !is_string($gemeente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeente)), __LINE__);
        }
        $this->gemeente = $gemeente;
        return $this;
    }
    /**
     * Get koopsommen value
     * @return \Webservices\ArrayType\KoopsomArray|null
     */
    public function getKoopsommen()
    {
        return $this->koopsommen;
    }
    /**
     * Set koopsommen value
     * @param \Webservices\ArrayType\KoopsomArray $koopsommen
     * @return \Webservices\StructType\KoopsommenOverzicht
     */
    public function setKoopsommen(\Webservices\ArrayType\KoopsomArray $koopsommen = null)
    {
        $this->koopsommen = $koopsommen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KoopsommenOverzicht
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
