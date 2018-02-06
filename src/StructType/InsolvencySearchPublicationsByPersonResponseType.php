<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insolvencySearchPublicationsByPersonResponseType
 * StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencySearchPublicationsByPersonResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\InsolvencyPublicationList
     */
    public $out;
    /**
     * Constructor method for insolvencySearchPublicationsByPersonResponseType
     * @uses InsolvencySearchPublicationsByPersonResponseType::setOut()
     * @param \Webservices\StructType\InsolvencyPublicationList $out
     */
    public function __construct(\Webservices\StructType\InsolvencyPublicationList $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\InsolvencyPublicationList|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\InsolvencyPublicationList $out
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonResponseType
     */
    public function setOut(\Webservices\StructType\InsolvencyPublicationList $out = null)
    {
        $this->out = $out;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencySearchPublicationsByPersonResponseType
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
