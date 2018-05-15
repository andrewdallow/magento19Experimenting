<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * @category   Zend
 * @package    Zend_Foggyline
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc.
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */


class Foggyline_HappyHour_Block_Hello extends Mage_Core_Block_Template
{
    public function __construct(array $args = array())
    {
        parent::__construct();
        $this->setTemplate('foggyline_happyhour/hello.phtml');
    }
}