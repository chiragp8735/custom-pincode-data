<?php
namespace Custom\Data\Block\Adminhtml\Data;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    protected $_customFactory;
    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Custom\Data\Model\DataFactory $customFactory,
        array $data = []
    ) {
        $this->_customFactory = $customFactory;
        parent::__construct($context, $backendHelper, $data);
    }
    
    protected function _construct()
    {
        parent::_construct();
        $this->setId('dataGrid');
        $this->setDefaultSort('pincode');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }
    
    protected function _prepareCollection()
    {
        $collection = $this->_customFactory->create()->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }
        
   
        
    protected function _prepareColumns()
    {
        $this->addColumn(
            'pincode',
            [
                'header' => __('Pincode'),
                'index' => 'pincode',
                'sortable' => false,
            ]
        );
        $this->addColumn(
            'state',
            [
                'header' => __('State'),
                'index' => 'state',
                'sortable' => false,
            ]
        );
        $this->addColumn(
            'districtname',
            [
                'header' => __('District'),
                'index' => 'districtname',
                'sortable' => false,
            ]
        );
        $this->addColumn(
            'divisionname',
            [
                'header' => __('Division'),
                'index' => 'divisionname',
                'sortable' => false,
            ]
        );
        
        return parent::_prepareColumns();
    }
    
}
