<?php
namespace Qualdev\Airmiles\Setup;

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
			'airmiles',
			[
				'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				'nullable' => true,
				'comment' =>'Airmiles'
			]
		);
		
		$setup->getConnection()->addColumn(
			$salesOrder,
			'airmiles',
			[
				'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				'nullable' => true,
				'comment' =>'Airmiles'
			]
		);
		
        $setup->endSetup();
    }
}