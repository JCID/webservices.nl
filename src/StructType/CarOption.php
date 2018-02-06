<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarOption StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarOption extends AbstractStructBase
{
    /**
     * The standaard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $standaard;
    /**
     * The pakket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $pakket;
    /**
     * The standaard_sinds_datum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $standaard_sinds_datum;
    /**
     * The prijs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $prijs;
    /**
     * Constructor method for CarOption
     * @uses CarOption::setStandaard()
     * @uses CarOption::setPakket()
     * @uses CarOption::setStandaard_sinds_datum()
     * @uses CarOption::setPrijs()
     * @param bool $standaard
     * @param int $pakket
     * @param int $standaard_sinds_datum
     * @param int $prijs
     */
    public function __construct($standaard = null, $pakket = null, $standaard_sinds_datum = null, $prijs = null)
    {
        $this
            ->setStandaard($standaard)
            ->setPakket($pakket)
            ->setStandaard_sinds_datum($standaard_sinds_datum)
            ->setPrijs($prijs);
    }
    /**
     * Get standaard value
     * @return bool|null
     */
    public function getStandaard()
    {
        return $this->standaard;
    }
    /**
     * Set standaard value
     * @param bool $standaard
     * @return \Webservices\StructType\CarOption
     */
    public function setStandaard($standaard = null)
    {
        // validation for constraint: boolean
        if (!is_null($standaard) && !is_bool($standaard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($standaard)), __LINE__);
        }
        $this->standaard = $standaard;
        return $this;
    }
    /**
     * Get pakket value
     * @return int|null
     */
    public function getPakket()
    {
        return $this->pakket;
    }
    /**
     * Set pakket value
     * @param int $pakket
     * @return \Webservices\StructType\CarOption
     */
    public function setPakket($pakket = null)
    {
        // validation for constraint: int
        if (!is_null($pakket) && !is_numeric($pakket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pakket)), __LINE__);
        }
        $this->pakket = $pakket;
        return $this;
    }
    /**
     * Get standaard_sinds_datum value
     * @return int|null
     */
    public function getStandaard_sinds_datum()
    {
        return $this->standaard_sinds_datum;
    }
    /**
     * Set standaard_sinds_datum value
     * @param int $standaard_sinds_datum
     * @return \Webservices\StructType\CarOption
     */
    public function setStandaard_sinds_datum($standaard_sinds_datum = null)
    {
        // validation for constraint: int
        if (!is_null($standaard_sinds_datum) && !is_numeric($standaard_sinds_datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standaard_sinds_datum)), __LINE__);
        }
        $this->standaard_sinds_datum = $standaard_sinds_datum;
        return $this;
    }
    /**
     * Get prijs value
     * @return int|null
     */
    public function getPrijs()
    {
        return $this->prijs;
    }
    /**
     * Set prijs value
     * @param int $prijs
     * @return \Webservices\StructType\CarOption
     */
    public function setPrijs($prijs = null)
    {
        // validation for constraint: int
        if (!is_null($prijs) && !is_numeric($prijs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($prijs)), __LINE__);
        }
        $this->prijs = $prijs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarOption
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
