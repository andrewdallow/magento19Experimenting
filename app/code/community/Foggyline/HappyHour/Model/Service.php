<?php
/**
 * Cron Job service
 *
 *
 * @category   Zend
 * @package    Zend_FoggyLine
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */



class Foggyline_HappyHour_Model_Service
{
    public function ping()
    {
        Mage::log('ping');
    }
}