<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterPersoonLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterPersoonLijst extends AbstractStructBase
{
    /**
     * The personen
     * @var \Webservices\ArrayType\KadasterPersoonArray
     */
    public $personen;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for kadasterPersoonLijst
     * @uses KadasterPersoonLijst::setPersonen()
     * @uses KadasterPersoonLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\KadasterPersoonArray $personen
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\KadasterPersoonArray $personen = null, $indicatie_compleet = null)
    {
        $this
            ->setPersonen($personen)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get personen value
     * @return \Webservices\ArrayType\KadasterPersoonArray|null
     */
    public function getPersonen()
    {
        return $this->personen;
    }
    /**
     * Set personen value
     * @param \Webservices\ArrayType\KadasterPersoonArray $personen
     * @return \Webservices\StructType\KadasterPersoonLijst
     */
    public function setPersonen(\Webservices\ArrayType\KadasterPersoonArray $personen = null)
    {
        $this->personen = $personen;
        return $this;
    }
    /**
     * Get indicatie_compleet value
     * @return bool|null
     */
    public function getIndicatie_compleet()
    {
        return $this->indicatie_compleet;
    }
    /**
     * Set indicatie_compleet value
     * @param bool $indicatie_compleet
     * @return \Webservices\StructType\KadasterPersoonLijst
     */
    public function setIndicatie_compleet($indicatie_compleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_compleet) && !is_bool($indicatie_compleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_compleet)), __LINE__);
        }
        $this->indicatie_compleet = $indicatie_compleet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterPersoonLijst
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
