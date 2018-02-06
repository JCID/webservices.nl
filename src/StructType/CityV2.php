<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CityV2 extends AbstractStructBase
{
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
     * Constructor method for CityV2
     * @uses CityV2::setPlaatsid()
     * @uses CityV2::setPlaatsnaam()
     * @uses CityV2::setPlaatsnaam_ptt()
     * @uses CityV2::setPlaatsnaam_extract()
     * @uses CityV2::setGemeenteid()
     * @uses CityV2::setGemeentenaam()
     * @uses CityV2::setGemeentecode()
     * @uses CityV2::setCebucocode()
     * @uses CityV2::setProvinciecode()
     * @uses CityV2::setProvincienaam()
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
    public function __construct($plaatsid = null, $plaatsnaam = null, $plaatsnaam_ptt = null, $plaatsnaam_extract = null, $gemeenteid = null, $gemeentenaam = null, $gemeentecode = null, $cebucocode = null, $provinciecode = null, $provincienaam = null)
    {
        $this
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
     * @return \Webservices\StructType\CityV2
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
