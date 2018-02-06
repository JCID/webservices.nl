<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dutchBusinessSearchNewsByDossierRequestType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessSearchNewsByDossierRequestType extends AbstractStructBase
{
    /**
     * The dossier_number
     * @var int
     */
    public $dossier_number;
    /**
     * The period_start
     * @var string
     */
    public $period_start;
    /**
     * The period_end
     * @var string
     */
    public $period_end;
    /**
     * The sort_order
     * @var string
     */
    public $sort_order;
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * Constructor method for dutchBusinessSearchNewsByDossierRequestType
     * @uses DutchBusinessSearchNewsByDossierRequestType::setDossier_number()
     * @uses DutchBusinessSearchNewsByDossierRequestType::setPeriod_start()
     * @uses DutchBusinessSearchNewsByDossierRequestType::setPeriod_end()
     * @uses DutchBusinessSearchNewsByDossierRequestType::setSort_order()
     * @uses DutchBusinessSearchNewsByDossierRequestType::setPage()
     * @param int $dossier_number
     * @param string $period_start
     * @param string $period_end
     * @param string $sort_order
     * @param int $page
     */
    public function __construct($dossier_number = null, $period_start = null, $period_end = null, $sort_order = null, $page = null)
    {
        $this
            ->setDossier_number($dossier_number)
            ->setPeriod_start($period_start)
            ->setPeriod_end($period_end)
            ->setSort_order($sort_order)
            ->setPage($page);
    }
    /**
     * Get dossier_number value
     * @return int|null
     */
    public function getDossier_number()
    {
        return $this->dossier_number;
    }
    /**
     * Set dossier_number value
     * @param int $dossier_number
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType
     */
    public function setDossier_number($dossier_number = null)
    {
        // validation for constraint: int
        if (!is_null($dossier_number) && !is_numeric($dossier_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dossier_number)), __LINE__);
        }
        $this->dossier_number = $dossier_number;
        return $this;
    }
    /**
     * Get period_start value
     * @return string|null
     */
    public function getPeriod_start()
    {
        return $this->period_start;
    }
    /**
     * Set period_start value
     * @param string $period_start
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType
     */
    public function setPeriod_start($period_start = null)
    {
        // validation for constraint: string
        if (!is_null($period_start) && !is_string($period_start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period_start)), __LINE__);
        }
        $this->period_start = $period_start;
        return $this;
    }
    /**
     * Get period_end value
     * @return string|null
     */
    public function getPeriod_end()
    {
        return $this->period_end;
    }
    /**
     * Set period_end value
     * @param string $period_end
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType
     */
    public function setPeriod_end($period_end = null)
    {
        // validation for constraint: string
        if (!is_null($period_end) && !is_string($period_end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period_end)), __LINE__);
        }
        $this->period_end = $period_end;
        return $this;
    }
    /**
     * Get sort_order value
     * @return string|null
     */
    public function getSort_order()
    {
        return $this->sort_order;
    }
    /**
     * Set sort_order value
     * @param string $sort_order
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType
     */
    public function setSort_order($sort_order = null)
    {
        // validation for constraint: string
        if (!is_null($sort_order) && !is_string($sort_order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sort_order)), __LINE__);
        }
        $this->sort_order = $sort_order;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessSearchNewsByDossierRequestType
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
