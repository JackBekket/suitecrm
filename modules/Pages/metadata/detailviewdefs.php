<?php

$module_name = 'Pages';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
        'hidden' => array('<style>
          .button-link {ldelim}
            color: #fff; background-color: #3C8DBC; border: none; padding: 5px 8px 5px 8px;
            -webkit-transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out; -o-transition: all 0.2s ease-out; transition: all 0.2s ease-out;
            text-decoration: none;
            {rdelim}</style>'),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        array (
          'name',
          'page_group'
        ),
        array ('code', null),
        array (
          0 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
        ),
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        array (
          0 => 
          array (
            'name' => 'additional_info',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_INFO',
            'customCode' => '{$fields.additional_info.value|htmlspecialchars_decode}',
          ),
        ),
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'customCode' => '{$fields.description.value}',
          ),
        ),
      ),
    ),
  ),
);
?>
