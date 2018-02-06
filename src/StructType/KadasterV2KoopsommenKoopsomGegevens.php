<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2KoopsommenKoopsomGegevens StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2KoopsommenKoopsomGegevens extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The huisnummer_volledig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $huisnummer_volledig;
    /**
     * The omschrijving_cultuur
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving_cultuur;
    /**
     * The kadastrale_grootte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2OppervlakType
     */
    public $kadastrale_grootte;
    /**
     * The koopsom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType
     */
    public $koopsom;
    /**
     * Constructor method for KadasterV2KoopsommenKoopsomGegevens
     * @uses KadasterV2KoopsommenKoopsomGegevens::setId()
     * @uses KadasterV2KoopsommenKoopsomGegevens::setHuisnummer_volledig()
     * @uses KadasterV2KoopsommenKoopsomGegevens::setOmschrijving_cultuur()
     * @uses KadasterV2KoopsommenKoopsomGegevens::setKadastrale_grootte()
     * @uses KadasterV2KoopsommenKoopsomGegevens::setKoopsom()
     * @param string $id
     * @param string $huisnummer_volledig
     * @param string $omschrijving_cultuur
     * @param \Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte
     * @param \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType $koopsom
     */
    public function __construct($id = null, $huisnummer_volledig = null, $omschrijving_cultuur = null, \Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte = null, \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType $koopsom = null)
    {
        $this
            ->setId($id)
            ->setHuisnummer_volledig($huisnummer_volledig)
            ->setOmschrijving_cultuur($omschrijving_cultuur)
            ->setKadastrale_grootte($kadastrale_grootte)
            ->setKoopsom($koopsom);
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
     * @return \Webservices\StructType\KadasterV2KoopsommenKoopsomGegevens
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
     * Get huisnummer_volledig value
     * @return string|null
     */
    public function getHuisnummer_volledig()
    {
        return $this->huisnummer_volledig;
    }
    /**
     * Set huisnummer_volledig value
     * @param string $huisnummer_volledig
     * @return \Webservices\StructType\KadasterV2KoopsommenKoopsomGegevens
     */
    public function setHuisnummer_volledig($huisnummer_volledig = null)
    {
        // validation for constraint: string
        if (!is_null($huisnummer_volledig) && !is_string($huisnummer_volledig)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($huisnummer_volledig)), __LINE__);
        }
        $this->huisnummer_volledig = $huisnummer_volledig;
        return $this;
    }
    /**
     * Get omschrijving_cultuur value
     * @return string|null
     */
    public function getOmschrijving_cultuur()
    {
        return $this->omschrijving_cultuur;
    }
    /**
     * Set omschrijving_cultuur value
     * @param string $omschrijving_cultuur
     * @return \Webservices\StructType\KadasterV2KoopsommenKoopsomGegevens
     */
    public function setOmschrijving_cultuur($omschrijving_cultuur = null)
    {
        // validation for constraint: string
        if (!is_null($omschrijving_cultuur) && !is_string($omschrijving_cultuur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($omschrijving_cultuur)), __LINE__);
        }
        $this->omschrijving_cultuur = $omschrijving_cultuur;
        return $this;
    }
    /**
     * Get kadastrale_grootte value
     * @return \Webservices\StructType\KadasterV2OppervlakType|null
     */
    public function getKadastrale_grootte()
    {
        return $this->kadastrale_grootte;
    }
    /**
     * Set kadastrale_grootte value
     * @param \Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte
     * @return \Webservices\StructType\KadasterV2KoopsommenKoopsomGegevens
     */
    public function setKadastrale_grootte(\Webservices\StructType\KadasterV2OppervlakType $kadastrale_grootte = null)
    {
        $this->kadastrale_grootte = $kadastrale_grootte;
        return $this;
    }
    /**
     * Get koopsom value
     * @return \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType|null
     */
    public function getKoopsom()
    {
        return $this->koopsom;
    }
    /**
     * Set koopsom value
     * @param \Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType $koopsom
     * @return \Webservices\StructType\KadasterV2KoopsommenKoopsomGegevens
     */
    public function setKoopsom(\Webservices\StructType\KadasterV2KoopsommenTypeKoopsomType $koopsom = null)
    {
        $this->koopsom = $koopsom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2KoopsommenKoopsomGegevens
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
