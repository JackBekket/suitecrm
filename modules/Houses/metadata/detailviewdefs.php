<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['Houses']['DetailView'] = array (
    'templateMeta' => array (
        'form' => array (
            'buttons' => array (
                'EDIT',
                'DUPLICATE',
                'DELETE',
            )
        ),
        'maxColumns' => '2',
        'widths' => array (
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array (
        'LBL_PANEL_ADDRESS' => array (
            array ('region', 'city'),
            array ('street', 'house'),
            array ('start_service_date', null),
        ),
        'LBL_PANEL_HOUSE_INFO' => array (
          array ('type', 'serialnum'),
          array ('build_date', 'start_date'),
          array ('stages_min', 'stages_max'),
          array ('living_premises', 'nonliving_premisees')
        ),
        'LBL_PANEL_PREMISES_INFO' => array (
          array ('heating', 'sewarage'),
          array ('cold_water_supply', 'hot_water_supply'),
          array ('gas_supply', 'water_heater_type'), 
          array ('cooker_type', 'bath_presence'), 
          array ('rubbish_chute_presence', null),
        ),
        'LBL_PANEL_AREAS' => array (
          array ('total_area', 'living_premises_area'),
          array ('living_premises_area', 'nonliving_premises_area'),
          array ('total_premises_area', 'total_property_area')
        ),
        'LBL_ADDITIONAL_INFO' => array (
          array ('living_house_type', 'wear_house'),
          array ('fundation_type', 'wear_fundation'),
          array ('wall_material', 'wear_walls'),
          array ('overlap_material', 'wear_overlaps'),
          array ('roof_material', 'inventorynum'),
          array ('overhaul_date', 'cadastralnum'),
          array ('lifts_count', 'yard_area'),
          array ('accounts_count', 'territory_area'),
          array ('residents_count', 'house_specifications'),
        ),
		'LBL_PANEL_ASSIGNMENT' => array (
			array (
				array (
					'name' => 'assigned_user_name',
					'label' => 'LBL_ASSIGNED_TO_NAME',
				),
				array (
					'name' => 'date_modified',
					'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
					'label' => 'LBL_DATE_MODIFIED',
				),
			),
			array (
				array (
					'name' => 'date_entered',
					'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
					'label' => 'LBL_DATE_ENTERED',
				),
			),
		),
    ),
);

?>
