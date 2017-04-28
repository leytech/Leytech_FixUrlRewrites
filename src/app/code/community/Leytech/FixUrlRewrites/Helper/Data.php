<?php
/**
 * @package    Leytech_FixUrlRewrites
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2017 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_FixUrlRewrites_Helper_Data extends Mage_Core_Helper_Data
{

    const XML_PATH_SETTINGS_ENABLED = 'leytech_fixurlrewrites/settings/enabled';

    public function isEnabled()
    {
        return Mage::getStoreConfig(self::XML_PATH_SETTINGS_ENABLED);
    }

}