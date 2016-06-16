<?php
$dictionary['Account']['relationships']['scores_for_me'] = array(
  'lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
	'rhs_module'=> 'Scores', 'rhs_table'=> 'scores', 'rhs_key' => 'parent_id',
	'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
	'relationship_role_column_value'=>'Accounts');
