<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterV2Van StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2Van extends AbstractStructBase
{
    /**
     * The zakelijk_recht
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadasterV2ZakelijkRecht
     */
    public $zakelijk_recht;
    /**
     * Constructor method for KadasterV2Van
     * @uses KadasterV2Van::setZakelijk_recht()
     * @param \Webservices\StructType\KadasterV2ZakelijkRecht $zakelijk_recht
     */
    public function __construct(\Webservices\StructType\KadasterV2ZakelijkRecht $zakelijk_recht = null)
    {
        $this
            ->setZakelijk_recht($zakelijk_recht);
    }
    /**
     * Get zakelijk_recht value
     * @return \Webservices\StructType\KadasterV2ZakelijkRecht|null
     */
    public function getZakelijk_recht()
    {
        return $this->zakelijk_recht;
    }
    /**
     * Set zakelijk_recht value
     * @param \Webservices\StructType\KadasterV2ZakelijkRecht $zakelijk_recht
     * @return \Webservices\StructType\KadasterV2Van
     */
    public function setZakelijk_recht(\Webservices\StructType\KadasterV2ZakelijkRecht $zakelijk_recht = null)
    {
        $this->zakelijk_recht = $zakelijk_recht;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2Van
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
