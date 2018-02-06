<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchParts StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class SearchParts extends AbstractStructBase
{
    /**
     * The huisnr
     * @var int
     */
    public $huisnr;
    /**
     * The toevoeging
     * @var string
     */
    public $toevoeging;
    /**
     * The wijkcode
     * @var string
     */
    public $wijkcode;
    /**
     * The lettercombinatie
     * @var string
     */
    public $lettercombinatie;
    /**
     * The straat
     * @var string
     */
    public $straat;
    /**
     * The plaats
     * @var string
     */
    public $plaats;
    /**
     * The gemeente
     * @var string
     */
    public $gemeente;
    /**
     * The provincie
     * @var string
     */
    public $provincie;
    /**
     * The reeksindicatie
     * @var string
     */
    public $reeksindicatie;
    /**
     * Constructor method for SearchParts
     * @uses SearchParts::setHuisnr()
     * @uses SearchParts::setToevoeging()
     * @uses SearchParts::setWijkcode()
     * @uses SearchParts::setLettercombinatie()
     * @uses SearchParts::setStraat()
     * @uses SearchParts::setPlaats()
     * @uses SearchParts::setGemeente()
     * @uses SearchParts::setProvincie()
     * @uses SearchParts::setReeksindicatie()
     * @param int $huisnr
     * @param string $toevoeging
     * @param string $wijkcode
     * @param string $lettercombinatie
     * @param string $straat
     * @param string $plaats
     * @param string $gemeente
     * @param string $provincie
     * @param string $reeksindicatie
     */
    public function __construct($huisnr = null, $toevoeging = null, $wijkcode = null, $lettercombinatie = null, $straat = null, $plaats = null, $gemeente = null, $provincie = null, $reeksindicatie = null)
    {
        $this
            ->setHuisnr($huisnr)
            ->setToevoeging($toevoeging)
            ->setWijkcode($wijkcode)
            ->setLettercombinatie($lettercombinatie)
            ->setStraat($straat)
            ->setPlaats($plaats)
            ->setGemeente($gemeente)
            ->setProvincie($provincie)
            ->setReeksindicatie($reeksindicatie);
    }
    /**
     * Get huisnr value
     * @return int|null
     */
    public function getHuisnr()
    {
        return $this->huisnr;
    }
    /**
     * Set huisnr value
     * @param int $huisnr
     * @return \Webservices\StructType\SearchParts
     */
    public function setHuisnr($huisnr = null)
    {
        // validation for constraint: int
        if (!is_null($huisnr) && !is_numeric($huisnr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnr)), __LINE__);
        }
        $this->huisnr = $huisnr;
        return $this;
    }
    /**
     * Get toevoeging value
     * @return string|null
     */
    public function getToevoeging()
    {
        return $this->toevoeging;
    }
    /**
     * Set toevoeging value
     * @param string $toevoeging
     * @return \Webservices\StructType\SearchParts
     */
    public function setToevoeging($toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($toevoeging) && !is_string($toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toevoeging)), __LINE__);
        }
        $this->toevoeging = $toevoeging;
        return $this;
    }
    /**
     * Get wijkcode value
     * @return string|null
     */
    public function getWijkcode()
    {
        return $this->wijkcode;
    }
    /**
     * Set wijkcode value
     * @param string $wijkcode
     * @return \Webservices\StructType\SearchParts
     */
    public function setWijkcode($wijkcode = null)
    {
        // validation for constraint: string
        if (!is_null($wijkcode) && !is_string($wijkcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wijkcode)), __LINE__);
        }
        $this->wijkcode = $wijkcode;
        return $this;
    }
    /**
     * Get lettercombinatie value
     * @return string|null
     */
    public function getLettercombinatie()
    {
        return $this->lettercombinatie;
    }
    /**
     * Set lettercombinatie value
     * @param string $lettercombinatie
     * @return \Webservices\StructType\SearchParts
     */
    public function setLettercombinatie($lettercombinatie = null)
    {
        // validation for constraint: string
        if (!is_null($lettercombinatie) && !is_string($lettercombinatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lettercombinatie)), __LINE__);
        }
        $this->lettercombinatie = $lettercombinatie;
        return $this;
    }
    /**
     * Get straat value
     * @return string|null
     */
    public function getStraat()
    {
        return $this->straat;
    }
    /**
     * Set straat value
     * @param string $straat
     * @return \Webservices\StructType\SearchParts
     */
    public function setStraat($straat = null)
    {
        // validation for constraint: string
        if (!is_null($straat) && !is_string($straat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straat)), __LINE__);
        }
        $this->straat = $straat;
        return $this;
    }
    /**
     * Get plaats value
     * @return string|null
     */
    public function getPlaats()
    {
        return $this->plaats;
    }
    /**
     * Set plaats value
     * @param string $plaats
     * @return \Webservices\StructType\SearchParts
     */
    public function setPlaats($plaats = null)
    {
        // validation for constraint: string
        if (!is_null($plaats) && !is_string($plaats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaats)), __LINE__);
        }
        $this->plaats = $plaats;
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
     * @return \Webservices\StructType\SearchParts
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
     * Get provincie value
     * @return string|null
     */
    public function getProvincie()
    {
        return $this->provincie;
    }
    /**
     * Set provincie value
     * @param string $provincie
     * @return \Webservices\StructType\SearchParts
     */
    public function setProvincie($provincie = null)
    {
        // validation for constraint: string
        if (!is_null($provincie) && !is_string($provincie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provincie)), __LINE__);
        }
        $this->provincie = $provincie;
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
     * @return \Webservices\StructType\SearchParts
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\SearchParts
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
