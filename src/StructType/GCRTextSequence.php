<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRTextSequence StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRTextSequence extends AbstractStructBase
{
    /**
     * The sequence_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $sequence_number;
    /**
     * The text
     * @var string
     */
    public $text;
    /**
     * Constructor method for GCRTextSequence
     * @uses GCRTextSequence::setSequence_number()
     * @uses GCRTextSequence::setText()
     * @param int $sequence_number
     * @param string $text
     */
    public function __construct($sequence_number = null, $text = null)
    {
        $this
            ->setSequence_number($sequence_number)
            ->setText($text);
    }
    /**
     * Get sequence_number value
     * @return int|null
     */
    public function getSequence_number()
    {
        return $this->sequence_number;
    }
    /**
     * Set sequence_number value
     * @param int $sequence_number
     * @return \Webservices\StructType\GCRTextSequence
     */
    public function setSequence_number($sequence_number = null)
    {
        // validation for constraint: int
        if (!is_null($sequence_number) && !is_numeric($sequence_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence_number)), __LINE__);
        }
        $this->sequence_number = $sequence_number;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Webservices\StructType\GCRTextSequence
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRTextSequence
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
