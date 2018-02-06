<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressReeksPhraseSearchResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class AddressReeksPhraseSearchResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\PCReeksSearchPartsPagedResult
     */
    public $out;
    /**
     * Constructor method for addressReeksPhraseSearchResponseType
     * @uses AddressReeksPhraseSearchResponseType::setOut()
     * @param \Webservices\StructType\PCReeksSearchPartsPagedResult $out
     */
    public function __construct(\Webservices\StructType\PCReeksSearchPartsPagedResult $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\PCReeksSearchPartsPagedResult|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\PCReeksSearchPartsPagedResult $out
     * @return \Webservices\StructType\AddressReeksPhraseSearchResponseType
     */
    public function setOut(\Webservices\StructType\PCReeksSearchPartsPagedResult $out = null)
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
     * @return \Webservices\StructType\AddressReeksPhraseSearchResponseType
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
