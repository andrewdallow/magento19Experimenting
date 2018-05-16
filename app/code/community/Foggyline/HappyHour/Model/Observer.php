<?php
/**
 * The Observer class
 *
 *
 * @category   Zend
 * @package    Zend_HappyHour
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */

class Foggyline_HappyHour_Model_Observer
{
    public function intercept($observer = null)
    {
        $event = $observer->getEvent();
        $controllerAction = $event->getControllerAction();
        $params = $controllerAction->getRequest()->getParams();

        Mage::log($params);
    }
}