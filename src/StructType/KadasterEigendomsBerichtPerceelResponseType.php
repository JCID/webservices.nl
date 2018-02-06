<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterEigendomsBerichtPerceelResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterEigendomsBerichtPerceelResponseType extends AbstractStructBase
{
    /**
     * The berichtobjectresultaat
     * @var \Webservices\StructType\BerichtObjectResultaat
     */
    public $berichtobjectresultaat;
    /**
     * Constructor method for kadasterEigendomsBerichtPerceelResponseType
     * @uses KadasterEigendomsBerichtPerceelResponseType::setBerichtobjectresultaat()
     * @param \Webservices\StructType\BerichtObjectResultaat $berichtobjectresultaat
     */
    public function __construct(\Webservices\StructType\BerichtObjectResultaat $berichtobjectresultaat = null)
    {
        $this
            ->setBerichtobjectresultaat($berichtobjectresultaat);
    }
    /**
     * Get berichtobjectresultaat value
     * @return \Webservices\StructType\BerichtObjectResultaat|null
     */
    public function getBerichtobjectresultaat()
    {
        return $this->berichtobjectresultaat;
    }
    /**
     * Set berichtobjectresultaat value
     * @param \Webservices\StructType\BerichtObjectResultaat $berichtobjectresultaat
     * @return \Webservices\StructType\KadasterEigendomsBerichtPerceelResponseType
     */
    public function setBerichtobjectresultaat(\Webservices\StructType\BerichtObjectResultaat $berichtobjectresultaat = null)
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
     * @return \Webservices\StructType\KadasterEigendomsBerichtPerceelResponseType
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
