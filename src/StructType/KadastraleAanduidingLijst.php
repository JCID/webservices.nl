<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadastraleAanduidingLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadastraleAanduidingLijst extends AbstractStructBase
{
    /**
     * The kadastrale_aanduidingen
     * @var \Webservices\ArrayType\KadastraleAanduidingArray
     */
    public $kadastrale_aanduidingen;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for KadastraleAanduidingLijst
     * @uses KadastraleAanduidingLijst::setKadastrale_aanduidingen()
     * @uses KadastraleAanduidingLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen = null, $indicatie_compleet = null)
    {
        $this
            ->setKadastrale_aanduidingen($kadastrale_aanduidingen)
            ->setIndicatie_compleet($indicatie_compleet);
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
     * @return \Webservices\StructType\KadastraleAanduidingLijst
     */
    public function setKadastrale_aanduidingen(\Webservices\ArrayType\KadastraleAanduidingArray $kadastrale_aanduidingen = null)
    {
        $this->kadastrale_aanduidingen = $kadastrale_aanduidingen;
        return $this;
    }
    /**
     * Get indicatie_compleet value
     * @return bool|null
     */
    public function getIndicatie_compleet()
    {
        return $this->indicatie_compleet;
    }
    /**
     * Set indicatie_compleet value
     * @param bool $indicatie_compleet
     * @return \Webservices\StructType\KadastraleAanduidingLijst
     */
    public function setIndicatie_compleet($indicatie_compleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatie_compleet) && !is_bool($indicatie_compleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($indicatie_compleet)), __LINE__);
        }
        $this->indicatie_compleet = $indicatie_compleet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadastraleAanduidingLijst
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
