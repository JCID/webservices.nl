<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DutchBusinessNewsItem StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class DutchBusinessNewsItem extends AbstractStructBase
{
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
     * The short
     * @var string
     */
    public $short;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The source
     * @var string
     */
    public $source;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The sentiment
     * @var float
     */
    public $sentiment;
    /**
     * The topics
     * @var \Webservices\ArrayType\StringArray
     */
    public $topics;
    /**
     * The companies
     * @var \Webservices\ArrayType\DutchBusinessNewsCompanyArray
     */
    public $companies;
    /**
     * Constructor method for DutchBusinessNewsItem
     * @uses DutchBusinessNewsItem::setTitle()
     * @uses DutchBusinessNewsItem::setDate()
     * @uses DutchBusinessNewsItem::setShort()
     * @uses DutchBusinessNewsItem::setUrl()
     * @uses DutchBusinessNewsItem::setSource()
     * @uses DutchBusinessNewsItem::setType()
     * @uses DutchBusinessNewsItem::setSentiment()
     * @uses DutchBusinessNewsItem::setTopics()
     * @uses DutchBusinessNewsItem::setCompanies()
     * @param string $title
     * @param string $date
     * @param string $short
     * @param string $url
     * @param string $source
     * @param string $type
     * @param float $sentiment
     * @param \Webservices\ArrayType\StringArray $topics
     * @param \Webservices\ArrayType\DutchBusinessNewsCompanyArray $companies
     */
    public function __construct($title = null, $date = null, $short = null, $url = null, $source = null, $type = null, $sentiment = null, \Webservices\ArrayType\StringArray $topics = null, \Webservices\ArrayType\DutchBusinessNewsCompanyArray $companies = null)
    {
        $this
            ->setTitle($title)
            ->setDate($date)
            ->setShort($short)
            ->setUrl($url)
            ->setSource($source)
            ->setType($type)
            ->setSentiment($sentiment)
            ->setTopics($topics)
            ->setCompanies($companies);
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
     * @return \Webservices\StructType\DutchBusinessNewsItem
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
     * @return \Webservices\StructType\DutchBusinessNewsItem
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
     * Get short value
     * @return string|null
     */
    public function getShort()
    {
        return $this->short;
    }
    /**
     * Set short value
     * @param string $short
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setShort($short = null)
    {
        // validation for constraint: string
        if (!is_null($short) && !is_string($short)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($short)), __LINE__);
        }
        $this->short = $short;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get sentiment value
     * @return float|null
     */
    public function getSentiment()
    {
        return $this->sentiment;
    }
    /**
     * Set sentiment value
     * @param float $sentiment
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setSentiment($sentiment = null)
    {
        $this->sentiment = $sentiment;
        return $this;
    }
    /**
     * Get topics value
     * @return \Webservices\ArrayType\StringArray|null
     */
    public function getTopics()
    {
        return $this->topics;
    }
    /**
     * Set topics value
     * @param \Webservices\ArrayType\StringArray $topics
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setTopics(\Webservices\ArrayType\StringArray $topics = null)
    {
        $this->topics = $topics;
        return $this;
    }
    /**
     * Get companies value
     * @return \Webservices\ArrayType\DutchBusinessNewsCompanyArray|null
     */
    public function getCompanies()
    {
        return $this->companies;
    }
    /**
     * Set companies value
     * @param \Webservices\ArrayType\DutchBusinessNewsCompanyArray $companies
     * @return \Webservices\StructType\DutchBusinessNewsItem
     */
    public function setCompanies(\Webservices\ArrayType\DutchBusinessNewsCompanyArray $companies = null)
    {
        $this->companies = $companies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\DutchBusinessNewsItem
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
