<?php

namespace Webservices\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BusinessReferenceArray ArrayType
 * @subpackage Arrays
 * @author JCID <info@jcid.nl>
 */
class BusinessReferenceArray extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Webservices\StructType\BusinessReference[]
     */
    public $item;
    /**
     * Constructor method for BusinessReferenceArray
     * @uses BusinessReferenceArray::setItem()
     * @param \Webservices\StructType\BusinessReference[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Webservices\StructType\BusinessReference[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\BusinessReference[] $item
     * @return \Webservices\ArrayType\BusinessReferenceArray
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $businessReferenceArrayItemItem) {
            // validation for constraint: itemType
            if (!$businessReferenceArrayItemItem instanceof \Webservices\StructType\BusinessReference) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\BusinessReference, "%s" given', is_object($businessReferenceArrayItemItem) ? get_class($businessReferenceArrayItemItem) : gettype($businessReferenceArrayItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\BusinessReference $item
     * @return \Webservices\ArrayType\BusinessReferenceArray
     */
    public function addToItem(\Webservices\StructType\BusinessReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Webservices\StructType\BusinessReference) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\BusinessReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Webservices\StructType\BusinessReference|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Webservices\StructType\BusinessReference|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Webservices\StructType\BusinessReference|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Webservices\StructType\BusinessReference|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Webservices\StructType\BusinessReference|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\ArrayType\BusinessReferenceArray
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
