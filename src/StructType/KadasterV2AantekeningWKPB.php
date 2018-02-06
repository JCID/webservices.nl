<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2AantekeningWKPB StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2AantekeningWKPB extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The aantekening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType
     */
    public $aantekening;
    /**
     * Constructor method for KadasterV2AantekeningWKPB
     * @uses KadasterV2AantekeningWKPB::setId()
     * @uses KadasterV2AantekeningWKPB::setAantekening()
     * @param string $id
     * @param \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType $aantekening
     */
    public function __construct($id = null, \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType $aantekening = null)
    {
        $this
            ->setId($id)
            ->setAantekening($aantekening);
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
     * @return \Webservices\StructType\KadasterV2AantekeningWKPB
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
     * Get aantekening value
     * @return \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType|null
     */
    public function getAantekening()
    {
        return $this->aantekening;
    }
    /**
     * Set aantekening value
     * @param \Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType $aantekening
     * @return \Webservices\StructType\KadasterV2AantekeningWKPB
     */
    public function setAantekening(\Webservices\StructType\KadasterV2PubliekrechtelijkeBeperkingType $aantekening = null)
    {
        $this->aantekening = $aantekening;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2AantekeningWKPB
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
