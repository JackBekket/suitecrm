<?php

$dictionary['Score']['fields']['Tasks'] = array (
  	'name' => 'Task',
    'type' => 'link',
	'relationship' => 'scores_task',
	'module'=>'Tasks',
	'bean_name'=>'Task',
    'source'=>'non-db',
	'vname'=>'LBL_TASK',
);

$dictionary['Score']['relationships']['scores_task'] = array(
	'lhs_module'=> 'Tasks', 
	'lhs_table'=> 'tasks', 
	'lhs_key' => 'id',
	'rhs_module'=> 'Scores', 
	'rhs_table'=> 'scores', 
	'rhs_key' => 'parent_id',
	'relationship_type'=>'one-to-many',
	'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Scores',
);

$dictionary['Score']['fields']['Cases'] = array (
  'name' => 'Case',
  'type' => 'link',
  'relationship' => 'scores_case',
  'module'=>'Casess',
  'bean_name'=>'Case',
  'source'=>'non-db',
  'vname'=>'LBL_CASE',
  );

$dictionary['Score']['relationships']['scores_case'] = array(
  'lhs_module'=> 'Cases',
  'lhs_table'=> 'cases',
  'lhs_key' => 'id',
  'rhs_module'=> 'Scores',
  'rhs_table'=> 'scores',
  'rhs_key' => 'parent_id',
  'relationship_type'=>'one-to-many',
  'relationship_role_column' => 'parent_type',
  'relationship_role_column_value' => 'Scores',
  );

$dictionary['Score']['fields']['secret'] = array (
    'name' => 'secret',
    'type' => 'text',
    'vname' => 'LBL_SECRET',
    'massupdate' => false,
    'default' => null,
);

$dictionary['Score']['fields']['status'] = array (
    'name' => 'status',
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'audited' => true,
    'options' => 'score_status_dom',
);
$dictionary['Score']['fields']['date_score'] = array (
    'name' => 'date_score',
    'type' => 'date',
    'vname' => 'LBL_DATE_SCORE',
    'audited' => true,
);

?>

