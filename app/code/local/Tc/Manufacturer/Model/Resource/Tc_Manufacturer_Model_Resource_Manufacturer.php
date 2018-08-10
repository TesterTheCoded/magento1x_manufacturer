<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 10.08.18
 * Time: 16:37
 */

class Tc_Manufacturer_Model_Resource_Manufacturer extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('tc_manufacturer/manufacturer', 'id');
    }
}