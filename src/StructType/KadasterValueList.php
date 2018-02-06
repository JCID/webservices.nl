<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KadasterValueList StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterValueList extends AbstractStructBase
{
    /**
     * The list
     * @var \Webservices\ArrayType\KadasterListValueArray
     */
    public $list;
    /**
     * Constructor method for KadasterValueList
     * @uses KadasterValueList::setList()
     * @param \Webservices\ArrayType\KadasterListValueArray $list
     */
    public function __construct(\Webservices\ArrayType\KadasterListValueArray $list = null)
    {
        $this
            ->setList($list);
    }
    /**
     * Get list value
     * @return \Webservices\ArrayType\KadasterListValueArray|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Webservices\ArrayType\KadasterListValueArray $list
     * @return \Webservices\StructType\KadasterValueList
     */
    public function setList(\Webservices\ArrayType\KadasterListValueArray $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterValueList
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
