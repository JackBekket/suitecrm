<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$searchdefs['Houses'] = array (
    'templateMeta' => array (
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' => array (
            'label' => '10',
            'field' => '30',
        ),
    ),
    'layout' => array (
        'basic_search' => array (
            'region' => array (
                'name' => 'region',
                'default' => true,
                'width' => '10%',
            ),
            'city' => array (
                'name' => 'city',
                'default' => true,
                'width' => '10%',
            ),
            'street' => array (
                'name' => 'street',
                'default' => true,
                'width' => '10%',
            ),
            'house' => array (
                'name' => 'house',
                'default' => true,
                'width' => '10%',
            ),
        ),
        'advanced_search' => array (
            'region' => array (
                'name' => 'region',
                'default' => true,
                'width' => '10%',
            ),
            'city' => array (
                'name' => 'city',
                'default' => true,
                'width' => '10%',
            ),
            'street' => array (
                'name' => 'street',
                'default' => true,
                'width' => '10%',
            ),
            'house' => array (
                'name' => 'house',
                'default' => true,
                'width' => '10%',
            ),
        ),
    ),
);
?>
