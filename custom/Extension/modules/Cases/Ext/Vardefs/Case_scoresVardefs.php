<?php
$dictionary['Case']['fields']['scores_for_me3'] = array (
  	'name' => 'scores_for_me3',
    'type' => 'link',
    'relationship' => 'scores_for_me3',
    'source'=>'non-db',
		'vname'=>'LBL_SCORES_FOR_ME',
  );

$dictionary["Case"]["fields"]['scores_in_parent_detail'] = array(
    'required' => false,
    'name' => 'scores_in_parent_detail',
    'vname' => 'LBL_SCORES_IN_PARENT_DETAIL',
    'type' => 'function',
    'source' => 'non-db',
    'massupdate' => 0,
    'studio' => 'visible',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'inline_edit' => false,
    'function' =>
    array (
        'name' => 'get_scores_in_parent_detail_html',
        'returns' => 'html',
        'include' => 'modules/Scores/parent_detail.php'
    ),
);
