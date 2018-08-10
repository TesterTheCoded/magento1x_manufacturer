<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 10.08.18
 * Time: 10:24
 */

class Tc_Manufacturer_Model_Mysql_Manufacturer extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        $this->_init('tc_manufacturer/manufacturer', 'manufacturer_id');

    }
}