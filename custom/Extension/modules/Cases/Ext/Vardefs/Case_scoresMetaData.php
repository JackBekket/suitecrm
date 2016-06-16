<?php
$dictionary['Case']['relationships']['scores_for_me3'] = array(
  'lhs_module'=> 'Cases', 'lhs_table'=> 'cases', 'lhs_key' => 'id',
	'rhs_module'=> 'Scores', 'rhs_table'=> 'scores', 'rhs_key' => 'parent_id',
	'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
	'relationship_role_column_value'=>'Cases');

$dictionary['Case']['relationships']['valuer1s_scores'] = array (
      'lhs_module'=> 'Cases', 'lhs_table'=> 'cases', 'lhs_key' => 'id',
      'rhs_module'=> 'Scores', 'rhs_table'=> 'scores', 'rhs_key' => 'valuer1_id',
      'relationship_type'=>'one-to-many'
  );
