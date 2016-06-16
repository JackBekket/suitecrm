<?php
$dictionary['User']['relationships']['valuers_scores'] = array (
      'lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
      'rhs_module'=> 'Scores', 'rhs_table'=> 'scores', 'rhs_key' => 'valuer_id',
      'relationship_type'=>'one-to-many'
  );
