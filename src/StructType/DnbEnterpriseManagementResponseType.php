<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnbEnterpriseManagementResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DnbEnterpriseManagementResponseType extends AbstractStructBase
{
    /**
     * The out
     * @var \Webservices\StructType\DNBEnterpriseManagement
     */
    public $out;
    /**
     * Constructor method for dnbEnterpriseManagementResponseType
     * @uses DnbEnterpriseManagementResponseType::setOut()
     * @param \Webservices\StructType\DNBEnterpriseManagement $out
     */
    public function __construct(\Webservices\StructType\DNBEnterpriseManagement $out = null)
    {
        $this
            ->setOut($out);
    }
    /**
     * Get out value
     * @return \Webservices\StructType\DNBEnterpriseManagement|null
     */
    public function getOut()
    {
        return $this->out;
    }
    /**
     * Set out value
     * @param \Webservices\StructType\DNBEnterpriseManagement $out
     * @return \Webservices\StructType\DnbEnterpriseManagementResponseType
     */
    public function setOut(\Webservices\StructType\DNBEnterpriseManagement $out = null)
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
     * @return \Webservices\StructType\DnbEnterpriseManagementResponseType
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
