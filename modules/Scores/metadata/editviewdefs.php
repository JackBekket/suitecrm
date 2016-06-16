<?php

$viewdefs ['Scores'] = array ( 'EditView' => 
  array (
    'templateMeta' => array (
      'form' =>  array (
        'buttons' => array (
           'SAVE',
           'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => array (
        array (
          'label' => '10',
          'field' => '30',
        ),
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => array (
      'lbl_score_information' => array (
        array ('parent_name', 'status'),       
        array ('score','valuer_name'),
        array ('name','valuer1_name'),
        array ('date_score', 'description'),
      ),
      
    ),
  ),
);
?>
