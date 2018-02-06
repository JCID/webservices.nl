<?php

namespace Webservices\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for GemeenteStukArray ArrayType
 * @subpackage Arrays
 * @author JCID <info@jcid.nl>
 */
class GemeenteStukArray extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Webservices\StructType\GemeenteStuk[]
     */
    public $item;
    /**
     * Constructor method for GemeenteStukArray
     * @uses GemeenteStukArray::setItem()
     * @param \Webservices\StructType\GemeenteStuk[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Webservices\StructType\GemeenteStuk[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\GemeenteStuk[] $item
     * @return \Webservices\ArrayType\GemeenteStukArray
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $gemeenteStukArrayItemItem) {
            // validation for constraint: itemType
            if (!$gemeenteStukArrayItemItem instanceof \Webservices\StructType\GemeenteStuk) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\GemeenteStuk, "%s" given', is_object($gemeenteStukArrayItemItem) ? get_class($gemeenteStukArrayItemItem) : gettype($gemeenteStukArrayItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\GemeenteStuk $item
     * @return \Webservices\ArrayType\GemeenteStukArray
     */
    public function addToItem(\Webservices\StructType\GemeenteStuk $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Webservices\StructType\GemeenteStuk) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\GemeenteStuk, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Webservices\StructType\GemeenteStuk|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Webservices\StructType\GemeenteStuk|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Webservices\StructType\GemeenteStuk|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Webservices\StructType\GemeenteStuk|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Webservices\StructType\GemeenteStuk|null
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
     * @return \Webservices\ArrayType\GemeenteStukArray
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
