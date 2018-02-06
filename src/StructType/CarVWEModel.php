<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarVWEModel StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class CarVWEModel extends AbstractStructBase
{
    /**
     * The model_id
     * @var int
     */
    public $model_id;
    /**
     * The model_name
     * @var string
     */
    public $model_name;
    /**
     * Constructor method for CarVWEModel
     * @uses CarVWEModel::setModel_id()
     * @uses CarVWEModel::setModel_name()
     * @param int $model_id
     * @param string $model_name
     */
    public function __construct($model_id = null, $model_name = null)
    {
        $this
            ->setModel_id($model_id)
            ->setModel_name($model_name);
    }
    /**
     * Get model_id value
     * @return int|null
     */
    public function getModel_id()
    {
        return $this->model_id;
    }
    /**
     * Set model_id value
     * @param int $model_id
     * @return \Webservices\StructType\CarVWEModel
     */
    public function setModel_id($model_id = null)
    {
        // validation for constraint: int
        if (!is_null($model_id) && !is_numeric($model_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($model_id)), __LINE__);
        }
        $this->model_id = $model_id;
        return $this;
    }
    /**
     * Get model_name value
     * @return string|null
     */
    public function getModel_name()
    {
        return $this->model_name;
    }
    /**
     * Set model_name value
     * @param string $model_name
     * @return \Webservices\StructType\CarVWEModel
     */
    public function setModel_name($model_name = null)
    {
        // validation for constraint: string
        if (!is_null($model_name) && !is_string($model_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model_name)), __LINE__);
        }
        $this->model_name = $model_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\CarVWEModel
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
