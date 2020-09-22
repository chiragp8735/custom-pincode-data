<?php
namespace Custom\Data\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('pincode_data'))
            ->addColumn('pincode', Table::TYPE_TEXT, 255, ['primary' => true, 'nullable' => false])
            ->addColumn('state', Table::TYPE_TEXT, 255, ['nullable' => false])
            ->addColumn('districtname', Table::TYPE_TEXT, 255, ['nullable' => false])
            ->addColumn('divisionname', Table::TYPE_TEXT, 255, ['nullable' => false]);

        $installer->getConnection()->createTable($table);       
        
        $installer->endSetup();
    }
}
