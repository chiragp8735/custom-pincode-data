<?php
namespace Custom\Data\Model\ResourceModel;

class Data extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('pincode_data', 'pincode');
    }
}