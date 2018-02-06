<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KoopsommenGevraagdGebied StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KoopsommenGevraagdGebied extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The huisnummer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $huisnummer;
    /**
     * The huisletter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisletter;
    /**
     * The huisnummertoevoeging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisnummertoevoeging;
    /**
     * The betreft_koopsom_gegevens
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2KoopsommenKoopsomGegevensArray
     */
    public $betreft_koopsom_gegevens;
    /**
     * Constructor method for KadasterV2KoopsommenGevraagdGebied
     * @uses KadasterV2KoopsommenGevraagdGebied::setId()
     * @uses KadasterV2KoopsommenGevraagdGebied::setPostcode()
     * @uses KadasterV2KoopsommenGevraagdGebied::setHuisnummer()
     * @uses KadasterV2KoopsommenGevraagdGebied::setHuisletter()
     * @uses KadasterV2KoopsommenGevraagdGebied::setHuisnummertoevoeging()
     * @uses KadasterV2KoopsommenGevraagdGebied::setBetreft_koopsom_gegevens()
     * @param string $id
     * @param string $postcode
     * @param int $huisnummer
     * @param string $huisletter
     * @param string $huisnummertoevoeging
     * @param \Webservices\ArrayType\KadasterV2KoopsommenKoopsomGegevensArray $betreft_koopsom_gegevens
     */
    public function __construct($id = null, $postcode = null, $huisnummer = null, $huisletter = null, $huisnummertoevoeging = null, \Webservices\ArrayType\KadasterV2KoopsommenKoopsomGegevensArray $betreft_koopsom_gegevens = null)
    {
        $this
            ->setId($id)
            ->setPostcode($postcode)
            ->setHuisnummer($huisnummer)
            ->setHuisletter($huisletter)
            ->setHuisnummertoevoeging($huisnummertoevoeging)
            ->setBetreft_koopsom_gegevens($betreft_koopsom_gegevens);
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
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
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
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
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
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
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
     * Get huisletter value
     * @return string|null
     */
    public function getHuisletter()
    {
        return $this->huisletter;
    }
    /**
     * Set huisletter value
     * @param string $huisletter
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
     */
    public function setHuisletter($huisletter = null)
    {
        // validation for constraint: string
        if (!is_null($huisletter) && !is_string($huisletter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisletter)), __LINE__);
        }
        $this->huisletter = $huisletter;
        return $this;
    }
    /**
     * Get huisnummertoevoeging value
     * @return string|null
     */
    public function getHuisnummertoevoeging()
    {
        return $this->huisnummertoevoeging;
    }
    /**
     * Set huisnummertoevoeging value
     * @param string $huisnummertoevoeging
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
     */
    public function setHuisnummertoevoeging($huisnummertoevoeging = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummertoevoeging) && !is_string($huisnummertoevoeging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummertoevoeging)), __LINE__);
        }
        $this->huisnummertoevoeging = $huisnummertoevoeging;
        return $this;
    }
    /**
     * Get betreft_koopsom_gegevens value
     * @return \Webservices\ArrayType\KadasterV2KoopsommenKoopsomGegevensArray|null
     */
    public function getBetreft_koopsom_gegevens()
    {
        return $this->betreft_koopsom_gegevens;
    }
    /**
     * Set betreft_koopsom_gegevens value
     * @param \Webservices\ArrayType\KadasterV2KoopsommenKoopsomGegevensArray $betreft_koopsom_gegevens
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
     */
    public function setBetreft_koopsom_gegevens(\Webservices\ArrayType\KadasterV2KoopsommenKoopsomGegevensArray $betreft_koopsom_gegevens = null)
    {
        $this->betreft_koopsom_gegevens = $betreft_koopsom_gegevens;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KoopsommenGevraagdGebied
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
