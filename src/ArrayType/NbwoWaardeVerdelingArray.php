<?php

namespace Webservices\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NbwoWaardeVerdelingArray ArrayType
 * @subpackage Arrays
 * @author JCID <info@jcid.nl>
 */
class NbwoWaardeVerdelingArray extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Webservices\StructType\NbwoWaardeVerdeling[]
     */
    public $item;
    /**
     * Constructor method for NbwoWaardeVerdelingArray
     * @uses NbwoWaardeVerdelingArray::setItem()
     * @param \Webservices\StructType\NbwoWaardeVerdeling[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Webservices\StructType\NbwoWaardeVerdeling[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\NbwoWaardeVerdeling[] $item
     * @return \Webservices\ArrayType\NbwoWaardeVerdelingArray
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $nbwoWaardeVerdelingArrayItemItem) {
            // validation for constraint: itemType
            if (!$nbwoWaardeVerdelingArrayItemItem instanceof \Webservices\StructType\NbwoWaardeVerdeling) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\NbwoWaardeVerdeling, "%s" given', is_object($nbwoWaardeVerdelingArrayItemItem) ? get_class($nbwoWaardeVerdelingArrayItemItem) : gettype($nbwoWaardeVerdelingArrayItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\NbwoWaardeVerdeling $item
     * @return \Webservices\ArrayType\NbwoWaardeVerdelingArray
     */
    public function addToItem(\Webservices\StructType\NbwoWaardeVerdeling $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Webservices\StructType\NbwoWaardeVerdeling) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\NbwoWaardeVerdeling, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Webservices\StructType\NbwoWaardeVerdeling|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Webservices\StructType\NbwoWaardeVerdeling|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Webservices\StructType\NbwoWaardeVerdeling|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Webservices\StructType\NbwoWaardeVerdeling|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Webservices\StructType\NbwoWaardeVerdeling|null
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
     * @return \Webservices\ArrayType\NbwoWaardeVerdelingArray
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
