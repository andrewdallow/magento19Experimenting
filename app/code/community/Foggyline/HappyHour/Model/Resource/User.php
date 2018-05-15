<?php
/**
 * The Resource class for the User Model.
 *
 * @category   Zend
 * @package    Zend_Foggyline
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    1.0
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release 1.0
 */


class Foggyline_HappyHour_Model_Resource_User
    extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('foggyline_happyhour/user', 'user_id');
    }
}