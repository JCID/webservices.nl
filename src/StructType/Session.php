<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Session StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class Session extends AbstractStructBase
{
    /**
     * The reactid
     * @var string
     */
    public $reactid;
    /**
     * The user_id
     * @var int
     */
    public $user_id;
    /**
     * The user_nickname
     * @var string
     */
    public $user_nickname;
    /**
     * The creationtime
     * @var string
     */
    public $creationtime;
    /**
     * The lastvisit
     * @var string
     */
    public $lastvisit;
    /**
     * The hits
     * @var int
     */
    public $hits;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * Constructor method for Session
     * @uses Session::setReactid()
     * @uses Session::setUser_id()
     * @uses Session::setUser_nickname()
     * @uses Session::setCreationtime()
     * @uses Session::setLastvisit()
     * @uses Session::setHits()
     * @uses Session::setIp()
     * @param string $reactid
     * @param int $user_id
     * @param string $user_nickname
     * @param string $creationtime
     * @param string $lastvisit
     * @param int $hits
     * @param string $ip
     */
    public function __construct($reactid = null, $user_id = null, $user_nickname = null, $creationtime = null, $lastvisit = null, $hits = null, $ip = null)
    {
        $this
            ->setReactid($reactid)
            ->setUser_id($user_id)
            ->setUser_nickname($user_nickname)
            ->setCreationtime($creationtime)
            ->setLastvisit($lastvisit)
            ->setHits($hits)
            ->setIp($ip);
    }
    /**
     * Get reactid value
     * @return string|null
     */
    public function getReactid()
    {
        return $this->reactid;
    }
    /**
     * Set reactid value
     * @param string $reactid
     * @return \Webservices\StructType\Session
     */
    public function setReactid($reactid = null)
    {
        // validation for constraint: string
        if (!is_null($reactid) && !is_string($reactid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reactid)), __LINE__);
        }
        $this->reactid = $reactid;
        return $this;
    }
    /**
     * Get user_id value
     * @return int|null
     */
    public function getUser_id()
    {
        return $this->user_id;
    }
    /**
     * Set user_id value
     * @param int $user_id
     * @return \Webservices\StructType\Session
     */
    public function setUser_id($user_id = null)
    {
        // validation for constraint: int
        if (!is_null($user_id) && !is_numeric($user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($user_id)), __LINE__);
        }
        $this->user_id = $user_id;
        return $this;
    }
    /**
     * Get user_nickname value
     * @return string|null
     */
    public function getUser_nickname()
    {
        return $this->user_nickname;
    }
    /**
     * Set user_nickname value
     * @param string $user_nickname
     * @return \Webservices\StructType\Session
     */
    public function setUser_nickname($user_nickname = null)
    {
        // validation for constraint: string
        if (!is_null($user_nickname) && !is_string($user_nickname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user_nickname)), __LINE__);
        }
        $this->user_nickname = $user_nickname;
        return $this;
    }
    /**
     * Get creationtime value
     * @return string|null
     */
    public function getCreationtime()
    {
        return $this->creationtime;
    }
    /**
     * Set creationtime value
     * @param string $creationtime
     * @return \Webservices\StructType\Session
     */
    public function setCreationtime($creationtime = null)
    {
        // validation for constraint: string
        if (!is_null($creationtime) && !is_string($creationtime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationtime)), __LINE__);
        }
        $this->creationtime = $creationtime;
        return $this;
    }
    /**
     * Get lastvisit value
     * @return string|null
     */
    public function getLastvisit()
    {
        return $this->lastvisit;
    }
    /**
     * Set lastvisit value
     * @param string $lastvisit
     * @return \Webservices\StructType\Session
     */
    public function setLastvisit($lastvisit = null)
    {
        // validation for constraint: string
        if (!is_null($lastvisit) && !is_string($lastvisit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastvisit)), __LINE__);
        }
        $this->lastvisit = $lastvisit;
        return $this;
    }
    /**
     * Get hits value
     * @return int|null
     */
    public function getHits()
    {
        return $this->hits;
    }
    /**
     * Set hits value
     * @param int $hits
     * @return \Webservices\StructType\Session
     */
    public function setHits($hits = null)
    {
        // validation for constraint: int
        if (!is_null($hits) && !is_numeric($hits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hits)), __LINE__);
        }
        $this->hits = $hits;
        return $this;
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Webservices\StructType\Session
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\Session
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
