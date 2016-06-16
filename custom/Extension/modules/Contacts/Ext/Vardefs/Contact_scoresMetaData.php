<?php
$dictionary['Contact']['relationships']['scores_for_me2'] = array(
  'lhs_module'=> 'Contacts', 'lhs_table'=> 'contacts', 'lhs_key' => 'id',
	'rhs_module'=> 'Scores', 'rhs_table'=> 'scores', 'rhs_key' => 'parent_id',
	'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
	'relationship_role_column_value'=>'Contacts');

$dictionary['Contact']['relationships']['valuer1s_scores'] = array (
      'lhs_module'=> 'Contacts', 'lhs_table'=> 'contacts', 'lhs_key' => 'id',
      'rhs_module'=> 'Scores', 'rhs_table'=> 'scores', 'rhs_key' => 'valuer1_id',
      'relationship_type'=>'one-to-many'
  );
