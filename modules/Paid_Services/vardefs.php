<?php
/*
global $dictionary;
if(empty($dictionary['AOS_Product_Categories'])){
	include('modules/AOS_Product_Categories/vardefs.php');
  $dictionary['Paid_Service']=$dictionary['AOS_Product_Categories'];
 */
$dictionary['Paid_Service'] = array(
    'table' => 'aos_product_categories',
    'audited' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'is_parent' =>
            array(
                'required' => false,
                'name' => 'is_parent',
                'vname' => 'LBL_IS_PARENT',
                'type' => 'bool',
                'massupdate' => '0',
                'default' => '0',
                'no_default' => false,
                'comments' => '',
                'help' => '',
                'importable' => 'true',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => '0',
                'audited' => false,
                'reportable' => true,
                'unified_search' => false,
                'merge_filter' => 'disabled',
                'id' => 'AOS_Product_Categoriesis_parent',
            ),
        "products2" => array(
            'name' => 'products2',
            'type' => 'link',
            'source' => 'non-db',
//            'relationship' => 'product_categories',
            'relationship' => 'products2',
            'side' => 'right',
            'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
        ),

        'parent_category' =>
            array(
                'name' => 'parent_category',
                'type' => 'link',
                'relationship' => 'sub_product_categories',
                'module' => 'AOS_Product_Categories',
                'bean_name' => 'AOS_Product_Categories',
                'link_type' => 'one',
                'source' => 'non-db',
                'vname' => 'LBL_PARENT_CATEGORY',
                'side' => 'right',
            ),
        "parent_category_name" => array(
            'name' => 'parent_category_name',
            'type' => 'relate',
            'source' => 'non-db',
            'vname' => 'LBL_PRODUCT_CATEGORYS_NAME',
            'save' => true,
            'id_name' => 'parent_category_id',
            'link' => 'parent_category',
            'table' => 'aos_product_categories',
            'module' => 'AOS_Product_Categories',
            'rname' => 'name',
        ),
        "parent_category_id" => array(
            'name' => 'parent_category_id',
            'type' => 'id',
            'reportable' => false,
            'vname' => 'LBL_PARENT_CATEGORY_ID',
            'default' => 'PaidServices'
        ),

    ),
    'relationships' => array(
        "products2" => array(
            'lhs_module' => 'Paid_Services',
            'lhs_table' => 'aos_product_categories',
            'lhs_key' => 'id',
            'rhs_module' => 'AOS_Products',
            'rhs_table' => 'aos_products',
            'rhs_key' => 'aos_product_category_id',
            'relationship_type' => 'one-to-many',
        ),

    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('Paid_Services', 'Paid_Service', array('basic'));
