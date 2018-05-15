<?php
/**
 * Install script for a simple table holding user_id, firstname, and lastname.
 *
 *
 * @category   Zend
 * @package    Zend_Foggyline
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: 1.0
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release 1.0
 */

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

try {
    $table = $installer->getConnection()
        ->newTable($installer->getTable('foggyline_happyhour/user'))
        ->addColumn(
            'user_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null,
            array(
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
            ), 'Id'
        )
        ->addColumn(
            'firstname', Varien_Db_Ddl_Table::TYPE_VARCHAR, null,
            array(
                'nullable' => false,
            ), 'User first name'
        )
        ->addColumn(
            'lastname', Varien_Db_Ddl_Table::TYPE_VARCHAR, null,
            array(
                'nullable' => false,
            ), 'User last name'
        )
        ->setComment('Foggyline_HappyHour User Entity');
    $installer->getConnection()->createTable($table);
} catch (Zend_Db_Exception $e) {
    Mage::log($e);
}


$installer->endSetup();
