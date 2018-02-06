<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NbwoWaardeVerdeling StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoWaardeVerdeling extends AbstractStructBase
{
    /**
     * The koopsom_van
     * @var int
     */
    public $koopsom_van;
    /**
     * The koopsom_tot
     * @var int
     */
    public $koopsom_tot;
    /**
     * The aantal
     * @var int
     */
    public $aantal;
    /**
     * Constructor method for NbwoWaardeVerdeling
     * @uses NbwoWaardeVerdeling::setKoopsom_van()
     * @uses NbwoWaardeVerdeling::setKoopsom_tot()
     * @uses NbwoWaardeVerdeling::setAantal()
     * @param int $koopsom_van
     * @param int $koopsom_tot
     * @param int $aantal
     */
    public function __construct($koopsom_van = null, $koopsom_tot = null, $aantal = null)
    {
        $this
            ->setKoopsom_van($koopsom_van)
            ->setKoopsom_tot($koopsom_tot)
            ->setAantal($aantal);
    }
    /**
     * Get koopsom_van value
     * @return int|null
     */
    public function getKoopsom_van()
    {
        return $this->koopsom_van;
    }
    /**
     * Set koopsom_van value
     * @param int $koopsom_van
     * @return \Webservices\StructType\NbwoWaardeVerdeling
     */
    public function setKoopsom_van($koopsom_van = null)
    {
        // validation for constraint: int
        if (!is_null($koopsom_van) && !is_numeric($koopsom_van)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($koopsom_van)), __LINE__);
        }
        $this->koopsom_van = $koopsom_van;
        return $this;
    }
    /**
     * Get koopsom_tot value
     * @return int|null
     */
    public function getKoopsom_tot()
    {
        return $this->koopsom_tot;
    }
    /**
     * Set koopsom_tot value
     * @param int $koopsom_tot
     * @return \Webservices\StructType\NbwoWaardeVerdeling
     */
    public function setKoopsom_tot($koopsom_tot = null)
    {
        // validation for constraint: int
        if (!is_null($koopsom_tot) && !is_numeric($koopsom_tot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($koopsom_tot)), __LINE__);
        }
        $this->koopsom_tot = $koopsom_tot;
        return $this;
    }
    /**
     * Get aantal value
     * @return int|null
     */
    public function getAantal()
    {
        return $this->aantal;
    }
    /**
     * Set aantal value
     * @param int $aantal
     * @return \Webservices\StructType\NbwoWaardeVerdeling
     */
    public function setAantal($aantal = null)
    {
        // validation for constraint: int
        if (!is_null($aantal) && !is_numeric($aantal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aantal)), __LINE__);
        }
        $this->aantal = $aantal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NbwoWaardeVerdeling
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
