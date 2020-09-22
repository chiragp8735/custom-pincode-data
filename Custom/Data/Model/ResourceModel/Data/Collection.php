<?php
namespace Custom\Data\Model\ResourceModel\Data;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection 
{
    protected function _construct()
    {
        $this->_init('Custom\Data\Model\Data','Custom\Data\Model\ResourceModel\Data');
    }
}