<?php
namespace Custom\Data\Block\Adminhtml;

class Data extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_data';
        $this->_blockGroup = 'Custom_Data';
        $this->_headerText = __('Custom Data');
        parent::_construct();

        $this->removeButton('add');
    }
}
