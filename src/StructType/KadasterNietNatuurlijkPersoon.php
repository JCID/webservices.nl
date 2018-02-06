<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterNietNatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterNietNatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The naam
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $naam;
    /**
     * The rechtsvorm
     * @var string
     */
    public $rechtsvorm;
    /**
     * The statutaire_zetel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $statutaire_zetel;
    /**
     * The bedrijven_nummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bedrijven_nummer;
    /**
     * Constructor method for kadasterNietNatuurlijkPersoon
     * @uses KadasterNietNatuurlijkPersoon::setNaam()
     * @uses KadasterNietNatuurlijkPersoon::setRechtsvorm()
     * @uses KadasterNietNatuurlijkPersoon::setStatutaire_zetel()
     * @uses KadasterNietNatuurlijkPersoon::setBedrijven_nummer()
     * @param string $naam
     * @param string $rechtsvorm
     * @param string $statutaire_zetel
     * @param string $bedrijven_nummer
     */
    public function __construct($naam = null, $rechtsvorm = null, $statutaire_zetel = null, $bedrijven_nummer = null)
    {
        $this
            ->setNaam($naam)
            ->setRechtsvorm($rechtsvorm)
            ->setStatutaire_zetel($statutaire_zetel)
            ->setBedrijven_nummer($bedrijven_nummer);
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
     * @return \Webservices\StructType\KadasterNietNatuurlijkPersoon
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
     * Get rechtsvorm value
     * @return string|null
     */
    public function getRechtsvorm()
    {
        return $this->rechtsvorm;
    }
    /**
     * Set rechtsvorm value
     * @param string $rechtsvorm
     * @return \Webservices\StructType\KadasterNietNatuurlijkPersoon
     */
    public function setRechtsvorm($rechtsvorm = null)
    {
        // validation for constraint: string
        if (!is_null($rechtsvorm) && !is_string($rechtsvorm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rechtsvorm)), __LINE__);
        }
        $this->rechtsvorm = $rechtsvorm;
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
     * @return \Webservices\StructType\KadasterNietNatuurlijkPersoon
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
     * Get bedrijven_nummer value
     * @return string|null
     */
    public function getBedrijven_nummer()
    {
        return $this->bedrijven_nummer;
    }
    /**
     * Set bedrijven_nummer value
     * @param string $bedrijven_nummer
     * @return \Webservices\StructType\KadasterNietNatuurlijkPersoon
     */
    public function setBedrijven_nummer($bedrijven_nummer = null)
    {
        // validation for constraint: string
        if (!is_null($bedrijven_nummer) && !is_string($bedrijven_nummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bedrijven_nummer)), __LINE__);
        }
        $this->bedrijven_nummer = $bedrijven_nummer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterNietNatuurlijkPersoon
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
