<?php

namespace Webservices\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StukMetKadastraleAanduidingArray ArrayType
 * @subpackage Arrays
 * @author JCID <info@jcid.nl>
 */
class StukMetKadastraleAanduidingArray extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Webservices\StructType\StukMetKadastraleAanduiding[]
     */
    public $item;
    /**
     * Constructor method for StukMetKadastraleAanduidingArray
     * @uses StukMetKadastraleAanduidingArray::setItem()
     * @param \Webservices\StructType\StukMetKadastraleAanduiding[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Webservices\StructType\StukMetKadastraleAanduiding[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\StukMetKadastraleAanduiding[] $item
     * @return \Webservices\ArrayType\StukMetKadastraleAanduidingArray
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $stukMetKadastraleAanduidingArrayItemItem) {
            // validation for constraint: itemType
            if (!$stukMetKadastraleAanduidingArrayItemItem instanceof \Webservices\StructType\StukMetKadastraleAanduiding) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\StukMetKadastraleAanduiding, "%s" given', is_object($stukMetKadastraleAanduidingArrayItemItem) ? get_class($stukMetKadastraleAanduidingArrayItemItem) : gettype($stukMetKadastraleAanduidingArrayItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Webservices\StructType\StukMetKadastraleAanduiding $item
     * @return \Webservices\ArrayType\StukMetKadastraleAanduidingArray
     */
    public function addToItem(\Webservices\StructType\StukMetKadastraleAanduiding $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Webservices\StructType\StukMetKadastraleAanduiding) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Webservices\StructType\StukMetKadastraleAanduiding, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Webservices\StructType\StukMetKadastraleAanduiding|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Webservices\StructType\StukMetKadastraleAanduiding|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Webservices\StructType\StukMetKadastraleAanduiding|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Webservices\StructType\StukMetKadastraleAanduiding|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Webservices\StructType\StukMetKadastraleAanduiding|null
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
     * @return \Webservices\ArrayType\StukMetKadastraleAanduidingArray
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
