<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for District StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class District extends AbstractStructBase
{
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
     * The provinciecode
     * @var string
     */
    public $provinciecode;
    /**
     * Constructor method for District
     * @uses District::setGemeenteid()
     * @uses District::setGemeentenaam()
     * @uses District::setGemeentecode()
     * @uses District::setProvinciecode()
     * @param int $gemeenteid
     * @param string $gemeentenaam
     * @param int $gemeentecode
     * @param string $provinciecode
     */
    public function __construct($gemeenteid = null, $gemeentenaam = null, $gemeentecode = null, $provinciecode = null)
    {
        $this
            ->setGemeenteid($gemeenteid)
            ->setGemeentenaam($gemeentenaam)
            ->setGemeentecode($gemeentecode)
            ->setProvinciecode($provinciecode);
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
     * @return \Webservices\StructType\District
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
     * @return \Webservices\StructType\District
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
     * @return \Webservices\StructType\District
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
     * @return \Webservices\StructType\District
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\District
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
