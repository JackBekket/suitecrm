<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings;

$popupMeta = array('moduleMain' => 'Scores',
						'varName' => 'SCORE',
						'orderBy' => 'scores.name',
						'whereClauses' => 
							array('name' => 'scores.name'),
						'searchInputs' =>
							array('name'),
						'listviewdefs' => array(
											'NAME' => array(
												'width'   => '30',  
												'label'   => 'LBL_LIST_NAME', 
												'link'    => true,
										        'default' => true),
											'SCORE' => array(
												'width'   => '30',  
												'label'   => 'LBL_LIST_SCORE', 
										        'default' => true),
										
						                                 ),
										 
						'searchdefs'   => array(
										 	'name'
										  )
						);


?>
