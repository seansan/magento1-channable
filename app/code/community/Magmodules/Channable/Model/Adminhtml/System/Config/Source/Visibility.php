<?php
/**
 * Magmodules.eu - http://www.magmodules.eu
 *
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magmodules.eu so we can send you a copy immediately.
 *
 * @category      Magmodules
 * @package       Magmodules_Channable
 * @author        Magmodules <info@magmodules.eu)
 * @copyright     Copyright (c) 2018 (http://www.magmodules.eu)
 * @license       http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

class Magmodules_Channable_Model_Adminhtml_System_Config_Source_Visibility
{

    /**
     * Options array
     *
     * @var array
     */
    public $options = null;

    /**
     * @return array
     */
    public function toOptionArray()
    {
        if (!$this->options) {
            $this->options = array(
                array('value' => '1', 'label' => Mage::helper('adminhtml')->__('Not Visible Individually')),
                array('value' => '2', 'label' => Mage::helper('adminhtml')->__('Catalog')),
                array('value' => '3', 'label' => Mage::helper('adminhtml')->__('Search')),
                array('value' => '4', 'label' => Mage::helper('adminhtml')->__('Catalog, Search')),
            );
        }

        return $this->options;
    }
}