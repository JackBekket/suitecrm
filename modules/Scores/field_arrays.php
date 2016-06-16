<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$fields_array['Score'] = array (

  'column_fields' => array(
    "id",
    "name",
    "date_entered",
    "date_modified",
    "modified_user_id",
    "created_by",
    "score",
    "valuer_id",
    "parent_type",
    "parent_id",
    "valuer1_id",
  ),

  'list_fields' => array (
    'id', 
    'name', 
    'score',
    'valuer_id',
    'valuer_name',
    'parent_type',
    'parent_name',
    'parent_id',
    'valuer1_name',
    'valuer1_id',
  ),

  'required_fields' => array ('name'=>1, 'score' => 2),

);
?>
