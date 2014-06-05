<?php
class Wsu_PrintProducts_Model_Product_Type extends Mage_Catalog_Model_Product_Type_Abstract { //extends Mage_Catalog_Model_Product_Type_Virtual {//
	
	        
    /*const TYPE_AFFILIATE          = 'affiliate';
    const XML_PATH_AUTHENTICATION = 'catalog/affiliate/authentication';
 
    protected function _prepareProduct(Varien_Object $buyRequest, $product, $processMode) {
        if ($this->_isStrictProcessMode($processMode)) {
            return Mage::helper('wsu_printproducts')->__(
                'Event product %s cannot be added to cart. ' .
                ' On the product detail page click the "Go to parent site"'.
                ' button to access the product.',
                $product->getName()
            );
        }
        return parent::_prepareProduct($buyRequest, $product, $processMode);
    }*/
	
	
	const TYPE_PRINTABLE_PRODUCT = 'printable';
}