<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Houses'),
    ),

    'where' => '',

    'list_fields' => array(
        'region' => array(
            'vname' => 'LBL_REGION',
            'width' => '15%',
        ),
        'city' => array(
            'vname' => 'LBL_CITY',
            'width' => '15%',
        ),
        'street' => array(
            'vname' => 'LBL_STREET',
            'width' => '15%',
        ),
        'house' => array(
            'vname' => 'LBL_HOUSE',
            'width' => '15%',
        ),
        'assigned_user_name'=>array(
          'vname' => 'LBL_LIST_ASSIGNED_USER_ID',
          'widget_class' => 'SubPanelDetailViewLink',
          'module' => 'Users',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Users',
          'width' => '15%',
           'sortable'=>false,	
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => 'Houses',
            'width' => '4%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => 'Houses',
            'width' => '5%',
        ),
    ),
);

?>
