<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2BreukType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2BreukType extends AbstractStructBase
{
    /**
     * The teller
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $teller;
    /**
     * The noemer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $noemer;
    /**
     * Constructor method for KadasterV2BreukType
     * @uses KadasterV2BreukType::setTeller()
     * @uses KadasterV2BreukType::setNoemer()
     * @param int $teller
     * @param int $noemer
     */
    public function __construct($teller = null, $noemer = null)
    {
        $this
            ->setTeller($teller)
            ->setNoemer($noemer);
    }
    /**
     * Get teller value
     * @return int|null
     */
    public function getTeller()
    {
        return $this->teller;
    }
    /**
     * Set teller value
     * @param int $teller
     * @return \Webservices\StructType\KadasterV2BreukType
     */
    public function setTeller($teller = null)
    {
        // validation for constraint: int
        if (!is_null($teller) && !is_numeric($teller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($teller)), __LINE__);
        }
        $this->teller = $teller;
        return $this;
    }
    /**
     * Get noemer value
     * @return int|null
     */
    public function getNoemer()
    {
        return $this->noemer;
    }
    /**
     * Set noemer value
     * @param int $noemer
     * @return \Webservices\StructType\KadasterV2BreukType
     */
    public function setNoemer($noemer = null)
    {
        // validation for constraint: int
        if (!is_null($noemer) && !is_numeric($noemer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noemer)), __LINE__);
        }
        $this->noemer = $noemer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2BreukType
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
