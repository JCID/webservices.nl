<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessUBORole StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessUBORole extends AbstractStructBase
{
    /**
     * The dossier_number
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $dossier_number;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $title;
    /**
     * The role_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $role_type;
    /**
     * The competency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $competency;
    /**
     * The start_role_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $start_role_date;
    /**
     * Constructor method for DutchBusinessUBORole
     * @uses DutchBusinessUBORole::setDossier_number()
     * @uses DutchBusinessUBORole::setTitle()
     * @uses DutchBusinessUBORole::setRole_type()
     * @uses DutchBusinessUBORole::setCompetency()
     * @uses DutchBusinessUBORole::setStart_role_date()
     * @param string $dossier_number
     * @param string $title
     * @param string $role_type
     * @param string $competency
     * @param string $start_role_date
     */
    public function __construct($dossier_number = null, $title = null, $role_type = null, $competency = null, $start_role_date = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setTitle($title)
            ->setRole_type($role_type)
            ->setCompetency($competency)
            ->setStart_role_date($start_role_date);
    }
    /**
     * Get dossier_number value
     * @return string
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param string $dossier_number
     * @return \Webservices\StructType\DutchBusinessUBORole
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_number) && !is_string($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Webservices\StructType\DutchBusinessUBORole
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get role_type value
     * @return string|null
     */
    public function getRole_type()
    {
        return $this->role_type;
    }
    /**
     * Set role_type value
     * @param string $role_type
     * @return \Webservices\StructType\DutchBusinessUBORole
     */
    public function setRole_type($role_type = null)
    {
        // validation for constraint: string
        if (!is_null($role_type) && !is_string($role_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role_type)), __LINE__);
        }
        $this->role_type = $role_type;
        return $this;
    }
    /**
     * Get competency value
     * @return string|null
     */
    public function getCompetency()
    {
        return $this->competency;
    }
    /**
     * Set competency value
     * @param string $competency
     * @return \Webservices\StructType\DutchBusinessUBORole
     */
    public function setCompetency($competency = null)
    {
        // validation for constraint: string
        if (!is_null($competency) && !is_string($competency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($competency)), __LINE__);
        }
        $this->competency = $competency;
        return $this;
    }
    /**
     * Get start_role_date value
     * @return string|null
     */
    public function getStart_role_date()
    {
        return $this->start_role_date;
    }
    /**
     * Set start_role_date value
     * @param string $start_role_date
     * @return \Webservices\StructType\DutchBusinessUBORole
     */
    public function setStart_role_date($start_role_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_role_date) && !is_string($start_role_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_role_date)), __LINE__);
        }
        $this->start_role_date = $start_role_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessUBORole
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
