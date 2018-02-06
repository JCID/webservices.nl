<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kadasterEigendomsBerichtPostcodeResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterEigendomsBerichtPostcodeResponseType extends AbstractStructBase
{
    /**
     * The berichtobjectresultaat
     * @var \Webservices\StructType\BerichtObjectResultaat
     */
    public $berichtobjectresultaat;
    /**
     * Constructor method for kadasterEigendomsBerichtPostcodeResponseType
     * @uses KadasterEigendomsBerichtPostcodeResponseType::setBerichtobjectresultaat()
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
     * @return \Webservices\StructType\KadasterEigendomsBerichtPostcodeResponseType
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
     * @return \Webservices\StructType\KadasterEigendomsBerichtPostcodeResponseType
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
