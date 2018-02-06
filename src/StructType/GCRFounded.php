<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GCRFounded StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class GCRFounded extends AbstractStructBase
{
    /**
     * The date_from
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date_from;
    /**
     * The residence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $residence;
    /**
     * The legal_form_code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $legal_form_code;
    /**
     * The legal_form_text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legal_form_text;
    /**
     * The start_date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $start_date;
    /**
     * The founded_at
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $founded_at;
    /**
     * Constructor method for GCRFounded
     * @uses GCRFounded::setDate_from()
     * @uses GCRFounded::setResidence()
     * @uses GCRFounded::setLegal_form_code()
     * @uses GCRFounded::setLegal_form_text()
     * @uses GCRFounded::setStart_date()
     * @uses GCRFounded::setFounded_at()
     * @param string $date_from
     * @param string $residence
     * @param int $legal_form_code
     * @param string $legal_form_text
     * @param string $start_date
     * @param string $founded_at
     */
    public function __construct($date_from = null, $residence = null, $legal_form_code = null, $legal_form_text = null, $start_date = null, $founded_at = null)
    {
        $this
            ->setDate_from($date_from)
            ->setResidence($residence)
            ->setLegal_form_code($legal_form_code)
            ->setLegal_form_text($legal_form_text)
            ->setStart_date($start_date)
            ->setFounded_at($founded_at);
    }
    /**
     * Get date_from value
     * @return string|null
     */
    public function getDate_from()
    {
        return $this->date_from;
    }
    /**
     * Set date_from value
     * @param string $date_from
     * @return \Webservices\StructType\GCRFounded
     */
    public function setDate_from($date_from = null)
    {
        // validation for constraint: string
        if (!is_null($date_from) && !is_string($date_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date_from)), __LINE__);
        }
        $this->date_from = $date_from;
        return $this;
    }
    /**
     * Get residence value
     * @return string|null
     */
    public function getResidence()
    {
        return $this->residence;
    }
    /**
     * Set residence value
     * @param string $residence
     * @return \Webservices\StructType\GCRFounded
     */
    public function setResidence($residence = null)
    {
        // validation for constraint: string
        if (!is_null($residence) && !is_string($residence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residence)), __LINE__);
        }
        $this->residence = $residence;
        return $this;
    }
    /**
     * Get legal_form_code value
     * @return int|null
     */
    public function getLegal_form_code()
    {
        return $this->legal_form_code;
    }
    /**
     * Set legal_form_code value
     * @param int $legal_form_code
     * @return \Webservices\StructType\GCRFounded
     */
    public function setLegal_form_code($legal_form_code = null)
    {
        // validation for constraint: int
        if (!is_null($legal_form_code) && !is_numeric($legal_form_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($legal_form_code)), __LINE__);
        }
        $this->legal_form_code = $legal_form_code;
        return $this;
    }
    /**
     * Get legal_form_text value
     * @return string|null
     */
    public function getLegal_form_text()
    {
        return $this->legal_form_text;
    }
    /**
     * Set legal_form_text value
     * @param string $legal_form_text
     * @return \Webservices\StructType\GCRFounded
     */
    public function setLegal_form_text($legal_form_text = null)
    {
        // validation for constraint: string
        if (!is_null($legal_form_text) && !is_string($legal_form_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legal_form_text)), __LINE__);
        }
        $this->legal_form_text = $legal_form_text;
        return $this;
    }
    /**
     * Get start_date value
     * @return string|null
     */
    public function getStart_date()
    {
        return $this->start_date;
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \Webservices\StructType\GCRFounded
     */
    public function setStart_date($start_date = null)
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start_date)), __LINE__);
        }
        $this->start_date = $start_date;
        return $this;
    }
    /**
     * Get founded_at value
     * @return string|null
     */
    public function getFounded_at()
    {
        return $this->founded_at;
    }
    /**
     * Set founded_at value
     * @param string $founded_at
     * @return \Webservices\StructType\GCRFounded
     */
    public function setFounded_at($founded_at = null)
    {
        // validation for constraint: string
        if (!is_null($founded_at) && !is_string($founded_at)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($founded_at)), __LINE__);
        }
        $this->founded_at = $founded_at;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\GCRFounded
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
