<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['Paid_Services'] = array(
	'subpanel_setup' => array(
        'products2' => array (
            'order' => 100,
            'module' => 'AOS_Products',
            'subpanel_name' => 'default',
            'sort_order' => 'asc',
            'sort_by' => 'id',
            'title_key' => 'LBL_AOS_PRODUCTS_SUBPANEL_TITLE',
            'get_subpanel_data' => 'products2',
            'top_buttons' =>
            array (
                0 =>
                array (
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
                1 =>
                array (
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
            ),
        ),
    ),
);

/*
include('modules/AOS_Product_Categories/metadata/subpaneldefs.php');
$layout_defs['Paid_Services']['subpanel_setup']['products2'] = $layout_defs['AOS_Product_Categories']['subpanel_setup']['aos_products'];
 */
?>
