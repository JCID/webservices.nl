<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsolvencyPublication StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class InsolvencyPublication extends AbstractStructBase
{
    /**
     * The publication_id
     * @var string
     */
    public $publication_id;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The authority_code
     * @var int
     */
    public $authority_code;
    /**
     * The court_session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\InsolvencyCourtSession
     */
    public $court_session;
    /**
     * Constructor method for InsolvencyPublication
     * @uses InsolvencyPublication::setPublication_id()
     * @uses InsolvencyPublication::setDate()
     * @uses InsolvencyPublication::setDescription()
     * @uses InsolvencyPublication::setCode()
     * @uses InsolvencyPublication::setAuthority_code()
     * @uses InsolvencyPublication::setCourt_session()
     * @param string $publication_id
     * @param string $date
     * @param string $description
     * @param string $code
     * @param int $authority_code
     * @param \Webservices\StructType\InsolvencyCourtSession $court_session
     */
    public function __construct($publication_id = null, $date = null, $description = null, $code = null, $authority_code = null, \Webservices\StructType\InsolvencyCourtSession $court_session = null)
    {
        $this
            ->setPublication_id($publication_id)
            ->setDate($date)
            ->setDescription($description)
            ->setCode($code)
            ->setAuthority_code($authority_code)
            ->setCourt_session($court_session);
    }
    /**
     * Get publication_id value
     * @return string|null
     */
    public function getPublication_id()
    {
        return $this->publication_id;
    }
    /**
     * Set publication_id value
     * @param string $publication_id
     * @return \Webservices\StructType\InsolvencyPublication
     */
    public function setPublication_id($publication_id = null)
    {
        // validation for constraint: string
        if (!is_null($publication_id) && !is_string($publication_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publication_id)), __LINE__);
        }
        $this->publication_id = $publication_id;
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
     * @return \Webservices\StructType\InsolvencyPublication
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Webservices\StructType\InsolvencyPublication
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Webservices\StructType\InsolvencyPublication
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get authority_code value
     * @return int|null
     */
    public function getAuthority_code()
    {
        return $this->authority_code;
    }
    /**
     * Set authority_code value
     * @param int $authority_code
     * @return \Webservices\StructType\InsolvencyPublication
     */
    public function setAuthority_code($authority_code = null)
    {
        // validation for constraint: int
        if (!is_null($authority_code) && !is_numeric($authority_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($authority_code)), __LINE__);
        }
        $this->authority_code = $authority_code;
        return $this;
    }
    /**
     * Get court_session value
     * @return \Webservices\StructType\InsolvencyCourtSession|null
     */
    public function getCourt_session()
    {
        return $this->court_session;
    }
    /**
     * Set court_session value
     * @param \Webservices\StructType\InsolvencyCourtSession $court_session
     * @return \Webservices\StructType\InsolvencyPublication
     */
    public function setCourt_session(\Webservices\StructType\InsolvencyCourtSession $court_session = null)
    {
        $this->court_session = $court_session;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\InsolvencyPublication
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
