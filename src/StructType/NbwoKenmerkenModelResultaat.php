<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NbwoKenmerkenModelResultaat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoKenmerkenModelResultaat extends AbstractStructBase
{
    /**
     * The waarde
     * @var int
     */
    public $waarde;
    /**
     * The betrouwbaarheid
     * @var float
     */
    public $betrouwbaarheid;
    /**
     * The aantal
     * @var int
     */
    public $aantal;
    /**
     * Constructor method for NbwoKenmerkenModelResultaat
     * @uses NbwoKenmerkenModelResultaat::setWaarde()
     * @uses NbwoKenmerkenModelResultaat::setBetrouwbaarheid()
     * @uses NbwoKenmerkenModelResultaat::setAantal()
     * @param int $waarde
     * @param float $betrouwbaarheid
     * @param int $aantal
     */
    public function __construct($waarde = null, $betrouwbaarheid = null, $aantal = null)
    {
        $this
            ->setWaarde($waarde)
            ->setBetrouwbaarheid($betrouwbaarheid)
            ->setAantal($aantal);
    }
    /**
     * Get waarde value
     * @return int|null
     */
    public function getWaarde()
    {
        return $this->waarde;
    }
    /**
     * Set waarde value
     * @param int $waarde
     * @return \Webservices\StructType\NbwoKenmerkenModelResultaat
     */
    public function setWaarde($waarde = null)
    {
        // validation for constraint: int
        if (!is_null($waarde) && !is_numeric($waarde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($waarde)), __LINE__);
        }
        $this->waarde = $waarde;
        return $this;
    }
    /**
     * Get betrouwbaarheid value
     * @return float|null
     */
    public function getBetrouwbaarheid()
    {
        return $this->betrouwbaarheid;
    }
    /**
     * Set betrouwbaarheid value
     * @param float $betrouwbaarheid
     * @return \Webservices\StructType\NbwoKenmerkenModelResultaat
     */
    public function setBetrouwbaarheid($betrouwbaarheid = null)
    {
        $this->betrouwbaarheid = $betrouwbaarheid;
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
     * @return \Webservices\StructType\NbwoKenmerkenModelResultaat
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
     * @return \Webservices\StructType\NbwoKenmerkenModelResultaat
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
