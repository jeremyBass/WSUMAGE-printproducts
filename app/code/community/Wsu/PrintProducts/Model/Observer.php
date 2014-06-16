<?php

class Wsu_PrintProducts_Model_Observer extends Mage_Admin_Model_Observer {
	
	
    public function catalog_product_new_action($observer) {
		
		//check that we haven't made the option already
		$product = $observer->getEvent()->getProduct();

		$option = array(
			'title' => 'Auto Date & Time',
			'type' => 'date_time',
			'is_require' => 1,
			'sort_order' => 0,
			'is_delete' => '',
			'previous_type' => '',
			'previous_group' => '',
			'price' => '0.00',
			'price_type' => 'fixed',
			'sku' => ''
		);

		$product->setCanSaveCustomOptions(true);
		$product->getOptionInstance()->addOption($option);  
		$product->setHasOptions(true);



		//var_dump($observer);
		//var_dump($product);
		//die("ending it? please");
	}
}