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

class Foggyline_HappyHour_HelloController
    extends \Mage_Core_Controller_Front_Action
{
    public function helloWorldAction()
    {
        $this->loadLayout();

        $block = $this->getLayout()->createBlock('foggyline_happyhour/hello');
        $block->setText('Hello World #2');

        $this->getLayout()->getBlock('content')->insert($block);

        $this->renderLayout();
    }
    
    public function testUserSaveAction()
    {
        $user = Mage::getModel('foggyline_happyhour/user');
        
        $user->setData('firstname', 'Jane');
        $user->setData('lastname', 'Doe');
        
        try {
            $user->save();
            echo 'Successfully saved user';
        } catch (Exception $exception) {
            echo $exception->getMessage();
            Mage::log($exception);
        }
    }
    
    public function testUserCollectionAction()
    {
        $users = Mage::getModel('foggyline_happyhour/user')
            ->getCollection();
        
        foreach ($users as $user) {
            $firstname = $user->getData('firstname');
            $lastname = $user->getData('lastname');
            
            echo "$firstname $lastname<br />";
        }
    }
}