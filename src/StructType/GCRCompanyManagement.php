<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRCompanyManagement StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRCompanyManagement extends AbstractStructBase
{
    /**
     * The management
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRManagementArray
     */
    public $management;
    /**
     * The first_directors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\ArrayType\GCRFirstDirectorArray
     */
    public $first_directors;
    /**
     * Constructor method for GCRCompanyManagement
     * @uses GCRCompanyManagement::setManagement()
     * @uses GCRCompanyManagement::setFirst_directors()
     * @param \Webservices\ArrayType\GCRManagementArray $management
     * @param \Webservices\ArrayType\GCRFirstDirectorArray $first_directors
     */
    public function __construct(\Webservices\ArrayType\GCRManagementArray $management = null, \Webservices\ArrayType\GCRFirstDirectorArray $first_directors = null)
    {
        $this
            ->setManagement($management)
            ->setFirst_directors($first_directors);
    }
    /**
     * Get management value
     * @return \Webservices\ArrayType\GCRManagementArray|null
     */
    public function getManagement()
    {
        return $this->management;
    }
    /**
     * Set management value
     * @param \Webservices\ArrayType\GCRManagementArray $management
     * @return \Webservices\StructType\GCRCompanyManagement
     */
    public function setManagement(\Webservices\ArrayType\GCRManagementArray $management = null)
    {
        $this->management = $management;
        return $this;
    }
    /**
     * Get first_directors value
     * @return \Webservices\ArrayType\GCRFirstDirectorArray|null
     */
    public function getFirst_directors()
    {
        return $this->first_directors;
    }
    /**
     * Set first_directors value
     * @param \Webservices\ArrayType\GCRFirstDirectorArray $first_directors
     * @return \Webservices\StructType\GCRCompanyManagement
     */
    public function setFirst_directors(\Webservices\ArrayType\GCRFirstDirectorArray $first_directors = null)
    {
        $this->first_directors = $first_directors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRCompanyManagement
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
