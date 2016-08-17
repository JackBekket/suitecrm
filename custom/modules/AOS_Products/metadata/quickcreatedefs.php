<?php
$module_name = 'AOS_Products';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/AOS_Products/tpls/EditViewHeader.tpl',
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/AOS_Products/js/products.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'part_number',
            'label' => 'LBL_PART_NUMBER',
          ),
        ),
        array (
          'measure',
          array (
            'name' => 'type',
            'label' => 'LBL_TYPE',
          ),
        ),
        array (
          0 => 
          array (
            'name' => 'cost',
            'label' => 'LBL_COST',
          ),
          1 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
        ),
        array (
          0 => 
          array (
            'name' => 'contact',
            'label' => 'LBL_CONTACT',
          ),
        ),
        array ('supplier_name'),
        array ('delivered_by_owner'),
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        array (
          0 => 
          array (
            'name' => 'product_image',
            'customCode' => '{$PRODUCT_IMAGE}',
          ),
        ),
      ),
    ),
  ),
);
?>
