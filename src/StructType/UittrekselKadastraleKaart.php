<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UittrekselKadastraleKaart StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class UittrekselKadastraleKaart extends AbstractStructBase
{
    /**
     * The kaart
     * @var string
     */
    public $kaart;
    /**
     * The kadastrale_aanduidingen
     * @var \Webservices\ArrayType\KadastraleAanduidingArray
     */
    public $kadastrale_aanduidingen;
    /**
     * The afbeeldingen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\Base64BinaryArray
     */
    public $afbeeldingen;
    /**
     * Constructor method for UittrekselKadastraleKaart
     * @uses UittrekselKadastraleKaart::setKaart()
     * @uses UittrekselKadastraleKaart::setKadastrale_aanduidingen()
     * @uses UittrekselKadastraleKaart::setAfbeeldingen()
     * @param string $kaart
     * @param \Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     */
    public function __construct($kaart = null, \Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen = null, \Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this
            ->setKaart($kaart)
            ->setKadastrale_aanduidingen($kadastrale_aanduidingen)
            ->setAfbeeldingen($afbeeldingen);
    }
    /**
     * Get kaart value
     * @return string|null
     */
    public function getKaart()
    {
        return $this->kaart;
    }
    /**
     * Set kaart value
     * @param string $kaart
     * @return \Webservices\StructType\UittrekselKadastraleKaart
     */
    public function setKaart($kaart = null)
    {
        // validation for constraint: string
        if (!is_null($kaart) && !is_string($kaart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kaart)), __LINE__);
        }
        $this->kaart = $kaart;
        return $this;
    }
    /**
     * Get kadastrale_aanduidingen value
     * @return \Webservices\ArrayType\KadastraleAanduidingArray|null
     */
    public function getKadastrale_aanduidingen()
    {
        return $this->kadastrale_aanduidingen;
    }
    /**
     * Set kadastrale_aanduidingen value
     * @param \Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen
     * @return \Webservices\StructType\UittrekselKadastraleKaart
     */
    public function setKadastrale_aanduidingen(\Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen = null)
    {
        $this->kadastrale_aanduidingen = $kadastrale_aanduidingen;
        return $this;
    }
    /**
     * Get afbeeldingen value
     * @return \Webservices\ArrayType\Base64BinaryArray|null
     */
    public function getAfbeeldingen()
    {
        return $this->afbeeldingen;
    }
    /**
     * Set afbeeldingen value
     * @param \Webservices\ArrayType\Base64BinaryArray $afbeeldingen
     * @return \Webservices\StructType\UittrekselKadastraleKaart
     */
    public function setAfbeeldingen(\Webservices\ArrayType\Base64BinaryArray $afbeeldingen = null)
    {
        $this->afbeeldingen = $afbeeldingen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\UittrekselKadastraleKaart
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
