<?php

class Wsu_PrintProducts_Model_CatalogIndex_Data_Printable extends Mage_CatalogIndex_Model_Data_Abstract {
    public function getTypeCode() {
        return Wsu_PrintProducts_Model_Product_Type::TYPE_PRINTABLE_PRODUCT;
    }
}
