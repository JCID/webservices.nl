<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyReport StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyReport extends AbstractStructBase
{
    /**
     * The report_id
     * @var string
     */
    public $report_id;
    /**
     * The title
     * @var string
     */
    public $title;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The is_final
     * @var bool
     */
    public $is_final;
    /**
     * Constructor method for InsolvencyReport
     * @uses InsolvencyReport::setReport_id()
     * @uses InsolvencyReport::setTitle()
     * @uses InsolvencyReport::setDate()
     * @uses InsolvencyReport::setIs_final()
     * @param string $report_id
     * @param string $title
     * @param string $date
     * @param bool $is_final
     */
    public function __construct($report_id = null, $title = null, $date = null, $is_final = null)
    {
        $this
            ->setReport_id($report_id)
            ->setTitle($title)
            ->setDate($date)
            ->setIs_final($is_final);
    }
    /**
     * Get report_id value
     * @return string|null
     */
    public function getReport_id()
    {
        return $this->report_id;
    }
    /**
     * Set report_id value
     * @param string $report_id
     * @return \Webservices\StructType\InsolvencyReport
     */
    public function setReport_id($report_id = null)
    {
        // validation for constraint: string
        if (!is_null($report_id) && !is_string($report_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($report_id)), __LINE__);
        }
        $this->report_id = $report_id;
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
     * @return \Webservices\StructType\InsolvencyReport
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
     * @return \Webservices\StructType\InsolvencyReport
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
     * Get is_final value
     * @return bool|null
     */
    public function getIs_final()
    {
        return $this->is_final;
    }
    /**
     * Set is_final value
     * @param bool $is_final
     * @return \Webservices\StructType\InsolvencyReport
     */
    public function setIs_final($is_final = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_final) && !is_bool($is_final)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($is_final)), __LINE__);
        }
        $this->is_final = $is_final;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyReport
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
