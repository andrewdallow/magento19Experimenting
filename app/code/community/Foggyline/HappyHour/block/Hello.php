<?php
/**
 * The Hello Magento block.
 *
 * @category   Zend
 * @package    Zend_Foggyline
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
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