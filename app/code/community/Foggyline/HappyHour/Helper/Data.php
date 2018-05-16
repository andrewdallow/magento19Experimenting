<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * @category   Zend
 * @package    Zend_Foggyline
 * @subpackage HappyHour
 * @copyright  Copyright (c) 2018 ecommistry (http://www.ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 */

class Foggyline_HappyHour_Helper_Data extends Mage_Core_Helper_Data
{
    const XML_PATH_CUSTOM_MESSAGE = 'foggyline_happyhour/settings/custom_message';

    public function getCustomMessage($storestore = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_CUSTOM_MESSAGE, $store);
    }
}
