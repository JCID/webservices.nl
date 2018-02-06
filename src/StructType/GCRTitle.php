<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRTitle StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRTitle extends AbstractStructBase
{
    /**
     * The title_code
     * @var int
     */
    public $title_code;
    /**
     * The title_text
     * @var string
     */
    public $title_text;
    /**
     * Constructor method for GCRTitle
     * @uses GCRTitle::setTitle_code()
     * @uses GCRTitle::setTitle_text()
     * @param int $title_code
     * @param string $title_text
     */
    public function __construct($title_code = null, $title_text = null)
    {
        $this
            ->setTitle_code($title_code)
            ->setTitle_text($title_text);
    }
    /**
     * Get title_code value
     * @return int|null
     */
    public function getTitle_code()
    {
        return $this->title_code;
    }
    /**
     * Set title_code value
     * @param int $title_code
     * @return \Webservices\StructType\GCRTitle
     */
    public function setTitle_code($title_code = null)
    {
        // validation for constraint: int
        if (!is_null($title_code) && !is_numeric($title_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($title_code)), __LINE__);
        }
        $this->title_code = $title_code;
        return $this;
    }
    /**
     * Get title_text value
     * @return string|null
     */
    public function getTitle_text()
    {
        return $this->title_text;
    }
    /**
     * Set title_text value
     * @param string $title_text
     * @return \Webservices\StructType\GCRTitle
     */
    public function setTitle_text($title_text = null)
    {
        // validation for constraint: string
        if (!is_null($title_text) && !is_string($title_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title_text)), __LINE__);
        }
        $this->title_text = $title_text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRTitle
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
