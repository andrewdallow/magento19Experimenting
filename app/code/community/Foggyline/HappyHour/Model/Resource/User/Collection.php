<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @category   Zend
 * @package    HappyHour\Model\Resource\User
 * @subpackage Collection
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    1.0
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release 1.0
 */


class Foggyline_HappyHour_Model_Resource_User_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('foggyline_happyhour/user');
    }
}