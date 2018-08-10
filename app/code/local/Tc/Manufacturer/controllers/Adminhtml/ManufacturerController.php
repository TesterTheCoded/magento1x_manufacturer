<?php


class Tc_Manufacturer_ManufacturerController extends Mage_Adminhtml_Controller_Action
{
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('manufacturer');
    }
}