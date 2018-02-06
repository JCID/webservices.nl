<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2MeerGegevensBeschikbaar StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2MeerGegevensBeschikbaar extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The bij_identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bij_identificatie;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * Constructor method for KadasterV2MeerGegevensBeschikbaar
     * @uses KadasterV2MeerGegevensBeschikbaar::setId()
     * @uses KadasterV2MeerGegevensBeschikbaar::setBij_identificatie()
     * @uses KadasterV2MeerGegevensBeschikbaar::setOmschrijving()
     * @param string $id
     * @param string $bij_identificatie
     * @param string $omschrijving
     */
    public function __construct($id = null, $bij_identificatie = null, $omschrijving = null)
    {
        $this
            ->setId($id)
            ->setBij_identificatie($bij_identificatie)
            ->setOmschrijving($omschrijving);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\KadasterV2MeerGegevensBeschikbaar
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get bij_identificatie value
     * @return string|null
     */
    public function getBij_identificatie()
    {
        return $this->bij_identificatie;
    }
    /**
     * Set bij_identificatie value
     * @param string $bij_identificatie
     * @return \Webservices\StructType\KadasterV2MeerGegevensBeschikbaar
     */
    public function setBij_identificatie($bij_identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($bij_identificatie) && !is_string($bij_identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bij_identificatie)), __LINE__);
        }
        $this->bij_identificatie = $bij_identificatie;
        return $this;
    }
    /**
     * Get omschrijving value
     * @return string|null
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
    /**
     * Set omschrijving value
     * @param string $omschrijving
     * @return \Webservices\StructType\KadasterV2MeerGegevensBeschikbaar
     */
    public function setOmschrijving($omschrijving = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving) && !is_string($omschrijving)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving)), __LINE__);
        }
        $this->omschrijving = $omschrijving;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2MeerGegevensBeschikbaar
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
