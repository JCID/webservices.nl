<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NietNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NietNatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $naam;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The statutaire_zetel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statutaire_zetel;
    /**
     * The leden_lijst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\LidLijst
     */
    public $leden_lijst;
    /**
     * Constructor method for NietNatuurlijkPersoon
     * @uses NietNatuurlijkPersoon::setNaam()
     * @uses NietNatuurlijkPersoon::setCode()
     * @uses NietNatuurlijkPersoon::setStatutaire_zetel()
     * @uses NietNatuurlijkPersoon::setLeden_lijst()
     * @param string $naam
     * @param string $code
     * @param string $statutaire_zetel
     * @param \Webservices\StructType\LidLijst $leden_lijst
     */
    public function __construct($naam = null, $code = null, $statutaire_zetel = null, \Webservices\StructType\LidLijst $leden_lijst = null)
    {
        $this
            ->setNaam($naam)
            ->setCode($code)
            ->setStatutaire_zetel($statutaire_zetel)
            ->setLeden_lijst($leden_lijst);
    }
    /**
     * Get naam value
     * @return string|null
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Set naam value
     * @param string $naam
     * @return \Webservices\StructType\NietNatuurlijkPersoon
     */
    public function setNaam($naam = null)
    {
        // validation for constraint: string
        if (!is_null($naam) && !is_string($naam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($naam)), __LINE__);
        }
        $this->naam = $naam;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Webservices\StructType\NietNatuurlijkPersoon
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get statutaire_zetel value
     * @return string|null
     */
    public function getStatutaire_zetel()
    {
        return $this->statutaire_zetel;
    }
    /**
     * Set statutaire_zetel value
     * @param string $statutaire_zetel
     * @return \Webservices\StructType\NietNatuurlijkPersoon
     */
    public function setStatutaire_zetel($statutaire_zetel = null)
    {
        // validation for constraint: string
        if (!is_null($statutaire_zetel) && !is_string($statutaire_zetel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statutaire_zetel)), __LINE__);
        }
        $this->statutaire_zetel = $statutaire_zetel;
        return $this;
    }
    /**
     * Get leden_lijst value
     * @return \Webservices\StructType\LidLijst|null
     */
    public function getLeden_lijst()
    {
        return $this->leden_lijst;
    }
    /**
     * Set leden_lijst value
     * @param \Webservices\StructType\LidLijst $leden_lijst
     * @return \Webservices\StructType\NietNatuurlijkPersoon
     */
    public function setLeden_lijst(\Webservices\StructType\LidLijst $leden_lijst = null)
    {
        $this->leden_lijst = $leden_lijst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NietNatuurlijkPersoon
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
