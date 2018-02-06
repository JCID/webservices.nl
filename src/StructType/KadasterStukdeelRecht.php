<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterStukdeelRecht StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterStukdeelRecht extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The omschrijving
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $omschrijving;
    /**
     * The aandeel_in_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $aandeel_in_recht;
    /**
     * The totaal_aandeel_in_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $totaal_aandeel_in_recht;
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * The gerelateerd_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $gerelateerd_recht;
    /**
     * Constructor method for kadasterStukdeelRecht
     * @uses KadasterStukdeelRecht::setId()
     * @uses KadasterStukdeelRecht::setType()
     * @uses KadasterStukdeelRecht::setOmschrijving()
     * @uses KadasterStukdeelRecht::setAandeel_in_recht()
     * @uses KadasterStukdeelRecht::setTotaal_aandeel_in_recht()
     * @uses KadasterStukdeelRecht::setObject_id()
     * @uses KadasterStukdeelRecht::setGerelateerd_recht()
     * @param string $id
     * @param string $type
     * @param string $omschrijving
     * @param string $aandeel_in_recht
     * @param string $totaal_aandeel_in_recht
     * @param string $object_id
     * @param string $gerelateerd_recht
     */
    public function __construct($id = null, $type = null, $omschrijving = null, $aandeel_in_recht = null, $totaal_aandeel_in_recht = null, $object_id = null, $gerelateerd_recht = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setOmschrijving($omschrijving)
            ->setAandeel_in_recht($aandeel_in_recht)
            ->setTotaal_aandeel_in_recht($totaal_aandeel_in_recht)
            ->setObject_id($object_id)
            ->setGerelateerd_recht($gerelateerd_recht);
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
     * @return \Webservices\StructType\KadasterStukdeelRecht
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
     * @return \Webservices\StructType\KadasterStukdeelRecht
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
     * @return \Webservices\StructType\KadasterStukdeelRecht
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
     * Get aandeel_in_recht value
     * @return string|null
     */
    public function getAandeel_in_recht()
    {
        return $this->aandeel_in_recht;
    }
    /**
     * Set aandeel_in_recht value
     * @param string $aandeel_in_recht
     * @return \Webservices\StructType\KadasterStukdeelRecht
     */
    public function setAandeel_in_recht($aandeel_in_recht = null)
    {
        // validation for constraint: string
        if (!is_null($aandeel_in_recht) && !is_string($aandeel_in_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aandeel_in_recht)), __LINE__);
        }
        $this->aandeel_in_recht = $aandeel_in_recht;
        return $this;
    }
    /**
     * Get totaal_aandeel_in_recht value
     * @return string|null
     */
    public function getTotaal_aandeel_in_recht()
    {
        return $this->totaal_aandeel_in_recht;
    }
    /**
     * Set totaal_aandeel_in_recht value
     * @param string $totaal_aandeel_in_recht
     * @return \Webservices\StructType\KadasterStukdeelRecht
     */
    public function setTotaal_aandeel_in_recht($totaal_aandeel_in_recht = null)
    {
        // validation for constraint: string
        if (!is_null($totaal_aandeel_in_recht) && !is_string($totaal_aandeel_in_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totaal_aandeel_in_recht)), __LINE__);
        }
        $this->totaal_aandeel_in_recht = $totaal_aandeel_in_recht;
        return $this;
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
     * @return \Webservices\StructType\KadasterStukdeelRecht
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
     * Get gerelateerd_recht value
     * @return string|null
     */
    public function getGerelateerd_recht()
    {
        return $this->gerelateerd_recht;
    }
    /**
     * Set gerelateerd_recht value
     * @param string $gerelateerd_recht
     * @return \Webservices\StructType\KadasterStukdeelRecht
     */
    public function setGerelateerd_recht($gerelateerd_recht = null)
    {
        // validation for constraint: string
        if (!is_null($gerelateerd_recht) && !is_string($gerelateerd_recht)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gerelateerd_recht)), __LINE__);
        }
        $this->gerelateerd_recht = $gerelateerd_recht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterStukdeelRecht
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
