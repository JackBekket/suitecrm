<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$listViewDefs['Houses'] = array (
    'STREET' => array (
        'label' => 'LBL_STREET',
        'default' => true,
        'link' => true,
    ),
    'HOUSE' => array (
        'label' => 'LBL_HOUSE',
        'default' => true,
    ),

    'REGION' => array (
        'label' => 'LBL_REGION',
        'default' => true,
    ),
    'CITY' => array (
        'label' => 'LBL_CITY',
        'default' => true,
    ),
    'TOTAL_PREMISES_AREA' => array (
        'label' => 'LBL_TOTAL_PREMISES_AREA',
        'default' => true,
    ),
	'CREATED_BY_NAME' => array(
        'width' => '10', 
        'label' => 'LBL_CREATED'),
    'ASSIGNED_USER_NAME' => array(
        'width' => '10', 
        'label' => 'LBL_LIST_ASSIGNED_USER',
        'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true),
    'MODIFIED_BY_NAME' => array(
        'width' => '10', 
        'label' => 'LBL_MODIFIED'),
    'DATE_ENTERED' => array(
        'width' => '10', 
        'label' => 'LBL_DATE_ENTERED',
		'default' => true)       
);
?>
