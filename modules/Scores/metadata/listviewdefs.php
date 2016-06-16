<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$listViewDefs['Scores'] = array(
  'NAME' => array(
    'width' => '40', 
    'label' => 'LBL_LIST_NAME', 
    'default' => true
  ),
/* 
 'REGION_NAME' => array(
    'width' => '40', 
    'label' => 'LBL_LIST_REGION_NAME', 
    'default' => true,
    'link' => true,
    'id' => 'REGION_ID',
    'module' => 'Regions',
    'ACLTag' => 'REGIONS',
    'related_fields' => array ('region_id'),
  ),
*/
  'SCORE' => array(
    'width' => '40', 
    'label' => 'LBL_LIST_SCORE', 
    'default' => true
  ),
'DESCRIPTION'=> array(
'width'=> '40',
'label'=> 'LBL_LIST_DESCRIPTION',
'default'=> true
),
/* !!!
'VALUER_NAME'=> array(
'width'=> '40',
'label'=> 'LBL_LIST_VALUER_NAME',
'default'=> true
),
'VALUER1_NAME'=> array(
'width'=> '40',
'label'=> 'LBL_LIST_VALUER1_NAME',
'default'=> true
),
'PARENT_NAME'=> array(
        'width'   => '20', 
        'label'   => 'LBL_LIST_RELATED_TO',
        'dynamic_module' => 'PARENT_TYPE',
        'id' => 'PARENT_ID',
        'link' => true, 
        'default' => true,
        'sortable' => false,        
        'ACLTag' => 'PARENT',
        'related_fields' => array('parent_id', 'parent_type')),
        */
);
?>
