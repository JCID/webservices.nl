<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterHypotheekStukLijst StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterHypotheekStukLijst extends AbstractStructBase
{
    /**
     * The hypotheek_stukken
     * @var \Webservices\ArrayType\KadasterHypotheekStukArray
     */
    public $hypotheek_stukken;
    /**
     * The indicatie_compleet
     * @var bool
     */
    public $indicatie_compleet;
    /**
     * Constructor method for kadasterHypotheekStukLijst
     * @uses KadasterHypotheekStukLijst::setHypotheek_stukken()
     * @uses KadasterHypotheekStukLijst::setIndicatie_compleet()
     * @param \Webservices\ArrayType\KadasterHypotheekStukArray $hypotheek_stukken
     * @param bool $indicatie_compleet
     */
    public function __construct(\Webservices\ArrayType\KadasterHypotheekStukArray $hypotheek_stukken = null, $indicatie_compleet = null)
    {
        $this
            ->setHypotheek_stukken($hypotheek_stukken)
            ->setIndicatie_compleet($indicatie_compleet);
    }
    /**
     * Get hypotheek_stukken value
     * @return \Webservices\ArrayType\KadasterHypotheekStukArray|null
     */
    public function getHypotheek_stukken()
    {
        return $this->hypotheek_stukken;
    }
    /**
     * Set hypotheek_stukken value
     * @param \Webservices\ArrayType\KadasterHypotheekStukArray $hypotheek_stukken
     * @return \Webservices\StructType\KadasterHypotheekStukLijst
     */
    public function setHypotheek_stukken(\Webservices\ArrayType\KadasterHypotheekStukArray $hypotheek_stukken = null)
    {
        $this->hypotheek_stukken = $hypotheek_stukken;
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
     * @return \Webservices\StructType\KadasterHypotheekStukLijst
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
     * @return \Webservices\StructType\KadasterHypotheekStukLijst
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
