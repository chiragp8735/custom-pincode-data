<?php
namespace Custom\Data\Model;

class Data extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Custom\Data\Model\ResourceModel\Data');
    }

}
