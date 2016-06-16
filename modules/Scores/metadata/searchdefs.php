<?php

$searchdefs ['Scores'] = array ( 
  'layout' => array (
    'basic_search' => array (
      'parent_name' => array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'score' => array (
        'name' => 'score',
        'default' => true,
        'width' => '10%',
      ),
	'valuer_name' => array (
	'name' => 'valuer_name',
	'default'=> true,
	'width'=> '10%',
	),
        'valuer1_name' => array (
	'name' => 'valuer1_name',
	'default'=> true,
	'width'=> '10%',
        ),
    ),
    'advanced_search' => array (
      'name' => array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'score' => array (
        'name' => 'score',
        'default' => true,
        'width' => '10%',
      ),
	'valuer_name' => array (
	'name' => 'valuer_name',
	'default'=> true,
	'width'=> '10%',
	),
        'valuer1_name' => array (
	'name' => 'valuer1_name',
	'default'=> true,
	'width'=> '10%',
        ),
        'parent_name' => array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),

    ),
    'templateMeta' => array (
      'maxColumns' => '2',
      'maxColumnsBasic' => '2', 
      'widths' => array (
        'label' => '10',
        'field' => '30',
      ),
    ),
  ),
);
?>
