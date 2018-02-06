<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2RDCoordinate StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2RDCoordinate extends AbstractStructBase
{
    /**
     * The rdx
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $rdx;
    /**
     * The rdy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $rdy;
    /**
     * Constructor method for KadasterV2RDCoordinate
     * @uses KadasterV2RDCoordinate::setRdx()
     * @uses KadasterV2RDCoordinate::setRdy()
     * @param int $rdx
     * @param int $rdy
     */
    public function __construct($rdx = null, $rdy = null)
    {
        $this
            ->setRdx($rdx)
            ->setRdy($rdy);
    }
    /**
     * Get rdx value
     * @return int|null
     */
    public function getRdx()
    {
        return $this->rdx;
    }
    /**
     * Set rdx value
     * @param int $rdx
     * @return \Webservices\StructType\KadasterV2RDCoordinate
     */
    public function setRdx($rdx = null)
    {
        // validation for constraint: int
        if (!is_null($rdx) && !is_numeric($rdx)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rdx)), __LINE__);
        }
        $this->rdx = $rdx;
        return $this;
    }
    /**
     * Get rdy value
     * @return int|null
     */
    public function getRdy()
    {
        return $this->rdy;
    }
    /**
     * Set rdy value
     * @param int $rdy
     * @return \Webservices\StructType\KadasterV2RDCoordinate
     */
    public function setRdy($rdy = null)
    {
        // validation for constraint: int
        if (!is_null($rdy) && !is_numeric($rdy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rdy)), __LINE__);
        }
        $this->rdy = $rdy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2RDCoordinate
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
