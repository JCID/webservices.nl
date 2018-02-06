<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * kadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType extends AbstractStructBase
{
    /**
     * The object_id
     * @var string
     */
    public $object_id;
    /**
     * Constructor method for
     * kadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType
     * @uses KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType::setObject_id()
     * @param string $object_id
     */
    public function __construct($object_id = null)
    {
        $this
            ->setObject_id($object_id);
    }
    /**
     * Get object_id value
     * @return string|null
     */
    public function getObject_id()
    {
        return $this->object_id;
    }
    /**
     * Set object_id value
     * @param string $object_id
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType
     */
    public function setObject_id($object_id = null)
    {
        // validation for constraint: string
        if (!is_null($object_id) && !is_string($object_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($object_id)), __LINE__);
        }
        $this->object_id = $object_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\KadasterV2GetUittrekselKadastraleKaartByObjectIdRequestType
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
