<?php

/**
 * Bridge Batchcode
 *
 * @category      Bridge
 * @package       Bridge_Batchcode
 * @copyright     Copyright (c) 2013 Bridge India. (http://bridge-india.in)
 * @license       http://bridge-india.in/disclaimer/magento
 */
class Sreedarsh_Bsslider_Block_Adminhtml_Bsslider extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        $this->_controller = 'adminhtml_bsslider';
        $this->_blockGroup = 'bsslider';
        $this->_headerText = Mage::helper('bsslider')->__('Bootstrap Slider');
        $this->_addButtonLabel = Mage::helper('bsslider')->__('Add New Slider Image');
        parent::__construct();
    }

}
