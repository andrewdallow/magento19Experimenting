<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * @category   Zend
 * @package    Zend_Foggyline
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */

class Foggyline_HappyHour_HelloController extends \Mage_Core_Controller_Front_Action
{
    public function helloWorldAction()
    {
        $this->loadLayout();

        $block = $this->getLayout()->createBlock('foggyline_happyhour/hello');
        $block->setText('Hello World #2');

        $this->getLayout()->getBlock('content')->insert($block);

        $this->renderLayout();
    }
}