<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 09.08.18
 * Time: 17:49
 */

class Tc_Manufacturer_Model_Manufacturer extends Mage_Core_Model_Abstract
{
   public function _construct()
   {
       parent::_construct();
       $this->_init('tc_manufacturer/manufacturer');
   }
}