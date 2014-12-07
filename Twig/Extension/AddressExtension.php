<?php

namespace Feft\AddressBundle\Twig\Extension;


use Feft\AddressBundle\Entity\Address;

/**
 * Address extension
 * Class AddressExtension
 * @package Feft\AddressBundle\Twig\Extension
 */
class AddressExtension extends \Twig_Extension {

    public function getFilters()
    {
        return array(
            'address_formatter' => new \Twig_Function_Method($this, 'formatter')
//                new \Twig_Filter_Function('\Feft\AddressBundle\Helper\AddressFormatter::formatter')
        );
    }

    public function formatter(Address $address)
    {
        $text = "simple address";
        return $text;
    }


    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'feft_address_extension';
    }
}