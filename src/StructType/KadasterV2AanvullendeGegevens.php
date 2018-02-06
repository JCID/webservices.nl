<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2AanvullendeGegevens StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2AanvullendeGegevens extends AbstractStructBase
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
     * The soort_vrije_tekst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $soort_vrije_tekst;
    /**
     * The vrije_tekst
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vrije_tekst;
    /**
     * Constructor method for KadasterV2AanvullendeGegevens
     * @uses KadasterV2AanvullendeGegevens::setId()
     * @uses KadasterV2AanvullendeGegevens::setBij_identificatie()
     * @uses KadasterV2AanvullendeGegevens::setSoort_vrije_tekst()
     * @uses KadasterV2AanvullendeGegevens::setVrije_tekst()
     * @param string $id
     * @param string $bij_identificatie
     * @param string $soort_vrije_tekst
     * @param string $vrije_tekst
     */
    public function __construct($id = null, $bij_identificatie = null, $soort_vrije_tekst = null, $vrije_tekst = null)
    {
        $this
            ->setId($id)
            ->setBij_identificatie($bij_identificatie)
            ->setSoort_vrije_tekst($soort_vrije_tekst)
            ->setVrije_tekst($vrije_tekst);
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
     * @return \Webservices\StructType\KadasterV2AanvullendeGegevens
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
     * @return \Webservices\StructType\KadasterV2AanvullendeGegevens
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
     * Get soort_vrije_tekst value
     * @return string|null
     */
    public function getSoort_vrije_tekst()
    {
        return $this->soort_vrije_tekst;
    }
    /**
     * Set soort_vrije_tekst value
     * @param string $soort_vrije_tekst
     * @return \Webservices\StructType\KadasterV2AanvullendeGegevens
     */
    public function setSoort_vrije_tekst($soort_vrije_tekst = null)
    {
        // validation for constraint: string
        if (!is_null($soort_vrije_tekst) && !is_string($soort_vrije_tekst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soort_vrije_tekst)), __LINE__);
        }
        $this->soort_vrije_tekst = $soort_vrije_tekst;
        return $this;
    }
    /**
     * Get vrije_tekst value
     * @return string|null
     */
    public function getVrije_tekst()
    {
        return $this->vrije_tekst;
    }
    /**
     * Set vrije_tekst value
     * @param string $vrije_tekst
     * @return \Webservices\StructType\KadasterV2AanvullendeGegevens
     */
    public function setVrije_tekst($vrije_tekst = null)
    {
        // validation for constraint: string
        if (!is_null($vrije_tekst) && !is_string($vrije_tekst)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vrije_tekst)), __LINE__);
        }
        $this->vrije_tekst = $vrije_tekst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2AanvullendeGegevens
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
