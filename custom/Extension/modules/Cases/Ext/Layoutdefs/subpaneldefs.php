<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['Cases']['subpanel_setup']['scores_for_me3'] = array(
			'order' => 50,
			'title_key' => 'LBL_SCORES_FOR_ME_SUBPANEL_TITLE',
			'sort_order' => 'asc',
			'sort_by' => 'date_entered',
			'module'=>'Scores',
      'top_buttons' => array (
         0 => array (
             'widget_class' => 'SubPanelTopButtonQuickCreate',
//             'widget_class' => 'SubPanelTopButtonContactQuickCreate',
             ),
         1 => array (
             'widget_class' => 'SubPanelTopSelectButton',
             'mode' => 'MultiSelect',
             ),
      ),
			'subpanel_name' => 'default',
			'get_subpanel_data' => 'scores_for_me3',
);

?>
