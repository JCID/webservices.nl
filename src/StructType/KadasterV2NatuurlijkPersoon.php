<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2NatuurlijkPersoon StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2NatuurlijkPersoon extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The identificatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificatie;
    /**
     * The indicatie_overleden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_overleden;
    /**
     * The betreft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon
     */
    public $betreft;
    /**
     * The indicatie_beschikkingsbevoegdheid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $indicatie_beschikkingsbevoegdheid;
    /**
     * The postlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AddressLocatie
     */
    public $postlocatie;
    /**
     * The woonlocatie
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2AddressLocatie
     */
    public $woonlocatie;
    /**
     * The is_vermeld_in
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\KadasterV2StukdeelArray
     */
    public $is_vermeld_in;
    /**
     * Constructor method for KadasterV2NatuurlijkPersoon
     * @uses KadasterV2NatuurlijkPersoon::setId()
     * @uses KadasterV2NatuurlijkPersoon::setIdentificatie()
     * @uses KadasterV2NatuurlijkPersoon::setIndicatie_overleden()
     * @uses KadasterV2NatuurlijkPersoon::setBetreft()
     * @uses KadasterV2NatuurlijkPersoon::setIndicatie_beschikkingsbevoegdheid()
     * @uses KadasterV2NatuurlijkPersoon::setPostlocatie()
     * @uses KadasterV2NatuurlijkPersoon::setWoonlocatie()
     * @uses KadasterV2NatuurlijkPersoon::setIs_vermeld_in()
     * @param string $id
     * @param string $identificatie
     * @param bool $indicatie_overleden
     * @param \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon $betreft
     * @param bool $indicatie_beschikkingsbevoegdheid
     * @param \Webservices\StructType\KadasterV2AddressLocatie $postlocatie
     * @param \Webservices\StructType\KadasterV2AddressLocatie $woonlocatie
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     */
    public function __construct($id = null, $identificatie = null, $indicatie_overleden = null, \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon $betreft = null, $indicatie_beschikkingsbevoegdheid = null, \Webservices\StructType\KadasterV2AddressLocatie $postlocatie = null, \Webservices\StructType\KadasterV2AddressLocatie $woonlocatie = null, \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null)
    {
        $this
            ->setId($id)
            ->setIdentificatie($identificatie)
            ->setIndicatie_overleden($indicatie_overleden)
            ->setBetreft($betreft)
            ->setIndicatie_beschikkingsbevoegdheid($indicatie_beschikkingsbevoegdheid)
            ->setPostlocatie($postlocatie)
            ->setWoonlocatie($woonlocatie)
            ->setIs_vermeld_in($is_vermeld_in);
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
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
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
     * Get identificatie value
     * @return string|null
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }
    /**
     * Set identificatie value
     * @param string $identificatie
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setIdentificatie($identificatie = null)
    {
        // validation for constraint: string
        if (!is_null($identificatie) && !is_string($identificatie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificatie)), __LINE__);
        }
        $this->identificatie = $identificatie;
        return $this;
    }
    /**
     * Get indicatie_overleden value
     * @return bool|null
     */
    public function getIndicatie_overleden()
    {
        return $this->indicatie_overleden;
    }
    /**
     * Set indicatie_overleden value
     * @param bool $indicatie_overleden
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setIndicatie_overleden($indicatie_overleden = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_overleden) && !is_bool($indicatie_overleden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_overleden)), __LINE__);
        }
        $this->indicatie_overleden = $indicatie_overleden;
        return $this;
    }
    /**
     * Get betreft value
     * @return \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon|null
     */
    public function getBetreft()
    {
        return $this->betreft;
    }
    /**
     * Set betreft value
     * @param \Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon $betreft
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setBetreft(\Webservices\StructType\KadasterV2BetreftNatuurlijkPersoon $betreft = null)
    {
        $this->betreft = $betreft;
        return $this;
    }
    /**
     * Get indicatie_beschikkingsbevoegdheid value
     * @return bool|null
     */
    public function getIndicatie_beschikkingsbevoegdheid()
    {
        return $this->indicatie_beschikkingsbevoegdheid;
    }
    /**
     * Set indicatie_beschikkingsbevoegdheid value
     * @param bool $indicatie_beschikkingsbevoegdheid
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setIndicatie_beschikkingsbevoegdheid($indicatie_beschikkingsbevoegdheid = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_beschikkingsbevoegdheid) && !is_bool($indicatie_beschikkingsbevoegdheid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_beschikkingsbevoegdheid)), __LINE__);
        }
        $this->indicatie_beschikkingsbevoegdheid = $indicatie_beschikkingsbevoegdheid;
        return $this;
    }
    /**
     * Get postlocatie value
     * @return \Webservices\StructType\KadasterV2AddressLocatie|null
     */
    public function getPostlocatie()
    {
        return $this->postlocatie;
    }
    /**
     * Set postlocatie value
     * @param \Webservices\StructType\KadasterV2AddressLocatie $postlocatie
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setPostlocatie(\Webservices\StructType\KadasterV2AddressLocatie $postlocatie = null)
    {
        $this->postlocatie = $postlocatie;
        return $this;
    }
    /**
     * Get woonlocatie value
     * @return \Webservices\StructType\KadasterV2AddressLocatie|null
     */
    public function getWoonlocatie()
    {
        return $this->woonlocatie;
    }
    /**
     * Set woonlocatie value
     * @param \Webservices\StructType\KadasterV2AddressLocatie $woonlocatie
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setWoonlocatie(\Webservices\StructType\KadasterV2AddressLocatie $woonlocatie = null)
    {
        $this->woonlocatie = $woonlocatie;
        return $this;
    }
    /**
     * Get is_vermeld_in value
     * @return \Webservices\ArrayType\KadasterV2StukdeelArray|null
     */
    public function getIs_vermeld_in()
    {
        return $this->is_vermeld_in;
    }
    /**
     * Set is_vermeld_in value
     * @param \Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
     */
    public function setIs_vermeld_in(\Webservices\ArrayType\KadasterV2StukdeelArray $is_vermeld_in = null)
    {
        $this->is_vermeld_in = $is_vermeld_in;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2NatuurlijkPersoon
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
