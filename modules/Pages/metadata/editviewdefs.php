<?php
 if(!defined('sugarEntry'))define('sugarEntry', true);

$module_name = 'Pages';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => array(
        'hideAudit' => true,
        'hidden' => array('<style>
          .button-link {ldelim}
            color: #fff; background-color: #3C8DBC; border: none; padding: 5px 8px 5px 8px;
            -webkit-transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out; -o-transition: all 0.2s ease-out; transition: all 0.2s ease-out;
            text-decoration: none;
            {rdelim}</style>'),
      ),
      'maxColumns' => '1',
      'labelsOnTop' => true,
      'widths' => array (),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/javascript/tinymce4/tinymce.min.js',
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
        array(
          array(
            //'name' => 'additional_info',
            'customCode' => '{$fields.additional_info.value|htmlspecialchars_decode}',
            'hideLabel' => 'true',
          ),
        ),
        array (
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
