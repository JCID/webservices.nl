<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyPublicationList StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyPublicationList extends AbstractStructBase
{
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The publications
     * @var \Webservices\ArrayType\StringArray
     */
    public $publications;
    /**
     * Constructor method for InsolvencyPublicationList
     * @uses InsolvencyPublicationList::setDate()
     * @uses InsolvencyPublicationList::setPublications()
     * @param string $date
     * @param \Webservices\ArrayType\StringArray $publications
     */
    public function __construct($date = null, \Webservices\ArrayType\StringArray $publications = null)
    {
        $this
            ->setDate($date)
            ->setPublications($publications);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Webservices\StructType\InsolvencyPublicationList
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get publications value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getPublications()
    {
        return $this->publications;
    }
    /**
     * Set publications value
     * @param \Webservices\ArrayType\StringArray $publications
     * @return \Webservices\StructType\InsolvencyPublicationList
     */
    public function setPublications(\Webservices\ArrayType\StringArray $publications = null)
    {
        $this->publications = $publications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyPublicationList
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
