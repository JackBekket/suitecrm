<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$listViewDefs['Main_Photos'] = array(
  'DOCUMENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'bold' => true,
  ),
  'FILENAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_FILENAME',
    'link' => true,
    'default' => true,
    'bold' => false,
    'displayParams' => array ( 'module' => 'Documents', ),
    'sortable' => false,
    'related_fields' => 
    array (
        0 => 'document_revision_id',
        1 => 'doc_id', 
        2 => 'doc_type',
        3 => 'doc_url',
    ),
  ),
);
?>
