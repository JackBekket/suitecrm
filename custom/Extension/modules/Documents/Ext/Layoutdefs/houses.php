<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['Documents']['subpanel_setup']['houses'] = array(
    'order' => 50,
    'title_key' => 'LBL_HOUSES_SUBPANEL_TITLE',
    'sort_order' => 'asc',
    'sort_by' => 'date_entered',
    'module'=>'Houses',
    'top_buttons' => array (
         0 => array (
             'widget_class' => 'SubPanelTopButtonQuickCreate',
             ),
         1 => array (
             'widget_class' => 'SubPanelTopSelectButton',
             'mode' => 'MultiSelect',
             ),
      ),
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'houses',
);
