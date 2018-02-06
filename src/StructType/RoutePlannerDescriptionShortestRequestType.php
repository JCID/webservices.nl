<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routePlannerDescriptionShortestRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class RoutePlannerDescriptionShortestRequestType extends AbstractStructBase
{
    /**
     * The postcodefrom
     * @var string
     */
    public $postcodefrom;
    /**
     * The postcodeto
     * @var string
     */
    public $postcodeto;
    /**
     * The english
     * @var bool
     */
    public $english;
    /**
     * Constructor method for routePlannerDescriptionShortestRequestType
     * @uses RoutePlannerDescriptionShortestRequestType::setPostcodefrom()
     * @uses RoutePlannerDescriptionShortestRequestType::setPostcodeto()
     * @uses RoutePlannerDescriptionShortestRequestType::setEnglish()
     * @param string $postcodefrom
     * @param string $postcodeto
     * @param bool $english
     */
    public function __construct($postcodefrom = null, $postcodeto = null, $english = null)
    {
        $this
            ->setPostcodefrom($postcodefrom)
            ->setPostcodeto($postcodeto)
            ->setEnglish($english);
    }
    /**
     * Get postcodefrom value
     * @return string|null
     */
    public function getPostcodefrom()
    {
        return $this->postcodefrom;
    }
    /**
     * Set postcodefrom value
     * @param string $postcodefrom
     * @return \Webservices\StructType\RoutePlannerDescriptionShortestRequestType
     */
    public function setPostcodefrom($postcodefrom = null)
    {
        // validation for constraint: string
        if (!is_null($postcodefrom) && !is_string($postcodefrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcodefrom)), __LINE__);
        }
        $this->postcodefrom = $postcodefrom;
        return $this;
    }
    /**
     * Get postcodeto value
     * @return string|null
     */
    public function getPostcodeto()
    {
        return $this->postcodeto;
    }
    /**
     * Set postcodeto value
     * @param string $postcodeto
     * @return \Webservices\StructType\RoutePlannerDescriptionShortestRequestType
     */
    public function setPostcodeto($postcodeto = null)
    {
        // validation for constraint: string
        if (!is_null($postcodeto) && !is_string($postcodeto)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcodeto)), __LINE__);
        }
        $this->postcodeto = $postcodeto;
        return $this;
    }
    /**
     * Get english value
     * @return bool|null
     */
    public function getEnglish()
    {
        return $this->english;
    }
    /**
     * Set english value
     * @param bool $english
     * @return \Webservices\StructType\RoutePlannerDescriptionShortestRequestType
     */
    public function setEnglish($english = null)
    {
        // validation for constraint: boolean
        if (!is_null($english) && !is_bool($english)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($english)), __LINE__);
        }
        $this->english = $english;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\RoutePlannerDescriptionShortestRequestType
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
