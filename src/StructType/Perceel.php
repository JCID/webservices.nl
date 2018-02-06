<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Perceel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Perceel extends AbstractStructBase
{
    /**
     * The perceelid
     * @var int
     */
    public $perceelid;
    /**
     * The huisnr
     * @var int
     */
    public $huisnr;
    /**
     * The huisnr_toevoeging
     * @var string
     */
    public $huisnr_toevoeging;
    /**
     * The perceelnummer
     * @var int
     */
    public $perceelnummer;
    /**
     * The reeksid
     * @var int
     */
    public $reeksid;
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
     * The reeksindicatie
     * @var string
     */
    public $reeksindicatie;
    /**
     * The straatid
     * @var int
     */
    public $straatid;
    /**
     * The straatnaam
     * @var string
     */
    public $straatnaam;
    /**
     * The straatnaam_nen
     * @var string
     */
    public $straatnaam_nen;
    /**
     * The straatnaam_ptt
     * @var string
     */
    public $straatnaam_ptt;
    /**
     * The straatnaam_extract
     * @var string
     */
    public $straatnaam_extract;
    /**
     * The plaatsid
     * @var int
     */
    public $plaatsid;
    /**
     * The plaatsnaam
     * @var string
     */
    public $plaatsnaam;
    /**
     * The plaatsnaam_ptt
     * @var string
     */
    public $plaatsnaam_ptt;
    /**
     * The plaatsnaam_extract
     * @var string
     */
    public $plaatsnaam_extract;
    /**
     * The gemeenteid
     * @var int
     */
    public $gemeenteid;
    /**
     * The gemeentenaam
     * @var string
     */
    public $gemeentenaam;
    /**
     * The gemeentecode
     * @var int
     */
    public $gemeentecode;
    /**
     * The cebucocode
     * @var int
     */
    public $cebucocode;
    /**
     * The provinciecode
     * @var string
     */
    public $provinciecode;
    /**
     * The provincienaam
     * @var string
     */
    public $provincienaam;
    /**
     * Constructor method for Perceel
     * @uses Perceel::setPerceelid()
     * @uses Perceel::setHuisnr()
     * @uses Perceel::setHuisnr_toevoeging()
     * @uses Perceel::setPerceelnummer()
     * @uses Perceel::setReeksid()
     * @uses Perceel::setHuisnr_van()
     * @uses Perceel::setHuisnr_tm()
     * @uses Perceel::setWijkcode()
     * @uses Perceel::setLettercombinatie()
     * @uses Perceel::setReeksindicatie()
     * @uses Perceel::setStraatid()
     * @uses Perceel::setStraatnaam()
     * @uses Perceel::setStraatnaam_nen()
     * @uses Perceel::setStraatnaam_ptt()
     * @uses Perceel::setStraatnaam_extract()
     * @uses Perceel::setPlaatsid()
     * @uses Perceel::setPlaatsnaam()
     * @uses Perceel::setPlaatsnaam_ptt()
     * @uses Perceel::setPlaatsnaam_extract()
     * @uses Perceel::setGemeenteid()
     * @uses Perceel::setGemeentenaam()
     * @uses Perceel::setGemeentecode()
     * @uses Perceel::setCebucocode()
     * @uses Perceel::setProvinciecode()
     * @uses Perceel::setProvincienaam()
     * @param int $perceelid
     * @param int $huisnr
     * @param string $huisnr_toevoeging
     * @param int $perceelnummer
     * @param int $reeksid
     * @param int $huisnr_van
     * @param int $huisnr_tm
     * @param string $wijkcode
     * @param string $lettercombinatie
     * @param string $reeksindicatie
     * @param int $straatid
     * @param string $straatnaam
     * @param string $straatnaam_nen
     * @param string $straatnaam_ptt
     * @param string $straatnaam_extract
     * @param int $plaatsid
     * @param string $plaatsnaam
     * @param string $plaatsnaam_ptt
     * @param string $plaatsnaam_extract
     * @param int $gemeenteid
     * @param string $gemeentenaam
     * @param int $gemeentecode
     * @param int $cebucocode
     * @param string $provinciecode
     * @param string $provincienaam
     */
    public function __construct($perceelid = null, $huisnr = null, $huisnr_toevoeging = null, $perceelnummer = null, $reeksid = null, $huisnr_van = null, $huisnr_tm = null, $wijkcode = null, $lettercombinatie = null, $reeksindicatie = null, $straatid = null, $straatnaam = null, $straatnaam_nen = null, $straatnaam_ptt = null, $straatnaam_extract = null, $plaatsid = null, $plaatsnaam = null, $plaatsnaam_ptt = null, $plaatsnaam_extract = null, $gemeenteid = null, $gemeentenaam = null, $gemeentecode = null, $cebucocode = null, $provinciecode = null, $provincienaam = null)
    {
        $this
            ->setPerceelid($perceelid)
            ->setHuisnr($huisnr)
            ->setHuisnr_toevoeging($huisnr_toevoeging)
            ->setPerceelnummer($perceelnummer)
            ->setReeksid($reeksid)
            ->setHuisnr_van($huisnr_van)
            ->setHuisnr_tm($huisnr_tm)
            ->setWijkcode($wijkcode)
            ->setLettercombinatie($lettercombinatie)
            ->setReeksindicatie($reeksindicatie)
            ->setStraatid($straatid)
            ->setStraatnaam($straatnaam)
            ->setStraatnaam_nen($straatnaam_nen)
            ->setStraatnaam_ptt($straatnaam_ptt)
            ->setStraatnaam_extract($straatnaam_extract)
            ->setPlaatsid($plaatsid)
            ->setPlaatsnaam($plaatsnaam)
            ->setPlaatsnaam_ptt($plaatsnaam_ptt)
            ->setPlaatsnaam_extract($plaatsnaam_extract)
            ->setGemeenteid($gemeenteid)
            ->setGemeentenaam($gemeentenaam)
            ->setGemeentecode($gemeentecode)
            ->setCebucocode($cebucocode)
            ->setProvinciecode($provinciecode)
            ->setProvincienaam($provincienaam);
    }
    /**
     * Get perceelid value
     * @return int|null
     */
    public function getPerceelid()
    {
        return $this->perceelid;
    }
    /**
     * Set perceelid value
     * @param int $perceelid
     * @return \Webservices\StructType\Perceel
     */
    public function setPerceelid($perceelid = null)
    {
        // validation for constraint: int
        if (!is_null($perceelid) && !is_numeric($perceelid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($perceelid)), __LINE__);
        }
        $this->perceelid = $perceelid;
        return $this;
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
     * @return \Webservices\StructType\Perceel
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
     * Get huisnr_toevoeging value
     * @return string|null
     */
    public function getHuisnr_toevoeging()
    {
        return $this->huisnr_toevoeging;
    }
    /**
     * Set huisnr_toevoeging value
     * @param string $huisnr_toevoeging
     * @return \Webservices\StructType\Perceel
     */
    public function setHuisnr_toevoeging($huisnr_toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnr_toevoeging) && !is_string($huisnr_toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnr_toevoeging)), __LINE__);
        }
        $this->huisnr_toevoeging = $huisnr_toevoeging;
        return $this;
    }
    /**
     * Get perceelnummer value
     * @return int|null
     */
    public function getPerceelnummer()
    {
        return $this->perceelnummer;
    }
    /**
     * Set perceelnummer value
     * @param int $perceelnummer
     * @return \Webservices\StructType\Perceel
     */
    public function setPerceelnummer($perceelnummer = null)
    {
        // validation for constraint: int
        if (!is_null($perceelnummer) && !is_numeric($perceelnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($perceelnummer)), __LINE__);
        }
        $this->perceelnummer = $perceelnummer;
        return $this;
    }
    /**
     * Get reeksid value
     * @return int|null
     */
    public function getReeksid()
    {
        return $this->reeksid;
    }
    /**
     * Set reeksid value
     * @param int $reeksid
     * @return \Webservices\StructType\Perceel
     */
    public function setReeksid($reeksid = null)
    {
        // validation for constraint: int
        if (!is_null($reeksid) && !is_numeric($reeksid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reeksid)), __LINE__);
        }
        $this->reeksid = $reeksid;
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
     * @return \Webservices\StructType\Perceel
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
     * @return \Webservices\StructType\Perceel
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
     * @return \Webservices\StructType\Perceel
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
     * @return \Webservices\StructType\Perceel
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
     * @return \Webservices\StructType\Perceel
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
     * Get straatid value
     * @return int|null
     */
    public function getStraatid()
    {
        return $this->straatid;
    }
    /**
     * Set straatid value
     * @param int $straatid
     * @return \Webservices\StructType\Perceel
     */
    public function setStraatid($straatid = null)
    {
        // validation for constraint: int
        if (!is_null($straatid) && !is_numeric($straatid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($straatid)), __LINE__);
        }
        $this->straatid = $straatid;
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
     * @return \Webservices\StructType\Perceel
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
     * Get straatnaam_nen value
     * @return string|null
     */
    public function getStraatnaam_nen()
    {
        return $this->straatnaam_nen;
    }
    /**
     * Set straatnaam_nen value
     * @param string $straatnaam_nen
     * @return \Webservices\StructType\Perceel
     */
    public function setStraatnaam_nen($straatnaam_nen = null)
    {
        // validation for constraint: string
        if (!is_null($straatnaam_nen) && !is_string($straatnaam_nen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straatnaam_nen)), __LINE__);
        }
        $this->straatnaam_nen = $straatnaam_nen;
        return $this;
    }
    /**
     * Get straatnaam_ptt value
     * @return string|null
     */
    public function getStraatnaam_ptt()
    {
        return $this->straatnaam_ptt;
    }
    /**
     * Set straatnaam_ptt value
     * @param string $straatnaam_ptt
     * @return \Webservices\StructType\Perceel
     */
    public function setStraatnaam_ptt($straatnaam_ptt = null)
    {
        // validation for constraint: string
        if (!is_null($straatnaam_ptt) && !is_string($straatnaam_ptt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straatnaam_ptt)), __LINE__);
        }
        $this->straatnaam_ptt = $straatnaam_ptt;
        return $this;
    }
    /**
     * Get straatnaam_extract value
     * @return string|null
     */
    public function getStraatnaam_extract()
    {
        return $this->straatnaam_extract;
    }
    /**
     * Set straatnaam_extract value
     * @param string $straatnaam_extract
     * @return \Webservices\StructType\Perceel
     */
    public function setStraatnaam_extract($straatnaam_extract = null)
    {
        // validation for constraint: string
        if (!is_null($straatnaam_extract) && !is_string($straatnaam_extract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($straatnaam_extract)), __LINE__);
        }
        $this->straatnaam_extract = $straatnaam_extract;
        return $this;
    }
    /**
     * Get plaatsid value
     * @return int|null
     */
    public function getPlaatsid()
    {
        return $this->plaatsid;
    }
    /**
     * Set plaatsid value
     * @param int $plaatsid
     * @return \Webservices\StructType\Perceel
     */
    public function setPlaatsid($plaatsid = null)
    {
        // validation for constraint: int
        if (!is_null($plaatsid) && !is_numeric($plaatsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($plaatsid)), __LINE__);
        }
        $this->plaatsid = $plaatsid;
        return $this;
    }
    /**
     * Get plaatsnaam value
     * @return string|null
     */
    public function getPlaatsnaam()
    {
        return $this->plaatsnaam;
    }
    /**
     * Set plaatsnaam value
     * @param string $plaatsnaam
     * @return \Webservices\StructType\Perceel
     */
    public function setPlaatsnaam($plaatsnaam = null)
    {
        // validation for constraint: string
        if (!is_null($plaatsnaam) && !is_string($plaatsnaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaatsnaam)), __LINE__);
        }
        $this->plaatsnaam = $plaatsnaam;
        return $this;
    }
    /**
     * Get plaatsnaam_ptt value
     * @return string|null
     */
    public function getPlaatsnaam_ptt()
    {
        return $this->plaatsnaam_ptt;
    }
    /**
     * Set plaatsnaam_ptt value
     * @param string $plaatsnaam_ptt
     * @return \Webservices\StructType\Perceel
     */
    public function setPlaatsnaam_ptt($plaatsnaam_ptt = null)
    {
        // validation for constraint: string
        if (!is_null($plaatsnaam_ptt) && !is_string($plaatsnaam_ptt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaatsnaam_ptt)), __LINE__);
        }
        $this->plaatsnaam_ptt = $plaatsnaam_ptt;
        return $this;
    }
    /**
     * Get plaatsnaam_extract value
     * @return string|null
     */
    public function getPlaatsnaam_extract()
    {
        return $this->plaatsnaam_extract;
    }
    /**
     * Set plaatsnaam_extract value
     * @param string $plaatsnaam_extract
     * @return \Webservices\StructType\Perceel
     */
    public function setPlaatsnaam_extract($plaatsnaam_extract = null)
    {
        // validation for constraint: string
        if (!is_null($plaatsnaam_extract) && !is_string($plaatsnaam_extract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plaatsnaam_extract)), __LINE__);
        }
        $this->plaatsnaam_extract = $plaatsnaam_extract;
        return $this;
    }
    /**
     * Get gemeenteid value
     * @return int|null
     */
    public function getGemeenteid()
    {
        return $this->gemeenteid;
    }
    /**
     * Set gemeenteid value
     * @param int $gemeenteid
     * @return \Webservices\StructType\Perceel
     */
    public function setGemeenteid($gemeenteid = null)
    {
        // validation for constraint: int
        if (!is_null($gemeenteid) && !is_numeric($gemeenteid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gemeenteid)), __LINE__);
        }
        $this->gemeenteid = $gemeenteid;
        return $this;
    }
    /**
     * Get gemeentenaam value
     * @return string|null
     */
    public function getGemeentenaam()
    {
        return $this->gemeentenaam;
    }
    /**
     * Set gemeentenaam value
     * @param string $gemeentenaam
     * @return \Webservices\StructType\Perceel
     */
    public function setGemeentenaam($gemeentenaam = null)
    {
        // validation for constraint: string
        if (!is_null($gemeentenaam) && !is_string($gemeentenaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gemeentenaam)), __LINE__);
        }
        $this->gemeentenaam = $gemeentenaam;
        return $this;
    }
    /**
     * Get gemeentecode value
     * @return int|null
     */
    public function getGemeentecode()
    {
        return $this->gemeentecode;
    }
    /**
     * Set gemeentecode value
     * @param int $gemeentecode
     * @return \Webservices\StructType\Perceel
     */
    public function setGemeentecode($gemeentecode = null)
    {
        // validation for constraint: int
        if (!is_null($gemeentecode) && !is_numeric($gemeentecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gemeentecode)), __LINE__);
        }
        $this->gemeentecode = $gemeentecode;
        return $this;
    }
    /**
     * Get cebucocode value
     * @return int|null
     */
    public function getCebucocode()
    {
        return $this->cebucocode;
    }
    /**
     * Set cebucocode value
     * @param int $cebucocode
     * @return \Webservices\StructType\Perceel
     */
    public function setCebucocode($cebucocode = null)
    {
        // validation for constraint: int
        if (!is_null($cebucocode) && !is_numeric($cebucocode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cebucocode)), __LINE__);
        }
        $this->cebucocode = $cebucocode;
        return $this;
    }
    /**
     * Get provinciecode value
     * @return string|null
     */
    public function getProvinciecode()
    {
        return $this->provinciecode;
    }
    /**
     * Set provinciecode value
     * @param string $provinciecode
     * @return \Webservices\StructType\Perceel
     */
    public function setProvinciecode($provinciecode = null)
    {
        // validation for constraint: string
        if (!is_null($provinciecode) && !is_string($provinciecode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provinciecode)), __LINE__);
        }
        $this->provinciecode = $provinciecode;
        return $this;
    }
    /**
     * Get provincienaam value
     * @return string|null
     */
    public function getProvincienaam()
    {
        return $this->provincienaam;
    }
    /**
     * Set provincienaam value
     * @param string $provincienaam
     * @return \Webservices\StructType\Perceel
     */
    public function setProvincienaam($provincienaam = null)
    {
        // validation for constraint: string
        if (!is_null($provincienaam) && !is_string($provincienaam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provincienaam)), __LINE__);
        }
        $this->provincienaam = $provincienaam;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Perceel
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
