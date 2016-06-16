<?php
 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Score'] = array(
  'table' => 'scores',
  'unified_search' => true,

  'fields' => array (
    'valuer_id' => array(
        'name' => 'valuer_id',
        'vname' => 'LBL_VALUER_ID',
        'required' =>false,
        'type' => 'id',
        'reportable' =>false,
        'importable' => 'required',
        'required' =>false,
    ),
    'valuer_name'=>    array(
        'name'=>'valuer_name',
        'rname'=>'name',
        'id_name'=>'valuer_id',
        'vname'=>'LBL_VALUER_NAME',
        'type'=>'relate',
        'join_name'=>'valuers',
        'table'=>'users',
        'isnull'=>'true',
        'module'=>'Users',
        'link'=>'valuer_name_link',
        'massupdate'=>false,
        'source'=>'non-db'
    ),
    'valuer_name_link' => array (
        'name' => 'valuer_name_link',
        'type' => 'link',
        'relationship' => 'valuers_scores',
        'vname' => 'LBL_VALUER_NAME',
        'link_type' => 'one',
        'module'=>'Users',
        'bean_name'=>'User',
        'source'=>'non-db',
    ),
    'valuer1_id' => array(
        'name' => 'valuer1_id',
        'vname' => 'LBL_VALUER1_ID',
        'required' =>false,
        'type' => 'id',
        'reportable' =>false,
        'importable' => 'required',
        'required' =>false,
    ),
    'valuer1_name'=>    array(
        'name'=>'valuer1_name',
        'rname'=>'name',
        'id_name'=>'valuer1_id',
        'vname'=>'LBL_VALUER1_NAME',
        'type'=>'relate',
        'join_name'=>'valuer1s',
        'table'=>'contacts',
        'isnull'=>'true',
        'module'=>'Contacts',
        'link'=>'valuer1_name_link',
        'massupdate'=>false,
        'source'=>'non-db'
    ),
    'valuer1_name_link' => array (
        'name' => 'valuer1_name_link',
        'type' => 'link',
        'relationship' => 'valuer1s_scores',
        'vname' => 'LBL_VALUER1_NAME',
        'link_type' => 'one',
        'module'=>'Contacts',
        'bean_name'=>'Contact',
        'source'=>'non-db',
    ),

/*'valuer1_type'=>
  array(
  	'name'=>'valuer1_type',
  	'vname'=>'LBL_VALUER1_NAME',
    'type' => 'parent_type',
    'dbType'=>'varchar',
  	'group'=>'valuer1_name',
    'options'=> 'scores_parent_type_display',
  	'required'=>false,
	'len'=>'255',
    'comment' => 'The Sugar object to which the call is related',
),

  'valuer1_name'=>
  array(
	'name'=> 'valuer1_name',
	'parent_type'=>'scores_record_type_display' ,
	'type_name'=>'valuer1_type',
	'id_name'=>'valuer1_id',
    'vname'=>'LBL_LIST_VALUER1_NAME',
	'type'=>'parent',
	'group'=>'valuer1_name',
	'source'=>'non-db',
	'options'=> 'scores_parent_type_display',
  ),

  'valuer1_id' =>
  array (
    'name' => 'valuer1_id',
    'type' => 'id',
    'group'=>'valuer1_name',
    'reportable'=>false,
    'vname'=>'LBL_VALUER1_ID',
  ), */

  'score' =>
  array (
    'name' => 'score',
    'vname' => 'LBL_SCORE',
    'type' => 'enum',
'options'=> 'scores_dom',
 'len'=>'2',
    'required' => true,
    'comment' => 'Score'
  ),

 'parent_type'=>
  array(
  	'name'=>'parent_type',
  	'vname'=>'LBL_PARENT_NAME',
    'type' => 'parent_type',
    'dbType'=>'varchar',
  	'group'=>'parent_name',
    'options'=> 'scores_parent_type_display',
  	'required'=>false,
	'len'=>'255',
    'comment' => 'The Sugar object to which the call is related',
),

  'parent_name'=>
  array(
	'name'=> 'parent_name',
	'parent_type'=>'scores_record_type_display' ,
	'type_name'=>'parent_type',
	'id_name'=>'parent_id',
    'vname'=>'LBL_LIST_RELATED_TO',
	'type'=>'parent',
	'group'=>'parent_name',
	'source'=>'non-db',
	'options'=> 'scores_parent_type_display',
  ),

  'parent_id' =>
  array (
    'name' => 'parent_id',
    'type' => 'id',
    'group'=>'parent_name',
    'reportable'=>false,
    'vname'=>'LBL_PARENT_ID',
  ),
  ),
);
VardefManager::createVardef('Scores', 'Score', array('default'));
?>
