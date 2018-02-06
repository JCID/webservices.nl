<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bovagGetMemberByBovagIdRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BovagGetMemberByBovagIdRequestType extends AbstractStructBase
{
    /**
     * The bovag_id
     * @var string
     */
    public $bovag_id;
    /**
     * Constructor method for bovagGetMemberByBovagIdRequestType
     * @uses BovagGetMemberByBovagIdRequestType::setBovag_id()
     * @param string $bovag_id
     */
    public function __construct($bovag_id = null)
    {
        $this
            ->setBovag_id($bovag_id);
    }
    /**
     * Get bovag_id value
     * @return string|null
     */
    public function getBovag_id()
    {
        return $this->bovag_id;
    }
    /**
     * Set bovag_id value
     * @param string $bovag_id
     * @return \Webservices\StructType\BovagGetMemberByBovagIdRequestType
     */
    public function setBovag_id($bovag_id = null)
    {
        // validation for constraint: string
        if (!is_null($bovag_id) && !is_string($bovag_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bovag_id)), __LINE__);
        }
        $this->bovag_id = $bovag_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BovagGetMemberByBovagIdRequestType
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
