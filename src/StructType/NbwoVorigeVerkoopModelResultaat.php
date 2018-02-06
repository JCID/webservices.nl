<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NbwoVorigeVerkoopModelResultaat StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoVorigeVerkoopModelResultaat extends AbstractStructBase
{
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The huisnummer
     * @var int
     */
    public $huisnummer;
    /**
     * The huisnummer_toevoeging
     * @var string
     */
    public $huisnummer_toevoeging;
    /**
     * The vorige_verkoop_datum
     * @var string
     */
    public $vorige_verkoop_datum;
    /**
     * The koopsom
     * @var int
     */
    public $koopsom;
    /**
     * The vorige_verkoop_waarde
     * @var int
     */
    public $vorige_verkoop_waarde;
    /**
     * Constructor method for NbwoVorigeVerkoopModelResultaat
     * @uses NbwoVorigeVerkoopModelResultaat::setPostcode()
     * @uses NbwoVorigeVerkoopModelResultaat::setHuisnummer()
     * @uses NbwoVorigeVerkoopModelResultaat::setHuisnummer_toevoeging()
     * @uses NbwoVorigeVerkoopModelResultaat::setVorige_verkoop_datum()
     * @uses NbwoVorigeVerkoopModelResultaat::setKoopsom()
     * @uses NbwoVorigeVerkoopModelResultaat::setVorige_verkoop_waarde()
     * @param string $postcode
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param string $vorige_verkoop_datum
     * @param int $koopsom
     * @param int $vorige_verkoop_waarde
     */
    public function __construct($postcode = null, $huisnummer = null, $huisnummer_toevoeging = null, $vorige_verkoop_datum = null, $koopsom = null, $vorige_verkoop_waarde = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setVorige_verkoop_datum($vorige_verkoop_datum)
            ->setKoopsom($koopsom)
            ->setVorige_verkoop_waarde($vorige_verkoop_waarde);
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get huisnummer value
     * @return int|null
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }
    /**
     * Set huisnummer value
     * @param int $huisnummer
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public function setHuisnummer($huisnummer = null)
    {
        // validation for constraint: int
        if (!is_null($huisnummer) && !is_numeric($huisnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($huisnummer)), __LINE__);
        }
        $this->huisnummer = $huisnummer;
        return $this;
    }
    /**
     * Get huisnummer_toevoeging value
     * @return string|null
     */
    public function getHuisnummer_toevoeging()
    {
        return $this->huisnummer_toevoeging;
    }
    /**
     * Set huisnummer_toevoeging value
     * @param string $huisnummer_toevoeging
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public function setHuisnummer_toevoeging($huisnummer_toevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummer_toevoeging) && !is_string($huisnummer_toevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummer_toevoeging)), __LINE__);
        }
        $this->huisnummer_toevoeging = $huisnummer_toevoeging;
        return $this;
    }
    /**
     * Get vorige_verkoop_datum value
     * @return string|null
     */
    public function getVorige_verkoop_datum()
    {
        return $this->vorige_verkoop_datum;
    }
    /**
     * Set vorige_verkoop_datum value
     * @param string $vorige_verkoop_datum
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public function setVorige_verkoop_datum($vorige_verkoop_datum = null)
    {
        // validation for constraint: string
        if (!is_null($vorige_verkoop_datum) && !is_string($vorige_verkoop_datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vorige_verkoop_datum)), __LINE__);
        }
        $this->vorige_verkoop_datum = $vorige_verkoop_datum;
        return $this;
    }
    /**
     * Get koopsom value
     * @return int|null
     */
    public function getKoopsom()
    {
        return $this->koopsom;
    }
    /**
     * Set koopsom value
     * @param int $koopsom
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public function setKoopsom($koopsom = null)
    {
        // validation for constraint: int
        if (!is_null($koopsom) && !is_numeric($koopsom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($koopsom)), __LINE__);
        }
        $this->koopsom = $koopsom;
        return $this;
    }
    /**
     * Get vorige_verkoop_waarde value
     * @return int|null
     */
    public function getVorige_verkoop_waarde()
    {
        return $this->vorige_verkoop_waarde;
    }
    /**
     * Set vorige_verkoop_waarde value
     * @param int $vorige_verkoop_waarde
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
     */
    public function setVorige_verkoop_waarde($vorige_verkoop_waarde = null)
    {
        // validation for constraint: int
        if (!is_null($vorige_verkoop_waarde) && !is_numeric($vorige_verkoop_waarde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vorige_verkoop_waarde)), __LINE__);
        }
        $this->vorige_verkoop_waarde = $vorige_verkoop_waarde;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NbwoVorigeVerkoopModelResultaat
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
