<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nbwoEstimateValueRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class NbwoEstimateValueRequestType extends AbstractStructBase
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
     * The prijspeil_datum
     * @var string
     */
    public $prijspeil_datum;
    /**
     * The woningtype
     * @var string
     */
    public $woningtype;
    /**
     * The inhoud
     * @var int
     */
    public $inhoud;
    /**
     * The grootte
     * @var int
     */
    public $grootte;
    /**
     * Constructor method for nbwoEstimateValueRequestType
     * @uses NbwoEstimateValueRequestType::setPostcode()
     * @uses NbwoEstimateValueRequestType::setHuisnummer()
     * @uses NbwoEstimateValueRequestType::setHuisnummer_toevoeging()
     * @uses NbwoEstimateValueRequestType::setPrijspeil_datum()
     * @uses NbwoEstimateValueRequestType::setWoningtype()
     * @uses NbwoEstimateValueRequestType::setInhoud()
     * @uses NbwoEstimateValueRequestType::setGrootte()
     * @param string $postcode
     * @param int $huisnummer
     * @param string $huisnummer_toevoeging
     * @param string $prijspeil_datum
     * @param string $woningtype
     * @param int $inhoud
     * @param int $grootte
     */
    public function __construct($postcode = null, $huisnummer = null, $huisnummer_toevoeging = null, $prijspeil_datum = null, $woningtype = null, $inhoud = null, $grootte = null)
    {
        $this
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setHuisnummer_toevoeging($huisnummer_toevoeging)
            ->setPrijspeil_datum($prijspeil_datum)
            ->setWoningtype($woningtype)
            ->setInhoud($inhoud)
            ->setGrootte($grootte);
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
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
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
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
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
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
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
     * Get prijspeil_datum value
     * @return string|null
     */
    public function getPrijspeil_datum()
    {
        return $this->prijspeil_datum;
    }
    /**
     * Set prijspeil_datum value
     * @param string $prijspeil_datum
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
     */
    public function setPrijspeil_datum($prijspeil_datum = null)
    {
        // validation for constraint: string
        if (!is_null($prijspeil_datum) && !is_string($prijspeil_datum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prijspeil_datum)), __LINE__);
        }
        $this->prijspeil_datum = $prijspeil_datum;
        return $this;
    }
    /**
     * Get woningtype value
     * @return string|null
     */
    public function getWoningtype()
    {
        return $this->woningtype;
    }
    /**
     * Set woningtype value
     * @param string $woningtype
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
     */
    public function setWoningtype($woningtype = null)
    {
        // validation for constraint: string
        if (!is_null($woningtype) && !is_string($woningtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($woningtype)), __LINE__);
        }
        $this->woningtype = $woningtype;
        return $this;
    }
    /**
     * Get inhoud value
     * @return int|null
     */
    public function getInhoud()
    {
        return $this->inhoud;
    }
    /**
     * Set inhoud value
     * @param int $inhoud
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
     */
    public function setInhoud($inhoud = null)
    {
        // validation for constraint: int
        if (!is_null($inhoud) && !is_numeric($inhoud)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inhoud)), __LINE__);
        }
        $this->inhoud = $inhoud;
        return $this;
    }
    /**
     * Get grootte value
     * @return int|null
     */
    public function getGrootte()
    {
        return $this->grootte;
    }
    /**
     * Set grootte value
     * @param int $grootte
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
     */
    public function setGrootte($grootte = null)
    {
        // validation for constraint: int
        if (!is_null($grootte) && !is_numeric($grootte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($grootte)), __LINE__);
        }
        $this->grootte = $grootte;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\NbwoEstimateValueRequestType
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
