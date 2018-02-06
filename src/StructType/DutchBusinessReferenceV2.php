<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessReferenceV2 StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessReferenceV2 extends AbstractStructBase
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
     * The name
     * @var string
     */
    public $name;
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
     * The indication_economically_active
     * @var bool
     */
    public $indication_economically_active;
    /**
     * Constructor method for DutchBusinessReferenceV2
     * @uses DutchBusinessReferenceV2::setDossier_number()
     * @uses DutchBusinessReferenceV2::setEstablishment_number()
     * @uses DutchBusinessReferenceV2::setName()
     * @uses DutchBusinessReferenceV2::setMatch_type()
     * @uses DutchBusinessReferenceV2::setEstablishment_city()
     * @uses DutchBusinessReferenceV2::setEstablishment_street()
     * @uses DutchBusinessReferenceV2::setCorrespondence_city()
     * @uses DutchBusinessReferenceV2::setCorrespondence_street()
     * @uses DutchBusinessReferenceV2::setIndication_economically_active()
     * @param string $dossier_number
     * @param string $establishment_number
     * @param string $name
     * @param string $match_type
     * @param string $establishment_city
     * @param string $establishment_street
     * @param string $correspondence_city
     * @param string $correspondence_street
     * @param bool $indication_economically_active
     */
    public function __construct($dossier_number = null, $establishment_number = null, $name = null, $match_type = null, $establishment_city = null, $establishment_street = null, $correspondence_city = null, $correspondence_street = null, $indication_economically_active = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setEstablishment_number($establishment_number)
            ->setName($name)
            ->setMatch_type($match_type)
            ->setEstablishment_city($establishment_city)
            ->setEstablishment_street($establishment_street)
            ->setCorrespondence_city($correspondence_city)
            ->setCorrespondence_street($correspondence_street)
            ->setIndication_economically_active($indication_economically_active);
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Webservices\StructType\DutchBusinessReferenceV2
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
     * Get indication_economically_active value
     * @return bool|null
     */
    public function getIndication_economically_active()
    {
        return $this->indication_economically_active;
    }
    /**
     * Set indication_economically_active value
     * @param bool $indication_economically_active
     * @return \Webservices\StructType\DutchBusinessReferenceV2
     */
    public function setIndication_economically_active($indication_economically_active = null)
    {
        // validation for constraint: boolean
        if (!is_null($indication_economically_active) && !is_bool($indication_economically_active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indication_economically_active)), __LINE__);
        }
        $this->indication_economically_active = $indication_economically_active;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessReferenceV2
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
