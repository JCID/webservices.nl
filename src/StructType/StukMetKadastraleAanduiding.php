<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StukMetKadastraleAanduiding StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class StukMetKadastraleAanduiding extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The kadastrale_aanduiding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Webservices\StructType\KadastraleAanduiding
     */
    public $kadastrale_aanduiding;
    /**
     * Constructor method for StukMetKadastraleAanduiding
     * @uses StukMetKadastraleAanduiding::setId()
     * @uses StukMetKadastraleAanduiding::setKadastrale_aanduiding()
     * @param string $id
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     */
    public function __construct($id = null, \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this
            ->setId($id)
            ->setKadastrale_aanduiding($kadastrale_aanduiding);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Webservices\StructType\StukMetKadastraleAanduiding
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get kadastrale_aanduiding value
     * @return \Webservices\StructType\KadastraleAanduiding|null
     */
    public function getKadastrale_aanduiding()
    {
        return $this->kadastrale_aanduiding;
    }
    /**
     * Set kadastrale_aanduiding value
     * @param \Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding
     * @return \Webservices\StructType\StukMetKadastraleAanduiding
     */
    public function setKadastrale_aanduiding(\Webservices\StructType\KadastraleAanduiding $kadastrale_aanduiding = null)
    {
        $this->kadastrale_aanduiding = $kadastrale_aanduiding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\StukMetKadastraleAanduiding
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
