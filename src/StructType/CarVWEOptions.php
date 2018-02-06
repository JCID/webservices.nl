<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEOptions StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEOptions extends AbstractStructBase
{
    /**
     * The options_standard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CarVWEOptionsStandard
     */
    public $options_standard;
    /**
     * The options_manufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CarVWEOptionsManufacture
     */
    public $options_manufacture;
    /**
     * The options_package
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\CarVWEOptionsPackage
     */
    public $options_package;
    /**
     * Constructor method for CarVWEOptions
     * @uses CarVWEOptions::setOptions_standard()
     * @uses CarVWEOptions::setOptions_manufacture()
     * @uses CarVWEOptions::setOptions_package()
     * @param \Webservices\StructType\CarVWEOptionsStandard $options_standard
     * @param \Webservices\StructType\CarVWEOptionsManufacture $options_manufacture
     * @param \Webservices\StructType\CarVWEOptionsPackage $options_package
     */
    public function __construct(\Webservices\StructType\CarVWEOptionsStandard $options_standard = null, \Webservices\StructType\CarVWEOptionsManufacture $options_manufacture = null, \Webservices\StructType\CarVWEOptionsPackage $options_package = null)
    {
        $this
            ->setOptions_standard($options_standard)
            ->setOptions_manufacture($options_manufacture)
            ->setOptions_package($options_package);
    }
    /**
     * Get options_standard value
     * @return \Webservices\StructType\CarVWEOptionsStandard|null
     */
    public function getOptions_standard()
    {
        return $this->options_standard;
    }
    /**
     * Set options_standard value
     * @param \Webservices\StructType\CarVWEOptionsStandard $options_standard
     * @return \Webservices\StructType\CarVWEOptions
     */
    public function setOptions_standard(\Webservices\StructType\CarVWEOptionsStandard $options_standard = null)
    {
        $this->options_standard = $options_standard;
        return $this;
    }
    /**
     * Get options_manufacture value
     * @return \Webservices\StructType\CarVWEOptionsManufacture|null
     */
    public function getOptions_manufacture()
    {
        return $this->options_manufacture;
    }
    /**
     * Set options_manufacture value
     * @param \Webservices\StructType\CarVWEOptionsManufacture $options_manufacture
     * @return \Webservices\StructType\CarVWEOptions
     */
    public function setOptions_manufacture(\Webservices\StructType\CarVWEOptionsManufacture $options_manufacture = null)
    {
        $this->options_manufacture = $options_manufacture;
        return $this;
    }
    /**
     * Get options_package value
     * @return \Webservices\StructType\CarVWEOptionsPackage|null
     */
    public function getOptions_package()
    {
        return $this->options_package;
    }
    /**
     * Set options_package value
     * @param \Webservices\StructType\CarVWEOptionsPackage $options_package
     * @return \Webservices\StructType\CarVWEOptions
     */
    public function setOptions_package(\Webservices\StructType\CarVWEOptionsPackage $options_package = null)
    {
        $this->options_package = $options_package;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEOptions
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
