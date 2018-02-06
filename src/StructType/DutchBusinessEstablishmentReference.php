<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessEstablishmentReference StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessEstablishmentReference extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var string
     */
    public $dossier_number;
    /**
     * The establishment_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $establishment_number;
    /**
     * The legal_name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_name;
    /**
     * The trade_name
     * @var string
     */
    public $trade_name;
    /**
     * The match_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $match_type;
    /**
     * The establishment_city
     * @var string
     */
    public $establishment_city;
    /**
     * The establishment_street
     * @var string
     */
    public $establishment_street;
    /**
     * The correspondence_city
     * @var string
     */
    public $correspondence_city;
    /**
     * The correspondence_street
     * @var string
     */
    public $correspondence_street;
    /**
     * The indication_main_establishment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indication_main_establishment;
    /**
     * Constructor method for DutchBusinessEstablishmentReference
     * @uses DutchBusinessEstablishmentReference::setDossier_number()
     * @uses DutchBusinessEstablishmentReference::setEstablishment_number()
     * @uses DutchBusinessEstablishmentReference::setLegal_name()
     * @uses DutchBusinessEstablishmentReference::setTrade_name()
     * @uses DutchBusinessEstablishmentReference::setMatch_type()
     * @uses DutchBusinessEstablishmentReference::setEstablishment_city()
     * @uses DutchBusinessEstablishmentReference::setEstablishment_street()
     * @uses DutchBusinessEstablishmentReference::setCorrespondence_city()
     * @uses DutchBusinessEstablishmentReference::setCorrespondence_street()
     * @uses DutchBusinessEstablishmentReference::setIndication_main_establishment()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $legal_name
     * @param string $trade_name
     * @param string $match_type
     * @param string $establishment_city
     * @param string $establishment_street
     * @param string $correspondence_city
     * @param string $correspondence_street
     * @param bool $indication_main_establishment
     */
    public function __construct($dossier_number = null, $establishment_number = null, $legal_name = null, $trade_name = null, $match_type = null, $establishment_city = null, $establishment_street = null, $correspondence_city = null, $correspondence_street = null, $indication_main_establishment = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setLegal_name($legal_name)
            ->setTrade_name($trade_name)
            ->setMatch_type($match_type)
            ->setEstablishment_city($establishment_city)
            ->setEstablishment_street($establishment_street)
            ->setCorrespondence_city($correspondence_city)
            ->setCorrespondence_street($correspondence_street)
            ->setIndication_main_establishment($indication_main_establishment);
    }
    /**
     * Get dossier_number value
     * @return string|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get establishment_number value
     * @return string|null
     */
    public function getEstablishment_number()
    {
        return $this->establishment_number;
    }
    /**
     * Set establishment_number value
     * @param string $establishment_number
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setEstablishment_number($establishment_number = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_number) && !is_string($establishment_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_number)), __LINE__);
        }
        $this->establishment_number = $establishment_number;
        return $this;
    }
    /**
     * Get legal_name value
     * @return string|null
     */
    public function getLegal_name()
    {
        return $this->legal_name;
    }
    /**
     * Set legal_name value
     * @param string $legal_name
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setLegal_name($legal_name = null)
    {
        // validation for constraint: string
        if (!is_null($legal_name) && !is_string($legal_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_name)), __LINE__);
        }
        $this->legal_name = $legal_name;
        return $this;
    }
    /**
     * Get trade_name value
     * @return string|null
     */
    public function getTrade_name()
    {
        return $this->trade_name;
    }
    /**
     * Set trade_name value
     * @param string $trade_name
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setTrade_name($trade_name = null)
    {
        // validation for constraint: string
        if (!is_null($trade_name) && !is_string($trade_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trade_name)), __LINE__);
        }
        $this->trade_name = $trade_name;
        return $this;
    }
    /**
     * Get match_type value
     * @return string|null
     */
    public function getMatch_type()
    {
        return $this->match_type;
    }
    /**
     * Set match_type value
     * @param string $match_type
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setMatch_type($match_type = null)
    {
        // validation for constraint: string
        if (!is_null($match_type) && !is_string($match_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($match_type)), __LINE__);
        }
        $this->match_type = $match_type;
        return $this;
    }
    /**
     * Get establishment_city value
     * @return string|null
     */
    public function getEstablishment_city()
    {
        return $this->establishment_city;
    }
    /**
     * Set establishment_city value
     * @param string $establishment_city
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setEstablishment_city($establishment_city = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_city) && !is_string($establishment_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_city)), __LINE__);
        }
        $this->establishment_city = $establishment_city;
        return $this;
    }
    /**
     * Get establishment_street value
     * @return string|null
     */
    public function getEstablishment_street()
    {
        return $this->establishment_street;
    }
    /**
     * Set establishment_street value
     * @param string $establishment_street
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setEstablishment_street($establishment_street = null)
    {
        // validation for constraint: string
        if (!is_null($establishment_street) && !is_string($establishment_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($establishment_street)), __LINE__);
        }
        $this->establishment_street = $establishment_street;
        return $this;
    }
    /**
     * Get correspondence_city value
     * @return string|null
     */
    public function getCorrespondence_city()
    {
        return $this->correspondence_city;
    }
    /**
     * Set correspondence_city value
     * @param string $correspondence_city
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setCorrespondence_city($correspondence_city = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_city) && !is_string($correspondence_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_city)), __LINE__);
        }
        $this->correspondence_city = $correspondence_city;
        return $this;
    }
    /**
     * Get correspondence_street value
     * @return string|null
     */
    public function getCorrespondence_street()
    {
        return $this->correspondence_street;
    }
    /**
     * Set correspondence_street value
     * @param string $correspondence_street
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setCorrespondence_street($correspondence_street = null)
    {
        // validation for constraint: string
        if (!is_null($correspondence_street) && !is_string($correspondence_street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correspondence_street)), __LINE__);
        }
        $this->correspondence_street = $correspondence_street;
        return $this;
    }
    /**
     * Get indication_main_establishment value
     * @return bool|null
     */
    public function getIndication_main_establishment()
    {
        return $this->indication_main_establishment;
    }
    /**
     * Set indication_main_establishment value
     * @param bool $indication_main_establishment
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
     */
    public function setIndication_main_establishment($indication_main_establishment = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_main_establishment) && !is_bool($indication_main_establishment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_main_establishment)), __LINE__);
        }
        $this->indication_main_establishment = $indication_main_establishment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessEstablishmentReference
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
