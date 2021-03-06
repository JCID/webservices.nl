<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterEigendomsBerichtPerceelV2ResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterEigendomsBerichtPerceelV2ResponseType extends AbstractStructBase
{
    /**
     * The berichtobjectresultaat
     * @var \Webservices\StructType\BerichtObjectResultaatV2
     */
    public $berichtobjectresultaat;
    /**
     * Constructor method for kadasterEigendomsBerichtPerceelV2ResponseType
     * @uses KadasterEigendomsBerichtPerceelV2ResponseType::setBerichtobjectresultaat()
     * @param \Webservices\StructType\BerichtObjectResultaatV2 $berichtobjectresultaat
     */
    public function __construct(\Webservices\StructType\BerichtObjectResultaatV2 $berichtobjectresultaat = null)
    {
        $this
            ->setBerichtobjectresultaat($berichtobjectresultaat);
    }
    /**
     * Get berichtobjectresultaat value
     * @return \Webservices\StructType\BerichtObjectResultaatV2|null
     */
    public function getBerichtobjectresultaat()
    {
        return $this->berichtobjectresultaat;
    }
    /**
     * Set berichtobjectresultaat value
     * @param \Webservices\StructType\BerichtObjectResultaatV2 $berichtobjectresultaat
     * @return \Webservices\StructType\KadasterEigendomsBerichtPerceelV2ResponseType
     */
    public function setBerichtobjectresultaat(\Webservices\StructType\BerichtObjectResultaatV2 $berichtobjectresultaat = null)
    {
        $this->berichtobjectresultaat = $berichtobjectresultaat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterEigendomsBerichtPerceelV2ResponseType
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
