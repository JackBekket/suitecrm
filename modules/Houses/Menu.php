<?php

global $mod_strings, $app_strings, $sugar_config;

if ( ACLController::checkAccess('Houses', 'edit', true) ) {
    $module_menu[] = array (
        "index.php?module=Houses&action=EditView&return_module=Houses&return_action=index",
        $mod_strings['LNK_NEW_HOUSES'],
        "CreateHouse",
        'Houses'
    );
}

if ( ACLController::checkAccess('Houses', 'list', true) ) {
    $module_menu[] = array (
        "index.php?module=Houses&action=index&return_module=Houses&return_action=DetailView",
        $mod_strings['LNK_HOUSES_LIST'],
        "Houses",
        'Houses'
    );
}
if ( ACLController::checkAccess('Houses', 'import', true) ) {
    $module_menu[] = array (
        "index.php?module=Import&action=Step1&import_module=Houses&return_module=Houses&return_action=index",
        $mod_strings['LNK_IMPORT_HOUSES'],
        "Import",
        'Houses'
    );
}

?>
