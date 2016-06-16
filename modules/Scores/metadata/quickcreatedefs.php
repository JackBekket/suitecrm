<?php

$viewdefs ['Scores'] = array (
    'QuickCreate' => array (
        'templateMeta' => array (
            'form' => array (
                // 'form' =>
                //array (
                //  'enctype' => 'multipart/form-data',
                //),
                'buttons' => array (
                    'SAVE',
                    'CANCEL',
                ),
            ),
            'maxColumns' => '2',
            'widths' => array (
                array ('label' => '10', 'field' => '30', ),
                array ('label' => '10', 'field' => '30', ),
            ),
            'useTabs' => false,
        ),
        'panels' => array (
            'default' => array (
                array ('parent_name', 'description'),       
                array ('score','valuer_name'),
                array ('name','valuer1_name'),
                ),
            ),
    ),
);
?>
