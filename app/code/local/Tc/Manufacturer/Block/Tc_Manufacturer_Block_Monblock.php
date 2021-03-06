<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 10.08.18
 * Time: 16:57
 */

class Tc_Manufacturer_Block_Monblock extends Mage_Core_Block_Template
{
    public function methodblock()
    {
        //on initialize la variable
        $retour='';

        /* we made a request: pick up all the elements of the pfay_films table (thanks to our model pfay_films/film and sort by id_pfay_films */

        $collection = Mage::getModel('tc_manufacturer/manufacturer')
            ->getCollection()
            ->setOrder('id','asc');

        /* then browse the result of the request and with the getData() function is stored in the variable return (for display in the template) the necessary data */

        foreach($collection as $data)
        {

            $retour .= $data->getData('name.').'<br />';

        }

        /* I return a success message to the user (just so you know how to use the function) */

        Mage::getSingleton('adminhtml/session')->addSuccess('Cool Ca marche !!');

        return $retour;
    }
}