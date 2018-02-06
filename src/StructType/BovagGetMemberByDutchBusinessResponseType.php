<?php

namespace Webservices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bovagGetMemberByDutchBusinessResponseType StructType
 * @subpackage Structs
 * @author JCID <info@jcid.nl>
 */
class BovagGetMemberByDutchBusinessResponseType extends AbstractStructBase
{
    /**
     * The member
     * @var \Webservices\StructType\BovagMember
     */
    public $member;
    /**
     * Constructor method for bovagGetMemberByDutchBusinessResponseType
     * @uses BovagGetMemberByDutchBusinessResponseType::setMember()
     * @param \Webservices\StructType\BovagMember $member
     */
    public function __construct(\Webservices\StructType\BovagMember $member = null)
    {
        $this
            ->setMember($member);
    }
    /**
     * Get member value
     * @return \Webservices\StructType\BovagMember|null
     */
    public function getMember()
    {
        return $this->member;
    }
    /**
     * Set member value
     * @param \Webservices\StructType\BovagMember $member
     * @return \Webservices\StructType\BovagGetMemberByDutchBusinessResponseType
     */
    public function setMember(\Webservices\StructType\BovagMember $member = null)
    {
        $this->member = $member;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Webservices\StructType\BovagGetMemberByDutchBusinessResponseType
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
