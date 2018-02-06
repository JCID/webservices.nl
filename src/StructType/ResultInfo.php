<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResultInfo StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class ResultInfo extends AbstractStructBase
{
    /**
     * The curpage
     * @var int
     */
    public $curpage;
    /**
     * The perpage
     * @var int
     */
    public $perpage;
    /**
     * The numpages
     * @var int
     */
    public $numpages;
    /**
     * The numresults
     * @var int
     */
    public $numresults;
    /**
     * The maxresults
     * @var int
     */
    public $maxresults;
    /**
     * Constructor method for ResultInfo
     * @uses ResultInfo::setCurpage()
     * @uses ResultInfo::setPerpage()
     * @uses ResultInfo::setNumpages()
     * @uses ResultInfo::setNumresults()
     * @uses ResultInfo::setMaxresults()
     * @param int $curpage
     * @param int $perpage
     * @param int $numpages
     * @param int $numresults
     * @param int $maxresults
     */
    public function __construct($curpage = null, $perpage = null, $numpages = null, $numresults = null, $maxresults = null)
    {
        $this
            ->setCurpage($curpage)
            ->setPerpage($perpage)
            ->setNumpages($numpages)
            ->setNumresults($numresults)
            ->setMaxresults($maxresults);
    }
    /**
     * Get curpage value
     * @return int|null
     */
    public function getCurpage()
    {
        return $this->curpage;
    }
    /**
     * Set curpage value
     * @param int $curpage
     * @return \Webservices\StructType\ResultInfo
     */
    public function setCurpage($curpage = null)
    {
        // validation for constraint: int
        if (!is_null($curpage) && !is_numeric($curpage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($curpage)), __LINE__);
        }
        $this->curpage = $curpage;
        return $this;
    }
    /**
     * Get perpage value
     * @return int|null
     */
    public function getPerpage()
    {
        return $this->perpage;
    }
    /**
     * Set perpage value
     * @param int $perpage
     * @return \Webservices\StructType\ResultInfo
     */
    public function setPerpage($perpage = null)
    {
        // validation for constraint: int
        if (!is_null($perpage) && !is_numeric($perpage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($perpage)), __LINE__);
        }
        $this->perpage = $perpage;
        return $this;
    }
    /**
     * Get numpages value
     * @return int|null
     */
    public function getNumpages()
    {
        return $this->numpages;
    }
    /**
     * Set numpages value
     * @param int $numpages
     * @return \Webservices\StructType\ResultInfo
     */
    public function setNumpages($numpages = null)
    {
        // validation for constraint: int
        if (!is_null($numpages) && !is_numeric($numpages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numpages)), __LINE__);
        }
        $this->numpages = $numpages;
        return $this;
    }
    /**
     * Get numresults value
     * @return int|null
     */
    public function getNumresults()
    {
        return $this->numresults;
    }
    /**
     * Set numresults value
     * @param int $numresults
     * @return \Webservices\StructType\ResultInfo
     */
    public function setNumresults($numresults = null)
    {
        // validation for constraint: int
        if (!is_null($numresults) && !is_numeric($numresults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numresults)), __LINE__);
        }
        $this->numresults = $numresults;
        return $this;
    }
    /**
     * Get maxresults value
     * @return int|null
     */
    public function getMaxresults()
    {
        return $this->maxresults;
    }
    /**
     * Set maxresults value
     * @param int $maxresults
     * @return \Webservices\StructType\ResultInfo
     */
    public function setMaxresults($maxresults = null)
    {
        // validation for constraint: int
        if (!is_null($maxresults) && !is_numeric($maxresults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxresults)), __LINE__);
        }
        $this->maxresults = $maxresults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\ResultInfo
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
