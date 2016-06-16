<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
		$subpanel_layout = array(
	
		'top_buttons' => array(
                array (
                         'widget_class'=>'SubPanelTopCreateButton',
                                ),
                        array (
                         'widget_class'=>'SubPanelTopSelectButton', 'popup_module' => 'Scores'
                                ),

		),
	
		'where' => '',
	
	
		'list_fields' => array(
	        'name'=>array(
			 	'vname' => 'LBL_LIST_NAME',
				'widget_class' => 'SubPanelDetailViewLink',
				'width' => '70%',
			),  /*
	        'region_name'=>array(
			 	'vname' => 'LBL_LIST_REGION_NAME',
				'widget_class' => 'SubPanelDetailViewLink',
                                'target_module' => 'Regions',
                                'module' => 'Regions',
                                'target_record_key' => 'region_id',
				'width' => '70%',
			), 
                'region_id' => array (
                        'usage'=>'query_only',
                ), */
	        'valuer_name'=>array(
			 	'vname' => 'LBL_LIST_VALUER_NAME',
				'widget_class' => 'SubPanelDetailViewLink',
                                'target_module' => 'Users',
                                'module' => 'Users',
                                'target_record_key' => 'valuer_id',
				'width' => '30%',
			), 
                'valuer_id' => array (
                        'usage'=>'query_only', 
                ), 
                'valuer1_name'=>array(
                                'vname' => 'LBL_LIST_VALUER1_NAME',
                                'widget_class' => 'SubPanelDetailViewLink',
                                'target_module' => 'Contacts',
                                'module' => 'Contacts',
                                'target_record_key' => 'valuer1_id',
				'width' => '30%',
			), 
                'valuer1_id' => array (
                        'usage'=>'query_only', 
                ), 

	        'score'=>array(
			 	'vname' => 'LBL_LIST_SCORE',
				'widget_class' => 'SubPanelDetailViewLink',
				'width'=> '10%',
			),



		),
	);
?>
