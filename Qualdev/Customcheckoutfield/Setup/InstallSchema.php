<?php
namespace Qualdev\Customcheckoutfield\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(
		SchemaSetupInterface $setup, 
		ModuleContextInterface $context
	){
        $setup->startSetup();

        $quote = $setup->getTable('quote');
        $salesOrder = $setup->getTable('sales_order');
		
		
		$setup->getConnection()->addColumn(
			$quote,
			'customcheckoutfield',
			[
				'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				'nullable' => true,
				'comment' =>'Customcheckoutfield'
			]
		);
		
		$setup->getConnection()->addColumn(
			$salesOrder,
			'customcheckoutfield',
			[
				'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				'nullable' => true,
				'comment' =>'Customcheckoutfield'
			]
		);
		
        $setup->endSetup();
    }
}
