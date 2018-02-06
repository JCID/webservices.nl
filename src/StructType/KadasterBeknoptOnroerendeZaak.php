<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterBeknoptOnroerendeZaak StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterBeknoptOnroerendeZaak extends AbstractStructBase
{
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * The kadastrale_aanduiding
     * @var \Webservices\StructType\KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The voorlopige_aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $voorlopige_aantekening;
    /**
     * The meerdere_splitsingen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $meerdere_splitsingen;
    /**
     * The gerechtigde
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterPersoon
     */
    public $gerechtigde;
    /**
     * The onverwerkte_documenten
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterHypotheekStukLijst
     */
    public $onverwerkte_documenten;
    /**
     * The grootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $grootte;
    /**
     * The vastgestelde_grootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $vastgestelde_grootte;
    /**
     * Constructor method for kadasterBeknoptOnroerendeZaak
     * @uses KadasterBeknoptOnroerendeZaak::setObject_id()
     * @uses KadasterBeknoptOnroerendeZaak::setKadastrale_aanduiding()
     * @uses KadasterBeknoptOnroerendeZaak::setType()
     * @uses KadasterBeknoptOnroerendeZaak::setVoorlopige_aantekening()
     * @uses KadasterBeknoptOnroerendeZaak::setMeerdere_splitsingen()
     * @uses KadasterBeknoptOnroerendeZaak::setGerechtigde()
     * @uses KadasterBeknoptOnroerendeZaak::setOnverwerkte_documenten()
     * @uses KadasterBeknoptOnroerendeZaak::setGrootte()
     * @uses KadasterBeknoptOnroerendeZaak::setVastgestelde_grootte()
     * @param string $object_id
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @param string $type
     * @param bool $voorlopige_aantekening
     * @param bool $meerdere_splitsingen
     * @param \Webservices\StructType\KadasterPersoon $gerechtigde
     * @param \Webservices\StructType\KadasterHypotheekStukLijst $onverwerkte_documenten
     * @param float $grootte
     * @param bool $vastgestelde_grootte
     */
    public function __construct($object_id = null, \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null, $type = null, $voorlopige_aantekening = null, $meerdere_splitsingen = null, \Webservices\StructType\KadasterPersoon $gerechtigde = null, \Webservices\StructType\KadasterHypotheekStukLijst $onverwerkte_documenten = null, $grootte = null, $vastgestelde_grootte = null)
    {
        $this
            ->setObject_id($object_id)
            ->setKadastrale_aanduiding($kadastrale_aanduiding)
            ->setType($type)
            ->setVoorlopige_aantekening($voorlopige_aantekening)
            ->setMeerdere_splitsingen($meerdere_splitsingen)
            ->setGerechtigde($gerechtigde)
            ->setOnverwerkte_documenten($onverwerkte_documenten)
            ->setGrootte($grootte)
            ->setVastgestelde_grootte($vastgestelde_grootte);
    }
    /**
     * Get object_id value
     * @return string|null
     */
    public function getObject_id()
    {
        return $this->object_id;
    }
    /**
     * Set object_id value
     * @param string $object_id
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setObject_id($object_id = null)
    {
        // validation for constraint: string
        if (!is_null($object_id) && !is_string($object_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($object_id)), __LINE__);
        }
        $this->object_id = $object_id;
        return $this;
    }
    /**
     * Get kadastrale_aanduiding value
     * @return \Webservices\StructType\KadastraleAanduiding|null
     */
    public function getKadastrale_aanduiding()
    {
        return $this->kadastrale_aanduiding;
    }
    /**
     * Set kadastrale_aanduiding value
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get voorlopige_aantekening value
     * @return bool|null
     */
    public function getVoorlopige_aantekening()
    {
        return $this->voorlopige_aantekening;
    }
    /**
     * Set voorlopige_aantekening value
     * @param bool $voorlopige_aantekening
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setVoorlopige_aantekening($voorlopige_aantekening = null)
    {
        // validation for constraint: boolean
        if (!is_null($voorlopige_aantekening) && !is_bool($voorlopige_aantekening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($voorlopige_aantekening)), __LINE__);
        }
        $this->voorlopige_aantekening = $voorlopige_aantekening;
        return $this;
    }
    /**
     * Get meerdere_splitsingen value
     * @return bool|null
     */
    public function getMeerdere_splitsingen()
    {
        return $this->meerdere_splitsingen;
    }
    /**
     * Set meerdere_splitsingen value
     * @param bool $meerdere_splitsingen
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setMeerdere_splitsingen($meerdere_splitsingen = null)
    {
        // validation for constraint: boolean
        if (!is_null($meerdere_splitsingen) && !is_bool($meerdere_splitsingen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($meerdere_splitsingen)), __LINE__);
        }
        $this->meerdere_splitsingen = $meerdere_splitsingen;
        return $this;
    }
    /**
     * Get gerechtigde value
     * @return \Webservices\StructType\KadasterPersoon|null
     */
    public function getGerechtigde()
    {
        return $this->gerechtigde;
    }
    /**
     * Set gerechtigde value
     * @param \Webservices\StructType\KadasterPersoon $gerechtigde
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setGerechtigde(\Webservices\StructType\KadasterPersoon $gerechtigde = null)
    {
        $this->gerechtigde = $gerechtigde;
        return $this;
    }
    /**
     * Get onverwerkte_documenten value
     * @return \Webservices\StructType\KadasterHypotheekStukLijst|null
     */
    public function getOnverwerkte_documenten()
    {
        return $this->onverwerkte_documenten;
    }
    /**
     * Set onverwerkte_documenten value
     * @param \Webservices\StructType\KadasterHypotheekStukLijst $onverwerkte_documenten
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setOnverwerkte_documenten(\Webservices\StructType\KadasterHypotheekStukLijst $onverwerkte_documenten = null)
    {
        $this->onverwerkte_documenten = $onverwerkte_documenten;
        return $this;
    }
    /**
     * Get grootte value
     * @return float|null
     */
    public function getGrootte()
    {
        return $this->grootte;
    }
    /**
     * Set grootte value
     * @param float $grootte
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setGrootte($grootte = null)
    {
        $this->grootte = $grootte;
        return $this;
    }
    /**
     * Get vastgestelde_grootte value
     * @return bool|null
     */
    public function getVastgestelde_grootte()
    {
        return $this->vastgestelde_grootte;
    }
    /**
     * Set vastgestelde_grootte value
     * @param bool $vastgestelde_grootte
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
     */
    public function setVastgestelde_grootte($vastgestelde_grootte = null)
    {
        // validation for constraint: boolean
        if (!is_null($vastgestelde_grootte) && !is_bool($vastgestelde_grootte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vastgestelde_grootte)), __LINE__);
        }
        $this->vastgestelde_grootte = $vastgestelde_grootte;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterBeknoptOnroerendeZaak
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
