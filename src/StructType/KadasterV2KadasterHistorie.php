<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KadasterHistorie StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KadasterHistorie extends AbstractStructBase
{
    /**
     * The logisch_tijdstip_ontstaan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2TijdstipType
     */
    public $logisch_tijdstip_ontstaan;
    /**
     * The logisch_tijdstip_vervallen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2TijdstipType
     */
    public $logisch_tijdstip_vervallen;
    /**
     * The volgnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $volgnummer;
    /**
     * The status_historie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status_historie;
    /**
     * The technisch_tijdstip_ontstaan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $technisch_tijdstip_ontstaan;
    /**
     * The technisch_tijdstip_vervallen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $technisch_tijdstip_vervallen;
    /**
     * Constructor method for KadasterV2KadasterHistorie
     * @uses KadasterV2KadasterHistorie::setLogisch_tijdstip_ontstaan()
     * @uses KadasterV2KadasterHistorie::setLogisch_tijdstip_vervallen()
     * @uses KadasterV2KadasterHistorie::setVolgnummer()
     * @uses KadasterV2KadasterHistorie::setStatus_historie()
     * @uses KadasterV2KadasterHistorie::setTechnisch_tijdstip_ontstaan()
     * @uses KadasterV2KadasterHistorie::setTechnisch_tijdstip_vervallen()
     * @param \Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_ontstaan
     * @param \Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_vervallen
     * @param int $volgnummer
     * @param string $status_historie
     * @param string $technisch_tijdstip_ontstaan
     * @param string $technisch_tijdstip_vervallen
     */
    public function __construct(\Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_ontstaan = null, \Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_vervallen = null, $volgnummer = null, $status_historie = null, $technisch_tijdstip_ontstaan = null, $technisch_tijdstip_vervallen = null)
    {
        $this
            ->setLogisch_tijdstip_ontstaan($logisch_tijdstip_ontstaan)
            ->setLogisch_tijdstip_vervallen($logisch_tijdstip_vervallen)
            ->setVolgnummer($volgnummer)
            ->setStatus_historie($status_historie)
            ->setTechnisch_tijdstip_ontstaan($technisch_tijdstip_ontstaan)
            ->setTechnisch_tijdstip_vervallen($technisch_tijdstip_vervallen);
    }
    /**
     * Get logisch_tijdstip_ontstaan value
     * @return \Webservices\StructType\KadasterV2TijdstipType|null
     */
    public function getLogisch_tijdstip_ontstaan()
    {
        return $this->logisch_tijdstip_ontstaan;
    }
    /**
     * Set logisch_tijdstip_ontstaan value
     * @param \Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_ontstaan
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public function setLogisch_tijdstip_ontstaan(\Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_ontstaan = null)
    {
        $this->logisch_tijdstip_ontstaan = $logisch_tijdstip_ontstaan;
        return $this;
    }
    /**
     * Get logisch_tijdstip_vervallen value
     * @return \Webservices\StructType\KadasterV2TijdstipType|null
     */
    public function getLogisch_tijdstip_vervallen()
    {
        return $this->logisch_tijdstip_vervallen;
    }
    /**
     * Set logisch_tijdstip_vervallen value
     * @param \Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_vervallen
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public function setLogisch_tijdstip_vervallen(\Webservices\StructType\KadasterV2TijdstipType $logisch_tijdstip_vervallen = null)
    {
        $this->logisch_tijdstip_vervallen = $logisch_tijdstip_vervallen;
        return $this;
    }
    /**
     * Get volgnummer value
     * @return int|null
     */
    public function getVolgnummer()
    {
        return $this->volgnummer;
    }
    /**
     * Set volgnummer value
     * @param int $volgnummer
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public function setVolgnummer($volgnummer = null)
    {
        // validation for constraint: int
        if (!is_null($volgnummer) && !is_numeric($volgnummer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volgnummer)), __LINE__);
        }
        $this->volgnummer = $volgnummer;
        return $this;
    }
    /**
     * Get status_historie value
     * @return string|null
     */
    public function getStatus_historie()
    {
        return $this->status_historie;
    }
    /**
     * Set status_historie value
     * @param string $status_historie
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public function setStatus_historie($status_historie = null)
    {
        // validation for constraint: string
        if (!is_null($status_historie) && !is_string($status_historie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status_historie)), __LINE__);
        }
        $this->status_historie = $status_historie;
        return $this;
    }
    /**
     * Get technisch_tijdstip_ontstaan value
     * @return string|null
     */
    public function getTechnisch_tijdstip_ontstaan()
    {
        return $this->technisch_tijdstip_ontstaan;
    }
    /**
     * Set technisch_tijdstip_ontstaan value
     * @param string $technisch_tijdstip_ontstaan
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public function setTechnisch_tijdstip_ontstaan($technisch_tijdstip_ontstaan = null)
    {
        // validation for constraint: string
        if (!is_null($technisch_tijdstip_ontstaan) && !is_string($technisch_tijdstip_ontstaan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technisch_tijdstip_ontstaan)), __LINE__);
        }
        $this->technisch_tijdstip_ontstaan = $technisch_tijdstip_ontstaan;
        return $this;
    }
    /**
     * Get technisch_tijdstip_vervallen value
     * @return string|null
     */
    public function getTechnisch_tijdstip_vervallen()
    {
        return $this->technisch_tijdstip_vervallen;
    }
    /**
     * Set technisch_tijdstip_vervallen value
     * @param string $technisch_tijdstip_vervallen
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
     */
    public function setTechnisch_tijdstip_vervallen($technisch_tijdstip_vervallen = null)
    {
        // validation for constraint: string
        if (!is_null($technisch_tijdstip_vervallen) && !is_string($technisch_tijdstip_vervallen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technisch_tijdstip_vervallen)), __LINE__);
        }
        $this->technisch_tijdstip_vervallen = $technisch_tijdstip_vervallen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KadasterHistorie
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
