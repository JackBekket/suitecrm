<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['Houses']['EditView'] = array (
    'templateMeta' => array (
        'maxColumns' => '2',
        'widths' => array (
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
        'includes' => array (
        ),
        'form' => array (
            'hidden' => array (
            ),
        ),
    ),
    'panels' => array (
        'LBL_PANEL_ADDRESS' => array (
            array ('region', 'city'),
            array ('street', 'house'),
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
          array ('water_heater_type', 'cooker_type'),
          array ('bath_presence', 'rubbish_chute_presence'),
        ),
        'LBL_PANEL_AREAS' => array (
          array ('total_area', 'living_premises_area'),
          array ('living_premises_area', 'nonliving_premises_area'),
          array ('total_premises_area', 'total_property_area')
        ),
      'LBL_PANEL_ASSIGNMENT' =>
      array (
        array (
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
);

?>
