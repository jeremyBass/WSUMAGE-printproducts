<?php
/* 
 * @category  Event Manager Module
 * @package   Wsu_PrintProducts 
 * @author    Jeremy Bass <jeremy.bass@wsu.edu>
 * @license   MIT/GPL
 * @link N/A 
 */

/**
 * @var $installer Mage_Core_Model_Resource_Setup
 */
$installer = $this;
$installer->startSetup();

$SU_helper = Mage::helper('storeutilities/utilities');



$defaultAttrSetId = Mage::getModel('catalog/product')->getDefaultAttributeSetId();
$setInfo = $SU_helper->createAttributeSet("Print_Product",
						  $defaultAttrSetId,
						  array('Gift Options','Recurring Profile'),
						  array('enable_googlecheckout','weight','manufacturer','color','msrp_enabled','msrp_display_actual_price_type','msrp')
					 );


/**  tmp samples
 * Creating table wsu_printproducts

 $table_eventtickets = $installer->getTable('wsu_printproducts/eventtickets');
$installer->run("
	DROP TABLE IF EXISTS `{$table_eventtickets}`;
	CREATE TABLE `{$table_eventtickets}` (
		`eventtickets_id` int(10) NOT NULL AUTO_INCREMENT,
		`title` varchar(255) NULL,
		`details` text NULL,
		`venue` text NULL,
		`eligibility` text NULL,
		`entry_fee` varchar(255) NOT NULL DEFAULT '0.0.0.0',
		`image` text NULL,
		`published_at` timestamp,
		`created_at` timestamp,
		`reported_at` timestamp,
		`updated_at` timestamp,
	  PRIMARY KEY (`eventtickets_id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
");
  */
/* $connection = $this->getConnection();
$connection->addColumn($this->getTable('wsu_printproducts/eventtickets'), "spam","TINYINT(1) UNSIGNED DEFAULT 0");
 
 
$table = $installer->getConnection()
    ->newTable($installer->getTable('wsu_printproducts/eventtickets'))->addIndex($installer->getIdxName(
            $installer->getTable('wsu_printproducts/eventtickets'),
            array('published_at'),
            Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
        ),
        array('published_at'),
        array('type' => Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX)
    )
    ->setComment('Event item');

$installer->getConnection()->createTable($table);


$installer->addAttribute(
    Mage_Catalog_Model_Product::ENTITY,
    'affiliate_link',
    array(
        'type'                    => 'text',
        'backend'                 => '',
        'frontend'                => '',
        'label'                   => 'Affiliate Link',
        'input'                   => 'text',
        'class'                   => '',
        'source'                  => '',
        'global'                  => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'                 => true,
        'required'                => true,
        'user_defined'            => false,
        'default'                 => '',
        'searchable'              => false,
        'filterable'              => false,
        'comparable'              => false,
        'visible_on_front'        => false,
        'unique'                  => false,
        'apply_to'                => 'event',
        'is_configurable'         => false,
        'used_in_product_listing' => false
    )
);

	$fieldList = array(
		'price',
		'special_price',
		'special_from_date',
		'special_to_date',
		'minimal_price',
		'cost',
		'tier_price',
		'weight',
		'tax_class_id'
	);

	// make these attributes applicable to downloadable products
	foreach ($fieldList as $field) {
		$applyTo = explode(',',$installer->getAttribute('catalog_product', $field, 'apply_to'));
		if (!in_array('event', $applyTo)) {
			$applyTo[] = 'event';
			$installer->updateAttribute('catalog_product', $field, 'apply_to', join(',', $applyTo));
		}
	}

	$installer->addAttribute(
		Mage_Catalog_Model_Product::ENTITY,
		'product_type', array(
			'group'             => 'Product Options',
			'label'             => 'Product Type',
			'note'              => '',
			'type'              => 'int',    //backend_type
			'input'             => 'select', //frontend_input
			'frontend_class'    => '',
			'source'            => 'wsu_printproducts/attribute_source_type',
			'backend'           => '',
			'frontend'          => '',
			'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
			'required'          => true,
			'visible_on_front'  => false,
			'apply_to'          => 'simple',
			'is_configurable'   => false,
			'used_in_product_listing'   => false,
			'sort_order'        => 5,
    ));


*/


/* http://schema.org/Place
$table_venues = $installer->getTable('wsu_events_venue');
$installer->run("
    DROP TABLE IF EXISTS `{$table_venues}`;
    CREATE TABLE `{$table_venues}` (
	`venue_id` int(10) NOT NULL AUTO_INCREMENT,
	`updated_at` timestamp,
	`name` varchar(255) NULL,
	`description` text NULL,
	`sameAs` varchar(255) NULL,
	`capacity`  int(10) NOT NULL DEFAULT '1',
	`address` text NULL,
	`telephone` varchar(255) NULL,
	`faxNumber` varchar(255) NULL,
	`geo` text NULL,
	`globalLocationNumber` varchar(255) NULL,
	`isicV4` varchar(255) NULL,
	`logo` varchar(255) NULL,
	`map` varchar(255) NULL,
	PRIMARY KEY (`spamlog_id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
");








$installer->addAttribute(
    Mage_Catalog_Model_Product::ENTITY,
    'affiliate_link',
    array(
        'type'                    => 'text',
        'backend'                 => '',
        'frontend'                => '',
        'label'                   => 'Affiliate Link',
        'input'                   => 'text',
        'class'                   => '',
        'source'                  => '',
        'global'                  => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'                 => true,
        'required'                => true,
        'user_defined'            => false,
        'default'                 => '',
        'searchable'              => false,
        'filterable'              => false,
        'comparable'              => false,
        'visible_on_front'        => false,
        'unique'                  => false,
        'apply_to'                => 'event',
        'is_configurable'         => false,
        'used_in_product_listing' => false
    )
);





 */


